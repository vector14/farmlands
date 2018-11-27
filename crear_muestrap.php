<?php
	

	include("conexion.php");
	$mysqli=conectar();	
			$ID_PLANTA= $_GET['ID_PLANTA'];
			$PERIODO= $_GET['PERIODO'];
			$NUMERO_HOJAS = $_GET['NUMERO_HOJAS'];
			$FLORES = $_GET['FLORES'];
			$ALTURA = $_GET['ALTURA'];
			$GROSOR = $_GET['GROSOR'];
			$TAMANO_TUBERCULO = $_GET['TAMANO_TUBERCULO'];
			$FECHA_MUESTRA = $_GET['FECHA_MUESTRA'];
			$DESCRIPCION = $_GET['DESCRIPCION'];
      $SECCION_CULTIVO = $_GET['SECCION_CULTIVO'];
									
			$sql = $mysqli->query("INSERT INTO muestrap (ID_PLANTA, PERIODO, NUMERO_HOJAS, FLORES, ALTURA, GROSOR, TAMANO_TUBERCULO, FECHA, DESCRIPCION, SECCION_CULTIVO)
			 VALUES (NULL, '$PERIODO', '$NUMERO_HOJAS', '$FLORES', '$ALTURA', '$GROSOR', '$TAMANO_TUBERCULO', '$FECHA_MUESTRA', '$DESCRIPCION', '$SECCION_CULTIVO')");			
			
	?>	
	
		    <SCRIPT LANGUAGE="javascript"> 
            alert(" la muestra  planta fue Registrada"); 
            </SCRIPT> 
           
            <META HTTP-EQUIV="Refresh" CONTENT="0; URL=consultar_muestrap.php">