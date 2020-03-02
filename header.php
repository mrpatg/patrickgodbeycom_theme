<!DOCTYPE html>
<html class="no-js" lang="en">

<head>
  <title><?php wp_title('&raquo;', 'true', 'right'); ?></title>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
  <div class="container-fluid bg-dark py-2">
    <div class="container">
      <div class="row bg-dark ">
        <div class="col">
          <img src="/wp-content/uploads/2020/03/patrickgodbey_logicon.png" alt="Patrick Godbey" class="src">
          <a class="navbar-brand align-middle" href="<?php echo esc_url(home_url('/')); ?>"><?php bloginfo('name'); ?></a>
        </div>
        <div class="col">
          <nav class="navbar navbar-expand-md navbar-dark ">

            <div class="collapse navbar-collapse" id="navbarNavDropdown">
              <?php
              wp_nav_menu(array(
                'theme_location'  => 'navbar',
                'container'       => false,
                'menu_class'      => '',
                'fallback_cb'      => '__return_false',
                'items_wrap'      => '<ul id="%1$s" class="navbar-nav ml-auto mt-2 mt-lg-0 %2$s">%3$s</ul>',
                'depth'            => 2,
                'walker'          => new b4st_walker_nav_menu()
              ));
              ?>

            </div>
          </nav>
        </div>
      </div>
    </div>

  </div>

  <?php if (!is_front_page()) {
    echo '<div class="col">';
  }
