<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    @include('frontend.templates._head')
</head>

<body>
    
    <!--====== Header Start ======-->

    @include('frontend.templates._header')

    <!--====== Header Ends ======-->
    
    <!--====== Slider Start ======-->

    @include('frontend.templates._slider')
    {{-- @yield('slider') --}} <!--====== Nantik akan dijadikan yield ======-->

    <!--====== Slider Ends ======-->
    
    <!--====== Contents ======-->
    @yield('content')
    <!--====== Contents Ends ======-->
    
    
    <!--====== Footer Start ======-->
    <!--====== Newsletter Start ======-->
    
    @include('frontend.templates._footer')

    <!--====== Newsletter Ends ======-->
    <!--====== Footer Ends ======-->

    <!--====== BACK TOP TOP PART START ======-->

    <a href="#" class="back-to-top"><i class="fal fa-chevron-up"></i></a>

    <!--====== BACK TOP TOP PART ENDS ======-->
    
    <!--====== Start ======-->

<!--
    <section class="">
        <div class="container">
            <div class="row">
                <div class="col-lg-">
                    
                </div>
            </div>
        </div>
    </section>
-->

    <!--====== Ends ======-->




    <!--====== Jquery js ======-->
    @include('frontend.templates._js')

    
</body>

</html>
