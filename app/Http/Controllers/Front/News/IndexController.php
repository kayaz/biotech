<?php

namespace App\Http\Controllers\Front\News;

use App\Http\Controllers\Controller;
use App\Models\Article;
use App\Models\Page;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function index()
    {
        $page = Page::find(2);

        $news = Article::orderBy('date', 'desc')->get();

        return view("front.news.index")->with([
            'page' => $page,
            'news' => $news
        ]);
    }

    public function show($language, $slug)
    {

        $article = Article::where('slug', $slug)->first();
        $page = Page::where('uri', 'aktualnosci')->firstOrFail();

//        $schemaBlog = Schema::BlogPosting()
//            ->mainEntityOfPage(Schema::WebPage()->identifier(route('front.news.show', $article->slug)))
//            ->headline($article->title)
//            ->description($article->content_entry)
//            ->datePublished($article->created_at)
//            ->dateModified($article->updated_at)
//            ->image(Schema::imageObject()->url(asset('uploads/articles/'.$article->file))
//                ->height(Article::IMG_HEIGHT)
//                ->width(Article::IMG_WIDTH))
//            ->author(Schema::person()->name('Autor'));
//
//        $og = OpenGraph::title($article->title)
//            ->type('article')
//            ->image('http://developro.4dl-dev.pl/public/uploads/articles/share/'.$article->file, [
//                'width' => 600,
//                'height' => 314
//            ])
//            ->description($article->content_entry)
//            ->url();

        return view('front.news.show', [
            'page' => $page,
            'article' => $article,
//            'schema' => $schemaBlog,
//            'opengraph' => $og
        ]);
    }
}
