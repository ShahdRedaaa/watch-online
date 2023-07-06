@extends('layouts.main')
@section('content')
    
<!-- Header Start-->
<div id="header">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-md-7">
                <div class="header-content">
                    <h2><span>WATCH</span> is the best <span>Landing Page</span> to showcause your product</h2>
                    <ul class="fa-ul">
                        <li><span class="fa-li"><i class="far fa-arrow-alt-circle-right"></i></span>Android and iOS Support</li>
                        <li><span class="fa-li"><i class="far fa-arrow-alt-circle-right"></i></span>GPS & Health Tracker</li>
                        <li><span class="fa-li"><i class="far fa-arrow-alt-circle-right"></i></span>Read & reply to messages</li>
                        <li><span class="fa-li"><i class="far fa-arrow-alt-circle-right"></i></span>Compatible with all devices</li>
                    </ul>
                    <a class="btn" href="#">Buy Now</a>
                </div>
            </div>
            <div class="col-md-5">
                <div class="header-img">
                    <img src="{{ asset('img/watch-header.png') }} " alt="Product Image">
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Header End-->

<!-- Feature Start-->
<div id="feature">
    <div class="container">
        <div class="section-header">
            <h2>Product Features</h2>
            <p>
                The advantages that we add to our products, which make them stand out and remain ahead
            </p>
        </div>
        <div class="row align-items-center">
            <div class="col-md-4">
                <div class="product-feature">
                    <div class="product-content">
                        <h2>Innovative technology</h2>
                        <p>
                            It keeps pace with technology and is constantly evolving</p>
                    </div>
                    <div class="product-icon">
                        <i class="fa fa-lightbulb"></i>
                    </div>
                </div>
                <div class="product-feature">
                    <div class="product-content">
                        <h2>Fast and secure</h2>
                        <p>
                            It is distinguished by its high speed that never lets you down</p>
                    </div>
                    <div class="product-icon">
                        <i class="fa fa-key"></i>
                    </div>
                </div>
                <div class="product-feature">
                    <div class="product-content">
                        <h2>Easy to operate</h2>
                        <p>
                            It is safe and has high protection that preserves your privacy</p>
                    </div>
                    <div class="product-icon">
                        <i class="fa fa-thumbs-up"></i>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="product-img">
                    <img src="{{ asset('img/watch-features.png') }}" alt="Product Image">
                </div>
            </div>
            <div class="col-md-4">
                <div class="product-feature">
                    <div class="product-icon">
                        <i class="fa fa-map-marker-alt"></i>
                    </div>
                    <div class="product-content">
                        <h2>GPS Tracking</h2>
                        <p>
                            It helps you to know your current location and the location of your mobile phone</p>
                    </div>
                </div>
                <div class="product-feature">
                    <div class="product-icon">
                        <i class="fa fa-heartbeat"></i>
                    </div>
                    <div class="product-content">
                        <h2>Heartbeat Analysis</h2>
                        <p>Helping you to maintain and take care of your health</p>
                    </div>
                </div>
                <div class="product-feature">
                    <div class="product-icon">
                        <i class="fa fa-crown"></i>
                    </div>
                    <div class="product-content">
                        <h2>Gorgeous color</h2>
                        <p>
                            It has many colors to suit everyone</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Feature End-->

<!-- Process Start-->
<div id="process">
    <div class="container">
        <div class="section-header">
            <h2>How It Works</h2>
            <p>
                You should follow this steps to make your watch work
                
            </p>
        </div>
        <div class="row">
            <div class="col-md-4">
                <div class="process-col">
                    <i class="fa fa-plug"></i>
                    <h2>Connect Device</h2>
                    <p>
                        You must first make it connect to your phone through the Internet or Bluetooth
                    </p>
                </div>
            </div>
            <div class="col-md-4">
                <div class="process-col">
                    <i class="fa fa-sliders-h"></i>
                    <h2>Configure it</h2>
                    <p>
                        After that you should reset the settings and allow it to communicate and access your phone
                    </p>
                </div>
            </div>
            <div class="col-md-4">
                <div class="process-col">
                    <i class="fa fa-check"></i>
                    <h2>Done. Enjoy!!!</h2>
                    <p>
                        If you completed the previous stages, then you succeeded in the process,,Enjoyy
                    </p>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Process End-->


