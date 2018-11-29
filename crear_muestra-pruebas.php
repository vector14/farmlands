<?php
	

	include("conexion.php");
	$mysqli=conectar();	
			$PH = $_GET['PH'];
      $TEMPERATURA_A = $_GET['TEMPERATURA_A'];	
      $TEMPERATURA_M = $_GET['TEMPERATURA_M'];
			$HUMEDAD = $_GET['HUMEDAD'];
			$PRESION_ATMOSFERICA= $_GET['PRESION_ATMOSFERICA'];	
      $FECHA_MUESTRA = $_GET['FECHA_MUESTRA'];
			$COLOR_HOJA= $_GET['COLOR_HOJA'];
			$SECCION_CULTIVO= $_GET['SECCION_CULTIVO'];									
			$sql = $mysqli->query("INSERT INTO muestra_prueba (PH, TEMPERATURA_A, TEMPERATURA_M, HUMEDAD, PRESION_ATMOSFERICA, FECHA_MUESTRA, COLOR_HOJA, SECCION_CULTIVO) 
			VALUES ('$PH', '$TEMPERATURA_A', '$TEMPERATURA_M', '$HUMEDAD', '$PRESION_ATMOSFERICA', '$FECHA_MUESTRA', '$COLOR_HOJA', '$SECCION_CULTIVO')");			
			
	?>	
	
		    <SCRIPT LANGUAGE="javascript"> 
            alert(" la muestra fue Registrada"); 
            </SCRIPT> 
           
            <META HTTP-EQUIV="Refresh" CONTENT="0; URL=consultar_muestra-pruebas.php">