<?php get_header(); ?>
<?php bootstrap_breadcrumb(); ?>
<div class="container">
  <div class="row">
    
    <div class="<?php if(is_active_sidebar('sidebar-widget-area')): ?>col-sm-12<?php else: ?>col-sm-12<?php endif; ?>">
      <div id="content" role="main">
        <header>
          <h1>Category: <?php echo single_cat_title(); ?></h1>
          <hr>
        </header>
        <?php get_template_part('loops/content', get_post_format()); ?>
      </div><!-- /#content -->
    </div>
    
    
  </div><!-- /.row -->
</div><!-- /.container -->

<?php get_footer(); ?>
