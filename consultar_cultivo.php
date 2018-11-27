 <!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="bootstrap.css">

    <title>Consultar Cultivo</title>
  </head>
  <body>
   

    <nav class="navbar navbar-expand-lg navbar-success bg-success">
        <a class="navbar-brand" href="#"> <img src="pl.png" width="30" height="30" class="d-inline-block align-top" alt="">Gestión cultivo</a>
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
     $mysqli=conectar();
	
			$consulta= "SELECT * FROM  cultivo";
			if ($resultado = $mysqli->query($consulta)) 
			{
				while ($fila = $resultado->fetch_row()) 
				{					
					echo "<tr>";
					echo "<td>$fila[0]</td><td>$fila[1]</td><td>$fila[2]</td><td>$fila[3]</td><td>$fila[4]</td><td>$fila[5]</td><td>$fila[6]</td><td>$fila[7]</td><td>$fila[8]</td><td>$fila[9]</td>";	
					echo"<td>";						
				    echo "<a  data-toggle='modal' data-target='#editUsu' data-id_cultivo='" .$fila[0] ."' data-titulo='" .$fila[1] ."' data-estado='" .$fila[2] ."' data-clima_actual='" .$fila[3]."' data-area_cultivo='".$fila[4]."' data-fecha_inicio='".$fila[5]."' data-producto='".$fila[6]."' data-granjero='".$fila[7]."' data-id_granja='".$fila[8]."' data-mar='".$fila[9]."' class='btn btn-warning'><span class='glyphicon glyphicon-pencil'></span>Editar</a> ";			
            echo "<a class='btn btn-danger' href='eliminar_cultivo.php?ID_CULTIVO=" .$fila[0] ."'><span class='glyphicon glyphicon-remove'></span>Eliminar</a>";			
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
  <th scope="col"> <a href="Menu_principal.php"><button class="btn btn-success" type="submit">Atras</button></a></th>
 
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
                            <input class="form-control" id="TITULO" name="TITULO" type="text" placeholder="TITULO"/>
                          </div>
                          <div class="form-group">
                            <label for="APELLIDO">ESTADO:</label>
                            <input class="form-control" id="ESTADO" name="ESTADO" type="text" placeholder="ESTADO"/>
                           </div>
                           <div class="form-group">
                            <label for="DIRECCION">CLIMA ACTUAL:</label>
                            <input class="form-control" id="CLIMA_ACTUAL" name="CLIMA_ACTUAL" type="text" placeholder="CLIMA_ACTUAL"/>
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
    $mysqli=conectar();
      $consulta= "SELECT * FROM  producto";
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
                          <div class="form-group">
                            <label for="CIUDAD">GRANJERO:</label>
                           <select class="form-control" name="GRANJERO" id="GRANJERO"  "> 
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
                          <div class="form-group">
                            <label for="CIUDAD">ID DE GRANJA:</label>
                            <select class="form-control" name="ID_GRANJA" id="ID_GRANJA"  "> 
<?php
     $mysqli=conectar();
      $consulta= "SELECT * FROM  granja";
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
                          <div class="form-group">
                            <label for="TELEFONO"> NIVEL DEL MAR:</label>
                            <input class="form-control" id="NIVEL_DEL_MAR" name="NIVEL_DEL_MAR" type="number" placeholder="NIVEL_DEL_MAR"/>
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
                       			<label for="DOCUMENTO">ID_CULTIVO:</label>
                       			<input class="form-control" id="id_cultivo" name="id_cultivo" type="text"/></input>
                       		</div>
                       		<div class="form-group">
                       			<label for="NOMBRE">TITULO:</label>
                       			<input class="form-control" id="titulo" name="titulo" type="text" /></input>
                       		</div>
                       		<div class="form-group">
                       			<label for="APELLIDO">ESTADO:</label>
                       			<input class="form-control" id="estado" name="estado" type="text" /></input>
                           </div>
                           <div class="form-group">
                       			<label for="CIUDAD">CLIMA ACTUAL:</label>
                       		<input class="form-control" id="clima_actual" name="clima_actual" type="text" /></input>
                           </div>
                           <div class="form-group">
                       			<label for="CORREO">AREA DE CULTIVO:</label>
                       			<input class="form-control" id="area_cultivo" name="area_cultivo" type="text" /></input>
                           </div>
                           <div class="form-group">
                       			<label for="TELEFONO">FECHA DE INICO:</label>
                       			<input class="form-control" id="fecha_inicio" name="fecha_inicio" type="text"/>
                       		</div>
                           <div class="form-group">
                       			<label for="TELEFONO">PRODUCTO:</label>
                       			<input class="form-control" id="producto" name="producto" type="text"/>
                       		</div>
                           <div class="form-group">
                       			<label for="TELEFONO">GRANJERO:</label>
                       			<input class="form-control" id="granjero" name="granjero" type="text"/>
                       		</div>
                           <div class="form-group">
                       			<label for="TELEFONO">ID GRNAJA:</label>
                       			<input class="form-control" id="id_granja" name="id_granja" type="text"/>
                       		</div>
                           <div class="form-group">
                            <label for="TELEFONO"> NIVEL DEL MAR:</label>
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
   		 
   		 
		});
		
	</script>
	
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
  
  </body>
</html>
