<?php

namespace App\Http\Controllers;

use App\OrderProduct;
use Illuminate\Http\Request;
use App\Post;
use App\Category;
use TCG\Voyager\Models\Page;
use App\Product;
use App\Order;

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

    public function store(Request $request)
    {
        $quantityCollect = collect(request()->only('quantity')['quantity']);
        $order = Order::create([
            'user_id' => auth()->user() ? auth()->user()->id : null,
            'phone' => $request->phone,
            'email' => $request->email,
            'name' => $request->name,
        ]);
        $total = $this->calcQuantity($quantityCollect, $order);
        $order->total = $total;
        $order->save();
        dd($order);

    }

    private function calcQuantity($quantityCollect, $order)
    {

        $temp = $quantityCollect->map(function ($name, $id) use ($order){
            return collect($name)->filter(function ($value){
                return $value > 0;
            })->each(function ($item, $key) use ($id, $order){
                OrderProduct::create([
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
