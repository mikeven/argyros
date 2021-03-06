<?php
    /*
    * Argyros - Página de producto
    * 
    */
    include( "database/init.php" );
    include( "database/bd.php" );
	include( "database/data-user.php" );
	include( "database/data-sets.php" );
    include( "database/data-products.php" );
    include( "database/data-categories.php" );
    include( "fn/fn-single-product.php" );
    include( "fn/fn-catalogue.php" );
    include( "fn/fn-cart.php" );

    checkSession( 'catalogo' );
    if( !isset( $_GET["id"] ) ){
    	echo "<script> window.location = 'catalog.php'</script>";
    }
?>

<!doctype html>
<!--[if IE 8 ]>    <html lang="en" class="no-js ie8"> <![endif]-->
<!--[if (gt IE 9)|!(IE)]><!--> 
<html lang="en" class="no-js"> <!--<![endif]-->

<!-- Mirrored from demo.designshopify.com/html_jewelry/product-left.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 12 Jul 2017 16:53:51 GMT -->
<!-- Added by HTTrack -->
<meta http-equiv="content-type" content="text/html;charset=UTF-8" /><!-- /Added by HTTrack -->
<head>
  <meta charset="UTF-8">
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1" />
  <link rel="canonical" href="http://demo.designshopify.com/" />
  <?php if( isset( $is_p ) && $is_p ) { ?>
  <meta name="description" content="<?php echo $producto["description"]; ?>"/>
  <link rel="icon" type="image/png" href="https://www.argyros.com.pa/assets/images/afavicon.png">
  <?php }  ?>
  <?php if( isset( $is_p ) && $is_p ) { ?>
  	<title><?php echo $producto["name"]; ?> :: Argyros</title>
  <?php } else { ?>
  	<title>Argyros</title>
  <?php }  ?>

    <link href="assets/stylesheets/font.css" rel='stylesheet' type='text/css'>
  
	<link href="assets/stylesheets/font-awesome.min.css" rel="stylesheet" type="text/css" media="all"> 
	<link href="assets/stylesheets/jquery.camera.css" rel="stylesheet" type="text/css" media="all">
	<link href="assets/stylesheets/jquery.fancybox-buttons.css" rel="stylesheet" type="text/css" media="all">
	<link href="assets/stylesheets/cs.animate.css" rel="stylesheet" type="text/css" media="all">
	<link href="assets/stylesheets/application.css" rel="stylesheet" type="text/css" media="all">
	<link href="assets/stylesheets/swatch.css" rel="stylesheet" type="text/css" media="all">
	<link href="assets/stylesheets/jquery.owl.carousel.css" rel="stylesheet" type="text/css" media="all">
	<link href="assets/stylesheets/jquery.bxslider.css" rel="stylesheet" type="text/css" media="all">
	<link href="assets/stylesheets/bootstrap.min.3x.css" rel="stylesheet" type="text/css" media="all">
	<link href="assets/stylesheets/cs.bootstrap.3x.css" rel="stylesheet" type="text/css" media="all">
	<link href="assets/stylesheets/cs.global.css" rel="stylesheet" type="text/css" media="all">
	<link href="assets/stylesheets/cs.style.css" rel="stylesheet" type="text/css" media="all">
	<link href="assets/stylesheets/cs.media.3x.css" rel="stylesheet" type="text/css" media="all">
	<link href="assets/stylesheets/spr.css" rel="stylesheet" type="text/css" media="all">
	<link href="assets/stylesheets/addthis.css" rel="stylesheet" type="text/css" media="all">

	<!-- exZoom -->
	<link href="assets/stylesheets/jquery.exzoom.css" rel="stylesheet" type="text/css" media="all">

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
	<!-- Tooltips -->
	<script src="assets/tooltips/js/tooltipster.bundle.min.js" type="text/javascript"></script>	
	<?php include( "fn/ga.php" ); ?>
	<style type="text/css">
		#alert-msgs, #alert-msgs-notif, #det-no-disp{ display: none; }
		.rdet_view{ display: none; }
		.rdet_view_t{ display: none; }
		.rdet_prop{ display: none; }
		.product-view-img{ max-width: 50px !important; border: 1px solid #CCC !important; }
		#feat_img_producto{ border: 1px solid #CCC !important; }
		.infoproducto-lista{ font-size: 12px; margin-left: 20px; }
		.item-info-p{ float: left; margin-right: 5px; }
		.categ-rel-prod{ color: #808080 !important; }
		.categ-rel-prod:hover{ color: #a7b239 !important; }

		/*li i.fa{
			font-size: 15px;
		    vertical-align: 4px;
		    padding-right: 5px;
		    color: #808080;
		}*/
		
		#not-found{
			margin-top: 25px;
		}

		#disused_product_reference { max-width: 150px !important; }
		#disused_product_reference img{
		    height: 150px !important;
		}

		#gallery_main .owl-wrapper-outer .opt-pdetalle img {
		    height: 100px !important;
		}

		#referencia-producto, .detlist-id-det{
			font-size: 11px; font-weight: bold; color: #696f24; 
		}
		#referencia-producto-pvd{
			font-size: 11px; font-weight: bold; color: #73879C; 
		}

		#titulo-detalles-disponibles{
			padding: 5px 0;
		}

		.selimgdet{
			border: 2px solid #a7b239; 
			-webkit-transition: border-width 1.5s; /* Safari */
    		transition: border-width 1.5s;
    		-webkit-transition: border-color 1.5s; /* Safari */
    		transition: border-color 1.5s;
		}

		.label_disused{ 
			font-size: 20px; font-weight: bold; color: #808080; 
		}
		.img_ref_disused{ border: 2px solid #DDD; }

		.tx_not_available{
			font-size: 11px; font-weight: bold; color: #CF132C;
		}

		@media (max-width: 500px){
			#add-to-cart {
			    margin: 0px;
			    padding:0px 5px; 
			    font-size: 12px !important;
			}

			#exzoom {
	        	width: 350px;
	        	/*height: 400px;*/
	    	}
		}

		@media (min-width: 501px){
			#exzoom {
	        	width: 420px;
	        	/*height: 400px;*/
	    	}
		}

		.img_pdet_container{ position: relative; }
		.etq_agotado{ 
			position: absolute;
			top: 0;
			left: 20%;
			font-size: 11px; font-weight: bold; color: #CF132C;
			opacity: 0.5;
		}

	</style>

