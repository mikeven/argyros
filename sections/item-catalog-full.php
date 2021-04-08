<li id="bl<?php echo $p_id?>" class="element first no_full_width cargable eca<?php echo $bloque; ?>" 
	data-alpha="Nombre del producto">
	<ul class="row-container list-unstyled clearfix">
		<li class="row-left img-catal-contenedor">
		<a id="<?php echo $p_id?>" 
			href="<?php echo $urlp; ?>" class="container_item" target="_blank">
		
		<img src="<?php echo $purl.$img ?>" 
		class="img-responsive imgcatal" alt="<?php echo $data_rprod[name] ?>">
		<span class="sale_banner">
			<?php if( $data_rprod["d_antiguedad"] < NDIAS_NUEVO ) { ?>
				<span class="sale_text"> Nuevo </span>
			<?php } ?>
		</span>
		<span class="catalogue_numerator"><?php echo $numerador_catalogo; ?></span>
		</a>
		<div class="hbw">
			<span class="hoverBorderWrapper hidden"></span>
		</div>
		</li>
		<li class="row-right parent-fly animMix">
		<div class="product-content-left">
			<a class="title-5" href="<?php echo $urlp; ?>" target="_blank" style="font-size: 13.5px;">
				<?php echo $titulo_p; ?>
			</a>
		
			<div style="float: right;" class="data-product-catalogue hidden">
				<span class="price_sale"><?php echo $precio_catalogo; ?></span>
			</div>

			<div style="text-align: left;" class="data-product-catalogue">
				<div class="full_wgt togwgt">
					<span class="weight_catalogue">Peso: <?php echo $peso_catalogo["full"]; ?></span>
				</div>
				<div class="short_wgt togwgt hidden">
					<span class="weight_catalogue">Peso: <?php echo $peso_catalogo["short"]; ?></span>
				</div>
				<span class="sizes_catalogue hidden">Tallas: <?php echo $tallas_catalogo; ?></span>
			</div>
		</div>
		
		<div class="list-mode-description">
			 <?php echo $data_rprod["description"] ?>
		</div>
		
		<div class="hover-appear hidden_" style="bottom: -75px;">
			<table class="table-data-catalogue">
				<tbody>
					<th width="33%">
						<div class="data-product-catalogue">
							<span class="weight_catalogue"><?php echo $peso_catalogo["short"]; ?></span>
						</div>
					</th>
					<th width="34%">
						<div class="quick-shop-window product-ajax-qs hidden-xs hidden-sm">
							<div data-target="#quick-shop-modal<?php echo $iddet?>" class="quick_shop quick-shop-icono" 
							data-toggle="modal" data-img="<?php echo $purl.$img ?>" 
							data-nombre="<?php echo $titulo_p." ".$data_rprod[name] ?>" 
							data-material="<?php echo $data_rprod[material] ?>" 
							data-pais="<?php echo $data_rprod[pais] ?>" 
							data-color="<?php echo $data_rprod[color] ?>" 
							data-bano="<?php echo $data_rprod[bano] ?>" 
							data-desc="<?php echo $data_rprod[description] ?>" 
							data-idbloque-talla="pdt<?php echo $p_id ?>" 
							data-precio="<?php echo $precio_catalogo; ?>">
								<i class="fa fa-hand-o-up" title="Vista rápida"></i><span class="list-mode">Vista rápida</span>
							</div>
						</div>
					</th>
					<th width="33%">
						<div class="data-product-catalogue">
							<span class="price_sale"><?php echo $precio_catalogo; ?></span>
						</div>	
					</th>
				</tbody>
				
			</table>
		</div>

		

		





		</li>
	</ul>
