<table class="table-hover">
	<thead>
		<tr>
			<th width="10%">
				Orden
			</th>
			<th class="date" width="30%">
				Fecha
			</th>
			<th width="20%">
				Status
			</th>
			<th class="total" width="20%">
				Total
			</th>
			<th class="total" width="20%">
				Total Peso
			</th>
		</tr>
	</thead>
	<tbody>
		<?php 
			$no = 0;
			foreach ( $ordenes as $orden ) {
				$det_o 		= obtenerDetalleOrden( $dbh, $orden["id"] );
				$total_o 	= calcularTotalOrden( $orden, $det_o );
				$total_p 	= obtenerPesoTotalOrden( $orden, $det_o );

				if( $orden["leido"] == "no-leido" ) $ctable = "hlighted"; else $ctable = "";
		?>
			<tr class="<?php echo $ctable; ?>">
				<td>
					<a href="order.php?orderid=<?php echo $orden["id"] ?>">#<?php echo $orden["id"] ?>
					</a>
				</td>
				<td>
					<span class="note">
						<a href="order.php?orderid=<?php echo $orden["id"] ?>">
							<?php echo $orden["fecha"] ?>
						</a>
					</span>
				</td>
				<td>
					<?php if ( $orden["estado"] == "revisado" ){ ?>
					<span class="hltext">
						<a href="order.php?orderid=<?php echo $orden["id"] ?>">
							<?php echo "<b>".$orden["estado"]."<b>"; ?>
						</a>
					</span>
					<?php } else {?>
						<span class="note">
						<a href="order.php?orderid=<?php echo $orden["id"] ?>">
							<?php echo $orden["estado"]; ?>
						</a>
						</span>
					<?php } ?>
				</td>
				
				<td>
					<span class="note">$<?php echo number_format( $total_o, 2, ".", " " )?></span>
				</td>
				<td>
					<span class="note"><?php echo number_format( $total_p, 2, ".", " " ) ?> gr</span>
				</td>
			</tr>
		<?php $no++; } ?>
	</tbody>
</table>