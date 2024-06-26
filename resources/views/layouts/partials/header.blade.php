<header>
    <div id="header" class="container-fluid">
        <div class="row no-gutters">
            <div class="col-2">
                <div id="logo">
                    <a href="/" title="{{ settings()->get("page_logo_title") }}z">
                        <img src="{{ asset('/images/logo.png') }}" alt="{{ settings()->get("page_logo_alt") }}">
                    </a>
                </div>
            </div>
            <div class="col-1 d-flex justify-content-center align-items-center">
                <img src="{{ asset('images/logo_UE_rgb-1.jpg') }}" alt="Unia Europejska">
            </div>
            <div class="col-9 p-0">
                <nav>
                    <ul class="mb-0 list-unstyled">
                        <li class="nav-menu-item">
                            <a href="{{ route('about') }}">@lang('cms.menu-about')</a>
                        </li>
                        <li class="nav-menu-item">
                            <a href="{{ route('technology') }}">@lang('cms.menu-technology')</a>
                            @if (Route::currentRouteName() == 'technology')
                                <ul class="submenu mb-0 list-unstyled">
                                    @foreach($menu_technology as $mp)
                                        <li><a href="#{{$mp->slug}}" class="btn-scroll">{{ $mp->name }}</a></li>
                                    @endforeach
                                </ul>
                            @else
                                <ul class="submenu mb-0 list-unstyled">
                                    @foreach($menu_technology as $mp)
                                        <li><a href="{{ route('technology') }}#{{$mp->slug}}">{{ $mp->name }}</a></li>
                                    @endforeach
                                </ul>
                            @endif
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

                        @if(settings()->get("social_linkedin"))
                        <li class="nav-social-item">
                            <a href="{{ settings()->get("social_linkedin") }}" target="_blank"><i class="lab la-linkedin"></i></a>
                        </li>
                        @endif
                        
                        @if(settings()->get("social_facebook"))
                        <li class="nav-social-item">
                            <a href="{{ settings()->get("social_facebook") }}" target="_blank"><i class="lab la-facebook-square"></i></a>
                        </li>
                        @endif
                        <li class="nav-search">
                            <a href=""><i class="las la-search"></i></a>
                        </li>
                    </ul>
                </nav>
            </div>
        </div>
    </div>
</header>