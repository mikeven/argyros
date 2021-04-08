<?php
    /*
     * Argyros - Como comprar
     * 
     */
    include( "database/init.php" );
    include( "database/bd.php" );
	include( "database/data-user.php" );
    include( "database/data-products.php" );
    include( "database/data-categories.php" );
    include( "fn/fn-catalogue.php" );
    include( "fn/fn-product.php" );
    include( "fn/fn-cart.php" );
    
    //checkSession( '' );
?>
<!doctype html>
<!--[if IE 8 ]>    <html lang="en" class="no-js ie8"> <![endif]-->
<!--[if (gt IE 9)|!(IE)]><!--> 
<html lang="en" class="no-js"> 
<!--<![endif]-->

<!-- Mirrored from demo.designshopify.com/html_jewelry/about-us.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 12 Jul 2017 16:53:52 GMT -->

<head>
	<meta charset="UTF-8">
	<meta name="servername" content="SolucionesXYZ">
	<meta name="google-site-verification" content="uMXohbTO1Kgmqq8PSaGTjxNPfuUZxLmcIbZ2cSFhDWI" />
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1" />
	<link rel="canonical" href="https://www.argyros.com.pa/" />
	<meta name="description" content="Argyros - Como comprar"/>
	<meta property="og:image" content="https://www.argyros.com.pa/assets/images/a-image.png">
	<link rel="icon" type="image/png" href="https://www.argyros.com.pa/assets/images/afavicon.png">
	<meta name="keywords" content="Argyros, Distribuidor, Platería"/>
	<title>Como comprar::Argyros</title>

	<link href="assets/stylesheets/font.css" rel='stylesheet' type='text/css'>
  
	<link href="assets/stylesheets/font-awesome.min.css" rel="stylesheet" type="text/css" media="all"> 	
	<link href="assets/stylesheets/bootstrap.min.3x.css" rel="stylesheet" type="text/css" media="all">
	<link href="assets/stylesheets/cs.bootstrap.3x.css" rel="stylesheet" type="text/css" media="all">
	<link href="assets/stylesheets/cs.animate.css" rel="stylesheet" type="text/css" media="all">
	<link href="assets/stylesheets/cs.global.css" rel="stylesheet" type="text/css" media="all">
	<link href="assets/stylesheets/cs.style.css" rel="stylesheet" type="text/css" media="all">
	<link href="assets/stylesheets/cs.media.3x.css" rel="stylesheet" type="text/css" media="all">

	<script src="assets/javascripts/jquery-1.9.1.min.js" type="text/javascript"></script>
	<script src="assets/javascripts/jquery.imagesloaded.min.js" type="text/javascript"></script>
	<script src="assets/javascripts/bootstrap.min.3x.js" type="text/javascript"></script>
	<script src="assets/javascripts/jquery.easing.1.3.js" type="text/javascript"></script>
	<script src="assets/javascripts/jquery.camera.min.js" type="text/javascript"></script>
	<script src="assets/javascripts/jquery.mobile.customized.min.js" type="text/javascript"></script>
	<script src="assets/javascripts/cookies.js" type="text/javascript"></script>
	<script src="assets/javascripts/modernizr.js" type="text/javascript"></script>  
	<script src="assets/javascripts/application.js" type="text/javascript"></script>
	<script src="assets/javascripts/jquery.owl.carousel.min.js" type="text/javascript"></script>
	<script src="assets/javascripts/jquery.bxslider.js" type="text/javascript"></script>
	<script src="assets/javascripts/skrollr.min.js" type="text/javascript"></script>
	<script src="assets/javascripts/jquery.fancybox-buttons.js" type="text/javascript"></script>
	<script src="assets/javascripts/jquery.zoom.js" type="text/javascript"></script>	
	<script src="assets/javascripts/cs.script.js" type="text/javascript"></script>

	<script src="assets/javascripts/cs.script.js" type="text/javascript"></script>
	<script src="js/fn-ui.js" type="text/javascript"></script>
	<script src="js/fn-product.js" type="text/javascript"></script>
	<script src="js/fn-aboutus.js" type="text/javascript"></script>
	<script src="js/fn-user.js" type="text/javascript"></script>
	<script src="js/fn-cart.js" type="text/javascript"></script>

	<?php include( "fn/ga.php" ); ?>

	<style>
		#videoargyros{
			background: #e7e7e7;
			padding:15px 5px;
		}


		.about-us div {
		    margin-bottom: 0px;
		}
		p{ margin: 0; font-size: 16px; }
		
		#nuestros-clientes, #nuestros-productos{ padding-top: 60px; }

		.img_parag{
			height: auto;
			margin: 30px 0;
		}

		.col_pgh{ padding: 0 4%; }
		.wspacer{ height: 100px; }
		.wspacer-2{ height: 150px; }

		.txt_pgh{ text-align: justify; padding:35px; background-color: rgba(255,255,255,0.6); }
		.txt_pgh_w{ padding:35px; background-color: rgba(255,255,255,0.85); }

		#pgh1{
			background: url('assets/images/IMG_1037.jpg');
			background-size: cover;
		}

		#pgh2{
			background: url('assets/images/IMG_1416.jpg');
			background-size: cover;
		}

		#pgh3{
			
			background: url('assets/images/IMG_1434.jpg');
			background-size: cover;
		}

		#pgh4{
			background: url('assets/images/IMG_0643.png');
			background-size: cover;
			background-position-y: 45%;
		}

		#pgh-1{
			background: url('assets/images/IMG_2042.png');
			background-size: cover;
		}

		#pgh0{
			background: url('assets/images/IMG_PRO.jpg');
			background-size: cover;
		}

	</style>
	
</head>

<body itemscope="" itemtype="http://schema.org/WebPage" class="templatePage notouch">
  
	<!-- Header -->
	<?php include( "sections/header.php" ); ?>
  
	<div id="content-wrapper-parent">
		<div id="content-wrapper">       
			<!-- Content -->
			<div id="content" class="clearfix">                
				<div id="breadcrumb" class="breadcrumb">
					<div itemprop="breadcrumb" class="container">
						<div class="row">
							<div class="col-md-24">
								<a href="index.php" class="homepage-link" title="Back to the frontpage">Inicio</a>
								<span>/</span>
								<span class="page-title">Como comprar</span>
							</div>
						</div>
					</div>
				</div>                
				<section class="content">        
					<div class="container">
						<div class="row">
							<div id="page-header">
								<h1 id="page-title">Como comprar</h1>
							</div>
							<div id="col-main" class="col-md-24 normal-page clearfix">
								<div class="page about-us">
									
									<br><br>
									<video id="howtobuyvideo" width="99%" height="auto" autoplay controls muted>
									  <source src="assets/videos/argyros-web-compra.mp4" type="video/mp4">
									  <source src="assets/videos/argyros-web-compra_1.ogv" type="video/ogv">
									  <source src="assets/videos/argyros-web-compra.webm" type="video/webm">
										Your browser does not support the video tag.
									</video>

								</div>
							</div>
						</div>
					</div>
				</section> 
				<section class="content hidden">        
					<div class="container">
						<div class="row">
							<div id="col-main" class="col-md-24 normal-page clearfix">
								<div class="page about-us">
									<img src="assets/images/IMG_0643.png" width="100%">
								</div>
							</div>
						</div>
					</div>
				</section>       
			</div>
		</div>
	</div>
	
    <?php include("sections/footer.php"); ?>
    

</body>