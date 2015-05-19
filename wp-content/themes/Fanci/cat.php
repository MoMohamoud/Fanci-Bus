<?php 
// Template Name: Test

 ?>

<?php get_header(); ?>

<div class="wrapper">
	<div class="row">
	<div class="info">
        <div class="col-sm-6 no-padding">
<?php query_posts(array( 'post_type' => 'staff',  )); ?>
<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

<h2>Test</h2>
 <?php endwhile; else: ?>
 <p>Sorry, no posts matched your criteria.</p>
 <?php endif; ?>

<?php 
	query_posts(array( 
	'post_type' => 'staff',
	'showposts' => -1,
	'tax_query' => array(
	    array(
            'taxonomy' => 'staf',
            'tag_ID' => '4',
            'field' => 'term_id',
	    )
	),
	'orderby' => 'title',
	'order' => 'ASC' )
);



$taxonomy = 'staff';

// get the term IDs assigned to post.
$post_terms = wp_get_object_terms( $post->ID, $taxonomy, array( 'fields' => 'ids' ) );
// separator between links
$separator = ', ';

if ( !empty( $post_terms ) && !is_wp_error( $post_terms ) ) {

   $term_ids = implode( ',' , $post_terms );
   $terms = wp_list_categories( 'title_li=&style=none&echo=0&taxonomy=' . $taxonomy . '&include=' . $term_ids );
   $terms = rtrim( trim( str_replace( '<br />',  $separator, $terms ) ), $separator );

    // display post categories
 echo  $terms;
}

 ?>

</div>
</div>
</div>
</div>

<?php get_footer(); ?>