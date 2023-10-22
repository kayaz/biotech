@extends('layouts.page')

@section('meta_title', $product->name)
@section('seo_title', '')
@section('seo_description', '')

@section('pageheader')
    @include('layouts.partials.page-header', ['page' => $page, 'header_file' => 'page.jpg'])
@stop

@section('content')
    <div id="product">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    {!! $product->text !!}
                </div>
            </div>
        </div>
    </div>

    <div id="features" class="bg-blue-light d-none">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-12 text-center text-blue pt-5 pb-3">
                    <h2>Atuty <span class="text-green">produktu</span></h2>
                </div>
            </div>
            <div class="row">
                <!-- Atuty produktu -->
            </div>
        </div>
    </div>

    <div id="product-video" class="d-none">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <!-- Video placeholder -->
                </div>
            </div>
        </div>
    </div>
@endsection