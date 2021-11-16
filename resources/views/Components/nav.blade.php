 <!-- Navigation -->
 <div class="menu-block container-fluid no-padding">
     <!-- Container -->
     <div class="container">
         <nav class="navbar ow-navigation">
             <div class="navbar-header">
                 <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar"
                     aria-expanded="false" aria-controls="navbar">
                     <span class="sr-only">Toggle navigation</span>
                     <span class="icon-bar"></span>
                     <span class="icon-bar"></span>
                     <span class="icon-bar"></span>
                 </button>
                 <a class="navbar-brand" href="{{route("dashboard")}}" title="Logo">
                     <h3>Royal <img src="images/logo.png" alt="logo" /> Bakers</h3>
                 </a>
             </div>
             <div class="add-to-cart">
                 <div class="menu-search">
                     <div id="sb-search" class="sb-search">
                         <form>
                             <input class="sb-search-input" placeholder="Enter your search term..." type="text" value=""
                                 name="search" id="search" />
                             <button class="sb-search-submit"><i class="fa fa-search"></i></button>
                             <span class="sb-icon-search"></span>
                         </form>
                     </div>
                 </div>

             </div>
             <div id="navbar" class="navbar-collapse collapse navbar-right">
                 <ul class="nav navbar-nav">
                     <li><a href="{{route("dashboard")}}" title="Features">Home</a></li>
                     <li><a href="{{route("gallery")}}" title="Gallery">Gallery</a></li>
                     <li class="dropdown">
                         <a href="#" title="Pages" class="dropdown-toggle" role="button" aria-haspopup="true"
                             aria-expanded="false">Services</a>
                         <i class="ddl-switch fa fa-angle-down"></i>
                         <ul class="dropdown-menu">
                             <li><a href="{{route("about")}}" title="About">Bakery</a></li>
                             <li><a href="{{route("service")}}" title="Services">Hotel</a></li>
                             <li><a href="{{route("service")}}" title="Services">Cake</a></li>
                         </ul>
                     </li>
                     <li><a href="{{route("about")}}" title="About">About us</a></li>

                     <li><a href="#menu-section" title="Features">Features</a></li>
                     <li><a href="gallery-2.html" title="Portfolio">Portfolio</a></li>
                     <li class="dropdown">
                         <a href="blog.html" title="Latest News" class="dropdown-toggle" role="button"
                             aria-haspopup="true" aria-expanded="false">Blog</a>
                         <i class="ddl-switch fa fa-angle-down"></i>
                         <ul class="dropdown-menu">
                             <li><a href="blog-post.html" title="Blog Post">Blog Post</a></li>
                         </ul>
                     </li>
                     <li><a href="{{route("contact")}}" title="About">Contact</a></li>
                 </ul>
             </div>
         </nav>
     </div>
 </div>
