@extends('layouts.page')

@section('meta_title', $page->title)
@section('seo_title', '')
@section('seo_description', '')

@section('content')
    <div id="map">
        <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d38332.58070831899!2d18.02147136999511!3d53.09607292027988!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x470315b766439b01%3A0x94ee3e8fe939efdc!2sInventionBio!5e0!3m2!1spl!2spl!4v1696782993900!5m2!1spl!2spl" width="100%" height="100%" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        <div class="container h-100">
            <div class="row h-100">
                <div class="col-6 d-flex align-items-center">
                    <div class="map-apla">
                        {!! parse_text($page->content) !!}
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div id="contact" class="bg-blue-light">
        <div class="container">
            <div class="row">
                <div class="col-12 text-center text-blue">
                    <h2>@lang('cms.form-title')</h2>
                    <h2 class="d-none">Masz pytania? <span class="text-green">Napisz do nas!</span></h2>
                </div>
            </div>

            <form method="post" id="contact-form" action="{{ route("contact.form") }}" class="validateForm">
                @if (session('success'))
                    <div class="row">
                        <div class="col-12">
                            <div class="alert alert-success border-0">
                                {{ session('success') }}
                            </div>
                        </div>
                    </div>
                @endif
                @if (session('warning'))
                    <div class="row">
                        <div class="col-12">
                            <div class="alert alert-warning border-0">
                                {{ session('warning') }}
                            </div>
                        </div>
                    </div>
                @endif
                {{ csrf_field() }}
                <div class="row">
                    <div class="col-12 col-md-4 form-input">
                        <label for="form_name">@lang('cms.form-label-name') <span class="text-danger">*</span></label>
                        <input name="form_name" id="form_name" class="validate[required] form-control @error('form_name') is-invalid @enderror" type="text" value="{{ old('form_name') }}">

                        @error('form_name')
                        <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>
                        @enderror
                    </div>

                    <div class="col-12 col-md-4 form-input">
                        <label for="form_email">@lang('cms.form-label-email') <span class="text-danger">*</span></label>
                        <input name="form_email" id="form_email" class="validate[required] form-control @error('form_email') is-invalid @enderror" type="text" value="{{ old('form_email') }}">

                        @error('form_email')
                        <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>
                        @enderror
                    </div>
                    <div class="col-12 col-md-4 form-input">
                        <label for="form_phone">@lang('cms.form-label-phone')</label>
                        <input name="form_phone" id="form_phone" class="form-control @error('form_phone') is-invalid @enderror" type="text" value="{{ old('form_phone') }}">

                        @error('form_phone')
                        <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>
                        @enderror
                    </div>
                    <div class="col-12 mt-4 form-input">
                        <label for="form_message">@lang('cms.form-label-message') <span class="text-danger">*</span></label>
                        <textarea rows="5" cols="1" name="form_message" id="form_message" class="validate[required] form-control @error('form_message') is-invalid @enderror">{{ old('form_message') }}</textarea>

                        @error('form_message')
                        <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>
                        @enderror
                    </div>

                    <div class="col-12">
                        <div class="obowiazek">

                        </div>
                    </div>
                    <div class="rodo-rules">

                    </div>

                    <div class="col-12 d-flex">
                        <div class="form-input mb-0 textarea">
                            <input name="page" type="hidden" value="Formularz kontaktowy">
                            <script type="text/javascript">
                                document.write("<button type=\"submit\" class=\"btn btn-theme btn-theme-blue btn-md mt-5\">@lang('cms.form-submit-button')</button>");
                            </script>
                            <noscript><b>Do poprawnego działania, Java musi być włączona.</b></noscript>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection