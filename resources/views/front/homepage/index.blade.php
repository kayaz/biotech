@extends('layouts.homepage')

@section('content')

    <div id="slider">
        <div class="container h-100">
            <div class="row h-100">
                <div class="col-6 d-flex align-items-center">
                    <div class="slider-apla pe-5">
                        <h1>
                            <span class="text-green">Bioprzyszłość</span>
                            <span class="text-blue">zaczyna się u nas</span>
                        </h1>
                        <p class="mt-4">InventionBio to firma biotechnologiczna z wysokim potencjałem na bycie największą biorafinerią w Polsce. Tworzy ją młody, dynamiczny zespół, w którego skład wchodzą biotechnolodzy, mikrobiolodzy, chemicy i biochemicy.</p>
                        <a href="" class="btn btn-theme btn-theme-blue btn-md mt-5">DOWIEDZ SIĘ WIĘCEJ</a>
                    </div>
                </div>
                <div class="col-6 d-flex align-items-center">
                    <img src="https://placehold.co/650x650" alt="">
                </div>
            </div>
        </div>
    </div>


    <div id="info" class="bg-blue-light">
        <div class="container">
            <div class="row">
                <div class="col-6 d-flex align-items-center">
                    <div id="hexparalaxa" class="hexes w-100 d-flex justify-content-end">
                        <svg data-depth="0.6" class="hex" xmlns="http://www.w3.org/2000/svg" width="187.7398" height="211.6796" viewBox="0 0 187.7398 211.6796">
                            <defs>
                                <clipPath id="maskImage" clipPathUnits="userSpaceOnUse">
                                    <path class="b bg-green" d="m0,61.1675v89.3446c0,5.8932,3.144,11.3387,8.2476,14.2852l77.3747,44.6723c5.1036,2.9466,11.3916,2.9466,16.4952,0l77.3747-44.6723c5.1036-2.9466,8.2476-8.3921,8.2476-14.2852V61.1675c0-5.8932-3.144-11.3387-8.2476-14.2852L102.1175,2.2099c-5.1036-2.9466-11.3916-2.9466-16.4952,0L8.2476,46.8822C3.144,49.8288,0,55.2743,0,61.1675Z"/>
                                </clipPath>
                            </defs>

                            <g clip-path="url(#maskImage)">
                                <image width="auto" height="100%" x="0" y="0" fill="none" href="{{ asset('/images/big-hex-bg.jpg') }}" />
                            </g>
                        </svg>

                        <svg data-depth="0.2" class="hex-small hex-small-top" xmlns="http://www.w3.org/2000/svg" width="187.7398" height="211.6796" viewBox="0 0 187.7398 211.6796">
                            <defs>
                                <clipPath id="maskImage3" clipPathUnits="userSpaceOnUse">
                                    <path class="b bg-green" d="m0,61.1675v89.3446c0,5.8932,3.144,11.3387,8.2476,14.2852l77.3747,44.6723c5.1036,2.9466,11.3916,2.9466,16.4952,0l77.3747-44.6723c5.1036-2.9466,8.2476-8.3921,8.2476-14.2852V61.1675c0-5.8932-3.144-11.3387-8.2476-14.2852L102.1175,2.2099c-5.1036-2.9466-11.3916-2.9466-16.4952,0L8.2476,46.8822C3.144,49.8288,0,55.2743,0,61.1675Z"/>
                                </clipPath>
                            </defs>

                            <g clip-path="url(#maskImage3)">
                                <image width="auto" height="100%" x="0" y="0" fill="none" href="{{ asset('/images/small-hex-bg.jpg') }}" />
                            </g>
                        </svg>

                        <svg data-depth="0.2" class="hex-small hex-small-bottom" xmlns="http://www.w3.org/2000/svg" width="187.7398" height="211.6796" viewBox="0 0 187.7398 211.6796">
                            <defs>
                                <clipPath id="maskImage3" clipPathUnits="userSpaceOnUse">
                                    <path class="b bg-green" d="m0,61.1675v89.3446c0,5.8932,3.144,11.3387,8.2476,14.2852l77.3747,44.6723c5.1036,2.9466,11.3916,2.9466,16.4952,0l77.3747-44.6723c5.1036-2.9466,8.2476-8.3921,8.2476-14.2852V61.1675c0-5.8932-3.144-11.3387-8.2476-14.2852L102.1175,2.2099c-5.1036-2.9466-11.3916-2.9466-16.4952,0L8.2476,46.8822C3.144,49.8288,0,55.2743,0,61.1675Z"/>
                                </clipPath>
                            </defs>

                            <g clip-path="url(#maskImage3)">
                                <image width="auto" height="100%" x="0" y="0" fill="none" href="{{ asset('/images/small-hex-bg-2.jpg') }}" />
                            </g>
                        </svg>
                    </div>
                </div>
                <div class="col-6 d-flex align-items-center justify-content-center">
                    <div class="ps-5 pe-5">
                        <h2 class="text-blue">Produkujemy w zgodzie ze standardem <span class="text-green">GMP+</span></h2>
                        <p class="mt-4">GMP+ (Good Manufacturing Practice) oznacza dobrą praktykę produkcyjną oraz jej połączenie z systemem HACCP.  Standard GMP+ ma za zadanie zapewnienie bezpieczeństwa pasz na każdym etapie ich produkcji. Dzięki certyfikatowi GMP+ każdy kontrahent otrzyma potwierdzenie, że produkowane przez nas pasze nie stanowią zagrożenia dla zwierząt oraz ludzi.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <div id="features">
        <div class="container">
            <div class="row">
                @foreach($boxes as $b)
                    <div class="col-4">
                        <div class="box-icon">
                            <div class="box-icon-image">
                                <img src="{{ asset('uploads/boxes/'.$b->file) }}" alt="{{ $b->file_alt }}">
                                <svg class="hex" xmlns="http://www.w3.org/2000/svg" width="187.7398" height="211.6796" viewBox="0 0 187.7398 211.6796"><path class="b {{ $loop->index % 2 === 0 ? 'bg-green' : 'bg-blue' }}" d="m0,61.1675v89.3446c0,5.8932,3.144,11.3387,8.2476,14.2852l77.3747,44.6723c5.1036,2.9466,11.3916,2.9466,16.4952,0l77.3747-44.6723c5.1036-2.9466,8.2476-8.3921,8.2476-14.2852V61.1675c0-5.8932-3.144-11.3387-8.2476-14.2852L102.1175,2.2099c-5.1036-2.9466-11.3916-2.9466-16.4952,0L8.2476,46.8822C3.144,49.8288,0,55.2743,0,61.1675Z"/>
                                </svg>
                            </div>

                            <div class="box-icon-title">
                                <h2>{{ $b->title }}</h2>
                            </div>
                            <div class="box-icon-text">
                                <p>{{ $b->text }}</p>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>

    <div id="products" class="bg-blue-light">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <h2>@lang('cms.our-product')</h2>
                </div>
            </div>
            <div id="productsCarousel" class="row">
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

    <div id="gallery">
        <div class="gallery-top">
            <h2>Nasze laboratorium</h2>
        </div>
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-10">
                    <div class="gallery-content">
                        <ul class="mb-0 list-unstyled">
                            @foreach($images as $i)
                                <li>
                                    @if($i->url)
                                        <a href="{{ $i->url }}" class="swipebox swipeboxvideo">
                                            <span class="gallery-play"><i class="las la-play"></i></span>
                                            <img src="{{ asset('/uploads/gallery/images/webp/'.$i->file_webp) }}" alt="{{ $i->file_alt }}">
                                        </a>
                                    @else
                                        <a href="{{ asset('/uploads/gallery/images/webp/'.$i->file_webp) }}" class="swipebox">
                                            <img src="{{ asset('/uploads/gallery/images/webp/'.$i->file_webp) }}" alt="{{ $i->file_alt }}">
                                        </a>
                                    @endif
                                </li>
                            @endforeach
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
@push('scripts')
    <script src="{{ asset('/js/slick.min.js') }}" charset="utf-8"></script>
    <script type="text/javascript">
        $('#productsCarousel').slick({
            infinite: true,
            slidesToShow: 4,
            slidesToScroll: 1
        });
    </script>
@endpush