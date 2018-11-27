<?php


	$DOCUMENTO = $_GET['DOCUMENTO'];
	include("conexion.php");
$mysqli=conectar();		
	$sql = $mysqli->query("delete from comprador where DOCUMENTO='$DOCUMENTO'");	
	echo "eliminado";
	echo"<META HTTP-EQUIV='Refresh' CONTENT='0; URL=consultar_comprador.php'>";
		 

?>