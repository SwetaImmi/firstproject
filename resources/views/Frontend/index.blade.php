@extends('Frontend.layout.app')
@section('header')
<!-- banner section start -->
<div class="banner_section layout_padding">
   <div id="main_slider" class="carousel slide" data-ride="carousel">
      <div class="carousel-inner">
         <div class="carousel-item active">
            <div class="container">
               <div class="row">
                  <div class="col-md-6">
                     <h1 class="banner_taital">Best <br> Shopping <br>Website</h1>
                     <p class="banner_text">It is a long established fact that a reader will bedistracted by the readable content of </p>
                     <div class="btn_main">
                        <div class="contact_bt"><a href="/contact">Contact US</a></div>
                     </div>
                  </div>
                  <div class="col-md-6">
                     <div class="image_1"><img src="frontend/images/banner.jpg"></div>
                  </div>
               </div>
            </div>
         </div>
         <div class="carousel-item">
            <div class="container">
               <div class="row">
                  <div class="col-md-6">
                     <h1 class="banner_taital">Best <br> Shopping <br>Website</h1>
                     <p class="banner_text">It is a long established fact that a reader will bedistracted by the readable content of </p>
                     <div class="btn_main">
                        <div class="contact_bt"><a href="/contact">Contact US</a></div>
                     </div>
                  </div>
                  <div class="col-md-6">
                     <div class="image_1"><img src="frontend/images/ban1.webp"></div>
                  </div>
               </div>
            </div>
         </div>
         <div class="carousel-item">
            <div class="container">
               <div class="row">
                  <div class="col-md-6">
                     <h1 class="banner_taital">Best <br> Shopping <br>Website</h1>
                     <p class="banner_text">It is a long established fact that a reader will bedistracted by the readable content of </p>
                     <div class="btn_main">
                        <div class="contact_bt"><a href="/contact">Contact US</a></div>
                     </div>
                  </div>
                  <div class="col-md-6">
                     <div class="image_1"><img src="frontend/images/ban2.webp"></div>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <a class="carousel-control-prev" href="#main_slider" role="button" data-slide="prev">
         <i style="font-style: initial;">01</i>
      </a>
      <a class="carousel-control-next" href="#main_slider" role="button" data-slide="next">
         <i style="font-style: initial;">02</i>
      </a>
   </div>
</div>
<!-- banner section end -->
<!-- about section start -->
<div class="about_section layout_padding">
   <div class="container">
      <div class="about_section_2">
         <div class="row">
            <div class="col-md-6">
               <div class="image_2"><img src="frontend/images/about.jpg"></div>
            </div>
            <div class="col-md-6">
               <h1 class="about_taital">About Us</h1>
               <p class="about_text">There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised </p>
              
               <div class="readmore_bt" style="padding-top: 50px;"><a href="/about">Read More</a></div>
            </div>
         </div>
      </div>
   </div>
</div>
<!-- about section end -->
<!--  design section start -->
<div class="design_section layout_padding">
   <div id="my_slider" class="carousel slide" data-ride="carousel">
      <div class="carousel-inner">
         <div class="carousel-item active">
            <div class="container">
               <h1 class="design_taital">Our Products</h1>
               <p class="design_text">There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteratio</p>
               <div class="design_section_2">
                  <div class="row">
                     @foreach($product as $products)
                     @if($products->product_image)
                     <!-- <img class="form-control" src="{{ asset('uploads/'.$products->product_image) }}" style="height: 150px;width:200px;" name="image" type="file">
                     <input type="file" name="image">
                      -->
                     <div class="col-md-4">
                        <div class="box_main">
                           <p class="chair_text">{{$products->product_name}}</p>
                           <div class="image_3" href="#"><img src="{{ asset('uploads/'.$products->product_image) }}" style=" height:150px;"></div>
                           <p class="chair_text">Price:- &nbsp;<span> Rs.&nbsp;{{$products->product_price}}</span></p>
                           <div class="buy_bt"><a href="{{ url('e_commerce').'/'. $products->id  }}">Buy Now</a></div>
                        </div>
                     </div>

                     @else
                     <span>No image found!</span>
                     @endif
                     @endforeach
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
   <div class="container">
      <div class="read_bt"><a href="/design">Read More</a></div>
   </div>
</div>

<!--  design section end -->
<!--  newsletter section start -->
<div class="newsletter_section layout_padding">
   <div class="container">
      <div class="row">
         <div class="col-md-6">
            <div class="imgage_6"><img src="frontend/images/sbscr.jpg"></div>
         </div>
         <div class="col-md-6">
            <h1 class="newsletter_taital">Subscribe Newsletter</h1>
            <input type="text" class="email_text" placeholder="Enter Your Email" name="Enter Your Email">
            <div class="subscribe_bt"><a href="#">Subscribe Now</a></div>
         </div>
      </div>
   </div>
</div>
<!--  newsletter section end -->
<!-- contact section start -->
<div class="contact_section layout_padding">
   <div class="container">
      <div class="contact_section_2">
         <div class="row">

            <div class="col-md-6">
               <form action="{{url('contact/send')}}" method="post">
                  @csrf
                  <div class="mail_section_1">
                     <h1 class="contact_taital">Contact Us</h1>
                     <input type="text" class="mail_text" placeholder="Name" name="name" required>
                     <input type="text" class="mail_text" placeholder="Email" name="email" required>
                     <input type="text" class="mail_text" placeholder="Phone Number" name="phone" required>
                     <textarea class="massage-bt" placeholder="Massage" rows="5" id="comment" name="message" required></textarea>
                     <div class="send_bt"><button class="btn_send">SEND</button></div>
                  </div>
               </form>
            </div>

            <div class="col-md-6">
               <div class="map_main">
                  <div class="map-responsive">
                     <iframe src="https://www.google.com/maps/embed/v1/place?key=AIzaSyA0s1a7phLN0iaD6-UE7m4qP-z21pH0eSc&amp;q=Eiffel+Tower+Paris+France" width="600" height="360" frameborder="0" style="border:0; width: 100%;" allowfullscreen=""></iframe>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
</div>
<!-- contact section end -->

@endsection