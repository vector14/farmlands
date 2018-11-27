<?php
	

  include("conexion.php");
  $mysqli=conectar();	
			$DOCUMENTO= $_GET['DOCUMENTO'];
			$NOMBRE = $_GET['NOMBRE'];
      $APELLIDO = $_GET['APELLIDO'];	
      $TIPO_DOCUMENTO= $_GET['TIPO_DOCUMENTO'];
			$MUNICIPIO = $_GET['MUNICIPIO'];
      $DEPARTAMENTO = $_GET['DEPARTAMENTO'];
      $EDAD = $_GET['EDAD'];		

			$sql = $mysqli->query("insert into granjero (DOCUMENTO, NOMBRE, APELLIDO,TIPO_DOCUMENTO,MUNICIPIO,DEPARTAMENTO,EDAD ) values ('$DOCUMENTO', '$NOMBRE', '$APELLIDO','$TIPO_DOCUMENTO','$MUNICIPIO','$DEPARTAMENTO','$EDAD' ) ");			
			
	?>	

		    <SCRIPT LANGUAGE="javascript"> 
            alert(" el granjero fue Registrado"); 
            </SCRIPT> 
           
            <META HTTP-EQUIV="Refresh" CONTENT="0; URL=consultar_granjero.php">