<!-- Products Start -->
<div id="products">
    <div class="container">
        <div class="section-header">
            <h2>Get Your Products</h2>
            <p>
                We provide you with the best types of smart and unique watches
            </p>
        </div>
        <div class="row align-items-center">
            @foreach ($products as $product)
                
            
            <div class="col-md-3">
                <div class="product-single">
                    <div class="product-img">
                        <img src="{{ asset('img/'.$product->image) }} " alt="Product Image">
                    </div>
                    <div class="product-content">
                        <h2>
                           <a href="{{ route('single_product', ['id'=>$product->id]) }}"> {{$product->name}} </a>
                        </h2>
                       @if ($product->sale != null)
                       <h3>${{$product->sale}}</h3>
                       <h3 class="text-muted" style="text-decoration: line-through;font-size:20px">${{$product->price}}</h3>
                       @else
                       <h3>${{$product->price}}</h3> 
                       @endif
                        
                       <form action="{{ route('add_to_cart') }}" method="post">
                        @csrf
                        
                        <input type="hidden" name="id" value="{{$product->id}}" >
                        <input type="hidden" name="name" value="{{$product->name}}" >
                        <input type="hidden" name="price" value="{{$product->price}}" >
                        <input type="hidden" name="sale" value="{{$product->sale}}" >
                        <input type="hidden" name="quantity" value="1" >
                        <input type="hidden" name="image" value="{{$product->image}}" >
                        <input type="submit" value="Add To Cart" class="btn btn-group-sm ">
                        </form>
                        
                    </div>
                </div>
            </div>
            @endforeach
        </div>

        <div class="mt-5 text-center"><a href="{{ route('products') }}" class="btn " style="background-color:#d45c8e;color:white ">View All Products</a></div>
       
    </div>
</div>
<!-- Products End -->


<!-- Testimonials Start -->
<div id="testimonials">
    <div class="container">
        <div class="section-header">
            <h2>99.99% Positive Reviews</h2>
            <p>
                Customer in our shop are member in family not only pay
            </p>
        </div>
        <div class="owl-carousel testimonials-carousel">
            <div class="testimonial-item">
                <div class="testimonial-img">
                    <img src="{{ asset('img/testimonial-1.jpg') }} " alt="">
                </div>
                <div class="testimonial-content">
                    <h3>Christopher Heath</h3>
                    <h4>Science technician</h4>
                    <p>
                        It is very good for my work
                    </p>
                </div>
            </div>

            <div class="testimonial-item">
                <div class="testimonial-img">
                    <img src="{{ asset('img/testimonial-2.jpg') }} " alt="">
                </div>
                <div class="testimonial-content">
                    <h3>Mollie White</h3>
                    <h4>Youtuber</h4>
                    <p>
                        Sooo cute i will recommened it for my followers 
                    </p>
                </div>
            </div>

            <div class="testimonial-item">
                <div class="testimonial-img">
                    <img src="{{ asset('img/testimonial-3.jpg') }} " alt="">
                </div>
                <div class="testimonial-content">
                    <h3>Tom McKenzie</h3>
                    <h4>Videographer</h4>
                    <p>
                        I loved it , I will pay agien 
                    </p>
                </div>
            </div>
            
            <div class="testimonial-item">
                <div class="testimonial-img">
                    <img src="{{ asset('img/testimonial-4.jpg') }} " alt="">
                </div>
                <div class="testimonial-content">
                    <h3>Ruby Forster</h3>
                    <h4>Photographer</h4>
                    <p>
                        wowwwwwwwwwwww?it is amazign 
                    </p>
                </div>
            </div>
            
            <div class="testimonial-item">
                <div class="testimonial-img">
                    <img src="{{ asset('img/testimonial-5.jpg') }} " alt="">
                </div>
                <div class="testimonial-content">
                    <h3>Leo Conway</h3>
                    <h4>Relationship manager</h4>
                    <p>
                         it is not good look only it work well!
                    </p>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Testimonials End -->


