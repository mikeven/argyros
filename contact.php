<?php
    /*
     * Argyros - Página Contacto
     * 
     */
    include( "database/init.php" );
    include( "database/bd.php" );
	include( "database/data-user.php" );
    include( "database/data-products.php" );
    include( "database/data-categories.php" );
    include( "fn/fn-catalogue.php" );
    include( "fn/fn-product.php");
    include( "fn/fn-cart.php" );
    
    //checkSession( '' );
?>
<!doctype html>
<!--[if IE 8 ]>    <html lang="en" class="no-js ie8"> <![endif]-->
<!--[if (gt IE 9)|!(IE)]><!--> <html lang="en" class="no-js"> <!--<![endif]-->

<!-- Mirrored from demo.designshopify.com/html_jewelry/contact.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 12 Jul 2017 16:53:58 GMT -->
<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=UTF-8" /><!-- /Added by HTTrack -->
<head>
  <meta charset="UTF-8">
  <meta name="servername" content="SolucionesXYZ">
  <meta name="google-site-verification" content="uMXohbTO1Kgmqq8PSaGTjxNPfuUZxLmcIbZ2cSFhDWI" />
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1" />
  <link rel="canonical" href="https://www.argyros.com.pa/" />
  <meta name="description" content="Argyros - Contacto"/>
  <meta property="og:image" content="https://www.argyros.com.pa/assets/images/a-image.png">
  <meta name="keywords" content="Argyros, Distribuidor, Platería"/>
  <link rel="icon" type="image/png" href="https://www.argyros.com.pa/assets/images/afavicon.png">
  <title>Contacto::Argyros</title>
  	
    <link href="assets/stylesheets/font.css" rel='stylesheet' type='text/css'>
	<link href="assets/stylesheets/font-awesome.min.css" rel="stylesheet" type="text/css" media="all"> 	
	<link href="assets/stylesheets/bootstrap.min.3x.css" rel="stylesheet" type="text/css" media="all">
	<link href="assets/stylesheets/cs.bootstrap.3x.css" rel="stylesheet" type="text/css" media="all">
	<link href="assets/stylesheets/cs.animate.css" rel="stylesheet" type="text/css" media="all">
	<link href="assets/stylesheets/cs.global.css" rel="stylesheet" type="text/css" media="all">
	<link href="assets/stylesheets/cs.style.css" rel="stylesheet" type="text/css" media="all">
	<link href="assets/stylesheets/cs.media.3x.css" rel="stylesheet" type="text/css" media="all">
	<link href="assets/bootstrap-select-1.12.4/dist/css/bootstrap-select.min.css" 
	rel="stylesheet" type="text/css" media="all">
	<link href="assets/bootstrapvalidator/dist/css/bootstrapValidator.min.css" rel="stylesheet" 
	type="text/css" media="all">
	
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
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

	<!-- Tooltips -->
	<script src="assets/tooltips/js/tooltipster.bundle.min.js" type="text/javascript"></script>

	<!-- Select -->
	<script src="assets/bootstrap-select-1.12.4/dist/js/bootstrap-select.min.js" 
	type="text/javascript"></script>

	<script src="js/fn-ui.js" type="text/javascript"></script>
	<script src="js/fn-product.js" type="text/javascript"></script>
	<script src="js/fn-user.js" type="text/javascript"></script>
	<script src="js/fn-cart.js" type="text/javascript"></script>
	<?php include( "fn/ga.php" ); ?>

	<style>
		#contact-form{
			margin: 0 5px;
		}
		#alert-msgs{ display: none; }
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
								<span class="page-title">Contacto</span>
							</div>
						</div>
					</div>
				</div>               
				<section class="content">    
					<div class="container">
						<div class="row">
							<div id="page-header">
								<h1 id="page-title">Contacto</h1>
							</div>
						</div>
					</div>
					<div id="col-main" class="contact-page clearfix">
						<div class="group-contact clearfix">
							<div class="container">
								<div class="row">
									<?php include( "sections/alert-msg.html" ); ?>
									<div class="left-block col-md-12">
										<form id="frm_contacto" accept-charset="UTF-8" method="post" data-toggle="validator">
											<input type="hidden" value="contact" name="form_type">
											<input type="hidden" name="utf8" value="✓">
											<ul id="contact-form" class="row list-unstyled">
												<li class="">
												<h3>Déjanos tus datos</h3>
												</li>
												<div class="form-group">
													<li class="">
													<label class="control-label" for="name">Nombre </label>
													<input type="text" id="name" value="" class="form-control" name="nombre">
													</li>
													<li class="clearfix"></li>
												</div>
												<div class="form-group">
													<li class="">
													<label class="control-label" for="email">Email <span class="req">*</span></label>
													<input type="email" id="email_c" value="" class="form-control email" name="email">
													</li>
													<li class="clearfix"></li>
												</div>
												<div class="form-group">
													<li class="">
													<label class="control-label" for="message">Mensaje <span class="req">*</span></label>
													<textarea id="message" rows="4" class="form-control" name="mensaje" style="resize:none; overflow:hidden;"></textarea>
													</li>
												</div>
												<li class="clearfix"></li>
												<li class="unpadding-top">
												<button id="btn_contacto" type="submit" class="btn">Enviar</button>
												</li>
											</ul>
										</form>
									</div>
									<div class="right-block contact-content col-md-12">
										<h6 class="sb-title"><i class="fa fa-home"></i>Información de contacto</h6>
										<ul class="right-content">
											<!-- <li class="title"> <h6>Dirección</h6> </li> -->
											<li class="address">
											<p>
												Final calle 15, Edificio Silver Crown, local 2, Zona Libre de Colón. República de Panamá.
											</p>
											</li>

											<div>
												<li class="phone"><i class="fa fa-phone"></i> (+507) 447 3175 / (+507) 447 2774 </li>
											</div>
											<div>
												<li class="phone">
													<img src="assets/images/whatsapp.png" width="15" style="margin-right: 10px;">(+507) 6678-9111 / (+507) 6278-5100
												</li>
											</div>

											<li class="email"><i class="fa fa-envelope"></i> info@argyros.com.pa</li>
										</ul>
										<ul class="right-content">
											<li class="title">
											<h6>Síguenos</h6>
											</li>
											<li class="facebook"><a href="https://www.facebook.com/ArgyrosInc"><span class="fa-stack fa-lg btooltip" title="" data-original-title="Facebook"><i class="fa fa-circle fa-stack-2x"></i><i class="fa fa-facebook fa-inverse fa-stack-1x"></i></span></a></li>
											<li class="twitter"><a href="https://twitter.com/argyrosinc"><span class="fa-stack fa-lg btooltip" title="Twitter" data-original-title="Twitter"><i class="fa fa-circle fa-stack-2x"></i><i class="fa fa-twitter fa-inverse fa-stack-1x"></i></span></a></li>
											<li class="pinterest"><a href="https://www.instagram.com/argyrosinc/"><span class="fa-stack fa-lg btooltip" title="Instagram" data-original-title="Instagram"><i class="fa fa-circle fa-stack-2x"></i><i class="fa fa-instagram fa-inverse fa-stack-1x"></i></span></a></li>
											<li class="google-plus"><a href="https://www.youtube.com/channel/UCBEG8W6oNxHoxJAIWl43DFg"><span class="fa-stack fa-lg btooltip" title="You Tube" data-original-title="You Tube"><i class="fa fa-circle fa-stack-2x"></i><i class="fa fa-youtube fa-inverse fa-stack-1x"></i></span></a></li>
										</ul>
									</div>
								</div>
								<div id="argyrosmap" class="row">
									<div class="col-md-24 col-xs-24">
										<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3936.7666607647825!2d-79.8918163335422!3d9.353905121954526!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8fab6da7351ea6fd%3A0x348395c688cc68ad!2sArgyros%20Inc.!5e0!3m2!1sen!2sve!4v1588710889502!5m2!1sen!2sve" width="100%" height="550" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
									</div>
								</div>
							</div>
							
						</div>
					</div> 
				</section>        
			</div>
		</div>
	</div>
	<!-- Validator -->
	<script src="assets/bootstrapvalidator/dist/js/bootstrapValidator.min.js" 
	type="text/javascript"></script>
	<!-- Footer -->
	<?php include("sections/footer.php"); ?>
</body>