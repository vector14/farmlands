<?php
        $localhost="den1.mysql5.gear.host";
        $usuario="farmlandsdb";
        $contraseña="Gf7lq?P5~5oH";
        $basededatos="farmlandsdb";
$con = new mysqli("$localhost", "$usuario", "$contraseña", "$basededatos");
//$con = new mysqli("localhost", "root", "", "farmlandsdb");
//$sql = "SELECT fecha_muestra, ph, temperatura_m, humedad, presion_atmosferica FROM muestra_prueba";
$limite = $_POST["limite"];
$cultivo = $_POST["cultivo"];
$sql =  "SELECT id_muestra, humedad FROM muestra_prueba mp
        INNER JOIN seccion_de_cultivo sc ON mp.seccion_cultivo = sc.id_seccion
        where sc.id_cultivo = $cultivo ORDER BY id_muestra DESC LIMIT $limite";
$res = $con->query($sql);
$con->close();
?>
<html>
    <head>
        <script src="js/jquery-3.3.1.min.js" type="text/javascript"></script>
        <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css"/>      
        <script src="js/bootstrap.min.js" type="text/javascript"></script>   
        <script src="js/menu.js" type="text/javascript"></script>
        <script type="text/javascript" src="js/loader.js"></script>
        <script type="text/javascript">
            google.charts.load('current', {'packages': ['corechart']});
            google.charts.setOnLoadCallback(drawVisualization);
            function drawVisualization() {
                // Some raw data (not necessarily accurate)
                var data = google.visualization.arrayToDataTable([
                    ['No.Muestra', 'Humedad'],
<?php
while ($fila = $res->fetch_assoc()) {
    //$fecha = explode("-", $fila["fecha_muestra"]);
    echo "[" . $fila["id_muestra"] . ", " . $fila["humedad"] . " ],";
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
                title: 'Porcentaje de humedad de las muestras de cultivo',
                        curveType: 'function',
                        hAxis:{
                            format: ' '
                        },
                        vAxis:{
                            title: 'Porcentaje de humedad(%)',
                            format: ' '
                        },
                legend: {position: 'bottom'}
                };
                var chart = new google.visualization.LineChart(document.getElementById('chart_div'));
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
 <nav class="navbar navbar-expand-lg navbar-success bg-green">
        <a class="navbar-brand" href="#" style="color:white"> <img src="pl.png" width="30" height="30" class="d-inline-block align-top" alt="">Tabla de presion Atmosferica</a>
        <a class="navbar-brand right" href="Graficar_Muestras.php">Volver al inicio</a>
    </nav>
    
 
</head>
<body>
    <style>
        input[type="color"]{
            padding: 0;
            border: 0;
        }
        .navbar a img{
            display: inline;
            
        }
        .navbar .right{
            float: right;
            color: white
        }
        .bg-green{
            background-color: #19c43e;
        }
    </style>
        <h5 class="card-title">Grafico de humedad de las ultimas <?php echo $limite ?> muestras</h5>
        <h6 class="card-subtitle mb-2 text-muted">Para ver los detalles de la muestra tomada, de click en uno de los elementos del grafico y luego en el boton: "Consultar Muestra Seleccionada"</h6>
        <div id="chart_div" style="width: 50%; height: 70%; margin:0 auto" ></div>
    <hidden id="codigomuestra"></hidden>
    <button class="btn btn-primary" style="width: 20%; height: 7%; margin:0 0 0 40% " id="btnConsultar">Consultar Muestra Seleccionada</button>
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