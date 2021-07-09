<?php
	include( "database/bd.php" );
	ini_set( 'display_errors', 1 );
	$filedata	= file_get_contents( "dfix.json" );
	
	$datasizes 	= json_decode( $filedata, true );

	function ajustarTallasRegistrosTablas( $dbh, $tabla, $idd, $idt, $idt_ok ){
		
		$q = "update $tabla set size_id = $idt_ok where size_id = $idt and product_detail_id = $idd";
		
		return mysqli_query( $dbh, $q );
	}

	function ajustarTallasRegistros( $dbh, $idd, $idt, $idt_ok ){

		ajustarTallasRegistrosTablas( $dbh, "purchase_details", $idd, $idt, $idt_ok ); 		// Detalle de OC
		ajustarTallasRegistrosTablas( $dbh, "order_details", $idd, $idt, $idt_ok ); 		// Detalle de Pedidos
		ajustarTallasRegistrosTablas( $dbh, "size_product_detail", $idd, $idt, $idt_ok ); 	// Detalle de producto - Tallas

	}

	foreach ( $datasizes as $r ) {
		echo "IDDET: ".$r["iddetalle"]." // ID-TA: ".$r["idtalla"]." // ID-TAOK: ".$r["idtalla_ok"]."<br>";

		ajustarTallasRegistros( $dbh, $r["iddetalle"], $r["idtalla"], $r["idtalla_ok"] );
		echo "<br><br>";
	}

?>

