@extends('layouts.page')

@section('meta_title', $page->title)
@section('seo_title', '')
@section('seo_description', '')

@section('content')
<div id="tech">
    <div class="tech-header">
        <div class="container">
            <div class="row">
                <div class="col-6">
                    <div class="tech-apla">
                        <h1>Nano<span class="text-green">emulsje</span></h1>
                        <p>Są najbardziej zaawansowanymi systemami dostarczania substancji biologicznie czynnych (witamin, polimerów, polifenoli, czy też kannabinoidów). Zastosowanie nanoemulsji w pielęgnacji skóry umożliwia dostarczanie substancji aktywnych do głębszych jej warstw i efektywniejsze działanie pielęgnacyjne. Nasz autorski system dostarczania surowców kosmetycznych InBioNano jest biokompatybilny, biodegradowalny i przyjazny środowisku.</p>
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

                        <svg data-depth="0.2" class="hex-small hex-small-bottom" xmlns="http://www.w3.org/2000/svg" width="187.7398" height="211.6796" viewBox="0 0 187.7398 211.6796"><path class="b bg-green" d="m0,61.1675v89.3446c0,5.8932,3.144,11.3387,8.2476,14.2852l77.3747,44.6723c5.1036,2.9466,11.3916,2.9466,16.4952,0l77.3747-44.6723c5.1036-2.9466,8.2476-8.3921,8.2476-14.2852V61.1675c0-5.8932-3.144-11.3387-8.2476-14.2852L102.1175,2.2099c-5.1036-2.9466-11.3916-2.9466-16.4952,0L8.2476,46.8822C3.144,49.8288,0,55.2743,0,61.1675Z"/></svg>
                    </div>
                </div>
                <div class="col-6 d-flex align-items-center">
                    <div class="tech-text ps-5">
                        <p>Oferowana przez nas nowatorska platforma nanoemulsji typu olej w wodzie stabilizowana jest  dwoma środkami powierzchniowo czynnymi o „zielonym” charakterze, tj. ekologiczną półsyntetyczną kokobetainą  i biosurfaktyną pochodzącą z procesu biotransformacji śruty rzepakowej przy udziale probiotycznych bakterii Bacillus subtilis.</p>
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
                                <image width="auto" height="100%" x="0" y="0" fill="none" href="{{ asset('/images/big-hex-bg.jpg') }}" />
                            </g>
                        </svg>

                        <svg data-depth="0.2" class="hex-small hex-small-bottom" xmlns="http://www.w3.org/2000/svg" width="187.7398" height="211.6796" viewBox="0 0 187.7398 211.6796"><path class="b bg-green" d="m0,61.1675v89.3446c0,5.8932,3.144,11.3387,8.2476,14.2852l77.3747,44.6723c5.1036,2.9466,11.3916,2.9466,16.4952,0l77.3747-44.6723c5.1036-2.9466,8.2476-8.3921,8.2476-14.2852V61.1675c0-5.8932-3.144-11.3387-8.2476-14.2852L102.1175,2.2099c-5.1036-2.9466-11.3916-2.9466-16.4952,0L8.2476,46.8822C3.144,49.8288,0,55.2743,0,61.1675Z"/></svg>
                    </div>
                </div>
                <div class="col-6 d-flex align-items-center">
                    <div class="tech-text pe-5">
                        <p>Zaproponowana formulacja wykazuje potencjał do znacznego zwiększenia rozpuszczalności i skuteczności działania związków słabo rozpuszczalnych w wodzie. Wynika to ze zwiększonego stosunku powierzchni do objętości nanoemulsji, mniejszego rozmiaru cząstek i ich większą mobilnością, a także zwiększoną stabilnością i ochroną przed przedwczesną degradacją.</p>
                        <p>&nbsp;</p>
                        <p>Co ważne, proponowane przez nas nanoemulsje zostały wytworzone w oparciu o najnowsze trendy „zero waste”, w dostępie do zrównoważonych materiałów pochodzących ze źródeł odnawialnych.</p>
                        <a href="" target="_blank" class="btn btn-theme btn-theme-blue btn-md mt-4">NASZE PRODUKTY</a>
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
