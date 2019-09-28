<?php
/*
The Default Loop (used by index.php and category.php)
=====================================================

If you require only post excerpts to be shown in index and category pages, then use the [---more---] line within blog posts.

If you require different templates for different post types, then simply duplicate this template, save the copy as, e.g. "content-aside.php", and modify it the way you like it. (The function-call "get_post_format()" within index.php, category.php and single.php will redirect WordPress to use your custom content template.)

Alternatively, notice that index.php, category.php and single.php have a post_class() function-call that inserts different classes for different post types into the section tag (e.g. <section id="" class="format-aside">). Therefore you can simply use e.g. .format-aside {your styles} in css/b4st.css style the different formats in different ways.
*/
?>
<div class="container">
<div class="row">

  <?php if(have_posts()): while(have_posts()): the_post();?>
  <article role="article" id="post_<?php the_ID()?>">
    <header>
      <h1 class="display-4 mb-3">
        <a href="<?php the_permalink(); ?>">
        <?php the_field( 'heading' ); ?>
        </a>
      </h1>
      <?php $heading_image = get_field( 'heading_image' ); ?>
    <?php if ( $heading_image ) { ?>
        <img src="<?php echo $heading_image['url']; ?>" class="img-fluid" alt="<?php echo $heading_image['alt']; ?>" />
    <?php } ?>
    <p>
        <?php the_field( 'heading_excerpt' ); ?>
    </p>
    </header>
    <section>
    <div class="row">
        <?php
        $args = array(
        'post_type'   => 'post',
        'post_status' => 'publish',
        );
        
        $blog_posts = new WP_Query( $args );
        if( $blog_posts->have_posts() ) :
        ?>

            <?php
            while( $blog_posts->have_posts() ) :
                $blog_posts->the_post();
                ?>
                <div class="card" style="width: 18rem;">
                <div class="card-body">
                    <h5 class="card-title"><a href="<?php echo get_permalink(); ?>"><?php echo get_the_title();?></a></h5>
                    <p class="card-text"><?php the_tags(); ?></p>
                </div>
                </div>
                <?php
            endwhile;
            wp_reset_postdata();
            ?>

        <?php
        else :
        esc_html_e( 'No posts to display! Something is fucked up.', 'text-domain' );
        endif;
        ?>
    </div>
    </section>
  </article>
  </div>
</div>
  <?php endwhile; ?>
  <?php else: wp_redirect(get_bloginfo('url').'/404', 404); exit; endif; ?>