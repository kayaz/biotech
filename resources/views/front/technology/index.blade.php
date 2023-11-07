@extends('layouts.page')

@section('meta_title', $page->title)
@section('seo_title', '')
@section('seo_description', '')

@section('content')
    <div id="tech">
        <div class="page-header">
            <div class="container">
                <div class="row">
                    <div class="col-6">
                        <div class="page-header-apla">
                            <h1>Technologia</h1>
                            <p class="text-justify">Zaawansowane technologie dostarczania produktów do pielęgnacji skóry odmieniły nasze podejście do pielęgnacji skóry oraz sposób ich stosowania. Dostarczanie przezskórne to metoda, która umożliwia dostarczanie substancji aktywnych przez naturalną barierę skóry. Opiera się ona na wykorzystaniu mikroskopijnych cząsteczek, które zawierają te składniki aktywne i mogą wnikać w głąb skóry. Te innowacyjne systemy można zastosować również w kosmetykach, umożliwiając bardziej efektywne przenikanie i wchłanianie składników aktywnych, co przekłada się na bardziej efektywne i ukierunkowane zabiegi pielęgnacyjne.</p>
                            <a href="#products" class="btn btn-theme btn-theme-blue btn-md btn-scroll mt-5">NASZE TECHNOLOGIE</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <section>
            <div class="container">
                <div class="row">
                    <div class="col-6">
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
                    <div class="col-6 d-flex align-items-center">
                        <div class="tech-text ps-5">
                            <p class="text-justify">Nasze nośniki opieramy na surowcach otrzymanych w wyniku autorskiej holistycznej strategii biorafinerii w procesie fermentacji przy udziale bakterii probiotycznych, co pozwala na ekologiczne wytworzenie niezbędnych surowców. Produkty uzyskiwane w wyniku tych procesów, takie jak biosurfaktanty i biopolimery, mogą być wykorzystane do tworzenia inteligentnych systemów dostarczania o zdumiewającej efektywności. Nasze innowacyjne kapsułki są w stanie transportować aktywne składniki. Dzięki technikom kapsułkowania i kontrolowanego uwalniania w określonych miejscach, możliwe jest zwiększenie skuteczności i działania tych substancji. To rozwiązanie ma potencjał poprawy zapachu, koloru, trwałości, bezpieczeństwa, kosztów, stabilności i konserwacji produktów.</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section>
            <div class="container">
                <div class="row flex-row-reverse">
                    <div class="col-6">
                        <div id="hexparalaxa" class="hexes-2 hexes w-100 d-flex justify-content-start">
                            <svg data-depth="0.6" class="hex" xmlns="http://www.w3.org/2000/svg" width="187.7398" height="211.6796" viewBox="0 0 187.7398 211.6796">
                                <defs>
                                    <clipPath id="maskImage" clipPathUnits="userSpaceOnUse">
                                        <path class="b bg-green" d="m0,61.1675v89.3446c0,5.8932,3.144,11.3387,8.2476,14.2852l77.3747,44.6723c5.1036,2.9466,11.3916,2.9466,16.4952,0l77.3747-44.6723c5.1036-2.9466,8.2476-8.3921,8.2476-14.2852V61.1675c0-5.8932-3.144-11.3387-8.2476-14.2852L102.1175,2.2099c-5.1036-2.9466-11.3916-2.9466-16.4952,0L8.2476,46.8822C3.144,49.8288,0,55.2743,0,61.1675Z"/>
                                    </clipPath>
                                </defs>

                                <g clip-path="url(#maskImage)">
                                    <image width="auto" height="100%" x="0" y="0" fill="none" href="{{ asset('/images/big-hex-bg-2.jpg') }}" />
                                </g>
                            </svg>

                            <svg data-depth="0.2" class="hex-small hex-small-bottom" xmlns="http://www.w3.org/2000/svg" width="187.7398" height="211.6796" viewBox="0 0 187.7398 211.6796">
                                <defs>
                                    <clipPath id="maskImage2" clipPathUnits="userSpaceOnUse">
                                        <path class="b bg-green" d="m0,61.1675v89.3446c0,5.8932,3.144,11.3387,8.2476,14.2852l77.3747,44.6723c5.1036,2.9466,11.3916,2.9466,16.4952,0l77.3747-44.6723c5.1036-2.9466,8.2476-8.3921,8.2476-14.2852V61.1675c0-5.8932-3.144-11.3387-8.2476-14.2852L102.1175,2.2099c-5.1036-2.9466-11.3916-2.9466-16.4952,0L8.2476,46.8822C3.144,49.8288,0,55.2743,0,61.1675Z"/>
                                    </clipPath>
                                </defs>

                                <g clip-path="url(#maskImage2)">
                                    <image width="auto" height="100%" x="0" y="0" fill="none" href="{{ asset('/images/small-hex-bg.jpg') }}" />
                                </g>
                            </svg>
                        </div>
                    </div>
                    <div class="col-6 d-flex align-items-center">
                        <div class="tech-text pe-5">
                            <p class="text-justify">Ta strategia otwiera nowe możliwości w formułowaniu kosmetyków, które dotychczas były niemożliwe do osiągnięcia. Dzięki kapsułkowaniu i inteligentnemu dostarczaniu, można zastosować niższe stężenia substancji aktywnych, co prowadzi do redukcji kosztów, zachowując jednocześnie ich skuteczność. Co więcej, składniki naszych inteligentnych kapsułek dostarczających mogą służyć jako naturalne odżywcze elementy dla komórek skóry.</p>
                            <a href="{{ route('products.index') }}" class="btn btn-theme btn-theme-blue btn-md mt-5">NASZE PRODUKTY</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <div id="products" class="bg-blue-light">
            <div class="container">
                <div class="row">
                    <div class="col-12 text-center">
                        <h2>@lang('cms.our-technology')</h2>
                    </div>
                </div>
                @foreach($products as $item => $p)
                    <div id="{{$p->slug}}" class="row {{ $loop->even ? 'flex-row-reverse' : '' }} mt-5 @if($item > 0) pt-5 @endif">
                        <div class="col-6 d-flex align-items-center">
                            <div class="product-text">
                                <h2 class="text-blue mb-4">{{ $p->name }}</h2>
                                <div class="text-justify">
                                    {!! $p->text !!}
                                </div>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="product-img {{ $loop->even ? 'pe-4' : 'ps-4' }}">
                                <img src="{{ asset('/uploads/products/thumbs/'.$p->file) }}" alt="{{ $p->file_alt }}">
                            </div>
                        </div>
                    </div>
                @endforeach

                <div class="row">
                    <div class="col-12">
                        <div class="text-center pt-5">
                            <a href="{{ route('products.index') }}" class="btn btn-theme btn-theme-blue btn-md mt-5">NASZE PRODUKTY</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
@endsection
@push('scripts')
    <script src="https://cdnjs.cloudflare.com/ajax/libs/parallax/3.1.0/parallax.min.js"></script>
    <script type="text/javascript">
        const hexElement = document.querySelector('.hexes');
        if (hexElement) {
            new Parallax(hexElement);
        }

        const hexElement2 = document.querySelector('.hexes-2');
        if (hexElement2) {
            new Parallax(hexElement2, {
                invertX: false,
                invertY: false
            });
        }
    </script>
@endpush
