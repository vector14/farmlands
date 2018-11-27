<?php
	
  session_start();
	include("conexion.php");
$mysqli=conectar();	
			$DOCUMENTO= $_POST['documento'];
			$NOMBRE = $_POST['nombre'];
      $APELLIDO = $_POST['apellido'];	
      $EDAD = $_POST['edad'];
			$TIPO_DOCUMENTO = $_POST['tipo_documento'];
      $CIUDAD = $_POST['ciudad'];	
      $DIRECCION = $_POST['direccion'];						
			$sql = $mysqli->query("update comprador set NOMBRE='$NOMBRE', APELLIDO='$APELLIDO', EDAD='$EDAD', TIPO_DOCUMENTO='$TIPO_DOCUMENTO', CIUDAD='$CIUDAD',DIRECCION='$DIRECCION' where DOCUMENTO='$DOCUMENTO'");			
			
	?>	

		    <SCRIPT LANGUAGE="javascript"> 
            alert(" el comprador fue ATUALIZADO"); 
            </SCRIPT> 
            <META HTTP-EQUIV="Refresh" CONTENT="0; URL=consultar_comprador.php">
