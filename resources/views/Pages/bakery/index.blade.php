<!DOCTYPE html>
<!--[if lt IE 7 ]> <html class="ie6"> <![endif]-->
<!--[if IE 7 ]>    <html class="ie7"> <![endif]-->
<!--[if IE 8 ]>    <html class="ie8"> <![endif]-->
<!--[if IE 9 ]>    <html class="ie9"> <![endif]-->
<!--[if (gt IE 9)|!(IE)]><!-->
<html class="">
<!--<![endif]-->

<head>
    <meta charset="utf-8">

    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <meta name="description" content="">
    <meta name="author" content="">

    <title>Services - Bakery</title>

    <!-- Standard Favicon -->
    <link rel="icon" type="image/x-icon" href="images//favicon.ico" />

    <!-- For iPhone 4 Retina display: -->
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="images//apple-touch-icon-114x114-precomposed.png">

    <!-- For iPad: -->
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="images//apple-touch-icon-72x72-precomposed.png">

    <!-- For iPhone: -->
    <link rel="apple-touch-icon-precomposed" href="images//apple-touch-icon-57x57-precomposed.png">

    <!-- Custom - Theme CSS -->
    <link rel="stylesheet" type="text/css" href="style.css">
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
    <!--[if lt IE 9]>
		<script src="js/html5/respond.min.js"></script>
    <![endif]-->

</head>

