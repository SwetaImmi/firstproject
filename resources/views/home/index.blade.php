@extends('home.layout.app')
@section('content')

<!-- ***** Main Banner Area Start ***** -->


<div class="main-banner" id="top">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-6">
                <div class="left-content">
                    <div class="thumb">
                        <div class="inner-content">
                            <h4>We Are Test</h4>
                            <span>Awesome, clean &amp; creative HTML5 Template</span>
                            <div class="main-border-button">
                                <a href="#">Purchase Now!</a>
                            </div>
                        </div>
                        @foreach($banner as $galleries)
                    @if( $galleries->status == 1)
                        <img src="{{ asset('uploads1/'.$galleries->banner_img) }}" alt="" style="  height: 560px;">
                        <!-- background-image: url('< ?= (isset($data->coverphoto))?asset('images/') . $data->coverphoto: asset('images/placeholder.jpg') ?>');
 -->
                        @endif
                        @endforeach
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="right-content">
                    <div class="row">
                        @foreach($images as $galleries)
                        @if($galleries->gallery_id == '4')
                        <div class="col-lg-6">

                            <div class="right-first-image">
                                <div class="thumb">
                                    <div class="inner-content">
                                        <h4>Cake</h4>
                                        <span>Best Cake</span>
                                    </div>
                                    <div class="hover-content">
                                        <div class="inner">
                                            <h4>Cake</h4>
                                            <p>Lorem ipsum dolor sit amet, conservisii ctetur adipiscing elit incid.</p>
                                            <div class="main-border-button">
                                                <a href="product">Discover More</a>
                                            </div>
                                        </div>
                                    </div>
                                    <img src="{{ asset('uploads/'.$galleries->gallery_images) }}" style="    height: 263;    width: 307px; ">
                                </div>
                            </div>

                        </div>
                        @endif
                        @endforeach
                        <div class="col-lg-6">
                            @foreach($images as $galleries)
                            @if($galleries->gallery_id == '3')
                            <div class="right-first-image">
                                <div class="thumb">
                                    <div class="inner-content">
                                        <h4>Chocolate</h4>
                                        <span>Best Chocolate</span>
                                    </div>
                                    <div class="hover-content">
                                        <div class="inner">
                                            <h4>Chocolate</h4>
                                            <p>Lorem ipsum dolor sit amet, conservisii ctetur adipiscing elit incid.</p>
                                            <div class="main-border-button">
                                                <a href="product">Discover More</a>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- <img src="assets1/images/baner-right-image-02.jpg"> -->
                                    <img src="{{ asset('uploads/'.$galleries->gallery_images) }}" style="    height: 263;    width: 307px; ">

                                </div>
                            </div>
                            @endif
                            @endforeach
                        </div>
                        <div class="col-lg-6">
                            @foreach($images as $galleries)
                            @if($galleries->gallery_id == '2')
                            <div class="right-first-image">
                                <div class="thumb">
                                    <div class="inner-content">
                                        <h4>Cookies</h4>
                                        <span>Best Cookies</span>
                                    </div>
                                    <div class="hover-content">
                                        <div class="inner">
                                            <h4>Cookies</h4>
                                            <p>Lorem ipsum dolor sit amet, conservisii ctetur adipiscing elit incid.</p>
                                            <div class="main-border-button">
                                                <a href="product">Discover More</a>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- <img src="assets1/images/baner-right-image-02.jpg"> -->
                                    <img src="{{ asset('uploads/'.$galleries->gallery_images) }}" style="    height: 263;    width: 307px; ">

                                </div>
                            </div>
                            @else
                            <!-- <span>No image found!</span> -->
                            @endif
                            @endforeach
                        </div>
                        <div class="col-lg-6">
                            @foreach($images as $galleries)
                            @if($galleries->gallery_id == '1')
                            <div class="right-first-image">
                                <div class="thumb">
                                    <div class="inner-content">
                                        <h4>Donut</h4>
                                        <span>Best Donut</span>
                                    </div>
                                    <div class="hover-content">
                                        <div class="inner">
                                            <h4>Donut</h4>
                                            <p>Lorem ipsum dolor sit amet, conservisii ctetur adipiscing elit incid.</p>
                                            <div class="main-border-button">
                                                <a href="product">Discover More</a>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- <img src="assets1/images/baner-right-image-02.jpg"> -->
                                    <img src="{{ asset('uploads/'.$galleries->gallery_images) }}" style="    height: 263;    width: 307px; ">

                                </div>
                            </div>
                            @endif
                            @endforeach

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- ***** Main Banner Area End ***** -->

