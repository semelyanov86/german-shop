<?php

namespace App\Http\Controllers;

use App\Mail\OrderCreated;
use App\Mail\OrderPlaced;
use App\OrderProduct;
use App\User;
use Illuminate\Http\Request;
use App\Post;
use App\Category;
use Illuminate\Support\Facades\Mail;
use TCG\Voyager\Models\Page;
use App\Product;
use App\Order;
use App\Http\Requests\StoreRequest;

class HomeController extends Controller
{
    public function main()
    {
        $page_title = 'Multikart german shop';
        $category = Category::whereSlug('slider')->first();
        $sliders = $category->posts()->get();
        $pages = Page::all();
        $description = $pages[1]->meta_description;
        $keywords = $pages[1]->meta_keywords;
        $products = Product::where('active', 1)->paginate(20);
        return view('welcome', compact('page_title', 'sliders', 'pages', 'description', 'keywords', 'products'));
    }

    public function edit($id)
    {
        $order = Order::where(['id' => $id, 'placed' => '0'])->firstOrFail();
        $pages = Page::all();
        $page_title = $pages[3]->title;
        $description = $pages[3]->meta_description;
        $keywords = $pages[3]->meta_keywords;
        $products = $order->products;
        return view('edit', compact('order', 'page_title', 'description', 'keywords', 'pages', 'products'));
    }

    public function place($id)
    {
        $order = Order::where(['id' => $id, 'placed' => '0'])->firstOrFail();
        $order->placed = '1';
        $total = $order->total;
        $admin_user = User::whereHas('role', function ($query){
            $query->where('id', 1);
        })->first();
        Mail::to($admin_user)->send(new OrderCreated($order, $total));
        Mail::send(new OrderPlaced($order, $total));
        $order->save();
        $pages = Page::all();
        $page_title = $pages[3]->title;
        $description = $pages[3]->meta_description;
        $keywords = $pages[3]->meta_keywords;
        $products = $order->products;
        return view('result', compact('order', 'page_title', 'description', 'keywords', 'pages', 'products', 'total'));
    }

    public function store(StoreRequest $request)
    {
        $quantityCollect = collect(request()->only('quantity')['quantity']);
        /*$products = $quantityCollect->map(function ($value, $key){
           return Product::whereId($key)->first();
        });*/
        if ($request->other_address == 'on') {
            $other = '1';
        } else {
            $other = '0';
        }
        if ($request->orderid) {
            $order = Order::find($request->orderid);
            $order->user_id = auth()->user() ? auth()->user()->id : null;
            $order->kuddennr = $request->kuddennr;
            $order->email = $request->email;
            $order->name = $request->name;
            $order->other_address = $other;
            $order->street = $request->street;
            $order->city = $request->city;
            $order->postindex = $request->postindex;
            $order->save();
        } else {
            $order = Order::create([
                'user_id' => auth()->user() ? auth()->user()->id : null,
                'kuddennr' => $request->kuddennr,
                'email' => $request->email,
                'name' => $request->name,
                'other_address' => $other,
                'street' => $request->street,
                'city' => $request->city,
                'postindex' => $request->postindex,
                'placed' => '0'
            ]);
        }
        $total = $this->calcQuantity($quantityCollect, $order);
        $order->total = $total;
        $order->save();
        $pages = Page::all();
        $page_title = $pages[3]->title;
        $description = $pages[3]->meta_description;
        $keywords = $pages[3]->meta_keywords;
        $products = $order->products;
        return view('result', compact('order', 'total', 'products', 'page_title', 'description', 'keywords', 'pages'));
    }

    private function calcQuantity($quantityCollect, $order)
    {

        $temp = $quantityCollect->map(function ($name, $id) use ($order){
            return collect($name)->filter(function ($value){
                return $value > 0;
            })->each(function ($item, $key) use ($id, $order){
                OrderProduct::updateOrCreate(['order_id' => $order->id, 'product_id' => $id],[
                    'order_id' => $order->id,
                    'product_id' => $id,
                    'quantity' => $item,
                    'type' => $key
                ]);
            })->pipe(function ($collection) use ($id, $order){
                return $collection->map(function ($value, $k) use ($id, $order){
                    return $value * Product::whereId($id)->first()->$k;
                })->sum();
            });
        });
        return $temp->sum();
    }
}
