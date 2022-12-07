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
      <div class="col-sm-12 col-md-9 post-list">
        <?php
        if (have_posts()) :
          while (have_posts()) : the_post();
        ?>
            <div class="post-item">
              <div class="post-image pull-left">
                <img src="<?php the_post_thumbnail_url() ?>" width="320" height="282" alt="" title="" />
              </div>
              <h2 class="post-title">
                <a href="<?php the_permalink() ?>"><?php the_title() ?></a>
              </h2>
              <div class="post-content"><?php the_excerpt(); ?></div>
              <div class="post-meta">
                <!-- Author  -->

                <span class="author">
                  <i class="fa fa-user"></i> <?php the_author(); ?></span>
                <!-- Meta Date -->

                <span class="time">
                  <i class="fa fa-calendar"></i> <?php the_time('d.m.Y') ?></span>
                <!-- Category -->

                <span class="category pull-right">
                  <i class="fa fa-heart"></i>
                  <?php
                  // get the categories with comma
                  $categories = get_the_category();
                  $category_list = join(', ', wp_list_pluck($categories, 'name'));

                  echo wp_kses_post($category_list);
                  ?>
                </span>
              </div>
            </div>
        <?php
          endwhile;
        endif;
        ?>
        <!-- post -->
      </div>
      <?php get_sidebar('blog'); ?>
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