<?php

class Conexion {

    public static function conectar() {
        $cnn = new PDO('mysql:host=localhost;port=3306;dbname=farmlandsdb', 'root');
        $cnn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        return $cnn;
    }
    public static function conectar2() {
        $cnn2 = new PDO('mysql:host=localhost;port=3306;dbname=farmlandsdb', 'root');
        $cnn2->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        return $cnn2;
    }

}