<body data-offset="200" data-spy="scroll" data-target=".ow-navigation">
    <!-- Loader -->
    <div id="site-loader" class="load-complete">
        <div class="loader">
            <div class="loader-inner ball-clip-rotate">
                <div></div>
            </div>
        </div>
    </div><!-- Loader /- -->

    <!-- Top Header  -->
    <div class="top-header container-fluid no-padding">
        <!-- Container -->
        <div class="container">
            <div class="header-top-info">
                <div class="language-dropdown dropdown">
                    <i class="fa fa-globe" aria-hidden="true"></i>
                    <label>Languages:</label>
                    <button class="btn dropdown-toggle" type="button" id="language" data-toggle="dropdown"
                        aria-haspopup="true" aria-expanded="true">English <span class="caret"></span></button>

                </div>
            </div>
            <ul class="contact">
                <li><a href="tel:0710995133" title="0710995133"><i class="fa fa-phone" aria-hidden="true"></i>Phone:
                        0710995133</a></li>
            </ul>
            <div class="social-icons pull-right">
                <ul>
                    <li><a title="Facebook" href="#"><i class="fa fa-facebook-square" aria-hidden="true"></i></a></li>
                    <li><a title="Twitter" href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                    <li><a title="Pinterest" href="#"><i class="fa fa-pinterest" aria-hidden="true"></i></a></li>
                    <li><a title="Instagram" href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
                    <li><a title="Skype" href="#"><i class="fa fa-skype" aria-hidden="true"></i></a></li>
                    <li><a title="Dribbble" href="#"><i class="fa fa-dribbble" aria-hidden="true"></i></a></li>
                </ul>
            </div>
        </div><!-- Container /- -->
    </div><!-- Top Header /- -->


    <!-- Header -->
    <header class="header-main header-position container-fluid no-padding">
        @include('Components.nav')
    </header><!-- Header /- -->

    <main class="site-main page-spacing">
        <!-- Page Banner -->
        <div class="page-banner container-fluid no-padding">
            <div class="page-banner-content">
                <h3>Bakery</h3>
            </div>
        </div><!-- Page Banner /- -->

        <!-- Welcome Section -->
        <div class="welcome-section container-fluid no-padding">
            <div class="section-padding"></div>
            <div class="container">
                <div class="row">
                    <div class="col-md-6 col-sm-6 col-xs-6">
                        <img src="images/welcome.png" alt="welcome" width="457" height="700" />
                    </div>
                    <div class="col-md-6 col-sm-6 col-xs-6 wc-content-box">
                        <div class="welcome-header">
                            <span>30</span>
                            <h5>Years</h5>
                            <h5>Of Excellence</h5>
                        </div>
                        <div class="welcome-content">
                            <div class="section-header left-header">
                                <h3>About Us</h3>
                                <h5>Our story</h5>
                                <img src="images/section-seprator-1.png" alt="section-seprator" width="70" height="3">
                                <p>The day for a three hour tour a three hour tour then one day he was shooting at some
                                    food and up through the ground came a oil that is its a beautiful day Got a dream
                                    and we just know now we are gonna make our dream come true so get a witch is shawl
                                    on a broomstick you can crawl on were gonna pay.</p>
                                <a href="#" title="Read More" class="read-more">Read More</a>
                            </div><!-- Section Header /-  -->
                        </div>
                    </div>
                </div>
            </div><!-- Container /- -->
        </div><!-- Welcome Section /- -->

        <!-- Order Section 1 -->
        <div class="order-section order-section-1 container-fluid no-padding">
            <div class="section-padding"></div>
            <div class="container">
                <div class="section-header">
                    <h3>Choose your Flavour</h3>
                    <h5>Order Online</h5>
                    <img src="images/section-seprator.png" alt="section-seprator" width="169" height="15">
                    <p>The day for a three hour tour a three hour tour then one day he was shooting at some food and up
                        through the ground came a oil that is its a beautiful day.</p>
                </div><!-- Section Header /-  -->

                <form action="{{route('order.store')}}" method="POST" id="subcribe-order">
                    @csrf

                    <div class="col-md-4 col-sm-4 col-xs-4">
                        <input type="text" class="form-control" placeholder="Name *" name="name" name="name" />
                    </div>
                    <div class="col-md-4 col-sm-4 col-xs-4">
                        <input type="text" class="form-control" placeholder="Phone Number *" name="phone" />
                    </div>
                    <div class="col-md-4 col-sm-4 col-xs-4">
                        <input type="text" class="form-control" placeholder="Food Name *" name="food" />
                    </div>
                    <div class="col-md-12 col-sm-12 col-xs-12">
                        <textarea class="form-control" rows="4" placeholder="Your Address *" name="address"></textarea>
                    </div>
                    <div class="col-md-12 col-sm-12 col-xs-12 order-links">
                        <button type="submit" class="order-now">Order Now</button>

                    </div>
                    <div class="working-hours">
                        <p><span>working hours:</span> monday to friday : 8.30AM - 10.30PM</p>
                        <p>saturday : 9.00AM - 10.30PM</p>
                        <p>sunday : <span>closed</span></p>
                    </div>
                </form>
            </div><!-- Container /- -->
            <div class="section-padding"></div>
        </div><!-- Order Section 1 /- -->

        <!-- Menu Section -->
        <div id="menu-section" class="menu-section container-fluid no-padding">
            <div class="section-padding"></div>
            <div class="container">
                <div class="section-header">
                    <h3>Our Menu</h3>
                    <h5>CREAMY DISHES</h5>
                    <img src="images/section-seprator.png" alt="section-seprator" width="169" height="15">
                    <p><b>වසර 15 කට අදික පලපුරුද්දක් සහිත Chandrika Hotel වෙතින් . සියලූම අවස්තාවලට ගැලපෙන උසස්ම
                            ප්‍රමිතියකින් යුතු Cake වර්ග.. මිත්‍රශීලී සුහද සේවයක් සදහා අප සමග අත්වැල් බැද ගන්න.</b></p>
                </div><!-- Section Header /-  -->
            </div><!-- Container /- -->

            <div class="col-md-4 col-sm-6 col-xs-6" style="text-align: center">
                <div class="">
                    <img src="images/b1.jpeg" alt="menu" />


                </div>
            </div>

            <div class="col-md-4 col-sm-6 col-xs-6 text-center" style="text-align: center">
                <div class="">
                    <img src="images/b2.jpeg" alt="menu" />


                </div>
            </div>

            <div class="col-md-4 col-sm-6 col-xs-6" style="text-align: center">
                <div class="">
                    <img src="images/b3.jpeg" alt="menu" />

                </div>
            </div>

            <div class="col-md-4 col-sm-6 col-xs-6" style="text-align: center">
                <div class="">
                    <img src="images/sd.jpeg" alt="menu" />


                </div>
            </div>

            <div class="col-md-4 col-sm-6 col-xs-6" style="text-align: center">
                <div class="">
                    <img src="images/tg.jpeg" alt="menu" />

                </div>
            </div>

            <div class="col-md-4 col-sm-6 col-xs-6" style="text-align: center">
                <div class="">
                    <img src="images/sde.jpeg" alt="menu" />

                </div>
            </div>
        </div><!-- Menu Section /- -->
        <div class="section-padding"></div>

        <!-- Newsletter Box -->
        @include('Components.newsletter')

    </main>
    @include('Components.footer')
    <!-- Bottom Footer -->
    <div class="bottom-footer container-fluid no-padding">
        <div class="container">
            <div class="footer-copyright">
                <p>&copy; Copyrights 2016 Royal Bakers. All Rights Reserved</p>
            </div>
            <div class="footer-breadcrumb pull-right">
                <ol class="breadcrumb">
                    <li title="Home" class="active">Home</li>
                    <li><a title="About Us" href="about.html">About</a></li>
                    <li><a title="Services" href="services.html">Services</a></li>
                    <li><a title="Portfolio" href="portfolio.html">Portfolio</a></li>
                    <li><a title="Blog" href="blog.html">Blog</a></li>
                    <li><a title="Contact" href="contact-us.html">Contact</a></li>
                </ol>
            </div>
        </div>
    </div><!-- Bottom Footer /- -->

    <!-- JQuery v1.11.3 -->
    <script src="js/jquery.min.js"></script>

    <!-- Library - Js -->
    <script src="libraries/lib.js"></script><!-- Bootstrap JS File v3.3.5 -->
    <script src="http://ajax.aspnetcdn.com/ajax/jquery.validate/1.9/jquery.validate.js"></script>

    <!-- Library - Google Map API -->
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDW40y4kdsjsz714OVTvrw7woVCpD8EbLE"></script>

    <!-- Library - Theme JS -->
    <script src="js/functions.js"></script>

    <script>
        $(function () {
            // activity data validation
            $("#subcribe-order").validate({

                rules: {
                    name: {
                        required: true
                    },
                    food: {
                        required: true
                    },
                    address: {
                        required: true,
                    },
                    phone: {
                        required: true,
                        phoneLength: true

                    },

                },
                messages: {
                    name: {
                        required: "Please enter name"
                    },
                    food: {
                        required: "Please enter food name"
                    },

                    phone: {
                        required: "Please enter phone number",
                        phoneLength: "Please enter phone number length 10",
                    },
                    address: {
                        required: "Please enter address",
                    },

                },
                submitHandler: function (form) {

                    form.submit();

                }
            });

        });

    </script>
    <script>
        $(function () {
            // activity data validation
            $("#subcribe-form").validate({

                rules: {
                    email: {
                        required: true,
                        emailValid: true
                    }
                },
                messages: {

                    email: {
                        required: "Please enter email",
                        emailValid: "Please enter valid email"
                    }
                },
                submitHandler: function (form) {

                    form.submit();

                }
            });

        });

    </script>
    <script>
        // Validation method

        $.validator.addMethod("slugSpecialChar", function (value, element) {
            var patt = /^[a-zA-Z0-9-]+$/;
            if (patt.test(value)) {
                return true;
            } else {
                return false;
            }
        });
        $.validator.addMethod("phoneLength", function (value, element) {
            if (value.length === 10) {
                return true;
            } else {
                return false;
            }

        });
        $.validator.addMethod("emailValid", function (value, element) {
            var patt = /^\b[A-Z0-9._%-]+@[A-Z0-9.-]+\.[A-Z]{2,4}\b$/i;
            return patt.test(value);
        });

    </script>
</body>

</html>
