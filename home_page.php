<!-- 
  Template Name: myhome
 -->
<?php get_header(); ?>
<section class="slider border-bottom line tp-banner-fullscreen-container">
  <div class="tp-banner">
    <ul>
      <?php
      // Loop start
      query_posts('post_type=main_slider');
      if (have_posts()) :
        while (have_posts()) : the_post();
      ?>
          <li data-delay="7000" data-transition="fade" data-slotamount="7" data-masterspeed="2000">
            <div class="container">
              <h2 class="tp-caption tp-resizeme lft skewtotop title bold white" data-x="02" data-y="181" data-speed="1000" data-start="1700" data-easing="Power4.easeOut" data-endspeed="500" data-endeasing="Power1.easeIn">
                <strong><?php echo current(explode('||', get_the_title())); ?></strong>
              </h2>
              <h2 class="tp-caption tp-resizeme lft skewtotop title bold white" data-x="02" data-y="241" data-speed="1200" data-start="1900" data-easing="Power4.easeOut" data-endspeed="500" data-endeasing="Power1.easeIn">
                <strong><?php echo end(explode('||', get_the_title())); ?></strong>
              </h2>
            </div>
            <img src="<?php the_post_thumbnail_url(); ?>" alt="" data-bgfit="cover" data-bgposition="center top" data-bgrepeat="no-repeat" />
          </li>
      <?php
        endwhile;
      endif;
      wp_reset_postdata();
      // Loop End
      ?>
    </ul>
    <div class="tp-bannertimer"></div>
  </div>
</section>
<!-- slider -->
<section id="features" class="page-section bottom-pad-0 transparent slider-block" data-animation="fadeInUp">
  <div class="container">
    <div class="row special-feature">
      <!-- Special Feature Box 1 -->
      <div class="col-md-3" data-animation="fadeInLeft">
        <div class="s-feature-box text-center">
          <div class="mask-top">
            <!-- Icon -->
            <i class="icon-magic-wand"></i>
            <!-- Title -->
            <h4>Creative</h4>
          </div>
          <div class="mask-bottom">
            <!-- Icon -->
            <i class="icon-magic-wand"></i>
            <!-- Title -->
            <h4>Creative</h4>
            <!-- Text -->
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
          </div>
        </div>
      </div>
      <!-- Special Feature Box 2 -->
      <div class="col-md-3" data-animation="fadeInUp">
        <div class="s-feature-box text-center">
          <div class="mask-top">
            <!-- Icon -->
            <i class="icon-texture"></i>
            <!-- Title -->
            <h4>Technology</h4>
          </div>
          <div class="mask-bottom">
            <!-- Icon -->
            <i class="icon-texture"></i>
            <!-- Title -->
            <h4>Technology</h4>
            <!-- Text -->
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
          </div>
        </div>
      </div>
      <!-- Special Feature Box 3 -->
      <div class="col-md-3" data-animation="fadeInRight">
        <div class="s-feature-box text-center">
          <div class="mask-top">
            <!-- Icon -->
            <i class="icon-tree3"></i>
            <!-- Title -->
            <h4>Go Green</h4>
          </div>
          <div class="mask-bottom">
            <!-- Icon -->
            <i class="icon-tree3"></i>
            <!-- Title -->
            <h4>Go Green</h4>
            <!-- Text -->
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
          </div>
        </div>
      </div>
      <!-- Special Feature Box 3 -->
      <div class="col-md-3" data-animation="fadeInUp">
        <div class="s-feature-box text-center">
          <div class="mask-top">
            <!-- Icon -->
            <i class="icon-group-outline"></i>
            <!-- Title -->
            <h4>Team Work</h4>
          </div>
          <div class="mask-bottom">
            <!-- Icon -->
            <i class=" icon-group-outline"></i>
            <!-- Title -->
            <h4>Team Work</h4>
            <!-- Text -->
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- features -->
<section id="services" class="page-section">
  <div class="container">
    <div class="row">
      <div class="owl-carousel navigation-1 opacity text-left" data-pagination="false" data-items="3" data-autoplay="true" data-navigation="true">
        <?php
        // Start Loop
        query_posts('post_type=service_post');
        if (have_posts()) :
          while (have_posts()) : the_post();
        ?>
            <div class="col-sm-4 col-md-4 col-xs-12" data-animation="fadeInLeft">
              <p class="text-center">
                <a href="<?php the_post_thumbnail_url(); ?>" class="opacity" data-rel="prettyPhoto[portfolio]">
                  <img src="<?php the_post_thumbnail_url(); ?>" width="420" height="280" alt="" />
                </a>
              </p>
              <h3>
                <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
              </h3>
              <?php the_excerpt(); ?>
              <a href="<?php the_permalink(); ?>" class="btn btn-default">Read More</a>
            </div>
        <?php
          endwhile;
        endif;
        // End Loop
        wp_reset_postdata();
        ?>
      </div>
    </div>
  </div>
