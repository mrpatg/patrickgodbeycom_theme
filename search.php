<?php get_header(); ?>
<?php bootstrap_breadcrumb(); ?>
<div class="container">
  <div class="row">
    
    <div class="<?php if(is_active_sidebar('sidebar-widget-area')): ?>col-sm-12<?php else: ?>col-sm-12<?php endif; ?>">
      <div id="content" role="main">
        <header>
          <h1><?php _e('Search Results for', 'b4st'); ?> &ldquo;<?php the_search_query(); ?>&rdquo;</h1>
        </header>
        <hr/>
        <?php get_template_part('loops/content', 'search'); ?>
      </div><!-- /#content -->
    </div>
    
  </div><!-- /.row -->
</div><!-- /.container -->

<?php get_footer(); ?>
