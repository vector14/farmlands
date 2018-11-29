 <!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
   <link rel="shortcut icon" type="image/x-icon" href="assets/icons/favicon.ico"/>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="bootstrap.css">	

    <title>Consultar Comprador</title>
  </head>
  <body>
  <nav class="navbar navbar-expand-lg navbar-success bg-success">
        <a class="navbar-brand" href="#"> <img src="pl.png" width="30" height="30" class="d-inline-block align-top" alt="">Gestión comprador</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span   class="navbar-toggler-icon"></span>
        </button>
      
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
              <a class="nav-link" href="#">Inicio <span class="sr-only">(current)</span></a>
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
      <table   class="table" >
  <thead class="bg-success">
    <tr>
      
      <th scope="col">Numero de Identificacion</th>
      <th scope="col">Nombre</th>
      <th scope="col">Apellidos</th>
      <th scope="col">Edad</th>
      <th scope="col">Tipo de Documento</th>
      <th scope="col">Ciudad</th>
      <th scope="col">Direccion</th>
    </tr>
  </thead>
  <tbody>
  <?php
		include("conexion.php");
    $mysqli=conectar();
			$consulta= "SELECT * FROM  comprador";
			if ($resultado = $mysqli->query($consulta)) 
			{
				while ($fila = $resultado->fetch_row()) 
				{					
					echo "<tr>";
					echo "<td>$fila[0]</td><td>$fila[1]</td><td>$fila[2]</td><td>$fila[3]</td><td>$fila[4]</td><td>$fila[5]</td><td>$fila[6]</td>";	
					echo"<td>";						
				    echo "<a  data-toggle='modal' data-target='#editUsu' data-documento='" .$fila[0] ."' data-nombre='" .$fila[1] ."' data-apellido='" .$fila[2] ."' data-edad='" .$fila[3]."' data-tipo_documento='".$fila[4]."' data-ciudad='".$fila[5]."' data-direccion='".$fila[6]."' class='btn btn-warning'><span class='glyphicon glyphicon-pencil'></span>Editar</a> ";			
					echo "<a class='btn btn-danger' href='eliminar_comprador.php?DOCUMENTO=" .$fila[0] ."'><span class='glyphicon glyphicon-remove'></span>Eliminar</a>";		
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
      
      <th scope="col"><button  data-toggle="modal" data-target="#nuevoUsu" class="btn btn-success" type="submit">nuevo Comprador</button></th>
      <th scope="col"> <a href="Menu_principal.php"><button class="btn btn-success" type="submit">Atras</button></a></th>
     
    </tr>

    </table>
  <div class="modal" id="nuevoUsu" tabindex="-1" role="dialog" aria-labellebdy="myModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        
                        <h4>    <img src="pl.png" width="30" height="30" class="d-inline-block align-top" alt=""> Nuevo comprador</h4>                       
                    </div>
                    <div class="modal-body">
                       <form action="crear_comprador.php" method="GET">                 
                       <div class="form-group">
                            <label for="CIUDAD">DOCUMENTO:</label>
                            <select class="form-control" name="DOCUMENTO" id="DOCUMENTO"  > 
<?php
       $mysqli=conectar();
      $consulta= "SELECT * FROM usuario";
      if ($resultado = $mysqli->query($consulta)) 
      {
        while ($fila = $resultado->fetch_row()) 
        {         
          echo "<option value=$fila[4]  >    $fila[1]  </option>";
 
        }
        $resultado->close();
      }
      $mysqli->close();     

?>
     </select>
                          </div>
                          <div class="form-group">
                            <label for="NOMBRE">NOMBRE:</label>
                            <input class="form-control" id="NOMBRE" name="NOMBRE" type="text" placeholder="NOMBRE"/>
                          </div>
                          <div class="form-group">
                            <label for="APELLIDO">APELLIDO:</label>
                            <input class="form-control" id="APELLIDO" name="APELLIDO" type="text" placeholder="APELLIDO"/>
                           </div>
                           <div class="form-group">
                            <label for="DIRECCION">EDAD:</label>
                            <input class="form-control" id="EDAD" name="EDAD" type="number" placeholder="EDAD"/>
                           </div>
                           <div class="form-group">
                            <label for="TELEFONO">TIPO DOCUMENTO:</label>
                            <input class="form-control" id="TIPO_DOCUMENTO" name="TIPO_DOCUMENTO" type="text" placeholder="TIPO_DOCUMENTO"/>
                           </div>
                           <div class="form-group">
                            <label for="EDAD">CIUDAD:</label>
                            <input class="form-control" id="CIUDAD" name="CIUDAD" type="text" placeholder="CIUDAD"/>
                          </div>
                           <div class="form-group">
                            <label for="CIUDAD">DIRECCION:</label>
                            <input class="form-control" id="DIRECCION" name="DIRECCION" type="text" placeholder="DIRECCION"/>
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
                        
                        <h4>   <img src="pl.png" width="30" height="30" class="d-inline-block align-top" alt=""> Editar Comprador</h4>
                    </div>
                    <div class="modal-body">                      
                       <form action="actualizar_comprador.php" method="POST">                       		
                       		        
                       <div class="form-group">
                       			<label for="DOCUMENTO">DOCUMENTO:</label>
                       			<input class="form-control" id="documento" name="documento" type="text"/></input>
                       		</div>
                       		<div class="form-group">
                       			<label for="NOMBRE">NOMBRE:</label>
                       			<input class="form-control" id="nombre" name="nombre" type="text" /></input>
                       		</div>
                       		<div class="form-group">
                       			<label for="APELLIDO">APELLIDO:</label>
                       			<input class="form-control" id="apellido" name="apellido" type="text" /></input>
                           </div>
                           <div class="form-group">
                       			<label for="CIUDAD">EDAD:</label>
                       		<input class="form-control" id="edad" name="edad" type="text" /></input>
                           </div>
                           <div class="form-group">
                       			<label for="CORREO">TIPO DE DOCUMENTO:</label>
                       			<input class="form-control" id="tipo_documento" name="tipo_documento" type="text" /></input>
                           </div>
                           <div class="form-group">
                       			<label for="TELEFONO">CIUDAD:</label>
                       			<input class="form-control" id="ciudad" name="ciudad" type="text"/>
                       		</div>
                           <div class="form-group">
                       			<label for="TELEFONO">DIRRECCION:</label>
                       			<input class="form-control" id="direccion" name="direccion" type="text"/>
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
		  var recipient1 = button.data('documento')
		  var recipient2 = button.data('nombre')
		  var recipient3 = button.data('apellido')
      var recipient5 = button.data('edad')
      var recipient6 = button.data('tipo_documento')
      var recipient7 = button.data('ciudad')
      var recipient8 = button.data('direccion')
		   // Extract info from data-* attributes
		  // If necessary, you could initiate an AJAX request here (and then do the updating in a callback).
		  // Update the modal's content. We'll use jQuery here, but you could use a data binding library or other methods instead.
		 
		  var modal = $(this)		 
		  modal.find('.modal-body #documento').val(recipient1)
		  modal.find('.modal-body #nombre').val(recipient2)
		  modal.find('.modal-body #apellido').val(recipient3)
      modal.find('.modal-body #edad').val(recipient5)
      modal.find('.modal-body #tipo_documento').val(recipient6)
      modal.find('.modal-body #ciudad').val(recipient7)
      modal.find('.modal-body #direccion').val(recipient8)
   		 
		});
		
	</script>
	

   
  </body>
</html>