</section>
<!-- Services -->
<section id="works" class="page-section">
  <div class="container general-section">
    <div class="section-heading">
      <div class="section-title text-left">
        <!-- Title -->
        <h2 class="title">Featured Works</h2>
      </div>
      <div class="section-title-description">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum nec
        odio ipsum. Suspendisse cursus malesuada facilisis.Lorem ipsum dolor sit amet, consectetur adipiscing elit.
        Vestibulum nec odio ipsum. Suspendisse cursus malesuada facilisis.</div>
    </div>
    <div id="options" class="filter-menu">
      <ul class="option-set nav nav-pills">
        <li class="filter active" data-filter="all">Show All</li>
        <?php
        $args = array(
          'taxonomy'  => 'featured_tax',
          'orderby' => 'name',
        );
        $categories = get_terms($args);
        foreach ($categories as $category) {
        ?>
          <li class="filter" data-filter=".<?php echo $category->name; ?>"><?php echo $category->name; ?></li>
        <?php
        }
        ?>
      </ul>
    </div>
    <!-- filter -->
  </div>
  <div class="container-fluid white general-section">
    <div id="mix-container" class="portfolio-grid">
      <?php
      // Loop start
      query_posts('post_type=featured_post');
      if (have_posts()) :
        while (have_posts()) : the_post();

          $taxonomies = get_the_terms(get_the_ID(), 'featured_tax');
      ?>
          <div class="grids col-xs-12 col-sm-4 col-md-3 mix all <?php foreach ($taxonomies as $tax) echo $tax->name . ' '; ?>">
            <div class="grid">
              <img src="<?php the_post_thumbnail_url(); ?>" width="400" height="273" alt="Recent Work" class="img-responsive" />
              <div class="figcaption">
                <!-- Image Popup-->
                <a href="<?php the_post_thumbnail_url(); ?>" data-rel="prettyPhoto[portfolio]">
                  <i class="fa fa-search"></i>
                </a>
                <a href="<?php the_permalink(); ?>">
                  <i class="fa fa-link"></i>
                </a>
              </div>
              <div class="caption-block">
                <h4><?php the_title(); ?></h4>
                <?php the_excerpt(); ?>
              </div>
            </div>
          </div>
      <?php
        endwhile;
      endif;
      wp_reset_postdata();
      // loop end
      ?>
    </div>
    <!-- Mix Container -->
  </div>
</section>
<!-- works -->
<section id="team" class="page-section light-bg border-tb">
  <div class="container">
    <div class="section-heading">
      <div class="section-title text-left">
        <!-- Title -->
        <h2 class="title">Meet Our Team</h2>
      </div>
      <div class="section-title-description">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum nec
        odio ipsum. Suspendisse cursus malesuada facilisis.Lorem ipsum dolor sit amet, consectetur adipiscing elit.
        Vestibulum nec odio ipsum. Suspendisse cursus malesuada facilisis.</div>
    </div>
    <div class="row text-center">
      <div class="owl-carousel navigation-1" data-pagination="false" data-items="4" data-autoplay="true" data-navigation="true">
        <?php
        query_posts('post_type=team_member');
        if (have_posts()) :
          while (have_posts()) : the_post();
        ?>
            <div class="col-sm-6 col-md-3 bottom-xs-pad-20">
              <div class="team-item dark-bg">
                <div class="image">
                  <!-- Image -->
                  <img src="<?php echo get_the_post_thumbnail_url(); ?>" alt="" title="" width="270" height="270" />
                </div>
                <div class="description">
                  <!-- Name -->
                  <h4 class="name"><?php echo current(explode("||", get_the_title())); ?></h4>
                  <!-- Designation -->
                  <div class="role"><?php echo end(explode("||", get_the_title())); ?></div>
                  <!-- Text -->
                  <?php the_content(); ?>
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
        <?php
          endwhile;
        endif;
        wp_reset_query();
        ?>
        <!-- .employee  -->
      </div>
    </div>
  </div>
</section>
<!-- team -->
<section id="fun-factor" class="page-section">
  <div class="container">
    <div class="row text-right fact-counter">
      <div class="col-sm-6 col-md-3 bottom-xs-pad-30 fun-icon">
        <!-- Icon -->
        <div class="count-number text-color" data-count="92">
          <span class="counter"></span>
        </div>
        <!-- Title -->
        <h3>Project
          <span>Delivered</span>
        </h3>
      </div>
      <div class="col-sm-6 col-md-3 bottom-xs-pad-30">
        <!-- Icon -->
        <div class="count-number text-color" data-count="83">
          <span class="counter"></span>
        </div>
        <!-- Title -->
        <h3>Happy
          <span>Clients</span>
        </h3>
      </div>
      <div class="col-sm-6 col-md-3 bottom-xs-pad-30">
        <!-- Icon -->
        <div class="count-number text-color" data-count="67">
          <span class="counter"></span>
        </div>
        <!-- Title -->
        <h3>Winning
          <span>Awards</span>
        </h3>
      </div>
      <div class="col-sm-6 col-md-3 bottom-xs-pad-30">
        <!-- Icon -->
        <div class="count-number text-color" data-count="36">
          <span class="counter"></span>
        </div>
        <!-- Title -->
        <h3>Country
          <span>Covered</span>
        </h3>
      </div>
    </div>
  </div>
