<?php
        $localhost="den1.mysql5.gear.host";
        $usuario="farmlandsdb";
        $contraseña="Un7pr!E9U~90";
        $basededatos="farmlandsdb";
$con = new mysqli("$localhost", "$usuario", "$contraseña", "$basededatos");
//$sql = "SELECT fecha_muestra, ph, temperatura_m, humedad, presion_atmosferica FROM muestra_prueba";
$limite = $_POST["limite"];
$sql = "SELECT id_muestra, presion_atmosferica FROM muestra_prueba order by id_muestra desc LIMIT $limite";
$res = $con->query($sql);
$con->close();
?>
<html>
    <head>
    <link rel="stylesheet" href="bootstrap.css">	
    <nav class="navbar navbar-expand-lg navbar-success bg-success">
        <a class="navbar-brand" href="#"> <img src="pl.png" width="30" height="30" class="d-inline-block align-top" alt="">tabla de temperatura</a>
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
        <script src="js/jquery-3.3.1.min.js" type="text/javascript"></script>
        <script src="js/bootstrap.min.js" type="text/javascript"></script>   
        <script src="js/menu.js" type="text/javascript"></script>
        <script type="text/javascript" src="js/loader.js"></script>
        <script type="text/javascript">
            google.charts.load('current', {'packages': ['bar']});
            google.charts.setOnLoadCallback(drawStuff);

            function drawStuff() {
                // Some raw data (not necessarily accurate)
                var data = google.visualization.arrayToDataTable([
                    ['No.Muestra', 'Presion Atmosferica'],
<?php
while ($fila = $res->fetch_assoc()) {
    //$fecha = explode("-", $fila["fecha_muestra"]);
    echo "[" . $fila["id_muestra"] . ", " . $fila["presion_atmosferica"] . " ],";
}
?>

                    //         ['Fecha', 'PH(Acidez)', 'Temperatura(C°)', 'Humedad', 'Presion Atmosferica(hPa)', 'Promedio'],
                    //         ['2004/05',  165,        938,               522,       998,                        614.6],
                    //         ['2005/06',  135,        1120,              599,       1268,                       682],
                    //         ['2006/07',  157,        1167,              587,       807,                        623],
                    //         ['2007/08',  139,        1110,              615,       968,                        609.4],
                    //         ['2008/09',  136,        691,               629,       1026,                       569.6]
                ]);

                var options = {
                title: 'Presion Atmosferica de las muestras de cultivo',
                        width: 700,
                        legend: {position: 'none'},
                        chart: {title: 'Presion Atmosferica de las muestras de cultivo',
                                subtitle: 'valor proporcionado en Hectopascales(hPa)'},
                        bars: 'horizontal', // Required for Material Bar Charts.
                        axes: {
                        x: {
                        0: {side: 'top', label: 'hPa'}, // Top x-axis.
                        1: {side: 'left', format: ' '}
                        }
                        },
                        vAxis:{
                            format: ' '
                        },
                bar: {groupWidth: "10%"}
                };

                var chart = new google.charts.Bar(document.getElementById('chart_div'));



                function selectHandler() {
                    var selectedItem = chart.getSelection()[0];
                    if (selectedItem) {
                        var code = data.getValue(selectedItem.row, 0);
                        //alert('el codigo de la muestra es ' + code);
                        document.getElementById("codigomuestra").value = code;
                    }
                }

                google.visualization.events.addListener(chart, 'select', selectHandler);
                chart.draw(data, options);
            }
//            function button(){
//                alert(document.getElementById("codigomuestra").value);
//            }

        </script>
    </head>
    <body>
        <style>
            input[type="color"]{
                padding: 0;
                border: 0;
            }
        </style>
        <h5 class="card-title">Grafico de presion atmosferica de las ultimas <?php echo $limite ?> muestras</h5>
        <h6 class="card-subtitle mb-2 text-muted">Para ver los detalles de la muestra tomada, de click en uno de los elementos del grafico y luego en el boton: "Consultar Muestra Seleccionada"</h6>
        <div id="chart_div"style="width: 50%; height: 70%; margin:0 auto "></div>
    <hidden id="codigomuestra"></hidden>

    <button class="btn btn-primary" style="width: 20%; height: 7%; margin:0 0 0 40% "id="btnConsultar">Consultar Muestra Seleccionada</button>

    <div id="consultaMuestra" class="modal fade" tabindex="-1" role="dialog">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                        <h4 class="modal-title">Detalles de la muestra seleccionada</h4>
                    </div>
                    <div class="modal-body">

                    </div>
                    <div class="modal-footer">

                    </div>
                </div>
            </div>
        </div>
    </div>


    <script src="js/gestionargraficas.js" type="text/javascript"></script>
</body>
</html>
