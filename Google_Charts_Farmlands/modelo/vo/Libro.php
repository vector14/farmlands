<?php
class Libro {
    
    private $id_libro;
    private $id_usuario;
    private $nombre;
    private $autor;
    
    function getId_libro() {
        return $this->id_libro;
    }

    function getId_usuario() {
        return $this->id_usuario;
    }

    function getNombre() {
        return $this->nombre;
    }

    function getAutor() {
        return $this->autor;
    }

    function setId_libro($id_libro) {
        $this->id_libro = $id_libro;
    }

    function setId_usuario($id_usuario) {
        $this->id_usuario = $id_usuario;
    }

    function setNombre($nombre) {
        $this->nombre = $nombre;
    }

    function setAutor($autor) {
        $this->autor = $autor;
    }


}
