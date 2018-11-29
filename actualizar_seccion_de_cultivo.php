<?php
	
  session_start();
  include("conexion.php");
  $mysqli=conectar();	
			$ID_SECCION= $_POST['id_seccion'];
			$DIMENSIONES = $_POST['dimensiones'];
      $UBICACION = $_POST['ubicacion'];	
      $ID_CULTIVO = $_POST['id_cultivo'];
								
			$sql = $mysqli->query("UPDATE seccion_de_cultivo SET DIMENSIONES = '$DIMENSIONES', UBICACION = '$UBICACION' WHERE ID_SECCION = '$ID_SECCION'");			
			
	?>	

		    <SCRIPT LANGUAGE="javascript"> 
            alert(" la seccion de  cultivo fue ACTUALIZADA"); 
            </SCRIPT> 
            <META HTTP-EQUIV="Refresh" CONTENT="0; URL=consultar_seccion_de_cultivo.php">
