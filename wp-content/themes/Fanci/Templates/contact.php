<?php 

// Template Name: Contact

 ?>

<?php get_header() ?>

<div class="pad-top">

	<div class="container">
		<div class="row">
			<div class="pad-75 contact">
				<div class="col-sm-8">

					<?php 
					if ( have_posts() ) :
						while ( have_posts() ) : the_post();?>
							
							<h2><?php the_title(); ?></h2>
							<p><?php the_content(); ?></p>
			<?php endwhile ?>
		<?php endif ?>



				</div>
	<div class="col-sm-4">
	<?php 
	if ( has_post_thumbnail() ) {
		the_post_thumbnail();} 

	 ?>
	</div>


</div>
</div>
</div>

</div>

<?php get_footer(); ?>