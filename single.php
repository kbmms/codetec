<?php get_header(); ?> 


<?php the_post(); ?>


<div class="container-fluid">
  <div class="container single">
     <h2><?php the_title(); ?></h2>
    <p><?php the_field( "subtitulo" ); ?></p>
    <p><a href="javascript:window.history.go(-1)">Voltar</a></p>
    <?php if ( has_post_thumbnail() ) : ?>
    <figure>
      <?php the_post_thumbnail(); ?>
    </figure>
    <?php endif; ?>
    
    <?php the_content(); ?>
     <?php comments_template(); ?>
  </div>
</div>
<?php get_footer(); ?> 