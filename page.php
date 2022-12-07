<?php get_header(); ?>
<div class="page-header page-title-left page-title-pattern">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <h1 class="title"><?php wp_title( '', true, 'right' ); ?></h1>
        <!-- <h5>A Short Page title</h5> -->
        <ul class="breadcrumb">
          <li>
            <a href="<?php home_url(); ?>">Home</a>
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
<section class="page-section">
  <div class="container">
    <div class="row">
      <div class="col-sm-12 col-md-12 post-list">
        <?php
          if(have_posts()):
            while(have_posts()): the_post();
        ?>
        <div class="post-item">
          <?php the_content(); ?>
        </div>
        <?php
            endwhile;
          endif;
        ?>
        <!-- post -->
      </div>
    </div>
  </div>
</section>
<!-- page-section -->
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