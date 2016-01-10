<?php get_header(); ?> 

<div class="container-fluid">
 
 <?php if ( have_posts() ) : while( have_posts() ) : the_post(); ?>
  <div class="container">
    <h1><?php the_title(); ?></h1>
    <?php the_field('data'); ?>
    <?php if ( has_post_thumbnail() ) : ?>
    <figure>
      <?php the_post_thumbnail(); ?>
    </figure>
    <?php endif; ?>
    
    <?php the_content(); ?>
  </div>
  <?php endwhile; endif; ?>
</div>
<?php get_footer(); ?> 