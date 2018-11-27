<?php
	

	include("conexion.php");
	$mysqli=conectar();	
	
			$NOMBRE = $_GET['NOMBRE'];
      $TIPO_PRODUCTO = $_GET['TIPO_PRODUCTO'];	
      $DESCRIPCION = $_GET['DESCRIPCION'];
			$CANTIDAD = $_GET['CANTIDAD'];
								
			$sql = $mysqli->query("INSERT INTO `producto` (ID_PRODUCTO, NOMBRE, TIPO_PRODUCTO, DESCRIPCION, CANTIDAD) VALUES (NULL, '$NOMBRE', '$TIPO_PRODUCTO', '$DESCRIPCION', '$CANTIDAD')");			
			
	?>	

		    <SCRIPT LANGUAGE="javascript"> 
            alert(" el producto fue Registrado"); 
            </SCRIPT> 
           
            <META HTTP-EQUIV="Refresh" CONTENT="0; URL=consultar_producto.php">