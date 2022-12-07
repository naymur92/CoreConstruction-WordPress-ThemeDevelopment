<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
  <meta charset="<?php bloginfo('charset'); ?>" />
  <title><?php bloginfo('title'); ?></title>
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="keywords" content="HTML5 Template" />
  <meta name="description" content="<?php bloginfo('description'); ?>" />
  <meta name="author" content="zozothemes.com" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <!-- Favicon -->
  <link rel="shortcut icon" href="<?php echo get_template_directory_uri(); ?>/img/favicon.ico" />
  <!-- Font -->
  <link rel='stylesheet' href='http://fonts.googleapis.com/css?family=Arimo:300,400,700,400italic,700italic' />
  <link href='http://fonts.googleapis.com/css?family=Oswald:400,300,700' rel='stylesheet' type='text/css' />

  <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
  <div id="page">
    <!-- Page Loader -->
    <div id="pageloader">
      <div class="loader-item fa fa-spin text-color"></div>
    </div>
    <?php
    // Get topbar menu
    get_header('topbar');
    ?>
    <!-- Sticky Navbar -->
    <header id="sticker" class="sticky-navigation">
      <!-- Sticky Menu -->
      <div class="sticky-menu relative">
        <!-- navbar -->
        <div class="navbar navbar-default navbar-bg-light" role="navigation">
          <div class="container">
            <div class="row">
              <div class="col-md-12">
                <div class="navbar-header">
                  <!-- Button For Responsive toggle -->
                  <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span></button>
                  <!-- Logo -->

                  <a class="navbar-brand" href="index.html">
                    <img class="site_logo" alt="Site Logo" src="<?php echo get_template_directory_uri(); ?>/img/logo.png" />
                  </a>
                </div>
                <!-- Navbar Collapse -->
                <div class="navbar-collapse collapse">
                  <!-- nav -->
                  <ul class="nav navbar-nav">
                    <!-- <li>
                      <a class="active" href="index1.html">Home</a>
                    </li>
                    <li>
                      <a href="about-us.html">About Us</a>
                      <ul class="dropdown-menu">                        
                        <li>
                          <a href="portfolio-list.html">Our Projects</a>
                        </li>
                        <li>
                          <a href="services.html">Our Services</a>
                        </li>
                      </ul>
                    </li>
                    <li>
                      <a href="shop-list.html">Shop</a>
                    </li>
                    <li>
                      <a href="blog-list.html">Blog</a>
                    </li>
                    <li>
                      <a href="contact.html">Contact</a>
                    </li> -->

                    <!-- Get dynamic menu -->
                    <?php main_menu('primary_menu'); ?>

                    <!-- Header Search -->
                    <li class="hidden-767">
                      <a href="#" class="header-search">
                        <span>
                          <i class="fa fa-search"></i>
                        </span>
                      </a>
                    </li>
                  </ul>
                  <!-- Right nav -->
                  <!-- Header Contact Content -->
                  <div class="bg-white hide-show-content no-display header-contact-content">
                    <p class="vertically-absolute-middle">Call Us
                      <strong>+0 (123) 456 78 90</strong>
                    </p>
                    <button class="close">
                      <i class="fa fa-times"></i>
                    </button>
                  </div>
                  <!-- Header Contact Content -->
                  <!-- Header Search Content -->
                  <div class="bg-white hide-show-content no-display header-search-content">
                    <form role="search" class="navbar-form vertically-absolute-middle">
                      <div class="form-group">
                        <input type="text" placeholder="Enter your text &amp; Search Here" class="form-control" id="s" name="s" value="" />
                      </div>
                    </form>
                    <button class="close">
                      <i class="fa fa-times"></i>
                    </button>
                  </div>
                  <!-- Header Search Content -->
                  <!-- Header Share Content -->
                  <div class="bg-white hide-show-content no-display header-share-content">
                    <div class="vertically-absolute-middle social-icon gray-bg icons-circle i-3x">
                      <a href="#">
                        <i class="fa fa-facebook"></i>
                      </a>
                      <a href="#">
                        <i class="fa fa-twitter"></i>
                      </a>
                      <a href="#">
                        <i class="fa fa-pinterest"></i>
                      </a>
                      <a href="#">
                        <i class="fa fa-google"></i>
                      </a>
                      <a href="#">
                        <i class="fa fa-linkedin"></i>
                      </a>
                    </div>
                    <button class="close">
                      <i class="fa fa-times"></i>
                    </button>
                  </div>
                  <!-- Header Share Content -->
                </div>
                <!-- /.navbar-collapse -->
              </div>
              <!-- /.col-md-12 -->
            </div>
            <!-- /.row -->
          </div>
          <!-- /.container -->
        </div>
        <!-- navbar -->
      </div>
      <!-- Sticky Menu -->
    </header>
    <!-- Sticky Navbar -->