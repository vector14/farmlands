<?php
	
  session_start();
	include("conexion.php");
	$mysqli=conectar();
			$ID_MUESTRA= $_POST['ID_MUESTRA'];
			$PH = $_POST['PH'];
      $TEMPERATURA_A = $_POST['TEMPERATURA_A'];	
      $TEMPERATURA_M = $_POST['TEMPERATURA_M'];
			$HUMEDAD = $_POST['HUMEDAD'];
			$PRESION_ATMOSFERICA= $_POST['PRESION_ATMOSFERICA'];	
      $FECHA_MUESTRA = $_POST['FECHA_MUESTRA'];
			$COLOR_HOJA= $_POST['COLOR_HOJA'];
			$SECCION_CULTIVO= $_POST['SECCION_CULTIVO'];
								
			$sql = $mysqli->query("UPDATE muestra_prueba SET PH = '$PH', TEMPERATURA_A = '$TEMPERATURA_A', TEMPERATURA_M = '$TEMPERATURA_M', HUMEDAD = '$HUMEDAD', PRESION_ATMOSFERICA = '$PRESION_ATMOSFERICA', FECHA_MUESTRA = '$FECHA_MUESTRA', COLOR_HOJA = '$COLOR_HOJA', SECCION_CULTIVO = '$SECCION_CULTIVO' WHERE ID_MUESTRA = $ID_MUESTRA");			
			
	?>	

		    <SCRIPT LANGUAGE="javascript"> 
            alert(" la muestra fue ACTUALIZADA"); 
            </SCRIPT> 
            <META HTTP-EQUIV="Refresh" CONTENT="0; URL=consultar_muestra-pruebas.php">
