<!-- 
  Template Name: about_page
 -->
<?php get_header(); ?>
<div class="page-header page-title-left page-title-pattern">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h1 class="title"><?php wp_title('', true, 'right'); ?></h1>
                <!-- <h5>A Short Page title</h5> -->
                <ul class="breadcrumb">
                    <li>
                        <a href="index.html">Home</a>
                    </li>
                    <li>
                        <a href="#">Pages</a>
                    </li>
                    <li class="active">About Us</li>
                </ul>
            </div>
        </div>
    </div>
</div>
<!-- page-header -->
<section id="who-we-are" class="page-section no-pad border-tb">
    <div class="container-fluid who-we-are">
        <div class="row">
            <div class="col-md-8 pad-60 xs-pad-0 bottom-pad-10 top-pad-80">
                <div class="owl-carousel navigation-3 opacity text-left" data-pagination="false" data-items="2" data-autoplay="true" data-navigation="true">
                    <div class="col-sm-4 col-md-4 col-xs-12">
                        <p class="text-center">
                            <a href="<?php echo get_template_directory_uri(); ?>/img/sections/about/1.jpg" class="opacity" data-rel="prettyPhoto[portfolio]">
                                <img src="<?php echo get_template_directory_uri(); ?>/img/sections/about/1.jpg" width="370" height="185" alt="" />
                            </a>
                        </p>
                        <h3>
                            <a href="#">COMPANY HISTORY</a>
                        </h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer ornare odio et massa dignissim,
                            at accumsan metus viverra. Integer neque lectus, pellentesque sit dolor sit dolor.</p>
                    </div>
                    <div class="col-sm-4 col-md-4 col-xs-12">
                        <p class="text-center">
                            <a href="<?php echo get_template_directory_uri(); ?>/img/sections/about/2.jpg" class="opacity" data-rel="prettyPhoto[portfolio]">
                                <img src="<?php echo get_template_directory_uri(); ?>/img/sections/about/2.jpg" width="370" height="185" alt="" />
                            </a>
                        </p>
                        <h3>
                            <a href="#">OUR MISSION</a>
                        </h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer ornare odio et massa dignissim,
                            at accumsan metus viverra. Integer neque lectus, pellentesque sit dolor sit dolor.</p>
                    </div>
                    <div class="col-sm-4 col-md-4 col-xs-12">
                        <p class="text-center">
                            <a href="<?php echo get_template_directory_uri(); ?>/img/sections/about/3.jpg" class="opacity" data-rel="prettyPhoto[portfolio]">
                                <img src="<?php echo get_template_directory_uri(); ?>/img/sections/about/3.jpg" width="370" height="185" alt="" />
                            </a>
                        </p>
                        <h3>
                            <a href="#">COMPANY VISION</a>
                        </h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer ornare odio et massa dignissim,
                            at accumsan metus viverra. Integer neque lectus, pellentesque sit dolor sit dolor.</p>
                    </div>
                    <div class="col-sm-4 col-md-4 col-xs-12">
                        <p class="text-center">
                            <a href="<?php echo get_template_directory_uri(); ?>/img/sections/about/4.jpg" class="opacity" data-rel="prettyPhoto[portfolio]">
                                <img src="<?php echo get_template_directory_uri(); ?>/img/sections/about/4.jpg" width="370" height="185" alt="" />
                            </a>
                        </p>
                        <h3>
                            <a href="#">Operational Range</a>
                        </h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer ornare odio et massa dignissim,
                            at accumsan metus viverra. Integer neque lectus, pellentesque sit dolor sit dolor.</p>
                    </div>
                    <div class="col-sm-4 col-md-4 col-xs-12">
                        <p class="text-center">
                            <a href="<?php echo get_template_directory_uri(); ?>/img/sections/about/5.jpg" class="opacity" data-rel="prettyPhoto[portfolio]">
                                <img src="<?php echo get_template_directory_uri(); ?>/img/sections/about/5.jpg" width="370" height="185" alt="" />
                            </a>
                        </p>
                        <h3>
                            <a href="#">Financial Information</a>
                        </h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer ornare odio et massa dignissim,
                            at accumsan metus viverra. Integer neque lectus, pellentesque sit dolor sit dolor.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4 no-pad text-center">
                <!-- Image -->
                <div class="image-bg" data-background="<?php echo get_template_directory_uri(); ?>/img/sections/bg/1.jpg"></div>
            </div>
        </div>
    </div>
