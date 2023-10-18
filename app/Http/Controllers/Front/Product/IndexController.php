<?php

namespace App\Http\Controllers\Front\Product;

use App\Http\Controllers\Controller;

//CMS
use App\Models\Product;
use App\Models\Page;

class IndexController extends Controller
{
    public function index()
    {
        $page = Page::find(5);
        $products = Product::orderBy('sort', 'ASC')->get();
        return view('front.product.index', compact('page', 'products'));
    }

    public function show($language, string $slug)
    {
        $page = Page::find(5);
        $product = Product::whereSlug($slug)->first();
        return view('front.product.show', compact('page', 'product'));
    }
}
