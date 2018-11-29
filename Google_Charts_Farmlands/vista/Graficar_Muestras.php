<!doctype html>
<html lang="en">
    <head>
        <title></title>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <!-- Bootstrap CSS -->
        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">
    </head>
    <body>
    <link rel="stylesheet" href="bootstrap.css">	
    <nav class="navbar navbar-expand-lg navbar-success bg-success">
        <a class="navbar-brand" href="#"> <img src="pl.png" width="30" height="30" class="d-inline-block align-top" alt="">Graficar Muestras</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span   class="navbar-toggler-icon"></span>
        </button>
      
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
              <a class="nav-link" href="../../menu_principal.php">Inicio <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Blog</a>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              Proyectos
              </a>
              <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                <a class="dropdown-item" href="#">software</a>
                <a class="dropdown-item" href="#">Hadware</a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="#">mas información</a>
              </div>
            </li>
            <li class="nav-item">
              <a class="nav-link " href="#">Contacto</a>
            </li>
          </ul>
          <form class="form-inline my-2 my-lg-0">
      <input class="form-control mr-sm-2" type="search" placeholder="Escribe que buscas" aria-label="Search">
      <button class="btn btn-outline-light my-2 my-sm-0" type="submit">Buscar</button>
    </form>
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