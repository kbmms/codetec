<?php get_header() ?>

	<div class="container">

    	<div class="row">

            <div class="span12">

                <h1><?php post_type_archive_title()?></h1>
                <?php
                $args = array( 'post_type' => 'tecnologia', 'posts_per_page' => 10 );
                $loop = new WP_Query( $args );
                ?>
				<?php  while( $loop->have_posts() ) : $loop->the_post(); ?>

              	<h2><a href="<?php the_permalink()?>"><?php the_title()?></a></h2>

              	<?php the_excerpt() ?>

              	<?php endwhile; ?>

            </div>

    	</div>

    </div>

<?php get_footer()?>