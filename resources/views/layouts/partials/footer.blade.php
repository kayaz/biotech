<div class="container">
    <div class="row justify-content-center">
        <div class="col-12 col-lg-9">
            <img src="{{ asset('images/FE_POIR_poziom_pl-1_rgb.jpg') }}" alt="Fundusz Regionalny">
        </div>
    </div>
</div>

<footer>
    <div id="footer">
        <div class="container h-100">
            <div class="row h-100">
                <div class="col-4">

                </div>
                <div class="col-8">
                    <nav class="h-100 d-flex align-items-center">
                        <ul class="mb-0 list-unstyled">
                            <li class="nav-menu-item">
                                <a href="">@lang('cms.menu-news')</a>
                            </li>
                            <li class="nav-menu-item">
                                <a href="{{ route('about') }}">@lang('cms.menu-about')</a>
                            </li>
                            <li class="nav-menu-item">
                                <a href="{{ route('technology') }}">@lang('cms.menu-technology')</a>
                            </li>
                            <li class="nav-menu-item">
                                <a href="{{ route('products.index') }}">@lang('cms.menu-products')</a>
                            </li>
                            <li class="nav-menu-item">
                                <a href="{{ route('front.news.index') }}">@lang('cms.menu-news')</a>
                            </li>
                            <li class="nav-menu-item">
                                <a href="{{ route('contact') }}">@lang('cms.menu-contact')</a>
                            </li>

                            <li class="nav-lang-item">
                                <a href="{{ changeLocaleUrl(Route::current(), 'pl') }}">PL</a>
                            </li>
                            <li class="nav-lang-item">
                                <a href="{{ changeLocaleUrl(Route::current(), 'en') }}">EN</a>
                            </li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
    </div>

    <div id="copyrights">
        <div class="container">
            <div class="row d-flex justify-content-center">
                <div class="col-8 text-center">
                    <p>@lang('cms.footer-text')</p>
                    <p class="small"><a href="{{ route('privacy-policy') }}">@lang('cms.privacy-policy')</a></p>
                </div>
            </div>
        </div>
    </div>
</footer>

<!--Google font style-->
<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">