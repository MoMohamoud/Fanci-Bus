<!DOCTYPE html>
<HEAD>
	<meta charset="utf-8">
	<title>Fancifotos Phase 2</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<!-- Latest compiled and minified CSS -->
  
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap.min.css">

	<!-- Optional theme -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap-theme.min.css">

	<link href="<?php bloginfo('stylesheet_url');?>" rel="stylesheet">
<!--  <link type='text/css' href="http://localhost:8888/Nice1/wp-content/themes/Fanci/css/menu_sideslide.css" rel="stylesheet"> -->
<link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/jquery.slick/1.5.0/slick.css"/>
<link href='http://fonts.googleapis.com/css?family=Roboto+Slab' rel='stylesheet' type='text/css'>


    
    <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.6.1/jquery.min.js"></script>





	<!-- Latest compiled and minified JavaScript -->
	<?php wp_enqueue_script("jquery"); ?>

	<?php wp_head(); ?>

</HEAD>

<body class="bg" id="hidden">  

<?php // if (is_front_page() || is_tree(10) ) : ?>


  <div class="content-wrap menu-wrap">
    <a class="navbar-brand-sidemenu" href="<?php bloginfo('url' ); ?>"><img class="img-responsive" src="<?php echo get_stylesheet_directory_uri();?>/img/finalfancifotos3.png"></a>
    <nav class="menu">
     <div class="icon-list">
      <?wp_nav_menu( array( 'theme_location' => 'new-menu', 'container_class' => 'navbar-nav' ) ); ?>
    </div>
    </nav>
  <button class="close-button" id="close-button">Close Menu</button>
  </div>
  <button class="menu-button" id="open-button">Open Menu</button>

<?php // else: ?>
<?php /* 

 <nav class="navbar navbar-default navbar-custom " role="navigation">
    <div class="container">
      <div class="navbar-header">
        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#collapse">
          <span class="sr-only">Toggle Navigation</span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
      
    
        <a class="navbar-brand" href="<?php echo site_url(); ?>"><img class="img-responsive" src="<?php echo get_stylesheet_directory_uri();?>/img/finalfancifotos3.png"></a>
      </div>
      <div class="collapse navbar-collapse navbar-inner" id="collapse">
        <ul class="nav navbar-nav navbar-right">
          <li> <?wp_nav_menu( array( 'theme_location' => 'new-menu', 'container_class' => 'navbar-nav' ) ); ?> </li>
        </ul>
      </div> 
    </div>
  </nav>

  */?>
  
<?php // endif; ?>


<?php /*  
<?php if (!(is_front_page() || is_page(5) || is_page(23)) || is_page_template( $contactPage )): ?>

  <div class="container content">
  

<?php endif ?>

*/ ?>



 
  

  
  	

  