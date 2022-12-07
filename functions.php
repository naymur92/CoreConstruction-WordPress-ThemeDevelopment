<?php
add_theme_support('post-thumbnails');
// add_theme_support('title-tag');

function metal_register_nav_menu()
{
  register_nav_menus(array(
    'primary_menu' => __('Primary Menu', 'text_domain'),
    'footer_menu'  => __('Footer Menu', 'text_domain'),
  ));
}
add_action('after_setup_theme', 'metal_register_nav_menu', 0);


// Main Menu
function main_menu($theme_location)
{
  if (($theme_location) && ($locations = get_nav_menu_locations()) && isset($locations[$theme_location])) {

    $menu = get_term($locations[$theme_location], 'nav_menu');
    $menu_items = wp_get_nav_menu_items($menu->term_id);

    $menu_list = '' . "\n";

    foreach ($menu_items as $menu_item) {
      if ($menu_item->menu_item_parent == 0) {
        $parent = $menu_item->ID;
        $menu_array = array();
        foreach ($menu_items as $submenu) {
          if ($submenu->menu_item_parent == $parent) {
            $bool = true;
            $menu_array[] = '<li><a href="' . $submenu->url . '">' . $submenu->title . '</a></li>';
          }
        }
        if ($bool == true && count($menu_array) > 0) {
          $menu_list .= '<li>' . "\n";
          $menu_list .= '<a href="' . $menu_item->url . '">' . $menu_item->title . '</a>' . "\n";
          $menu_list .= '<ul class="dropdown-menu">' . "\n";
          $menu_list .= implode("\n", $menu_array);
          $menu_list .= "\n" . '</ul>' . "\n";
          $menu_list .= '</li>' . "\n";
        } else {
          $menu_list .= '<li><a href="' . $menu_item->url . '">' . $menu_item->title . '</a></li>' . "\n";
        }
      }
    }
  } else {
    $menu_list = '<!-- no menu defined in location "' . $theme_location . '" -->';
  }
  echo $menu_list;
}


/**
 * Proper way to enqueue scripts and styles.
 */
