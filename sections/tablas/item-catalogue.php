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
			<a class="title-5" href="<?php echo $urlp; ?>" target="_blank" style="font-size: 13px;">
				<?php echo $titulo_p; ?>
			</a>
		
			<div style="text-align: right;" class="data-product-catalogue">
				<span class="price_sale"><?php echo $precio_catalogo; ?></span>
			</div>
			<div style="text-align: left;" class="data-product-catalogue">
				<div><span class="weight_catalogue">Peso: <?php echo $peso_catalogo; ?></span></div>
				<span class="sizes_catalogue">Tallas: <?php echo $tallas_catalogo; ?></span>
			</div>
		</div>
		
		<div class="list-mode-description">
			 <?php echo $data_rprod["description"] ?>
		</div>
		
		<div class="hover-appear hidden_" style="bottom: 15px;">
			<div class="product-ajax-qs hidden-xs hidden-sm hidden_">
				<div data-handle="curabitur-cursus-dignis" data-target="#quick-shop-modal" class="quick_shop" data-toggle="modal">
					<i class="fa fa-eye" title="Vista rápida"></i><span class="list-mode">Vista rápida</span>
				</div>
			</div>
		</div>

		</li>
	</ul>
</li>