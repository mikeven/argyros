<?php if ( $orden["estado"] == "pendiente" ) { ?>
    <hr>
    <div class="form-group btn_accion_pedido">
        <a href="#!">
            <button id="r_pedido" type="button" class="btn btn-info btn-xs">Revisar</button>
        </a> 
    </div>

    <div class="form-group btn_accion_pedido" style="margin-left:20px;">
        <a href="#!">
            <button id="cnf_pedido" type="button" 
            class="btn btn-success btn-xs" data-toggle="modal" 
            data-target="#confirmar-accion">Confirmar</button>
        </a> 
    </div>
    <div class="form-group btn_accion_pedido" style="margin-left:20px;">
        <a href="#!">
            <button id="can_pedido" type="button" 
            class="btn btn-danger btn-xs" data-toggle="modal" 
            data-target="#confirmar-accion">Cancelar</button>
        </a> 
    </div>

<?php } ?>

<!-- CONFIRMACIÓN POSTERIOR A REVISIÓN -->
<?php if ( $orden["estado"] == "revisado" ) { ?>
    <div class="form-group btn_accion_pedido" style="margin-left:20px;">
        <a href="#!">
            <button id="cnf_pedido" type="button" 
            class="btn btn-success btn-xs" data-toggle="modal" 
            data-target="#confirmar-accion">Confirmar</button>
        </a>
        <input id="post_rev" type="hidden" value="1"> 
    </div>
<?php } ?>
<!-- CONFIRMACIÓN POSTERIOR A REVISIÓN -->

<?php if ( $orden["estado"] == "confirmado" ) { ?>
    <hr>

    <div class="accion_observaciones">
      <textarea id="admin_obs" class="form-control" rows="3" placeholder="Observaciones" name="observaciones"></textarea>
    </div>

    <div class="form-group btn_accion_pedido">
        <a href="#!">
            <button id="e_pedido" type="button" 
            class="btn btn-info btn-xs" data-toggle="modal" 
            data-target="#confirmar-accion">Marcar como entregado</button>
        </a> 
    </div>
<?php } ?>