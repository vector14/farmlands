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
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="bootstrap.css">	

    <title>Consultar Granja</title>
  </head>
  <body>

     <nav class="navbar navbar-expand-lg navbar-success bg-success">
        <a class="navbar-brand" href="menu_principal.php"><img src="assets/icons/Farmlands_logo.png" width="50" height="auto" class="d-inline-block align-center" alt=""></a>
        <a class="navbar-brand" href="menu_principal.php"><img src="assets/icons/Letters.png" width="auto" height="45" class="d-inline-block align-center" alt=""></a>
        <span class="navbar-brand d-inline-block align-center justify-content-center" style="color:#fff;">Consultar Granja</span>
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
     
      <th scope="col">Id Granja</th>
      <th scope="col">Nombre</th>
      <th scope="col">Terreno</th>
      <th scope="col">Piso Termico</th>
      <th scope="col">Ubicacion</th>
      <th scope="col">Producto Especializado</th>
      <th scope="col">Id Granjero</th>
      </tr>
  </thead>
  <tbody>
  <?php
		include("conexion.php");
    $mysqli=conectar();
    if ($rol=='administrador'){
        $consulta= "SELECT * FROM  granja";
    }
  else if ($rol=='granjero'){
      
        $consulta= "SELECT * FROM  granja where GRANJERO='$DOCUMENTO'";
    }
			
			if ($resultado = $mysqli->query($consulta)) 
			{
				while ($fila = $resultado->fetch_row()) 
				{					
					echo "<tr>";
					echo "<td>$fila[0]</td><td>$fila[1]</td><td>$fila[2]</td><td>$fila[3]</td><td>$fila[4]</td><td>$fila[5]</td><td>$fila[6]</td>";	
					echo"<td>";						
				    echo "<a  data-toggle='modal' data-target='#editUsu' data-id_granja ='" .$fila[0] ."' data-nombre='" .$fila[1] ."' data-terreno='" .$fila[2] ."' data-piso_termico='" .$fila[3]."' data-ubicacion='".$fila[4]."' data-prodcuto_especializado='".$fila[5]."' data-id_granjero='".$fila[6]."' class='btn btn-warning'><span class='glyphicon glyphicon-pencil'></span>Editar</a> ";			
            echo "<a class='btn btn-danger' href='eliminar_granja.php?ID_GRANJA=" .$fila[0] ."'><span class='glyphicon glyphicon-remove'></span>Eliminar</a>";		
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
  
  <th scope="col"><button  data-toggle="modal" data-target="#nuevoUsu" class="btn btn-success" type="submit">Nueva Granja</button></th>
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
                        
                        <h4><img src="pl.png" width="30" height="30" class="d-inline-block align-top" alt="">Nueva granja</h4>                       
                    </div>
                    <div class="modal-body">
                       <form action="crear_granja.php" method="GET">                 
                          <div class="form-group">
                            <label for="NOMBRE">NOMBRE:</label>
                            <input class="form-control" id="NOMBRE" name="NOMBRE" type="text" placeholder="NOMBRE" required pattern="[A-Za-z]{2,30}"
         title="Digite solo letras"/>
                          </div>
                          <div class="form-group">
                            <label for="APELLIDO">TERRENO:</label>
                            <input class="form-control" id="TERRENO" name="TERRENO" type="number" placeholder="TERRENO"/>
                           </div>
                           <div class="form-group">
                            <label for="DIRECCION">PISO TERMICO:</label>
                            <input class="form-control" id="PISO_TERMICO" name="PISO_TERMICO" type="text" placeholder="PISO_TERMICO"/>
                           </div>
                           <div class="form-group">
                            <label for="TELEFONO">UBICACION:</label>
                            <input class="form-control" id="UBICACION" name="UBICACION" type="text" placeholder="UBICACION"/>
                           </div>
                           <div class="form-group">
                            <label for="EDAD">PRODUCTO ESPECIALIZADO:</label>
                            <input class="form-control" id="PRODUCTO_ESPECIALIZADO" name="PRODUCTO_ESPECIALIZADO" type="text" placeholder="PRODUCTO_ESPECIALIZADO" />
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
                
                        <h4><img src="pl.png" width="30" height="30" class="d-inline-block align-top" alt="">Editar Granja</h4>
                    </div>
                    <div class="modal-body">                      
                       <form action="actualizar_granja.php" method="POST">                       		
                       		        
                       <div class="form-group">
                       			<label for="DOCUMENTO">ID GRANJA:</label>
                       			<input class="form-control" id="id_granja" name="id_granja" type="text"/></input>
                       		</div>
                       		<div class="form-group">
                       			<label for="NOMBRE">NOMBRE:</label>
                       			<input class="form-control" id="nombre" name="nombre" type="text" required pattern="[A-Za-z]{2,30}"
         title="Digite solo letras"/></input>
                       		</div>
                       		<div class="form-group">
                       			<label for="APELLIDO">TERRENO:</label>
                       			<input class="form-control" id="terreno" name="terreno" type="number" /></input>
                           </div>
                           <div class="form-group">
                       			<label for="CIUDAD">PISO TERMICO:</label>
                       			<input class="form-control" id="piso_termico" name="piso_termico" type="text" /></input>
                           </div>
                           <div class="form-group">
                       			<label for="CORREO">UBICACION:</label>
                       			<input class="form-control" id="ubicacion" name="ubicacion" type="text" required pattern="[A-Za-z]{2,30}"
         title="Digite solo letras" /></input>
                           </div>
                           <div class="form-group">
                       			<label for="TELEFONO">PRODUCTO ESPECIALIZADO:</label>
                       			<input class="form-control" id="prodcuto_especializado" name="prodcuto_especializado" type="text"/>
                       		</div>
                   

                              <div class="form-group">
                       			<label for="TELEFONO">ID GRANJERO:</label>
                       			<input class="form-control" id="id_granjero" name="id_granjero" type="text"/>
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
		  var recipient1 = button.data('id_granja')
		  var recipient2 = button.data('nombre')
		  var recipient3 = button.data('terreno')
      var recipient5 = button.data('piso_termico')
      var recipient6 = button.data('ubicacion')
      var recipient7 = button.data('prodcuto_especializado')
      var recipient8 = button.data('id_granjero')
		   // Extract info from data-* attributes
		  // If necessary, you could initiate an AJAX request here (and then do the updating in a callback).
		  // Update the modal's content. We'll use jQuery here, but you could use a data binding library or other methods instead.
		 
		  var modal = $(this)		 
		  modal.find('.modal-body #id_granja').val(recipient1)
		  modal.find('.modal-body #nombre').val(recipient2)
		  modal.find('.modal-body #terreno').val(recipient3)
      modal.find('.modal-body #piso_termico').val(recipient5)
      modal.find('.modal-body #ubicacion').val(recipient6)
      modal.find('.modal-body #prodcuto_especializado').val(recipient7)
      modal.find('.modal-body #id_granjero').val(recipient8)
		});
		
	</script>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
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