@extends('layouts.page')

@section('meta_title', $product->name)
@section('seo_title', '')
@section('seo_description', '')

@section('pageheader')
    @include('layouts.partials.page-header', ['page' => $page, 'header_file' => 'page.jpg'])
@stop

@section('content')
    <div id="product">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    {!! $product->text !!}
                </div>
            </div>
        </div>
    </div>

    <div id="features" class="bg-blue-light">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-12 text-center text-blue pt-5 pb-3">
                    <h2>Atuty <span class="text-green">produktu</span></h2>
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

    <div id="product-video">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <iframe width="560" height="315" src="https://www.youtube.com/embed/rr12rWVRUAg?si=tSGT9AbzGwBtNDVY" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
                </div>
            </div>
        </div>
    </div>
@endsection