<!-- ***** Men Area Starts ***** -->
<section class="section" id="men">
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <div class="section-heading">
                    <h2>Donut Latest</h2>
                    <!-- <span>Details to details is what makes Hexashop different from the other themes.</span> -->
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="men-item-carousel">
                    <div class="owl-men-item owl-carousel">
                        @foreach($gallery as $galleries)
                        @foreach($product as $products)
                        @if($products->product_catogery == '3')
                        @if($galleries->gallery_id == '1')

                        <div class="item">
                            <div class="thumb">
                                <div class="hover-content">
                                    <ul>
                                        <li><a href="{{ url('e_commerce').'/'. $products->id  }}"><i class="fa fa-eye"></i></a></li>
                                        <li><a href="#"><i class="fa fa-star"></i></a></li>

                                        <form action="{{ route('cart.store') }}" method="POST" enctype="multipart/form-data">
                                            @csrf
                                            <input type="hidden" value="{{ $products->id }}" name="id">
                                            <input type="hidden" value="{{ $products->product_name }}" name="product_name">
                                            <input type="hidden" value="{{ $products->product_price }}" name="product_price">
                                            <input type="hidden" value="{{ $products->product_image }}" name="product_image">
                                            <input type="hidden" value="1" name="quantity">
                                            <div class="mt-4">

                                                <li>
                                                    <!-- <a class="btn btn-primary btn-lg btn-flat"><i class="fa fa-shopping-cart"></i></a> -->
                                                    <button class="btn btn-default btn-lg btn-flat"><i class="fa fa-shopping-cart" style=" width: 50px; height: 50px;  background-color: #fff"></i></button>
                                                </li>

                                        </form>

                                        <!-- <li><a href="single-product.html"><i class="fa fa-shopping-cart"></i></a></li> -->
                                    </ul>
                                </div>
                                <img src="{{ asset('uploads/'.$galleries->gallery_images) }}" alt="" style=" height: 300px; width: 275px;">
                                <!-- <img src="assets1/images/men-01.jpg" alt=""> -->
                            </div>
                            <div class="down-content">
                                <h4>{{$products->product_name}}</h4>
                                <span>Rs.{{$products->product_price}}</span>
                                <ul class="stars">
                                    <li><i class="fa fa-star"></i></li>
                                    <li><i class="fa fa-star"></i></li>
                                    <li><i class="fa fa-star"></i></li>
                                    <li><i class="fa fa-star"></i></li>
                                    <li><i class="fa fa-star"></i></li>
                                </ul>
                            </div>

                        </div>
                        @else
                        @endif
                        @else
                        @endif
                        @endforeach
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- ***** Donut Area Ends ***** -->

