<?php


	$ID_PRODUCTO = $_GET['ID_PRODUCTO'];
	include("conexion.php");
	$mysqli=conectar();		
	$sql = $mysqli->query("DELETE FROM producto WHERE ID_PRODUCTO ='$ID_PRODUCTO' ");	
	echo "eliminado";
	echo"<META HTTP-EQUIV='Refresh' CONTENT='0; URL=consultar_producto.php'>";
		 

?>