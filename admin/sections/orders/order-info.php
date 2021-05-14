<div class="form-group">
    <label class="control-label">Pedido: </label> <?php echo "#".$orden["id"]; ?>
</div>
<div class="form-group">
    <label class="control-label">Fecha: </label> <?php echo $orden["fecha_hora"]; ?>
</div>

<div class="form-group">
    <label class="control-label">Ítems: </label> <?php echo $orden["ncant_items"]; ?>
</div>

<div class="form-group">
    <label class="control-label">Peso total estimado: </label> 
    <span id="peso_total_orden">
        <?php echo number_format( $orden["tpeso"], 2, ".", " " ); ?>
    </span> gr
    <input type="hidden" id="previo_peso_orden" value="<?php echo $orden['tpeso']; ?>">
</div>

<div class="form-group">
    <label class="control-label">Total estimado: </label> 
    $<span id="monto_total_orden"><?php echo $orden["total_actualizado"]; ?></span>
    <input type="hidden" id="previo_total_orden" value="<?php echo $orden["total"]; ?>">
</div>

<div class="form-group">
    <label class="control-label">Estado: </label> <?php echo $orden["estado"]; ?>
</div>
<?php if ( $orden["procesada"] ) {?>
    <div class="form-group">
        <span>Monto inicial: $<?php echo $orden["total"]; ?></span>   
    </div> 
<?php } ?>
<hr>

<?php if( $orden["nota_compra_cliente"] != "" ) { ?>
    <div><b>Nota del cliente: </b></div>
    <div><?php echo $orden["nota_compra_cliente"]?> </div>
<?php } ?>

<?php if( $orden["estado"] == "revisado" ) { ?>
    <div><b>Observaciones de revisión: </b></div>
    <div><?php echo $orden["revision_note"]?> </div>
<?php } ?>

<?php if( $orden["estado"] == "confirmado" || $orden["estado"] == "entregado" ) { ?>
    <div><b>Observaciones del cliente: </b></div>
    <div><?php echo $orden["client_note"]?> </div>
<?php } ?>

<?php if( $orden["estado"] == "entregado" ) { ?>
    <div><b>Observaciones del administrador: </b></div>
    <div><?php echo $orden["admin_note"]?> </div>
<?php } ?>

<hr>
<div class="form-group">
    <label class="control-label">Cliente: </label> 
    <a href="client-data.php?id=<?php echo $orden['cid'] ?>" target="_blank">
        <?php echo "#".$orden["cid"]; ?>
        <?php echo $orden["nombre"]." ".$orden["apellido"]; ?>
    </a>
</div>
<div class="form-group">
    <label class="control-label">Grupo cliente: </label> 
    <?php echo $orden["grupo_cliente"]; ?>
</div>