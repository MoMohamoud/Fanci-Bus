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
						$args = array( 	'cat' => '6', 'orderby' => 'title');
						$the_query = new WP_Query( $args );
						if ( have_posts() ) : $count = 0;
							while($the_query->have_posts()) : $the_query->the_post(); ?>
								<?php if ($count === 0): ?>
								<li class="active">									
									<a data-toggle="tab" href="#<?php the_title(); ?>"><button class="nav nav-justified" id="myTab"><?php the_title(); ?></button></a>
								</li>

							<?php else: ?>
								<li>									
									<a data-toggle="tab" href="#<?php the_title(); ?>"><button class="nav nav-justified" id="myTab"><?php the_title(); ?></button></a>
								</li>
									
								<?php endif ?>
							
								
								
							<?php $count++  ?>
							<?php endwhile ?>
						<?php endif ?>
					<?php wp_reset_postdata(); // reset the query ?>	
				</ul>
			</div>

			<div class="col-sm-10">

				<div class="col-xs-2 tab-content " >
					<?php 
						$args = array( 'cat' => '6');
						$the_query = new WP_Query( $args );
					
						if ( have_posts() ) : $counter = 0;
							while($the_query->have_posts()) : $the_query->the_post(); ?>
								<?php $galls = simple_fields_values("gaimages");?>
								<?php if ($counter === 0): ?>
									<?php foreach ($galls as $gall): ?>
										<div class="tab-pane fade in active" id="<?php the_title(); ?>">
											<a href="<?php echo $gall['url'] ?>" class="swipebox" title="My Caption">
												<img src="<?php echo $gall['url'] ?>" alt="image">
											</a>
										</div>
									<?php endforeach ?>
								<?php else : ?>
									<?php foreach ($galls as $gall): ?>
										<div class="tab-pane fade in" id="<?php the_title(); ?>">
											<a href="<?php echo $gall['url'] ?>" class="swipebox" title="My Caption">
												<img src="<?php echo $gall['url'] ?>" alt="image">
											</a>
										</div>
									<?php endforeach ?>

								<?php endif; ?>
							
							<?php $counter++  ?>
							<?php endwhile ?>
						<?php endif ?>
					<?php wp_reset_postdata(); // reset the query ?>
				</div>
			</div>
		</div>
	</div>
</div>

 <?php get_footer(); ?>