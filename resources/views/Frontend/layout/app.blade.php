<!DOCTYPE html>
<html lang="en">

<head>
   <!-- basic -->



   <meta charset="utf-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <!-- mobile metas -->
   <meta name="viewport" content="width=device-width, initial-scale=1">
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
   <!-- cart -->
   <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">
   <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>AdminLTE 3 | Projects</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="../../plugins/fontawesome-free/css/all.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="../../dist/css/adminlte.min.css">
</head>

<body>
   <!-- header section start -->
   <div class="header_section">
      <nav class="navbar navbar-expand-lg navbar-light bg-light ">
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
   @yield('header')

   <!-- Main -->

   <!-- footer section start -->
   <div class="footer_section">
      <div class="container">
         <div class="footer_location_text">
            <ul>
               <li><img src="frontend/images/map-icon.png"><span class="padding_left_10"><a href="#">Loram Ipusm hosting web</a></span></li>
               <li><img src="frontend/images/call-icon.png"><span class="padding_left_10"><a href="#">Call : +7586656566</a></span></li>
               <li><img src="frontend/images/mail-icon.png"><span class="padding_left_10"><a href="#">demo@gmail.com</a></span></li>
            </ul>
         </div>
         <div class="row">
            <div class="col-lg-3 col-sm-6">
               <h2 class="useful_text">Useful link </h2>
               <div class="footer_menu">
                  <ul>
                     <li><a href="index.html">Home</a></li>
                     <li><a href="about.html">About</a></li>
                     <li><a href="design.html">Our Designe</a></li>
                     <li><a href="contact.html">Contact Us</a></li>
                  </ul>
               </div>
            </div>
            <div class="col-lg-3 col-sm-6">
               <h2 class="useful_text">Repair</h2>
               <p class="lorem_text">Lorem ipsum dolor sit amet, consectetur adipiscinaliqua Loreadipiscing </p>
            </div>
            <div class="col-lg-3 col-sm-6">
               <h2 class="useful_text">Social Media</h2>
               <div id="social">
                  <a class="facebookBtn smGlobalBtn active" href="#"></a>
                  <a class="twitterBtn smGlobalBtn" href="#"></a>
                  <a class="googleplusBtn smGlobalBtn" href="#"></a>
                  <a class="linkedinBtn smGlobalBtn" href="#"></a>
               </div>
            </div>
            <div class="col-sm-6 col-lg-3">
               <h1 class="useful_text">Our Repair center</h1>
               <p class="footer_text">Lorem ipsum dolor sit amet, consectetur adipiscinaliquaLoreadipiscing </p>
            </div>
         </div>
      </div>
   </div>
   <!-- footer section end -->
   <!-- copyright section start -->
   <div class="copyright_section">
      <div class="container">
         <p class="copyright_text">2020 All Rights Reserved. Design by <a href="https://html.design">Free html Templates</a></p>
      </div>
   </div>
   <!-- copyright section end -->
   <!-- Javascript files-->
   <script src="frontend/js/jquery.min.js"></script>
   <script src="frontend/js/popper.min.js"></script>
   <script src="frontend/js/bootstrap.bundle.min.js"></script>
   <script src="frontend/js/jquery-3.0.0.min.js"></script>
   <script src="frontend/js/plugin.js"></script>
   <!-- sidebar -->
   <script src="frontend/js/jquery.mCustomScrollbar.concat.min.js"></script>
   <script src="frontend/js/custom.js"></script>
   <!-- javascript -->
   <script src="frontend/js/owl.carousel.js"></script>
   <script src="https:cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.js"></script>


   <!-- cart -->

   <script src="../../plugins/jquery/jquery.min.js"></script>
   <!-- Bootstrap 4 -->
   <script src="../../plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
   <!-- AdminLTE App -->
   <script src="../../dist/js/adminlte.min.js"></script>
   <!-- AdminLTE for demo purposes -->
   <script src="../../dist/js/demo.js"></script>
</body>

</html>