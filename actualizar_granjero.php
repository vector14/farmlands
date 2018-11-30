<?php
	
  include("conexion.php");
  $mysqli=conectar();
			$DOCUMENTO= $_POST['documento'];
			$NOMBRE = $_POST['nombre'];
      $APELLIDO = $_POST['apellido'];	
      $TIPO_DOCUMENTO = $_POST['tipo_documento'];
      $EDAD = $_POST['edad'];	
     					
      $sql = $mysqli->query("update granjero SET NOMBRE = '$NOMBRE', APELLIDO = '$APELLIDO', TIPO_DOCUMENTO = '$TIPO_DOCUMENTO', EDAD = '$EDAD' WHERE DOCUMENTO = '$DOCUMENTO'");			
			
	?>	

		    <SCRIPT LANGUAGE="javascript"> 
            alert(" el granjero fue actualizado"); 
            </SCRIPT> 
            <META HTTP-EQUIV="Refresh" CONTENT="0; URL=consultar_granjero.php">
