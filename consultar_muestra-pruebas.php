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
        <span class="navbar-brand d-inline-block align-center justify-content-center" style="color:#fff;">Consultar Muestra</span>
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
      <th scope="col">PH</th>
      <th scope="col">TEMPERATURA_AMBIENTE</th>
      <th scope="col">TEMPERATURA_MEDIO</th>
      <th scope="col">HUMEDAD</th>
      <th scope="col">PRESION_ATMOSFERICA</th>
      <th scope="col">FECHA_MUESTRA</th>
      <th scope="col">COLOR_HOJA</th>
      <th scope="col">SECCION_CULTIVO</th>
      </tr>
  </thead>
  <tbody>
  <?php
		include("conexion.php");
    $mysqli=conectar();
     if ($rol=='administrador'){
       $consulta= "SELECT * FROM  muestra_prueba";
    }
  else if ($rol=='granjero'){
      
        $consulta= "SELECT * FROM  muestra_prueba where GRANJERO='$DOCUMENTO'";
    }
			
			if ($resultado = $mysqli->query($consulta)) 
			{
				while ($fila = $resultado->fetch_row()) 
				{					
					echo "<tr>";
					echo "<td>$fila[0]</td><td>$fila[1]</td><td>$fila[2]</td><td>$fila[3]</td><td>$fila[4]</td><td>$fila[5]</td><td>$fila[6]</td><td>$fila[7]</td><td>$fila[8]</td>";	
					echo"<td>";						
				  echo "<a  data-toggle='modal' data-target='#editUsu' data-ID_MUESTRA='" .$fila[0] ."' data-ph='" .$fila[1] ."' data-muestra_a='" .$fila[2] ."' data-muestra_m='" .$fila[3]."' data-humedad='".$fila[4]."' data-presion_atmosferica='".$fila[5]."' data-fecha_muestra='".$fila[6]."' data-color_hoja='".$fila[7]."' data-seccion_cultivo='".$fila[8]."' class='btn btn-warning'><span class='glyphicon glyphicon-pencil'></span>Editar</a> ";			
					echo "<a class='btn btn-danger' href='eliminar_muestra-pruebas.php?ID_MUESTRA=" .$fila[0] ."'><span class='glyphicon glyphicon-remove'></span>Eliminar</a>";		
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
                       <form action="crear_muestra-pruebas.php" method="GET">                 
                          <div class="form-group">
                            <label for="PH">PH:</label>
                            <input class="form-control" id="PH" name="PH" type="text" placeholder="PH" required pattern="[0-9.]{1,25}"
         title="Digite solo numeros"/>
                          </div>
                          <div class="form-group">
                            <label for="TEMPERATURA_A">TEMPERATURA AMBIENTE:</label>
                            <input class="form-control" id="TEMPERATURA_A" name="TEMPERATURA_A" type="NUMBER" placeholder="TEMPERATURA AMBIENTE"/>
                          </div>
                          <div class="form-group">
                             <label for="TEMPERATURA_M">TEMPERATURA DEL MEDIO:</label>
                            <input class="form-control" id="TEMPERATURA_M" name="TEMPERATURA_M" type="NUMBER" placeholder="TEMPERATURA DEL MEDIO"/>
                          </div>
                            <label for="HUMEDAD">HUMEDAD:</label>
                            <input class="form-control" id="HUMEDAD" name="HUMEDAD" type="NUMBER" placeholder="HUMEDAD"/>
                          </div>
                          <div class="form-group">
                            <label for="PRESION_ATMOSFERICA">PRESION ATMOSFERICA:</label>
                            <input class="form-control" id="PRESION_ATMOSFERICA" name="PRESION_ATMOSFERICA" type="NUMBER" placeholder="PRESION ATMOSFERICA"/>
                          </div>
                          <div class="form-group">
                            <label for="FECHA_MUESTRA">FECHA DE LA MUESTRA:</label>
                            <input class="form-control" id="FECHA_MUESTRA" name="FECHA_MUESTRA" type="date" placeholder="FECHA_MUESTRA"/>
                          </div><div class="form-group">
                            <label for="COLOR_HOJA">COLOR DE LA HOJA:</label>
                            <input class="form-control" id="COLOR_HOJA" name="COLOR_HOJA" type="color"/>
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
                       <form action="actualizar_muestra-pruebas.php" method="POST">                       		
                                               <label for="PH">PH:</label>
                            <input class="form-control" id="PH" name="PH" type="NUMBER" placeholder="PH"/>
                          </div>
                          <div class="form-group">
                            <label for="TEMPERATURA_A">TEMPERATURA AMBIENTE:</label>
                            <input class="form-control" id="TEMPERATURA_A" name="TEMPERATURA_A" type="NUMBER" placeholder="TEMPERATURA AMBIENTE"/>
                          </div>
                          <div class="form-group">
                             <label for="TEMPERATURA_M">TEMPERATURA DEL MEDIO:</label>
                            <input class="form-control" id="TEMPERATURA_M" name="TEMPERATURA_M" type="NUMBER" placeholder="TEMPERATURA DEL MEDIO"/>
                          </div>
                            <label for="HUMEDAD">HUMEDAD:</label>
                            <input class="form-control" id="HUMEDAD" name="HUMEDAD" type="NUMBER" placeholder="HUMEDAD"/>
                          </div>
                          <div class="form-group">
                            <label for="PRESION_ATMOSFERICA">PRESION ATMOSFERICA:</label>
                            <input class="form-control" id="PRESION_ATMOSFERICA" name="PRESION_ATMOSFERICA" type="NUMBER" placeholder="PRESION ATMOSFERICA"/>
                          </div>
                          <div class="form-group">
                            <label for="FECHA_MUESTRA">FECHA DE LA MUESTRA:</label>
                            <input class="form-control" id="FECHA_MUESTRA" name="FECHA_MUESTRA" type="date" placeholder="FECHA_MUESTRA"/>
                          </div><div class="form-group">
                            <label for="COLOR_HOJA">COLOR DE LA HOJA:</label>
                            <input class="form-control" id="COLOR_HOJA" name="COLOR_HOJA" type="color" placeholder="COLOR DE LA HOJA"/>
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
		  var recipient2 = button.data('ph')
		  var recipient3 = button.data('temperatura_a')
      var recipient5 = button.data('temmperatura_m')
      var recipient6 = button.data('humedad')
      var recipient7 = button.data('presion_atmosferica')
      var recipient8 = button.data('fecha_muestra')
      var recipient9 = button.data('color_hoja')
      var recipient10 = button.data('seccion_cultivo')

		   // Extract info from data-* attributes
		  // If necessary, you could initiate an AJAX request here (and then do the updating in a callback).
		  // Update the modal's content. We'll use jQuery here, but you could use a data binding library or other methods instead.
		 
		  var modal = $(this)		 
		  modal.find('.modal-body #id_muestra').val(recipient1)
		  modal.find('.modal-body #ph').val(recipient2)
		  modal.find('.modal-body #temperatura_a').val(recipient3)
      modal.find('.modal-body #temmperatura_m').val(recipient5)
      modal.find('.modal-body #humedad').val(recipient6)
      modal.find('.modal-body #presion_atmosferica').val(recipient7)
      modal.find('.modal-body #fecha_muestra').val(recipient8)
      modal.find('.modal-body #color_hoja').val(recipient9)
      modal.find('.modal-body #seccion_cultivo').val(recipient10)
      
   		 
   		 
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
