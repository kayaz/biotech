@extends('admin.layout')
@section('meta_title', '- '.$cardTitle)

@section('content')
    @if(Route::is('admin.product.edit'))
        <form method="POST" action="{{route('admin.product.update', $entry->id)}}" enctype="multipart/form-data">
            @method('PUT')
            @else
                <form method="POST" action="{{route('admin.product.store')}}" enctype="multipart/form-data">
                    @endif
                    @csrf
                    <div class="container">
                        <div class="card-head container">
                            <div class="row">
                                <div class="col-12 pl-0">
                                    <h4 class="page-title"><i class="fe-book-open"></i><a href="{{route('admin.product.index')}}" class="p-0">Produkty</a><span class="d-inline-flex me-2 ms-2">/</span>{{ $cardTitle }}</h4>
                                </div>
                            </div>
                        </div>

                        <div class="card mt-3">
                            @include('form-elements.back-route-button')
                            <div class="card-body control-col12">
                                <div class="row w-100 form-group">
                                    @include('form-elements.html-input-text', ['label' => 'Nazwa produktu', 'name' => 'name', 'value' => $entry->name, 'required' => 1])
                                </div>

                                <div class="row w-100 form-group">
                                    @include('form-elements.html-input-text', ['label' => 'Opis produktu', 'name' => 'desc', 'value' => $entry->desc, 'required' => 1])
                                </div>

                                <div class="row w-100 form-group">
                                    @include('form-elements.html-input-text-count', ['label' => 'Nagłówek strony', 'sublabel'=> 'Meta tag - title', 'name' => 'meta_title', 'value' => $entry->meta_title, 'maxlength' => 60])
                                </div>

                                <div class="row w-100 form-group">
                                    @include('form-elements.html-input-text-count', ['label' => 'Opis strony', 'sublabel'=> 'Meta tag - description', 'name' => 'meta_description', 'value' => $entry->meta_description, 'maxlength' => 158])
                                </div>

                                @if(!Request::get('lang'))
                                    <div class="row w-100 form-group">
                                        @include('form-elements.html-input-text', ['label' => 'Indeksowanie', 'sublabel'=> 'Meta tag - robots', 'name' => 'meta_robots', 'value' => $entry->meta_robots])
                                    </div>
                                    <div class="row w-100 form-group">
                                        @include('form-elements.html-input-file', [
                                            'label' => 'Zdjęcie',
                                            //'sublabel' => '(wymiary: '.config('images.article.big_width').'px / '.config('images.article.big_height').'px)',
                                            'name' => 'file',
                                            'file' => $entry->file,
                                            'file_preview' => 'uploads/products/thumbs/'
                                        ])
                                    </div>
                                @endif
                                <div class="row w-100 form-group">
                                    @include('form-elements.html-input-text', ['label' => 'Atrybut ALT zdjęcia', 'name' => 'file_alt', 'value' => $entry->file_alt])
                                </div>
                                <div class="row w-100 form-group">
                                    @include('form-elements.textarea-fullwidth', ['label' => 'Treść', 'name' => 'text', 'value' => $entry->text, 'rows' => 21, 'class' => 'tinymce', 'required' => 1])
                                </div>
                            </div>
                        </div>
                    </div>
                    <input type="hidden" name="lang" value="{{$current_locale}}">
                    @include('form-elements.submit', ['name' => 'submit', 'value' => 'Zapisz'])
                </form>
                @include('form-elements.tintmce')
                @push('scripts')
        @endpush
        @endsection
