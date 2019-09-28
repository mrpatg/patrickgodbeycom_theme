<?php
/** Template Name: Snippets Page */

get_header(); ?>

<div class="container">
  <div class="row">
    
    <div class="">
      <div id="content" role="main">
        <?php get_template_part('loops/content-snippets', get_post_format()); ?>
      </div><!-- /#content -->
    </div>
    
  </div><!-- /.row -->
</div><!-- /.container -->

<?php get_footer(); ?>
