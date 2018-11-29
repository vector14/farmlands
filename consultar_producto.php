<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
   <link rel="shortcut icon" type="image/x-icon" href="assets/icons/favicon.ico"/>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="">
    <link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="css/estilos.css">	
	<script src="js/metodos.js"></script>
    <title>Consultar Producto </title>
  </head>
  <body>

    <div class="pos-f-t">
  <div class="collapse" id="navbarToggleExternalContent">
    <div class="bg-dark p-4">
      <h5 class="text-white h4">Consultar Producto </h5>

      <span class="text-muted">Aqui puedes Consultar los productos</span>
         <button type="button" class="btn btn-outline-primary">Inicio</button>
     <button type="button" class="btn btn-outline-primary">Blog</button>
     <button type="button" class="btn btn-outline-primary">Contacto</button>
     <button type="button" class="btn btn-outline-primary">Proyecto</button>
     <button type="button" class="btn btn-outline-primary">Acerca De</button>

     <button type="button" class="btn btn-primary" id="po">
  Notificaciones <span class="badge badge-light">5</span>
    </div>
  </div>
  <nav class="navbar navbar-dark bg-dark">
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarToggleExternalContent" aria-controls="navbarToggleExternalContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
  </nav>
</div>
<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo01" aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarTogglerDemo01">
    <a class="navbar-brand" href="#">   <img src="pl.png" width="30" height="30" class="d-inline-block align-top" alt="">Bienvenidos A FarmLands Gestiòn Producto </a>
    <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
      <li class="nav-item active">
        <a class="nav-link" href="#">Inicio <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Blog</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Proyectos</a>
      </li>
      <li class="nav-item">
        <a class="nav-link disabled" href="#">Contacto</a>
      </li>
    </ul>
    <form class="form-inline my-2 my-lg-0">
      <input class="form-control mr-sm-2" type="search" placeholder="Escribe que buscas" aria-label="Search">
      <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Buscar</button>
    </form>
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
                       			<input class="form-control" id="NOMBRE" name="NOMBRE" type="text" placeholder="NOMBRE" required pattern="[A-Za-z]{2,30}"
         title="Digite solo letras"/>
                       		</div>
                       		<div class="form-group">
                       			<label for="TIPO_PRODUCTO">TIPO DE PRODUCTO:</label>
                       			<input class="form-control" id="TIPO_PRODUCTO" name="TIPO_PRODUCTO" type="text" placeholder="TIPO_PRODUCTO" required pattern="[A-Za-z]{2,30}"
         title="Digite solo letras"/>
                           </div>
                           <div class="form-group">
                       			<label for="DESCRIPCION">DESCRIPCION:</label>
                       			<input class="form-control" id="DESCRIPCION" name="DESCRIPCION" type="text" placeholder="DESCRIPCION" required pattern="[A-Za-z]{2,30}"
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
                       			<input class="form-control" id="nombre" name="nombre" type="text" required pattern="[A-Za-z]{2,30}"
         title="Digite solo letras"/></input>
                       		</div>
                       		<div class="form-group">
                       			<label for="APELLIDO">TIPO DE PRODUCTO:</label>
                       			<input class="form-control" id="tipo_producto" name="tipo_producto" type="text" required pattern="[A-Za-z]{2,30}"
         title="Digite solo letras"/></input>
                           </div>
                           <div class="form-group">
                       			<label for="CIUDAD">DESCRIPCION:</label>
                       			<input class="form-control" id="descripcion" name="descripcion" type="text" required pattern="[A-Za-z]{2,30}"
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
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
  </body>
</html>
