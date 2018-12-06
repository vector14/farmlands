<?php
function conectar(){
        $localhost="den1.mysql6.gear.host";
        $usuario="farmlandsdb";
        $contraseña="La5b_XkUy6_o";
        $basededatos="farmlandsdb";
            $mysqli = new mysqli("$localhost", "$usuario", "$contraseña" , "$basededatos");	
            if ($mysqli->connect_errno) {
              echo "Fallo al conectar a MySQL: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
              exit();
          }
            return $mysqli;
}
            ?>