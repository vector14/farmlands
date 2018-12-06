<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
   <link rel="shortcut icon" type="image/x-icon" href="assets/icons/favicon.ico"/>
    <link rel="stylesheet" href="resources/all.css">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="resources/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="">
    <link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="css/estilos.css">	
	<script src="js/metodos.js"></script>
    <title>Consultar Producto </title>
  </head>
  <body>

   <nav class="navbar navbar-expand-lg navbar-success bg-success">
        <a class="navbar-brand" href="menu_principal.php"><img src="assets/icons/Farmlands_logo.png" width="50" height="auto" class="d-inline-block align-center" alt=""></a>
        <a class="navbar-brand" href="menu_principal.php"><img src="assets/icons/Letters.png" width="auto" height="45" class="d-inline-block align-center" alt=""></a>
        <span class="navbar-brand d-inline-block align-center justify-content-center" style="color:#fff;">Consultar Producto</span>
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

<div class="container">

    <div class="row"> 
    <table   class="table" style="margin-top: 50px;">
  <thead class="thead-dark">
    <tr>
      
      <th scope="col">ID PRODUCTO</th>
      <th scope="col">NOMBRE</th>
      <th scope="col">TIPO DE PRODUCTO</th>
      <th scope="col">DESCRIPCION</th>
      <th scope="col">CANTIDAD</th>
    
    </tr>
  </thead>
  <tbody>
  <?php
    include("conexion.php");
    $mysqli=conectar();
      $consulta= "SELECT * FROM  producto";
      if ($resultado = $mysqli->query($consulta)) 
      {
        while ($fila = $resultado->fetch_row()) 
        {         
          echo "<tr>";
          echo "<td>$fila[0]</td><td>$fila[1]</td><td>$fila[2]</td><td>$fila[3]</td><td>$fila[4]</td>"; 
          echo"<td>";           
            echo "<a  data-toggle='modal' data-target='#editUsu' data-id_producto='" .$fila[0] ."' data-nombre='" .$fila[1] ."' data-tipo_producto='" .$fila[2] ."' data-descripcion='" .$fila[3]."' data-cantidad='".$fila[4]."' class='btn btn-warning'><span class='glyphicon glyphicon-pencil'></span>Editar</a> ";     
          echo "<a class='btn btn-danger' href='eliminar_producto.php?ID_PRODUCTO=" .$fila[0] ."'><span class='glyphicon glyphicon-remove'></span>Eliminar</a>";    
          echo "</td>";
          echo "</tr>";
        }
        $resultado->close();
      }
      $mysqli->close();     
      
  

?>
  </tbody>
</table>  
  <button  data-toggle="modal" data-target="#nuevoUsu" class="btn btn-primary" type="submit">Nuevo Producto </button>
  <a href="Menu_principal.php"><button class="btn btn-primary" type="submit">Atras</button></a>
  <div class="modal" id="nuevoUsu" tabindex="-1" role="dialog" aria-labellebdy="myModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                        <h4>Nuevo Producto</h4>                       
                    </div>
                    <div class="modal-body">
                       <form action="crear_producto.php" method="GET">                  
                          
                      
                          <div class="form-group">
                            <label for="NOMBRE">NOMBRE:</label>
                            <input class="form-control" id="NOMBRE" name="NOMBRE" type="text" placeholder="NOMBRE" required pattern="[A-Za-z ]{2,30}"
         title="Digite solo letras"/>
                          </div>
                          <div class="form-group">
                            <label for="TIPO_PRODUCTO">TIPO DE PRODUCTO:</label>
         <select class="form-control" id="TIPO_PRODUCTO" name="TIPO_PRODUCTO" type="text" placeholder="TIPO_PRODUCTO">
                                    <option value="Fruta">Fruta</option>
                                    <option value="Verdura">Verdura</option>
                                    <option value="Cereales">Cereales</option>
                                    <option value="Legumbre">Legumbre</option>
                                    <option value="Tuberculo">Tuberculo</option>
                                </select>
                           </div>
                           <div class="form-group">
                            <label for="DESCRIPCION">DESCRIPCION:</label>
                            <input class="form-control" id="DESCRIPCION" name="DESCRIPCION" type="text" placeholder="DESCRIPCION" required pattern="[A-Za-z ]{2,30}"
         title="Digite solo letras"/>
                           </div>
                           <div class="form-group">
                            <label for="CANTIDAD">CANTIDAD:</label>
                            <input class="form-control" id="CANTIDAD" name="CANTIDAD" type="number" placeholder="CANTIDAD"/>
                           </div>
                          

              <input type="submit" class="btn btn-success" value="registar">
                       </form>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-warning" data-dismiss="modal">Cerrar</button>
                    </div>
                </div>
            </div>
        </div> 

<div class="modal" id="editUsu" tabindex="-1" role="dialog" aria-labellebdy="myModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                        <h4>Editar Producto</h4>
                    </div>
                    <div class="modal-body">                      
                       <form action="actualizar_producto.php" method="POST">                          
                                  
                       <div class="form-group">
                            <label for="DOCUMENTO">ID PRODUCTO:</label>
                            <input class="form-control" id="id_producto" name="id_producto" type="text"/></input>
                          </div>
                          <div class="form-group">
                            <label for="NOMBRE">NOMBRE:</label>
                            <input class="form-control" id="nombre" name="nombre" type="text" required pattern="[A-Za-z ]{2,30}"
         title="Digite solo letras"/></input>
                          </div>
                          <div class="form-group">
                            <label for="APELLIDO">TIPO DE PRODUCTO:</label>
                            <select class="form-control" id="TIPO_PRODUCTO" name="TIPO_PRODUCTO" type="text" placeholder="TIPO_PRODUCTO">
                                    <option value="Fruta">Fruta</option>
                                    <option value="Verdura">Verdura</option>
                                    <option value="Cereales">Cereales</option>
                                    <option value="Legumbre">Legumbre</option>
                                    <option value="Tuberculo">Tuberculo</option>
                                </select>
                           </div>
                           <div class="form-group">
                            <label for="CIUDAD">DESCRIPCION:</label>
                            <input class="form-control" id="descripcion" name="descripcion" type="text" required pattern="[A-Za-z ]{2,30}"
         title="Digite solo letras"/></input>
                           </div>
                           <div class="form-group">
                            <label for="CORREO">CNTIDAD:</label>
                            <input class="form-control" id="cantidad" name="cantidad" type="number" /></input>
                           </div>
                      

                  <input type="submit" class="btn btn-success">             
                       </form>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-warning" data-dismiss="modal">Cerrar</button>
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
      var recipient1 = button.data('id_producto')
      var recipient2 = button.data('nombre')
      var recipient3 = button.data('tipo_producto')
      var recipient5 = button.data('descripcion')
      var recipient6 = button.data('cantidad')
  
       // Extract info from data-* attributes
      // If necessary, you could initiate an AJAX request here (and then do the updating in a callback).
      // Update the modal's content. We'll use jQuery here, but you could use a data binding library or other methods instead.
     
      var modal = $(this)    
      modal.find('.modal-body #id_producto').val(recipient1)
      modal.find('.modal-body #nombre').val(recipient2)
      modal.find('.modal-body #tipo_producto').val(recipient3)
      modal.find('.modal-body #descripcion').val(recipient5)
      modal.find('.modal-body #cantidad').val(recipient6)
    
       
    });
    
  </script>
  
</body>
</html>


    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="resources/jquery-3.3.1.slim.min.js"></script>
    <script src="resources/popper.min.js"></script>
    <script src="resources/bootstrap.min.js"></script>
  </body>
</html>
