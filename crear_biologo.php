<?php
	

  include("conexion.php");
  $mysqli=conectar();
			$DOCUMENTO= $_GET['DOCUMENTO'];
			$NOMBRE = $_GET['NOMBRE'];
      $APELLIDO = $_GET['APELLIDO'];
      $DIRECCION = $_GET['DIRECCION'];	
      $TELEFONO = $_GET['TELEFONO'];
      $EDAD = $_GET['EDAD'];	
      $CIUDAD = $_GET['CIUDAD'];
      $TIPO_DOCUMENTO = $_GET['TIPO_DOCUMENTO'];
      $ENTIDAD_PROVENIENTE = $_GET['ENTIDAD_PROVENIENTE'];
								
			$sql = $mysqli->query("insert into biologo (DOCUMENTO,NOMBRE, APELLIDO,DIRECCION,TELEFONO,EDAD,CUIDAD,TIPO_DOCUMENTO,ENTIDAD_PROVENIENTE) values ('$DOCUMENTO', '$NOMBRE', '$APELLIDO',  '$DIRECCION','$TELEFONO','$EDAD','$CIUDAD','$TIPO_DOCUMENTO','$ENTIDAD_PROVENIENTE')");
	?>	
 
		    <SCRIPT LANGUAGE="javascript"> 
            alert(" el biologo fue Registrado"); 
            </SCRIPT> 
            <META HTTP-EQUIV="Refresh" CONTENT="0; URL=consultar_biologo.php">