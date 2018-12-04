<?php
function conectar(){
        $localhost="den1.mysql5.gear.host";
        $usuario="farmlandsdb";
        $contraseña="Gf7lq?P5~5oH";
        $basededatos="farmlandsdb";
            $mysqli = new mysqli("$localhost", "$usuario", "$contraseña" , "$basededatos");	
            if ($mysqli->connect_errno) {
              echo "Fallo al conectar a MySQL: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
              exit();
          }
            return $mysqli;
}
            ?>