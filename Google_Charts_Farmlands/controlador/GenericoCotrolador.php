<?php

class GenericoCotrolador {
    
    public function respuestaJSON($info = array()) {
          header('Content-Type:application/json');
        $json = json_encode($info);
        echo $json;
    }
}

