@extends('layouts.page')

@section('meta_title', $page->title)
@section('seo_title', '')
@section('seo_description', '')

@section('content')
    <div id="about">
        <div class="page-header">
            <div class="container">
                <div class="row">
                    <div class="col-7 offset-5">
                        <div class="page-header-apla">
                            <h1>Invention<span class="text-green">Bio</span></h1>
                            <p>Jesteśmy wiodącą firmą w rozwoju i produkcji systemów dostarczania substancji aktywnych w różnych obszarach zastosowań. Nasze systemy zwiększają wydajność, bezpieczeństwo i zrównoważony rozwój produktów kosmetycznych.</p>
                            <p>&nbsp;</p>
                            <p>Naszą siłą napędową są innowacje, które znajdują odzwierciedlenie w badaniach naukowych i tworzonej własności intelektualnej o potencjale produkcyjnym. Tworzymy i ciągle rozwijamy gamę nośników o różnych właściwościach i funkcjonalnościach. Szeroko współpracujemy z siecią międzynarodowych uniwersytetów i firm, co umożliwia nam dostęp do najnowszych osiągnięć naukowych i technologicznych w tej dziedzinie.</p>
                            <p>&nbsp;</p>
                            <p>Innowacja oznacza dla nas więcej niż rozwój nowatorskich materiałów lub produktów. Wyznaczamy standardy także w zakresie usług zorientowanych na klienta, nowych modeli biznesowych i efektywności procesów. Wspieramy wszelkiego rodzaju innowacje, które tworzą nowe wartości – czy to w zakresie wzrostu gospodarczego, korzyści społecznych i środowiskowych, czy też, najlepiej, połączenia ich wszystkich.</p>
                            <p>&nbsp;</p>
                            <p>Nasza koncepcja otwartych innowacji stale integruje wiedzę z niezależnych źródeł: nowe perspektywy i wczesne uwzględnienie potrzeb klientów, które mogą zmniejszyć ryzyko i stworzyć nowe produkty i usługi.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div id="features" class="bg-blue-light">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-12 text-center text-blue pt-5 pb-3">
                    <h2>Nasze <span class="text-green">wartości</span></h2>
                </div>
            </div>
            <div class="row">
                <div class="col-4">
                    <div class="box-icon">
                        <div class="box-icon-image">
                            <img src="/uploads/boxes/154229_ciekawy-tytul-boksa.png" alt="Ciekawy tytuł boksa">
                            <svg class="hex" xmlns="http://www.w3.org/2000/svg" width="187.7398" height="211.6796" viewBox="0 0 187.7398 211.6796"><path class="b bg-green" d="m0,61.1675v89.3446c0,5.8932,3.144,11.3387,8.2476,14.2852l77.3747,44.6723c5.1036,2.9466,11.3916,2.9466,16.4952,0l77.3747-44.6723c5.1036-2.9466,8.2476-8.3921,8.2476-14.2852V61.1675c0-5.8932-3.144-11.3387-8.2476-14.2852L102.1175,2.2099c-5.1036-2.9466-11.3916-2.9466-16.4952,0L8.2476,46.8822C3.144,49.8288,0,55.2743,0,61.1675Z"></path>
                            </svg>
                        </div>

                        <div class="box-icon-title">
                            <h2>Innowacyjność</h2>
                        </div>
                        <div class="box-icon-text">
                            <p>Swoje działania opieramy o najnowsze wyniki badań naukowych, stale poszukując nowych surowców i technologii ich otrzymywania</p>
                        </div>
                    </div>
                </div>

                <div class="col-4">
                    <div class="box-icon">
                        <div class="box-icon-image">
                            <img src="/uploads/boxes/161350_ciekawy-tytul-boksa-1.png" alt="Ciekawy tytuł boksa 2">
                            <svg class="hex" xmlns="http://www.w3.org/2000/svg" width="187.7398" height="211.6796" viewBox="0 0 187.7398 211.6796"><path class="b bg-blue" d="m0,61.1675v89.3446c0,5.8932,3.144,11.3387,8.2476,14.2852l77.3747,44.6723c5.1036,2.9466,11.3916,2.9466,16.4952,0l77.3747-44.6723c5.1036-2.9466,8.2476-8.3921,8.2476-14.2852V61.1675c0-5.8932-3.144-11.3387-8.2476-14.2852L102.1175,2.2099c-5.1036-2.9466-11.3916-2.9466-16.4952,0L8.2476,46.8822C3.144,49.8288,0,55.2743,0,61.1675Z"></path>
                            </svg>
                        </div>

                        <div class="box-icon-title">
                            <h2>Przyjazność środowisku</h2>
                        </div>
                        <div class="box-icon-text">
                            <p>Szukamy alternatyw technologicznych, sprzyjających środowisku naturalnemu</p>
                        </div>
                    </div>
                </div>

                <div class="col-4">
                    <div class="box-icon">
                        <div class="box-icon-image">
                            <img src="/uploads/boxes/154229_ciekawy-tytul-boksa.png" alt="Ciekawy tytuł boksa">
                            <svg class="hex" xmlns="http://www.w3.org/2000/svg" width="187.7398" height="211.6796" viewBox="0 0 187.7398 211.6796"><path class="b bg-green" d="m0,61.1675v89.3446c0,5.8932,3.144,11.3387,8.2476,14.2852l77.3747,44.6723c5.1036,2.9466,11.3916,2.9466,16.4952,0l77.3747-44.6723c5.1036-2.9466,8.2476-8.3921,8.2476-14.2852V61.1675c0-5.8932-3.144-11.3387-8.2476-14.2852L102.1175,2.2099c-5.1036-2.9466-11.3916-2.9466-16.4952,0L8.2476,46.8822C3.144,49.8288,0,55.2743,0,61.1675Z"></path>
                            </svg>
                        </div>

                        <div class="box-icon-title">
                            <h2>Efektywność</h2>
                        </div>
                        <div class="box-icon-text">
                            <p>Zależy nam na osiąganiu zamierzonych celów i oczekiwanych rezultatów</p>
                        </div>
                    </div>
                </div>
                <div class="col-4">
                    <div class="box-icon">
                        <div class="box-icon-image">
                            <img src="/uploads/boxes/161350_ciekawy-tytul-boksa-1.png" alt="Ciekawy tytuł boksa 2">
                            <svg class="hex" xmlns="http://www.w3.org/2000/svg" width="187.7398" height="211.6796" viewBox="0 0 187.7398 211.6796"><path class="b bg-blue" d="m0,61.1675v89.3446c0,5.8932,3.144,11.3387,8.2476,14.2852l77.3747,44.6723c5.1036,2.9466,11.3916,2.9466,16.4952,0l77.3747-44.6723c5.1036-2.9466,8.2476-8.3921,8.2476-14.2852V61.1675c0-5.8932-3.144-11.3387-8.2476-14.2852L102.1175,2.2099c-5.1036-2.9466-11.3916-2.9466-16.4952,0L8.2476,46.8822C3.144,49.8288,0,55.2743,0,61.1675Z"></path>
                            </svg>
                        </div>

                        <div class="box-icon-title">
                            <h2>Jakość</h2>
                        </div>
                        <div class="box-icon-text">
                            <p>Stale pogłębiamy naszą wiedzę i optymalizujemy proces technologiczny</p>
                        </div>
                    </div>
                </div>
                <div class="col-4">
                    <div class="box-icon">
                        <div class="box-icon-image">
                            <img src="/uploads/boxes/154229_ciekawy-tytul-boksa.png" alt="Ciekawy tytuł boksa">
                            <svg class="hex" xmlns="http://www.w3.org/2000/svg" width="187.7398" height="211.6796" viewBox="0 0 187.7398 211.6796"><path class="b bg-green" d="m0,61.1675v89.3446c0,5.8932,3.144,11.3387,8.2476,14.2852l77.3747,44.6723c5.1036,2.9466,11.3916,2.9466,16.4952,0l77.3747-44.6723c5.1036-2.9466,8.2476-8.3921,8.2476-14.2852V61.1675c0-5.8932-3.144-11.3387-8.2476-14.2852L102.1175,2.2099c-5.1036-2.9466-11.3916-2.9466-16.4952,0L8.2476,46.8822C3.144,49.8288,0,55.2743,0,61.1675Z"></path>
                            </svg>
                        </div>

                        <div class="box-icon-title">
                            <h2>Zorientowanie na potrzeby</h2>
                        </div>
                        <div class="box-icon-text">
                            <p>Jesteśmy otwarci na potrzeby i pomysły naszych klientów</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div id="team">
        <div class="container">
            <div class="row">
                <div class="col-12 text-center text-blue">
                    <h2>Kim <span class="text-green">jesteśmy</span>?</h2>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-8 text-center pt-4">
                    <p>Pasjonatami nauki, stale pogłębiającymi swoją wiedzę w dziedzinie biotechnologii, kosmetologii i żywienia zwierząt. Większość z nas ma na swoim koncie serię publikacji w międzynarodowych czasopismach naukowych. Jesteśmy autorami wielu patentów, wielokrotnie braliśmy też udział w krajowych i zagranicznych konferencjach i targach naukowych.</p>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-3">
                    <div class="person text-center">
                        <svg data-depth="0.6" class="hex mb-3" xmlns="http://www.w3.org/2000/svg" width="187.7398" height="211.6796" viewBox="0 0 187.7398 211.6796">
                            <defs>
                                <clipPath id="maskImage" clipPathUnits="userSpaceOnUse">
                                    <path class="b bg-green" d="m0,61.1675v89.3446c0,5.8932,3.144,11.3387,8.2476,14.2852l77.3747,44.6723c5.1036,2.9466,11.3916,2.9466,16.4952,0l77.3747-44.6723c5.1036-2.9466,8.2476-8.3921,8.2476-14.2852V61.1675c0-5.8932-3.144-11.3387-8.2476-14.2852L102.1175,2.2099c-5.1036-2.9466-11.3916-2.9466-16.4952,0L8.2476,46.8822C3.144,49.8288,0,55.2743,0,61.1675Z"/>
                                </clipPath>
                            </defs>

                            <g clip-path="url(#maskImage)">
                                <image width="auto" height="100%" x="0" y="0" fill="none" href="https://bioxlab-next-js.vercel.app/assets/img/team/team-thumb-07.png" />
                            </g>
                        </svg>

                        <span>prof. dr hab. inż.</span>
                        <h3>Marcin Łukaszewicz</h3>
                        <p>(Prezes Zarządu)</p>
                    </div>
                </div>
                <div class="col-3">
                    <div class="person text-center">
                        <svg data-depth="0.6" class="hex mb-3" xmlns="http://www.w3.org/2000/svg" width="187.7398" height="211.6796" viewBox="0 0 187.7398 211.6796">
                            <defs>
                                <clipPath id="maskImage" clipPathUnits="userSpaceOnUse">
                                    <path class="b bg-green" d="m0,61.1675v89.3446c0,5.8932,3.144,11.3387,8.2476,14.2852l77.3747,44.6723c5.1036,2.9466,11.3916,2.9466,16.4952,0l77.3747-44.6723c5.1036-2.9466,8.2476-8.3921,8.2476-14.2852V61.1675c0-5.8932-3.144-11.3387-8.2476-14.2852L102.1175,2.2099c-5.1036-2.9466-11.3916-2.9466-16.4952,0L8.2476,46.8822C3.144,49.8288,0,55.2743,0,61.1675Z"/>
                                </clipPath>
                            </defs>

                            <g clip-path="url(#maskImage)">
                                <image width="auto" height="100%" x="0" y="0" fill="none" href="https://bioxlab-next-js.vercel.app/assets/img/team/team-thumb-06.png" />
                            </g>
                        </svg>

                        <span>dr</span>
                        <h3>Agnieszka Lewińska</h3>
                        <p>(Dyrektor R&D)</p>
                    </div>
                </div>
                <div class="col-3">
                    <div class="person text-center">
                        <svg data-depth="0.6" class="hex mb-3" xmlns="http://www.w3.org/2000/svg" width="187.7398" height="211.6796" viewBox="0 0 187.7398 211.6796">
                            <defs>
                                <clipPath id="maskImage" clipPathUnits="userSpaceOnUse">
                                    <path class="b bg-green" d="m0,61.1675v89.3446c0,5.8932,3.144,11.3387,8.2476,14.2852l77.3747,44.6723c5.1036,2.9466,11.3916,2.9466,16.4952,0l77.3747-44.6723c5.1036-2.9466,8.2476-8.3921,8.2476-14.2852V61.1675c0-5.8932-3.144-11.3387-8.2476-14.2852L102.1175,2.2099c-5.1036-2.9466-11.3916-2.9466-16.4952,0L8.2476,46.8822C3.144,49.8288,0,55.2743,0,61.1675Z"/>
                                </clipPath>
                            </defs>

                            <g clip-path="url(#maskImage)">
                                <image width="auto" height="100%" x="0" y="0" fill="none" href="https://bioxlab-next-js.vercel.app/assets/img/team/team-thumb-12.jpg" />
                            </g>
                        </svg>

                        <span>dr inż.</span>
                        <h3>Marta Domżał-Kędzia</h3>
                        <p>(Kierownik R&D)</p>
                    </div>
                </div>
                <div class="col-3">
                    <div class="person text-center">
                        <svg data-depth="0.6" class="hex mb-3" xmlns="http://www.w3.org/2000/svg" width="187.7398" height="211.6796" viewBox="0 0 187.7398 211.6796">
                            <defs>
                                <clipPath id="maskImage" clipPathUnits="userSpaceOnUse">
                                    <path class="b bg-green" d="m0,61.1675v89.3446c0,5.8932,3.144,11.3387,8.2476,14.2852l77.3747,44.6723c5.1036,2.9466,11.3916,2.9466,16.4952,0l77.3747-44.6723c5.1036-2.9466,8.2476-8.3921,8.2476-14.2852V61.1675c0-5.8932-3.144-11.3387-8.2476-14.2852L102.1175,2.2099c-5.1036-2.9466-11.3916-2.9466-16.4952,0L8.2476,46.8822C3.144,49.8288,0,55.2743,0,61.1675Z"/>
                                </clipPath>
                            </defs>

                            <g clip-path="url(#maskImage)">
                                <image width="auto" height="100%" x="0" y="0" fill="none" href="https://bioxlab-next-js.vercel.app/assets/img/team/team-thumb-11.jpg" />
                            </g>
                        </svg>

                        <span>dr</span>
                        <h3>Anna Filipiak-Szok</h3>
                        <p>(Kierownik Laboratorium)</p>
                    </div>
                </div>
                <div class="col-3">
                    <div class="person text-center">
                        <svg data-depth="0.6" class="hex mb-3" xmlns="http://www.w3.org/2000/svg" width="187.7398" height="211.6796" viewBox="0 0 187.7398 211.6796">
                            <defs>
                                <clipPath id="maskImage" clipPathUnits="userSpaceOnUse">
                                    <path class="b bg-green" d="m0,61.1675v89.3446c0,5.8932,3.144,11.3387,8.2476,14.2852l77.3747,44.6723c5.1036,2.9466,11.3916,2.9466,16.4952,0l77.3747-44.6723c5.1036-2.9466,8.2476-8.3921,8.2476-14.2852V61.1675c0-5.8932-3.144-11.3387-8.2476-14.2852L102.1175,2.2099c-5.1036-2.9466-11.3916-2.9466-16.4952,0L8.2476,46.8822C3.144,49.8288,0,55.2743,0,61.1675Z"/>
                                </clipPath>
                            </defs>

                            <g clip-path="url(#maskImage)">
                                <image width="auto" height="100%" x="0" y="0" fill="none" href="https://bioxlab-next-js.vercel.app/assets/img/team/team-thumb-08.png" />
                            </g>
                        </svg>

                        <span>mgr</span>
                        <h3>Fabian Kuczyński</h3>
                        <p>(Kierownik Produkcji)</p>
                    </div>
                </div>
                <div class="col-3">
                    <div class="person text-center">
                        <svg data-depth="0.6" class="hex mb-3" xmlns="http://www.w3.org/2000/svg" width="187.7398" height="211.6796" viewBox="0 0 187.7398 211.6796">
                            <defs>
                                <clipPath id="maskImage" clipPathUnits="userSpaceOnUse">
                                    <path class="b bg-green" d="m0,61.1675v89.3446c0,5.8932,3.144,11.3387,8.2476,14.2852l77.3747,44.6723c5.1036,2.9466,11.3916,2.9466,16.4952,0l77.3747-44.6723c5.1036-2.9466,8.2476-8.3921,8.2476-14.2852V61.1675c0-5.8932-3.144-11.3387-8.2476-14.2852L102.1175,2.2099c-5.1036-2.9466-11.3916-2.9466-16.4952,0L8.2476,46.8822C3.144,49.8288,0,55.2743,0,61.1675Z"/>
                                </clipPath>
                            </defs>

                            <g clip-path="url(#maskImage)">
                                <image width="auto" height="100%" x="0" y="0" fill="none" href="https://bioxlab-next-js.vercel.app/assets/img/team/team-thumb-06.png" />
                            </g>
                        </svg>

                        <span>mgr</span>
                        <h3>Magdalena Baranowska</h3>
                        <p>(Pełnomocnik ds. GMP+ i Jakości / Kierownik Zespołu ds. Bezpieczeństwa Żywności)</p>
                    </div>
                </div>
                <div class="col-3">
                    <div class="person text-center">
                        <svg data-depth="0.6" class="hex mb-3" xmlns="http://www.w3.org/2000/svg" width="187.7398" height="211.6796" viewBox="0 0 187.7398 211.6796">
                            <defs>
                                <clipPath id="maskImage" clipPathUnits="userSpaceOnUse">
                                    <path class="b bg-green" d="m0,61.1675v89.3446c0,5.8932,3.144,11.3387,8.2476,14.2852l77.3747,44.6723c5.1036,2.9466,11.3916,2.9466,16.4952,0l77.3747-44.6723c5.1036-2.9466,8.2476-8.3921,8.2476-14.2852V61.1675c0-5.8932-3.144-11.3387-8.2476-14.2852L102.1175,2.2099c-5.1036-2.9466-11.3916-2.9466-16.4952,0L8.2476,46.8822C3.144,49.8288,0,55.2743,0,61.1675Z"/>
                                </clipPath>
                            </defs>

                            <g clip-path="url(#maskImage)">
                                <image width="auto" height="100%" x="0" y="0" fill="none" href="https://bioxlab-next-js.vercel.app/assets/img/team/team-thumb-12.jpg" />
                            </g>
                        </svg>

                        <span>mgr</span>
                        <h3>Monika Ostrowska</h3>
                        <p>(Specjalista ds. biotechnologii / Koordynator badań aplikacyjnych)</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div id="movie-cta">
        <div class="movie-bg">
            <video autoplay muted loop id="background-video">
                <source src="{{ asset('images/video-cta.mp4') }}" type="video/mp4">
            </video>

            <div class="container h-100">
                <div class="row h-100 d-flex align-items-center justify-content-center">
                    <div class="col-8 text-center">
                        <h2 class="mb-5">Nasze produkty</h2>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi a mauris odio. Duis nisi urna, suscipit elementum congue nec, commodo nec turpis. Morbi luctus sem dolor, in cursus est ultrices ac. Vivamus vitae turpis vitae elit faucibus euismod at eget ex. Pellentesque elit mi, efficitur eu turpis eu, vulputate porta orci.</p>
                        <a href="" target="_blank" class="btn btn-theme btn-theme-green btn-md mt-5">NASZE PRODUKTY</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div id="partners">
        <div class="container">
            <div class="row">
                <div class="col-12 text-center text-blue">
                    <h2>Nasi <span class="text-green">partnerzy</span></h2>
                </div>
            </div>
            <div class="row">
                <div class="col-4 justify-content-center align-items-center d-flex">
                    <div class="partner">
                        <img src="https://placehold.co/400x100" alt="">
                    </div>
                </div>
                <div class="col-4 justify-content-center align-items-center d-flex">
                    <div class="partner">
                        <img src="https://placehold.co/400x100" alt="">
                    </div>
                </div>
                <div class="col-4 justify-content-center align-items-center d-flex">
                    <div class="partner">
                        <img src="https://placehold.co/400x100" alt="">
                    </div>
                </div>
                <div class="col-4 justify-content-center align-items-center d-flex">
                    <div class="partner">
                        <img src="https://placehold.co/400x100" alt="">
                    </div>
                </div>
                <div class="col-4 justify-content-center align-items-center d-flex">
                    <div class="partner">
                        <img src="https://placehold.co/400x100" alt="">
                    </div>
                </div>
                <div class="col-4 justify-content-center align-items-center d-flex">
                    <div class="partner">
                        <img src="https://placehold.co/400x100" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
@push('scripts')
    <script type="text/javascript">

    </script>
@endpush
