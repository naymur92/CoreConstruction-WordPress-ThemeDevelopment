<!-- 
  Template Name: service_page
 -->
<?php get_header(); ?>
<div class="page-header page-title-left page-title-pattern">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <h1 class="title">Services</h1>
        <!-- <h5>A Short Page title</h5> -->
        <ul class="breadcrumb">
          <li>
            <a href="<?php echo get_home_url(); ?>">Home</a>
          </li>
          <li>
            <a href="#"><?php echo ucfirst($pagename); ?></a>
          </li>
          <li class="active"><?php echo ucfirst($pagename); ?></li>
        </ul>
      </div>
    </div>
  </div>
</div>
<!-- page-header -->
<section id="services" class="page-section">
  <div class="container">
    <div class="row">
      <?php
        // Start Loop
        if(have_posts()):
      ?>
      <div class="col-sm-12 col-md-12 col-xs-12" style="margin-top: 20px;">
        <p class="text-center">
          <a href="<?php the_post_thumbnail_url(); ?>" class="opacity" data-rel="prettyPhoto[portfolio]">
            <img src="<?php the_post_thumbnail_url(); ?>" width="420" height="280" alt="" />
          </a>
        </p>
        <h3>
          <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
        </h3>
        <?php the_content(); ?>
      </div>
      <?php
        endif;
        // End Loop
      ?>
  </div>
</section>
<!-- Services -->
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