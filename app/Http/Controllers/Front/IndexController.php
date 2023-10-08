<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;

// CMS
use App\Models\Article;
use App\Models\Boxes;
use App\Models\Inline;
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

        return view('front.homepage.index', [
            'array' => Inline::getElements(1),
            'articles' => $articles,
            'slider' => $slider,
            'boxes' => $boxes,
            'images' => $images
            ]);
    }
}
