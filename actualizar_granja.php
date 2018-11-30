<?php
	
  session_start();
  include("conexion.php");
  $mysqli=conectar();	
			$ID_GRANJA= $_POST['id_granja'];
			$NOMBRE = $_POST['nombre'];
      $PRODUCTO_ESPECIALIZADO = $_POST['prodcuto_especializado'];	
      $GRANJERO = $_POST['id_granjero'];			
			$sql = $mysqli->query("update granja set NOMBRE='$NOMBRE',PRODUCTO_ESPECIALIZADO='$PRODUCTO_ESPECIALIZADO',GRANJERO='$GRANJERO' where ID_GRANJA=$ID_GRANJA");			
			
	?>	

		    <SCRIPT LANGUAGE="javascript"> 
            alert(" la granja fue ACTUALIZADA"); 
            </SCRIPT> 
            <META HTTP-EQUIV="Refresh" CONTENT="0; URL=consultar_granja.php">
