@extends('Frontend.layout.app')
@section('header')
<!--  design section start -->
<div class="design_section layout_padding">
   <div id="my_slider" class="carousel slide" data-ride="carousel">
      <div class="carousel-inner">
         <div class="carousel-item active">

            <!-- dropdown -->
            <div class="dropdown send_bt">
               <a  class="btn dropdown-toggle" type="button" id="dropdownMenu2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
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
                     @if($products->product_image)
                     <!-- <img class="form-control" src="{{ asset('uploads/'.$products->product_image) }}" style="height: 150px;width:200px;" name="image" type="file">
                     <input type="file" name="image">
                      -->
                     <div class="col-md-4">
                        <div class="box_main">
                        <p class="chair_text"><strong> {{$products->product_name}}</strong></p>

                           <p class="chair_text">{{$products->product_catogery}}</p>
                           <div class="image_3" href="#"><img src="{{ asset('uploads/'.$products->product_image) }}" style=" height:150px;"></div>
                           <p class="chair_text">Price:-  &nbsp;<span> Rs.&nbsp;{{$products->product_price}}</span></p>
                           <div class="buy_bt"><a href="{{ url('e_commerce').'/'. $products->id  }}">Buy Now</a></div>
                        </div>
                     </div>

                     @else
                     <span>No image found!</span>
                     @endif
                     @endforeach
                     

                     <!-- <div class="col-md-4">
                        <div class="box_main">
                           <p class="chair_text">Chair 02</p>
                           <div class="image_4" href="#"><img src="images/img-4.png"></div>
                           <p class="chair_text">Price $100</p>
                           <div class="buy_bt"><a href="#">Buy Now</a></div>
                        </div>
                     </div>
                     <div class="col-md-4">
                        <div class="box_main">
                           <p class="chair_text">Table</p>
                           <div class="image_4" href="#"><img src="images/img-5.png"></div>
                           <p class="chair_text">Price $100</p>
                           <div class="buy_bt"><a href="#">Buy Now</a></div>
                        </div>
                     </div> -->
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
   <div class="container">
      <i class="fas fa-chevron-double-up">
         <div class="read_bt"><a href="#"><img src="frontend/images/arrow.png" alt=" " style="width: 40%;"></a></div>
      </i>
   </div>
</div>
<div class="container">
   <div class="wrapper">
    <ul id="results"></ul>
     <div class="ajax-loading"><img src="{{ asset('images/loader.gif') }}" />111</div>
   </div>
  </div>
<!--  design section end -->
<script>
   var site_url = "{{ url('/') }}";   
   var page = 1;
   
   load_more(page);

   $(window).scroll(function() {
      if($(window).scrollTop() + $(window).height() >= $(document).height()) {
      page++;
      load_more(page);
      }
    });

    function load_more(page){
        $.ajax({
          url: site_url + "/design?page=" + page,
          type: "get",
          datatype: "html",
          beforeSend: function()
          {
            $('.ajax-loading').show();
          }
        })
        .done(function(data)
        {          
          if(data.length == 0){
          $('.ajax-loading').html("No more records!");
          return;
        }
          $('.ajax-loading').hide();
          $("#results").append(data);
        })
        .fail(function(jqXHR, ajaxOptions, thrownError)
        {
          alert('No response from server');
        });
    }
</script>
@endsection