<header>
    <div id="header" class="container-fluid">
        <div class="row no-gutters">
            <div class="col-4">
                <div id="logo">
                    <a href="/" title="{{ settings()->get("page_logo_title") }}z">
                        <img src="{{ asset('/images/logo.png') }}" alt="{{ settings()->get("page_logo_alt") }}">
                    </a>
                </div>
            </div>
            <div class="col-8 p-0">
                <nav>
                    <ul class="mb-0 list-unstyled">
                        <li class="nav-menu-item">
                            <a href="{{ route('about') }}">@lang('cms.menu-about')</a>
                        </li>
                        <li class="nav-menu-item">
                            <a href="{{ route('technology') }}">@lang('cms.menu-technology')</a>
                        </li>
                        <li class="nav-menu-item">
                            <a href="{{ route('products.index') }}">@lang('cms.menu-products')</a>
                            <ul class="submenu mb-0 list-unstyled">
                                @foreach($menu_products as $mp)
                                    <li><a href="{{ route('products.show', $mp->slug) }}">{{ $mp->name }}</a></li>
                                @endforeach
                            </ul>
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