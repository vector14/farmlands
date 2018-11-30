<?php
	
  session_start();
  include("conexion.php");
  $mysqli=conectar();
		
			$ID_CULTIVO= $_POST['id_cultivo'];
			$TITULO = $_POST['titulo'];
      $ESTADO = $_POST['estado'];	
      $CANT_PRODUCTO= $_POST['cantidad_prod'];
      $PRODUCTO= $_POST['producto'];								
      $sql = $mysqli->query("UPDATE cultivo SET TITULO = '$TITULO', ESTADO = '$ESTADO' WHERE ID_CULTIVO = '$ID_CULTIVO");			
      $sql4 = $mysqli->query("UPDATE producto SET CANTIDAD=CANTIDAD-$CANT_PRODUCTO WHERE ID_PRODUCTO=$PRODUCTO");
	?>	

		    <SCRIPT LANGUAGE="javascript"> 
            alert(" el cultivo fue ACTUALIZADO"); 
            </SCRIPT> 
                        <META HTTP-EQUIV="Refresh" CONTENT="0; URL=consultar_cultivo.php">

