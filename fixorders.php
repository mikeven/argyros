<?php
    /*
    * Argyros - Página de orden
    * 
    */
    ini_set( 'display_errors', 1 );
    include( "database/init.php" );
    include( "database/bd.php" );
		
		$q 						= "select id, order_status from orders where order_status = 'confirmado' and created_at <= '2020-12-31'";
		
		$data 				= mysqli_query( $dbh, $q );
		$lista 				= obtenerListaRegistros( $data );

		foreach ( $lista as $p ) {
			$id 				= $p["id"];
			$q2 				= "select id, order_status from orders_aux where id = $id";
			$data 			= mysqli_fetch_array( mysqli_query( $dbh, $q2 ) );
			$estado_aux = $data["order_status"];
			$id_aux 		= $data["id"];
			
			$q3 				= "update orders set order_status = '$estado_aux' where id = $id_aux;";
			$r 					= mysqli_query( $dbh, $q3 );

			echo $q3."<br>";
			echo $r;
		}
?>
