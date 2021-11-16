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

    <title>Contact-1 - Bakery</title>

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
                    <ul class="dropdown-menu">
                        <li><a href="#" title="Danish"><i class="fa fa-globe" aria-hidden="true"></i>Danish</a></li>
                        <li><a href="#" title="German"><i class="fa fa-globe" aria-hidden="true"></i>German</a></li>
                        <li><a href="#" title="French"><i class="fa fa-globe" aria-hidden="true"></i>French</a></li>
                    </ul>
                </div>
            </div>
            <ul class="contact">
                <li><a href="tel:1-800-23-456-7890" title="1-800-23-456-7890"><i class="fa fa-phone"
                            aria-hidden="true"></i>Phone: 1-800-23-456-7890</a></li>
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
                <h3>Contact</h3>
            </div>
        </div><!-- Page Banner /- -->

        <!-- Contact Us 1 -->
        <div class="contact-us-1 container-fluid no-padding">
            <div class="section-padding"></div>
            <!-- Container -->
            <div class="container">
                <div class="col-md-6 col-sm-6 col-xs-6">
                    <!-- Section Header -->
                    <div class="section-header left-header">
                        <h3>Get In Touch</h3>
                        <h5>Contact</h5>
                        <img src="images/section-seprator-1.png" alt="section-seprator-1" width="70" height="3">
                        <p>The day for a three hour tour a three hour tour then one day he was shooting at some food and
                            up through the ground came a oil that is its a beautiful day.</p>
                    </div><!-- Section Header /- -->

                    <form class="row" action="{{route('contact.store')}}" method="post">
                        @csrf
                        <div class="form-group col-md-6">
                            <input type="text" id="input_fname" name="first_name" required="" placeholder="First Name"
                                class="form-control">
                        </div>
                        <div class="form-group col-md-6">
                            <input type="text" id="input_lname" name="last_name" required="" placeholder="Last Name"
                                class="form-control">
                        </div>
                        <div class="form-group col-md-6">
                            <input type="text" id="input_email" name="email" required="" placeholder="Your Email"
                                class="form-control">
                        </div>
                        <div class="form-group col-md-6">
                            <input type="text" id="input_phone" required="" name="phone" placeholder="Your Phone Number"
                                class="form-control">
                        </div>
                        <div class="form-group col-md-12">
                            <input type="text" id="input_subject" name="subject" required="" placeholder="Subject"
                                class="form-control">
                        </div>
                        <div class="form-group col-md-12">
                            <textarea id="textarea_message" name="message" placeholder="Your Message" rows="6"
                                class="form-control"></textarea>
                        </div>
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </form>
                </div>

                <div class="col-md-6 col-sm-6 col-xs-6 contact-detail">
                    <div class="col-md-6 col-sm-6 col-xs-6 contact-content">
                        <div class="contact-info">
                            <h3>BRANCH ADDRESS</h3>
                            <p>1905A, Brook Downtown,</p>
                            <p>North California,CA 19A34</p>
                            <p>United States</p>
                        </div>
                    </div>
                    <div class="col-md-6 col-sm-6 col-xs-6 contact-content">
                        <div class="contact-info">
                            <h3>Contact Info</h3>
                            <p><a href="tel:1-800-23-456-7890" title="1-800-23-456-7890">(1-800-23-456-7890)</a></p>
                            <p><a href="mailto:info@domain.com" title="info@domain.com">info@domain.com</a></p>
                            <p><a href="mailto:xyz@royalbakers.com" title="xyz@royalbakers.com">xyz@royalbakers.com</a>
                            </p>
                        </div>
                    </div>
                    <!-- Map Section -->
                    <div class="map">
                        <div class="map-canvas" id="map-canvas-contact" data-lat="-37.817214" data-lng="144.955925"
                            data-string="1905A, Brook Downtown,North California,CA 19A34 United States" data-zoom="12">
                        </div>
                    </div><!--  Map Section /- -->
                </div>
            </div><!-- Container /- -->
            <div class="section-padding"></div>
        </div><!-- Contact Us 1 /- -->

        <!-- Newsletter Box -->
        <div class="subscribe-section container-fluid" id="subscribe-section">
            <!-- Container -->
            <div class="container">
                <h4 class="subscribe-title col-md-5 col-sm-4 col-xs-12">subscribe to our newsletter</h4>
                <form class="col-md-7 col-sm-8 col-xs-12">
                    <div class="col-md-9 col-sm-8 col-xs-8"><input type="text" placeholder="Your Email Here"
                            name="email"><i class="fa fa-envelope-o" aria-hidden="true"></i></div>
                    <div class="col-md-3 col-sm-4 col-xs-4 no-left-padding"><input type="submit" value="subscribe"
                            class="btn-default"></div>
                </form>
            </div><!-- Container /- -->
        </div><!-- Newsletter Box /- -->
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

    <!-- Library - Google Map API -->
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBg0VrLjLvDLSQdS7hw6OfZJmvHhtEV_sE"></script>

    <!-- Library - Theme JS -->
    <script src="js/functions.js"></script>
</body>

</html>
