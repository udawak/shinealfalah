@extends('frontend.templates.default')

@section('title')
    Keuangan
@endsection

@section('header')
    @include('frontend.templates._header')
@endsection

@section('page_banner')
    @section('banner_title')
        Pengolahan Keuangan
    @endsection
    @include('frontend.templates._banner')
@endsection

@section('content')
    <!--====== Legalitas Start ======-->

    <section class="notice-area">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title-2">
                        <h2 class="title">Pengelolaan Keuangan Yayasan</h2>
                        <span class="line"></span>
                    </div>
                </div>
                <img src="{{ asset('assets/images/keuangan.jpg') }}" alt="" class="mt-20">
            </div>
            <div class="notice-content">
                <div class="single-notice">
                    <h3 class="notice-title">Pengelolaan Keuangan dan pertanggungjawaban</h3>
                    <p>Pengelolaan Keuangan dan pertanggungjawaban, dari seluruh dana yang diterima oleh Yayasan dibukukan dan secara berkala dilaporkan kepada donatur. Masing-masing donatur akan diakumulasikan jumlah bantuannya jika memberikan bantuan secara rutin, setelah itu dikirimkan laporannya. Pertanggungjawaban penghimpunan dan penggunaan dana yang diberikan oleh donatur dilaporkan secara transparan. Setiap akhir tahun penggunaan dana akan diaudit oleh akuntan publik (direncanakan tahun 2019 dilakukan audit), karena sesuai dengan peraturan pemerintah, dana yang diterima oleh sebuah Yayasan harus disampaikan setelah diaudit. Laporan pertanggungjawaban keuangan juga di share lewat website Yayasan.</p>
                </div>
            </div>
        </div>
    </section>

    <!--====== Legalitas Ends ======-->
@endsection
