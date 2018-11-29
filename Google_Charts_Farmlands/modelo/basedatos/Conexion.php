<?php

class Conexion {

    public static function conectar() {
        $localhost="den1.mysql2.gear.host";
        $usuario="farmlandsdb";
        $contraseña="Tq6oRXcpM?_j";
        $basededatos="farmlandsdb";
        $cnn = new PDO('mysql:host=den1.mysql2.gear.host;port=3306;dbname=farmlandsdb', 'farmlandsdb', 'Tq6oRXcpM?_j');
        $cnn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        return $cnn;
    }
    public static function conectar2() {
        $cnn2 = new PDO('mysql:host=localhost;port=3306;dbname=farmlandsdb', 'root');
        $cnn2->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        return $cnn2;
    }

}
