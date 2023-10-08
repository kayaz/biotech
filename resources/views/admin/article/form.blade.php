@extends('admin.layout')
@section('meta_title', '- '.$cardTitle)

@section('content')
@if(Route::is('admin.article.edit'))
    <form method="POST" action="{{route('admin.article.update', $entry->id)}}" enctype="multipart/form-data">
    @method('PUT')
@else
    <form method="POST" action="{{route('admin.article.store')}}" enctype="multipart/form-data">
@endif
@csrf
<div class="container">
    <div class="card-head container">
        <div class="row">
            <div class="col-12 pl-0">
                <h4 class="page-title"><i class="fe-book-open"></i><a href="{{route('admin.article.index')}}" class="p-0">Aktualności</a><span class="d-inline-flex me-2 ms-2">/</span>{{ $cardTitle }}</h4>
            </div>
        </div>
    </div>

    <div class="card mt-3">
        @include('form-elements.back-route-button')
        <div class="card-body control-col12">
            @if(!Request::get('lang'))
            <div class="row w-100 form-group">
                @include('form-elements.html-select', ['label' => 'Status', 'name' => 'status', 'selected' => $entry->status, 'select' => ['1' => 'Pokaż na liście', '0' => 'Ukryj na liście']])
            </div>
            <div class="row w-100 form-group">
                @include('form-elements.html-select', ['label' => 'Typ', 'name' => 'type', 'selected' => $entry->type, 'select' => ['1' => 'Wpis na stronie', '0' => 'Link do artykułu']])
            </div>
            <div class="row w-100 form-group">
                @include('form-elements.html-input-text', ['label' => 'Adres url', 'name' => 'url', 'value' => $entry->url])
            </div>
            @endif
            <div class="row w-100 form-group">
                @include('form-elements.html-input-text', ['label' => 'Tytuł wpisu', 'name' => 'title', 'value' => $entry->title, 'required' => 1])
            </div>

            <div class="row w-100 form-group">
            @include('form-elements.html-input-text', ['label' => 'Data', 'name' => 'date', 'value' => $entry->date, 'required' => 1])
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
                    'sublabel' => '(wymiary: '.config('images.article.big_width').'px / '.config('images.article.big_height').'px)',
                    'name' => 'file',
                    'file' => $entry->file,
                    'file_preview' => config('images.article.preview_file_path')
                ])
            </div>
            <div class="row w-100 form-group">
                @include('form-elements.html-input-file', [
                    'label' => 'Zdjęcie Facebook',
                    'sublabel' => '(wymiary: 600 px / 314 px)',
                    'name' => 'file_facebook',
                    'file' => $entry->file_facebook,
                    'file_preview' => config('images.article.facebook_file_path')
                ])
            </div>
                @endif
            <div class="row w-100 form-group">
                @include('form-elements.html-input-text', ['label' => 'Atrybut ALT zdjęcia', 'name' => 'file_alt', 'value' => $entry->file_alt])
            </div>
            <div class="row w-100 form-group">
                @include('form-elements.textarea-fullwidth', ['label' => 'Treść artukułu', 'name' => 'content', 'value' => $entry->content, 'rows' => 21, 'class' => 'tinymce', 'required' => 1])
            </div>
        </div>
    </div>
</div>
<input type="hidden" name="lang" value="{{$current_locale}}">
@include('form-elements.submit', ['name' => 'submit', 'value' => 'Zapisz'])
</form>
@include('form-elements.tintmce')
    @push('scripts')
        <script src="{{ asset('/js/datepicker/bootstrap-datepicker.min.js') }}" charset="utf-8"></script>
        <script src="{{ asset('/js/datepicker/bootstrap-datepicker.pl.min.js') }}" charset="utf-8"></script>
        <link href="{{ asset('/js/datepicker/bootstrap-datepicker.min.css') }}" rel="stylesheet">
        <script>
            const inputDate = $('#date');
            inputDate.datepicker({
                format: 'yyyy-mm-dd',
                language: 'pl'
            }).on('changeDate', function(e){
                $(this).datepicker('hide');
            });
        </script>
    @endpush
@endsection
