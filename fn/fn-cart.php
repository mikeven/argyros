<?php 
	/* Argyros - Funciones de carrito de compra */
	/* ----------------------------------------------------------------------------------- */
	/* ----------------------------------------------------------------------------------- */
	/* ----------------------------------------------------------------------------------- */

	/*Estructura de datos de ítem de carrito de compra */
	/*
	[quantity] 					: cantidad (int)
    [idicart] 					: iddetalle-idtalla (str)
    [idproducto] 				: id de producto (int)
    [iddetalle] 				: id de detalle (int)
    [nombre_producto]			: nombre de producto (str)
    [descripcion_producto] 		: descripción de producto (str)
    [img_producto] 				: url de imagen (str)
    [seltalla] 					: talla de detalle (str)
    [idseltalla] 				: id de talla de detalle (int)
    [unit_price] 				: precio unitario (float)
    [subtotal] 					: monto ítem {cant x precio unit}(float)
	*/

	function imprimirCarrito(){
		$c = $_SESSION["cart"];
		foreach ( $c as $e ) {
			echo print_r($e)."<br>";
		}
	}
	/* ----------------------------------------------------------------------------------- */
	function vaciarCarrito(){
		//Reinicia el vector de sesión del carrito de compra
		$_SESSION["cart"] = array();
		guardarEstadoCarrito( $_SESSION["cart"], "../fn/" );
	}
	/* ----------------------------------------------------------------------------------- */
	function eliminarItemCarrito( $pos ){
		//Elimina un item de la sesión de carrito de compra
		unset( $_SESSION["cart"][$pos] );
	}
	/* ----------------------------------------------------------------------------------- */
	function agregadoACarrito( $idp, $iddet ){
		// Devuelve verdadero si un producto se encuentra agregado al carrito de compra 
		// dado por id de detalle e id de producto
		$en_carrito = false;
		$carrito 	= $_SESSION["cart"];

		foreach ( $carrito as $key => $item ) {
			if( $item["idproducto"] == $idp && $item["iddetalle"] == $iddet ){
				$en_carrito = true; break;	
			}
		}

		return $en_carrito;
	}
	/* ----------------------------------------------------------------------------------- */
	function obtenerPosicionItem( $id_item ){
		//Devuelve la posición del item de carrito dado su id (id:iddetalle-idtalla)
		
		$carrito = $_SESSION["cart"];
		$pos = -1;
		foreach ( $carrito as $key => $item ) {
			if( $item["idicart"] == $id_item ){
				$pos = $key; break;	
			}
		}
		return $pos;
	}
	/* ----------------------------------------------------------------------------------- */
	function quitarCantidadesCero( $cart ){
		// Devuelve el carrito sin los ítems con cantidades en cero.
		$pos = -1;
		foreach ( $cart as $index => $item ) {
			if( $item["quantity"] == 0 )
				eliminarItemCarrito( $index );	
		}

		return $_SESSION["cart"];
	}
	/* ----------------------------------------------------------------------------------- */
	function obtenerTotalItem( $item ){
		//Devuelve el monto de un ítem de carrito de compra
		
		return $item["quantity"] * $item["unit_price"];
	}
	/* ----------------------------------------------------------------------------------- */
	function obtenerMontoTotalCarritoCompra(){
		//Devuelve el monto total del carrito de compra

		$carrito = $_SESSION["cart"];
		$total_cart = 0.00;

		foreach ( $carrito as $item )	
			$total_cart += obtenerTotalItem( $item ); 
		return $total_cart;
	}
	/* ----------------------------------------------------------------------------------- */
	function obtenerCantidadTotalCarritoCompra(){
		//Devuelve total de cantidades del carrito de compra

		$carrito = $_SESSION["cart"];
		$total_cant = 0;

		foreach ( $carrito as $item )	
			$total_cant += $item["quantity"]; 
		return $total_cant;
	}
	/* ----------------------------------------------------------------------------------- */
	function escribirItem( $n, $base_i, $item ){

		//print_r($item);
		//Asigna valores de un item a la plantilla del carrito 
		
		$base_i = str_replace( "{n_i}", $n, $base_i );							//id elemento contenedor
		$base_i = str_replace( "{idi}", $item["idicart"], $base_i );			//id item carrito
		$base_i = str_replace( "{idproducto}", $item["idproducto"], $base_i );
		$base_i = str_replace( "{iddetalle}", $item["iddetalle"], $base_i );
		$base_i = str_replace( "{nombre}", $item["nombre_producto"], $base_i );
		//$base_i = str_replace( "{descripcion}", $item["descripcion_producto"], $base_i );
		$base_i = str_replace( "{img}", $item["img_producto"], $base_i );
		$base_i = str_replace( "{cantidad}", $item["quantity"], $base_i );
		$base_i = str_replace( "{talla}", $item["seltalla"], $base_i );
		$base_i = str_replace( "{precio}", number_format( $item["unit_price"], 2, ".", "," ), $base_i );
		$base_i = str_replace( "{stotal}", number_format( $item["subtotal"], 2, ".", "," ), $base_i );
		
		return $base_i;
	}
	/* ----------------------------------------------------------------------------------- */
	function mostrarCarrito( $carrito ){
		//Envía el contenido del carrito de compra para imprimirse
		echo json_encode( $carrito );	
	}
	/* ----------------------------------------------------------------------------------- */
	function guardarEstadoCarrito( $carrito, $dir ){
		// Guarda el contenido del carrito de compra en el archivo del usuario en sesión
		$filename = PFXCARTFILE.$_SESSION["user"]["id"];

		$json_string = json_encode( $carrito );
		$file = $dir."ckfiles/".$filename.".json";
		file_put_contents( $file, $json_string );
	}
	/* ----------------------------------------------------------------------------------- */
	function eliminarArchivoCarrito(){
		// Elimina el archivo del carrito de compra asociado al usuario en sesión
		include( "../fn/fn-constants.php" );

		$filename = PFXCARTFILE.$_SESSION["user"]["id"];
		if( file_exists( "../fn/ckfiles/".$filename.".json" ) )
			unlink( "../fn/ckfiles/".$filename.".json" );
	}
	/* ----------------------------------------------------------------------------------- */
	function obtenerContenidoCarritoCompra( $param ){
		//Obtiene los ítems de la sesión de compra y los organiza en las vistas del contenido del carrito

		$plantilla_item_dsp = file_get_contents( "../fn/cart-item.html" );		//Plantilla display desplegable
		$plantilla_item_pag = file_get_contents( "../fn/cart-item-page.html" );	//Plantilla página carrito

		$cart 		= ""; 		$lpag 		= ""; 
		$ni 		= 0; 		$total_cart = 0.00; 	$total_cant = 0;
		$carrito 	= array();

		if( isset( $_SESSION["cart"] ) ){
			
			if( $param == "" )
				actualizarContenidoCarritoArchivo();
			
			$carrito = $_SESSION["cart"];
			if( $param != "" )
				guardarEstadoCarrito( $carrito, "" );
		}

		foreach ( $carrito as $item ) {
			
			$content_item_dsp 	= escribirItem( $ni, $plantilla_item_dsp, $item );
			$content_item_pag 	= escribirItem( $ni, $plantilla_item_pag, $item );
			$cart 				.= $content_item_dsp;
			$lpag 				.= $content_item_pag; 
			$total_cart 		+= obtenerTotalItem( $item );
			$total_cant 		+= $item["quantity"];  
			$ni++; 
		}

		$res["cart"] = $cart;
		$res["lpag"] = $lpag;
		$res["total_price"] = number_format( $total_cart, 2, '.', ',' );
		$res["total_cant"] = $total_cant;
		$res["nitems"] = count( $carrito );

		mostrarCarrito( $res );	
	}
	/* ----------------------------------------------------------------------------------- */
	function actualizarItemDuplicadoCarrito( $item, $index ){
		//Actualiza el ítem de carrito: suma cantidad previa con la actual
		$_SESSION["cart"][$index]["quantity"] += $item["quantity"];
	}
	/* ----------------------------------------------------------------------------------- */
	function actualizarCantidadItemCarrito( $index, $cant ){
		//Actualiza el ítem de carrito: sustituye el valor de cantidad
		$precio = $_SESSION["cart"][$index]["unit_price"];
		$_SESSION["cart"][$index]["quantity"] = $cant;
		$_SESSION["cart"][$index]["subtotal"] = $cant * $precio;
	}
	/* ----------------------------------------------------------------------------------- */
	function agregarItemCarrito( $item ){
		//Agregar el item de producto al carrito de compra

		$carrito = $_SESSION["cart"];
		$carrito[] = $item;
		$_SESSION["cart"] = $carrito;

		//obtenerCarritoCompra();
	}
	/* ----------------------------------------------------------------------------------- */
	function actualizarContenidoCarritoArchivo(){
		//Actualiza el contenido del carrito desde la carga del archivo previamente guardado
		$filecart			= "[]";
		$filename 			= PFXCARTFILE.$_SESSION["user"]["id"];
		$ruta_archivo		= "ckfiles/".$filename.".json";

		if( file_exists( $ruta_archivo ) )
			$filecart 			= file_get_contents( $ruta_archivo );
		
		$_SESSION["cart"] 	= json_decode( $filecart, true );
	}
	/* ----------------------------------------------------------------------------------- */
	//Async: Obtiene el contenido del carrito previamente guardado y lo carga en la variable de sesión
	if( isset( $_POST["get_filecart"] ) ){
		//session_start();
		/*
		$filename 			= PFXCARTFILE.$_SESSION["user"]["id"];

		$filecart 			= file_get_contents( "ckfiles/".$filename.".json" );
		$cart 				= json_decode( $filecart, true );
		$_SESSION["cart"] 	= $cart;
		
		echo $filename;
		
		print_r($cart);
		echo "--";
		print_r($_SESSION["cart"]);*/
	}
	/* ----------------------------------------------------------------------------------- */
	//Async: recepción de ítem de compra para agregar a carrito
	if( isset( $_POST["item_cart"] ) ){
		session_start();

		parse_str( $_POST["item_cart"], $item );
		$index = obtenerPosicionItem( $item["idicart"] );
		$item["subtotal"] = obtenerTotalItem( $item );
		
		if( $index == -1 )	//Elemento ya encontrado en el carrito de compra
			agregarItemCarrito( $item );
		else
			actualizarItemDuplicadoCarrito( $item, $index );

	}
	/* ----------------------------------------------------------------------------------- */
	//Async: solicitud para la eliminación de un ítem de carrito
	if( isset( $_POST["delitem_c"] ) ){
		session_start();

		$nitem = $_POST["delitem_c"];
		$posicion = obtenerPosicionItem( $nitem );
		eliminarItemCarrito( $posicion );
		echo $posicion;
	}
	/* ----------------------------------------------------------------------------------- */
	//Async: solicitud para obtener el contenido del carrito de compra
	if( isset( $_POST["get_cart"] ) ){
		session_start();
		include ('fn-constants.php');
		include("../database/bd.php");
		include("../database/data-products.php");
		include("../database/data-user.php");
		$param = $_POST["param"];

		actualizarPreciosCarrito( $dbh );
		obtenerContenidoCarritoCompra( $param );
	}
	/* ----------------------------------------------------------------------------------- */
	//Async: solicitud para modificar cantidad en ítem de carrito de compra
	if( isset( $_POST["mitem_c"] ) ){
		session_start();
		$posicion = obtenerPosicionItem( $_POST["mitem_c"] );
		actualizarCantidadItemCarrito( $posicion, $_POST["q"]);
	}
	/* ----------------------------------------------------------------------------------- */
	//Inicialización del carrito de compras
	if( !isset( $_SESSION["cart"] ) ){
		$_SESSION["cart"] = array();				
	}else{
		//$_SESSION["cart"] = array();
	}
	/* ----------------------------------------------------------------------------------- */
?>