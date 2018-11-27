<?php

$ID_CULTIVO=$_GET['ID_CULTIVO'];
include("conexion.php");
$mysqli=conectar();
	
	$sql = $mysqli->query("DELETE FROM cultivo WHERE ID_CULTIVO = '$ID_CULTIVO'");	
	echo "eliminado";
	echo"<META HTTP-EQUIV='Refresh' CONTENT='0; URL=consultar_cultivo.php'>";
		 

?>