<!-- FAQ Start -->
<div id="faqs">
    <div class="container">
        <div class="section-header">
            <h2>Quick FAQs</h2>
            <p>
                Our Goal is facsailitiy your prushing and gain your l <i class="fa fa-heart"></i> ve
            </p>
        </div>
        <div class="row align-items-center">
            <div class="col-md-7">
                <div id="accordion">
                    <div class="card">
                        <div class="card-header">
                            <span>1</span>
                            <a class="card-link" data-toggle="collapse" href="#collapseOne">
                                Why Should I Buy This Product?
                            </a>
                        </div>
                        <div id="collapseOne" class="collapse" data-parent="#accordion">
                            <div class="card-body">
                                Our Products Have Very High Usability.Easy To Use,u can use it in water also can use for 6 hours without charge,,connection with your phone too any type of phones
                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-header">
                            <span>2</span>
                            <a class="card-link" data-toggle="collapse" href="#collapseTwo">
                               Is This Have Different Colors?
                            </a>
                        </div>
                        <div id="collapseTwo" class="collapse" data-parent="#accordion">
                            <div class="card-body">
                                Many of colors For u Any color U Need.
                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-header">
                            <span>3</span>
                            <a class="card-link" data-toggle="collapse" href="#collapseThree">
                                Where Can I Find U?
                            </a>
                        </div>
                        <div id="collapseThree" class="collapse" data-parent="#accordion">
                            <div class="card-body">
                               Our location is here follow our map if u have problem u can call our service and we will help u to come.
                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-header">
                            <span>4</span>
                            <a class="card-link" data-toggle="collapse" href="#collapseFour">
                                How Can Contact Your Shop?
                            </a>
                        </div>
                        <div id="collapseFour" class="collapse" data-parent="#accordion">
                            <div class="card-body">
                               U can follow many ways to commu with us(phone,mail,direct in shop).
                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-header">
                            <span>5</span>
                            <a class="card-link" data-toggle="collapse" href="#collapseFive">
                                Ways To pay?
                            </a>
                        </div>
                        <div id="collapseFive" class="collapse" data-parent="#accordion">
                            <div class="card-body">
                                Easily,,we support paypal and any card u want to pay.
                            </div>
                        </div>
                    </div> 
                </div>
            </div>
            
            <div class="col-md-5">
                <div class="contact-info">
                    <h2>Be With Us</h2>
                    <p>
                       We Will Be So Happy For Your Connection,Our Family Grow By u.
                    </p>
                    <h3><i class="fa fa-map-marker"></i>123 Trade Tower, Los Angeles, CA, USA</h3>
                    <h3><i class="fa fa-envelope"></i>ShahdRedaaa@example.com</h3>
                    <h3><i class="fa fa-phone"></i>+123-456-7890</h3>
                    <a class="btn" href="#">Contact Us</a>
                    <div class="social">
                        <a href=""><i class="fab fa-twitter"></i></a>
                        <a href=""><i class="fab fa-facebook"></i></a>
                        <a href=""><i class="fab fa-linkedin"></i></a>
                        <a href=""><i class="fab fa-instagram"></i></a>
                        <a href=""><i class="fab fa-youtube"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- FAQ Start -->


<!-- Footer Start -->
<div id="footer">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-md-6">
                <p>&copy; Copyright <a href="http://ShahdRedaa.com">Eng.ShahdRedaa</a>. All Rights Reserved</p>
            </div>
            <div class="col-md-6">
                <p>Done by <a href="">Eng.ShahdRedaa</a></p>
            </div>
        </div>
    </div>
</div>
<!-- Footer End -->


<!-- Back to Top -->
<a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a>


@endsection