<div class="sidebar col-sm-12 col-md-3">
  <div class="widget">
    <div class="widget-title">
      <h3 class="title">Category</h3>
    </div>
    <div id="MainMenu2">
      <div class="list-group panel">
        <div class="collapse in" id="demo3">          
          <?php
          $args = array(
            'orderby' => 'name',
            'parent' => 0,
          );
          $categories = get_categories($args);
         
          $first = true;
          foreach ($categories as $category) {
            if ($no_children > 0) {
              echo '<a href="#subMenu2" class="list-group-item" data-toggle="collapse" data-parent="#SubMenu2">' . $category->cat_name . '</a>';
              $first = false;
            } else {
              echo '<a href="'. $category->category_link .'" class="list-group-item">' . $category->cat_name . '</a>';
            }
            $theid = $category->term_id;
            $children = $wpdb->get_results("SELECT term_id FROM $wpdb->term_taxonomy WHERE parent=$theid");
            $no_children = count($children);
            if ($no_children > 0) {
              echo '<div class="collapse in list-group-submenu" id="SubMenu2">';
              $args2 = array(
                'orderby' => 'name',
                // 'child_of'      => $the_id,
                'parent' => 2
              );
              $args2["parent"] = $category->term_id;
              $categories2 = get_categories($args2);
              foreach ($categories2 as $category2) {

                echo '<a href="'. $category->category_link .'" class="list-group-item">' . $category2->cat_name . '</a>';
              }
              echo '</div>';
            } else {
              echo '';
            }
          }
          ?>
        </div>
      </div>
    </div>
    <!-- category-list -->
  </div>
  <div class="widget">
    <div class="widget-title">
      <h3 class="title">Recent Posts</h3>
    </div>
    <ul class="latest-posts">
      <?php
        query_posts('posts_per_page=3');
        if(have_posts()):
          while(have_posts()): the_post();
      ?>
      <li>
        <div class="post-thumb">
          <img class="img-rounded" src="<?php echo get_the_post_thumbnail_url(); ?>" alt="" title="" width="84" height="84" />
        </div>
        <div class="post-details">
          <div class="description">
            <a href="#">
              <!-- Text -->
              <?php the_title(); ?>
            </a>
          </div>
          <div class="meta">
            <!-- Meta Date -->

            <span class="time">
              <i class="fa fa-calendar"></i> <?php the_time('d.m.Y'); ?></span>
          </div>
        </div>
      </li>
      <?php
          endwhile;
        endif;
        wp_reset_postdata();
      ?>
    </ul>
  </div>
  <div class="widget">
    <div class="widget-title">
      <h3 class="title">Gallery</h3>
    </div>
    <div class="owl-carousel navigation-4" data-pagination="false" data-items="1" data-autoplay="true" data-navigation="true">
      <img src="<?php echo get_template_directory_uri(); ?>/img/sections/blog/1.jpg" width="270" height="270" alt="" />
      <img src="<?php echo get_template_directory_uri(); ?>/img/sections/blog/2.jpg" width="270" height="270" alt="" />
    </div>
  </div>
  <div class="widget">
    <div class="widget-title">
      <h3 class="title">Tags</h3>
    </div>
    <ul class="tags">
      <li>
        <a href="#">Corporate</a>
      </li>
      <li>
        <a href="#">business</a>
      </li>
      <li>
        <a href="#">agency</a>
      </li>
      <li>
        <a href="#">medical</a>
      </li>
      <li>
        <a href="#">studio</a>
      </li>
      <li>
        <a href="#">university</a>
      </li>
      <li>
        <a href="#">Governments</a>
      </li>
      <li>
        <a href="#">charity</a>
      </li>
      <li>
        <a href="#">realestate</a>
      </li>
      <li>
        <a href="#">app</a>
      </li>
      <li>
        <a href="#">restaurant</a>
      </li>
      <li>
        <a href="#">fitness</a>
      </li>
      <li>
        <a href="#">general</a>
      </li>
      <li>
        <a href="#">construction</a>
      </li>
      <li>
        <a href="#">School</a>
      </li>
      <li>
        <a href="#">healthcare</a>
      </li>
    </ul>
  </div>
  <div class="widget my-feeds">
    <div class="widget-title">
      <h3 class="title">Instagram Photos</h3>
    </div>
    <div class="social-feed instagram-feed"></div>
  </div>
</div>