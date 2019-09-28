<!DOCTYPE html>
<html class="no-js" lang="en">
<head>
	<title><?php wp_title('•', true, 'right'); bloginfo('name'); ?></title>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
  	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

<nav class="navbar navbar-expand-md navbar-dark bg-dark d-md-none d-lg-none d-xl-none">

  <a class="navbar-brand" href="<?php echo esc_url( home_url('/') ); ?>"><?php bloginfo('name'); ?></a>

  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarNavDropdown">
    <?php
      wp_nav_menu( array(
        'theme_location'	=> 'navbar',
        'container'       => false,
        'menu_class'		  => '',
        'fallback_cb'		  => '__return_false',
      	'items_wrap'		  => '<ul id="%1$s" class="navbar-nav mr-auto mt-2 mt-lg-0 %2$s">%3$s</ul>',
        'depth'			      => 2,
	      'walker'  	      => new b4st_walker_nav_menu()
      ) );
    ?>
    
  </div>
</nav>
<div class="row ml-0 mr-0 h-100">
  <div class="col-md-4 ml-0 mr-0 p-0 col-lg-3 col-xl-3 d-none d-md-flex d-lg-flex d-xl-flex ">
    <div class="container-fluid flex-column ">
      <div class="row bg-dark h-100 px-2">
        <div class="col flex-grow-1">
          <nav class="bg-dark navbar-dark">
          <p>
            <a class="navbar-brand" href="<?php echo esc_url( home_url('/') ); ?>"><?php bloginfo('name'); ?></a>
          </p>
          <p>
            <small class="text-light">
              <?php the_field( 'blurb', 'option', false ); ?>
            </small>
          </p>
            <?php
              wp_nav_menu( array(
                'theme_location'	=> 'navbar',
                'container'       => false,
                'menu_class'		  => '',
                'fallback_cb'		  => '__return_false',
                'items_wrap'		  => '<ul id="%1$s" class="navbar-nav mr-auto mt-2 mt-lg-0 %2$s">%3$s</ul>',
                'depth'			      => 2,
                'walker'  	      => new b4st_walker_nav_menu()
              ) );
            ?>

          </nav>
          <hr/>
          <div class="d-none d-md-block w-100">
            <?php if( get_field('github_url', 'option') ):?>
              <a href="<?php the_field( 'github_url', 'option', false ); ?>" name="Patrick Godbey on Github">
                  <img src="/wp-content/themes/patrickgodbeycom/theme/img/github.png" alt="Patrick Godbey on Github" height="20px">
              </a>
            <?php endif; ?>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="col">
