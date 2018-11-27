<?php
	

  include("conexion.php");
  $mysqli=conectar();
  $TITULO = $_GET['TITULO'];
  $ESTADO = $_GET['ESTADO'];	
  $CLIMA_ACTUAL = $_GET['CLIMA_ACTUAL'];
  $AREA_CULTIVO = $_GET['AREA_CULTIVO'];
  $SECCIONES= $_GET['SECCIONES'];
  $FECHA_INICIO= $_GET['FECHA_INICIO'];
  $PRODUCTO= $_GET['PRODUCTO'];
  $GRANJERO = $_GET['GRANJERO'];
  $ID_GRANJA= $_GET['ID_GRANJA'];	
  $NIVEL_DEL_MAR=$_GET['NIVEL_DEL_MAR'];					
  $sql = $mysqli->query("INSERT INTO cultivo (ID_CULTIVO, TITULO, ESTADO, CLIMA_ACTUAL, AREA_CULTIVO, FECHA_INICIO, PRODUCTO, GRANJERO, ID_GRANJA, NIVEL_DEL_MAR, SECCIONES_DE_CULTIVO)
   VALUES (NULL, '$TITULO', '$ESTADO', '$CLIMA_ACTUAL', '$AREA_CULTIVO', '$FECHA_INICIO', '$PRODUCTO', '$GRANJERO', '$ID_GRANJA', '$NIVEL_DEL_MAR', ' $SECCIONES') ");			
  $sql2 =$mysqli->query("SELECT ID_CULTIVO FROM cultivo ORDER BY ID_CULTIVO DESC LIMIT 1");
  while ($fila = $sql2->fetch_assoc()) {
    $fila["secciones_de_cultivo"];
}
?>	

    <SCRIPT LANGUAGE="javascript"> 
        alert(" el cultivo fue Registrado"); 
        </SCRIPT> 
       
        <META HTTP-EQUIV="Refresh" CONTENT="0; URL=consultar_cultivo.php">