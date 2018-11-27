<?php
	

	include("conexion.php");
	$mysqli=conectar();	
			$ID_OFERTA= $_GET['ID_OFERTA'];
			$MONTO = $_GET['MONTO'];
      $FECHA_HORA_REGISTRO = $_GET['FECHA_HORA_REGISTRO'];	
      $DOCUMENTO_COMPRADOR = $_GET['DOCUMENTO_COMPRADOR'];
			$ID_SUBASTA = $_GET['ID_SUBASTA'];
								
			$sql = $mysqli->query("insert into oferta_para_subasta (ID_OFERTA, MONTO, FECHA_HORA_REGISTRO,DOCUMENTO_COMPRADOR ,ID_SUBASTA) values (NULL, '$MONTO', '$FECHA_HORA_REGISTRO','$DOCUMENTO_COMPRADOR','$ID_SUBASTA') ");			
			
	?>	

		    <SCRIPT LANGUAGE="javascript"> 
            alert(" la oferta fue Registrada"); 
            </SCRIPT> 
           
            <META HTTP-EQUIV="Refresh" CONTENT="0; URL=consultar_oferta_para_subasta.php">