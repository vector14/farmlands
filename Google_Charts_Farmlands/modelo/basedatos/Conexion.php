<?php

class Conexion {

    public static function conectar() {
        $localhost="den1.mysql5.gear.host";
        $usuario="farmlandsdb";
        $contraseña="Un7pr!E9U~90";
        $basededatos="farmlandsdb";
        $cnn = new PDO('mysql:host=den1.mysql5.gear.host;port=3306;dbname=farmlandsdb', 'farmlandsdb', 'Un7pr!E9U~90');
        $cnn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        return $cnn;
    }
    public static function conectar2() {
        $cnn2 = new PDO('mysql:host=localhost;port=3306;dbname=farmlandsdb', 'root');
        $cnn2->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        return $cnn2;
    }

}
