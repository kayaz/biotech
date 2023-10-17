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
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam congue feugiat tempor. Curabitur gravida odio nec velit interdum, nec condimentum orci pellentesque. Ut ac elit vel quam tempor dapibus ut id neque. Aliquam porttitor turpis imperdiet pretium accumsan. Praesent eget efficitur quam, vitae tristique nibh. Sed pharetra quis arcu ut viverra. Curabitur sit amet ex orci.</p>
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
                        <p>Podstawą naszych zróżnicowanych produktów są zasoby naturalne. W naszym myśleniu i działaniu jesteśmy zaangażowani w gospodarkę o obiegu zamkniętym poprzez odpowiedzialne wykorzystanie odnawialnych zasobów pochodzenia roślinnego. Stale opracowujemy nowe produkty i receptury, które przyczyniają się do zielonej przyszłości dla różnych branż, takich jak: spożywcza, farmaceutyczna czy kosmetyczna.</p>
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
                        <p>Oferujemy produkty i zrównoważone rozwiązania dla branży „beauty”. Obsługujemy szeroką gamę rynków i zastosowań dzięki naszym innowacyjnym składnikom, technologiom i usługom. W naszym portfolio znajdują się składniki aktywne enkapsulowane w systemy dostarczania, znajdujące zastosowanie w kosmetykach do pielęgnacji, oczyszczania skóry, ochrony przeciwsłonecznej, kosmetyków kolorowych oraz pielęgnacji i oczyszczania włosów.</p>
                        <p>&nbsp;</p>
                        <p>Oferujemy również rozwiązania w zakresie naturalnej konserwacji i stabilności produktu. Nasi klienci korzystający z naszego portfolio, mogą ulepszyć swoje produkty co wpłynie na poprawę funkcjonalności produktu.</p>
                        <a href="" target="_blank" class="btn btn-theme btn-theme-blue btn-md mt-5">NASZE PRODUKTY</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
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
