@extends('frontend.templates.default')

@section('title')
    Pendidik
@endsection

@section('header')
    @include('frontend.templates._header')
@endsection

@section('page_banner')
@section('banner_title')
    Data Tenaga Pendidik
@endsection
    @include('frontend.templates._banner')
@endsection

@section('content')
<section class="top-courses-area">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-8">
                <div class="courses-menu pt-40 text-center">
                    <ul class="menu-items">
                        <li data-filter="*" class="active">Semua</li>
                        <li data-filter=".mi">MI</li>
                        <li data-filter=".mts">MTs</li>
                        <li data-filter=".ma">MA</li>
                        <li data-filter=".salafiyah">Salafiyah</li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="courses-wrapper">
            <div class="row grid">
                <div class="col-md-4 col-sm-6 teachers-col salafiyah">
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
                                <img src="{{ asset('assets/images/teachers/teacher-1.jpg') }}" alt="teacher">
                            </a>
                        </div>
                        <div class="teacher-content">
                            <h4 class="name"><a href="teacher-details.html">Ust Halim</a></h4>
                            <span class="designation">Tata Usaha</span>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6 teachers-col mi">
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
                                <img src="{{ asset('assets/images/teachers/teacher-2.jpg') }}" alt="teacher">
                            </a>
                        </div>
                        <div class="teacher-content">
                            <h4 class="name"><a href="teacher-details.html">Sovi Harpina</a></h4>
                            <span class="designation">Bendahara Yayasan</span>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6 teachers-col mts">
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
                                <img src="{{ asset('assets/images/teachers/teacher-3.jpg') }}" alt="teacher">
                            </a>
                        </div>
                        <div class="teacher-content">
                            <h4 class="name"><a href="teacher-details.html">Olga Putri Miyondra</a></h4>
                            <span class="designation">Bendahara</span>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6 teachers-col ma">
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
                                <img src="{{ asset('assets/images/teachers/teacher-4.jpg') }}" alt="teacher">
                            </a>
                        </div>
                        <div class="teacher-content">
                            <h4 class="name"><a href="{{ route('details_pendidik') }}">Syukri Yanto, S.Kom</a></h4>
                            <span class="designation">IT Dev</span>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6 teachers-col salafiyah">
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
                                <img src="{{ asset('assets/images/teachers/teacher-5.jpg') }}" alt="teacher">
                            </a>
                        </div>
                        <div class="teacher-content">
                            <h4 class="name"><a href="teacher-details.html">Lisa Ardila</a></h4>
                            <span class="designation">Sekretaris Yayasan</span>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6 teachers-col mts">
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
                                <img src="{{ asset('assets/images/teachers/teacher-6.jpg') }}" alt="teacher">
                            </a>
                        </div>
                        <div class="teacher-content">
                            <h4 class="name"><a href="teacher-details.html">Adi Sahyogi, S.Pd.I</a></h4>
                            <span class="designation">Pimpinan Pondok</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <ul class="pagination-items text-center">
            <li><a class="active" href="#">01</a></li>
            <li><a href="#">02</a></li>
            <li><a href="#">03</a></li>
            <li><a href="#">04</a></li>
            <li><a href="#">05</a></li>
        </ul>
    </div>
</section>
@endsection
