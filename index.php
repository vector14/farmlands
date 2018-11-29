<!-- 
* Copyright 2016 Carlos Eduardo Alfaro Orellana
-->
<!DOCTYPE html>
<html lang="es">
    <head>
        <title>Inicio de sesión</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="shortcut icon" type="image/x-icon" href="assets/icons/favicon.ico"/>

        <link rel="stylesheet" href="css2/material-design-iconic-font.min.css">
        <link rel="stylesheet" href="css2/normalize.css">
        <link rel="stylesheet" href="css2/bootstrap.min.css">

        <link rel="stylesheet" href="css2/style.css">
        <link rel="stylesheet" href="css2/login.css"/>
        <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
        <script>window.jQuery || document.write('<script src="js2/jquery-1.11.2.min.js"><\/script>')</script>



    </head>
    <body class="full-cover-background" style="background-image:url(assets/img/background.jpg);">
        <div class="form-container">
            <p class="text-center" style="margin-top: 17px;">
                <i class="zmdi zmdi-account-circle zmdi-hc-5x"></i>
            </p>
            <div id="msg"></div>
            <h4 class="text-center all-tittles" style="margin-bottom: 30px;">inicia sesión con tu cuenta</h4>
            <form action="index.php" method="post">
                <div class="group-material-login">
                    <input type="text" class="material-login-control" name="txtlogin" id="usu" required="" maxlength="70">
                    <span class="highlight-login"></span>
                    <span class="bar-login"></span>
                    <label><i class="zmdi zmdi-account"></i> &nbsp; Usuario</label>
                </div><br>
                <div class="group-material-login">
                    <input type="password" class="material-login-control" name="txtpass"  id="pass" required="" maxlength="70">
                    <span class="highlight-login"></span>
                    <span class="bar-login"></span>
                    <label><i class="zmdi zmdi-lock"></i> &nbsp; Contraseña</label>
                </div>
                <button class="btn-login" type="submit">Ingresar al sistema &nbsp; <i class="zmdi zmdi-arrow-right"></i></button>


            </form>
        </div>  
        <script src="js/jquery.min.js"></script>
        <script src="js/bootstrap.min.js"></script>

    </body>
</html>
<?php
if (isset($_POST['txtpass'])) {
    session_start();
    include("conexion.php");

    //variable de conexion: recibe dirección del host , usuario, contraseña y el nombre base de datos
    $mysqli = conectar()or die("Error de conexion porque: " . $mysqli->connect_errno);
    // comprobar la conexión 
    if (mysqli_connect_errno()) {
        printf("Falló la conexión: %s\n", mysqli_connect_error());
        exit();
    }

    $login = $mysqli->real_escape_string($_POST['txtlogin']);
    $pass = $mysqli->real_escape_string($_POST['txtpass']);

    $resultado = $mysqli->query("SELECT * FROM usuario where USERNAME='$login' and PASSWORD='$pass' and ROL='administrador'");
    $resultado2 = $mysqli->query("SELECT * FROM usuario where USERNAME='$login' and PASSWORD='$pass' and ROL='granjero'");
$resultado3 = $mysqli->query("SELECT * FROM usuario where USERNAME='$login' and PASSWORD='$pass' and ROL='biologo'");
    $valida = $resultado->num_rows;
    $valida2 = $resultado2->num_rows;
    $valida3 = $resultado2->num_rows;
    if ($valida!= 0) {
        $datosUsu = $resultado->fetch_row();
        $_SESSION['resultado'] = $datosUsu;
        
        echo "<META HTTP-EQUIV='Refresh' CONTENT='0; URL=Menu_principal.php'>";
    }
    elseif ($valida2!= 0) {
        $datosUsu = $resultado2->fetch_row();
        $_SESSION['resultado'] = $datosUsu;

        echo "<META HTTP-EQUIV='Refresh' CONTENT='0; URL=Menu_granjero.php'>";
    }
    elseif ($valida3!= 0) {
        $datosUsu = $resultado3->fetch_row();
        $_SESSION['resultado'] = $datosUsu;

        echo "<META HTTP-EQUIV='Refresh' CONTENT='0; URL=Menu_granjero.php'>";
    }
    
    else {
        echo
        "<script> 
				var textnode = document.createTextNode('Campo  Usuario ó contraseña Incorrecto');
				document.getElementById('msg').appendChild(textnode);
			</script>";
    }
}
?>

		
