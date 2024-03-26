<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;

// CMS
use App\Models\Article;
use App\Models\Boxes;
use App\Models\Inline;
use App\Models\Page;
use App\Models\Product;
use App\Models\Slider;
use App\Models\Image;

class IndexController extends Controller
{
    public function index()
    {
        $articles = Article::orderBy('date', 'desc')->paginate(10);
        $slider = Slider::orderBy('sort')->get();
        $boxes = Boxes::orderBy('sort')->get();
        $images = Image::where('gallery_id', 1)->orderBy('sort')->get();
        $products = Product::orderBy('sort', 'ASC')->get();

        return view('front.homepage.index', [
            'array' => Inline::getElements(1),
            'articles' => $articles,
            'slider' => $slider,
            'boxes' => $boxes,
            'images' => $images,
            'products' => $products
            ]);
    }

    public function privacypolicy()
    {
        $page = Page::find(6);
        return view('front.privacypolicy.index', ['page' => $page]);
    }
}
