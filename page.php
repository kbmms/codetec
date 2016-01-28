<?php get_header(); ?> 

<div class="container-fluid">
  <div class="container">
   <?php
    global $post;
    $args = array(
      'post_parent'=> $post->ID,
      'order' => 'ASC',
      'post_type' => 'page',
      'post_status' => 'publish',
      'post_per_page' => -1
    );

    query_posts($args);
      if(have_posts()) : while (have_posts()) : the_post();
?>
     <a href="<?php the_permalink(); ?>">
    <div class="col-md-3 col-sm-6 col-xs-12">
    <p><?php the_title(); ?></p>
    <img class="img-responsive" src="<?php the_field( "imagem-subpage" ); ?>" alt="">
    </div>
    </a>

  <?php
    endwhile;
    endif;
    wp_reset_query();
  ?>
    </div>
</div>

<?php get_footer(); ?> 