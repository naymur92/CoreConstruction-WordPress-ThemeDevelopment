<!-- 
  Template Name: project_page
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
          <li class="active">Projects</li>
        </ul>
      </div>
    </div>
  </div>
</div>
<!-- page-header -->
<section id="works" class="page-section">
  <div class="container portfolio-list">
    <div class="row mixed-grid pad general-section">
      <div id="options" class="col-md-12 filter-menu">
        <ul class="option-set works-filters nav black nav-pills">
          <li class="filter active" data-filter=".all">Show All</li>
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
          wp_reset_query();
          ?>
        </ul>
      </div>
      <div id="mix-container" class="portfolio-grid grid-list">
        <!-- Item 1 -->
        <?php
        // Loop start
        query_posts('post_type=featured_post');
        if (have_posts()) :
          while (have_posts()) : the_post();

            $taxonomies = get_the_terms(get_the_ID(), 'featured_tax');
        ?>
            <div class="grids mix all <?php foreach ($taxonomies as $tax) echo $tax->name . ' '; ?>">
              <div class="col-sm-4 col-md-4">
                <h3 class="title">
                  <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                </h3>
                <div class="description"><?php the_title(); ?></div>
                <?php the_content(); ?>
                <div class="project-meta">Created : HTML 5, CSS 3 / By : John Deo</div>
                <a href="<?php the_permalink(); ?>" class="btn btn-default">Project Details</a>
              </div>
              <div class="col-sm-8 col-md-8">
                <a href="portfolio-single.html" class="image">
                  <img src="<?php the_post_thumbnail_url(); ?>" width="790" height="440" alt="" />
                </a>
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
  </div>
</section>
<!-- works -->
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