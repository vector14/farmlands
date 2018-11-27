<?php
	$ID_OFERTA=$_GET['ID_OFERTA'];
	include("conexion.php");
$mysqli=conectar();	
	$sql = $mysqli->query("DELETE FROM oferta_para_subasta WHERE ID_OFERTA = '$ID_OFERTA'");	
	echo "eliminado";
	echo"<META HTTP-EQUIV='Refresh' CONTENT='0; URL=consultar_oferta_para_subasta.php'>";
	

?>