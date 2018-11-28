<?php
function conectar(){
$localhost="den1.mysql5.gear.host";
  $usuario="farmlandsdb";
  $contraseña="Un7pr!E9U~90";
  $basededatos="farmlandsdb";
            $mysqli = new mysqli("$localhost", "$usuario", "$contraseña" , "$basededatos");	
            if ($mysqli->connect_errno) {
              echo "Fallo al conectar a MySQL: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
              exit();
          }
            return $mysqli;
}
            ?>