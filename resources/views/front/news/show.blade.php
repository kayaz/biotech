@extends('layouts.page')

@section('meta_title', $article->title)
@section('seo_title', '')
@section('seo_description', '')

@section('pageheader')
    @include('layouts.partials.page-header', ['page' => $page, 'header_file' => 'gallery.jpg'])
@stop

@section('content')
    <div id="news" class="news-entry">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-8">
                    <span class="news-date">{{ $article->date }}</span>
                    <h1>{{ $article->title }}</h1>
                    @if($article->file)
                        <picture>
                            <source type="image/webp" srcset="{{asset('uploads/articles/thumbs/webp/'.$article->file_webp) }}">
                            <source type="image/jpeg" srcset="{{asset('uploads/articles/thumbs/'.$article->file) }}">
                            <img src="{{asset('uploads/articles/thumbs/'.$article->file) }}" alt="{{ $article->title }}" width="1024" height="576" class="mb-5">
                        </picture>
                    @endif
                    {!! parse_text($article->content) !!}
                    <a href="{{ route('front.news.index') }}" class="btn btn-theme btn-theme-blue btn-md mt-2">WRÓĆ DO LISTY</a>
                </div>
            </div>
        </div>
    </div>
@endsection