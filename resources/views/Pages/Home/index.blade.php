<!DOCTYPE html>

<head>
    <meta charset="utf-8">

    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <meta name="description" content="">
    <meta name="author" content="">

    <title>Home - Bakery</title>

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



    <!-- Header -->
    <header class="header-main container-fluid no-padding">
        @include('Components.nav')
    </header><!-- Header /- -->

    <main class="site-main page-spacing">
        <!-- Photo Slider -->
        <div class="photo-slider container-fluid no-padding">
            <!-- Main Carousel -->
            <div id="main-carousel" class="carousel slide carousel-fade" data-ride="carousel">
                <div role="listbox" class="carousel-inner">
                    <div class="item active">
                        <img width="1920" height="1030" alt="slider" src="images/slider-1.jpg">
                        <div class="carousel-caption">
                            <img data-animation="animated pulse" src="images/slider-ic.png" alt="slider-ic" width="121"
                                height="124">
                            <p data-animation="animated bounceInLeft">Cake for Later Cake </p>
                            <p data-animation="animated bounceInRight">as a way of Life</p>

                        </div>
                    </div>

                    <div class="item">
                        <img width="1920" height="1030" alt="slider" src="images/slider-2.jpg">
                        <div class="carousel-caption">
                            <img data-animation="animated pulse" src="images/slider-ic.png" alt="slider-ic" width="121"
                                height="124">
                            <p data-animation="animated bounceInLeft">Cake for Later Cake </p>
                            <p data-animation="animated bounceInRight">as a way of Life</p>

                        </div>
                    </div>

                    <div class="item">
                        <img width="1920" height="1030" alt="slider" src="images/slider-3.jpg">
                        <div class="carousel-caption">
                            <img data-animation="animated pulse" src="images/slider-ic.png" alt="slider-ic" width="121"
                                height="124">
                            <p data-animation="animated bounceInLeft">Cake for Later Cake </p>
                            <p data-animation="animated bounceInRight">as a way of Life</p>

                        </div>
                    </div>
                    <a class="left carousel-control" href="#main-carousel" role="button" data-slide="prev">
                        <i class="fa fa-caret-left" aria-hidden="true"></i>
                    </a>
                    <a class="right carousel-control" href="#main-carousel" role="button" data-slide="next">
                        <i class="fa fa-caret-right" aria-hidden="true"></i>
                    </a>
                </div>
            </div><!-- Main Carousel /-  -->
        </div><!-- Photo Slider /- -->

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
                            <span>20+</span>
                            <h5>Years</h5>
                            <h5>Of Excellence</h5>
                        </div>
                        <div class="welcome-content">
                            <div class="section-header left-header">
                                <h3>About Us</h3>
                                <h5>Our story</h5>
                                <img src="images/section-seprator-1.png" alt="section-seprator" width="70" height="3">
                                <b>
                                    <p>උසස් ප්‍රමිතියකින් යුතු ප්‍රනීත ආහාර ලබා ගැනීමට ඔබට දැන් අපගේ Chandrika Hotel
                                        වෙත
                                        පැමිනිය හැක.
                                        <br><br>

                                        ඇහැලියගොඩ ,මාහර ග්‍රාමයේ පිහිටි අපගේ බේකරිය 100%ක් සව්ක්‍ය මාර්ගෝපදේශයන්ට
                                        අනුකූලව
                                        තත්ත්වයෙන් උසස් ප්‍රනීත දරපෝරනු තුල ආහාර නිශ්පාදනය කරනු ලැබේ.
                                        <br>
                                        අපගේ වාහන මගින් ඔබගේ ප්‍රදේශ දක්වා විහිදෙන බෙදාහැරීමේ ක්‍රමවේදයක්ද අප සතු වන
                                        බැවින්
                                        ඔබගේ නිවස අසලටම ආහාර සපයා දීමට අප ආයතනය කටයුතු යොදා ඇත.එම වාහන තුලද විස්වානීය
                                        ලෙස
                                        සොව්කය ආරක්ශිත ක්‍රම වේදයක් යොදා ගනු ලැබේ.. අපගේ සේවක මහතුන් ඔබට මිත්‍රශීලී සුහද
                                        සේවයක් ලබා දෙනු ඇත.</p>
                                </b>

                            </div><!-- Section Header /-  -->
                        </div>
                    </div>
                </div>
            </div><!-- Container /- -->
        </div><!-- Welcome Section /- -->


        <!-- Festival Section -->
        <div class="festival-section container-fluid no-padding">
            <div class="section-padding"></div>
            <div class="container">
                <div class="festival-details-tab">
                    <!-- Tab panes -->
                    <div class="tab-content">
                        <div role="tabpanel" class="tab-pane active" id="partycakes">
                            <div class="festival-content">
                                <h5>Why we are</h5>
                                <img src="images/section-seprator-1.png" alt="section-seprator-1" width="70"
                                    height="3" />
                                <b>
                                    <p>තත්ත්වයෙන් උසස් ප්‍රනීත දර පෝරනුවේ නිශ්පාදිත බේකරි ආහාර.
                                        <br>
                                        ඉහලම වගකීමක් සහිතව සියලූම උත්සව අවස්තා , ව්‍යාපාරවල ආහාර අවශ්‍යතා ඉටුකරදීම.
                                        <br>
                                        සියලූම අවස්තාවලට අනුකූලව ඉතාමත් උසස් තත්වයෙන් යුතු Cake වර්ග අපගෙන් ලබා ගත හැක..
                                    </p>
                                </b>

                            </div>
                        </div>
                        <div role="tabpanel" class="tab-pane" id="softcakes">
                            <div class="festival-content">
                                <h5>Why we are</h5>
                                <img src="images/section-seprator-1.png" alt="section-seprator-1" width="70"
                                    height="3" />
                                <b>
                                    <p>තත්ත්වයෙන් උසස් ප්‍රනීත දර පෝරනුවේ නිශ්පාදිත බේකරි ආහාර.
                                        <br>
                                        ඉහලම වගකීමක් සහිතව සියලූම උත්සව අවස්තා , ව්‍යාපාරවල ආහාර අවශ්‍යතා ඉටුකරදීම.
                                        <br>
                                        සියලූම අවස්තාවලට අනුකූලව ඉතාමත් උසස් තත්වයෙන් යුතු Cake වර්ග අපගෙන් ලබා ගත හැක..
                                    </p>
                                </b>

                            </div>
                        </div>
                        <div role="tabpanel" class="tab-pane" id="cupcakes">
                            <div class="festival-content">
                                <h5>Why we are</h5>
                                <img src="images/section-seprator-1.png" alt="section-seprator-1" width="70"
                                    height="3" />
                                <b>
                                    <p>තත්ත්වයෙන් උසස් ප්‍රනීත දර පෝරනුවේ නිශ්පාදිත බේකරි ආහාර.
                                        <br>
                                        ඉහලම වගකීමක් සහිතව සියලූම උත්සව අවස්තා , ව්‍යාපාරවල ආහාර අවශ්‍යතා ඉටුකරදීම.
                                        <br>
                                        සියලූම අවස්තාවලට අනුකූලව ඉතාමත් උසස් තත්වයෙන් යුතු Cake වර්ග අපගෙන් ලබා ගත හැක..
                                    </p>
                                </b>

                            </div>
                        </div>
                        <div role="tabpanel" class="tab-pane" id="berrycakes">
                            <div class="festival-content">
                                <h5>Why we are</h5>
                                <img src="images/section-seprator-1.png" alt="section-seprator-1" width="70"
                                    height="3" />
                                <b>
                                    <p>තත්ත්වයෙන් උසස් ප්‍රනීත දර පෝරනුවේ නිශ්පාදිත බේකරි ආහාර.
                                        <br>
                                        ඉහලම වගකීමක් සහිතව සියලූම උත්සව අවස්තා , ව්‍යාපාරවල ආහාර අවශ්‍යතා ඉටුකරදීම.
                                        <br>
                                        සියලූම අවස්තාවලට අනුකූලව ඉතාමත් උසස් තත්වයෙන් යුතු Cake වර්ග අපගෙන් ලබා ගත හැක..
                                    </p>
                                </b>

                            </div>
                        </div>
                        <div role="tabpanel" class="tab-pane" id="nutcake">
                            <div class="festival-content">
                                <h5>Why we are</h5>
                                <img src="images/section-seprator-1.png" alt="section-seprator-1" width="70"
                                    height="3" />
                                <b>
                                    <p>තත්ත්වයෙන් උසස් ප්‍රනීත දර පෝරනුවේ නිශ්පාදිත බේකරි ආහාර.
                                        <br>
                                        ඉහලම වගකීමක් සහිතව සියලූම උත්සව අවස්තා , ව්‍යාපාරවල ආහාර අවශ්‍යතා ඉටුකරදීම.
                                        <br>
                                        සියලූම අවස්තාවලට අනුකූලව ඉතාමත් උසස් තත්වයෙන් යුතු Cake වර්ග අපගෙන් ලබා ගත හැක..
                                    </p>
                                </b>
                            </div>
                        </div>
                    </div>
                    <!-- Nav tabs -->
                    <ul class="nav nav-tabs" role="tablist">
                        <li role="presentation" class="active"><a href="#partycakes" aria-controls="partycakes "
                                role="tab" data-toggle="tab"><i><img src="images/festival-ic-1.png" alt="festival-ic-1"
                                        width="37" height="42" /></i>partycakes</a></li>
                        <li role="presentation"><a href="#softcakes" aria-controls="softcakes" role="tab"
                                data-toggle="tab"><i><img src="images/festival-ic-2.png" alt="festival-ic-2" width="37"
                                        height="42" /></i>softcakes</a></li>
                        <li role="presentation"><a href="#cupcakes" aria-controls="cupcakes" role="tab"
                                data-toggle="tab"><i><img src="images/festival-ic-3.png" alt="festival-ic-3" width="37"
                                        height="42" /></i>cupcakes</a></li>
                        <li role="presentation"><a href="#berrycakes" aria-controls="berrycakes" role="tab"
                                data-toggle="tab"><i><img src="images/festival-ic-4.png" alt="festival-ic-4" width="37"
                                        height="42" /></i>berrycakes</a></li>
                        <li role="presentation"><a href="#nutcake" aria-controls="nutcake" role="tab"
                                data-toggle="tab"><i><img src="images/festival-ic-5.png" alt="festival-ic-5" width="37"
                                        height="42" /></i>nutcake</a></li>
                    </ul>
                </div>
            </div><!-- Container /- -->
        </div><!-- Festival Section /- -->
        <section class="portfolio-section-three">
            <div class="outer-box">
                <div class="auto-container">
                    <div class="sec-title text-center">
                        <div class="divider"><img src="images/icons/divider_3.png" alt=""></div>
                        <h2>Our Gallery</h2>
                    </div>
                </div>

                <!-- Portfolio Carousel -->
                <div class="portfolio-carousel owl-carousel owl-theme">
                    <!-- Portfolio Block Three -->
                    <div class="portfolio-block-thre">
                        <div class="image-box">
                            <figure class="image"><a href="images/gallery/3-1.jpg" class="lightbox-image"
                                    data-fancybox="portfolio"><img src="images/gallery/3-1.jpg" alt=""></a></figure>
                        </div>
                    </div>

                    <!-- Portfolio Block Three -->
                    <div class="portfolio-block-thre">
                        <div class="image-box">
                            <figure class="image"><a href="images/gallery/3-2.jpg" class="lightbox-image"
                                    data-fancybox="portfolio"><img src="images/gallery/3-2.jpg" alt=""></a></figure>
                        </div>
                    </div>

                    <!-- Portfolio Block Three -->
                    <div class="portfolio-block-thre">
                        <div class="image-box">
                            <figure class="image"><a href="images/gallery/3-3.jpg" class="lightbox-image"
                                    data-fancybox="portfolio"><img src="images/gallery/3-3.jpg" alt=""></a></figure>
                        </div>
                    </div>

                    <!-- Portfolio Block Three -->
                    <div class="portfolio-block-thre">
                        <div class="image-box">
                            <figure class="image"><a href="images/gallery/3-4.jpg" class="lightbox-image"
                                    data-fancybox="portfolio"><img src="images/gallery/3-4.jpg" alt=""></a></figure>
                        </div>
                    </div>

                    <!-- Portfolio Block Three -->
                    <div class="portfolio-block-thre">
                        <div class="image-box">
                            <figure class="image"><a href="images/gallery/3-5.jpg" class="lightbox-image"
                                    data-fancybox="portfolio"><img src="images/gallery/3-5.jpg" alt=""></a></figure>
                        </div>
                    </div>

                    <!-- Portfolio Block Three -->
                    <div class="portfolio-block-thre">
                        <div class="image-box">
                            <figure class="image"><a href="images/gallery/3-6.jpg" class="lightbox-image"
                                    data-fancybox="portfolio"><img src="images/gallery/3-6.jpg" alt=""></a></figure>
                        </div>
                    </div>

                    <!-- Portfolio Block Three -->
                    <div class="portfolio-block-thre">
                        <div class="image-box">
                            <figure class="image"><a href="images/gallery/3-7.jpg" class="lightbox-image"
                                    data-fancybox="portfolio"><img src="images/gallery/3-7.jpg" alt=""></a></figure>
                        </div>
                    </div>

                    <!-- Portfolio Block Three -->
                    <div class="portfolio-block-thre">
                        <div class="image-box">
                            <figure class="image"><a href="images/gallery/3-8.jpg" class="lightbox-image"
                                    data-fancybox="portfolio"><img src="images/gallery/3-8.jpg" alt=""></a></figure>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Menu Section -->
        <div id="menu-section" class="menu-section container-fluid no-padding">
            <div class="section-padding"></div>
            <div class="container">
                <div class="section-header">
                    <h3>Our Menu</h3>
                    <h5>CREAMY DISHES</h5>
                    <img src="images/section-seprator.png" alt="section-seprator" width="169" height="15">
                    <p>The day for a three hour tour a three hour tour then one day he was shooting at some food and up
                        through the ground came a oil that is its a beautiful day.</p>
                </div><!-- Section Header /-  -->
            </div><!-- Container /- -->

            <div class="col-md-4 col-sm-6 col-xs-6" style="text-align: center">
                <div class="">
                    <img src="images/menu-1.png" alt="menu" />
                    <h3>CHOCOLATE FLASH </h3>

                </div>
            </div>

            <div class="col-md-4 col-sm-6 col-xs-6 text-center" style="text-align: center">
                <div class="">
                    <img src="images/menu-2.png" alt="menu" />
                    <h3>ROSE CREAMY </h3>

                </div>
            </div>

            <div class="col-md-4 col-sm-6 col-xs-6" style="text-align: center">
                <div class="">
                    <img src="images/menu-3.png" alt="menu" />
                    <h3>VELVET CAKE </h3>

                </div>
            </div>

            <div class="col-md-4 col-sm-6 col-xs-6" style="text-align: center">
                <div class="">
                    <img src="images/menu-4.png" alt="menu" />
                    <h3>FLOWERED CAKE </h3>

                </div>
            </div>

            <div class="col-md-4 col-sm-6 col-xs-6" style="text-align: center">
                <div class="">
                    <img src="images/menu-5.png" alt="menu" />
                    <h3>ROSEBERRY CAKE </h3>

                </div>
            </div>

            <div class="col-md-4 col-sm-6 col-xs-6" style="text-align: center">
                <div class="">
                    <img src="images/menu-6.png" alt="menu" />
                    <h3>CHOCOLATE BERRY CAKE </h3>

                </div>
            </div>
        </div><!-- Menu Section /- -->
        <div class="section-padding"></div>

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
                                            <p>The day for a three hour tour a three hour tour then one day he was
                                                shooting at some food and up through the ground came a oil that is its a
                                                beautiful day Got a dream and we just know now we are gonna make our
                                                dream come true so get a witch is shawl on a broomstick you can crawl on
                                                were gonna pay.</p>
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
                                            <p>The day for a three hour tour a three hour tour then one day he was
                                                shooting at some food and up through the ground came a oil that is its a
                                                beautiful day Got a dream and we just know now we are gonna make our
                                                dream come true so get a witch is shawl on a broomstick you can crawl on
                                                were gonna pay.</p>
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

        <!-- Order Section -->
        <div class="order-section container-fluid no-padding">
            <div class="section-padding"></div>
            <div class="container">
                <div class="row">
                    <div class="col-md-7 col-sm-7 col-xs-7">
                        <div class="section-header">
                            <h3>Choose your Flavour</h3>
                            <h5>Order Online</h5>
                            <img src="images/section-seprator.png" alt="section-seprator" width="169" height="15">
                            <p>The day for a three hour tour a three hour tour then one day he was shooting at some food
                                and up through the ground came a oil that is its a beautiful day.</p>
                        </div><!-- Section Header /-  -->
                        <form class="online-form">
                            <div class="col-md-6 col-sm-6 col-xs-6">
                                <input type="text" class="form-control" placeholder="Name *" required />
                            </div>
                            <div class="col-md-6 col-sm-6 col-xs-6">
                                <input type="text" class="form-control" placeholder="Phone Number *" required />
                            </div>
                            <div class="form-group col-md-6 col-sm-6 col-xs-6">
                                <select>
                                    <option>FLAVOURS</option>
                                    <option>FLAVOURS</option>
                                    <option>FLAVOURS</option>
                                    <option>FLAVOURS</option>
                                </select>
                            </div>
                            <div class="col-md-6 col-sm-6 col-xs-6">
                                <input type="text" class="form-control" placeholder="Your Address *" required />
                            </div>
                            <a href="#" title="Order Now" class="order-now">Order Now</a>
                            <p>FOR MORE QUERIES CALL US AT :<a href="tel:1-800-23-456-7890" title="1-800-23-456-7890">
                                    1-800-23-456-7890</a></p>
                        </form>
                    </div>
                </div>
            </div><!-- Container /- -->

            <div class="right-image">
                <img src="images/order-online.png" alt="order-online" width="600" height="830" />
            </div>
            <div class="section-padding"></div>
        </div><!-- Order Section /- -->

        <!-- Counter Section -->
        <div class="counter-section container-fluid no-padding">
            <div class="container">
                <div class="col-md-3 col-sm-6 col-xs-12">
                    <div class="counter-box">
                        <h3><span class="count" id="statistics_count-1" data-statistics_percent="1500"> &nbsp;</span>
                        </h3>
                        <i class="fa fa-smile-o" aria-hidden="true"></i>
                        <p>HAPPY CLIENTS</p>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6 col-xs-12">
                    <div class="counter-box">
                        <h3><span class="count" id="statistics_count-2" data-statistics_percent="550">&nbsp;</span></h3>
                        <i class="fa fa-coffee" aria-hidden="true"></i>
                        <p>COFFEE CUPS</p>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6 col-xs-12">
                    <div class="counter-box">
                        <h3><span class="count" id="statistics_count-3" data-statistics_percent="750">&nbsp;</span></h3>
                        <i class="fa fa-hourglass-o" aria-hidden="true"></i>
                        <p>WORKED HOURS</p>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6 col-xs-12">
                    <div class="counter-box">
                        <h3><span class="count" id="statistics_count-4" data-statistics_percent="110">&nbsp;</span></h3>
                        <i class="fa fa-home" aria-hidden="true"></i>
                        <p>BRANCHES</p>
                    </div>
                </div>
            </div>
        </div><!-- Counter Section /- -->

        <!-- Latest Blog -->
        <div class="latest-blog container-fluid no-padding">
            <div class="section-padding"></div>
            <!-- Container -->
            <div class="container">
                <div class="row">
                    <!-- Section Header -->
                    <div class="section-header">
                        <h3>Latest Post</h3>
                        <h5>Our Blog</h5>
                        <img width="169" height="15" alt="section-seprator" src="images/section-seprator.png">
                        <p>The day for a three hour tour a three hour tour then one day he was shooting at some food and
                            up through the ground came a oil that is its a beautiful day.</p>
                    </div><!-- Section Header /- -->
                    <article class="type-post">
                        <div class="col-md-4 col-sm-6 col-xs-6">
                            <div class="entry-cover">
                                <a href="blog-post.html" title="Recent Blog">
                                    <img src="images/latestblog-1.jpg" alt="blog" width="370" height="220">
                                </a>
                            </div>
                            <div class="post-content">
                                <div class="latest-blog-content">
                                    <div class="post-date"><span>25</span><span>Jan</span></div>
                                    <h3 class="entry-title"><a href="blog-post.html" title="CREAMY WAVES SHIFT"> creamy
                                            waves shift</a></h3>
                                    <div class="entry-meta">
                                        <a title="Likes" href="#"><i class="fa fa-heart-o"></i>10 Likes</a>
                                        <a title="Comments" href="#"><i class="fa fa-commenting-o"></i>15 Comments</a>
                                        <a title="Admin" href="#">Admin</a>
                                    </div>
                                </div>
                                <div class="recent-content">
                                    <div class="entry-content">
                                        <p>The day he was shooting at some food and up through the ground came a oil
                                            that is its a beautiful day came a oil.</p>
                                    </div>
                                    <a href="blog-post.html" title="Read More" class="read-more">Read More</a>
                                </div>
                            </div>
                        </div>
                    </article>

                    <article class="type-post">
                        <div class="col-md-4 col-sm-6 col-xs-6">
                            <div class="entry-cover">
                                <a href="blog-post.html" title="Recent Blog">
                                    <img src="images/latestblog-2.jpg" alt="blog" width="370" height="220">
                                </a>
                            </div>
                            <div class="post-content">
                                <div class="latest-blog-content">
                                    <div class="post-date"><span>07</span><span>Feb</span></div>
                                    <h3 class="entry-title"><a href="blog-post.html" title="THE MUPPET SHOW">the muppet
                                            show</a></h3>
                                    <div class="entry-meta">
                                        <a title="Likes" href="#"><i class="fa fa-heart-o"></i>10 Likes</a>
                                        <a title="Comments" href="#"><i class="fa fa-commenting-o"></i>15 Comments</a>
                                        <a title="Admin" href="#">Admin</a>
                                    </div>
                                </div>
                                <div class="recent-content">
                                    <div class="entry-content">
                                        <p>The day he was shooting at some food and up through the ground came a oil
                                            that is its a beautiful day came a oil.</p>
                                    </div>
                                    <a href="blog-post.html" title="Read More" class="read-more">Read More</a>
                                </div>
                            </div>
                        </div>
                    </article>

                    <article class="type-post">
                        <div class="col-md-4 col-sm-6 col-xs-6">
                            <div class="entry-cover">
                                <a href="blog-post.html" title="Recent Blog">
                                    <img src="images/latestblog-3.jpg" alt="blog" width="370" height="220">
                                </a>
                            </div>
                            <div class="post-content">
                                <div class="latest-blog-content">
                                    <div class="post-date"><span>14</span><span>Apr</span></div>
                                    <h3 class="entry-title"><a href="blog-post.html" title="deserve the cupcake">deserve
                                            the cupcake</a></h3>
                                    <div class="entry-meta">
                                        <a title="Likes" href="#"><i class="fa fa-heart-o"></i>10 Likes</a>
                                        <a title="Comments" href="#"><i class="fa fa-commenting-o"></i>15 Comments</a>
                                        <a title="Admin" href="#">Admin</a>
                                    </div>
                                </div>
                                <div class="recent-content">
                                    <div class="entry-content">
                                        <p>The day he was shooting at some food and up through the ground came a oil
                                            that is its a beautiful day came a oil.</p>
                                    </div>
                                    <a href="blog-post.html" title="Read More" class="read-more">Read More</a>
                                </div>
                            </div>
                        </div>
                    </article>
                    <div class="col-md-12 col-sm-12 col-xs-12 no-padding">
                        <a href="blog.html" title="View all post" class="all-post">View all post</a>
                    </div>
                </div>
            </div><!-- Container /- -->
            <div class="section-padding"></div>
        </div><!-- Latest Blog /- -->


        <!-- Newsletter Box -->
        <div class="subscribe-section container-fluid" id="subscribe-section">
            <!-- Container -->
            <div class="container">
                <h4 class="subscribe-title col-md-5 col-sm-4 col-xs-12">subscribe to our newsletter</h4>
                <form class="col-md-7 col-sm-8 col-xs-12">
                    <div class="col-md-9 col-sm-8 col-xs-8"><input type="text" placeholder="Your Email Here"
                            name="email"><i class="fa fa-envelope-o" aria-hidden="true"></i></div>
                    <div class="col-md-3 col-sm-4 col-xs-4 no-left-padding"><input type="submit" value="subscribe"
                            class="btn-default" name="subscribe"></div>
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
                    <li><a title="Portfolio" href="gallery-2.html">Portfolio</a></li>
                    <li><a title="Blog" href="blog.html">Blog</a></li>
                    <li><a title="Contact" href="contact-2.html">Contact</a></li>
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

    <!-- Library - Theme JS -->
    <script src="js/functions.js"></script>
</body>

</html>