</section>
<!-- fun-factor -->
<section id="latest-news" class="page-section light-bg border-tb">
  <div class="container">
    <div class="section-heading">
      <div class="section-title text-left">
        <!-- Title -->
        <h2 class="title">Our Latest News</h2>
      </div>
      <div class="section-title-description">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum nec
        odio ipsum. Suspendisse cursus malesuada facilisis.Lorem ipsum dolor sit amet, consectetur adipiscing elit.
        Vestibulum nec odio ipsum. Suspendisse cursus malesuada facilisis.</div>
    </div>
    <div class="row">
      <div class="owl-carousel navigation-1 opacity text-left" data-pagination="false" data-items="3" data-autoplay="true" data-navigation="true">
        <?php
        // Start Loop
        query_posts('post_type=service_post');
        if (have_posts()) :
          while (have_posts()) : the_post();
        ?>
            <div class="col-sm-4 col-md-4 col-xs-12">
              <p class="text-center">
                <a href="<?php echo get_the_post_thumbnail_url(); ?>" class="opacity" data-rel="prettyPhoto[portfolio]">
                  <img src="<?php echo get_the_post_thumbnail_url(); ?>" width="420" height="280" alt="" />
                </a>
              </p>
              <h3>
                <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
              </h3>
              <?php the_excerpt(); ?>
              <a href="<?php the_permalink(); ?>" class="read-more">Read More</a>
              <div class="right-post-meta">
                <span class="meta-like">
                  <i class="icon-heart"></i> 5</span>
                <span class="meta-comment">
                  <i class="icon-comment"></i> 12</span>
              </div>
            </div>
        <?php
          endwhile;
        endif;
        wp_reset_postdata();
        ?>
      </div>
    </div>
  </div>
</section>
<!-- news -->
<section id="testimonials" class="page-section">
  <div class="container">
    <div class="row">
      <div class="col-sm-12 col-md-12 testimonials">
        <div class="owl-carousel pagination-2 text-center color-switch" data-pagination="true" data-autoplay="true" data-navigation="false" data-singleitem="true">
          <div class="item">
            <div class="quote">
              <p>&quot;The standard chunk of Lorem Ipsum used since the 1500s is reproduced below for those
                intereste. The standard chunk of Lorem Ipsum used since the 1500s is reproduced below for those
                intereste.&quot;</p>
            </div>
            <div class="client-details text-center left-align">
              <div class="client-image">
                <!-- Image -->
                <img class="img-circle" src="<?php echo get_template_directory_uri(); ?>/img/sections/testimonials/1.jpg" width="80" height="80" alt="" />
              </div>
              <div class="client-details">
                <!-- Name -->
                <strong class="text-color">John Doe</strong>
                <!-- Company -->

                <span>Designer, zozothemes</span>
              </div>
            </div>
          </div>
          <div class="item">
            <div class="quote">
              <p>&quot;The standard chunk of Lorem Ipsum used since the 1500s is reproduced below for those
                intereste. The standard chunk of Lorem Ipsum used since the 1500s is reproduced below for those
                intereste.&quot;</p>
            </div>
            <div class="client-details text-center left-align">
              <div class="client-image">
                <!-- Image -->
                <img class="img-circle" src="<?php echo get_template_directory_uri(); ?>/img/sections/testimonials/1.jpg" width="80" height="80" alt="" />
              </div>
              <div class="client-details">
                <!-- Name -->
                <strong class="text-color">John Doe</strong>
                <!-- Company -->

                <span>Designer, zozothemes</span>
              </div>
            </div>
          </div>
          <div class="item">
            <div class="quote">
              <p>&quot;The standard chunk of Lorem Ipsum used since the 1500s is reproduced below for those
                intereste. The standard chunk of Lorem Ipsum used since the 1500s is reproduced below for those
                intereste.&quot;</p>
            </div>
            <div class="client-details text-center left-align">
              <div class="client-image">
                <!-- Image -->
                <img class="img-circle" src="<?php echo get_template_directory_uri(); ?>/img/sections/testimonials/1.jpg" width="80" height="80" alt="" />
              </div>
              <div class="client-details">
                <!-- Name -->
                <strong class="text-color">John Doe</strong>
                <!-- Company -->

                <span>Designer, zozothemes</span>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- testimonials -->
<section id="clients" class="page-section tb-pad-20 light-bg border-tb">
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