@extends('frontend.templates.default')

@section('title')
    Kontak
@endsection

@section('header')
    @include('frontend.templates._header')
@endsection

@section('page_banner')
    @section('banner_title')
        Kontak Kami
    @endsection
    @include('frontend.templates._banner')
@endsection

@section('content')
    <!--====== Kontak Start ======-->

    <section class="event-details">
        <div class="container">
            <div class="row">
                <div class="col-sm">
                    <div class="event-details-content mt-50">
                        {{-- <img src="assets/images/event-details.jpg" alt=""> --}}

                        <h2 class="title">Kontak Person Top Leader Yayasan Shine Al-Falah</h2>

                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Repellendus itaque quam, earum ex corporis sunt quaerat totam recusandae praesentium nostrum, quis cum laborum debitis. Quis ad laudantium doloribus totam nesciunt.</p>



                        {{-- <div class="event-teachers">
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
                        </div> --}}

                        <div class="event-schedule">
                            <div class="event-schedule-table table-responsive col-md-10">
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th class="">Nama</th>
                                            <th class="">Jabatan</th>
                                            <th class="">No. Handphone</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td class="">Drs. ASA BETA, M. Pd., DT. PANGHULU</td>
                                            <td class="">Ketua Pembina Yayasan</td>
                                            <td class="">+62 813 6341 6130</td>
                                        </tr>
                                        <tr>
                                            <td class="">SYAMSUL AKMAL, S. Ag., M.M., TUANKU PUTIAH</td>
                                            <td class="">Ketua Pengurus Yayasan</td>
                                            <td class="">+62 812 6645 4545</td>
                                        </tr>
                                        <tr>
                                            <td class="">LISA ARDILA, S.E</td>
                                            <td class="">Sekretaris Yayasan</td>
                                            <td class="">+62 822 7554 6084</td>
                                        </tr>
                                        <tr>
                                            <td class="">LENI MARLINI, S.Pd.I., M.Ag</td>
                                            <td class="">Bendahara Yayasan</td>
                                            <td class="">+62 853 6586 7115</td>
                                        </tr>
                                        <tr>
                                            <td class="">Drs. ZULMASRI</td>
                                            <td class="">Ketua Pembangunan</td>
                                            <td class="">+62 815 2571 7172</td>
                                        </tr>

                                    </tbody>
                                  </table>
                            </div>
                        </div>

                        <div class="event-message">
                            <h5 class="sub-title">Lorem ipsum</h5>

                            <p>Here is our event schedule where you can get information about time schedule about this event so it's very easy for you to manage your time and schedule</p>


                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <!--====== Kontak Ends ======-->
@endsection
