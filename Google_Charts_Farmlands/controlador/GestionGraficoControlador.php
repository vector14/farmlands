<?php

require_once '../modelo/basedatos/Conexion.php';
require_once '../modelo/vo/Usuario.php';
require_once '../modelo/vo/Recuperar.php';
require_once '../modelo/dao/GraficoDao.php';
require_once '../controlador/GenericoCotrolador.php';
require_once '../controlador/excepcion/ValidacionExcepcion.php';
require_once '../controlador/util/Validacion.php';

class GestionGraficoControlador extends GenericoCotrolador {

    private $GraficoDao;

    public function __construct(&$cnn = NULL) {
        if (empty($cnn)) {
                    $cnn = Conexion::conectar();
        }
        $this->GraficoDao = new GraficoDao($cnn);
    }
        public function consultarMuestraGraf() {
        try {
            $datos = $this->GraficoDao->consultarMuestraGraf($_POST['id_muestra']);
//Esto le indica a chrome
            $this->respuestaJSON(['codigo' => 1, 'mensaje' => 'se consultó correctamente', 'datos' => $datos]);
        } catch (ValidacionExcepcion $error) {
            $this->respuestaJSON(['codigo' => $error->getCode(),
                'mensaje' => $error->getMessage()]);
        }
    }

}

$controlador = new GestionGraficoControlador();
$opcion = $_GET['opcion'];
$controlador->$opcion();