</li>
<div id="quick-shop-modal<?php echo $iddet?>" class="modal in qshop-modal" role="dialog" aria-hidden="false" tabindex="-1" data-width="800">
			<div class="modal-backdrop in" style="height: 742px;">
			</div>
			<div class="modal-dialog rotateInDownLeft animated">
				<div class="modal-content">
					<div class="modal-header">
						<i class="close fa fa-times btooltip" data-toggle="tooltip" data-placement="top" title="" data-dismiss="modal" aria-hidden="true" data-original-title="Cerrar"></i>
					</div>
					<div class="modal-body">
						
						<div class="quick-shop-modal-bg" style="display: none;">
						</div>
						<div class="row">
							<div class="col-md-12 product-image">
								<div id="quick-shop-image" class="product-image-wrapper">
									<a class="main-image">
										<img id="modal_img_prod" class="img-zoom img-responsive image-fly" src="assets/images/1_grande.jpg" data-zoom-image="./assets/images/1.jpg" alt=""/></a>
									
									<div id="gallery_main_qs" class="product-image-thumb hidden">
										<a class="image-thumb active" href="assets/1images/.html" data-image="./assets/images/1_grande.jpg" data-zoom-image="assets/images/1.html"><img src="assets/images/1_compact.jpg" alt=""/></a>
										<a class="image-thumb" href="assets/images/2.html" data-image="./assets/images/2_grande.jpg" data-zoom-image="assets/images/2.html"><img src="assets/images/2_compact.jpg" alt=""/></a>
										<a class="image-thumb" href="assets/images/3.html" data-image="./assets/images/3_grande.jpg" data-zoom-image="assets/images/3.html"><img src="assets/images/3_compact.jpg" alt=""/></a>
										<a class="image-thumb" href="assets/images/4.html" data-image="./assets/images/4_grande.jpg" data-zoom-image="assets/images/4.html"><img src="assets/images/4_compact.jpg" alt=""/></a>
										<a class="image-thumb" href="assets/images/5.html" data-image="./assets/images/5_grande.jpg" data-zoom-image="assets/images/5.html"><img src="assets/images/5_compact.jpg" alt=""/></a>
										<a class="image-thumb" href="assets/images/6.html" data-image="./assets/images/6_grande.jpg" data-zoom-image="assets/images/6.html"><img src="assets/images/6_compact.jpg" alt=""/></a>
									</div>

								</div>
							</div>
							<div class="col-md-12 product-information">
								<h1 id="quick-shop-title"><span><a href="#!">Nombre del producto</a></span></h1>
								<div id="quick-shop-infomation" class="description">
									<div id="quick-shop-description" class="text-left">
										<p> Descripción del producto </p>
									</div>
								</div>
								<div id="quick-shop-container">
									<div id="quick-shop-data-products" class="relative text-left row">
										<div class="col-md-12">
											<span class="control-label">País: </span><span id="qs-pais"></span>
										</div>
										<div class="col-md-12">
											<span class="control-label">Material: </span><span id="qs-material"></span>
										</div>
									</div>
									<div id="quick-shop-data-products" class="relative text-left row">
										<div class="col-md-12">
											<span class="control-label">Color: </span><span id="qs-color"></span>
										</div>
										<div class="col-md-12">
											<span class="control-label">Baño: </span><span id="qs-bano"></span>
										</div>
									</div>
									
									<div id="quick-shop-price-container" class="detail-price">
										<span class="control-label">Precio: </span>
										<span id="modal_price_prod" class="price_sale">$25.99</span>
									</div>
									<div class="quantity-wrapper clearfix row">
										<div class="col-md-4">
											<label class="wrapper-title">Talla</label>
										</div>
										<div class="col-md-5">
											<label class="wrapper-title">Peso</label>
										</div>
										<div class="col-md-5">
											<label class="wrapper-title">Precio</label>
										</div>
										<div class="col-md-5">
											<label class="wrapper-title">Cantidad</label>
										</div>
										<div class="col-md-5">
											<label class="wrapper-title">Agregar</label>
										</div>
									</div>
									<!-- Selección de cantidades y agregar a carrito -->
									<div id="qs-data-tallas">
										<div id="pdt<?php echo $p_id ?>" class="hidden">
											<?php foreach ( $data_rprod["sizes"] as $t ) { ?>
												
												<form id="itemcart<?php echo $iddet.$t[idtalla] ?>" method="post" class="variants frm-scart">
													<div class="quantity-wrapper clearfix row">
														<div class="col-md-4">
															<div class="wrapper"> <?php echo $t["talla"]." ".$t["unidad"]; ?> </div>
														</div>
														<div class="col-md-5">
															<div class="wrapper"> <?php echo $t["peso"]." gr"; ?> </div>
														</div>
														<div class="col-md-5">
															<div class="wrapper"> <?php echo $t["precio"]." $"; ?> </div>
														</div>
														<div class="col-md-5">
															<div class="wrapper">
																<input id="qsm<?php echo $iddet.$t[idtalla] ?>" class="form-control qinp" maxlength="3" 
																size="3" name="quantity" onkeypress="return soloNumeros(event)" value="1">
															</div>
														</div>
														<div class="col-md-5">
															<div class="wrapper modal-addtocart"> 
																<a class="action btn btn-1 add-to-cart" data-frmtrg="itemcart<?php echo $iddet.$t[idtalla] ?>">
																	<i class="fa fa-shopping-cart"></i> 
																</a> 
															</div>
														</div>
													</div>
													<div class="data_cart_modal hidden">
												    	<input type="hidden" name="idicart" 				value="<?php echo $iddet."-".$t[idtalla] ?>">
												    	<input type="hidden" name="idproducto" 				value="<?php echo $p_id; ?>">
												    	<input type="hidden" name="iddetalle" 				value="<?php echo $iddet; ?>">
												    	<input type="hidden" name="nombre_producto" 		value="<?php echo $data_rprod[name] ?>">
												    	<input type="hidden" name="descripcion_producto" 	value="<?php echo $data_rprod[description]; ?>">
												    	<input type="hidden" name="img_producto" 	    	value="<?php echo $purl.$img ?>">
												    	<input type="hidden" name="seltalla" 				value="<?php echo $t[talla] ?>">
												    	<input type="hidden" name="idseltalla" 				value="<?php echo $t[idtalla] ?>">
												    	<input type="hidden" name="unit_price" 				value="<?php echo $t[precio] ?>">
												    </div>
												</form>
											<?php } ?>
										</div>
									</div>

									<div id="alert-msgs-notif" class="col-md-24 cart-alert">
										<div class="alert alert-danger">
											<button type="button" class="close btooltip close_alert" data-toggle="tooltip" 
											data-placement="top" title="Cerrar" data-trgclose="alert-msgs-notif" 
											data-original-title="Cerrar">×</button>
											<div class="errors">
												<ul> <div id="body_msg_cart"></div> </ul>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>