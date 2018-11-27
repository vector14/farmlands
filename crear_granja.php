<?php
	

	include("conexion.php");
	$mysqli=conectar();
			$ID_GRANJA= $_GET['ID_GRANJA'];
			$NOMBRE = $_GET['NOMBRE'];
      $TERRENO = $_GET['TERRENO'];	
      $PISO_TERMICO = $_GET['PISO_TERMICO'];
			$UBICACION = $_GET['UBICACION'];
			$PRODUCTO_ESPECIALIZADO = $_GET['PRODUCTO_ESPECIALIZADO'];
			$GRANJERO = $_GET['GRANJERO'];
									

			$sql = $mysqli->query("insert into granja (ID_GRANJA, NOMBRE, TERRENO,PISO_TERMICO,UBICACION,PRODUCTO_ESPECIALIZADO,GRANJERO) values (ID_GRANJA, '$NOMBRE', '$TERRENO','$PISO_TERMICO','$UBICACION','$PRODUCTO_ESPECIALIZADO','$GRANJERO') ");			
			
	?>	

		    <SCRIPT LANGUAGE="javascript"> 
            alert(" la granja fue Registrada"); 
            </SCRIPT> 
           
            <META HTTP-EQUIV="Refresh" CONTENT="0; URL=consultar_granja.php">