<!-- ***** Cookie Area Starts ***** -->
<section class="section" id="women">
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <div class="section-heading">
                    <h2>Cookie's Latest</h2>
                    <!-- <span>Details to details is what makes Hexashop different from the other themes.</span> -->
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="men-item-carousel">
                    <div class="owl-men-item owl-carousel">
                        @foreach($gallery as $galleries)
                        @foreach($product as $products)
                        @if($products->product_catogery == '3')
                        @if($galleries->gallery_id == '2')

                        <div class="item">
                            <div class="thumb">
                                <div class="hover-content">
                                    <ul>
                                        <li><a href="{{ url('e_commerce').'/'. $products->id  }}"><i class="fa fa-eye"></i></a></li>
                                        <li><a href="single-product.html"><i class="fa fa-star"></i></a></li>
                                        <li>
                                            <form action="{{ route('cart.store') }}" method="POST" enctype="multipart/form-data">
                                                @csrf
                                                <input type="hidden" value="{{ $products->id }}" name="id">
                                                <input type="hidden" value="{{ $products->product_name }}" name="product_name">
                                                <input type="hidden" value="{{ $products->product_price }}" name="product_price">
                                                <input type="hidden" value="{{ $products->product_image }}" name="product_image">
                                                <input type="hidden" value="1" name="quantity">
                                                <div class="mt-4">

                                                    <!-- <a class="btn btn-primary btn-lg btn-flat"><i class="fa fa-shopping-cart"></i></a> -->
                                                    <button class="btn btn-default btn-lg btn-flat"><i class="fa fa-shopping-cart" style=" width: 50px; height: 50px;  background-color: #fff"></i></button>


                                            </form>
                                        </li>
                                        <!-- <li><a href="single-product.html"><i class="fa fa-shopping-cart"></i></a></li> -->
                                    </ul>
                                </div>
                                <img src="{{ asset('uploads/'.$galleries->gallery_images) }}" alt="" style="  height: 300px; width: 275px;">
                                <!-- <img src="assets1/images/men-01.jpg" alt=""> -->
                            </div>
                            <div class="down-content">
                                <h4>{{$products->product_name}}</h4>
                                <span>Rs.{{$products->product_price}}</span>
                                <ul class="stars">
                                    <li><i class="fa fa-star"></i></li>
                                    <li><i class="fa fa-star"></i></li>
                                    <li><i class="fa fa-star"></i></li>
                                    <li><i class="fa fa-star"></i></li>
                                    <li><i class="fa fa-star"></i></li>
                                </ul>
                            </div>

                        </div>
                        <!-- <div class="image_3" href="#"><img src="{{ asset('uploads/'.$products->product_image) }}" style=" height:150px;"></div> -->
                        @else
                        @endif
                        @else
                        @endif
                        @endforeach
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- ***** Cookie Area Ends ***** -->

<!-- ***** Chocolate Area Starts ***** -->
<section class="section" id="kids">
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <div class="section-heading">
                    <h2>Chocolate's Latest</h2>
                    <!-- <span>Details to details is what makes Hexashop different from the other themes.</span> -->
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="kid-item-carousel">
                    <div class="owl-kid-item owl-carousel">
                        @foreach($gallery as $galleries)
                        @foreach($product as $products)
                        @if($galleries->gallery_id == '3')
                        @if($products->product_catogery == '3')
                        <div class="item">
                            <div class="thumb">
                                <div class="hover-content">
                                    <ul>
                                        <li><a href="{{ url('e_commerce').'/'. $products->id  }}"><i class="fa fa-eye"></i></a></li>
                                        <li><a href="single-product.html"><i class="fa fa-star"></i></a></li>
                                        <li>
                                            <form action="{{ route('cart.store') }}" method="POST" enctype="multipart/form-data">
                                                @csrf
                                                <input type="hidden" value="{{ $products->id }}" name="id">
                                                <input type="hidden" value="{{ $products->product_name }}" name="product_name">
                                                <input type="hidden" value="{{ $products->product_price }}" name="product_price">
                                                <input type="hidden" value="{{ $products->product_image }}" name="product_image">
                                                <input type="hidden" value="1" name="quantity">
                                                <div class="mt-4">

                                                    <!-- <a class="btn btn-primary btn-lg btn-flat"><i class="fa fa-shopping-cart"></i></a> -->
                                                    <button class="btn btn-default btn-lg btn-flat"><i class="fa fa-shopping-cart" style=" width: 50px; height: 50px;  background-color: #fff"></i></button>


                                            </form>
                                        </li>
                                        <!-- <li><a href="single-product.html"><i class="fa fa-shopping-cart"></i></a></li> -->
                                    </ul>
                                </div>
                                <img src="{{ asset('uploads/'.$galleries->gallery_images) }}" alt="" style="  height: 300px; width: 275px;">
                                <!-- <img src="assets1/images/men-01.jpg" alt=""> -->
                            </div>
                            <div class="down-content">
                                <h4>{{$products->product_name}}</h4>
                                <span>Rs.{{$products->product_price}}</span>
                                <ul class="stars">
                                    <li><i class="fa fa-star"></i></li>
                                    <li><i class="fa fa-star"></i></li>
                                    <li><i class="fa fa-star"></i></li>
                                    <li><i class="fa fa-star"></i></li>
                                    <li><i class="fa fa-star"></i></li>
                                </ul>
                            </div>

                        </div>
                        <!-- <div class="image_3" href="#"><img src="{{ asset('uploads/'.$products->product_image) }}" style=" height:150px;"></div> -->
                        @else
                        @endif
                        @else
                        @endif
                        @endforeach
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- ***** Chocolate Area Ends ***** -->

