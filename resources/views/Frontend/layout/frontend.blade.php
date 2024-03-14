<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Add to cart</title>
    <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">
    <!-- fiu -->
    <meta name="viewport" content="initial-scale=1, maximum-scale=1">
      <!-- site metas -->
      <title>Fiu</title>
      <meta name="keywords" content="">
      <meta name="description" content="">
      <meta name="author" content="">
      <!-- bootstrap css -->
      <link rel="stylesheet" href="frontend/css/bootstrap.min.css">
      <!-- style css -->
      <link rel="stylesheet" href="frontend/css/style.css">
      <!-- <link rel="stylesheet" href="frontend/css/style1.css"> -->
      <!-- Responsive-->
      <link rel="stylesheet" href="frontend/css/responsive.css">
      <!-- fevicon -->
      <link rel="icon" href="frontend/images/fevicon.png" type="image/gif" />
      <!-- Scrollbar Custom CSS -->
      <link rel="stylesheet" href="frontend/css/jquery.mCustomScrollbar.min.css">
      <!-- Tweaks for older IEs-->
      <link rel="stylesheet" href="https://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css">
      <!-- owl stylesheets --> 
      <link rel="stylesheet" href="frontend/css/owl.carousel.min.css">
      <link rel="stylesheet" href="frontend/css/owl.theme.default.min.css">
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.css" media="screen">

</head>
<body>
    <div  class="bg-white">
          <!-- header section start -->
      <div class="header_section">
         <nav class="navbar navbar-expand-lg navbar-light bg-light ">
         <div>
        <a href="{{ url()->previous() }}"><i class="fa fa-angle-double-left" aria-hidden="true"></i></a>
    </div>
            <div class="container">
               <a class="logo" href="index.html"><img src="frontend/images/logo.png"></a>
               <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
               <span class="navbar-toggler-icon"></span>
               </button>
               <div class="collapse navbar-collapse" id="navbarSupportedContent">
                  <ul class="navbar-nav mr-auto">
                     <li class="nav-item">
                        <a class="nav-link" href="/">Home</a>
                     </li>
                     <li class="nav-item">
                        <a class="nav-link" href="/about">About</a>
                     </li>
                     <li class="nav-item">
                        <a class="nav-link" href="/design">Our Design</a>
                     </li>
                     <li class="nav-item">
                        <!-- <a class="nav-link" href="/shop">Shop</a> -->
                     </li>
                     <li class="nav-item">
                        <a class="nav-link" href="/contact">Contact Us</a>
                     </li>
                  </ul>
                  <form class="form-inline my-2 my-lg-0">
                     <div class="search_icon">
                        <ul>
                           <li><a href="#"><img src="frontend/images/search-icon.png"></a></li>
                           <li><a href="#"><img src="frontend/images/user-icon.png"></a></li>
                           <li> <a href="{{ route('cart.list') }}" class="flex items-center" style="color:#fcfefe;">
                            <svg class="w-5 h-5" fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" stroke="currentColor">
                                <path d="M3 3h2l.4 2M7 13h10l4-8H5.4M7 13L5.4 5M7 13l-2.293 2.293c-.63.63-.184 1.707.707 1.707H17m0 0a2 2 0 100 4 2 2 0 000-4zm-8 2a2 2 0 11-4 0 2 2 0 014 0z"></path>
                            </svg>
                            {{ Cart::getTotalQuantity()}}
                        </a></li>
                        </ul>
                     </div>
                  </form>
               </div>
         </nav>
         </div>
      </div>
      <!-- header section end -->
        <header>
            <div class="container px-6 py-3 mx-auto">
                <div class="flex items-center justify-between">
                    
                    
                    <div class="flex items-center justify-end w-full">
                        <button" class="mx-4 text-gray-600 focus:outline-none sm:mx-0">
                            
                        </button>
                    </div>
                </div>
               
            </div>
        </header>
        
        <main class="my-8">
            @yield('content')
        </main>
    
    </div>
</body>
</html>