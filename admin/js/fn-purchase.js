// JavaScript Document
/*
 * fn-purchase.js
 *
 */
/* --------------------------------------------------------- */
function guardarOrdenCompra( idpvd ){
    // Invoca el llamado a registrar nueva orden de compra
    $.ajax({
        type:"POST",
        url:"database/data-purchase.php",
        data:{ guardar_oc: idpvd },
        success: function( response ){
            console.log( response );
            res = jQuery.parseJSON( response );
            if( res.exito == 1 ){
                tNotificar( "Orden de compra", res.mje, "success", 3000 );
                $( "#bot_no" + idpvd + " .boton_guardar_orden" ).fadeOut( '200', function(){
                    $( "#alerta_exito_oc" + idpvd ).show( 300 );
                });
            }
            else{
                if( res.exito == -1 )
                    tNotificar( "Orden de compra", res.mje, "error", 3000 );
                if( res.exito == -2 )
                    tNotificar( "Orden de compra", res.mje, "warning", 2200 );
            }
        }
    });
}
/* --------------------------------------------------------- */
function agregarProductoPreorden( idd ){
	// Invoca al servidor para agregar un producto a la lista pre-orden

	$.ajax({
        type:"POST",
        url:"fn/fn-purchase.php",
        data:{ agregar_prod_preorden: idd },
        success: function( response ){
        	
			res = jQuery.parseJSON( response );
			if( res.exito == 1 ){
				tNotificar( "Lista preorden", res.mje, "success", 2200 );
                $( "#oc" + idd + " i" ).addClass( "inc_lpreo" );
            }
			if( res.exito == 2 )
                tNotificar( "Lista preorden", res.mje, "info", 2200 );
			if( res.exito == 0 )
                tNotificar( "Lista preorden", res.mje, "warning", 2200 );
        }
    });
}
/* --------------------------------------------------------- */
function actualizarPreorden( param, id_d, id_t, obj, id_pvd, val ){
    // Invoca al servidor para actualizar un producto a la lista pre-orden, de acuerdo a un par??metro
    var fila = id_d+id_t;
    $.ajax({
        type:"POST",
        url:"fn/fn-purchase.php",
        data:{ act_preorden: param, idd: id_d, idt: id_t, valor: val },
        success: function( response ){
            res = jQuery.parseJSON( response );
            if( res.exito == 1 ){
                if( res.accion == "eliminar" ){
                    quitarFilaItem( fila, id_d, obj, id_pvd, param );
                }
                else
                    tNotificar( "Lista preorden", res.mje, "success", 500 );
            }else{
                tNotificar( "Lista preorden", res.mje, "warning", 1000 );
            }
        }
    });
}
/* --------------------------------------------------------- */
function actualizarVisualBotEstadoItemOC( iddo, val ){
    // Actualiza la visualizaci??n del bot??n de cambio de estatus de item detalle de orden de compra
    $( ".btn-est-" + iddo ).removeClass( "btn-warning btn-success btn-danger" );
    if( val == "recibido" )
        $( "#recibido" + iddo ).addClass( "btn-success" );
    if( val == "pendiente" )
        $( "#pendiente" + iddo ).addClass( "btn-warning" );
    if( val == "no-recibido" )
        $( "#no-recibido" + iddo ).addClass( "btn-danger" );

    chequearElementosPendientes();
}
/* --------------------------------------------------------- */
function actualizarEstadoItemOC( iddo, val ){
    // Invoca al servidor para actualizar estado de un ??tem de orden de compra
    $.ajax({
        type:"POST",
        url:"database/data-purchase.php",
        data:{ act_edo_doc: iddo, valor: val },
        success: function( response ){
            res = jQuery.parseJSON( response );
            if( res.exito == 1 ){
                tNotificar( "Orden de compra", res.mje, "success", 3000 );
                actualizarVisualBotEstadoItemOC( iddo, val );
            }
            else
                tNotificar( "Orden de compra", res.mje, "error", 3000 );
        }
    });
}
/* --------------------------------------------------------- */
function actualizarEstadoOC( ido, estado ){
    // Invoca al servidor para actualizar estado de una orden de compra  
    $.ajax({
        type:"POST",
        url:"database/data-purchase.php",
        data:{ act_st_oc: ido, valor: estado },
        success: function( response ){
            console.log( response );
            res = jQuery.parseJSON( response );
            if( res.exito == 1 ){
                $("#btn_canc").click();
                tNotificar( "Orden de compra", res.mje, "success", 3000 );
                setTimeout( function() { location.reload(); }, 5000 );
            }
            else
                tNotificar( "Orden de compra", res.mje, "error", 3000 );
        }
    });
}
/* --------------------------------------------------------- */
function actualizarNotaOC( ido, nota ){
    // Invoca al servidor para actualizar la nota de una orden de compra 
    $.ajax({
        type:"POST",
        url:"database/data-purchase.php",
        data:{ act_nota_oc: ido, valor: nota },
        success: function( response ){
            console.log( response );
            res = jQuery.parseJSON( response );
            if( res.exito == 1 ){
                $("#btn_canc").click();
                tNotificar( "Orden de compra", res.mje, "success", 3000 );
            }
            else
                tNotificar( "Orden de compra", res.mje, "error", 3000 );
        }
    });
}
/* --------------------------------------------------------- */
function vaciarListaPreorden(){
    // Invoca al servidor para vaciar la lista preorden
    $.ajax({
        type:"POST",
        url:"fn/fn-purchase.php",
        data:{ vaciar_preorden: 1 },
        success: function( response ){
            console.log( response );
            res = jQuery.parseJSON( response );
            if( res.exito == 1 ){
                tNotificar( "Lista preorden", res.mje, "success", 2200 );
                setTimeout( function() { location.reload(); }, 3000 );
            }
            else
                tNotificar( "Lista preorden", res.mje, "info", 2200 );
        }
    });
}
/* --------------------------------------------------------- */
function iniciarPopImagenesProductos(){
	// Inicializa los enlaces para mostrar las im??genes de productos en ventanas emergentes

    $("#lista_productos_tallas").on( "click", ".pop-img-p", function(){
        var img = $(this).attr("data-src");
        $("#img-preview").attr( "src", img );
    });

    $("#tabs_items_proveedores").on( "click", ".pop-img-p", function(){
        var img = $(this).attr("data-src");
        $("#img-preview").attr( "src", img );
    });

    $(".pop-img-p").on( "click", function(){
    	var img = $(this).attr("data-src");
    	$("#img-preview").attr( "src", img );
    });
    /*Pop image */
}
/* --------------------------------------------------------- */
function quitarFilaItem( fila, id_d, obj, id_pvd, param ){
    // Oculta los ??tems de las tablas identificadas por sus ids
    $("#" + fila ).fadeOut( '200', function(){
        $("#" + fila ).remove();
        
        actualizarBotonGuardarOC( param, obj );
        if( id_pvd != "" )
            calcularPreTotalesOC( id_pvd );
        
        if( contarItemsTalla( id_d ) == 0 ){
            $("#itemid" + id_d ).fadeOut( '200', function(){
                $("#itemid" + id_d ).remove();
            });
        } 
    });    
}
/* --------------------------------------------------------- */
function actualizarBotonGuardarOC( param, obj ){
    // Actualiza la habiliaci??n del bot??n guardar orden de compra despu??s de borrar ??tems
    var cant_items = $( "." + obj ).toArray().length;
    
    if( param == "eliminar_oc" )
        if( cant_items == 0 )
            $( "#" + obj ).prop( "disabled", "true" );
}
/* --------------------------------------------------------- */
function contarItemsTalla( idd ){
    // Devuelve el n??mero de tallas en la lista de pre-orden / ??rden de compra asociado a un detalle de producto
    return $(".itemt"+idd ).toArray().length;
}
/* --------------------------------------------------------- */
function cantidadesValidas( pvd ){
    // Devuelve verdadero si las cantidades de una orden son v??lidas, falso en caso contrario
    var valido = true;
    var selector_cant = "#" + pvd + " .cnt_preord";
    
    $( selector_cant ).each(function() {
        if( $( this ).val() == 0 ) valido = false;
    });

    return valido;
}
/* --------------------------------------------------------- */
function iniciarBotonConfirmacionOC( estado ){        //purchase-data.php
    //Asigna los textos de la ventana de confirmaci??n para cambio de estado de las ??rdenes de compra
    iniciarVentanaModal( "btn_confirm_oc", "btn_canc", 
                         "Estado de orden de compra", "", 
                         "??Confirma marcar orden de compra como " + estado + "?", 
                         "Confimar" );  
}
/* --------------------------------------------------------- */
function iniciarBotonVaciarPreorden(){
    //Asigna los textos de la ventana de confirmaci??n para vaciar lista preorden
    iniciarVentanaModal( "btn_vaciar_preorden", "btn_canc_vaciar", 
                         "Vaciar Lista Preorden", "", 
                         "??Confirma que desea vaciar lista preorden?", 
                         "Confirmar acci??n" );
}
/* --------------------------------------------------------- */
function desactivarBotonesEstadoItems(){
    // Activa / desactiva los botones de estado de los ??tems de orden de compra acorde al estado de la orden
    var inactivo = true;
    estado_orden_compra = $("#status_oc").val();

    if( estado_orden_compra == "confirmada" ){
        inactivo = false;
        $(".item_oc_estado .btn").prop('disabled', inactivo );
    }else{
        $(".item_oc_estado .btn").prop('disabled', inactivo );
        $( ".item_oc_estado" ).each(function(){
            $(this).removeClass( "item_oc_estado" );
        });
    }
    
}
/* --------------------------------------------------------- */
function chequearElementosPendientes(){
    // Activa / Desactiva los botones de estado de los ??tems de orden de compra
    var inactivo = false;
    $( ".st_pdt" ).each(function(){
        if( $(this).hasClass( "btn-warning" ) )
            inactivo = true;            
    });
    $("#btn_oc_recibida").prop('disabled', inactivo );
}
/* --------------------------------------------------------- */
function calcularPreTotalesOC( idpvd ){
    // 
    var total_cant      = 0;
    var total_peso      = 0.00;
    var items_oc        = $( ".cant_oc" + idpvd );

    $( items_oc ).each(function() {
        cant_item       = $( this ).val();
        total_cant      += parseInt( cant_item ); 
        peso_item       = $( this ).attr( "data-peso" );
        total_peso      += parseInt( peso_item * cant_item ); 
    });

    $( "#tpzas" + idpvd ).html( "<b>" + total_cant + "</b>" + " und." );
    $( "#tpesos" + idpvd ).html( "<b>" + total_peso.toFixed(2) + "</b>" + " gr." );
}
/* --------------------------------------------------------- */
function calcularPreTotalOrdenes(){
    // Invoca el c??lculo de totales
    var gcant = "";
    $( ".tabpvd" ).each(function() {
        calcularPreTotalesOC( $(this).val() );
    });
}
/* --------------------------------------------------------- */
function editarCantidadesItemOC( cantidades ){
    // Invoca la edici??n de la cantidad de un ??tem de orden de compra
    var items_oc    = JSON.stringify( cantidades );
    var id_oc       = $("#idordenc").val();

    $.ajax({
        type:"POST",
        url:"database/data-purchase.php",
        data:{ editar_cants: items_oc, ido: id_oc },
        beforeSend: function () {
            $( this ).prop( "disabled", true );
            $(".cnt_preord").prop( "readonly", true );
        },
        success: function( response ){
            console.log( response );
            res = jQuery.parseJSON( response );
            if( res.exito == 1 ){
                tNotificar( "Orden de compra", res.mje, "success", 2200 );
                setTimeout( function() { location.reload(); }, 3000 );
            }
            else
                tNotificar( "Orden de compra", res.mje, "info", 2200 );
        }
    });
}
/* --------------------------------------------------------- */
function editarCantidadesOC(){
    // Invoca la edici??n de todas las cantidades de una orden de compra
    var cantidades          = new Array();
    var cantidades_cero     = false;

    $( ".cnt_preord" ).each(function() {
        var item = new Object();
        item.iddoc  = $(this).attr("data-id-detoc");
        item.cant   = $(this).val();
        if( item.cant != 0 )
            cantidades.push( item );
        else
            cantidades_cero = true;
    });

    if( cantidades_cero == false )
        editarCantidadesItemOC( cantidades );
    else
        tNotificar( "Orden de compra", "No deben haber cantidades en cero", "warning", 2200 );
}
/* --------------------------------------------------------- */
function mostrarDatosOC( data ){
    // Muestra los datos de una orden de compra asociada a un producto por talla (Ventana emergente)
    $(".data_pop_oc").html("");
    $("#pop_idoc").html( data.id );
    $("#pop_ocusuario").html( data.usuario );
    $("#pop_ocfecha").html( data.fecha );
    $("#pop_occantidades").html( data.cantidades );
    $("#pop_ocnota").html( data.nota );
    $("#pop_enloc").attr( "href", data.url );
}
/* --------------------------------------------------------- */
function obtenerDatosOC( idoc, iddt, idta ){
    // Invoca los datos de una orden de compra para lista de productos por talla para preorden 
    var img_wait = "<img src='images/ajax-loader.gif' width='16' height='16'>";
    
    $.ajax({
        type:"POST",
        url:"database/data-purchase.php",
        data:{ popdataOC: idoc, iddetalle: iddt, idtalla: idta },
        beforeSend: function () {
            $("#img_wait").html( img_wait );
            $("#tabla_hist_oc_prod").html("");
        },
        success: function( response ){
            $("#img_wait").html( "" );
            console.log(response);
            $("#tabla_hist_oc_prod").html( response );
            tablaHistorial();
        }
    });
}

