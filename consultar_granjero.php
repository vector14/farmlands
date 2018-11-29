<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="bootstrap.css">	

    <title>Consultar Granjero</title>
  </head>
  <body>

     <nav class="navbar navbar-expand-lg navbar-success bg-success">
        <a class="navbar-brand" href="#"> <img src="pl.png" width="30" height="30" class="d-inline-block align-top" alt="">Gestión Granjero</a>
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

      <th scope="col">Numero Id</th>
      <th scope="col">Nombre</th>
      <th scope="col">Apellido</th>
      <th scope="col">Tipo de documento</th>
      <th scope="col">Municipio</th>
      <th scope="col">Departamento</th>
      <th scope="col">Edad</th>
      </tr>
  </thead>
  <tbody>
  <?php
include("conexion.php");
$mysqli=conectar();
			$consulta= "SELECT * FROM  granjero";
			if ($resultado = $mysqli->query($consulta)) 
			{
				while ($fila = $resultado->fetch_row()) 
				{					
					echo "<tr>";
					echo "<td>$fila[0]</td><td>$fila[1]</td><td>$fila[2]</td><td>$fila[3]</td><td>$fila[4]</td><td>$fila[5]</td><td>$fila[6]</td>";	
					echo"<td>";						
				    echo "<a  data-toggle='modal' data-target='#editUsu' data-DOCUMENTO='" .$fila[0] ."' data-nombre='" .$fila[1] ."' data-apellido='" .$fila[2] ."' data-tipo_documento='" .$fila[3]."' data-municipio='".$fila[4]."' data-departamento='".$fila[5]."' data-edad='".$fila[6]."' class='btn btn-warning'><span class='glyphicon glyphicon-pencil'></span>Editar</a> ";			
					echo "<a class='btn btn-danger' href='eliminar_granjero.php?DOCUMENTO=" .$fila[0] ."'><span class='glyphicon glyphicon-remove'></span>Eliminar</a>";		
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
  
  <th scope="col"><button  data-toggle="modal" data-target="#nuevoUsu" class="btn btn-success" type="submit">Nuevo Granjero</button></th>
  <th scope="col"> <a href="Menu_principal.php"><button class="btn btn-success" type="submit">Atras</button></a></th>
 
</tr>

</table>
  <div class="modal" id="nuevoUsu" tabindex="-1" role="dialog" aria-labellebdy="myModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        
                        <h4><img src="pl.png" width="30" height="30" class="d-inline-block align-top" alt="">Nuevo granjero</h4>                       
                    </div>
                    <div class="modal-body">
                       <form action="crear_granjero.php" method="GET">                 
                       <div class="form-group">
                            <label for="CIUDAD">DOCUMENTO:</label>
                   <input class="form-control" id="DOCUMENTO" name="DOCUMENTO" type="number" placeholder="DOCUMENTO"/>
                          </div>
                          <div class="form-group">
                            <label for="NOMBRE">NOMBRE:</label>
                            <input class="form-control" id="NOMBRE" name="NOMBRE" type="text" placeholder="NOMBRE" required pattern="[A-Za-z]{2,30}"
         title="Digite solo letras"/>
                          </div>
                          <div class="form-group">
                            <label for="APELLIDO">APELLIDO:</label>
                            <input class="form-control" id="APELLIDO" name="APELLIDO" type="text" placeholder="APELLIDO" required pattern="[A-Za-z]{2,30}"
         title="Digite solo letras"/>
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
                            <label for="TELEFONO">TIPO DOCUMENTO:</label>
                            <input class="form-control" id="TIPO_DOCUMENTO" name="TIPO_DOCUMENTO" type="text" placeholder="TIPO_DOCUMENTO"/>
                           </div>
         <div class="form-group">
                                <label for="EDAD">MUNICIPIO:</label>
                                <select class="form-control" id="MUNICIPIO" name="MUNICIPIO" type="text" placeholder="MUNICIPIO">
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
                            <label for="CIUDAD">DEPARTAMENTO:</label>
<input class="form-control" id="DEPARTAMENTO" name="DEPARTAMENTO" type="text" placeholder="DEPARTAMENTO" />
</div>
                           <div class="form-group">
                            <label for="DIRECCION">EDAD:</label>
                            <input class="form-control" id="EDAD" name="EDAD" type="number" placeholder="EDAD" />
                           </div>

                         
                           <input type="submit" class="btn btn-success" value="registar">
              <button type="button"  class="btn   btn-warning  left " data-dismiss="modal">Cerrar</button>
              </form>
                    </div>
                   
                </div>
            </div>
        </div> 
                      
            

     <div class="modal" id="editUsu" tabindex="-1" role="dialog" aria-labellebdy="myModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        
                        <h4>   <img src="pl.png" width="30" height="30" class="d-inline-block align-top" alt=""> Editar Granjero</h4>
                    </div>
                    <div class="modal-body">                      
                       <form action="actualizar_granjero.php" method="POST">                       		
                       		        
                       <div class="form-group">
                       			<label for="DOCUMENTO">DOCUMENTO:</label>
                       			<input class="form-control" id="documento" name="documento" type="number"/>
                       		</div>
                       		<div class="form-group">
                       			<label for="NOMBRE">NOMBRE:</label>
                       			<input class="form-control" id="nombre" name="nombre" type="text" required pattern="[A-Za-z]{2,30}"
         title="Digite solo letras"/>
                       		</div>
                       		<div class="form-group">
                       			<label for="APELLIDO">APELLIDO:</label>
                       			<input class="form-control" id="apellido" name="apellido" type="text" required pattern="[A-Za-z]{2,30}"
         title="Digite solo letras"/>
                           </div>
                           <div class="form-group">
                       			<label for="CORREO">TIPO DE DOCUMENTO:</label>
                       			<input class="form-control" id="tipo_documento" name="tipo_documento" type="text" required pattern="[A-Za-z]{2,30}"
         title="Digite solo letras"/>
                           </div>
                           <div class="form-group">
                       			<label for="">MUNICIPIO:</Label>
                       			<input class="form-control" id="municipio" name="municipio" type="text"/>
                       		</div>
                           <div class="form-group">
                       			<label for="TELEFONO">DEPARTAMENTO:</label>
                       			<input class="form-control" id="departamento" name="departamento" type="text" required pattern="[A-Za-z]{2,30}"
         title="Digite solo letras"/>
                       		</div>
                           <div class="form-group">
                       			<label for="TELEFONO">EDAD:</label>
                       			<input class="form-control" id="edad" name="edad" type="number"/>
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
      var recipient5 = button.data('tipo_documento')
      var recipient6 = button.data('municipio')
      var recipient7 = button.data('departamento')
      var recipient8 = button.data('edad')
		   // Extract info from data-* attributes
		  // If necessary, you could initiate an AJAX request here (and then do the updating in a callback).
		  // Update the modal's content. We'll use jQuery here, but you could use a data binding library or other methods instead.
		 
		  var modal = $(this)		 
		  modal.find('.modal-body #documento').val(recipient1)
		  modal.find('.modal-body #nombre').val(recipient2)
		  modal.find('.modal-body #apellido').val(recipient3)
      modal.find('.modal-body #tipo_documento').val(recipient5)
      modal.find('.modal-body #municipio').val(recipient6)
      modal.find('.modal-body #departamento').val(recipient7)
      modal.find('.modal-body #edad').val(recipient8)
   		 
		});
		
	</script>

  </body>
</html>
