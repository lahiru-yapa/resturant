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

    <title>About - Bakery</title>

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
                <h3>About Us</h3>
            </div>
        </div><!-- Page Banner /- -->

        <!-- Welcome Section 1 -->
        <div class="welcome-section-1 container-fluid no-padding">
            <div class="section-padding"></div>
            <div class="container">
                <div class="section-header">
                    <h3>Welcome To Cake</h3>
                    <h5>Our Story</h5>
                    <img src="images/section-seprator.png" alt="section-seprator" width="169" height="15">
                    <p>The day for a three hour tour a three hour tour then one day he was shooting at some food and up
                        through the ground came a oil that is its a beautiful day.</p>
                </div><!-- Section Header /-  -->
                <div class="col-md-7 col-sm-7 col-xs-6 wc-img-box">
                    <img src="images/welcome-1.png" alt="welcome" width="754" height="502" />
                </div>

                <div class="col-md-5 col-sm-5 col-xs-6">
                    <div class="mission-content">
                        <img src="images/welcome-ic-1.png" alt="welcome-ic" width="71" height="71">
                        <h3>Our Mission</h3>
                        <p>The day for a three hour tour a three hour tour then one day he was shooting.</p>
                    </div>

                    <div class="mission-content">
                        <img src="images/welcome-ic-2.png" alt="welcome-ic" width="71" height="71">
                        <h3>Our vision</h3>
                        <p>The day for a three hour tour a three hour tour then one day he was shooting.</p>
                    </div>

                    <div class="mission-content">
                        <img src="images/welcome-ic-3.png" alt="welcome-ic" width="71" height="71">
                        <h3>What We do</h3>
                        <p>The day for a three hour tour a three hour tour then one day he was shooting.</p>
                    </div>
                </div>
            </div><!-- Container /- -->
            <div class="section-padding"></div>
        </div><!-- Welcome Section 1 /- -->

        <!-- Team Section -->
        <div class="team-section container-fluid no-padding">
            <div class="section-padding"></div>
            <div class="container">
                <div class="row">
                    <!-- Main Carousel -->
                    <div id="main-carousel1" class="carousel slide carousel-fade" data-ride="carousel">
                        <div role="listbox" class="carousel-inner">
                            <div class="item active">
                                <div class="team-content">
                                    <div class="col-md-6 col-sm-6 col-xs-6">
                                        <img src="images/team.png" alt="team" width="468" height="595" />
                                    </div>
                                    <div class="col-md-6 col-sm-6 col-xs-6">
                                        <div class="section-header left-header">
                                            <h3>Meet Our Team</h3>
                                            <h5>CHEFS</h5>
                                            <img src="images/section-seprator-1.png" alt="section-seprator" width="70"
                                                height="3">
                                            <p>ලාබ අපේක්ෂාවෙන් බැහැරව අප පාරිභෝගික මහතුන් හට ඉහල ප්‍රමිතියකින් යුතු,
                                                රසකාරක මත
                                                පදනම් නොවූ සුව්ක්‍ය්යාරක්#####@ ප්‍රනීත ආහාර ලබා දීමට අප සෑම විටම
                                                සූදානම් දී සිටින්නෙමු.</p>
                                        </div><!-- Section Header /-  -->
                                        <div class="team-contact-info">
                                            <h5>Stefhen Richards</h5>
                                            <ul>
                                                <li><a href="#" title="Facebook"><i class="fa fa-facebook"
                                                            aria-hidden="true"></i></a></li>
                                                <li><a href="#" title="Twitter"><i class="fa fa-twitter"
                                                            aria-hidden="true"></i></a></li>
                                                <li><a href="#" title="Google-plus"><i class="fa fa-google-plus"
                                                            aria-hidden="true"></i></a></li>
                                                <li><a href="#" title="linkedin"><i class="fa fa-linkedin"
                                                            aria-hidden="true"></i></a></li>
                                                <li><a href="#" title="instagram"><i class="fa fa-instagram"
                                                            aria-hidden="true"></i></a></li>
                                            </ul>
                                            <p><a href="mailto:info@domain.com" title="info@domain.com"><i
                                                        class="fa fa-envelope"
                                                        aria-hidden="true"></i>info@domain.com</a></p>
                                            <p><a href="tel:0710995133" title="0710995133"><i class="fa fa-phone"
                                                        aria-hidden="true"></i>Phone:
                                                    0710995133</a></p>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="item">
                                <div class="team-content">
                                    <div class="col-md-6 col-sm-6 col-xs-6">
                                        <img src="images/team.png" alt="team" width="468" height="595" />
                                    </div>
                                    <div class="col-md-6 col-sm-6 col-xs-6">
                                        <div class="section-header left-header">
                                            <h3>Meet Our Team</h3>
                                            <h5>CHEFS</h5>
                                            <img src="images/section-seprator-1.png" alt="section-seprator" width="70"
                                                height="3">
                                            <p>ලාබ අපේක්ෂාවෙන් බැහැරව අප පාරිභෝගික මහතුන් හට ඉහල ප්‍රමිතියකින් යුතු,
                                                රසකාරක මත
                                                පදනම් නොවූ සුව්ක්‍ය්යාරක්#####@ ප්‍රනීත ආහාර ලබා දීමට අප සෑම විටම
                                                සූදානම් දී සිටින්නෙමු.</p>
                                        </div><!-- Section Header /-  -->
                                        <div class="team-contact-info">
                                            <h5>Stefhen Richards</h5>
                                            <ul>
                                                <li><a href="#" title="Facebook"><i class="fa fa-facebook"
                                                            aria-hidden="true"></i></a></li>
                                                <li><a href="#" title="Twitter"><i class="fa fa-twitter"
                                                            aria-hidden="true"></i></a></li>
                                                <li><a href="#" title="Google-plus"><i class="fa fa-google-plus"
                                                            aria-hidden="true"></i></a></li>
                                                <li><a href="#" title="linkedin"><i class="fa fa-linkedin"
                                                            aria-hidden="true"></i></a></li>
                                                <li><a href="#" title="instagram"><i class="fa fa-instagram"
                                                            aria-hidden="true"></i></a></li>
                                            </ul>
                                            <p><a href="mailto:info@domain.com" title="info@domain.com"><i
                                                        class="fa fa-envelope"
                                                        aria-hidden="true"></i>info@domain.com</a></p>
                                            <p><a href="tel:0710995133" title="0710995133"><i class="fa fa-phone"
                                                        aria-hidden="true"></i>Phone:
                                                    0710995133</a></p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <a class="left carousel-control" href="#main-carousel1" role="button" data-slide="prev">
                            <i class="fa fa-caret-right" aria-hidden="true"></i>
                        </a>
                        <a class="right carousel-control" href="#main-carousel1" role="button" data-slide="next">
                            <i class="fa fa-caret-left" aria-hidden="true"></i>
                        </a>
                    </div><!-- Main Carousel /-  -->
                </div>
            </div><!-- Container /- -->
        </div><!-- Team Section /- -->

        <!-- Testimonial Section -->
        <div class="testimonial-section container-fluid no-padding">
            <div class="section-padding"></div>
            <div class="container">
                <div class="section-header">
                    <h3>Talk About Us</h3>
                    <h5>Our Clients</h5>
                    <img src="images/section-seprator.png" alt="section-seprator" width="169" height="15">
                </div><!-- Section Header /-  -->
                <!-- Main Carousel -->
                <div id="main-carousel2" class="carousel slide carousel-fade" data-ride="carousel">
                    <ol class="carousel-indicators">
                        <li data-target="#main-carousel2" data-slide-to="0" class="active"></li>
                        <li data-target="#main-carousel2" data-slide-to="1"></li>
                        <li data-target="#main-carousel2" data-slide-to="2"></li>
                    </ol>
                    <div role="listbox" class="carousel-inner">
                        <div class="item active">
                            <div class="testimonial-content">
                                <p><span><i class="fa fa-quote-left"></i></span> The day for a three hour tour a three
                                    hour tour then one day he was shooting at some food and up through the ground came a
                                    oil that is its a beautiful day. <span><i class="fa fa-quote-right"></i></span></p>
                                <img src="images/testimonial.jpg" alt="testimonial" height="89" width="89" />
                                <h3>bradshaw <span>Co-Founder</span></h3>
                            </div>
                        </div>

                        <div class="item">
                            <div class="testimonial-content">
                                <p><span><i class="fa fa-quote-left"></i></span> The day for a three hour tour a three
                                    hour tour then one day he was shooting at some food and up through the ground came a
                                    oil that is its a beautiful day. <span><i class="fa fa-quote-right"></i></span></p>
                                <img src="images/testimonial.jpg" alt="testimonial" height="89" width="89" />
                                <h3>bradshaw <span>Co-Founder</span></h3>
                            </div>
                        </div>

                        <div class="item">
                            <div class="testimonial-content">
                                <p><span><i class="fa fa-quote-left"></i></span> The day for a three hour tour a three
                                    hour tour then one day he was shooting at some food and up through the ground came a
                                    oil that is its a beautiful day. <span><i class="fa fa-quote-right"></i></span></p>
                                <img src="images/testimonial.jpg" alt="testimonial" height="89" width="89" />
                                <h3>bradshaw <span>Co-Founder</span></h3>
                            </div>
                        </div>
                    </div>
                </div><!-- Main Carousel /-  -->
            </div><!-- Container /- -->
            <div class="section-padding"></div>
        </div><!-- Testimonial Section /- -->

        <!-- Newsletter Box -->
        @include('Components.newsletter')
    </main>

    @include('Components.footer')

    <!-- Bottom Footer -->
    <div class="bottom-footer container-fluid no-padding">
        <div class="container">
            <div class="footer-copyright">
                <p>&copy; Copyrights 2021 Chandrika Bakers.</p>
            </div>
            <div class="footer-breadcrumb pull-right">
                <ol class="breadcrumb">
                    <li title="Home" class="active">Home</li>
                    <li><a title="About Us" href="{{route("about")}}">About</a></li>
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
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDW40y4kdsjsz714OVTvrw7woVCpD8EbLE"></script>
    <script src="http://ajax.aspnetcdn.com/ajax/jquery.validate/1.9/jquery.validate.js"></script>

    <!-- Library - Theme JS -->
    <script src="js/functions.js"></script>
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
