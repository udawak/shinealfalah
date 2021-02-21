@extends('frontend.templates.default')

@section('title')
    Shine Al-Falah
@endsection

@section('header')
    @include('frontend.templates._header')
@endsection

@section('page_banner')
    @include('frontend.templates._slider')
@endsection

@section('content')

    <section class="features-area">
        <div class="container">
            <div class="features-wrapper">
                <div class="row justify-content-end">
                    <div class="col-lg-8">
                        <h2 class="features-title">Pondok <span>Pesantren <br> Perkampungan</span> Minangkabau</h2>
                    </div>
                </div>
                <div class="row justify-content-end">
                    <div class="col-lg-11">
                        <div class="features-image">
                            <img src="assets/images/features.png" alt="">
                        </div>
                    </div>
                </div>
                <div class="features-mask">
                    <div class="features-mask-image bg_cover" style="background-image: url({{ asset('assets/images/features-bg.jpg') }});">
                    </div>
                    <div class="features-mask-content font-weight-light">
                        <p>Islami</p>
                        <p>Khas Minangkabau</p>
                        <p>Asrama Terpisah</p>
                        <p>Strategis</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!--====== Counter Start ======-->

    <div class="counter-area">
        <div class="container">
            <div class="counter-wrapper bg_cover" style="background-image: url(assets/images/counter-bg.jpg);">
                <div class="row">
                    <div class="col-sm-3 col-6 counter-col">
                        <div class="single-counter mt-30 wow fadeInLeftBig" data-wow-duration="1s" data-wow-delay="0.2s">
                            <span class="counter-count"><span class="count">700</span> +</span>
                            <p>Santri</p>
                        </div>
                    </div>
                    <div class="col-sm-3 col-6 counter-col">
                        <div class="single-counter mt-30 wow fadeInLeftBig" data-wow-duration="1s" data-wow-delay="0.4s">
                            <span class="counter-count"><span class="count">200</span> +</span>
                            <p>Ustad/Ustadzah</p>
                        </div>
                    </div>
                    <div class="col-sm-3 col-6 counter-col">
                        <div class="single-counter mt-30 wow fadeInLeftBig" data-wow-duration="1s" data-wow-delay="0.6s">
                            <span class="counter-count"><span class="count">50</span> +</span>
                            <p>Asrama Pondok</p>
                        </div>
                    </div>
                    <div class="col-sm-3 col-6 counter-col">
                        <div class="single-counter mt-30 wow fadeInLeftBig" data-wow-duration="1s" data-wow-delay="0.8s">
                            <span class="counter-count"><span class="count">30</span> +</span>
                            <p>Fasilitas</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!--====== Counter Ends ======-->
@endsection
