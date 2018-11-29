<?php
	
  session_start();
	include("conexion.php");
	$mysqli=conectar();	
			$ID_PRODUCTO= $_POST['id_producto'];
			$NOMBRE = $_POST['nombre'];
      $TIPO_PRODUCTO = $_POST['tipo_producto'];	
      $DESCRIPCION = $_POST['descripcion'];
			$CANTIDAD = $_POST['cantidad'];
							
			$sql = $mysqli->query("UPDATE producto SET NOMBRE = '$NOMBRE', TIPO_PRODUCTO = '$TIPO_PRODUCTO', DESCRIPCION = '$DESCRIPCION', CANTIDAD = '$CANTIDAD' WHERE ID_PRODUCTO ='$ID_PRODUCTO' ");			
			
	?>	

		    <SCRIPT LANGUAGE="javascript"> 
            alert(" el producto fue ACTUALIZADO"); 
            </SCRIPT> 
            <META HTTP-EQUIV="Refresh" CONTENT="0; URL=consultar_producto.php">