<?php
	
  session_start();
  include("conexion.php");
  $mysqli=conectar();
		
			$ID_CULTIVO= $_POST['id_cultivo'];
			$TITULO = $_POST['titulo'];
      $ESTADO = $_POST['estado'];	
      $CLIMA_ACTUAL = $_POST['clima_actual'];
			$AREA_CULTIVO = $_POST['area_cultivo'];
      $FECHA_INICIO = $_POST['fecha_inicio'];
      $PRODUCTO= $_POST['producto'];
      $GRANJERO = $_POST['granjero'];
      $ID_GRANJA= $_POST['id_granja'];
      $Nivel= $_POST['mar'];									
			$sql = $mysqli->query("UPDATE cultivo SET TITULO = '$TITULO', ESTADO = '$ESTADO', CLIMA_ACTUAL = '$CLIMA_ACTUAL', AREA_CULTIVO = '$AREA_CULTIVO', FECHA_INICIO = '$FECHA_INICIO', PRODUCTO = '$PRODUCTO', NIVEL_DEL_MAR = '$Nivel' WHERE ID_CULTIVO = '$ID_CULTIVO");			
                        printf( $sql);		
	?>	

		    <SCRIPT LANGUAGE="javascript"> 
            alert(" el cultivo fue ACTUALIZADO"); 
            </SCRIPT> 
                        <META HTTP-EQUIV="Refresh" CONTENT="0; URL=consultar_cultivo.php">

