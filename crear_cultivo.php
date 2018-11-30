<?php
include("conexion.php");
$mysqli = conectar();
$TITULO = $_GET['TITULO'];
$ESTADO = $_GET['ESTADO'];
$CLIMA_ACTUAL = $_GET['CLIMA_ACTUAL'];
$AREA_CULTIVO = $_GET['AREA_CULTIVO'];
$SECCIONES = $_GET['SECCIONES'];
$FECHA_INICIO = $_GET['FECHA_INICIO'];
$PRODUCTO = $_GET['PRODUCTO'];
$CANTIDAD_PRODUCTO = $_GET['CANTIDAD_PROD'];
$GRANJERO = $_GET['GRANJERO'];
$ID_GRANJA = $_GET['ID_GRANJA'];
$NIVEL_DEL_MAR = $_GET['NIVEL_DEL_MAR'];
$sql = $mysqli->query("INSERT INTO cultivo (ID_CULTIVO, TITULO, ESTADO, CLIMA_ACTUAL, AREA_CULTIVO, FECHA_INICIO, PRODUCTO, GRANJERO, ID_GRANJA, NIVEL_DEL_MA, SECCIONES)
   VALUES (NULL, '$TITULO', '$ESTADO', '$CLIMA_ACTUAL', '$AREA_CULTIVO', '$FECHA_INICIO', '$PRODUCTO', '$GRANJERO', '$ID_GRANJA', '$NIVEL_DEL_MAR', '$SECCIONES') ");
$sql2 = $mysqli->query("SELECT * FROM cultivo ORDER BY ID_CULTIVO DESC LIMIT 1");
//toma el ultimo valor de la tabla para insertar datos en la tabla seccion_de_cultivo
$fila = $sql2->fetch_assoc();
    $secc = $fila["SECCIONES"];
    $idC = $fila["ID_CULTIVO"];
    $area = $fila["AREA_CULTIVO"];
    $areasecc = $area / $secc;
    $codigosecc = "cu_" . $idC;
    $i = 1;
    while ($i < $secc) {
        $codigosecc = "cu_" . $idC;
        $codigosecc .= "_".$i;
        $sql3 = $mysqli->query("INSERT INTO seccion_de_cultivo VALUES('$codigosecc', $areasecc, null, $idC)");
        $i++;
    }
    $sql4 = $mysqli->query("UPDATE producto SET CANTIDAD=CANTIDAD-$CANTIDAD_PRODUCTO WHERE ID_PRODUCTO=$PRODUCTO");

?>	

<SCRIPT LANGUAGE="javascript">
    alert(" el cultivo fue Registrado");
</SCRIPT> 

<META HTTP-EQUIV="Refresh" CONTENT="0; URL=consultar_cultivo.php">