<!-- ***** Cake Area Starts ***** -->
<section class="section" id="kids">
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <div class="section-heading">
                    <h2>Cake's Latest</h2>
                    <!-- <span>Details to details is what makes Hexashop different from the other themes.</span> -->
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="kid-item-carousel">
                    <div class="owl-kid-item owl-carousel">
                        @foreach($gallery as $galleries)
                        @foreach($product as $products)
                        @if($galleries->gallery_id == '4')
                        <div class="item">
                            <div class="thumb">
                                <div class="hover-content">
                                    <ul>
                                        <li><a href="{{ url('e_commerce').'/'. $products->id  }}"><i class="fa fa-eye"></i></a></li>
                                        <li><a href="single-product.html"><i class="fa fa-star"></i></a></li>
                                        <li>
                                            <form action="{{ route('cart.store') }}" method="POST" enctype="multipart/form-data">
                                                @csrf
                                                <input type="hidden" value="{{ $products->id }}" name="id">
                                                <input type="hidden" value="{{ $products->product_name }}" name="product_name">
                                                <input type="hidden" value="{{ $products->product_price }}" name="product_price">
                                                <input type="hidden" value="{{ $products->product_image }}" name="product_image">
                                                <input type="hidden" value="1" name="quantity">
                                                <div class="mt-4">

                                                    <!-- <a class="btn btn-primary btn-lg btn-flat"><i class="fa fa-shopping-cart"></i></a> -->
                                                    <button class="btn btn-default btn-lg btn-flat"><i class="fa fa-shopping-cart" style=" width: 50px; height: 50px;  background-color: #fff"></i></button>


                                            </form>
                                        </li>

                                    </ul>
                                </div>
                                <img src="{{ asset('uploads/'.$galleries->gallery_images) }}" alt="" style="  height: 300px; width: 275px;">
                                <!-- <img src="assets1/images/men-01.jpg" alt=""> -->
                            </div>
                            <div class="down-content">
                                <h4>{{$products->product_name}}</h4>
                                <span>Rs.{{$products->product_price/$products->product_quantity}}</span>
                                <ul class="stars">
                                    <li><i class="fa fa-star"></i></li>
                                    <li><i class="fa fa-star"></i></li>
                                    <li><i class="fa fa-star"></i></li>
                                    <li><i class="fa fa-star"></i></li>
                                    <li><i class="fa fa-star"></i></li>
                                </ul>
                            </div>

                        </div>
                        <!-- <div class="image_3" href="#"><img src="{{ asset('uploads/'.$products->product_image) }}" style=" height:150px;"></div> -->

                        @else
                        <!-- <span>No image found!</span> -->
                        @endif
                        @endforeach
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- ***** Cake Area Ends ***** -->

<!-- ***** Explore Area Starts ***** -->
<section class="section" id="explore">
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <div class="left-content">
                    <h2>Explore Our Products</h2>
                    <span>You are allowed to use this HexaShop HTML CSS template. You can feel free to modify or edit this layout. You can convert this template as any kind of ecommerce CMS theme as you wish.</span>
                    <div class="quote">
                        <i class="fa fa-quote-left"></i>
                        <p>You are not allowed to redistribute this template ZIP file on any other website.</p>
                    </div>
                    <p>There are 5 pages included in this HexaShop Template and we are providing it to you for absolutely free of charge at our TemplateMo website. There are web development costs for us.</p>
                    <p>If this template is beneficial for your website or business, please kindly <a rel="nofollow" href="https://paypal.me/templatemo" target="_blank">support us</a> a little via PayPal. Please also tell your friends about our great website. Thank you.</p>
                    <div class="main-border-button">
                        <a href="product">Discover More</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="right-content">
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="leather">
                                <h4>Our Products</h4>
                                <span>Latest Collection</span>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            @foreach($images as $galleries)
                            @if($galleries->gallery_id == '4')
                            <div class="first-image">
                                <img src="{{ asset('uploads/'.$galleries->gallery_images) }}" alt="">
                            </div>
                            @endif
                            @endforeach
                        </div>
                        <div class="col-lg-6">
                            <div class="second-image">
                                <img src="{{ asset('uploads/'.$galleries->gallery_images) }}" alt="">
                            </div>
                        </div>
                        <div class="col-lg-6">


                            @foreach($images as $galleries)
                            @if($galleries->gallery_id == '2')
                            <div class="types">

                                <h4>Different Types</h4>

                            </div>
                            @endif

                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- ***** Explore Area Ends ***** -->

