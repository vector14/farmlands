<?php
	
  session_start();
  include("conexion.php");
  $mysqli=conectar();	
			$ID_GRANJA= $_POST['id_granja'];
			$NOMBRE = $_POST['nombre'];
      $TERRENO = $_POST['terreno'];	
      $PISO_TERMICO = $_POST['piso_termico'];
			$UBICACION = $_POST['ubicacion'];
      $PRODUCTO_ESPECIALIZADO = $_POST['prodcuto_especializado'];	
      $GRANJERO = $_POST['id_granjero'];			
			$sql = $mysqli->query("update granja set NOMBRE='$NOMBRE', TERRENO=$TERRENO, PISO_TERMICO='$PISO_TERMICO', UBICACION='$UBICACION', PRODUCTO_ESPECIALIZADO='$PRODUCTO_ESPECIALIZADO',GRANJERO='$GRANJERO' where ID_GRANJA=$ID_GRANJA");			
			
	?>	

		    <SCRIPT LANGUAGE="javascript"> 
            alert(" la granja fue ATUALIZADA"); 
            </SCRIPT> 
            <META HTTP-EQUIV="Refresh" CONTENT="0; URL=consultar_granja.php">
