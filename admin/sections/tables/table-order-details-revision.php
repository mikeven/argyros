<form id="revision_pedido" data-parsley-validate class="form-horizontal form-label-left" method="post">
  <input id="idpedido" type="hidden" value="<?php echo $orden['id']; ?>">
  <div id="leyenda" align="right">
      <i class="fa-circle fa iley_dsp"></i> Retirado por disponibilidad
      | <i class="fa-circle fa iley_cli"></i> Retirado por cliente
      | <div class="leyenda_prd_dsuso"></div> Producto en desuso
  </div>
  <div id="leyenda" align="left">
      <i class="fa-eye fa"></i> Pedido en revisión 
  </div>
  <table id="datatable_do" class="table table-bordered">
    <thead>
      <tr>
        <th>N°</th>
        <th> </th>
        <th>Producto</th>
        <th class="tx_al_c">Cant. Solic.</th>
        <th class="dcol" width="80">Disp</th>
        <th class="tx_al_c">Precio unit</th>
        <th class="tx_al_c">Total</th>
        <th class="tx_al_c">Peso</th>
        <th class="dcol"></th>
        <th class="dcol"></th>
        <th class="dcol"></th>
      </tr>
    </thead>

    <tbody>
      <?php
        $item_nro         = 0;
        foreach ( $dorden as $r ) {
          $item_nro++;
          $clase_item     = "item_orden";
          $clase_pcol     = "";
          $total_item     = $r["quantity"] * $r["price"];
          $tot_peso_item  = obtenerTotalPesoItemOrden( $r, $orden["estado"] );
          
          $cant_inicial   = $r["quantity"];
          $regrev = $r["id"].",".$r['disponible'].",".$r["revision"];
          if( $r["revision"] ) 
            $cant_inicial = $r['disponible'];

          if( $r["desuso"] == true ) 
            $clase_pcol = "prd_dsuso";             // Producto en desuso

          $lnk_p = "product-data.php?p=".$r["product_id"]."#".$r["product_detail_id"];
      ?>
      <tr class="<?php echo $clase_item; ?>">
        
        <td align="center"><?php echo $item_nro ?></td>
        <td align="center">

          <a href='#!' class="pop-img-p" data-toggle="modal" 
            data-src="<?php echo $r['imagen'] ?>" data-target="#img-product-pop">
            <img src="<?php echo $r['imagen'] ?>" width="30">
          </a>
          
        </td>

        <td class="<?php echo $clase_pcol ?>">
          <a target="_blank" href="<?php echo $lnk_p; ?>">
            <?php echo "P:".$r["product_id"]." - ".$r["producto"]." (#".$r["product_detail_id"].")"." | "."Talla: ".$r["talla"]; ?>
          </a>
          <div align="left" title="Ubicación"><i class="fa fa-archive"></i> <?php echo $r["ubicacion"]; ?></div>
        </td>
        
        <td id="qcd<?php echo $r['id'] ?>" align="center">
          <?php echo $r["quantity"]; //Cantidad solicitada ?>
        </td>
        
        <td class="dcol">
          <!-- Cantidad modificada -->
          <input id="cd<?php echo $r['id'] ?>" name="cant" class="qdisp_orden" type="text" disabled 
          onKeyPress="return isIntegerKey(event);" value="<?php echo $r['disponible'] ?>">

          <!-- Peso ítem -->
          <input id="pesoi<?php echo $r['id'] ?>" type="hidden" value="<?php echo $r['peso']; ?>">
          
          <!-- Cantidad solicitada -->
          <input class="qini" id="qocd<?php echo $r['id'] ?>" type="hidden" 
          data-ti="ti<?php echo $r['id']; ?>" value="<?php echo $cant_inicial ?>">
          
          <!-- ? -->
          <input id="vacd<?php echo $r['id'] ?>" type="hidden" value="0">

          <!-- Registro de revisión: id-det-orden, cant, status -->
          <input id="rrcd<?php echo $r['id'] ?>" name="regrev[]" type="hidden" value="<?php echo $regrev ?>">

        </td>
        <td align="right">
          $<span id="mntqocd<?php echo $r['id'] ?>"> <?php echo $r["price"]; ?> </span>
        </td>
        <td align="right">
          $<span id="ti<?php echo $r['id'] ?>"> <?php echo $total_item; ?> </span>
        </td>
        <td align="right">
          <span id="tpi<?php echo $r['id'] ?>"> <?php echo $tot_peso_item; ?> </span>gr
        </td>
        
        <td align="center" class="dcol">
          <i data-c="!0" data-t="cd<?php echo $r['id'] ?>" data-sr="disp" 
          class="fa fa-check i-rev cd<?php echo $r['id'] ?> <?php echo activarIconoRevision( $r['revision'], "disp" ); ?>" 
          title="Disponible"></i>
        </td>
        <td align="center" class="dcol">
          <i data-c="0" data-t="cd<?php echo $r['id'] ?>" data-sr="nodisp" 
          class="fa fa-times <?php echo activarIconoRevision( $r['revision'], "nodisp" ); ?> i-rev cd<?php echo $r['id'] ?>" 
          title="No disponible"></i>
        </td>
        <td align="center" class="dcol">
          <i id="icd<?php echo $r['id'] ?>" data-c="*" data-t="cd<?php echo $r['id'] ?>" data-sr="modif"
          class="fa fa-exclamation <?php echo activarIconoRevision( $r['revision'], "modif" ); ?> i-rev cd<?php echo $r['id'] ?>" 
          title="Cambiar cantidad"></i>
        </td>

      </tr>
      <?php } ?>
    </tbody>
  </table>

  <div id="panel_revision_pedido" class="dcol">
    <hr>
    <div class="accion_observaciones">
      <textarea id="revision_obs" class="form-control" rows="3" placeholder="Nota" name="nota_revision"></textarea>
    </div>
    <div id="area_rsp_pedido" class="form-group">
        <a href="#!">
            <button id="resp_pedido" type="button" class="btn btn-info btn-xs">Enviar respuesta</button>
        </a> 
    </div>
  </div>
</form>