/* --------------------------------------------------------- */
function tablaHistorial(){

    $('#datatable-purchist').dataTable({
      "paging": true,
      "iDisplayLength": 10,
      "lengthChange": true,
      "searching": true,
      "ordering": true,
      "info": true,
      "autoWidth": false,
      "order": [ 0, "desc" ],
      "language": {
        "lengthMenu": "Mostrar _MENU_ regs por p??gina",
        "zeroRecords": "No se encontraron resultados",
        "info": "Mostrando p??g _PAGE_ de _PAGES_",
        "infoEmpty": "No hay registros",
        "infoFiltered": "(filtrados de _MAX_ regs)",
        "search": "Buscar:",
        "paginate": {
            "first":      "Primero",
            "last":       "??ltimo",
            "next":       "Pr??ximo",
            "previous":   "Anterior"
        }
      }
    });
}
/* --------------------------------------------------------- */

$( document ).ready(function() {	
    // ============================================================================ //
    iniciarPopImagenesProductos();
    chequearElementosPendientes();
    desactivarBotonesEstadoItems();
	/* ---------------------------------------------------------------- */
	//Acci??n para invocar agregar un producto a la lista pre-orden
    $("#lista_productos_tallas").on( "click", ".selpre-o", function(){   
		agregarProductoPreorden( $(this).attr("data-idd") );
	});
	/* ---------------------------------------------------------------- */
	$(".act_preo").on( "change", function(){   
        var idd = $(this).attr("data-idd");         // id detalle de producto
        var idt = $(this).attr("data-idt");         // id talla
        var prm = $(this).attr("data-prm");         // dato a actualizar
        var pvd = $(this).attr("data-idpvd-oc");    // id de proveedor

        actualizarPreorden( prm, idd, idt, '', pvd, $(this).val() );
    });

    $("#tabs_items_proveedores").on( "change", ".act_preo", function(){ /* ??tem funcional */  
        var idd = $(this).attr("data-idd");         // id detalle de producto
        var idt = $(this).attr("data-idt");         // id talla
        var prm = $(this).attr("data-prm");         // dato a actualizar
        var pvd = $(this).attr("data-idpvd-oc");    // id de proveedor
        actualizarPreorden( prm, idd, idt, '', pvd, $(this).val() );
    });
    

    $(".act_preo_d").on( "change", function(){   
        var idd = $(this).attr("data-idd");         // id detalle de producto
        var prm = $(this).attr("data-prm");         // dato a actualizar
        actualizarPreorden( prm, idd, '', '', '', $(this).val() );
    });
    
    $("#tabs_items_proveedores").on( "click", ".quitar_item", function(){ /* ??tem funcional */
        var idd = $(this).attr("data-idd");
        var idt = $(this).attr("data-idt");
        var prm = $(this).attr("data-prm");
        var btn = $(this).attr("data-bot");
        var pvd = $(this).attr("data-idpvd-oc");
        actualizarPreorden( prm, idd, idt, btn, pvd, $(this).val() );
    });

    $("#lista_items_preorden").on( "click", ".quitar_item", function(){  
        var idd = $(this).attr("data-idd");
        var idt = $(this).attr("data-idt");
        var prm = $(this).attr("data-prm");
        var btn = $(this).attr("data-bot");
        var pvd = $(this).attr("data-idpvd-oc");
        actualizarPreorden( prm, idd, idt, btn, pvd, $(this).val() );
    });
    /* ---------------------------------------------------------------- */
    $("#ordenes_p_proveedor").on( "click", ".guardar_oc", function(){ 
        var idpvd = $(this).attr("data-idpvd");
        /*if( cantidadesValidas( "dp" + idpvd ) )
            alert("exito");//guardarOrdenCompra( idpvd );
        else{
            tNotificar( "Lista preorden", "Las cantidades en la orden no deben cero", "warning", 2200 );
        }*/
        guardarOrdenCompra( idpvd );
    });

    $("#ordenes_p_proveedor").on( "blur", ".not_preord", function(){ 
        console.log( $(this).val().length );
    });

    $(".item_oc_estado").on( "click", function(){    
        var iddo    = $(this).attr("data-iddo");
        var edo     = $(this).attr("data-valor");
        actualizarEstadoItemOC( iddo, edo );
    });

    /*.......................................................*/
    //Clic: Actualizaci??n de nota de orden de compra
    $('#act_nota_oc').on('click', function() {
        var ido     = $(this).attr( "data-idoc" );
        var nota    = $("#nota_oc").val();
        
        actualizarNotaOC( ido, nota ); 
    });

    //Clic: Cambio de estatus de ??rdenes de compra
    $('.estat_oc').on('click', function() {
        var ido     = $(this).attr( "data-idoc" );
        var estado  = $(this).attr( "data-estado" );

        iniciarBotonConfirmacionOC( estado );
        $('#btn_confirm_oc').on('click', function() {
            actualizarEstadoOC( ido, estado ); 
        });
    });
    /*.......................................................*/
    //Clic: Vaciado de lista preorden
    $("body").on( "click", "#vaciar-preorden", function(){
        iniciarBotonVaciarPreorden();
        $('#btn_vaciar_preorden').on('click', function(){
            $("#confirmar-accion .btn-canc").click();
            vaciarListaPreorden();
        });
    });

    //Clic: Habilita la opci??n de editar las cantidades de una orden de compra y el bot??n de guardar
    $("#btn_edit_cants").on( "click", function(){
        $(this).fadeToggle();
        $(".cnt_preord").prop( "readonly", false );
        $(".btn-opc-editcants").fadeToggle();
    });

    //Clic: Deshabilita la opci??n de editar las cantidades de una orden de compra y el bot??n de guardar 
    $("#btn_cancelar_edit_cants").on( "click", function(){
        $(".btn-opc-editcants").fadeToggle();
        $(".cnt_preord").prop( "readonly", true );
        $("#btn_edit_cants").fadeToggle();
    });

    //Clic: Invoca el proceso para editar las cantidades de una orden de compra 
    $("#btn_guardar_cants").on( "click", function(){
        
        editarCantidadesOC();
    });

    //Clic: Clic en enlace de OC en tabla de productos por talla para preorden 
    $("#dt-product-sizes-preorder").on( "click", ".pop-purch-data", function(){

        var idoc = $(this).attr( "data-idoc" );
        var iddt = $(this).attr( "data-iddt" );
        var idta = $(this).attr( "data-idta" );

        obtenerDatosOC( idoc, iddt, idta );
    });

});

/* --------------------------------------------------------- */