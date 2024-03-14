@extends('home.layout.app')
@section('content')
<!-- ***** Main Banner Area Start(page-heading) ***** -->
<div class="" id="top">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="inner-content">
                    <!-- <h2>Our Latest Products</h2> -->
                    <h2>Check Our Products</h2>
                    <span>Awesome &amp; Creative HTML CSS layout by TemplateMo</span>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- ***** Main Banner Area End ***** -->


<!-- ***** Products Area Starts ***** -->
<section class="section" id="products">

    <div class="container">
        <div class="section-heading">
            <h2>Our Latest Products</h2>
            <span>Check out all of our products.</span>
        </div>
        <div class="container">
            <div class="row">
                @foreach($data as $products)
                @foreach($product as $productss)
                @if($productss->gallery_id == 1)
                @if($products->product_catogery == 1)
                <div class="col-lg-4">
                    <div class="item">

                        <div class="thumb">
                            <div class="hover-content">
                                <ul>
                                    <li><a href="{{ url('e_commerce').'/'. $products->id  }}"><i class="fa fa-eye"></i></a></li>
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
                                    <!-- <li><a href="single-product.html"><i class="fa fa-star"></i></a></li> -->
                                    <!-- <li><a href="single-product.html"><i class="fa fa-shopping-cart"></i></a></li> -->
                                </ul>
                            </div>
                            <img src="{{ asset('uploads/'.$productss->gallery_images) }}" style="    height: 263;    width: 307px; ">

                            <!-- <img src="{{ asset('uploads/'.$products->product_image) }}" alt="" style="height: 350px; width:270px;"> -->
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
                </div>
                @else
                @endif
                @else
                @endif
                @endforeach
                @endforeach
            </div>
        </div>


</section>
<!-- ***** Products Area Ends ***** -->
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js" type="text/javascript"></script>

@endsection