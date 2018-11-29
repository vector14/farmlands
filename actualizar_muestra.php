<?php
	
  session_start();
	include("conexion.php");
	$mysqli=conectar();
			$ID_MUESTRA= $_POST['id_muestra'];
			$DESCRIPCION = $_POST['descripcion'];
      $FECHA_MUESTRA = $_POST['fecha_muestra'];	
      $SECCION_CULTIVO = $_POST['seccion_cultivo'];
			$PH = $_POST['ph'];
			$EXCAVACION= $_POST['excavacion'];	
      $TEMPERATURA = $_POST['temperatura'];
			$HUMEDAD= $_POST['humedad'];
								
			$sql = $mysqli->query("UPDATE muestra SET DESCRIPCION = '$DESCRIPCION', FECHA_MUESTRA = '$FECHA_MUESTRA', SECCION_CULTIVO = '$SECCION_CULTIVO', PH = '$PH', EXCAVACION = '$EXCAVACION', TEMPERATURA = '$TEMPERATURA', HUMEDAD = '$HUMEDAD' WHERE ID_MUESTRA = $ID_MUESTRA");			
			
	?>	

		    <SCRIPT LANGUAGE="javascript"> 
            alert(" la muestra fue ACTUALIZADA"); 
            </SCRIPT> 
            <META HTTP-EQUIV="Refresh" CONTENT="0; URL=consultar_muestra.php">
