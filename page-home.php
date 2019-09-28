<?php
/** Template Name: Home Page */

get_header(); ?>

<div class="container">
  <div class="row justify-content-center">
    
    <div class="col-9 justify-content-center">
      <div id="content" role="main">
        <?php get_template_part('loops/content-home', 'page'); ?>
      </div><!-- /#content -->
    </div>
    
  </div><!-- /.row -->
</div><!-- /.container -->

<?php get_footer(); ?>
