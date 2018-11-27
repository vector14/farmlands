<?php

class Recuperar {

    private $id_recuperar;
    private $codigo;
    private $fecha;
    private $estado;
    private $id_usuario;

    function getId_recuperar() {
        return $this->id_recuperar;
    }

    function getCodigo() {
        return $this->codigo;
    }

    function getFecha() {
        return $this->fecha;
    }

    function getEstado() {
        return $this->estado;
    }

    function getId_usuario() {
        return $this->id_usuario;
    }

    function setId_recuperar($id_recuperar) {
        $this->id_recuperar = $id_recuperar;
    }

    function setCodigo($codigo) {
        $this->codigo = $codigo;
    }

    function setFecha($fecha) {
        $this->fecha = $fecha;
    }

    function setEstado($estado) {
        $this->estado = $estado;
    }

    function setId_usuario($id_usuario) {
        $this->id_usuario = $id_usuario;
    }

}
