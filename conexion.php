<?php
function conectar(){
$localhost="localhost";
  $usuario="root";
  $contraseña="";
  $basededatos="farmlandsdb";
            $mysqli = new mysqli("$localhost", "$usuario", "$contraseña" , "$basededatos");	
            if ($mysqli->connect_errno) {
              echo "Fallo al conectar a MySQL: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
              exit();
          }
            return $mysqli;
}
            ?>