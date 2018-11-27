<?php
	
	include("conexion.php");
	$mysqli=conectar();
			$DOCUMENTO= $_GET['DOCUMENTO'];
			$NOMBRE = $_GET['NOMBRE'];
      $APELLIDO = $_GET['APELLIDO'];	
      $CIUDAD = $_GET['CIUDAD'];
			$CORREO = $_GET['CORREO'];
			$TELEFONO = $_GET['TELEFONO'];						
			$sql = $mysqli->query("insert into administrador (DOCUMENTO, NOMBRE, APELLIDO,CIUDAD,CORREO,TELEFONO) values ('$DOCUMENTO', '$NOMBRE', '$APELLIDO','$CIUDAD','$CORREO','$TELEFONO') ");			
			
	?>	

		    <SCRIPT LANGUAGE="javascript"> 
            alert(" el administrador fue Registrado"); 
            </SCRIPT> 
           
            <META HTTP-EQUIV="Refresh" CONTENT="0; URL=consultar_administrador.php">
