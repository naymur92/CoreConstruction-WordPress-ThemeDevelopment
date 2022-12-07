<?php get_header(); ?>
<section class="page-section">
  <div class="container">
    <div class="row">
      <div class="col-sm-12 col-md-9">
        <?php
        if (have_posts()) :
          while (have_posts()) : the_post();
        ?>
            <div class="row">
              <div class="col-sm-12">
                <h2 class="post-title"><?php the_title() ?></h2>
                <hr>
                <img src="<?php the_post_thumbnail_url() ?>" alt="" title="">
                <div class="post-content" style="margin-top: 40px;">
                  <?php the_content(); ?>
                </div>
                <div class="post-meta">
                  <!-- Author  -->
                  <span class="author">
                    <i class="fa fa-user"></i> <?php the_author(); ?></span>
                  <!-- Meta Date -->

                  <span class="time">
                    <i class="fa fa-calendar"></i> <?php the_time("d.m.Y") ?></span>
                  <!-- Comments -->

                  <span class="category">
                    <i class="fa fa-heart"></i>
                    <?php
                    // get the categories with comma
                    $categories = get_the_category();
                    $category_list = join(', ', wp_list_pluck($categories, 'name'));

                    echo wp_kses_post($category_list);
                    ?>
                  </span>
                  <!-- Category -->

                  <span class="comments pull-right">
                    <i class="fa fa-comments"></i> <?php comments_number("No Comment", "One Comment", "% Comments") ?></span>
                </div>
              </div>
            </div>
        <?php
          endwhile;
        endif;
        ?>
        <hr />
        <div class="row">
          <div class="col-md-12 top-pad-20">
            <h4>Comments</h4>
            <!-- Loop start -->
            <?php
            //Get only the approved comments
            $args = array(
              // 'status' => 'approve'
            );

            // The comment Query
            $comments_query = new WP_Comment_Query;
            $comments = $comments_query->query($args);

            // Comment Loop
            if ($comments) {
              foreach ($comments as $comment) {
            ?>
                <div class="comment-item">
                  <div class="pull-left author-img">
                    <img class="img-circle" src="<?php echo get_avatar_url(get_the_author_meta('ID'), $comment->the_author_ID); ?>" width="70" height="70" alt="" title="" />
                  </div>
                  <?php echo comment_text(); ?>
                  <div class="post-meta">
                    <!-- Author  -->
                    <span class="author">
                      <i class="fa fa-user"></i> <?php comment_author(); ?></span>
                    <!-- Meta Date -->

                    <span class="time">
                      <i class="fa fa-calendar"></i> <?php comment_time("d.m.Y"); ?></span>
                    <!-- Category -->

                    <span class="comments pull-right">
                      <i class="fa fa-comments"></i>
                      <a href="#">reply</a></span>
                  </div>
                </div>
            <?php
              }
            } else {
              echo 'No comments found.';
            }
            ?>
            <!-- Loop end -->
          </div>
        </div>

        <h4>Leave a Reaply</h4>
        <div class="row">
          <form role="form" name="contactform" method="post">
            <!-- Field 1 -->
            <div class="col-md-6">
              <div class="input-text form-group">
                <input type="text" name="contact_name" class="input-name form-control" placeholder="Full Name" />
              </div>
              <!-- Field 2 -->
              <div class="input-email form-group">
                <input type="email" name="contact_email" class="input-email form-control" placeholder="Email" />
              </div>
            </div>
            <div class="col-md-8">
              <!-- Field 4 -->
              <div class="textarea-message form-group">
                <textarea name="contact_message" class="textarea-message form-control" placeholder="Message" rows="4"></textarea>
              </div>
              <!-- Button -->
              <button class="btn btn-default" type="submit">Send Now
                <i class="icon-paper-plane"></i></button>
            </div>
          </form>
        </div>
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