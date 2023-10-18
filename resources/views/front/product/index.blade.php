@extends('layouts.page')

@section('meta_title', $page->title)
@section('seo_title', '')
@section('seo_description', '')

@section('pageheader')
    @include('layouts.partials.page-header', ['page' => $page, 'header_file' => 'page.jpg'])
@stop

@section('content')
    <div id="products" class="bg-blue-light">
        <div class="container">
            <div class="row">
                @foreach($products as $p)
                    <div class="col-4">
                        <div class="product-container">
                            <a href="{{ route('products.show', $p->slug) }}">
                                <div class="product">
                                    <img src="{{ asset('/uploads/products/thumbs/'.$p->file) }}" alt="{{ $p->file_alt }}">
                                    <div class="product-desc">
                                        <h2>{{ $p->name }}</h2>
                                        <p>{{ $p->desc }}</p>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
@endsection