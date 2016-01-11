# codetec
Template criado e adaptado para wordpress

Como pegar postagem de custom_post_type 

<dl class="collapse">
		<?php 	$query2 = new WP_Query( array('post_type' => 'membros') );
				while ($query2->have_posts()) : $query2->the_post();  ?>

		  <dt class="collapse-title"><?php echo the_title() ?></dt>
		    <dd class="collapse-content">
				<div class="content-membro">
					<?php echo the_post_thumbnail('thumbnail');  ?>
					<div class="desc-membro">
						<?php echo the_content() ?>
					</div>
				</div>
		    </dd>

		<?php endwhile; wp_reset_postdata(); ?>
	</dl>
