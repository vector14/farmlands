<!doctype html>
<html lang="en">
    <head>
        <title>Graficar Muestras</title>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
   <link rel="shortcut icon" type="image/x-icon" href="../../assets/icons/favicon.ico"/>
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
        <!-- Bootstrap CSS -->
        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">
    </head>
    <body>
    <link rel="stylesheet" href="bootstrap.css">	
    
    <nav class="navbar navbar-expand-lg navbar-success bg-success">
        <a class="navbar-brand" href="menu_principal.php"><img src="../../assets/icons/Farmlands_logo.png" width="50" height="auto" class="d-inline-block align-center" alt=""></a>
        <a class="navbar-brand" href="menu_principal.php"><img src="../../assets/icons/Letters.png" width="auto" height="45" class="d-inline-block align-center" alt=""></a>
        <span class="navbar-brand d-inline-block align-center justify-content-center" style="color:#fff;">Consultar Comprador</span>
        <button class="navbar-toggler" style="outline:0px" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <i id="icon-toggler" style="color:#fff; font-size:22px" class="fas fa-bars"></i>
        </button>
      
        <div class="collapse navbar-collapse justify-content-end" id="navbarSupportedContent">
                <ul class="nav justify-content-end">
                    <li class="nav-item">
                        <a href="cerrar.php"><button class="btn btn-success" style="" type="submit" ><i class="fas fa-power-off"></i> Cerrar Sesión</button></a>
                    </li>
                </ul>   
        </div>
      </nav>

        <script>
            $(document).on('change', '#TipoGraf', function (event) {
                $('#selectedvalue').val($("#TipoGraf option:selected").val());
                var valor = $("#selectedvalue").val();
                if (valor === "1") {
                        $('#formulario').attr('action', 'comboChart_PH.php');
                } else if (valor === "2") {                   
                        $('#formulario').attr('action', 'comboChart_Temperatura.php');
                } else if (valor === "3") {
                        $('#formulario').attr('action', 'comboChart_Humedad.php');
                } else if (valor === "4") {
                        $('#formulario').attr('action', 'comboChart_PA.php');
                } else {
                    $('#formulario').attr('action', '#');
                }
            });
            $(document).on('submit', '#formulario', function(event){
                $('#selectedvalue').val($("#TipoGraf option:selected").val());
                var valor = $("#selectedvalue").val();
                if (valor === "0") {
                        alert("Seleccione una variable");
                }
            })
        </script>
        <form id="formulario" method="post" action="" style="width: 50%; height: 70%; margin:4%  auto 0 auto ">
            <label for="limite" class="card-title">Digite el cultivo donde está la muestra, la variable y el numero de muestras que desea graficar</label>
            <h6 class="card-subtitle mb-2 text-muted">(Se graficaran de las ultimas muestras tomadas, dependiendo el limite que desee)</h6>
            
            <div class="input-group mb-3">
                <div class="input-group-prepend">
                    <label class="input-group-text" for="Cultivo">Cultivo</label>
                </div>
                <select class="custom-select" id="Cultivo" name="cultivo">
                    <option selected value="0">Seleccione el cultivo</option>
              <?php
                include("../../conexion.php");
                $mysqli = conectar();

                $consulta = "SELECT * FROM  cultivo";
                if ($resultado = $mysqli->query($consulta)) {
                    while ($fila = $resultado->fetch_row()) {
                    echo "<option value=$fila[0]>$fila[0]</option>";
                    }
                    $resultado->close();
                    }
                    $mysqli->close();
                ?>
                </select>
            </div>
            
            <div class="input-group mb-3">
                <div class="input-group-prepend">
                    <label class="input-group-text" for="TipoGraf">Variable</label>
                </div>
                <select class="custom-select" id="TipoGraf">
                    <option selected value="0">Seleccione la variable que quiere graficar</option>
                    <option value="1">PH</option>
                    <option value="2">Temperatura</option>
                    <option value="3">Humedad</option>
                    <option value="4">Presion Atmosferica</option>
                </select>
            </div>

            <input type="number" name="limite" id="limite" class="custom-select" placeholder="Digite aqui un numero" required>
                        
            
            <input style="width: 50%; height: 70%; margin:4%  45% 0 25% " type="submit" class="btn btn-success" value="Aceptar" id="boton">
            <hidden id="selectedvalue"></hidden>
        </form>

        <!-- Optional JavaScript -->
        <!-- jQuery first, then Popper.js, then Bootstrap JS -->

        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js" integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh" crossorigin="anonymous"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js" integrity="sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ" crossorigin="anonymous"></script>
    </body>
</html>