</section>
<!-- who-we-are -->
<section id="team" class="page-section">
    <div class="container text-center">
        <div class="section-title">
            <h2 class="title">Meet the Team</h2>
        </div>
        <div class="row">
            <div class="owl-carousel navigation-1" data-pagination="false" data-items="4" data-autoplay="true" data-navigation="true">
                <div class="col-sm-6 col-md-3 bottom-xs-pad-20">
                    <div class="team-item dark-bg">
                        <div class="image">
                            <!-- Image -->
                            <img src="<?php echo get_template_directory_uri(); ?>/img/sections/team/1.jpg" alt="" title="" width="270" height="270" />
                        </div>
                        <div class="description">
                            <!-- Name -->
                            <h4 class="name">Phillip Parisis</h4>
                            <!-- Designation -->
                            <div class="role">Project Manager</div>
                            <!-- Text -->
                            <p>The standard chunk of Lorem Ipsum used since the 1500s is reproduced below for those
                                intereste.</p>
                        </div>
                        <div class="social-icon">
                            <!-- Social Icons -->
                            <a href="#">
                                <i class="fa fa-facebook"></i>
                            </a>
                            <a href="#">
                                <i class="fa fa-twitter"></i>
                            </a>
                            <a href="#">
                                <i class="fa fa-google"></i>
                            </a>
                            <a href="#">
                                <i class="fa fa-pinterest"></i>
                            </a>
                        </div>
                    </div>
                </div>
                <!-- .employee  -->
                <div class="col-sm-6 col-md-3 bottom-xs-pad-20">
                    <div class="team-item dark-bg">
                        <div class="image">
                            <!-- Image -->
                            <img src="<?php echo get_template_directory_uri(); ?>/img/sections/team/2.jpg" alt="" title="" width="270" height="270" />
                        </div>
                        <div class="description">
                            <!-- Name -->
                            <h4 class="name">Simo Kruyt</h4>
                            <!-- Designation -->
                            <div class="role">Construction Manager</div>
                            <!-- Text -->
                            <p>The standard chunk of Lorem Ipsum used since the 1500s is reproduced below for those
                                intereste.</p>
                        </div>
                        <div class="social-icon">
                            <!-- Social Icons -->
                            <a href="#">
                                <i class="fa fa-facebook"></i>
                            </a>
                            <a href="#">
                                <i class="fa fa-twitter"></i>
                            </a>
                            <a href="#">
                                <i class="fa fa-google"></i>
                            </a>
                            <a href="#">
                                <i class="fa fa-pinterest"></i>
                            </a>
                        </div>
                    </div>
                </div>
                <!-- .employee -->
                <div class="col-sm-6 col-md-3 bottom-xs-pad-20">
                    <div class="team-item dark-bg">
                        <div class="image">
                            <!-- Image -->
                            <img src="<?php echo get_template_directory_uri(); ?>/img/sections/team/3.jpg" alt="" title="" width="270" height="270" />
                        </div>
                        <div class="description">
                            <!-- Name -->
                            <h4 class="name">Jorge Canaveral</h4>
                            <!-- Designation -->
                            <div class="role">Architect</div>
                            <!-- Text -->
                            <p>The standard chunk of Lorem Ipsum used since the 1500s is reproduced below for those
                                intereste.</p>
                        </div>
                        <div class="social-icon">
                            <!-- Social Icons -->
                            <a href="#">
                                <i class="fa fa-facebook"></i>
                            </a>
                            <a href="#">
                                <i class="fa fa-twitter"></i>
                            </a>
                            <a href="#">
                                <i class="fa fa-google"></i>
                            </a>
                            <a href="#">
                                <i class="fa fa-pinterest"></i>
                            </a>
                        </div>
                    </div>
                </div>
                <!-- .employee -->
                <div class="col-sm-6 col-md-3 bottom-xs-pad-20">
                    <div class="team-item dark-bg">
                        <div class="image">
                            <!-- Image -->
                            <img src="<?php echo get_template_directory_uri(); ?>/img/sections/team/4.jpg" alt="" title="" width="270" height="270" />
                        </div>
                        <div class="description">
                            <!-- Name -->
                            <h4 class="name">Aimee Devlin</h4>
                            <!-- Designation -->
                            <div class="role">Sales Manager</div>
                            <!-- Text -->
                            <p>The standard chunk of Lorem Ipsum used since the 1500s is reproduced below for those
                                intereste.</p>
                        </div>
                        <div class="social-icon">
                            <!-- Social Icons -->
                            <a href="#">
                                <i class="fa fa-facebook"></i>
                            </a>
                            <a href="#">
                                <i class="fa fa-twitter"></i>
                            </a>
                            <a href="#">
                                <i class="fa fa-google"></i>
                            </a>
                            <a href="#">
                                <i class="fa fa-pinterest"></i>
                            </a>
                        </div>
                    </div>
                </div>
                <!-- .employee -->
                <div class="col-sm-6 col-md-3 bottom-xs-pad-20">
                    <div class="team-item dark-bg">
                        <div class="image">
                            <!-- Image -->
                            <img src="<?php echo get_template_directory_uri(); ?>/img/sections/team/5.jpg" alt="" title="" width="270" height="270" />
                        </div>
                        <div class="description">
                            <!-- Name -->
                            <h4 class="name">Phillip Parisis</h4>
                            <!-- Designation -->
                            <div class="role">Resource Head</div>
                            <!-- Text -->
                            <p>The standard chunk of Lorem Ipsum used since the 1500s is reproduced below for those
                                intereste.</p>
                        </div>
                        <div class="social-icon">
                            <!-- Social Icons -->
                            <a href="#">
                                <i class="fa fa-facebook"></i>
                            </a>
                            <a href="#">
                                <i class="fa fa-twitter"></i>
                            </a>
                            <a href="#">
                                <i class="fa fa-google"></i>
                            </a>
                            <a href="#">
                                <i class="fa fa-pinterest"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- team -->
