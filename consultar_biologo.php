 <!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
   <link rel="shortcut icon" type="image/x-icon" href="assets/icons/favicon.ico"/>
    <link rel="stylesheet" href="resources/all.css">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="bootstrap.css">	
    <title>Consultar Biologo</title>
  </head>
  <body>
      <nav class="navbar navbar-expand-lg navbar-success bg-success">
        <a class="navbar-brand" href="menu_principal.php"><img src="assets/icons/Farmlands_logo.png" width="50" height="auto" class="d-inline-block align-center" alt=""></a>
        <a class="navbar-brand" href="menu_principal.php"><img src="assets/icons/Letters.png" width="auto" height="45" class="d-inline-block align-center" alt=""></a>
        <span class="navbar-brand d-inline-block align-center justify-content-center" style="color:#fff;">Consultar Biologo</span>
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
     
      <th scope="col">Numero de Identificacion</th>
      <th scope="col">Nombre</th>
      <th scope="col">Apellidos</th>
      <th scope="col">Direccion</th>
      <th scope="col">Telefono</th>
      <th scope="col">Edad</th>
      <th scope="col">Ciudad</th>
      <th scope="col">Tipo de Documento</th>
      <th scope="col">Entidad Proveniente</th>
      
    </tr>
  </thead>
  <tbody>
  <?php
    include("conexion.php");
    $mysqli=conectar();
      $consulta= "SELECT * FROM  biologo";
      if ($resultado = $mysqli->query($consulta)) 
      {
        while ($fila = $resultado->fetch_row()) 
        {         
          echo "<tr>";
          echo "<td>$fila[0]</td><td>$fila[1]</td><td>$fila[2]</td><td>$fila[3]</td><td>$fila[4]</td><td>$fila[5]</td><td>$fila[6]</td><td>$fila[7]</td><td>$fila[8]</td>"; 
          echo"<td>";           
            echo "<a  data-toggle='modal' data-target='#editUsu' data-documento='" .$fila[0] ."' data-nombre='" .$fila[1] ."' data-apellido='" .$fila[2] ."' data-direccion='" .$fila[3]."' data-telefono='".$fila[4]."' data-edad='".$fila[5]."' data-ciudad='".$fila[6]."' data-tipo_documento='".$fila[7]."' data-entidad_proviniente='".$fila[8]."' class='btn btn-warning'><span class='glyphicon glyphicon-pencil'></span>Editar</a> ";     
          echo "<a class='btn btn-danger' href='eliminar_biologo.php?DOCUMENTO=" .$fila[0] ."'><span class='glyphicon glyphicon-remove'></span>Eliminar</a>";   
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
      
      <th scope="col"><button  data-toggle="modal" data-target="#nuevoUsu" class="btn btn-success" type="submit">nuevo biologo</button></th>
      <th scope="col"> <a href="Menu_principal.php"><button class="btn btn-success" type="submit">Atras</button></a></th>
     
    </tr>

    </table>
  <div class="modal" id="nuevoUsu" tabindex="-1" role="dialog" aria-labellebdy="myModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                       
                        <h4>            <img src="pl.png" width="30" height="30" class="d-inline-block align-top" alt="">Nuevo biologo</h4>                       
                    </div>
                    <div class="modal-body">
                       <form action="crear_biologo.php" method="GET">                 
                       <div class="form-group">
                            <label for="CIUDAD">DOCUMENTO:</label>
                            <input class="form-control" id="DOCUMENTO" name="DOCUMENTO" type="number" placeholder="DOCUMENTO"/>
                          </div>
                          <div class="form-group">
                            <label for="NOMBRE">NOMBRE:</label>
                            <input class="form-control" id="NOMBRE" name="NOMBRE" type="text" placeholder="NOMBRE" required pattern="[A-Za-z ]{2,30}"
         title="Digite solo letras"/>
                          </div>
                          <div class="form-group">
                            <label for="APELLIDO">APELLIDO:</label>
                            <input class="form-control" id="APELLIDO" name="APELLIDO" type="text" placeholder="APELLIDO" required pattern="[A-Za-z ]{2,30}"
         title="Digite solo letras"/>
                           </div>
                           <div class="form-group">
                            <label for="DIRECCION">DIRECCION:</label>
                            <input class="form-control" id="DIRECCION" name="DIRECCION" type="text" placeholder="DIRECCION"/>
                           </div>
                             <div class="form-group">
                            <label for="USUARIO">USUARIO:</label>
                            <input class="form-control" id="USUARIO" name="USUARIO" type="text" placeholder="USUARIO"/>
                          </div>
                           <div class="form-group">
                            <label for="CLAVE">CONTRASEÑA:</label>
                            <input class="form-control" id="CLAVE" name="CLAVE" type="text" placeholder="CLAVE"/>
                          </div>
                           <div class="form-group">
                            <label for="TELEFONO">TELEFONO:</label>
                            <input class="form-control" id="TELEFONO" name="TELEFONO" type="number" placeholder="TELEFONO"/>
                           </div>
                           <div class="form-group">
                            <label for="EDAD">EDAD:</label>
                            <input class="form-control" id="EDAD" name="EDAD" type="number" placeholder="EDAD"/>
                          </div>
                           <div class="form-group">
                            <label for="CIUDAD">CIUDAD:</label>
                            <input class="form-control" id="CIUDAD" name="CIUDAD" type="text" placeholder="CIUDAD" required pattern="[A-Za-z ]{2,30}"
         title="Digite solo letras"/>
                          </div>
                           <div class="form-group">
                            <label for="TIPO_DOCUMENTO">TIPO_DOCUMENTO:</label>
                            <input class="form-control" id="TIPO_DOCUMENTO" name="TIPO_DOCUMENTO" type="text" placeholder="TIPO_DOCUMENTO" required pattern="[A-Za-z.]{2,30}"
         title="Digite solo letras"/>
                          </div>
                           <div class="form-group">
                            <label for="ENTIDAD_PROVENIENTE">ENTIDAD_PROVENIENTE:</label>
                            <input class="form-control" id="ENTIDAD_PROVENIENTE" name="ENTIDAD_PROVENIENTE" type="text" placeholder="ENTIDAD_PROVENIENTE" required pattern="[A-Za-z ]{2,30}"
         title="Digite solo letras"/>
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
            
                        <h4> <img src="pl.png" width="30" height="30" class="d-inline-block align-top" alt="">  Editar Biologo</h4>
                    </div>
                    <div class="modal-body">                      
                       <form action="actualizar_biologo.php" method="POST">                           
                                  
                       <div class="form-group">
                            <label for="DOCUMENTO">DOCUMENTO:</label>
                            <input class="form-control" id="documento" name="documento" type="number"/></input>
                          </div>
                          <div class="form-group">
                            <label for="NOMBRE">NOMBRE:</label>
                            <input class="form-control" id="nombre" name="nombre" type="text" required pattern="[A-Za-z ]{2,30}"
         title="Digite solo letras"/></input>
                          </div>
                          <div class="form-group">
                            <label for="APELLIDO">APELLIDO:</label>
                            <input class="form-control" id="apellido" name="apellido" type="text" required pattern="[A-Za-z ]{2,30}"
         title="Digite solo letras"/></input>
                           </div>
                           <div class="form-group">
                            <label for="CIUDAD">DIRECCION:</label>
                            <input class="form-control" id="direccion" name="direccion" type="text" /></input>
                           </div>
                           <div class="form-group">
                            <label for="TELEFONO">TELEFONO:</label>
                            <input class="form-control" id="telefono" name="telefono" type="number"/>
                          </div>
                           <div class="form-group">
                            <label for="TELEFONO">EDAD:</label>
                            <input class="form-control" id="edad" name="edad" type="number"/>
                          </div>
                           <div class="form-group">
                            <label for="TELEFONO">CIUDAD:</label>
         <select class="form-control" id="ciudad" name="ciudad" type="text" placeholder="Ciudad">
                                    <option value="Bogotá Distrito Capital">Bogotá Distrito Capital</option>
                                    <option value="Amazonas">Amazonas</option>
                                    <option value="Antioquia">Antioquia</option>
                                    <option value="Arauca">Arauca</option>
                                    <option value="Atlántico">Atlántico</option>
                                    <option value="Bolívar">Bolívar</option>
                                    <option value="Boyacá">Boyacá</option>
                                    <option value="Caldas">Caldas</option>
                                    <option value="Caquetá">Caquetá</option>
                                    <option value="Casanare">Casanare</option>
                                    <option value="Cauca">Cauca</option>
                                    <option value="Cesar">Cesar</option>
                                    <option value="Cordoba">Cordoba</option>
                                    <option value="Cundinamarca">Cundinamarca</option>
                                    <option value="Chocó">Chocó</option>
                                    <option value="Guainía">Guainía</option>
                                    <option value="Guaviare">Guaviare</option>
                                    <option value="Huila">Huila</option>
                                    <option value="La Guajira">La Guajira</option>
                                    <option value="Magdalena">Magdalena</option>
                                    <option value="Meta">Meta</option>
                                    <option value="Nariño">Nariño</option>
                                    <option value="Norte de Santander">Norte de Santander</option>
                                    <option value="Putumayo">Putumayo</option>
                                    <option value="Quindio">Risaralda</option>
                                    <option value="Santander">Santander</option>
                                    <option value="San Andrés y Providencia">San Andrés y Providencia</option>
                                    <option value="Sucre">Sucre</option>
                                    <option value="Tolima">Tolima</option>
                                    <option value="Valle del Cauca">Valle del Cauca</option>
                                    <option value="Vaupés">Vaupés</option>
                                    <option value="Vichada">Vichada</option>
                                </select>
                          </div>
                           <div class="form-group">
                            <label for="TELEFONO">TIPO DE DOCUMENTO:</label>
                            <input class="form-control" id="tipo_documento" name="tipo_documento" type="text" required pattern="[A-Za-z.]{2,30}"
         title="Digite solo letras"/>
                          </div>
                           <div class="form-group">
                            <label for="CORREO">ENTIDAD PROVENIENTE:</label>
                            <input class="form-control" id="entidad_proviniente" name="entidad_proviniente" type="text" required pattern="[A-Za-z]{2,30}"
         title="Digite solo letras" /></input>
                           </div>
                          

                  <input type="submit" class="btn btn-success">   
                  <button type="button" class="btn btn-warning" data-dismiss="modal">Cerrar</button>          
                       </form>
                    </div>
                   
       
  <script src="js/jquery.min.js"></script>
  <script src="js/bootstrap.min.js"></script>   
  <script>       
      $('#editUsu').on('show.bs.modal', function (event) {
      var button = $(event.relatedTarget) // Button that triggered the modal
      var recipient1 = button.data('documento')
      var recipient2 = button.data('nombre')
      var recipient3 = button.data('apellido')
      var recipient5 = button.data('telefono')
      var recipient6 = button.data('edad')
      var recipient7 = button.data('direccion')
      var recipient8 = button.data('ciudad')
      var recipient9 = button.data('tipo_documento')
      var recipient10 = button.data('entidad_proviniente')
       // Extract info from data-* attributes
      // If necessary, you could initiate an AJAX request here (and then do the updating in a callback).
      // Update the modal's content. We'll use jQuery here, but you could use a data binding library or other methods instead.
     
      var modal = $(this)    
      modal.find('.modal-body #documento').val(recipient1)
      modal.find('.modal-body #nombre').val(recipient2)
      modal.find('.modal-body #apellido').val(recipient3)
      modal.find('.modal-body #telefono').val(recipient5)
      modal.find('.modal-body #edad').val(recipient6)
      modal.find('.modal-body #direccion').val(recipient7)
      modal.find('.modal-body #ciudad').val(recipient8)
      modal.find('.modal-body #tipo_documento').val(recipient9)
      modal.find('.modal-body #entidad_proviniente').val(recipient10)
    });
    
  </script>
  
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    
  </body>
</html>

