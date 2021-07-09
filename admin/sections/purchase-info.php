<div class="form-group">
    <label class="control-label">Orden: </label> <?php echo "#".$orden["id"]; ?>
</div>
<div class="form-group">
    <label class="control-label">Fecha: </label> <?php echo $orden["fecha"]; ?>
</div>

<div class="form-group">
    <label class="control-label">Ítems: </label> <?php echo count( $ids_detalles_oc ); ?>
</div>
<div class="form-group">
    <label class="control-label">Cantidades: </label> 
    <?php echo $totales["cant"]." ( $peso_aprox gr apróx. )"; ?>
</div>

<hr>
<form id="frm_nota_oc" data-parsley-validate class="form-horizontal form-label-left" 
action="database/data-purchase.php?e_comment" method="post">
    <input type="hidden" name="idorden" value="<?php echo $ido ?>">
    <label class="control-label">Comentario: </label> 
    <div class="form-group">
        <textarea class="form-control" placeholder="Comentario" 
        name="comentario"><?php echo $orden["comentario"]; ?></textarea>
    </div>
    <div class="form-group">
        <div align="center">
            <button type="submit" class="btn btn-info btn-xs">Guardar</button>
        </div> 
    </div>
</form>
<hr>

<div class="form-group">
    <label class="control-label">Proveedor: </label> 
    <a href="provider.php?id=<?php echo $orden['idpvd'] ?>" target="_blank">
        <?php echo "#".$orden["idpvd"]; ?>
        <?php echo $orden["nombre"]." ".$orden["numero"]; ?>
    </a>
</div>

<hr>

<?php include( "sections/purchase-options.php" ); ?>

<div class="form-group">
    <a href="purchase-print.php?purchase-id=<?php echo $orden['id'] ?>" 
        class="btn btn-app" target="_blank">
      <i class="fa fa-file-text-o"></i> Imprimir
    </a>
</div>

<div id="res_serv"></div>