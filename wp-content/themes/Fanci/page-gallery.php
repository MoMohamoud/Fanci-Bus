<?php get_header(); ?>

<!-- <div class="autoplay">
  <div><img class="img-responsive slider2" src="<?php echo get_stylesheet_directory_uri();?>/img/DSC_0117.jpg"></div>
    <div><img class="img-responsive slider2" src="<?php echo get_stylesheet_directory_uri();?>/img/DSC_0117.jpg"></div>

    <div><img class="img-responsive slider2" src="<?php echo get_stylesheet_directory_uri();?>/img/_05.jpg"></div>

</div> -->
	



	
	<!--End of styles-->
<div class="container gallery">
	<!--Thumbnail Navigation-->
	<div id="prevthumb"></div>
	<div id="nextthumb"></div>
	
	<!--Arrow Navigation-->
	<a id="prevslide" class="load-item"></a>
	<a id="nextslide" class="load-item"></a>


	<div class="container">
		<div class="row ">
		<div class="set-height">
			

		
	<div id="thumb-tray" class="load-item">
		<div id="thumb-back"></div>
		<div id="thumb-forward"></div>
	</div>
	
	<!--Time Bar-->
	<div id="progress-back" class="load-item">
		<div id="progress-bar"></div>
	</div>
	
	<!--Control Bar-->
	
				<div id="controls-wrapper" class="load-item">
		<div id="controls">
			
			<a id="play-button"><img id="pauseplay" src="<?php echo get_stylesheet_directory_uri();?>/img/pause.png"/></a>
		
			<!--Slide counter-->
			<div id="slidecounter">
				<span class="slidenumber"></span> / <span class="totalslides"></span>
			</div>
			
			<!--Slide captions displayed here-->
			<div id="slidecaption"></div>
			
			<!--Thumb Tray button-->
			<a id="tray-button"><img id="tray-arrow" src="<?php echo get_stylesheet_directory_uri();?>/img/button-tray-up.png"/></a>
			
			<!--Navigation-->
			<ul id="slide-list"></ul>
			
		</div>
	</div>
			

		</div>

		

	</div>
</div>


</div>


	


<?php get_footer(); ?>