<!-- ***** Social Area Starts ***** -->
<!-- <section class="section" id="social">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="section-heading">
                    <h2>Social Media</h2>
                    <span>Details to details is what makes Hexashop different from the other themes.</span>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row images">
            <div class="col-2">
                <div class="thumb">
                    <div class="icon">
                        <a href="http://instagram.com">
                            <h6>Fashion</h6>
                            <i class="fa fa-instagram"></i>
                        </a>
                    </div>
                    <img src="assets1/images/instagram-01.jpg" alt="">
                </div>
            </div>
            <div class="col-2">
                <div class="thumb">
                    <div class="icon">
                        <a href="http://instagram.com">
                            <h6>New</h6>
                            <i class="fa fa-instagram"></i>
                        </a>
                    </div>
                    <img src="assets1/images/instagram-02.jpg" alt="">
                </div>
            </div>
            <div class="col-2">
                <div class="thumb">
                    <div class="icon">
                        <a href="http://instagram.com">
                            <h6>Brand</h6>
                            <i class="fa fa-instagram"></i>
                        </a>
                    </div>
                    <img src="assets1/images/instagram-03.jpg" alt="">
                </div>
            </div>
            <div class="col-2">
                <div class="thumb">
                    <div class="icon">
                        <a href="http://instagram.com">
                            <h6>Makeup</h6>
                            <i class="fa fa-instagram"></i>
                        </a>
                    </div>
                    <img src="assets1/images/instagram-04.jpg" alt="">
                </div>
            </div>
            <div class="col-2">
                <div class="thumb">
                    <div class="icon">
                        <a href="http://instagram.com">
                            <h6>Leather</h6>
                            <i class="fa fa-instagram"></i>
                        </a>
                    </div>
                    <img src="assets1/images/instagram-05.jpg" alt="">
                </div>
            </div>
            <div class="col-2">
                <div class="thumb">
                    <div class="icon">
                        <a href="http://instagram.com">
                            <h6>Bag</h6>
                            <i class="fa fa-instagram"></i>
                        </a>
                    </div>
                    <img src="assets/images/instagram-06.jpg" alt="">
                </div>
            </div>
        </div>
    </div>
</section> -->
<!-- ***** Social Area Ends ***** -->

<!-- ***** Subscribe Area Starts ***** -->
<div class="subscribe">
    <div class="container">
        <div class="row">
            <div class="col-lg-8">
                <div class="section-heading">
                    <h2>By Subscribing To Our Newsletter You Can Get 30% Off</h2>
                    <span>Details to details is what makes Hexashop different from the other themes.</span>
                </div>
                <form id="subscribe" action="" method="get">
                    <div class="row">
                        <div class="col-lg-5">
                            <fieldset>
                                <input name="name" type="text" id="name" placeholder="Your Name" required="">
                            </fieldset>
                        </div>
                        <div class="col-lg-5">
                            <fieldset>
                                <input name="email" type="text" id="email" pattern="[^ @]*@[^ @]*" placeholder="Your Email Address" required="">
                            </fieldset>
                        </div>
                        <div class="col-lg-2">
                            <fieldset>
                                <button type="submit" id="form-submit" class="main-dark-button"><i class="fa fa-paper-plane"></i></button>
                            </fieldset>
                        </div>
                    </div>
                </form>
            </div>
            <div class="col-lg-4">
                <div class="row">
                    <div class="col-6">
                        <ul>
                            <li>Store Location:<br><span>Sunny Isles Beach, FL 33160, United States</span></li>
                            <li>Phone:<br><span>010-020-0340</span></li>
                            <li>Office Location:<br><span>North Miami Beach</span></li>
                        </ul>
                    </div>
                    <div class="col-6">
                        <ul>
                            <li>Work Hours:<br><span>07:30 AM - 9:30 PM Daily</span></li>
                            <li>Email:<br><span>info@company.com</span></li>
                            <li>Social Media:<br><span><a href="#">Facebook</a>, <a href="#">Instagram</a>, <a href="#">Behance</a>, <a href="#">Linkedin</a></span></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- ***** Subscribe Area Ends ***** -->
@endsection