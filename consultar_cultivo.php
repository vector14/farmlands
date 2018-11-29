<?php
session_start();
if(isset($_SESSION['resultado']))
{
$cadena = $_SESSION ['resultado'];
$rol = $cadena[3];
$DOCUMENTO = $cadena[4];
?><!doctype html>
<html lang="en">
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
   <link rel="shortcut icon" type="image/x-icon" href="assets/icons/favicon.ico"/>
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="bootstrap.css">

        <title>Consultar Cultivo</title>
    </head>
    <body>

<nav class="navbar navbar-expand-lg navbar-success bg-success">
        <a class="navbar-brand" href="menu_principal.php"><img src="assets/icons/Farmlands_logo.png" width="50" height="auto" class="d-inline-block align-center" alt=""></a>
        <a class="navbar-brand" href="menu_principal.php"><img src="assets/icons/Letters.png" width="auto" height="45" class="d-inline-block align-center" alt=""></a>
        <span class="navbar-brand d-inline-block align-center justify-content-center" style="color:#fff;">Consultar Cultivo</span>
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
        
        <table   class="table" >
            <thead class="bg-success">
                <tr>

                    <th scope="col">Id Cultivo</th>
                    <th scope="col">Titulo</th>
                    <th scope="col">Estado</th>
                    <th scope="col">Clima Actual</th>
                    <th scope="col">Area de Cultivo</th>
                    <th scope="col">Fecha de Inicio</th>
                    <th scope="col">Producto</th>
                    <th scope="col">Granjero</th>
                    <th scope="col">id granja</th>
                    <th scope="col"> NIVEL DEL MAR</th>
                   
                </tr>
            </thead>
            <tbody>
                <?php
                include("conexion.php");
                $mysqli = conectar();

                $consulta = "SELECT * FROM  cultivo";
                if ($resultado = $mysqli->query($consulta)) {
                while ($fila = $resultado->fetch_row()) {
                echo "<tr>";
                echo "<td>$fila[0]</td><td>$fila[1]</td><td>$fila[2]</td><td>$fila[3]</td><td>$fila[4]</td><td>$fila[5]</td><td>$fila[6]</td><td>$fila[7]</td><td>$fila[8]</td><td>$fila[9]</td>";
                echo"<td>";
                echo "<a  data-toggle='modal' data-target='#editUsu' data-id_cultivo='" . $fila[0] . "' data-titulo='" . $fila[1] . "' data-estado='" . $fila[2] . "' data-clima_actual='" . $fila[3] . "' data-area_cultivo='" . $fila[4] . "' data-fecha_inicio='" . $fila[5] . "' data-producto='" . $fila[6] . "' data-granjero='" . $fila[7] . "' data-id_granja='" . $fila[8] . "' data-mar='" . $fila[9]  . "' class='btn btn-warning'><span class='glyphicon glyphicon-pencil'></span>Editar</a> ";
                echo "<a class='btn btn-danger' href='eliminar_cultivo.php?ID_CULTIVO=" . $fila[0] . "'><span class='glyphicon glyphicon-remove'></span>Eliminar</a>";
                echo "</td>";
                echo "</tr>";
                }
                $resultado->close();
                }
                $mysqli->close();
                ?>
            </tbody>
        </table>
        <table   class="table" >

            <tr>

                <th scope="col"><button  data-toggle="modal" data-target="#nuevoUsu" class="btn btn-success" type="submit">nuevo cultivo</button></th>
                <?php
                if ($rol == 'administrador'){
                ?>
                <th scope="col"> <a href="Menu_principal.php"><button class="btn btn-success" type="submit">Atras</button></a></th>
                <?php
                }
                else if ($rol == 'granjero'){
                ?>
                <th scope="col"> <a href="Menu_granjero.php"><button class="btn btn-success" type="submit">Atras</button></a></th>

<?php
}
?>

            </tr>

        </table>
        <div class="modal" id="nuevoUsu" tabindex="-1" role="dialog" aria-labellebdy="myModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">

                        <h4><img src="pl.png" width="30" height="30" class="d-inline-block align-top" alt="">Nuevo cultivo</h4>                       
                    </div>
                    <div class="modal-body">
                        <form action="crear_cultivo.php" method="GET">                 
                            <div class="form-group">
                                <label for="NOMBRE">TITULO:</label>
                                <input class="form-control" id="TITULO" name="TITULO" type="text" placeholder="TITULO" required pattern="[A-Za-z]{2,30}"
         title="Digite solo letras"/>
                            </div>
                            <div class="form-group">
                                <label for="APELLIDO">ESTADO:</label>
                                <select class="form-control" id="ESTADO" name="ESTADO" type="text" placeholder="ESTADO">
                                    <option value="EXCELENTE">EXCELENTE</option>
                                    <option value="BUENO">BUENO</option>
                                    <option value="REGULAR">REGULAR</option>
                                    <option value="MALO">MALO</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="CLIMA_ACTUAL">CLIMA ACTUAL:</label>
                                <input class="form-control" id="CLIMA_ACTUAL" name="CLIMA_ACTUAL" type="text" placeholder="CLIMA_ACTUAL" />
                            </div>
                            <div class="form-group">
                                <label for="TELEFONO">AREA DEL CULTIVO:</label>
                                <input class="form-control" id="AREA_CULTIVO" name="AREA_CULTIVO" type="number" placeholder="AREA_CULTIVO"/>
                            </div>
                            <div class="form-group">
                                <label for="EDAD">FECHA DE INICIO:</label>
                                <input class="form-control" id="FECHA_INICIO" name="FECHA_INICIO" type="date" placeholder="FECHA_INICIO"/>
                            </div>
                            <div class="form-group">
                                <label for="CIUDAD">PRODUCTO:</label>
                                <select class="form-control" name="PRODUCTO" id="PRODUCTO"  > 
<?php
$mysqli = conectar();
$consulta = "SELECT * FROM  producto";
if ($resultado = $mysqli->query($consulta)) {
while ($fila = $resultado->fetch_row()) {
echo "<option value=$fila[0]  >    $fila[1]  </option>";
}
$resultado->close();
}
$mysqli->close();
?>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="CANTIDAD_PROD">CANTIDAD DE PRODUCTO A USAR:</label>
                                <input class="form-control" id="CANTIDAD_PROD" name="CANTIDAD_PROD" type="number" placeholder="CANTIDAD"/>
                            </div>
                            <?php
                           if ($rol=='administrador'){
                               
                          ?>
                          <div class="form-group">
                            <label for="GRANJERO">GRANJERO:</label>
                             <select class="form-control"name="GRANJERO" id="GRANJERO" > 
<?php
        $mysqli=conectar();
      $consulta= "SELECT * FROM  granjero";
      if ($resultado = $mysqli->query($consulta)) 
      {
        while ($fila = $resultado->fetch_row()) 
        {         
          echo "<option value=$fila[0]  >    $fila[1]  </option>";
 
        }
        $resultado->close();
      }
      $mysqli->close();     

?>
                             </select>
                            </div>
        <?php }
  else if ($rol=='granjero'){
      
       
  
    ?>
                           <input  value="<?=$DOCUMENTO ?>" class="form-control" id="GRANJERO" name="GRANJERO" type="hidden"/>
  <?php }?>             
                            <div class="form-group">
                                
                                <label for="CIUDAD">ID DE GRANJA:</label>
                                <select class="form-control" name="ID_GRANJA" id="ID_GRANJA"  "> 
                            <?php
                            $mysqli = conectar();
                              if ($rol=='administrador'){
        $consulta= "SELECT * FROM  granja";
    }
  else if ($rol=='granjero'){
      
        $consulta= "SELECT * FROM  granja where GRANJERO='$DOCUMENTO'";
    }
                            if ($resultado = $mysqli->query($consulta)) {
                            while ($fila = $resultado->fetch_row()) {
                            echo "<option value=$fila[0]  >    $fila[1]  </option>";
                            }
                            $resultado->close();
                            }
                            $mysqli->close();
                            ?>


                                </select>


                            </div>
                            <div class="form-group">

                                <label for="mar"> NIVEL DEL MAR:</label>
                                <input class="form-control" id="mar" name="NIVEL_DEL_MAR" type="number" />
                            </div>
                         

                            <input type="submit" class="btn btn-success" value="registar">
                            <button type="button" class="btn btn-warning" data-dismiss="modal">Cerrar</button>
                        </form>
                    </div>

                </div>
            </div>
        </div> 

        <div class="modal" id="editUsu" tabindex="-1" role="dialog" aria-labellebdy="myModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">

                        <h4><img src="pl.png" width="30" height="30" class="d-inline-block align-top" alt="">Editar Cultivo</h4>
                    </div>
                    <div class="modal-body">                      
                        <form action="actualizar_cultivo.php" method="POST">                       		

                            <div class="form-group">
                                <label for="id_cultivo">ID_CULTIVO:</label>
                                <input class="form-control" id="id_cultivo" name="id_cultivo" type="text"/></input>
                            </div>
                            <div class="form-group">
                                <label for="titulo">TITULO:</label>
                                <input class="form-control" id="titulo" name="titulo" type="text" required pattern="[A-Za-z]{2,30}"
         title="Digite solo letras"/></input>
                            </div>
                            <div class="form-group">
                                <label for="estado">ESTADO:</label>
                                <input class="form-control" id="estado" name="estado" type="text" /></input>
                            </div>
                            <div class="form-group">
                                <label for="clima_actual">CLIMA ACTUAL:</label>
                                <input class="form-control" id="clima_actual" name="clima_actual" type="text" required pattern="[A-Za-z]{2,30}"
         title="Digite solo letras"/></input>
                            </div>
                            <div class="form-group">
                                <label for="area_cultivo">AREA DE CULTIVO:</label>
                                <input class="form-control" id="area_cultivo" name="area_cultivo" type="number" /></input>
                            </div>
                            <div class="form-group">
                                <label for="fecha_inicio">FECHA DE INICIO:</label>
                                <input class="form-control" id="fecha_inicio" name="fecha_inicio" type="date"/>
                            </div>
                            <div class="form-group">
                                <label for="producto">PRODUCTO:</label>
                                <input class="form-control" id="producto" name="producto" type="text"/>
                            </div>
                            <div class="form-group">
                                <label for="CANTIDAD_PROD">CANTIDAD DE PRODUCTO A USAR:</label>
                                <input class="form-control" id="CANTIDAD_PROD" name="cantidad_prod" type="number" placeholder="CANTIDAD"/>
                            </div>
                            <div class="form-group">
                                <label for="granjero">GRANJERO:</label>
                                <input class="form-control" id="granjero" name="granjero" type="text"/>
                            </div>
                            <div class="form-group">
                                <label for="id_granja">ID GRANJA:</label>
                                <input class="form-control" id="id_granja" name="id_granja" type="text"/>
                            </div>
                            <div class="form-group">
                                <label for="mar"> NIVEL DEL MAR:</label>
                                <input class="form-control" id="mar" name="mar" type="number" />
                            </div>
                           

                            <input type="submit" class="btn btn-success">		
                            <button type="button" class="btn btn-warning" data-dismiss="modal">Cerrar</button>					
                        </form>
                    </div>

                </div>
            </div>
        </div> 



    </div>
    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>		
    <script>
        $('#editUsu').on('show.bs.modal', function (event) {
            var button = $(event.relatedTarget) // Button that triggered the modal
            var recipient1 = button.data('id_cultivo')
            var recipient2 = button.data('titulo')
            var recipient3 = button.data('estado')
            var recipient5 = button.data('clima_actual')
            var recipient6 = button.data('area_cultivo')
            var recipient7 = button.data('fecha_inicio')
            var recipient8 = button.data('producto')
            var recipient9 = button.data('granjero')
            var recipient10 = button.data('id_granja')
            var recipient11 = button.data('mar')
            var recipient12 = button.data('secciones')
            var recipient13 = button.data('cantidad_prod')
            // Extract info from data-* attributes
            // If necessary, you could initiate an AJAX request here (and then do the updating in a callback).
            // Update the modal's content. We'll use jQuery here, but you could use a data binding library or other methods instead.

            var modal = $(this)
            modal.find('.modal-body #id_cultivo').val(recipient1)
            modal.find('.modal-body #titulo').val(recipient2)
            modal.find('.modal-body #estado').val(recipient3)
            modal.find('.modal-body #clima_actual').val(recipient5)
            modal.find('.modal-body #area_cultivo').val(recipient6)
            modal.find('.modal-body #fecha_inicio').val(recipient7)
            modal.find('.modal-body #producto').val(recipient8)
            modal.find('.modal-body #granjero').val(recipient9)
            modal.find('.modal-body #id_granja').val(recipient10)
            modal.find('.modal-body #mar').val(recipient11)
            modal.find('.modal-body #secciones').val(recipient12)
            modal.find('.modal-body #cantidad_prod').val(recipient13)


        });

    </script>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->

</body>
</html>
<?php
}
else {
    ?>
    <META HTTP-EQUIV="Refresh" CONTENT="0; URL=index.php">
    <?php
}
?>