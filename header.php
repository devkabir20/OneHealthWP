<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <meta http-equiv="X-UA-Compatible" content="ie=edge" />

    <title> <?php bloginfo('name')?> <?php echo('- '); wp_title();?> <?php if(is_front_page()){echo('- ');bloginfo('description');}?></title>



    <link rel="stylesheet" href="<?php echo get_template_directory_uri()?>/assets/css/maicons.css" />

    <link rel="stylesheet" href="<?php echo get_template_directory_uri()?>/assets/css/bootstrap.css" />

    <link
      rel="stylesheet"
      href="<?php echo get_template_directory_uri()?>/assets/vendor/owl-carousel/css/owl.carousel.css"
    />

    <link rel="stylesheet" href="<?php echo get_template_directory_uri()?>/assets/vendor/animate/animate.css" />

    <link rel="stylesheet" href="<?php echo get_template_directory_uri()?>/assets/css/theme.css" />
        <link rel="stylesheet" href="<?php echo get_template_directory_uri()?>/style.css" />

    <?php wp_head();?>
  </head>
  <body <?php body_class();?>>
    <!-- Back to top button -->
    <div class="back-to-top"></div>

    <header>
      <div class="topbar">
        <div class="container">
          <div class="row">
            <div class="col-sm-8 text-sm">
              <div class="site-info">
                <a href="#"
                  ><span class="mai-call text-primary"></span> +00 123 4455
                  6666</a
                >
                <span class="divider">|</span>
                <a href="#"
                  ><span class="mai-mail text-primary"></span>
                  mail@example.com</a
                >
              </div>
            </div>
            <div class="col-sm-4 text-right text-sm">
              <div class="social-mini-button">
                <a href="#"><span class="mai-logo-facebook-f"></span></a>
                <a href="#"><span class="mai-logo-twitter"></span></a>
                <a href="#"><span class="mai-logo-dribbble"></span></a>
                <a href="#"><span class="mai-logo-instagram"></span></a>
              </div>
            </div>
          </div>
          <!-- .row -->
        </div>
        <!-- .container -->
      </div>
      <!-- .topbar -->
      <nav class="navbar navbar-expand-lg navbar-light shadow-sm" role="navigation">
  <div class="container">
    <a class="navbar-brand" href="<?php echo site_url();?>"
            ><?php echo get_bloginfo('name');?></a
          >
    <!-- Brand and toggle get grouped for better mobile display -->
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupport" aria-controls="navbarSupport" aria-expanded="false" aria-label="<?php esc_attr_e( 'Toggle navigation', 'your-theme-slug' ); ?>">
        <span class="navbar-toggler-icon"></span>
    </button>
    
        <?php wp_nav_menu(array(
    'theme_location'=>'primary-menu',
    'depth'           => 2, // 1 = no dropdowns, 2 = with dropdowns.
    'container'       => 'div',
    'container_class' => 'collapse navbar-collapse',
    'container_id'    => 'navbarSupport',
    'menu_class'      => 'navbar-nav ml-auto',
    'fallback_cb'     => 'WP_Bootstrap_Navwalker::fallback',
    'walker'          => new WP_Bootstrap_Navwalker(),))?>
    </div>
</nav>
    </header>
