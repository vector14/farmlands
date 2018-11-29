<?php
	session_start();
	if(isset($_SESSION['resultado']))
	{
        $cadena= $_SESSION ['resultado'];
       $rol= $cadena[3];
       $DOCUMENTO= $cadena[4];
?>
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
      
      <th scope="col">ID PLANTA</th>
      <th scope="col">PERIODO</th>
      <th scope="col">NUMERO DE HOJAS</th>
      <th scope="col">FLORES</th>
      <th scope="col">ALTURA</th>
      <th scope="col">GROSOR</th>
      <th scope="col">TAMAÑO DE TUBERCULO</th>
      <th scope="col">FECHA DE MUESTRA</th>
      <th scope="col">DESCRIPCION</th>
      <th scope="col">SECCION DE CULTIVO</th>
      </tr>
  </thead>
  <tbody>
  <?php
		include("conexion.php");
    $mysqli=conectar();
			$consulta= "SELECT * FROM  muestrap";
			if ($resultado = $mysqli->query($consulta)) 
			{
				while ($fila = $resultado->fetch_row()) 
				{					
					echo "<tr>";
					echo "<td>$fila[0]</td><td>$fila[1]</td><td>$fila[2]</td><td>$fila[3]</td><td>$fila[4]</td><td>$fila[5]</td><td>$fila[6]</td><td>$fila[7]</td><td>$fila[8]</td><td>$fila[9]</td>";	
          echo"<td>";				
        
				    echo "<a  data-toggle='modal' data-target='#editUsu' data-ID_PLANTA='" .$fila[0] ."' data-periodo='" .$fila[1] ."' data-numero_de_hojas='" .$fila[2]."' data-flores='" .$fila[3] ."' data-altura='".$fila[4]."' data-grosor='".$fila[5]."' data-tamaño_de_toberculo='" .$fila[6]."' data-fecha_de_muestra='".$fila[7]."' data-descripcion='".$fila[8]."' data-seccion_de_cultivo='".$fila[9]."' class='btn btn-warning'><span class='glyphicon glyphicon-pencil'></span>Editar</a> ";			
					echo "<a class='btn btn-danger' href='eliminar_muestrap.php?ID_PLANTA=" .$fila[0] ."'><span class='glyphicon glyphicon-remove'></span>Eliminar</a>";		
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
                        
                        <h4><img src="pl.png" width="30" height="30" class="d-inline-block align-top" alt="">Nueva muestra Planta</h4>                       
                    </div>
                    <div class="modal-body">
                       <form action="crear_muestrap.php" method="GET">     
                    <div class="form-group">
                            <label for="PERIODO">PERIODO:</label>
                            <input class="form-control" id="PERIODO" name="PERIODO" type="number" placeholder="PERIODO"/>
                          </div>
                          <div class="form-group">
                            <label for="NUMERO_HOJAS">NUMERO_HOJAS:</label>
                            <input class="form-control" id="NUMERO_HOJAS" name="NUMERO_HOJAS" type="number" placeholder="NUMERO DE HOJAS"/>
                          </div>
                          <div class="form-group">
                            <label for="FLORES">FLORES:</label>
                            <input class="form-control" id="FLORES" name="FLORES" type="number" placeholder="FLORES"/>
                          </div>
                          <div class="form-group">
                            <label for="ALTURA">ALTURA:</label>
                            <input class="form-control" id="ALTURA" name="ALTURA" type="number" placeholder="ALTURA"/>
                          </div>
                          <div class="form-group">
                            <label for="GROSOR">GROSOR:</label>
                            <input class="form-control" id="GROSOR" name="GROSOR" type="number" placeholder="GROSOR"/>
                          </div>
                          <div class="form-group">
                            <label for="TAMANO_TUBERCULO">TAMAÑO DE TUBERCULO:</label>
                            <input class="form-control" id="TAMANO_TUBERCULO" name="TAMANO_TUBERCULO" type="number" placeholder="TAMAÑO DE TUBERCULO"/>
                          </div>
                    <div class="form-group">
                            <label for="NOMBRE">FECHA DE LA MUESTRA:</label>
                            <input class="form-control" id="FECHA_MUESTRA" name="FECHA_MUESTRA" type="date" placeholder="FECHA_MUESTRA"/>
                          </div>
                             
                          <div class="form-group">
                            <label for="DOCUMENTO">DESCRIPCION:</label>
                            <input class="form-control" id="DESCRIPCION" name="DESCRIPCION" type="text" placeholder="DESCRIPCION" required pattern="[A-Za-z]{2,300}"
         title="Digite solo letras"/>
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
                       
                        <h4><img src="pl.png" width="30" height="30" class="d-inline-block align-top" alt="">Editar Muestra</h4>
                    </div>
                    <div class="modal-body">                      
                       <form action="actualizar_muestrap.php" method="POST">                       		
                       		        
                       <div class="form-group">
                       			<label for="DOCUMENTO">ID PLANTA:</label>
                       			<input class="form-control" id="id_planta" name="id_planta" type="text"/></input>
                       		</div>
                       		<div class="form-group">
                       			<label for="NOMBRE">PERIODO:</label>
                       			<input class="form-control" id="periodo" name="periodo" type="text" /></input>
                       		</div>
                       		<div class="form-group">
                       			<label for="APELLIDO">NUMERO DE HOJAS:</label>
                       			<input class="form-control" id="numero_de_hojas" name="numero_de_hojas" type="text" />
                           </div>
                           <div class="form-group">
                       			<label for="CIUDAD">FLORES:</label>
                       		<input class="form-control" id="flores" name="flores" type="text" />
                           </div>
                           <div class="form-group">
                       			<label for="CORREO">ALTURA:</label>
                       			<input class="form-control" id="altura" name="altura" type="text" />
                           </div>
                           <div class="form-group">
                       			<label for="TELEFONO">GROSOR:</label>
                       			<input class="form-control" id="grosor" name="grosor" type="text"/>
                       		</div>
                           <div class="form-group">
                       			<label for="TELEFONO">TAMAÑO DE TUBERCULO:</label>
                       			<input class="form-control" id="tamaño_de_toberculo" name="tamaño_de_toberculo" type="text"/>
                       		</div>
                           <div class="form-group">
                       			<label for="TELEFONO">FECHA DE MUESTRA:</label>
                       			<input class="form-control" id="fecha_de_muestra" name="fecha_de_muestra" type="text"/>
                       		</div>
                           <div class="form-group">
                       			<label for="TELEFONO">DESCRIPCION:</label>
                       			<input class="form-control" id="descripcion" name="descripcion" type="text"/>
                           </div>
                           <div class="form-group">
                       			<label for="TELEFONO">SECCIÓN DEL CULTIVO:</label>
                       			<input class="form-control" id="seccion_de_cultivo" name="seccion_de_cultivo" type="text"/>
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
		  var recipient1 = button.data('id_planta')
		  var recipient2 = button.data('periodo')
		  var recipient3 = button.data('numero_de_hojas')
      var recipient5 = button.data('flores')
      var recipient6 = button.data('altura')
      var recipient7 = button.data('grosor')
      var recipient8 = button.data('tamaño_de_toberculo')
      var recipient9 = button.data('fecha_de_muestra')
      var recipient10 = button.data('descripcion')
      var recipient11 = button.data('seccion_de_cultivo')
		   // Extract info from data-* attributes
		  // If necessary, you could initiate an AJAX request here (and then do the updating in a callback).
		  // Update the modal's content. We'll use jQuery here, but you could use a data binding library or other methods instead.
		 
		  var modal = $(this)		 
		  modal.find('.modal-body #id_planta').val(recipient1)
		  modal.find('.modal-body #periodo').val(recipient2)
		  modal.find('.modal-body #numero_de_hojas').val(recipient3)
      modal.find('.modal-body #flores').val(recipient5)
      modal.find('.modal-body #altura').val(recipient6)
      modal.find('.modal-body #grosor').val(recipient7)
      modal.find('.modal-body #tamaño_de_toberculo').val(recipient8)
      modal.find('.modal-body #fecha_de_muestra').val(recipient9)
      modal.find('.modal-body #descripcion').val(recipient10)
      modal.find('.modal-body #seccion_de_cultivo').val(recipient11) 
   		 
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
