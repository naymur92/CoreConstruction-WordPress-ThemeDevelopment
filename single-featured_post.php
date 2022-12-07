<?php get_header(); ?>
<div class="clearfix"></div>
<?php
// if (have_posts()) :
$tax_list = [];
$taxonomies = get_the_terms(get_the_ID(), 'featured_tax');
foreach ($taxonomies as $tax) array_push($tax_list, $tax->name);
?>
<section id="portfolio-header" class="no-pad">
  <div class="container">
    <div class="section-heading">
      <div class="row"></div>
      <a href="<?php the_permalink(); ?>" class="image">
        <img src="<?php the_post_thumbnail_url(); ?>" width="790" height="440" alt="" />
      </a>
    </div>
  </div>
</section>
<section id="works" class="page-section">
  <div class="container">
    <div class="section-title text-left">
      <!-- Heading -->
      <h2 class="title"><?php the_title(); ?></h2>
    </div>
    <div class="row">
      <div class="col-md-4">
        <p>
          <b>Category:</b>
          <span>Architectural Design, General Construction</span>
        </p>
        <p>
          <b>Client:</b>
          <span>John Deo</span>
        </p>
        <p>
          <b>Estimation:</b>
          <span>$ 2,00,000</span>
        </p>
        <p>
          <b>Duration:</b>
          <span>3 Months</span>
        </p>
        <p>
          <b>Tags:</b>
          <span><?php echo implode(", ", $tax_list) ?></span>
        </p>
        <div class="icon-3 static-color-icons hover-color">
          <a href="#">
            <span class="pe-so-facebook"></span>
          </a>
          <a href="#">
            <span class="pe-so-twitter"></span>
          </a>
          <a href="#">
            <span class="pe-so-google-plus"></span>
          </a>
          <a href="#">
            <span class="pe-so-pinterest"></span>
          </a>
          <a href="#">
            <span class="pe-so-linkedin"></span>
          </a>
        </div>
      </div>
      <div class="col-md-4">
        <?php the_content(); ?>
      </div>
      <div class="col-md-4">
        <?php the_excerpt(); ?>
        <a href="#" class="btn btn-default">Contact Us</a>
      </div>
    </div>
  </div>
</section>
<?php
// endif;
?>
<!-- works -->
<section id="related-projects" class="page-section light-bg border-tb">
  <div class="container">
    <div class="section-title">
      <!-- Heading -->
      <h2 class="title">Related Projects</h2>
    </div>
    <div class="row">
      <div class="col-md-12 portfolio-grid text-center">
        <div class="owl-carousel pagination-1 light-switch" data-pagination="true" data-items="4" data-autoplay="true" data-navigation="false">
          <?php
          // Start Loop
          $sql = new WP_Query(array(
            'post_type' =>  'featured_post',
            'featured_tax'  => $tax_list,
          ));
          if ($sql->have_posts()) :
            while ($sql->have_posts()) : $sql->the_post();
          ?>
              <div class="grids col-xs-12 col-sm-4 col-md-3">
                <div class="grid">
                  <img src="<?php echo the_post_thumbnail_url(); ?>" width="400" height="273" alt="Recent Work" class="img-responsive" />
                  <div class="figcaption">
                    <h4>Title here</h4>
                    <!-- Image Popup-->
                    <a href="<?php echo the_post_thumbnail_url(); ?>" data-rel="prettyPhoto[portfolio]">
                      <i class="fa fa-search"></i>
                    </a>
                    <a href="<?php the_permalink(); ?>">
                      <i class="fa fa-link"></i>
                    </a>
                  </div>
                </div>
              </div>
          <?php
            endwhile;
          endif;
          wp_reset_query()
          // End loop
          ?>
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