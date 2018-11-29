<?php
	session_start();
	if(isset($_SESSION['resultado']))
	{
        $cadena= $_SESSION ['resultado'];
       $rol= $cadena[3];
       $DOCUMENTO= $cadena[4];
?><!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
   <link rel="shortcut icon" type="image/x-icon" href="assets/icons/favicon.ico"/>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="bootstrap.css">

    <title>Consultar Seccion</title>
  </head>
  <body>

      <nav class="navbar navbar-expand-lg navbar-success bg-success">
        <a class="navbar-brand" href="#"> <img src="pl.png" width="30" height="30" class="d-inline-block align-top" alt="">Gestión sección</a>
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
    
      <th scope="col">Id Seccion</th>
      <th scope="col">Dimenciones</th>
      <th scope="col">Ubicacion</th>
      <th scope="col">id cultivo</th>
      </tr>
  </thead>
  <tbody>
  <?php
		include("conexion.php");
    $mysqli=conectar();
			$consulta= "SELECT * FROM  seccion_de_cultivo";
			if ($resultado = $mysqli->query($consulta)) 
			{
				while ($fila = $resultado->fetch_row()) 
				{					
					echo "<tr>";
					echo "<td>$fila[0]</td><td>$fila[1]</td><td>$fila[2]</td><td>$fila[3]</td>";	
          echo"<td>";		
   				
				    echo "<a  data-toggle='modal' data-target='#editUsu' data-ID_SECCION='" .$fila[0] ."' data-dimensiones='" .$fila[1] ."' data-ubicacion='" .$fila[2] ."' data-id_cultivo='" .$fila[3]."' class='btn btn-warning'><span class='glyphicon glyphicon-pencil'></span>Editar</a> ";			
					echo "<a class='btn btn-danger' href='eliminar_seccion.php?ID_SECCION=" .$fila[0] ."'><span class='glyphicon glyphicon-remove'></span>Eliminar</a>";		
					echo "</td>";
					echo "</tr>";
				}
				$resultado->close();
			}
			$mysqli->close();			
			
	

?>
</table>
<table   class="table" >

<tr>
  
  <th scope="col"><button  data-toggle="modal" data-target="#nuevoUsu" class="btn btn-success" type="submit">nueva sección</button></th>
  <?php
  if ($rol=='administrador'){
     
    ?>
  <th scope="col"> <a href="Menu_principal.php"><button class="btn btn-success" type="submit">Atras</button></a></th>
   <?php
  }
  else if ($rol=='granjero'){
      
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
                       
                        <h4><img src="pl.png" width="30" height="30" class="d-inline-block align-top" alt="">Nueva seccion</h4>                       
                    </div>
                    <div class="modal-body">
                       <form action="crear_seccion.php" method="GET">  
                       <div class="form-group">
                            <label for="ID_SECCION">ID SECCION:</label>
                            <input class="form-control" id="ID_SECCION" name="ID_SECCION" type="number" placeholder="ID_SECCION"/>
                          </div>               
                          <div class="form-group">
                            <label for="NOMBRE">DIMENSIONES:</label>
                            <input class="form-control" id="DIMENSIONES" name="DIMENSIONES" type="number" placeholder="DIMENSIONES"/>
                          </div>
                          <div class="form-group">
                            <label for="APELLIDO">UBICACION:</label>
                            <input class="form-control" id="UBICACION" name="UBICACION" type="text" placeholder="UBICACION" required pattern="[A-Za-z]{2,30}"
         title="Digite solo letras"/>
                           </div>
                           <div class="form-group">
                            <label for="DIRECCION">ID_CULTIVO:</label>
                             <select class="form-control" name="ID_CULTIVO" id="ID_CULTIVO"> 
<?php
      $mysqli=conectar();
      $consulta= "SELECT * FROM  cultivo";
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
                       
                        <h4><img src="pl.png" width="30" height="30" class="d-inline-block align-top" alt="">Editar sección</h4>
                    </div>
                    <div class="modal-body">                      
                       <form action="actualizar_seccion_de_cultivo.php" method="POST">                       		
                       		        
                       <div class="form-group">
                       			<label for="DOCUMENTO">ID SECCION:</label>
                       			<input class="form-control" id="id_seccion" name="id_seccion" type="text"/></input>
                       		</div>
                       		<div class="form-group">
                       			<label for="NOMBRE">DIMENCIONES:</label>
                       			<input class="form-control" id="dimensiones" name="dimensiones" type="number" /></input>
                       		</div>
                       		<div class="form-group">
                       			<label for="APELLIDO">UBICACION:</label>
                       			<input class="form-control" id="ubicacion" name="ubicacion" type="text" required pattern="[A-Za-z]{2,30}"
         title="Digite solo letras" /></input>
                           </div>
                           <div class="form-group">
                       			<label for="CIUDAD">ID CULTIVO:</label>
                       		<input class="form-control" id="id_cultivo" name="id_cultivo" type="text" /></input>
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
		  var recipient1 = button.data('id_seccion')
		  var recipient2 = button.data('dimensiones')
		  var recipient3 = button.data('ubicacion')
      var recipient5 = button.data('id_cultivo')
    
		   // Extract info from data-* attributes
		  // If necessary, you could initiate an AJAX request here (and then do the updating in a callback).
		  // Update the modal's content. We'll use jQuery here, but you could use a data binding library or other methods instead.
		 
		  var modal = $(this)		 
		  modal.find('.modal-body #id_seccion').val(recipient1)
		  modal.find('.modal-body #dimensiones').val(recipient2)
		  modal.find('.modal-body #ubicacion').val(recipient3)
      modal.find('.modal-body #id_cultivo').val(recipient5)
     
   		 
		});
		
	</script>
	

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <
  </body>
</html>

<?php
	}
	else
	{
		?>
		 <META HTTP-EQUIV="Refresh" CONTENT="0; URL=index.php">
		 <?php
	}
?>
