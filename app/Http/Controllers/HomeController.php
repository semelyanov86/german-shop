<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
use App\Category;
use TCG\Voyager\Models\Page;

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
        return view('welcome', compact('page_title', 'sliders', 'pages', 'description', 'keywords'));
    }
}
