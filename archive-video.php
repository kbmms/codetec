<?php get_header() ?>

	<div class="container-fluid">

    	<div class="container">

            <div class="archive">

                <h1><?php post_type_archive_title()?></h1>
                <?php
                $args = array( 'post_type' => 'video', 'posts_per_page' => 10 );
                $loop = new WP_Query( $args );
                ?>
				<?php  while( $loop->have_posts() ) : $loop->the_post(); ?>

              	<h2><a class="archive-link" href="<?php the_permalink()?>"><?php the_title()?></a></h2>
              
              <p><?php the_excerpt() ?></p>

              	<?php endwhile; ?>

            </div>

    	</div>

    </div>

<?php get_footer()?>