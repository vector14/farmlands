<?php

//require_once '../basedatos/conexion.php';
//require_once '../vo/Usuario.php';

class GraficoDao {

    /**
     *
     * @var PDO
     */
    private $cnn;


    function __construct(&$cnn) {
        $this->cnn = $cnn;
    }
    public function consultarMuestraGraf($id_muestra) {
        $sql = "SELECT * FROM muestra_prueba WHERE id_muestra=:id_muestra";
        $sentencia = $this->cnn->prepare($sql);
        $sentencia->execute(['id_muestra' => $id_muestra]);
        return $sentencia->fetchAll(PDO::FETCH_OBJ);
    }

}
