<?php
	
  session_start();
  include("conexion.php");
  $mysqli=conectar();
			$ID_SUBASTA= $_POST['ID_SUBASTA'];
			$MONTO_INICIAL = $_POST['MONTO_INICIAL'];
      $FECHA_HORA_INICIO = $_POST['FECHA_HORA_INICIO'];	
      $FECHA_HORA_FIN = $_POST['FECHA_HORA_FIN'];
			$GANACIA_MINIMA = $_POST['GANACIA_MINIMA'];
      $TOPE_SUBASTA = $_POST['TOPE_SUBASTA'];	
      $OFERTA_FINAL = $_POST['OFERTA_FINAL'];
			$ID_CULTIVO = $_POST['ID_CULTIVO'];					
			$sql = $mysqli->query("update subasta set MONTO_INICIAL='$MONTO_INICIAL', FECHA_HORA_INICIO=$FECHA_HORA_INICIO, FECHA_HORA_FIN='$FECHA_HORA_FIN', GANACIA_MINIMA='$GANACIA_MINIMA', TOPE_SUBASTA='$TOPE_SUBASTA',OFERTA_FINAL='$OFERTA_FINAL',ID_CULTIVO='$ID_CULTIVO' where ID_SUBASTA=$ID_SUBASTA");			
			
	?>	

		    <SCRIPT LANGUAGE="javascript"> 
            alert(" la subasta fue ATUALIZADA"); 
            </SCRIPT> 
            <META HTTP-EQUIV="Refresh" CONTENT="0; URL=consultar_subasta.php">