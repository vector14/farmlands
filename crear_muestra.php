<?php
	

	include("conexion.php");
	$mysqli=conectar();	
			$ID_MUESTRA= $_GET['ID_MUESTRA'];
			$DESCRIPCION = $_GET['DESCRIPCION'];
      $FECHA_MUESTRA = $_GET['FECHA_MUESTRA'];	
      $SECCION_CULTIVO = $_GET['SECCION_CULTIVO'];
			$PH = $_GET['PH'];
			$EXCAVACION = $_GET['EXCAVACION'];	
      $TEMPERATURA = $_GET['TEMPERATURA'];
			$HUMEDAD = $_GET['HUMEDAD'];
									
			$sql = $mysqli->query("INSERT INTO muestra (ID_MUESTRA, DESCRIPCION, FECHA_MUESTRA, SECCION_CULTIVO, PH, EXCAVACION, TEMPERATURA, HUMEDAD) 
			VALUES (NULL, '$DESCRIPCION', '$FECHA_MUESTRA', '$SECCION_CULTIVO', '$PH', '$EXCAVACION', '$TEMPERATURA', '$HUMEDAD')");			
			
	?>	
	
		    <SCRIPT LANGUAGE="javascript"> 
            alert(" la muestra fue Registrada"); 
            </SCRIPT> 
           
            <META HTTP-EQUIV="Refresh" CONTENT="0; URL=consultar_muestra.php">