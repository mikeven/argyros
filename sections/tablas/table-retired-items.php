<div id="items_retirados">
	<h4>Ítems Retirados</h4>
	<table class="tabla-pedido">
		<thead>
		<tr>
			<th>N°</th>
			<th> </th>
			<th>Producto</th>
			<th>Cantidad</th>
			<th>Precio unit</th>
			<th>Total</th>
			<th>Peso</th>
		</tr>
		</thead>

		<tbody>
			<?php 
			  
		      foreach ( $items_retirados as $r ) {

		        $total_item 	= $r["quantity"] * $r["price"];
		        $tot_peso_item 	= obtenerTotalPesoItemOrden( $r, $orden["estado"] );

		        $lnk_p = "product.php?id=$r[product_id]&iddet=$r[product_detail_id]";
		        $cod_dp = "#" . $r["product_id"] . " - " . $r["product_detail_id"];
		        
		    ?>
		    <tr id="ir<?php echo $r[id]; ?>" class="iretirados">
		      <td align="center"><?php echo $r["numeracion"] ?></td>
		      <td>
		      	<a href="#pop-img" class="fancybox pop-img" data-src="<?php echo $purl.$r["imagen"]; ?>">
		      		<img src="<?php echo $purl.$r["imagen"]; ?>" width="70">
		      	</a>
		      </td>
		      <td class="txa-l">
		      	<a href="<?php echo $lnk_p; ?>" target="_blank">
		      		<?php echo $r["producto"]." | "."Talla: ".$r["talla"]; ?>
		      	</a>
		      	<div align="left"><span class="detlist-id-det"><?php echo $cod_dp; ?></span></div>
		      </td>
		      <td align="center">
		      	<?php echo $r["quantity"]; ?> 
		      	(<span style="color: red"><?php echo $r["cant_rev"]; ?></span>)
		      </td>
		      <td>$<?php echo $r["price"]; ?></td>
		      <td>$<?php echo $total_item; ?></td>
		      <td><?php echo number_format( $tot_peso_item, 2, ".", " " ) ?> gr</td>

		    </tr>
		    <?php } ?>
		    
		</tbody>
	</table>
</div>