function metal_theme_enqueue_scripts()
{
  wp_enqueue_style('font-awesome', get_template_directory_uri() . '/css/font-awesome.min.css');
  wp_enqueue_style('bootstrap', get_template_directory_uri() . '/css/bootstrap.min.css');
  wp_enqueue_style('hover-dropdown-menu', get_template_directory_uri() . '/css/hover-dropdown-menu.css');
  wp_enqueue_style('icons', get_template_directory_uri() . '/css/icons.css');
  wp_enqueue_style('revolution-slider', get_template_directory_uri() . '/css/revolution-slider.css');
  wp_enqueue_style('rs-plugin-setting', get_template_directory_uri() . '/rs-plugin/css/settings.css');
  wp_enqueue_style('animate', get_template_directory_uri() . '/css/animate.min.css');
  wp_enqueue_style('owl-carousel', get_template_directory_uri() . '/css/owl/owl.carousel.css');
  wp_enqueue_style('owl-theme', get_template_directory_uri() . '/css/owl/owl.theme.css');
  wp_enqueue_style('owl-transition', get_template_directory_uri() . '/css/owl/owl.transitions.css');
  wp_enqueue_style('pretty-photo', get_template_directory_uri() . '/css/prettyPhoto.css');
  wp_enqueue_style('main-style', get_template_directory_uri() . '/css/style.css');
  wp_enqueue_style('responsive', get_template_directory_uri() . '/css/responsive.css');
  wp_enqueue_style('color', get_template_directory_uri() . '/css/color.css');
  wp_enqueue_style('custom-css', get_template_directory_uri() . '/style.css');
  // wp_enqueue_style( 'style-name', get_stylesheet_uri() );

  // wp_enqueue_script( 'jquery', get_template_directory_uri() . '/js/jquery.min.js', array(), '1.11.1', true );
  wp_enqueue_script('bootstrap', get_template_directory_uri() . '/js/bootstrap.min.js', array(), '3.3.6', true);
  wp_enqueue_script('hover-dropdown-menu', get_template_directory_uri() . '/js/hover-dropdown-menu.js', array(), '1.0', true);
  wp_enqueue_script('dropdown-menu-adon', get_template_directory_uri() . '/js/jquery.hover-dropdown-menu-addon.js', array(), '1.0', true);
  wp_enqueue_script('jq-easing', get_template_directory_uri() . '/js/jquery.easing.1.3.js', array(), '1.3', true);
  wp_enqueue_script('jq-sticky', get_template_directory_uri() . '/js/jquery.sticky.js', array(), '1.0', true);
  wp_enqueue_script('bt-validator', get_template_directory_uri() . '/js/bootstrapValidator.min.js', array(), '0.5.2', true);
  wp_enqueue_script('jq-themepunch-tools', get_template_directory_uri() . '/rs-plugin/js/jquery.themepunch.tools.min.js', array(), '1.0', true);
  wp_enqueue_script('jq-themepunch-revolution', get_template_directory_uri() . '/rs-plugin/js/jquery.themepunch.revolution.min.js', array(), '4.6.4', true);
  wp_enqueue_script('revolution-custom', get_template_directory_uri() . '/js/revolution-custom.js', array(), '1.0', true);
  wp_enqueue_script('jq-mixitup', get_template_directory_uri() . '/js/jquery.mixitup.min.js', array(), '2.1.7', true);
  wp_enqueue_script('jq-appear', get_template_directory_uri() . '/js/jquery.appear.js', array(), '1.0', true);
  wp_enqueue_script('effect', get_template_directory_uri() . '/js/effect.js', array(), '1.0', true);
  wp_enqueue_script('owl-caroulel', get_template_directory_uri() . '/js/owl.carousel.min.js', array(), '1.0', true);
  wp_enqueue_script('pretty-photo', get_template_directory_uri() . '/js/jquery.prettyPhoto.js', array(), '3.1.6', true);
  wp_enqueue_script('parallax', get_template_directory_uri() . '/js/jquery.parallax-1.1.3.js', array(), '1.1.3', true);
  wp_enqueue_script('counter', get_template_directory_uri() . '/js/jquery.countTo.js', array(), '1.0', true);
  wp_enqueue_script('tweet-carousel', get_template_directory_uri() . '/js/tweet/carousel.js', array(), '1.0', true);
  wp_enqueue_script('tweet-script', get_template_directory_uri() . '/js/tweet/scripts.js', array(), '1.0', true);
  wp_enqueue_script('tweet-tweetie', get_template_directory_uri() . '/js/tweet/tweetie.min.js', array(), '1.0', true);
  wp_enqueue_script('yt-player', get_template_directory_uri() . '/js/jquery.mb.YTPlayer.js', array(), '1.0', true);
  wp_enqueue_script('custom-js', get_template_directory_uri() . '/js/custom.js', array(), '1.0', true);
}
add_action('wp_enqueue_scripts', 'metal_theme_enqueue_scripts');


// Add cutom post type for main slider
function main_slider_post_type()
{
  $args = array(
    'public'    => true,
    'label'     => __('Main Slider', 'metal'),
    'supports'  => array('title', 'thumbnail'),
  );
  register_post_type('main_slider', $args);
}
add_action('init', 'main_slider_post_type');
flush_rewrite_rules();


// Add cutom post type for Services
function services_post_type()
{
  $args = array(
    'public'    => true,
    'label'     => __('Services', 'metal'),
    'supports'  => array('title', 'editor', 'thumbnail'),
  );
  register_post_type('service_post', $args);
}
add_action('init', 'services_post_type');
flush_rewrite_rules();


// Add cutom post type for Featured Works
function featured_post_type()
{
  $args = array(
    'public'    => true,
    'label'     => __('Featured Works', 'metal'),
    'supports'  => array('title', 'editor', 'thumbnail', 'featured_tax'),
  );
  register_post_type('featured_post', $args);
}
add_action('init', 'featured_post_type');
flush_rewrite_rules();


/**
 * Register a public 'Featured Category' taxonomy for post type 'featured_post'.
 *
 * @see register_post_type() for registering post types.
 */
function featured_post_taxonomy()
{
  $args = array(
    'label'        => __('Featured Category', 'metal'),
    'public'       => true,
    'rewrite'      => true,
    'hierarchical' => false
  );

  register_taxonomy('featured_tax', 'featured_post', $args);
}
add_action('init', 'featured_post_taxonomy', 0);


// Add cutom post type for Team Members
function team_member_type()
{
  $args = array(
    'public'    => true,
    'label'     => __('Team Members', 'metal'),
    'supports'  => array('title', 'editor', 'thumbnail'),
  );
  register_post_type('team_member', $args);
}
add_action('init', 'team_member_type');
flush_rewrite_rules();
