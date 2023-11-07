<?php

namespace App\Http\Controllers\Front\Technology;

use App\Http\Controllers\Controller;

//CMS
use App\Models\Page;
use App\Models\Technology;

class IndexController extends Controller
{
    public function index()
    {
        $page = Page::find(3);
        $products = Technology::orderBy('sort', 'ASC')->get();

        return view('front.technology.index')->with([
            'page' => $page,
            'products' => $products
        ]);
    }
}
