<?php

namespace App\Http\Controllers\Front\Product;

use App\Http\Controllers\Controller;

//CMS
use App\Models\Product;
use App\Models\Page;

class IndexController extends Controller
{
    public function show(Product $product)
    {
        $page = Page::find(5);
        return view('front.product.show', compact('page'));
    }
}
