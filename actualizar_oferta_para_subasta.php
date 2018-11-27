<?php
	
  session_start();
	include("conexion.php");
$mysqli=conectar();
			$ID_OFERTA= $_POST['ID_OFERTA'];
			$MONTO = $_POST['MONTO'];
      $FECHA_HORA_REGISTRO = $_POST['FECHA_HORA_REGISTRO'];	
      $DOCUMENTO_COMPRADOR = $_POST['DOCUMENTO_COMPRADOR'];
			$ID_SUBASTA = $_POST['ID_SUBASTA'];
						
			$sql = $mysqli->query("update oferta_para_subasta set NOMBRE='$NOMBRE', FECHA_HORA_REGISTRO=$FECHA_HORA_REGISTRO, DOCUMENTO_COMPRADOR='$DOCUMENTO_COMPRADOR', ID_SUBASTA='$ID_SUBASTA' where ID_OFERTA=$ID_OFERTA");			
			
	?>	

		    <SCRIPT LANGUAGE="javascript"> 
            alert(" la oferta fue ATUALIZADA"); 
            </SCRIPT> 
            <META HTTP-EQUIV="Refresh" CONTENT="0; URL=consultar_oferta_para_subasta.php">