<section id="clients" class="page-section tb-pad-20 border-t">
    <div class="container">
        <div class="row">
            <div class="col-md-12 text-center">
                <div class="owl-carousel" data-pagination="false" data-items="6" data-autoplay="true" data-navigation="false">
                    <a href="#">
                        <img src="<?php echo get_template_directory_uri(); ?>/img/sections/clients/1.png" width="170" height="90" alt="" />
                        <img src="<?php echo get_template_directory_uri(); ?>/img/sections/clients/11.png" width="170" height="90" alt="" /></a>
                    <a href="#">
                        <img src="<?php echo get_template_directory_uri(); ?>/img/sections/clients/2.png" width="170" height="90" alt="" />
                        <img src="<?php echo get_template_directory_uri(); ?>/img/sections/clients/22.png" width="170" height="90" alt="" /></a>
                    <a href="#">
                        <img src="<?php echo get_template_directory_uri(); ?>/img/sections/clients/1.png" width="170" height="90" alt="" />
                        <img src="<?php echo get_template_directory_uri(); ?>/img/sections/clients/11.png" width="170" height="90" alt="" /></a>
                    <a href="#">
                        <img src="<?php echo get_template_directory_uri(); ?>/img/sections/clients/2.png" width="170" height="90" alt="" />
                        <img src="<?php echo get_template_directory_uri(); ?>/img/sections/clients/22.png" width="170" height="90" alt="" /></a>
                    <a href="#">
                        <img src="<?php echo get_template_directory_uri(); ?>/img/sections/clients/1.png" width="170" height="90" alt="" />
                        <img src="<?php echo get_template_directory_uri(); ?>/img/sections/clients/11.png" width="170" height="90" alt="" /></a>
                    <a href="#">
                        <img src="<?php echo get_template_directory_uri(); ?>/img/sections/clients/2.png" width="170" height="90" alt="" />
                        <img src="<?php echo get_template_directory_uri(); ?>/img/sections/clients/22.png" width="170" height="90" alt="" /></a>
                    <a href="#">
                        <img src="<?php echo get_template_directory_uri(); ?>/img/sections/clients/1.png" width="170" height="90" alt="" />
                        <img src="<?php echo get_template_directory_uri(); ?>/img/sections/clients/11.png" width="170" height="90" alt="" /></a>
                    <a href="#">
                        <img src="<?php echo get_template_directory_uri(); ?>/img/sections/clients/2.png" width="170" height="90" alt="" />
                        <img src="<?php echo get_template_directory_uri(); ?>/img/sections/clients/22.png" width="170" height="90" alt="" /></a>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- clients -->
<div id="get-quote" class="bg-color black text-center">
    <div class="container">
        <div class="row get-a-quote">
            <div class="col-md-12">Get A Free Quote / Need a Help ?
                <a class="black" href="#">Contact Us</a>
            </div>
        </div>
        <div class="move-top bg-color page-scroll">
            <a href="#page">
                <i class="glyphicon glyphicon-arrow-up"></i>
            </a>
        </div>
    </div>
</div>
<!-- request -->
<?php get_footer(); ?>