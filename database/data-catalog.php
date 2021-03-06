<?php
	/* ----------------------------------------------------------------------------------- */
	/* Argyros - Funciones de productos */
	/* ----------------------------------------------------------------------------------- */
	/* ----------------------------------------------------------------------------------- */
	/* ----------------------------------------------------------------------------------- */
	function mostrarProductosConsulta( $productos ){
		//Devuelve la estructura HTML del resultado de la consulta de productos

		$resultado = "";
		$bloque_img = file_get_contents( "../sections/image-catalog-report.php" );

		foreach ( $productos as $reg ) {
			$data_p = $reg["data"];
			$imgs 	= $reg["imagenes"];
			$idr 	= $data_p["id"]."-".$data_p["id_det"];
			
			if( isset( $imgs[0] ) ) $image = $imgs[0]["path"]; else $image = "";

			$bloque_img = file_get_contents( "../sections/image-catalog-report.php" );

			$bloque_img = str_replace( "{id}", 		$idr, 				$bloque_img );
			$bloque_img = str_replace( "{nombre}", 	$data_p["name"], 	$bloque_img );
			$bloque_img = str_replace( "{image}", 	$image, 			$bloque_img );
			$bloque_img = str_replace( "{codigo}", 	$data_p["code"], 	$bloque_img );
			
			$resultado .= $bloque_img;
		}

		return $resultado;
	}
	/* ----------------------------------------------------------------------------------- */
	function filtrarProductosConsulta( $form, $registros ){
		//Devuelve los registros que cumplen con los filtros de: peso, precio
		print_r( $registros );
	}
	/* ----------------------------------------------------------------------------------- */
	function obtenerRegistroQuery( $dbh, $q ){
		//Devuelve los registros solicitados a través de la consulta dinámica
		
		$data = mysqli_query( $dbh, $q );
		$lista = obtenerListaRegistros( $data );
		return $lista;
	}
	/* ----------------------------------------------------------------------------------- */
	function obtenerSubQueryValor( $qvalor, $valores ){
		//

		if( count( $valores ) > 0 ){
			$q = "and (";  
			$conn = " or ";
			$i = 0;
			foreach ( $valores as $v ) {
				$i++;
				$q .= $qvalor." = ".$v;
				if( count( $valores ) - $i > 0 )
				$q .= $conn; 
			}
			$q .= ")";
		} 
		else $q = "";

		return $q;
	}
	/* ----------------------------------------------------------------------------------- */
	function obtenerSubQueryParam( $qparam, $qvalor, $valores ){
		//
	
		$q = "";
		if( count( $valores ) > 0 ){
			$qv = obtenerSubQueryValor( $qvalor, $valores );
			$q = "and ".$qparam." ".$qv;
		}
		return $q;
	}
	/* ----------------------------------------------------------------------------------- */
	function obtenerSubQueryValorUnico( $campo, $valor ){
		//
		if( count( $valor ) > 0 ){
			$q = "and ".$campo." = ".$valor;
		} 
		else $q = "";

		return $q;
	}
	/* ----------------------------------------------------------------------------------- */
	function obtenerQueryConsulta( $form ){
		//Devuelve la consulta a bd de manera dinámica según los datos del formulario

		ini_set( 'display_errors', 1 );
		$t_spd 	= ""; 	//Tabla: size_product_detail	(talla-detalle producto)
		$t_mp 	= "";	//Tabla: making_product			(trabajo-producto) 
		$t_lp 	= "";	//Tabla: line_product			(línea-producto) 
		$idt 	= "";	//atributo: id talla
		$q_jta 	= "";	//sub-query: unión talla - detalle_producto 
		$qdet 	= "";	//sub-query: unión talla - detalle_producto

		$idc = $form["categoria"];
		$idsc = $form["subcategoria"];

		$q_l = obtenerSubQueryParam( "lp.product_id = p.id", "lp.line_id", $form["linea"] );
		$q_t = obtenerSubQueryParam( "tp.product_id = p.id", "tp.making_id", $form["trabajo"] );

		$q_m = obtenerSubQueryValorUnico( "p.material_id", $form["material"] );
		$q_sc = obtenerSubQueryValorUnico( "p.subcategory_id", $form["subcategoria"] );
		
		$q_b = obtenerSubQueryValor( "dp.treatment_id", $form["bano"] );
		$q_co = obtenerSubQueryValor( "dp.color_id", $form["color"] );
		$q_ta = obtenerSubQueryValor( "spd.size_id", $form["tallas"] );

		if( $q_ta != "" ) {
			$idt = ", spd.size_id as idt";
			$t_spd = "size_product_detail spd,";
			$q_jta = "and spd.product_detail_id = dp.id";
		}
		if( $q_l != "" ) $t_lp = "line_product lp, ";
		if( $q_t != "" ) $t_mp = "making_product tp, ";

		if( $q_b != "" || $q_co != "" || $q_ta != "" ){ 
			$qdet = " $q_b $q_co $q_jta $q_ta";
		}

		$query = "select p.id, p.code, p.name, dp.id as id_det $idt  
					from products p, $t_spd $t_mp $t_lp product_details dp 
					where p.category_id = $idc $q_sc $q_m $q_l $q_t 
					and dp.product_id = p.id $qdet";


		return $query;
	}
	/* ----------------------------------------------------------------------------------- */
	function ajustarValores( $datos ){
		//Devuelve la estructura de datos del formulario de consulta ajustado asignando 
		// arreglos vacíos en los parámetros que no hayan sido indicados en el formulario.

		if( !isset( $datos["linea"] ) ) 	$datos["linea"]			= array();
		if( !isset( $datos["trabajo"] ) ) 	$datos["trabajo"] 		= array();
		if( !isset( $datos["bano"] ) ) 		$datos["bano"] 			= array();
		if( !isset( $datos["color"] ) ) 	$datos["color"] 		= array();
		if( !isset( $datos["tallas"] ) ) 	$datos["tallas"] 		= array();
		
		if( $datos["material"] == "" )		$datos["material"]		= array();
		if( $datos["subcategoria"] == "" )	$datos["subcategoria"]	= array();

		return $datos;
	}
	/* ----------------------------------------------------------------------------------- */
	function obtenerPreciosPorPesoTalla( $dbh, $var, $rdetalle ){
		//Devuelve el valor del precio asociado de acuerdo al perfil del cliente y tipo de precio 
		$ntallas = array();
		$tallas = $rdetalle["sizes"];

		foreach ( $tallas as $r ) {
			if( $rdetalle["tipo_precio"] == "g" )
				$r["precio"] = obtenerPrecioPorPeso( $var, $r["peso"], $rdetalle["precio_peso"] );
			
			if( $rdetalle["tipo_precio"] == "mo" )
				$r["precio"] = obtenerPrecioPorManoObra( $var, $r["peso"], $rdetalle["precio_mo"] );
			
			if( $rdetalle["tipo_precio"] == "p" )
				$r["precio"] = obtenerPrecioPorPieza( $var, $rdetalle["precio_pieza"] );
			
			$ntallas[] = $r;			
		}

		return $ntallas;
	}
	/* ----------------------------------------------------------------------------------- */
	function obtenerListadoProductosConsulta( $dbh, $registros_base ){
		//Devuelve la lista de productos de la consulta con su correspondiente detalle
		include( "data-products.php" );
		$lproductos = array();

		foreach ( $registros_base as $reg ) {
			
			$producto["data"] 		= $reg;
			
			$producto["detalle"]	= obtenerRegistroDetalleProductoPorId( $dbh, $reg["id_det"] ); 
									// data-products.php
			$producto["tallas"]		= obtenerTallasDetalleProducto( $dbh, $idd );
									// data-products.php
			$producto["imagenes"]	= obtenerImagenesDetalleProducto( $dbh, $reg["id_det"], "" );
									// data-products.php

			$lproductos[] = $producto;			
		}

		return $lproductos; 
	}
	/* ----------------------------------------------------------------------------------- */
	function obtenerProductosConsulta( $dbh, $form ){
		//Construye la consulta dinámica y obtiene los registros de los productos consultados

		ini_set( 'display_errors', 1 );
		$datos = ajustarValores( $form );
		//print_r( $datos );
		
		$query_base = obtenerQueryConsulta( $datos );
		$registros_base = obtenerRegistroQuery( $dbh, $query_base );
		//print_r($registros_base);
		
		$lproductos = obtenerListadoProductosConsulta( $dbh, $registros_base );
		//print_r($lproductos);
		$lproductos = filtrarProductosConsulta( $form, $lproductos );

		return $lproductos; 
	}

	/* ----------------------------------------------------------------------------------- */
	/* Solicitudes asíncronas al servidor para procesar información de Productos */
	/* ----------------------------------------------------------------------------------- */
	
	if( isset( $_POST["img_catal"] ) ){
		ini_set( 'display_errors', 1 );
		//Solicita la lista de productos de la consulta: reporte de imágenes de catálogo
		
		include( "bd.php" );
		include( "data-sizes.php" );

		parse_str( $_POST["img_catal"], $form );
		
		$productos = obtenerProductosConsulta( $dbh, $form );
		
		//echo mostrarProductosConsulta( $productos );
		
	}

?>