@extends('frontend.templates.default')

@section('title')
    Legalitas Yayasan
@endsection

@section('header')
    @include('frontend.templates._header')
@endsection

@section('page_banner')
    @section('banner_title')
        Legalitas Yayasan
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
                        <h2 class="title">Legalitas Yayasan</h2>
                        <span class="line"></span>
                        <p>Legalitas Yayasan Berikut Pelaksana Kegiatan di Bawah Naungan Yayasan</p>
                    </div>
                </div>
                <img src="{{ asset('assets/images/legalitas.jpg') }}" alt="" class="mt-20">
            </div>
            <div class="notice-content">
                <div class="single-notice">
                    <span class="number">01.</span>
                    <h3 class="notice-title">Pendaftaran Anggaran Dasar/Akta Yayasan</h3>
                    <p>Pendaftaran Anggaran Dasar/Akta Yayasan Nomor 38 Tanggal 12 Desember 2012 dihadapan Notaris Yuliarni, SH di Padang.</p>
                </div>
                <div class="single-notice">
                    <span class="number">02.</span>
                    <h3 class="notice-title">Pernyataan Pembina Yayasan.</h3>
                    <p>Pernyataan Pembina Yayasan Shine Al Falah Nomor 37 Tanggal 05 Maret 2018 dihadapan Notaris Yuliarni, SH di Padang.</p>
                </div>
                <div class="single-notice">
                    <span class="number">03.</span>
                    <h3 class="notice-title">Penerbitan Surat Keputusan Yayasan.</h3>
                    <p>Penerbitan Surat Keputusan Yayasan oleh Kemenkumham RI Nomor: AHU-473.AH.01.04.Tahun 2013, dan Perubahan Data Yayasan Shine Al Falah diterbitkan oleh Kemenkumham RI Nomor: AHU-AH.01.06.0008438. tertanggal 19 Maret 2018. </p>
                </div>
                <div class="single-notice">
                    <span class="number">04.</span>
                    <h3 class="notice-title">Nomor Pokok Wajib Pajak Yayasan</h3>
                    <p>Nomor Pokok Wajib Pajak Yayasan Shine Al Falah Nomor 31.659.033.0-201.000 tertanggal 07 Januari 2013. </p>
                </div>
                <div class="single-notice">
                    <span class="number">05.</span>
                    <h3 class="notice-title">Surat Rekomendasi dari Gubernur Sumatera Barat.</h3>
                    <p>Surat Rekomendasi dari Gubernur Sumatera Barat Nomor: 400/674/Binsos-2014 tertanggal 27 Juni 2014.</p>
                </div>
                <div class="single-notice">
                    <span class="number">06.</span>
                    <h3 class="notice-title">Surat Rekomendasi dari Sekretariat Daerah Kota Padang.</h3>
                    <p>Surat Rekomendasi dari Sekretariat Daerah Kota Padang Nomor 400.161/Kesra-2013.</p>
                </div>
                <div class="single-notice">
                    <span class="number">07.</span>
                    <h3 class="notice-title">Piagam Pendirian Pondok Pesantren dari Kementerian Agama Kota Padang.</h3>
                    <p>Piagam Pendirian Pondok Pesantren dari Kementerian Agama Kota Padang Nomor Kd.03/9-c/PP.00.08/47/2016. Pondok Pesantren mewadahi seluruh kegiatan di bidang pendidikan seperti; Madrasah Ibtida’iyah (MI – setingkat SD), Madrasah Tsanawiyah (MTs – setingkat SMP), Madrasah Aliyah (MA – setingkat SMA). Kegiatan di pondok disetujui dengan nomor statistik: 512013710013 tertanggal 12 April 2016/06 Rajab 1437 H.  </p>
                </div>
                <div class="single-notice">
                    <span class="number">08.</span>
                    <h3 class="notice-title">Kegiatan di Bidang Sosial Yayasan.</h3>
                    <p>Yayasan dalam kegiatan di bidang sosial yakni menyelenggarakan Panti Asuhan, telah diizinkan oleh Pemerintah Kota Padang dari Dinas Penanaman Modal dan Pelayanan Terpadu Satu Pintu dengan terbitnya Izin Operasional Panti Asuhan Al Falah dengan nomor: 03/ILKS/DPMPTSP/III/2018 tertanggal 09 Maret 2018.</p>
                </div>
                <div class="single-notice">
                    <span class="number">09.</span>
                    <h3 class="notice-title">Surat Dukungan dan Rekomendasi dari Camat Koto Tangah Kota Padang.</h3>
                    <p>Surat Dukungan dan Rekomendasi dari Camat Koto Tangah Kota Padang Nomor 602/CKT-X/2012.</p>
                </div>
                <div class="single-notice">
                    <span class="number">10.</span>
                    <h3 class="notice-title">Surat Dukungan dan Rekomendasi dari Lurah Batipuh Panjang Kota Padang.</h3>
                    <p>Surat Dukungan dan Rekomendasi dari Lurah Batipuh Panjang Kota Padang untuk Pembangunan Pondok Pesantren Plus Hifzil Qur’an Nomor 450.142.1007.2012.</p>
                </div>
                <div class="single-notice">
                    <span class="number">11.</span>
                    <h3 class="notice-title">Surat Dukungan dan Rekomendasi dari Wali Nagari Kasang Kec. Batang Anai.</h3>
                    <p>Surat Dukungan dan Rekomendasi dari Wali Nagari Kasang Kecamatan Batang Anai, Kabupaten Padang Pariaman Nomor 23/NKS/PEM/XI/2012.</p>
                </div>
                <div class="single-notice">
                    <span class="number">12.</span>
                    <h3 class="notice-title">Surat Dukungan dan Rekomendasi dari Camat Batang Anai.</h3>
                    <p>Surat Dukungan dan Rekomendasi dari Camat Batang Anai Kabupaten Padang Pariaman Nomor 451.44/892/CBA/XI/2012.</p>
                </div>
            </div>
        </div>
    </section>

    <!--====== Legalitas Ends ======-->
@endsection
