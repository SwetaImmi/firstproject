@extends('home.layout.app')
@section('content')

<!-- ***** Main Banner Area Start (page-heading) ***** -->

<div class=" " id="top">
    @foreach($banner as $banners)

    <!-- <img src="{{ asset('uploads1/'.$banners->banner_img) }}" alt=""> -->
    @endforeach
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="inner-content">
                    <h2>About Our Company</h2>
                    <span>Awesome, clean &amp; creative HTML5 Template</span>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- ***** Main Banner Area End ***** -->

<!-- ***** About Area Starts ***** -->
@foreach($about as $abouts)
<div class="about-us">
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <div class="left-image">
                    <img src="{{ asset('uploads2/'.$abouts->about_img) }}" alt="">
                </div>
            </div>
            <div class="col-lg-6">
                <div class="right-content">

                    <h4>{{$abouts->about_name}}</h4>
                    <p>{{$abouts->about_description }}</p>
                    <!-- <span>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod kon tempor incididunt ut labore.</span>
                        <div class="quote">
                            <i class="fa fa-quote-left"></i><p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiuski smod kon tempor incididunt ut labore.</p>
                        </div>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod kon tempor incididunt ut labore et dolore magna aliqua ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip.</p> -->
                    <ul>
                        <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                        <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                        <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                        <li><a href="#"><i class="fa fa-behance"></i></a></li>
                    </ul>

                </div>
            </div>
        </div>
    </div>
</div>
@endforeach
<!-- ***** About Area Ends ***** -->

<!-- ***** Our Team Area Starts ***** -->
<section class="our-team">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="section-heading">
                    <h2>Our Amazing Team </h2>
                    <span>Details to details is what makes Hexashop different from the other themes.</span>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="team-item">
                    <div class="thumb">
                        <div class="hover-effect">
                            <div class="inner-content">
                                <ul>
                                    <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                    <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                    <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                                    <li><a href="#"><i class="fa fa-behance"></i></a></li>
                                </ul>
                            </div>
                        </div>
                        <img src="assets1/images/team-member-01.jpg">
                    </div>
                    <div class="down-content">
                        <h4>Ragnar Lodbrok</h4>
                        <span>Product Caretaker</span>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="team-item">
                    <div class="thumb">
                        <div class="hover-effect">
                            <div class="inner-content">
                                <ul>
                                    <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                    <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                    <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                                    <li><a href="#"><i class="fa fa-behance"></i></a></li>
                                </ul>
                            </div>
                        </div>
                        <img src="assets1/images/team-member-02.jpg">
                    </div>
                    <div class="down-content">
                        <h4>Ragnar Lodbrok</h4>
                        <span>Product Caretaker</span>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="team-item">
                    <div class="thumb">
                        <div class="hover-effect">
                            <div class="inner-content">
                                <ul>
                                    <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                    <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                    <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                                    <li><a href="#"><i class="fa fa-behance"></i></a></li>
                                </ul>
                            </div>
                        </div>
                        <img src="assets1/images/team-member-03.jpg">
                    </div>
                    <div class="down-content">
                        <h4>Ragnar Lodbrok</h4>
                        <span>Product Caretaker</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- ***** Our Team Area Ends ***** -->

<!-- ***** Services Area Starts ***** -->
<section class="our-services">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="section-heading">
                    <h2>Our Products</h2>
                    <span>Details to details is what makes Hexashop different from the other themes.</span>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="service-item">
                    <h4>Chocolate</h4>
                    <p>Lorem ipsum dolor sit amet, consecteturti adipiscing elit, sed do eiusmod temp incididunt ut labore, et dolore quis ipsum suspend.</p>
                    <img src="assets/images/service-01.jpg" alt="">
                </div>
            </div>
            <div class="col-lg-4">
                <div class="service-item">
                    <h4>Cake</h4>
                    <p>Lorem ipsum dolor sit amet, consecteturti adipiscing elit, sed do eiusmod temp incididunt ut labore, et dolore quis ipsum suspend.</p>
                    <img src="assets/images/service-02.jpg" alt="">
                </div>
            </div>
            <div class="col-lg-4">
                <div class="service-item">
                    <h4>Cookies</h4>
                    <p>Lorem ipsum dolor sit amet, consecteturti adipiscing elit, sed do eiusmod temp incididunt ut labore, et dolore quis ipsum suspend.</p>
                    <img src="assets/images/service-03.jpg" alt="">
                </div>
            </div>
        </div>
    </div>
</section>
<!-- ***** Services Area Ends ***** -->

<!-- ***** Subscribe Area Starts ***** -->
<div class="subscribe">
    <div class="container">
        <div class="row">
            <div class="col-lg-8">
                <div class="section-heading">
                    <h2>By Subscribing To Our Newsletter You Can Get 30% Off</h2>
                    <span>Details to details is what makes Hexashop different from the other themes.</span>
                </div>
                <form id="subscribe" action="subscribe" method="post">
                    @csrf
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