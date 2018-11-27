<?php
	

	include("conexion.php");
	$mysqli=conectar();
			$ID_SECCION= $_GET['ID_SECCION'];
			$DIMENSIONES = $_GET['DIMENSIONES'];
      $UBICACION = $_GET['UBICACION'];	
      $ID_CULTIVO = $_GET['ID_CULTIVO'];
								
			$sql = $mysqli->query("insert into seccion_de_cultivo (ID_SECCION, DIMENSIONES, UBICACION,ID_CULTIVO) values ('$ID_SECCION','$DIMENSIONES','$UBICACION','$ID_CULTIVO')");			
			
	?>	

		    <SCRIPT LANGUAGE="javascript"> 
            alert(" la seccion del cultivo fue Registrada"); 
            </SCRIPT> 
           
            <META HTTP-EQUIV="Refresh" CONTENT="0; URL=consultar_seccion_de_cultivo.php">