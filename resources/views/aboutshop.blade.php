@extends('layouts.main')
@section('content')

<header class="py-5" style="background-color: #0d0d0d">
    <div class="container px-5">
        <div class="row justify-content-center">
            <div class="col-lg-8 col-xxl-6">
                <div class="text-center my-5">
                    <h1 class="fw-bolder mb-3" style="color: #d45c8e">Our mission is to make smart watches for everyone.</h1>
                    <p class="lead fw-normal text-muted mb-4">Egywatch offers the widest variety of world-class timepieces, from a carefully selected list of global brands, with excellent quality service and fast delivery right to our client’s doorstep.

                        To ensure authenticity, all products we offer are supplied to us directly from the brand’s official exclusive agent and held carefully at our inventory warehouses until purchased..</p>
                    <a class="btn  btn-lg" href="#" style="background-color: #d45c8e;color: white ">See All Artical</a>
                </div>
            </div>
        </div>
    </div>
</header>
<!-- About section one-->
<section class="py-5 " id="scroll-target" style="background-color: #000000">
    <div class="container px-5 my-5">
        <div class="row gx-5 align-items-center">
            <div class="col-lg-6"><img class="img-fluid rounded mb-5 mb-lg-0" src="{{ asset('img/about1.png') }}" alt="..." /></div>
            <div class="col-lg-6">
                <h2 class="fw-bolder"  style="color: #d45c8e">OUR PASSION</h2>
                <p class="lead fw-normal text-muted mb-0">At Egywatch, we are passionate about setting new standards for the local watch market. We believe that our products complement people’s lives. This core belief continues to drive our company forward, from enhancing the way we work with our partners to further developing our entire customer experience..</p>
            </div>
        </div>
    </div>
</section>
<!-- About section two-->
<section class="py-5" style="background-color: #0d0d0d">
    <div class="container px-5 my-5">
        <div class="row gx-5 align-items-center">
            <div class="col-lg-6 order-first order-lg-last"><img class="img-fluid rounded mb-5 mb-lg-0" src="{{ asset('img/about2.png') }}" alt="..." /></div>
            <div class="col-lg-6">
                <h2 class="fw-bolder"  style="color: #d45c8e">OUR PROMISE</h2>
                <p class="lead fw-normal text-muted mb-0">We strive to put our clients above all in everything we do, ensuring that we offer products that cater to every style or preference. The service we offer to our clients has always been and shall continue to serve far beyond the sole purpose of purchase, through our partnerships with highly qualified after-sales service centers.

                    Explore Egywatch and browse through a variety of the world’s latest timepiece collections, only one doorstep away!</p>
            </div>
        </div>
    </div>
</section>
<!-- Team members section-->
<section class="py-5 " style="background-color: #0d0d0d">
    <div class="container px-5 my-5">
        <div class="text-center">
            <h2 class="fw-bolder"  style="color: #d45c8e" >Our team</h2>
            <p class="lead fw-normal text-muted mb-5">We are a team that consists of the most qualified and skilled watch professionals in Egypt, with more than 20 years of experience in the local and foreign watch market.</p>
        </div>
        <div class="row gx-5 row-cols-1 row-cols-sm-2 row-cols-xl-4 justify-content-center">
            <div class="col mb-5 mb-5 mb-xl-0">
                <div class="text-center">
                    <img class="img-fluid rounded-circle mb-4 px-4" src="{{ asset('img/testimonial-1.jpg') }}" alt="..." />
                    <h5 class="fw-bolder">hanii</h5>
                    <div class="fst-italic text-muted">computer science and programmer</div>
                </div>
            </div>
            <div class="col mb-5 mb-5 mb-xl-0">
                <div class="text-center">
                    <img class="img-fluid rounded-circle mb-4 px-4" src="{{ asset('img/testimonial-2.jpg') }}" alt="..." />
                    <h5 class="fw-bolder">mamy mo</h5>
                    <div class="fst-italic text-muted">designer</div>
                </div>
            </div>
            <div class="col mb-5 mb-5 mb-sm-0">
                <div class="text-center">
                    <img class="img-fluid rounded-circle mb-4 px-4" src="{{ asset('img/testimonial-3.jpg') }}" alt="..." />
                    <h5 class="fw-bolder">kaaan</h5>
                    <div class="fst-italic text-muted">Operations Manager</div>
                </div>
            </div>
            <div class="col mb-5">
                <div class="text-center">
                    <img class="img-fluid rounded-circle mb-4 px-4" src="{{ asset('img/testimonial-4.jpg') }}" alt="..." />
                    <h5 class="fw-bolder">Malvina </h5>
                    <div class="fst-italic text-muted">marketing manger</div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Footer Start -->
<div id="footer" style="background-color: #0d0d0d">
    <div class="container " >
        <div class="row align-items-center">
            <div class="col-md-6">
                <p>&copy; Copyright <a href="http://Eng.ShahdRedaa.com">Eng.ShahdRedaa</a>. All Rights Reserved</p>
            </div>
            <div class="col-md-6">
                <p>Done by <a href="">Eng.ShahdRedaa</a></p>
            </div>
        </div>
    </div>
</div>
<!-- Footer End -->





@endsection