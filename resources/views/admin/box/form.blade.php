@extends('admin.layout')
@section('meta_title', '- '.$cardTitle)

@section('content')
    @if(Route::is('admin.box.edit'))
        <form method="POST" action="{{route('admin.box.update', $entry->id)}}" enctype="multipart/form-data">
            @method('PUT')
            @else
                <form method="POST" action="{{route('admin.box.store')}}" enctype="multipart/form-data">
                    @endif
                    @csrf
                    <div class="container">
                        <div class="card-head container">
                            <div class="row">
                                <div class="col-12 pl-0">
                                    <h4 class="page-title"><i class="fe-grid"></i><a href="{{route('admin.box.index')}}" class="p-0">Boksy z obrazkami</a><span class="d-inline-flex me-2 ms-2">/</span>{{ $cardTitle }}</h4>
                                </div>
                            </div>
                        </div>
                        <div class="card mt-3">
                            @include('form-elements.back-route-button')
                            <div class="card-body control-col12">
                                @if(!Request::get('lang'))
                                <div class="row w-100 form-group">
                                    @include('form-elements.html-select', ['label' => 'Kategoria', 'name' => 'place_id', 'selected' => $entry->place_id, 'select' => [
                                            '1' => 'Strona główna'
                                        ]])
                                </div>
                                @endif
                                <div class="row w-100 form-group">
                                    @include('form-elements.html-input-text', ['label' => 'Nazwa', 'name' => 'title', 'value' => $entry->title, 'required' => 1])
                                </div>
                                <div class="row w-100 form-group">
                                    @include('form-elements.html-input-text', ['label' => 'Tekst', 'name' => 'text', 'value' => $entry->text, 'required' => 1])
                                </div>
                                @if(!Request::get('lang'))
                                <div class="row w-100 form-group">
                                    @include('form-elements.html-input-file', ['label' => 'Obrazek', 'sublabel' => '(wymiary: '.config('images.box.width').'px / '.config('images.box.height').'px)', 'name' => 'file'])
                                </div>
                                @endif
                                <div class="row w-100 form-group">
                                    @include('form-elements.html-input-text', ['label' => 'Atrybut ALT zdjęcia', 'name' => 'file_alt', 'value' => $entry->file_alt])
                                </div>
                            </div>
                        </div>
                    </div>
                    <input type="hidden" name="lang" value="{{$current_locale}}">
                    @include('form-elements.submit', ['name' => 'submit', 'value' => 'Zapisz'])
                </form>
@endsection
