<div id="parent_address_226447297" class="address_table">
										  
  <div id="view_address_226447297" class="customer_address view_address clearfix">
	
	<?php if( isset( $orden ) ) { ?>
	<div class="address_info col-md-24">
		
		<div class="info">

			<?php echo $orden["icono_e"]; ?>
			<input type="hidden" id="accion_orden" value="">
			<input type="hidden" id="idusuario" value="<?php echo $_SESSION["user"]["id"]; ?>">
			<input type="hidden" id="idorden" name="id_orden" value="<?php echo $orden["id"]?>">
		
			<div style="margin-left:60px">

				<span class="address-group">
					<span class="date">Fecha: <?php echo $orden["fecha"]?></span>
				</span>
			
				<div>Estado: <span class="tx_sta_pedido"><?php echo $orden["estado"] ?></span></div>
				
				<hr>
				
				<?php if( $orden["estado"] == "pendiente" ) { ?>
				<div>
					Total: <span class="data_total_orden">$<?php echo $orden["total"] ?></span>
				</div>
				<?php } ?>
				
				<?php if( $orden["estado"] == "revisado" || 
						  $orden["estado"] == "confirmado" ) { ?>
				<div>
					Total: <span class="data_total_orden">$<?php echo $orden["total_ajuste"]; ?></span>
					<input type="hidden" id="monto_orden_cnf" value="<?php echo $orden[total_ajuste]; ?>">
				</div>
				<?php } ?>

				<div>Ítems: <span class="data_total_orden"><?php echo $orden["nitems"]?></span></div>
				
				<div>
					Peso Total: 
					<span class="data_total_orden"><?php echo number_format( $orden["tpeso"], 2, ".", " " )?> gr </span>
				</div>
				
				<hr>
				<?php if( $orden["nota_compra_cliente"] != "" ) { ?>
					<div><b>Nota del cliente: </b></div>
					<div><?php echo $orden["nota_compra_cliente"]?> </div>
				<?php } ?>
				
				<?php if( $orden["estado"] == "revisado" && $orden["revision_note"] != "" ) { ?>
					<div><b>Obs. en revisión: </b></div>
					<div><?php echo $orden["revision_note"]?> </div>
				<?php } ?>
				
				<?php if( $orden["estado"] == "confirmado" || 
						  $orden["estado"] == "entregado" ) { ?>
					<div><b>Obs. del cliente: </b></div>
					<div><?php echo $orden["client_note"]?> </div>
				<?php } ?>
				
				<?php if( $orden["estado"] == "entregado" ) { ?>	
					<div><b>Obs. del administrador: </b></div>
					<div><?php echo $orden["admin_note"]?> </div>
				<?php } ?>
			
			</div>
		</div>
		
	</div>
	<div id="tool_address_1940927491" class="address_actions col-md-24">
		<?php if( $orden["estado"] == "pendiente" ) { ?>
			<span id="_a_cancel_o" class="action_delete">
				<a id="a_cancel_o" href="#!" class="lnco" title="Cancelar" 
				data-cnt="_a_cancel_o" data-sta="cancelado">
					<i class="fa fa-times"></i><span>Cancelar</span>
				</a>
			</span>
		<?php } ?>
		<span id="cn_co" class="action_delete action_confirm">
			<a id="a_cancel_conf" href="#!" title="Cancelar">
				<span>Confirmar</span>
			</a> &nbsp; | &nbsp;
			<a id="cancel_cancel" href="#!" title="Cancelar" data-trg="">
				<span>Cancelar</span>
			</a>
		</span>
		<?php //if( $orden["estado"] == "cancelado" ) { ?>
			<span id="_a_cancel_ro" class="action_delete hidden">
				<a id="a_react_o" href="#!" class="lnco" title="Reactivar"  
				data-cnt="_a_cancel_ro" data-sta="pendiente">
					<i class="fa fa-history"></i><span> Reactivar</span>
				</a>
			</span>
		<?php //} ?>
	</div>
	<?php } ?>
  </div>
</div>