</head>

<body style="height: 2671px;" itemscope="" itemtype="http://schema.org/WebPage" class="templateProduct notouch">
  
  <!-- Header -->
	<?php include( "sections/header.php" ); ?>
  	
	<div id="content-wrapper-parent">
		<div id="content-wrapper">  
			<!-- Content -->
			
		<div id="content" class="clearfix">        
			
			<?php include( "sections/breadcrumb-product.php" ); ?>

			<section class="content">
				
				<div class="container">
					<?php if( isset( $_SESSION["login"] ) ) { ?>	
						
						<?php if( $is_p && $is_pd ) { ?> 
						<div class="row">
							
							<div class="left-slidebar col-xs-24 col-sm-6 hidden-xs">
								<div class="group_sidebar">											
									<?php include("sections/product/product-categories.php");?>  
									
									<!-- SPECIALS -->
									
									<!-- WELCOME -->

									<!-- PRODUCT VENDORS -->

									<!-- AD -->
									<?php //include("sections/ad.php");?>
									
									<!--End sb-item-->
								</div><!--end group_sidebar-->
							</div>
							<div id="col-main" class="product-page col-xs-24 col-sm-18 no_full_width have-left-slidebar">

								<div itemscope="" itemtype="http://schema.org/Product">
									<meta itemprop="url" content="/products/donec-condime-fermentum">
									<input type="hidden" id="ndiasnuevo" value="<?php echo NDIAS_NUEVO ?>">
									<input type="hidden" id="purl_servidor" value="<?php echo $purl;?>">
									<div id="product" class="content clearfix">      										
										<div id="product-image" class="product-image row no_full_width col-sm-12">   
											<div class="catalog_container" style="position: relative;">
											<div class="exzoom hidden" id="exzoom">
											    <div class="exzoom_img_box">
											        <ul class='exzoom_img_ul'>
											        	<?php foreach ( $imgs_detalle as $idet ) { ?>
											            	<li><img src="<?php echo $purl.$idet['path'] ?>"/></li>
											            <?php } ?>
											        </ul>
											    </div>
											    <div class="exzoom_nav"></div>
											    <p class="exzoom_btn">
											        <a href="javascript:void(0);" class="exzoom_prev_btn"> < </a>
											        <a href="javascript:void(0);" class="exzoom_next_btn"> > </a>
											    </p>
											</div>
											</div>
                                            
                                            <!--<h4 id="page-title" class="text-left">
												<span itemprop="name">Más opciones</span>
											</h4>-->
                                            
											<div id="detail-right-column" class="right-coloum col-sm-6 fadeInLeft not-animated hidden" data-animate="fadeInLeft">
												<div class="addthis_sharing_toolbox" data-url="#" data-title="Donec aliquam ante non | Jewelry - HTML Template">
													<div id="atstbx" class="at-share-tbx-element addthis_32x32_style addthis-smartlayers addthis-animated at4-show">
														<a class="at-share-btn at-svc-facebook"><span class="at4-icon aticon-facebook" title="Facebook"></span></a><a class="at-share-btn at-svc-twitter"><span class="at4-icon aticon-twitter" title="Twitter"></span></a><a class="at-share-btn at-svc-email"><span class="at4-icon aticon-email" title="Email"></span></a><a class="at-share-btn at-svc-print"><span class="at4-icon aticon-print" title="Print"></span></a><a class="at-share-btn at-svc-compact"><span class="at4-icon aticon-compact" title="More"></span></a>
													</div>
												</div>
											</div>

										</div>

							<div id="product-information" class="product-information row text-center no_full_width col-sm-12">        
								<?php include( "sections/alert-msg.html" ); ?>
							    <h2 id="page-title" class="text-left">
									<span itemprop="name"><?php echo $producto["name"]; ?></span>
								</h2>
								
								<div id="product-header" class="clearfix">
									<div id="product-info-right" class="group_sidebar">
										
										<?php include( "sections/product/zoom_info.php" );?>     
										
										<div itemprop="offers" itemscope="" itemtype="http://schema.org/Offer" class="col-sm-24 group-variants">
											<meta itemprop="priceCurrency" content="USD">              
											<link itemprop="availability" href="http://schema.org/InStock">
											<form id="frm_scart" method="post" class="variants" onsubmit="return false">
												
												<div id="product-actions" class="options clearfix">
													<style scoped>
													  label[for="product-select-option-0"] { display: none; }
													  #product-select-option-0 { display: none; }
													  #product-select-option-0 + .custom-style-select-box { display: none !important; }
													</style>																
													<!--<div class="swatch color clearfix" data-option-index="0">
														<div class="header">
															Color
														</div>
														<div data-value="black" class="swatch-element color black available">
															<div class="tooltip">
																black
															</div>
															<input id="swatch-0-black" name="option-0" value="black" checked="checked" type="radio">
															<label for="swatch-0-black" style="background-color: black; background-image: url(assets/images/black.png)">
															<img class="crossed-out" src="assets/images/soldout.png" alt="">
															</label>
														</div>
														<div data-value="red" class="swatch-element color red available">
															<div class="tooltip">
																red
															</div>
															<input id="swatch-0-red" name="option-0" value="red" type="radio">
															<label for="swatch-0-red" style="background-color: red; background-image: url(assets/images/red.png)">
															<img class="crossed-out" src="assets/images/soldout.png" alt="">
															</label>
														</div>
														<div data-value="white" class="swatch-element color white available">
															<div class="tooltip">
																white
															</div>
															<input id="swatch-0-white" name="option-0" value="white" type="radio">
															<label for="swatch-0-white" style="background-color: white; background-image: url(assets/images/white.png)">
															<img class="crossed-out" src="assets/images/soldout.png" alt="">
															</label>
														</div>
														<div data-value="blue" class="swatch-element color blue available">
															<div class="tooltip">
																blue
															</div>
															<input id="swatch-0-blue" name="option-0" value="blue" type="radio">
															<label for="swatch-0-blue" style="background-color: blue; background-image: url(assets/images/blue.png)">
															<img class="crossed-out" src="assets/images/soldout.png" alt="">
															</label>
														</div>																	
													</div>-->
													<h3 id="det-no-disp" class="text-left hidden">
														<span itemprop="name" style="color: #a7b239;" class="nodisponible">
															PRODUCTO NO DISPONIBLE
														</span>
													</h3>
													<div id="purchase-1293235843" class="row">
														<div class="detail-price col-sm-12" itemprop="price">
															<span id="vprice_visible" class="price">$ <?php echo $pre_pp; ?> </span>
															<input id="hprice_type" type="hidden" value="<?php echo $pre_pp; ?>">
															<input id="hprice_val" type="hidden" value="<?php echo $pre_pp; ?>">
														</div>
													</div>

													<?php

													if( $detalle_producto["available"] == 1 	// disponible y 
														&& $detalle_producto["desuso"] != 1 ){	// no en 'desuso'

														include( "sections/product/product_size_selection.php" );
														
														include( "sections/product/qty_selection.php" );

													} else { ?>
															
														<h3 id="page-title" class="text-left">
															<?php if( $detalle_producto["desuso"]) { ?>
																<span itemprop="name" style="color: #a7b239;">
																	PRODUCTO SUSTITUIDO POR:
																</span>
															<?php } else { ?>
																<span itemprop="name" style="color: #a7b239;">
																	PRODUCTO NO DISPONIBLE
																</span>
															<?php } ?>
														</h3>	
														
														<?php if( $detalle_producto["desuso"] && $prod_ref ) 
															include( "sections/product/product_disused_reference.php" ); ?>

													<?php } ?>
												</div>
												
												<?php 
													if( !$detalle_producto["desuso"] )
														include("sections/product/product_details_models.php"); 
												?>
												
												<!-- C-OCULTOS -->
												<div id="data_cart" class="hidden">
											    	<input type="hidden" id="idi_cart" name="idicart" value="">
											    	<input type="hidden" id="idprod" name="idproducto" 
											    	value="<?php echo $pid; ?>">
											    	<input type="hidden" id="iddetalle" name="iddetalle" 
											    	value="<?php echo $_GET['iddet']; ?>">
											    	<input type="hidden" id="nproducto" name="nombre_producto" 
											    	value="<?php echo $producto["name"]; ?>">
											    	<input type="hidden" id="dproducto" name="descripcion_producto" 
											    	value="<?php echo $producto["description"]; ?>">
											    	<input type="hidden" id="imgproducto" name="img_producto" 
											    	value="<?php echo $purl.$img_pp; ?>">
											    	<input type="hidden" id="stalla" name="seltalla" value="">
											    	<input type="hidden" id="vidseltalla" name="idseltalla" value="">
											    	<input type="hidden" id="vprice_cart" name="unit_price" 
											    	value="<?php echo $pre_pp; ?>">
											    </div>
											</form>
											<!-- wishlist -->                                          
										</div>                        
										<!-- tabs_detail -->
										<!-- pop-one, two three -->             
																					                
									</div>
									<div id="product-info-left">
										
										<div class="relative">
											<!--<ul class="list-unstyled">
												<li class="tags">
												<span>Tags :</span>
												<a href="#">
												above-200<span>,</span>
												</a>
												<a href="#">
												black<span>,</span>
												</a>
												<a href="#">
												l<span>,</span>
												</a>
												<a href="#">
												sale-off </a>
												</li>
											</ul>-->
										</div>
									</div>          
																				
								</div>
							</div>
										<!-- Product reviews -->				
									</div>
								</div>         
								<!-- Related Products -->

								<?php 
									if( isset( $productos_juegos ) && count( $productos_juegos ) > 0 ) {
										include( "sections/product/products-set.php" );
									}
								?>

								<?php include( "sections/product/related-products.php" ); ?>
							</div>
						</div>
						<?php } else { ?>
							<div id="not-found">
				    			<h6>PRODUCTO NO ENCONTRADO</h6>
				    			<?php if( !$is_pd && $is_p ) { ?>
				    			<h6>Sin datos</h6>
				    			<?php } ?>
				    		</div>
			    		<?php } ?>
					
			    	<?php } else { ?>
			    		<div style="margin:20px 0 100px 0;">
							<h6 id="blocked-sesion-catalog" 
							class="sb-title"><i class="fa fa-home"></i>
							INICIA SESIÓN PARA VER EL CATÁLOGO
							</h6>
						
							<a href="login.php">
								<button type="submit" class="btn">Iniciar sesión</button>
							</a>
						</div>
					<?php } ?>

				</div>
				
			</section>
				
		</div>
	    </div>
	</div>  
	
	<?php include("sections/footer.php"); ?>
</body>

<script src="js/fn-ui.js" type="text/javascript"></script>
<script src="js/fn-user.js" type="text/javascript"></script>
<script src="js/fn-single-product.js" type="text/javascript"></script>
<script type="text/javascript">

	$("#backbutton").on( "click", function(){
		window.location = document.referrer + '&refp=1';
	});

	<?php /*if( $det_dsp != 1 ) { 
		// No tiene detalles disponibles ?>
		detNoDisponible();
	<?php }*/ ?>
		
</script>
<script src="js/fn-cart.js" type="text/javascript"></script>
<script src="assets/javascripts/jquery.exzoom.js" type="text/javascript"></script>
<script type="text/javascript">

    $('.catalog_container').imagesLoaded( function() {
	    $("#exzoom").exzoom({
	        // thumbnail nav options
		    "navWidth": 60,
		    "navHeight": 60,
		    "navItemNum": 3,
		    "navItemMargin": 7,
		    "navBorder": 1,

		    // autoplay
		    "autoPlay": false,

		    // autoplay interval in milliseconds
		    "autoPlayTimeout": 10000
		});
	    $("#exzoom").removeClass('hidden');
	});

</script>