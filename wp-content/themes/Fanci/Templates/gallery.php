<?php 

// template name: Gallery

get_header();
 ?>

<div class="container">
	<div class="row">
		<div class="pad-75">
			<div class="col-sm-2">
				<ul class="gall">
					<?php 
						$args = array( 	'cat' => '6');
						$the_query = new WP_Query( $args );
						if ( have_posts() ) :
							while($the_query->have_posts()) : $the_query->the_post(); ?>
								<li>
									<?php the_title(); ?>
								</li>
							<?php endwhile ?>
						<?php endif ?>
					<?php wp_reset_postdata(); // reset the query ?>	
				</ul>
			</div>

			<div class="col-sm-10">

				<?php 
					$args = array( 'cat' => '6');
					$the_query = new WP_Query( $args );
					if ( have_posts() ) :
						while($the_query->have_posts()) : $the_query->the_post(); ?>
							<h2><?php the_title(); ?></h2>
								<p><?php the_content(); ?></p>
								<?php $gall = simple_fields_value("gaimages");?>
							<a href="<?php echo $gall['url'] ?>" class="swipebox" title="My Caption">
								<img src="<?php echo $gall['url'] ?>" alt="image">
							</a>
						<?php endwhile ?>
					<?php endif ?>


				<?php wp_reset_postdata(); // reset the query ?>
			</div>
		</div>
	</div>
</div>

 <?php get_footer(); ?>