@extends('frontend.templates.default')

@section('title')
    Details Pendidik
@endsection

@section('header')
    @include('frontend.templates._header')
@endsection

@section('page_banner')
@section('banner_title')
    Details Tenaga Pendidik
@endsection
    @include('frontend.templates._banner')
@endsection

@section('content')
<!--====== Teacher Details Start ======-->

<section class="teacher-details">
    <div class="container">
        <div class="row teachers-row justify-content-center">
            <div class="col-lg-5 col-md-6 col-sm-8 teachers-col">
                <div class="single-teacher-details mt-50 text-center">
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
                </div>
            </div>
            <div class="col-lg-5 teachers-col">
                <div class="teacher-details-content mt-45">
                    <h4 class="teacher-name">Syukri Yanto, S.Kom</h4>
                    <span class="designation">IT Developer</span>
                    <span class="department">Department of IT Developer Shine Al-Falah</span>
                    <p>Even slightly believable. If you are going use a passage of Lorem Ipsum need These cases are perfectly  simple and easy to distinguish. In a free hour, when our power of choice is untrammelled and when nothing prevents</p>
                    <ul class="teacher-contact">
                        <li><strong>Email:</strong> <a href="#">syukriyantorj@gmail.com</a></li>
                        <li><strong>Phone:</strong> <a href="#">+62 8126 6583 335</a></li>
                        <li><strong>Skype:</strong> <a href="#">syukri.yanto</a></li>
                    </ul>
                </div>
            </div>
        </div>

        <div class="teacher-details-tab">
            <ul class="nav nav-justified" role="tablist">
                <li class="nav-item"><a class="active" data-toggle="tab" href="#experience" role="tab">Pengalaman Kerja</a></li>
                <li class="nav-item"><a data-toggle="tab" href="#educational" role="tab">Kualifikasi Pendidikan</a></li>
                <li class="nav-item"><a data-toggle="tab" href="#achievements " role="tab">Prestasi </a></li>
            </ul>
            <div class="tab-content">
                <div class="tab-pane fade show active" id="experience" role="tabpanel">
                    <div class="row">
                        <div class="col-lg-3 col-sm-6">
                            <div class="single-content-tab">
                                <h4 class="title">IT Desktop Suport Enginering (DSE)</h4>
                                <p><a href="https://www.mncgroup.com/" target="_blank" rel="noopener noreferrer">PT. Media Nusantara Citra Tbk.</a></p>
                                <p>Menteng Jakarta</p>
                                <p>13/03/2017 to 07/10/2020</p>
                            </div>
                        </div>
                        <div class="col-lg-3 col-sm-6">
                            <div class="single-content-tab">
                                <h4 class="title">Staff IT</h4>
                                <p>Yayasan Shine Al-Falah</p>
                                <p>Kota Padang</p>
                                <p>2013 to 2016</p>
                            </div>
                        </div>
                        <div class="col-lg-3 col-sm-6">
                            <div class="single-content-tab">
                                <h4 class="title">Design Grafis and Digital Printing Operator</h4>
                                <p>ADAM KARYA PRINTING</p>
                                <p>Sambil Kuliah di Kota Padang</p>
                                <p>2011 to 2013</p>
                            </div>
                        </div>
                        <div class="col-lg-3 col-sm-6">
                            <div class="single-content-tab">
                                <h4 class="title">QC (Quality Control) ROT Dep.</h4>
                                <p><a href="https://www.shimano.com/en/company/locations/sbm_id.html" target="_blank" rel="noopener noreferrer">PT. SHIMANO BATAM</a></p>
                                <p>Batam</p>
                                <p>2010 to 2011</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="tab-pane fade" id="educational" role="tabpanel">
                    <div class="row">
                        <div class="col-lg-4 col-sm-6">
                            <div class="single-content-tab">
                                <h4 class="title">S.Kom Sistem Informasi</h4>
                                <p><a href="http://jayanusa.ac.id/" target="_blank" rel="noopener noreferrer">(STMIK) Jayanusa Padang</a></p>
                                <p>PK = 3.48 (Skala 4)</p>
                                <p>012 – 2016 | PADANG</p>
                            </div>
                        </div>
                        <div class="col-lg-4 col-sm-6">
                            <div class="single-content-tab">
                                <h4 class="title">ELEKTRONIKA (Teknik Audio Vidio)</h4>
                                <p>SMK TAMAN SISWA PAYAKUMBUH</p>
                                <p>2006 – 2009 | PAYAKUMBUH</p>
                            </div>
                        </div>
                        <div class="col-lg-4 col-sm-6">
                            <div class="single-content-tab">
                                <h4 class="title">LULUS</h4>
                                <p>SMP Negeri 3 Pangkalan Koto Baru</p>
                                <p>2002 – 2005 | GUNUNG MALINTANG</p>
                            </div>
                        </div>
                        <div class="col-lg-4 col-sm-6">
                            <div class="single-content-tab">
                                <h4 class="title">LULUS</h4>
                                <p>SDN 22 BATU KAJANG</p>
                                <p>1996 – 2002 | GUNUNG MALINTANG</p>
                            </div>
                        </div>

                    </div>
                </div>
                <div class="tab-pane fade" id="achievements" role="tabpanel">
                    <div class="row">
                        <div class="col-lg-4 col-sm-6">
                            <div class="single-content-tab">
                                <h4 class="title">Best Recherche Award 2019</h4>
                                <p>Lorem Ipsum need These cases are perfectly  simple and easy to distinguish. In a free hour, when our power of choice.</p>
                            </div>
                        </div>
                        <div class="col-lg-4 col-sm-6">
                            <div class="single-content-tab">
                                <h4 class="title">Faculty Gold Medalist 2018</h4>
                                <p>Lorem Ipsum need These cases are perfectly  simple and easy to distinguish. In a free hour, when our power of choice.</p>
                            </div>
                        </div>
                        <div class="col-lg-4 col-sm-6">
                            <div class="single-content-tab">
                                <h4 class="title">Best Teacher Award 2015</h4>
                                <p>Lorem Ipsum need These cases are perfectly  simple and easy to distinguish. In a free hour, when our power of choice.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!--====== Teacher Details Ends ======-->
@endsection
