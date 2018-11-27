<?php
function conectar(){
$localhost="den1.mysql5.gear.host";
  $usuario="farmlands";
  $contraseña="Yz13I5?7kq!8";
  $basededatos="farmlands";
            $mysqli = new mysqli("$localhost", "$usuario", "$contraseña" , "$basededatos");	
            if ($mysqli->connect_errno) {
              echo "Fallo al conectar a MySQL: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
              exit();
          }
            return $mysqli;
}
            ?>