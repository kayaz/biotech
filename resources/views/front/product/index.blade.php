@extends('layouts.page')

@section('meta_title', $page->title)
@section('seo_title', '')
@section('seo_description', '')

@section('pageheader')
    @include('layouts.partials.page-header', ['page' => $page, 'header_file' => 'page.jpg'])
@stop

@section('content')
    <section id="products-header">
        <div class="container">
            <div class="row">
                <div class="col-6 d-flex align-items-center">
                    <div class="pe-5">
                        <h2 class="text-blue mb-4">Kapsułki dostarczające skórę (SDC)</h2>
                        <p class="text-justify">W naszym nowoczesnym laboratorium stworzyliśmy w 100% biokompatybilny, biodegradowalny i innowacyjny system nośnikowy, który skutecznie poprawia właściwości enkapsulowanie składników aktywnych i został zaprojektowany tak, aby chronić, transportować i uwalniać składniki aktywne w kontrolowany i ukierunkowany sposób. Zwiększają stabilność, rozpuszczalność, biodostępność i skuteczność składników, a także zmniejszają ich skutki uboczne i toksyczność. Nasze produkty zyskały ochronę znaku towarowego SDCTM skin delivery capsules i znajdują zastosowanie w produktach kosmetycznych: przeciwstarzeniowych, nawilżających, wybielających, przeciwzapalnych czy przeciwtrądzikowych.</p>
                    </div>
                </div>
                <div class="col-6">
                    <img src="https://placehold.co/770x578" alt="">
                </div>
            </div>
            <div class="row flex-row-reverse mt-5 pt-6">
                <div class="col-6 d-flex align-items-center">
                    <div class="ps-5">
                        <p class="text-justify">Inteligentne systemy dostarczania to rewolucja w aplikacji produktów pielęgnacyjnych. Podanie przezskórne transportuje składniki aktywne przez aturalną barierę skóry. Podawanie przezskórne jest często stosowane w medycynie, ale można je również zastosować w pielęgnacji skóry, aby dostarczyć składniki aktywne, takie jak kwas hialuronowy, witaminy, przeciwutleniacze lub kolagen. Umożliwia to lepszą penetrację i wchłanianie składników aktywnych, co skutkuje bardziej skutecznymi i ukierunkowanymi terapiami. Nasze zaawansowane systemy dostarczania opierają się na naszych nośnikach SDC, które zapewniają doskonałą wydajność, bezpieczeństwo i zrównoważony rozwój w porównaniu z konwencjonalnymi systemami dostarczania.</p>
                    </div>
                </div>
                <div class="col-6">
                    <img src="https://placehold.co/770x578" alt="">
                </div>
            </div>
        </div>
    </section>
    <div id="products" class="bg-blue-light">
        <div class="container">
            <div class="row">
                @foreach($products as $p)
                    <div class="col-3">
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
@endsection