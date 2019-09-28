<?php
/*
The Page Loop
=============
*/
?>

<?php if(have_posts()): while(have_posts()): the_post();

function children_menu() {
global $post;
  // check if this page has children or is a child
  if( count( get_pages( array( 'child_of' => $post->ID ) ) ) == 0 && count( get_pages( array( 'child_of' => $post->post_parent ) ) ) == 0) {
    return false;
  }

  if( $post->post_parent !=0 ) {

    $post_parent_id = $post->post_parent;
  }else{
    $post_parent_id = $post->ID;
  }
  $current_page_id = $post->ID;
  $args = array(
    'post_type'      => 'page',
    'posts_per_page' => -1,
    'order'          => 'ASC',
    'post_parent'    => $post_parent_id,
    'orderby'        => 'menu_order',
    'child_of'       => $post->post_parent,
 );
  $parent = new WP_Query( $args );

  if ( $parent->have_posts() ) : 
    $output .= '<div class="col-md-5 col-lg-5 col-xl-4 "><ul class="nav nav-tabs flex-lg-column">';
      while ( $parent->have_posts() ) : $parent->the_post(); 

          $current_page_id == get_the_ID() ? $active = 'active' : $active = '';

          $output .= '<li class="nav-item"><a href="' . get_permalink() . '" class="nav-link ' . $active . '" title="' . get_the_title() . '">' . get_the_title() . '</a></li>';
          

      endwhile;
    $output .= '</ul></div>';
  endif; 
  wp_reset_query();
  return $output;
}

?>

    <article role="article" id="post_<?php the_ID()?>" <?php post_class()?>>
      
      <div class="row justify-content-around mt-3 mt-lg-5">
        <?php echo children_menu(); ?>
        <div class="col">
          <header>
            <h2 class="display-4 mb-3"><?php the_title()?></h2>
          </header>
          <?php the_content()?>
          <?php wp_link_pages(); ?>
        </div>
      </div>
    </article>
<?php endwhile; else: ?>
<?php wp_redirect(get_bloginfo('url').'/404', 404); ?>
<?php exit; ?>
<?php endif; ?>

