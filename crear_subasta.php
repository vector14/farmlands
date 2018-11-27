<?php
	

	include("conexion.php");
$mysqli=conectar();	
			$MONTO_INICIAL = $_GET['MONTO_INICIAL'];
      $FECHA_HORA_INICIO = $_GET['FECHA_HORA_INICIO'];	
      $FECHA_HORA_FIN = $_GET['FECHA_HORA_FIN'];
			$GANACIA_MINIMA= $_GET['GANACIA_MINIMA'];
      $TOPE_SUBASTA= $_GET['TOPE_SUBASTA'];
      $OFERTA_FINAL = $_GET['OFERTA_FINAL'];
			$ID_CULTIVO = $_GET['ID_CULTIVO'];						
			$sql = $mysqli->query("INSERT INTO subasta (ID_SUBASTA, MONTO_INICIAL, FECHA_HORA_INICIO, FECHA_HORA_FIN, GANANCIA_MINIMA, TOPE_SUBASTA, OFERTA_FINAL, ID_CULTIVO) 
      VALUES (NULL, '$MONTO_INICIAL', '$FECHA_HORA_INICIO', '$FECHA_HORA_FIN', '$GANACIA_MINIMA', '$TOPE_SUBASTA', '$OFERTA_FINAL', '$ID_CULTIVO') ");			
			
	?>	

		    <SCRIPT LANGUAGE="javascript"> 
            alert(" la subasta fue Registrada"); 
            </SCRIPT> 
           
            <META HTTP-EQUIV="Refresh" CONTENT="0; URL=consultar_subasta.php">