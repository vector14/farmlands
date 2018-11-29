<?php
	
	session_start();
	
	include("conexion.php");
	$mysqli=conectar();
			$DOCUMENTO= $_POST['documento'];
			$NOMBRE = $_POST['nombre'];
      $APELLIDO = $_POST['apellido'];	
      $CIUDAD = $_POST['ciudad'];
			$CORREO = $_POST['correo'];
			$TELEFONO = $_POST['telefono'];						
			$sql = $mysqli->query("UPDATE administrador SET NOMBRE = '$NOMBRE', APELLIDO = '$APELLIDO', CIUDAD = '$CIUDAD', CORREO = '$CORREO', TELEFONO = '$TELEFONO' WHERE DOCUMENTO ='$DOCUMENTO'");			
			
	?>	

		    <SCRIPT LANGUAGE="javascript"> 
            alert(" el administrador fue ACTUALIZADO"); 
            </SCRIPT> 
            <META HTTP-EQUIV="Refresh" CONTENT="0; URL=consultar_administrador.php">

