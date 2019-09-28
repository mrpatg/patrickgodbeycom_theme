<?php
$args = array(
    'post_type'      => 'snippet',
    'posts_per_page' => -1,
    'order'          => 'ASC',
 );
  $snippet = new WP_Query( $args );

  if($snippet->have_posts()): while($snippet->have_posts()): $snippet->the_post();?>
  <article role="article" id="post_<?php the_ID()?>">
    <header>
      <h2 class="display-4 mb-3">
        <a href="<?php the_permalink(); ?>">
          <?php the_title()?>
        </a>
      </h2>
      <h5>
        <em>
          <span class="text-muted author"><?php _e('By', 'b4st'); echo " "; the_author() ?>,</span>
          <time  class="text-muted" datetime="<?php the_time('d-m-Y')?>"><?php the_time('jS F Y') ?></time>
        </em>
      </h5>
    </header>
    <section>
      <?php the_post_thumbnail(); ?>
      <?php the_content( __( '&hellip; ' . __('Continue reading', 'b4st' ) . ' <i class="fa fa-arrow-right"></i>', 'b4st' ) ); ?>
    </section>
    <footer>
      <p class="text-muted" style="margin-bottom: 20px;">
        <i class="fa fa-folder-open-o"></i>&nbsp;
        <?php _e('Category', 'b4st'); ?>:
        <?php the_category(', ') ?><br/>
      </p>
    </footer>
  </article>
  <?php endwhile;
   wp_reset_query();
  ?>

  <?php if ( function_exists('b4st_pagination') ) { b4st_pagination(); } else if ( is_paged() ) { ?>
  <ul class="pagination">
    <li class="page-item older">
      <?php next_posts_link('<i class="fa fa-arrow-left"></i> ' . __('Previous', 'b4st')) ?></li>
    <li class="page-item newer">
      <?php previous_posts_link(__('Next', 'b4st') . ' <i class="fa fa-arrow-right"></i>') ?></li>
  </ul>
  <?php } ?>

  <?php else: wp_redirect(get_bloginfo('url').'/404', 404); exit; endif; ?>