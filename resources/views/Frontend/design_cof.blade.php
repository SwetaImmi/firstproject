@extends('Frontend.layout.app')
@section('header')
<!--  design section start -->
<div class="design_section layout_padding">
   <div id="my_slider" class="carousel slide" data-ride="carousel">
      <div class="carousel-inner">
         <div class="carousel-item active">

       <!-- dropdown -->
       <div class="dropdown send_bt">
               <a class="btn dropdown-toggle" type="button" id="dropdownMenu2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  Dropdown
               </a>
               <div class="dropdown-menu" aria-labelledby="dropdownMenu2">
               <div><a style="background-color: #fff; color: #7c2c0c; padding: 0; margin-top: 0;" href="/design">Buy</a></div>
                  <div><a style="background-color: #fff; color: #7c2c0c; padding: 0; margin-top: 0;" href="/design_tea">Buy Tea</a></div>
                  <div><a style="background-color: #fff; color: #7c2c0c; padding: 0; margin-top: 0;" href="/design_cofe">Buy Coffee</a></div>
                  <div><a style="background-color: #fff; color: #7c2c0c; padding: 0; margin-top: 0;" href="/design_jc">Buy Juice</a></div>

               </div>
            </div>
            <!-- dropdown End -->
            <div class="container">
               <h1 class="design_taital">Our Work Furniture</h1>
               <p class="design_text">There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteratio</p>
               <div class="design_section_2">
                  <div class="row">
                     @foreach($product as $products)
                     @if($products->coffee)
                     <!-- <img class="form-control" src="{{ asset('uploads/'.$products->product_image) }}" style="height: 150px;width:200px;" name="image" type="file">
                     <input type="file" name="image">
                      -->
                      <div class="col-md-4">
                        <div class="box_main">
                           <p class="chair_text">{{$products->product_catogery}}</p>
                           <div class="image_3" href="#"><img src="{{ asset('uploads/'.$products->product_image) }}" style=" height:150px;"></div>
                           <p class="chair_text">Price:-  &nbsp;<span> Rs.&nbsp;{{$products->product_price}}</span></p>
                           <div class="buy_bt"><a href="{{ url('e_commerce').'/'. $products->id  }}">Buy Now</a></div>
                        </div>
                     </div>

                     @else
                     <!-- <span>No image found!</span> -->
                     @endif
                     @endforeach


                  </div>
               </div>
            </div>
         </div>
        
      </div>
      {{$product->links()}}
   </div>
   <div class="container">
      <i class="fas fa-chevron-double-up">
         <div class="read_bt"><a href="#"><img src="frontend/images/arrow.png" alt="" style="width: 40%;"></a></div>
      </i>
   </div>
</div>

<!--  design section end -->
@endsection