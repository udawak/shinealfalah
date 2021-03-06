@extends('frontend.templates.default')

@section('title')
    PSB Online
@endsection

@section('header')
    @include('frontend.templates._header')
@endsection

@section('page_banner')
@section('banner_title')
    PSB ONLINE PONPES PMK
@endsection
    @include('frontend.templates._banner')
@endsection

@section('content')

<section class="about-area">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-5 ">
                <div class="about-content mt-10">
                    <h2 class="about-title">Pendaftaran <span style="color: #FCB62E">Santri Baru</span></h2>
                    <span class="line"></span>
                    <p>Telah dibuka pendaftaran Pondok Pesantren Perkampungan Minangkabau Yayasan
                        Shine Al-Falah dengan jadwal mulai dari 01 Maret 2021 s/d 30 April 2021.<br>

                    <a href="https://forms.gle/QiR25eYfYYas1zB98" class="main-btn" target="blank">Daftar</a>
                </div>
            </div>
            <div class="col-lg-7">
                <div class="about-image mt-50">
                    <div class="single-image image-1">
                        <img src="assets/images/about/about-1.jpg" alt="">
                    </div>
                    <div class="single-image image-2">
                        <img src="assets/images/about/about-2.jpg" alt="">
                    </div>
                    <div class="single-image image-3">
                        <img src="assets/images/about/about-3.jpg" alt="">
                    </div>
                    <div class="single-image image-4">
                        <img src="assets/images/about/about-4.jpg" alt="">
                    </div>

                    <div class="about-icon icon-1">
                        <img src="assets/images/about/icon/icon-1.png" alt="">
                    </div>
                    <div class="about-icon icon-2">
                        <img src="assets/images/about/icon/icon-2.png" alt="">
                    </div>
                    <div class="about-icon icon-3">
                        <img src="assets/images/about/icon/icon-3.png" alt="">
                    </div>
                    <div class="about-icon icon-4">
                        <img src="assets/images/about/icon/icon-4.png" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="courses-details">

    <div class="container">
        <div class="row flex-row-reverse">
            <div class="col-lg-9">
                <div class="courses-details-content mt-50">
                    <h2 class="title">Informasi Pendaftaran & Penerimaan</h2>
                    {{-- <h5 class="sub-title">Ketentuan Pendaftaran</h5> --}}


                </div>

                <div class="courses-details-tab">
                    <ul class="nav nav-justified" role="tablist">
                        <li class="nav-item"><a class="active" data-toggle="tab" href="#ketentuan" role="tab">Ketentuan Pendaftaran</a></li>
                        <li class="nav-item"><a data-toggle="tab" href="#pendaftar" role="tab">Yang Sudah Mendaftar</a></li>
                        <li class="nav-item"><a data-toggle="tab" href="#penerimaan" role="tab">Yang Diterima</a></li>
                        {{-- <li class="nav-item"><a data-toggle="tab" href="#reviews" role="tab">Reviews</a></li> --}}
                    </ul>
                    <div class="tab-content" id="myTabContent">
                        <div class="tab-pane fade show active" id="ketentuan" role="tabpanel">
                            <div class="benefit-content">
                                <p>Bachelor of Business Administration(BBA) If you are going use a passage of Lorem Ipsum need equal blame belongs to those who fail in their duty through weakness of will, which is the same as saying through shrinking from toil and pain. These cases are perfectly simple and easy to distinguish.</p>
                                <ul class="courses-details-list">
                                    <li>
                                        <i class="far fa-check-circle"></i>
                                        <p>Pendaftaran dilakukan secara Online dengan mengisi Formulir di link
                                            www.yayasanshineal-falah.com</p>
                                    </li>
                                    <li>
                                        <i class="far fa-check-circle"></i>
                                        <p>Mentransfer biaya Pendaftaran sebesar Rp. 100.000,-  ke No. Rek. BRI: 0058-01-021503-53-9 an Ponpes Perkampungan Minangkabau. </p>
                                    </li>
                                    <li>
                                        <i class="far fa-check-circle"></i>
                                        <p>Mengirimkan Bukti Pembayaran/Transfer ke No. CP: 081371916486 </p>
                                    </li>
                                    <li>
                                        <i class="far fa-check-circle"></i>
                                        <p>Mendapatkan Kartu Peserta</p>
                                    </li>
                                    <li>
                                        <i class="far fa-check-circle"></i>
                                        <p>Mengikuti Ujian Tes Tertulis, Praktek Shalat, Baca Al qur'an, dan pada Tgl. 05 Mei 2021</p>
                                    </li>
                                    <li>
                                        <i class="far fa-check-circle"></i>
                                        <p>Pengumuman Kelulusan Santri Baru di Link www.yayasanshineal-falah.com</p>
                                    </li>
                                    <li>
                                        <i class="far fa-check-circle"></i>
                                        <p>Daftar Ulang dan melengkapi Berkas pada Tgl. 08-12 Mei 2021.</p>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="pendaftar" role="tabpanel">
                            <div class="curriculum-content">
                                <div class="row">
                                    <div class="col-md-4 col-sm-6">
                                        <div class="single-curriculum">
                                            <h4 class="title">1st Semester</h4>
                                            <ul class="curriculum-list">
                                                <li><a href="#"><i class="fal fa-book"></i> Lessons 1.1: Introduction</a></li>
                                                <li><a href="#"><i class="fal fa-book"></i> Lessons 1.2: Know about BBA</a></li>
                                                <li><a href="#"><i class="fal fa-book"></i> Lessons 1.3: How to improve</a></li>
                                                <li><a href="#"><i class="fal fa-book"></i> Lessons 1.4: Business Math</a></li>
                                                <li><a href="#"><i class="fal fa-book"></i> Lessons 1.1: Social Marketing</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="col-md-4 col-sm-6">
                                        <div class="single-curriculum">
                                            <h4 class="title">2nd Semester</h4>
                                            <ul class="curriculum-list">
                                                <li><a href="#"><i class="fal fa-book"></i> Lessons 1.1: Introduction</a></li>
                                                <li><a href="#"><i class="fal fa-book"></i> Lessons 1.2: Know about BBA</a></li>
                                                <li><a href="#"><i class="fal fa-book"></i> Lessons 1.3: How to improve</a></li>
                                                <li><a href="#"><i class="fal fa-book"></i> Lessons 1.4: Business Math</a></li>
                                                <li><a href="#"><i class="fal fa-book"></i> Lessons 1.1: Social Marketing</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="col-md-4 col-sm-6">
                                        <div class="single-curriculum">
                                            <h4 class="title">3rd Semester</h4>
                                            <ul class="curriculum-list">
                                                <li><a href="#"><i class="fal fa-book"></i> Lessons 1.1: Introduction</a></li>
                                                <li><a href="#"><i class="fal fa-book"></i> Lessons 1.2: Know about BBA</a></li>
                                                <li><a href="#"><i class="fal fa-book"></i> Lessons 1.3: How to improve</a></li>
                                                <li><a href="#"><i class="fal fa-book"></i> Lessons 1.4: Business Math</a></li>
                                                <li><a href="#"><i class="fal fa-book"></i> Lessons 1.1: Social Marketing</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="col-md-4 col-sm-6">
                                        <div class="single-curriculum">
                                            <h4 class="title">4th Semester</h4>
                                            <ul class="curriculum-list">
                                                <li><a href="#"><i class="fal fa-book"></i> Lessons 1.1: Introduction</a></li>
                                                <li><a href="#"><i class="fal fa-book"></i> Lessons 1.2: Know about BBA</a></li>
                                                <li><a href="#"><i class="fal fa-book"></i> Lessons 1.3: How to improve</a></li>
                                                <li><a href="#"><i class="fal fa-book"></i> Lessons 1.4: Business Math</a></li>
                                                <li><a href="#"><i class="fal fa-book"></i> Lessons 1.1: Social Marketing</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="col-md-4 col-sm-6">
                                        <div class="single-curriculum">
                                            <h4 class="title">5th Semester</h4>
                                            <ul class="curriculum-list">
                                                <li><a href="#"><i class="fal fa-book"></i> Lessons 1.1: Introduction</a></li>
                                                <li><a href="#"><i class="fal fa-book"></i> Lessons 1.2: Know about BBA</a></li>
                                                <li><a href="#"><i class="fal fa-book"></i> Lessons 1.3: How to improve</a></li>
                                                <li><a href="#"><i class="fal fa-book"></i> Lessons 1.4: Business Math</a></li>
                                                <li><a href="#"><i class="fal fa-book"></i> Lessons 1.1: Social Marketing</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="col-md-4 col-sm-6">
                                        <div class="single-curriculum">
                                            <h4 class="title">6th Semester</h4>
                                            <ul class="curriculum-list">
                                                <li><a href="#"><i class="fal fa-book"></i> Lessons 1.1: Introduction</a></li>
                                                <li><a href="#"><i class="fal fa-book"></i> Lessons 1.2: Know about BBA</a></li>
                                                <li><a href="#"><i class="fal fa-book"></i> Lessons 1.3: How to improve</a></li>
                                                <li><a href="#"><i class="fal fa-book"></i> Lessons 1.4: Business Math</a></li>
                                                <li><a href="#"><i class="fal fa-book"></i> Lessons 1.1: Social Marketing</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="col-md-4 col-sm-6">
                                        <div class="single-curriculum">
                                            <h4 class="title">7st Semester</h4>
                                            <ul class="curriculum-list">
                                                <li><a href="#"><i class="fal fa-book"></i> Lessons 1.1: Introduction</a></li>
                                                <li><a href="#"><i class="fal fa-book"></i> Lessons 1.2: Know about BBA</a></li>
                                                <li><a href="#"><i class="fal fa-book"></i> Lessons 1.3: How to improve</a></li>
                                                <li><a href="#"><i class="fal fa-book"></i> Lessons 1.4: Business Math</a></li>
                                                <li><a href="#"><i class="fal fa-book"></i> Lessons 1.1: Social Marketing</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="col-md-4 col-sm-6">
                                        <div class="single-curriculum">
                                            <h4 class="title">8th Semester</h4>
                                            <ul class="curriculum-list">
                                                <li><a href="#"><i class="fal fa-book"></i> Lessons 1.1: Introduction</a></li>
                                                <li><a href="#"><i class="fal fa-book"></i> Lessons 1.2: Know about BBA</a></li>
                                                <li><a href="#"><i class="fal fa-book"></i> Lessons 1.3: How to improve</a></li>
                                                <li><a href="#"><i class="fal fa-book"></i> Lessons 1.4: Business Math</a></li>
                                                <li><a href="#"><i class="fal fa-book"></i> Lessons 1.1: Social Marketing</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="col-md-4 col-sm-6">
                                        <div class="single-curriculum">
                                            <h4 class="title">9th Semester</h4>
                                            <ul class="curriculum-list">
                                                <li><a href="#"><i class="fal fa-book"></i> Lessons 1.1: Introduction</a></li>
                                                <li><a href="#"><i class="fal fa-book"></i> Lessons 1.2: Know about BBA</a></li>
                                                <li><a href="#"><i class="fal fa-book"></i> Lessons 1.3: How to improve</a></li>
                                                <li><a href="#"><i class="fal fa-book"></i> Lessons 1.4: Business Math</a></li>
                                                <li><a href="#"><i class="fal fa-book"></i> Lessons 1.1: Social Marketing</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="col-md-4 col-sm-6">
                                        <div class="single-curriculum">
                                            <h4 class="title">10th Semester</h4>
                                            <ul class="curriculum-list">
                                                <li><a href="#"><i class="fal fa-book"></i> Lessons 1.1: Introduction</a></li>
                                                <li><a href="#"><i class="fal fa-book"></i> Lessons 1.2: Know about BBA</a></li>
                                                <li><a href="#"><i class="fal fa-book"></i> Lessons 1.3: How to improve</a></li>
                                                <li><a href="#"><i class="fal fa-book"></i> Lessons 1.4: Business Math</a></li>
                                                <li><a href="#"><i class="fal fa-book"></i> Lessons 1.1: Social Marketing</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="col-md-4 col-sm-6">
                                        <div class="single-curriculum">
                                            <h4 class="title">11th Semester</h4>
                                            <ul class="curriculum-list">
                                                <li><a href="#"><i class="fal fa-book"></i> Lessons 1.1: Introduction</a></li>
                                                <li><a href="#"><i class="fal fa-book"></i> Lessons 1.2: Know about BBA</a></li>
                                                <li><a href="#"><i class="fal fa-book"></i> Lessons 1.3: How to improve</a></li>
                                                <li><a href="#"><i class="fal fa-book"></i> Lessons 1.4: Business Math</a></li>
                                                <li><a href="#"><i class="fal fa-book"></i> Lessons 1.1: Social Marketing</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="col-md-4 col-sm-6">
                                        <div class="single-curriculum">
                                            <h4 class="title">12th Semester</h4>
                                            <ul class="curriculum-list">
                                                <li><a href="#"><i class="fal fa-book"></i> Lessons 1.1: Introduction</a></li>
                                                <li><a href="#"><i class="fal fa-book"></i> Lessons 1.2: Know about BBA</a></li>
                                                <li><a href="#"><i class="fal fa-book"></i> Lessons 1.3: How to improve</a></li>
                                                <li><a href="#"><i class="fal fa-book"></i> Lessons 1.4: Business Math</a></li>
                                                <li><a href="#"><i class="fal fa-book"></i> Lessons 1.1: Social Marketing</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="penerimaan" role="tabpanel">
                            <div class="courses-teachers">
                                <div class="row">
                                    <div class="col-md-4 col-sm-6">
                                        <div class="single-teacher mt-30 text-center">
                                            <div class="teacher-social">
                                                <ul class="social">
                                                    <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                                    <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                                    <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                                                    <li><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
                                                </ul>
                                            </div>
                                            <div class="teacher-image">
                                                <a href="teacher-details.html">
                                                    <img src="assets/images/teachers/teacher-1.jpg" alt="teacher">
                                                </a>
                                            </div>
                                            <div class="teacher-content">
                                                <h4 class="name"><a href="teacher-details.html">Roberto Carlos</a></h4>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4 col-sm-6">
                                        <div class="single-teacher mt-30 text-center">
                                            <div class="teacher-social">
                                                <ul class="social">
                                                    <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                                    <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                                    <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                                                    <li><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
                                                </ul>
                                            </div>
                                            <div class="teacher-image">
                                                <a href="teacher-details.html">
                                                    <img src="assets/images/teachers/teacher-2.jpg" alt="teacher">
                                                </a>
                                            </div>
                                            <div class="teacher-content">
                                                <h4 class="name"><a href="teacher-details.html">Roberto Carlos</a></h4>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4 col-sm-6">
                                        <div class="single-teacher mt-30 text-center">
                                            <div class="teacher-social">
                                                <ul class="social">
                                                    <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                                    <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                                    <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                                                    <li><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
                                                </ul>
                                            </div>
                                            <div class="teacher-image">
                                                <a href="teacher-details.html">
                                                    <img src="assets/images/teachers/teacher-3.jpg" alt="teacher">
                                                </a>
                                            </div>
                                            <div class="teacher-content">
                                                <h4 class="name"><a href="teacher-details.html">Roberto Carlos</a></h4>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="reviews" role="tabpanel">
                            <div class="courses-reviews">
                                <div class="review-wrapper">
                                    <div class="review-star">
                                        <div class="single-review">
                                            <span class="label">Stars 5</span>
                                            <div class="review-bar">
                                                <div class="bar-inner" style="width: 100%;"></div>
                                            </div>
                                            <span class="value">35</span>
                                        </div>
                                        <div class="single-review">
                                            <span class="label">Stars 4</span>
                                            <div class="review-bar">
                                                <div class="bar-inner" style="width: 80%;"></div>
                                            </div>
                                            <span class="value">10</span>
                                        </div>
                                        <div class="single-review">
                                            <span class="label">Stars 3</span>
                                            <div class="review-bar">
                                                <div class="bar-inner" style="width: 55%;"></div>
                                            </div>
                                            <span class="value">8</span>
                                        </div>
                                        <div class="single-review">
                                            <span class="label">Stars 2</span>
                                            <div class="review-bar">
                                                <div class="bar-inner" style="width: 0;"></div>
                                            </div>
                                            <span class="value">0</span>
                                        </div>
                                        <div class="single-review">
                                            <span class="label">Stars 1</span>
                                            <div class="review-bar">
                                                <div class="bar-inner" style="width: 0;"></div>
                                            </div>
                                            <span class="value">0</span>
                                        </div>
                                    </div>
                                    <div class="review-point">
                                        <span>4.9</span>
                                    </div>
                                </div>

                                <div class="review-form">
                                    <div class="review-rating">
                                        <h5 class="title">Write a Review</h5>

                                        <ul id='stars'>
                                            <li class='star' title='Poor' data-value='1'>
                                              <i class='fas fa-star'></i>
                                            </li>
                                            <li class='star' title='Fair' data-value='2'>
                                              <i class='fas fa-star'></i>
                                            </li>
                                            <li class='star' title='Good' data-value='3'>
                                              <i class='fas fa-star'></i>
                                            </li>
                                            <li class='star' title='Excellent' data-value='4'>
                                              <i class='fas fa-star'></i>
                                            </li>
                                            <li class='star' title='WOW!!!' data-value='5'>
                                              <i class='fas fa-star'></i>
                                            </li>
                                        </ul>
                                    </div>

                                    <div class="review-form-wrapper">
                                        <form action="#">
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="single-form">
                                                        <input type="text" placeholder="Name">
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="single-form">
                                                        <input type="email" placeholder="Email">
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="single-form">
                                                        <input type="text" placeholder="Phone">
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="single-form">
                                                        <input type="text" placeholder="Title">
                                                    </div>
                                                </div>
                                                <div class="col-md-12">
                                                    <div class="single-form">
                                                        <textarea placeholder="Write here..."></textarea>
                                                    </div>
                                                </div>
                                                <div class="col-md-12">
                                                    <div class="single-form">
                                                        <button class="main-btn">Submit now</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3">
                <div class="courses-sidebar pt-20">
                    <div class="courses-features mt-30">
                        <div class="sidebar-title">
                            <h4 class="title">CP Panitia</h4>
                        </div>
                        <ul class="courses-features-items">
                            <li>Ponpes PMK <strong>081371916486</strong></li>
                            <li>Syukri Yanto <strong>081266583335</strong></li>
                            {{-- <li>Credit <strong>180</strong></li>
                            <li>Semester <strong>12</strong></li>
                            <li>Quizzes <strong>2</strong></li>
                            <li>Pass Parcentages <strong>80%</strong></li>
                            <li>Maximum Retakes <strong>5</strong></li>
                            <li>Rating <strong>4.9(80 reviews)</strong></li> --}}
                        </ul>
                        {{-- <div class="sidebar-btn">
                            <a class="main-btn" href="#">Enroll Course</a>
                        </div> --}}
                    </div>

                    <div class="courses-sidebar-banner mt-30">
                        <a href="#">
                            <img src="assets/images/banner.jpg" alt="">
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
