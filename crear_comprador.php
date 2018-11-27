<?php
	

  include("conexion.php");
  $mysqli=conectar();	
			$DOCUMENTO= $_GET['DOCUMENTO'];
			$NOMBRE = $_GET['NOMBRE'];
      $APELLIDO = $_GET['APELLIDO'];	
      $EDAD = $_GET['EDAD'];
			$TIPO_DOCUMENTO = $_GET['TIPO_DOCUMENTO'];
      $CIUDAD = $_GET['CIUDAD'];
      $DIRECCION = $_GET['DIRECCION'];
      						
			$sql = $mysqli->query("insert into comprador (DOCUMENTO, NOMBRE, APELLIDO,EDAD,TIPO_DOCUMENTO,CIUDAD,DIRECCION) values ('$DOCUMENTO', '$NOMBRE', '$APELLIDO','$EDAD','$TIPO_DOCUMENTO','$CIUDAD','$DIRECCION') ");			
			
	?>	

		    <SCRIPT LANGUAGE="javascript"> 
            alert(" el comprador fue Registrado"); 
            </SCRIPT> 
           
            <META HTTP-EQUIV="Refresh" CONTENT="0; URL=consultar_comprador.php">