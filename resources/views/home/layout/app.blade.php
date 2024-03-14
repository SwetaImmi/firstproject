<!DOCTYPE html>
<html lang="en">

<head>
    <meta name="csrf-token" content="{{ csrf_token() }}" />
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900&display=swap" rel="stylesheet">

    <title>Hexashop Ecommerce HTML CSS Template</title>

    <!-- Cart -->
    <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- catrt end -->
    <!-- Additional CSS Files -->
    <link rel="stylesheet" type="text/css" href="assets1/css/bootstrap.min.css">

    <link rel="stylesheet" type="text/css" href="assets1/css/font-awesome.css">

    <link rel="stylesheet" href="assets1/css/templatemo-hexashop.css">

    <link rel="stylesheet" href="assets1/css/owl-carousel.css">

    <link rel="stylesheet" href="assets1/css/lightbox.css">
    <!--

TemplateMo 571 Hexashop

https://templatemo.com/tm-571-hexashop

-->
</head>

<body>

    <!-- ***** Preloader Start ***** -->
    <div id="preloader">
        <div class="jumper">
            <div></div>
            <div></div>
            <div></div>
        </div>
    </div>
    <!-- ***** Preloader End ***** -->


    <!-- ***** Header Area Start ***** -->
    <header class="header-area header-sticky">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <nav class="main-nav">
                        <!-- ***** Logo Start ***** -->
                        <a href="/" class="logo">
                            <img src="assets1/images/logo.png">
                        </a>
                        <!-- ***** Logo End ***** -->
                        <!-- ***** Menu Start ***** -->
                        <ul class="nav">
                            <li class="scroll-to-section"><a href="/" class="active">Home</a></li>
                            <li class="scroll-to-section"><a href="about">About</a></li>
                            <li class="scroll-to-section"><a href="/product">Product</a></li>

                            <!-- <li class="scroll-to-section"><a href="/">Chocolate</a></li> -->
                            <li class="submenu">
                                <a href="javascript:;">Items</a>
                                <ul>
                                    <li><a href="product_choco">Chocolate</a></li>
                                    <li><a href="product_cake">Cake</a></li>
                                    <li><a href="product_donut">Donut</a></li>
                                    <li><a href="product_cookie">Cookies</a></li>
                                </ul>
                            </li>
                            <li class="scroll-to-section"><a href="/contact">Contact</a></li>
                            <!-- <li class="scroll-to-section"><a href="#explore">Explore</a></li> -->
                            <li class="scroll-to-section">
                                <a href="{{ route('cart.list') }}"><i class="fa fa-shopping-cart"></i> Cart &nbsp; {{ Cart::getTotalQuantity()}}</a>


                            </li>
                            <?php if (Auth::check()) {
                            ?>
                                    <li class="scroll-to-section"><a href="/signUp"> <img src="assets1/images/profile.png" style="height: 35px; width: 35px;     margin-left: 7px;">{{Auth::user()->name}}</a></li>
                            <?php } else {

                                ?>
                                <li class="scroll-to-section"><a href="/signUp"> <img src="assets1/images/profile.png" style="height: 35px; width: 35px;     margin-left: 7px;">SignUp</a></li>

                                <?php
                            }
                           ?>
                        </ul>
                        <a class='menu-trigger'>
                            <span>Menu</span>
                        </a>
                        <!-- ***** Menu End ***** -->
                    </nav>
                </div>
            </div>
        </div>
    </header>
    <!-- ***** Header Area End ***** -->

    @yield('content')


    <!-- ***** Footer Start ***** -->
    <footer>
        <div class="container">
            <div class="row">
                <div class="col-lg-3">
                    <div class="first-item">
                        <div class="logo">
                            <img src="assets1/images/white-logo.png" alt="hexashop ecommerce templatemo">
                        </div>
                        <ul>
                            <li><a href="#">16501 Collins Ave, Sunny Isles Beach, FL 33160, United States</a></li>
                            <li><a href="#">hexashop@company.com</a></li>
                            <li><a href="#">010-020-0340</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-3">
                    <h4>Shopping &amp; Categories</h4>
                    <ul>
                        <li><a href="product_choco">Chocolate Buying</a></li>
                        <li><a href="product_cake">Cake Buying</a></li>
                        <li><a href="product_cookie">Cookies Buying</a></li>
                    </ul>
                </div>
                <div class="col-lg-3">
                    <h4>Useful Links</h4>
                    <ul>
                        <li><a href="/">Homepage</a></li>
                        <li><a href="about">About Us</a></li>
                        <!-- <li><a href="#">Help</a></li> -->
                        <li><a href="contact">Contact Us</a></li>
                    </ul>
                </div>
                <div class="col-lg-3">
                    <h4>Help &amp; Information</h4>
                    <ul>
                        <li><a href="#">Help</a></li>
                        <li><a href="#">FAQ's</a></li>
                        <li><a href="#">Shipping</a></li>
                        <li><a href="#">Tracking ID</a></li>
                    </ul>
                </div>
                <div class="col-lg-12">
                    <div class="under-footer">
                        <p>Copyright © 2022 HexaShop Co., Ltd. All Rights Reserved.

                            <br>Design: <a href="https://templatemo.com" target="_parent" title="free css templates">TemplateMo</a>

                            <br>Distributed By: <a href="https://themewagon.com" target="_blank" title="free & premium responsive templates">ThemeWagon</a>
                        </p>
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
    </footer>




    <!-- cart -->

    <script src="../../plugins/jquery/jquery.min.js"></script>
    <!-- Bootstrap 4 -->
    <script src="../../plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- AdminLTE App -->
    <script src="../../dist/js/adminlte.min.js"></script>
    <!-- AdminLTE for demo purposes -->
    <script src="../../dist/js/demo.js"></script>
    <!-- cart -->

    <!-- jQuery -->
    <script src="assets1/js/jquery-2.1.0.min.js"></script>

    <!-- Bootstrap -->
    <script src="assets1/js/popper.js"></script>
    <script src="assets1/js/bootstrap.min.js"></script>
    <!-- <script src="assets1/js/ajax.js"></script> -->
    <!-- Plugins -->
    <script src="assets1/js/owl-carousel.js"></script>
    <script src="assets1/js/accordions.js"></script>
    <script src="assets1/js/datepicker.js"></script>
    <script src="assets1/js/scrollreveal.min.js"></script>
    <script src="assets1/js/waypoints.min.js"></script>
    <script src="assets1/js/jquery.counterup.min.js"></script>
    <script src="assets1/js/imgfix.min.js"></script>
    <script src="assets1/js/slick.js"></script>
    <script src="assets1/js/lightbox.js"></script>
    <script src="assets1/js/isotope.js"></script>

    <!-- Global Init -->
    <script src="assets1/js/custom.js"></script>

    <script>
        $(function() {
            var selectedClass = "";
            $("p").click(function() {
                selectedClass = $(this).attr("data-rel");
                $("#portfolio").fadeTo(50, 0.1);
                $("#portfolio div").not("." + selectedClass).fadeOut();
                setTimeout(function() {
                    $("." + selectedClass).fadeIn();
                    $("#portfolio").fadeTo(50, 1);
                }, 500);

            });


        });
    </script>
    <script>
        $("document").ready(function() {
            setTimeout(function() {
                $("div.success").remove();
            }, 3000);

        });
    </script>


    <!-- commerce -->

    <script src="../../plugins/jquery/jquery.min.js"></script>
    <!-- Bootstrap 4 -->
    <script src="../../plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- AdminLTE App -->
    <script src="../../dist/js/adminlte.min.js"></script>
    <!-- AdminLTE for demo purposes -->
    <script src="../../dist/js/demo.js"></script>
    <script>
        $(document).ready(function() {
            $('.product-image-thumb').on('click', function() {
                var $image_element = $(this).find('img')
                $('.product-image').prop('src', $image_element.attr('src'))
                $('.product-image-thumb.active').removeClass('active')
                $(this).addClass('active')
            })
        })
    </script>


    <script>
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
        $('#submit').click('submit', function(e) {
            e.preventDefault();

            var name = $("#name").val();
            var email = $('#email').val();
            var message = $('#message').val();
            $.ajax({
                type: "POST",
                url: '/contact/send',
                data: {
                    name: name,
                    email: email,
                    message: message,

                },
                success: function(data) {
                    if ($.isEmptyObject(data.error)) {
                        alert(data.success);
                        location.reload();
                    } else {
                        printErrorMsg(data.error);
                    }
                },

            });

        });

        function printErrorMsg(msg) {
            $(".print-error-msg").find("input").html('');
            $(".print-error-msg").css('display', 'block');
            $.each(msg, function(key, value) {
                $('print-error-msg').find("input").append('<span>' + value + '</span');
            });
        }
    </script>

</body>

</html>