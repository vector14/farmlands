<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
   <link rel="shortcut icon" type="image/x-icon" href="assets/icons/favicon.ico"/>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="bootstrap.css">	

    <title>Consultar Granjero</title>
  </head>
  <body>

     <nav class="navbar navbar-expand-lg navbar-success bg-success">
        <a class="navbar-brand" href="menu_principal.php"><img src="assets/icons/Farmlands_logo.png" width="50" height="auto" class="d-inline-block align-center" alt=""></a>
        <a class="navbar-brand" href="menu_principal.php"><img src="assets/icons/Letters.png" width="auto" height="45" class="d-inline-block align-center" alt=""></a>
        <span class="navbar-brand d-inline-block align-center justify-content-center" style="color:#fff;">Consultar Granjero</span>
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
                   <input class="form-control" id="DOCUMENTO" name="DOCUMENTO" type="text" placeholder="DOCUMENTO"/>
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
                            <input class="form-control" id="MUNICIPIO" name="MUNICIPIO" type="text" placeholder="MUNICIPIO"/>
                          </div>
                           <div class="form-group">
                            <label for="CIUDAD">DEPARTAMENTO:</label>
                            <input class="form-control" id="DEPARTAMENTO" name="DEPARTAMENTO" type="text" placeholder="DEPARTAMENTO"/>
                          </div>
                           <div class="form-group">
                            <label for="DIRECCION">EDAD:</label>
                            <input class="form-control" id="EDAD" name="EDAD" type="number" placeholder="EDAD"/>
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
                       			<input class="form-control" id="documento" name="documento" type="text"/>
                       		</div>
                       		<div class="form-group">
                       			<label for="NOMBRE">NOMBRE:</label>
                       			<input class="form-control" id="nombre" name="nombre" type="text" />
                       		</div>
                       		<div class="form-group">
                       			<label for="APELLIDO">APELLIDO:</label>
                       			<input class="form-control" id="apellido" name="apellido" type="text" />
                           </div>
                           <div class="form-group">
                       			<label for="CORREO">TIPO DE DOCUMENTO:</label>
                       			<input class="form-control" id="tipo_documento" name="tipo_documento" type="text" />
                           </div>
                           <div class="form-group">
                       			<label for="">MUNICIPIO:</Label>
                       			<input class="form-control" id="municipio" name="municipio" type="text"/>
                       		</div>
                           <div class="form-group">
                       			<label for="TELEFONO">DEPARTAMENTO:</label>
                       			<input class="form-control" id="departamento" name="departamento" type="text"/>
                       		</div>
                           <div class="form-group">
                       			<label for="TELEFONO">EDAD:</label>
                       			<input class="form-control" id="edad" name="edad" type="text"/>
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
