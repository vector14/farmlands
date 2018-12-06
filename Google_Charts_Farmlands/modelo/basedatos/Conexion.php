<?php

class Conexion {

    public static function conectar() {
        $localhost="den1.mysql6.gear.host";
        $usuario="farmlandsdb";
        $contraseña="La5b_XkUy6_o";
        $basededatos="farmlandsdb";
        $cnn = new PDO('mysql:host=den1.mysql5.gear.host;port=3306;dbname=farmlandsdb', 'farmlandsdb', 'La5b_XkUy6_o');
        $cnn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        return $cnn;
    }
    public static function conectar2() {
        $cnn2 = new PDO('mysql:host=localhost;port=3306;dbname=farmlandsdb', 'root');
        $cnn2->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        return $cnn2;
    }

}
