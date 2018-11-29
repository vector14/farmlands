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

    <title>Consultar Muestra</title>
  </head>
  <body>

      <nav class="navbar navbar-expand-lg navbar-success bg-success">
        <a class="navbar-brand" href="menu_principal.php"><img src="assets/icons/Farmlands_logo.png" width="50" height="auto" class="d-inline-block align-center" alt=""></a>
        <a class="navbar-brand" href="menu_principal.php"><img src="assets/icons/Letters.png" width="auto" height="45" class="d-inline-block align-center" alt=""></a>
        <span class="navbar-brand d-inline-block align-center justify-content-center" style="color:#fff;">Consultar Comprador</span>
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
      
      <th scope="col">ID MUESTRA</th>
      <th scope="col">DESCRIPCION</th>
      <th scope="col">FECHA DE MUESTRA</th>
      <th scope="col">SECCION DE CULTIVO</th>
      <th scope="col">PH</th>
      <th scope="col">EXCAVACION</th>
      <th scope="col">TEMPERATURA</th>
      <th scope="col">HUMEDAD</th>
      </tr>
  </thead>
  <tbody>
  <?php
		include("conexion.php");
    $mysqli=conectar();
     if ($rol=='administrador'){
       $consulta= "SELECT * FROM  muestra";
    }
  else if ($rol=='granjero'){
      
        $consulta= "SELECT * FROM  muestra where GRANJERO='$DOCUMENTO'";
    }
			
			if ($resultado = $mysqli->query($consulta)) 
			{
				while ($fila = $resultado->fetch_row()) 
				{					
					echo "<tr>";
					echo "<td>$fila[0]</td><td>$fila[1]</td><td>$fila[2]</td><td>$fila[3]</td><td>$fila[4]</td><td>$fila[5]</td><td>$fila[6]</td><td>$fila[7]</td>";	
					echo"<td>";						
				    echo "<a  data-toggle='modal' data-target='#editUsu' data-ID_MUESTRA='" .$fila[0] ."' data-descripcion='" .$fila[1] ."' data-fecha_muestra='" .$fila[2] ."' data-seccion_cultivo='" .$fila[3]."' data-ph='".$fila[4]."' data-excavacion='".$fila[5]."' data-temperatura='".$fila[6]."' data-humedad='".$fila[7]."' class='btn btn-warning'><span class='glyphicon glyphicon-pencil'></span>Editar</a> ";			
					echo "<a class='btn btn-danger' href='eliminar_muestra.php?ID_MUESTRA=" .$fila[0] ."'><span class='glyphicon glyphicon-remove'></span>Eliminar</a>";		
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
  
  <th scope="col"><button  data-toggle="modal" data-target="#nuevoUsu" class="btn btn-success" type="submit">Nueva Muestra</button></th>
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
               
                        <h4><img src="pl.png" width="30" height="30" class="d-inline-block align-top" alt="">Nueva muestra</h4>                       
                    </div>
                    <div class="modal-body">
                       <form action="crear_muestra.php" method="GET">                 
                          <div class="form-group">
                            <label for="DOCUMENTO">DESCRIPCION:</label>
                            <input class="form-control" id="DESCRIPCION" name="DESCRIPCION" type="text" placeholder="DESCRIPCION" required pattern="[A-Za-z]{2,300}"
         title="Digite solo letras"/>
                          </div>
                          <div class="form-group">
                            <label for="NOMBRE">FECHA DE LA MUESTRA:</label>
                            <input class="form-control" id="FECHA_MUESTRA" name="FECHA_MUESTRA" type="date" placeholder="FECHA_MUESTRA"/>
                          </div>
                          <div class="form-group">
                            <label for="SECCION_CULTIVO">SECCION DEL CULTIVO:</label>
                             <select class="form-control" name="SECCION_CULTIVO" id="SECCION_CULTIVO"  "> 
<?php
        $mysqli=conectar();
      $consulta= "SELECT * FROM  seccion_de_cultivo";
      if ($resultado = $mysqli->query($consulta)) 
      {
        while ($fila = $resultado->fetch_row()) 
        {         
          echo "<option value=$fila[0]  >    $fila[2]  </option>";
 
        }
        $resultado->close();
      }
      $mysqli->close();     

?>
     </select>
                           </div>
                         
                           <div class="form-group">
                            <label for="PH">PH:</label>
                            <input class="form-control" id="PH" name="PH" type="text" placeholder="PH"/>
                          </div>
                          <div class="form-group">
                            <label for="EXCAVACION">EXCAVACION:</label>
                            <input class="form-control" id="EXCAVACION" name="EXCAVACION" type="text" placeholder="EXCAVACION"/>
                          </div>
                          <div class="form-group">
                            <label for="TEMPERATURA">TEMPERATURA:</label>
                            <input class="form-control" id="TEMPERATURA" name="TEMPERATURA" type="number" placeholder="TEMPERATURA"/>
                          </div><div class="form-group">
                            <label for="HUMEDAD">HUMEDAD:</label>
                            <input class="form-control" id="HUMEDAD" name="HUMEDAD" type="text" placeholder="HUMEDAD"/>
                          </div>
              <input type="submit" class="btn btn-success" value="registar">
              <button type="button" class="btn btn-warning" data-dismiss="modal">Cerrar</button>
              </form>
                    </div>
                    
                </div>
            </div>
        </div> 


    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <div class="modal" id="editUsu" tabindex="-1" role="dialog" aria-labellebdy="myModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                       
                        <h4><img src="pl.png" width="30" height="30" class="d-inline-block align-top" alt="">Editar Muestra</h4>
                    </div>
                    <div class="modal-body">                      
                       <form action="actualizar_muestra.php" method="POST">                       		
                       		        
                       <div class="form-group">
                       			<label for="DOCUMENTO">ID MUESTRA:</label>
                       			<input class="form-control" id="id_muestra" name="id_muestra" type="text"/></input>
                       		</div>
                       		<div class="form-group">
                       			<label for="NOMBRE">DESCRIPCION:</label>
                       			<input class="form-control" id="descripcion" name="descripcion" type="text" required pattern="[A-Za-z]{2,30}"
         title="Digite solo letras" /></input>
                       		</div>
                       		<div class="form-group">
                       			<label for="APELLIDO">FECHA MUESTRA:</label>
                       			<input class="form-control" id="fecha_muestra" name="fecha_muestra" type="date" /></input>
                           </div>
                           <div class="form-group">
                       			<label for="CIUDAD">SECCION CULTIVO:</label>
                       		<input class="form-control" id="seccion_cultivo" name="seccion_cultivo" type="text" /></input>
                           </div>
                           <div class="form-group">
                       			<label for="CORREO">PH:</label>
                       			<input class="form-control" id="ph" name="ph" type="text" required pattern="[0-9.]"
         title="Digite solo letras"/></input>
                           </div>
                           <div class="form-group">
                       			<label for="TELEFONO">EXCAVACION:</label>
                       			<input class="form-control" id="excavacion" name="excavacion" type="text"/>
                       		</div>
                           <div class="form-group">
                       			<label for="TELEFONO">TEMPERATURA:</label>
                       			<input class="form-control" id="temperatura" name="temperatura" type="text"/>
                       		</div>
                           <div class="form-group">
                       			<label for="TELEFONO">HUMEDAD:</label>
                       			<input class="form-control" id="humedad" name="humedad" type="text"/>
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
		  var recipient1 = button.data('id_muestra')
		  var recipient2 = button.data('descripcion')
		  var recipient3 = button.data('fecha_muestra')
      var recipient5 = button.data('seccion_cultivo')
      var recipient6 = button.data('ph')
      var recipient7 = button.data('excavacion')
      var recipient8 = button.data('temperatura')
      var recipient9 = button.data('humedad')

		   // Extract info from data-* attributes
		  // If necessary, you could initiate an AJAX request here (and then do the updating in a callback).
		  // Update the modal's content. We'll use jQuery here, but you could use a data binding library or other methods instead.
		 
		  var modal = $(this)		 
		  modal.find('.modal-body #id_muestra').val(recipient1)
		  modal.find('.modal-body #descripcion').val(recipient2)
		  modal.find('.modal-body #fecha_muestra').val(recipient3)
      modal.find('.modal-body #seccion_cultivo').val(recipient5)
      modal.find('.modal-body #ph').val(recipient6)
      modal.find('.modal-body #excavacion').val(recipient7)
      modal.find('.modal-body #temperatura').val(recipient8)
      modal.find('.modal-body #humedad').val(recipient9)
      
   		 
   		 
		});
		
	</script>
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
