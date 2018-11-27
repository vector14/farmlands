<?php
	
  session_start();
	include("conexion.php");
	$mysqli=conectar();
			$ID_PLANTA= $_POST['id_planta'];
			$PERIODO = $_POST['periodo'];
      $NUMERO_DE_HOJAS = $_POST['numero_de_hojas'];	
      $FLORES = $_POST['flores'];
			$ALTURA = $_POST['altura'];
			$GROSOR = $_POST['grosor'];	
      $TAMAÑO_DE_TUBERCULO = $_POST['tamaño_de_toberculo'];
			$FECHA_MUESTRA = $_POST['fecha_de_muestra'];
			$DESCRIPCION = $_POST['descripcion'];	
      $SECCION_CULTIVO = $_POST['seccion_de_cultivo'];
	
								
			$sql = $mysqli->query("UPDATE muestrap SET PERIODO = '$PERIODO', NUMERO_HOJAS = '$NUMERO_DE_HOJAS', FLORES = '$FLORES', ALTURA = '$ALTURA', GROSOR = '$GROSOR', TAMANO_TUBERCULO = '$TAMAÑO_DE_TUBERCULO', FECHA = '$FECHA_MUESTRA', DESCRIPCION = '$DESCRIPCION', SECCION_CULTIVO = '$SECCION_CULTIVO' WHERE ID_PLANTA = '$ID_PLANTA'");			
			
	?>	

		    <SCRIPT LANGUAGE="javascript"> 
            alert(" la muestra fue ATUALIZADA"); 
            </SCRIPT> 
            <META HTTP-EQUIV="Refresh" CONTENT="0; URL=consultar_muestraP.php">
