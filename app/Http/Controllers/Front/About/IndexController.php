<?php

namespace App\Http\Controllers\Front\About;

use App\Http\Controllers\Controller;

//CMS
use App\Models\Image;
use App\Models\Page;

class IndexController extends Controller
{
    public function index()
    {
        $page = Page::find(4);
        $images = Image::where('gallery_id', 2)->orderBy('sort')->get();
        return view('front.about.index', compact('page', 'images'));
    }
}
