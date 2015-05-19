</div> <!-- container -->



 <?php if (!(is_front_page())): ?>
 <footer>

 	<div class="row footer">
 		<div class="col-sm-12">
 		<p>© Company 2012</p>
 			
 		</div>

 	</div>
 	

 
 	
 </footer>
 	
 <?php endif ?>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
<script type="text/javascript">

$(document).ready(function () {
    $('#hidden').fadeIn('slow').removeClass('hidden');

	//    $("span").hover(function() {
	//     $(this).css("color", "#EB078D").css("font-family", "cursive").css("font-family", "cursive").css("font-size","20px").css("font-weight","800");

	// })


});

</script>

<script type="text/javascript">
$(document).ready(function () {
	$(".left").addClass('show');
		
	setTimeout(function(){
    	$(".middle").addClass('show');
		}, 1000);

	setTimeout(function(){
    	$(".right").addClass('show');
		}, 2000);
	$('.text-info').fadeIn();



});



</script>

<script type="text/javascript" src="<?php bloginfo('template_url'); ?>/js/main.js"></script>
<script type="text/javascript" src="<?php bloginfo('template_url'); ?>/js/classie.js"></script>
<script type="text/javascript" src="//cdn.jsdelivr.net/jquery.slick/1.5.0/slick.min.js"></script>
	<script type="text/javascript" src="<?php bloginfo('template_url'); ?>/js/jquery.easing.min.js"></script>
		
		<script type="text/javascript" src="<?php bloginfo('template_url'); ?>/js/supersized.3.2.7.min.js"></script>
		<script type="text/javascript" src="<?php bloginfo('template_url'); ?>/theme/supersized.shutter.min.js"></script>



<script type="text/javascript">
$(document).ready(function(){
	$('.autoplay').slick({
	  slidesToShow: 1,
	  slidesToScroll: 1,
	  autoplay: true,
	  autoplaySpeed: 3000,
	});

	 
				
});

</script>



<?php if(is_tree(10)) : ?>


<script type="text/javascript">
			
			jQuery(function($){
				
				$.supersized({
				
					// Functionality
					slide_interval          :   3000,		// Length between transitions
					transition              :   3, 			// 0-None, 1-Fade, 2-Slide Top, 3-Slide Right, 4-Slide Bottom, 5-Slide Left, 6-Carousel Right, 7-Carousel Left
					transition_speed		:	700,		// Speed of transition
															   
					// Components							
					slide_links				:	'blank',	// Individual links for each slide (Options: false, 'num', 'name', 'blank')
					slides 					:  	[			// Slideshow Images
														{image : 'http://localhost:8888/Nice1/wp-content/themes/Fanci/img/_05.jpg', title : 'FanciFotos', thumb : 'http://localhost:8888/Nice1/wp-content/themes/Fanci/img/_05.jpg', url : 'http://www.nonsensesociety.com/2011/04/maria-kazvan/'},
														{image : 'http://localhost:8888/Nice1/wp-content/themes/Fanci/img/_04.jpg"/>', title : 'FanciFotos', thumb : 'http://buildinternet.s3.amazonaws.com/projects/supersized/3.2/thumbs/kazvan-2.jpg', url : 'http://www.nonsensesociety.com/2011/04/maria-kazvan/'},  
														{image : 'http://localhost:8888/Nice1/wp-content/themes/Fanci/img/DSC_0031.jpg"/>', title : 'FanciFotos', thumb : 'http://buildinternet.s3.amazonaws.com/projects/supersized/3.2/thumbs/kazvan-3.jpg', url : 'http://www.nonsensesociety.com/2011/04/maria-kazvan/'},
														{image : 'http://localhost:8888/Nice1/wp-content/themes/Fanci/img/DSC_0117.jpg"/>', title : 'FanciFotos', thumb : 'http://buildinternet.s3.amazonaws.com/projects/supersized/3.2/thumbs/wojno-1.jpg', url : 'http://www.nonsensesociety.com/2011/03/colin/'},
														{image : 'http://localhost:8888/Nice1/wp-content/themes/Fanci/img/DSC_0705.jpg"/>', title : 'FanciFotos', thumb : 'http://buildinternet.s3.amazonaws.com/projects/supersized/3.2/thumbs/wojno-2.jpg', url : 'http://www.nonsensesociety.com/2011/03/colin/'},
														{image : 'http://localhost:8888/Nice1/wp-content/themes/Fanci/img/trail.jpg"/>', title : 'FanciFotos', thumb : 'http://buildinternet.s3.amazonaws.com/projects/supersized/3.2/thumbs/wojno-3.jpg', url : 'http://www.nonsensesociety.com/2011/03/colin/'},
														{image : 'http://localhost:8888/Nice1/wp-content/themes/Fanci/img/DSC_0705.jpg"/>', title : 'FanciFotos', thumb : 'http://buildinternet.s3.amazonaws.com/projects/supersized/3.2/thumbs/shaden-1.jpg', url : 'http://www.nonsensesociety.com/2011/06/brooke-shaden/'},
														{image : 'http://localhost:8888/Nice1/wp-content/themes/Fanci/img/DSC_0705.jpg"/>', title : 'FanciFotos', thumb : 'http://buildinternet.s3.amazonaws.com/projects/supersized/3.2/thumbs/shaden-2.jpg', url : 'http://www.nonsensesociety.com/2011/06/brooke-shaden/'},
														{image : 'http://localhost:8888/Nice1/wp-content/themes/Fanci/img/DSC_0705.jpg"/>', title : 'FanciFotos', thumb : 'http://buildinternet.s3.amazonaws.com/projects/supersized/3.2/thumbs/shaden-3.jpg', url : 'http://www.nonsensesociety.com/2011/06/brooke-shaden/'}
												]
					
				});
		    });
		    
		</script>

	<?php endif ?>



<?php wp_footer(); ?>

</body>
</html>