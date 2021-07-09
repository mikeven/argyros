<?php 
	/* Argyros - Funciones sobre mensajes de órdenes de compra */
	/* ----------------------------------------------------------------------------------- */
	/* ----------------------------------------------------------------------------------- */
	/* ----------------------------------------------------------------------------------- */
	/* ----------------------------------------------------------------------------------- */
	
	ini_set( 'display_errors', 1 );

	if( isset( $_GET["nueva_nota-exito"] ) ){
		// Mensaje de éxito al agregar nueva nota asociada a una orden de compra
		echo "<script> notificar( 'Orden de Compra', 'Nueva nota agregada con éxito', 'success' ); </script>";
	}

	if( isset( $_GET["comentario-exito"] ) ){ 
		// Mensaje de éxito al actualizar el comentario de una orden de compra
		echo "<script> notificar( 'Orden de Compra', 'Comentario de orden actualizado con éxito', 'success' ); </script>";
	}
	
	/* ----------------------------------------------------------------------------------- */
?>