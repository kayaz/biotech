@extends('layouts.page')

@section('meta_title', $page->title)
@section('seo_title', '')
@section('seo_description', '')

@section('pageheader')
    @include('layouts.partials.page-header', ['page' => $page, 'header_file' => 'page.jpg'])
@stop

@section('content')
<div id="news">
    @foreach($news as $key => $n)
        <div class="container">
            <div class="@if($n->file) {{ $key % 2 == 0 ? 'row' : 'row flex-row-reverse' }} @else row @endif">
                @if($n->file)
                <div class="col-6">
                    @if($n->type == 1)
                    <a href="{{route('front.news.show', $n->slug)}}">
                    @else
                    <a href="{{ $n->url }}" target="_blank">
                    @endif
                        <picture>
                            <source type="image/webp" srcset="{{asset('uploads/articles/thumbs/webp/'.$n->file_webp) }}">
                            <source type="image/jpeg" srcset="{{asset('uploads/articles/thumbs/'.$n->file) }}">
                            <img src="{{asset('uploads/articles/thumbs/'.$n->file) }}" alt="{{ $n->title }}" width="1024" height="576">
                        </picture>
                    </a>
                </div>
                @endif
                <div class="@if($n->file) col-6 @else col-12 @endif d-flex align-items-center">
                    <div class="news-list-text @if($n->file) {{ $key % 2 == 0 ? 'ps-5' : 'pe-5' }} @endif">
                        <span class="news-date">{{ $n->date }}</span>
                        <h2>
                            @if($n->type == 1)
                            <a href="{{route('front.news.show', $n->slug)}}">
                            @else
                            <a href="{{ $n->url }}" target="_blank">
                            @endif
                                {{ $n->title }}
                            </a>
                        </h2>
                        @if($n->type == 1)
                        <a href="{{route('front.news.show', $n->slug)}}" class="btn btn-theme btn-theme-blue btn-md mt-4">CZYTAJ WIĘCEJ</a>
                        @else
                        <a href="{{ $n->url }}" target="_blank" class="btn btn-theme btn-theme-blue btn-md mt-4">CZYTAJ WIĘCEJ</a>
                        @endif
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-4 pt-5 pb-5">
                    <hr class="mt-3 mb-3">
                </div>
            </div>
        </div>
    @endforeach
</div>
@endsection