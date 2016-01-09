<?php get_header(); ?> 


<?php the_post(); ?>


<div class="container-fluid">
  <div class="container">
    <h1><?php the_title(); ?></h1>
    <p>single</p>
    <?php if ( has_post_thumbnail() ) : ?>
    <figure>
      <?php the_post_thumbnail(); ?>
    </figure>
    <?php endif; ?>
    
    <?php the_content(); ?>
  </div>
</div>
<?php get_footer(); ?> 