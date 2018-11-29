<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
   <link rel="shortcut icon" type="image/x-icon" href="assets/icons/favicon.ico"/>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="">

    <title>Consultar Subasta</title>
  </head>
  <body>

    <nav class="navbar navbar-expand-lg navbar-success bg-success">
        <a class="navbar-brand" href="menu_principal.php"><img src="assets/icons/Farmlands_logo.png" width="50" height="auto" class="d-inline-block align-center" alt=""></a>
        <a class="navbar-brand" href="menu_principal.php"><img src="assets/icons/Letters.png" width="auto" height="45" class="d-inline-block align-center" alt=""></a>
        <span class="navbar-brand d-inline-block align-center justify-content-center" style="color:#fff;">Consultar Subasta</span>
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

<div class="container">
    <table class="table" style="margin-top: 50px;">
  <thead class="thead-dark">
    <tr>
     
      <th scope="col">Id Subasta</th>
      <th scope="col">Monto inicial</th>
      <th scope="col">Fecha inicial</th>
      <th scope="col">Fecha Final</th>
      <th scope="col">Ganacia Minima</th>  
      <th scope="col">Tope de la subasta</th>
      <th scope="col">Oferta Final</th>
      <th scope="col">id cultivo</th>

      </tr>
  </thead>
  <tbody>
  <?php
		include("conexion.php");
    $mysqli=conectar();
			$consulta= "SELECT * FROM  subasta";
			if ($resultado = $mysqli->query($consulta)) 
			{
				while ($fila = $resultado->fetch_row()) 
				{					
					echo "<tr>";
					echo "<td>$fila[0]</td><td>$fila[1]</td><td>$fila[2]</td><td>$fila[3]</td><td>$fila[4]</td><td>$fila[5]</td><td>$fila[6]</td><td>$fila[7]</td>";	
					echo"<td>";						
				    echo "<a  data-toggle='modal' data-target='#editUsu' data-ID_SUBASTA='" .$fila[0] ."' data-nombre='" .$fila[1] ."' data-edad='" .$fila[2] ."' data-direccion='" .$fila[3]."' data-direccion='".$fila[4]."' data-direccion='".$fila[5]."' data-direccion='".$fila[6]."' data-direccion='".$fila[7]."' class='btn btn-warning'><span class='glyphicon glyphicon-pencil'></span>Editar</a> ";			
					echo "<a class='btn btn-danger' href='eliminar_subasta.php?ID_SUBASTA=" .$fila[0] ."'><span class='glyphicon glyphicon-remove'></span>Eliminar</a>";		
					echo "</td>";
					echo "</tr>";
				}
				$resultado->close();
			}
			$mysqli->close();			
			
	

?>
  </tbody>
</table>
<div class="btn-toolbar" style="margin-bottom:20px; " role="toolbar" aria-label="Toolbar with button groups">
  <div class="btn-group mr-2" role="group" aria-label="First group">
    <button type="button" class="btn btn-secondary">1</button>
    <button type="button" class="btn btn-secondary">2</button>
    <button type="button" class="btn btn-secondary">3</button>
    <button type="button" class="btn btn-secondary">4</button>
  </div>
  <div class="btn-group mr-2" role="group" aria-label="Second group">
    <button type="button" class="btn btn-secondary">5</button>
    <button type="button" class="btn btn-secondary">6</button>
    <button type="button" class="btn btn-secondary">7</button>
  </div>
  <div class="btn-group" role="group" aria-label="Third group">
    <button type="button" class="btn btn-secondary">8</button>
  </div>
</div>

<button  data-toggle="modal" data-target="#nuevoUsu" class="btn btn-primary" type="submit">nueva subasta</button>
  <a href="Menu_principal.php"><button class="btn btn-primary" type="submit">Atras</button></a>
  <div class="modal" id="nuevoUsu" tabindex="-1" role="dialog" aria-labellebdy="myModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                        <h4>Nueva subasta</h4>                       
                    </div>
                    <div class="modal-body">
                       <form action="crear_subasta.php" method="GET">                 
                          <div class="form-group">
                            <label for="DOCUMENTO">MONTO_INICIAL:</label>
                            <input class="form-control" id="MONTO_INICIAL" name="MONTO_INICIAL" type="number" placeholder="MONTO_INICIAL"/>
                          </div>
                          <div class="form-group">
                            <label for="NOMBRE">FECHA_HORA_INICIO:</label>
                            <input class="form-control" id="FECHA_HORA_INICIO" name="FECHA_HORA_INICIO" type="date" placeholder="FECHA_HORA_INICIO"/>
                          </div>
                          <div class="form-group">
                            <label for="APELLIDO">FECHA_HORA_FIN:</label>
                            <input class="form-control" id="FECHA_HORA_FIN" name="FECHA_HORA_FIN" type="date" placeholder="FECHA_HORA_FIN"/>
                           </div>
                           <div class="form-group">
                            <label for="DIRECCION">GANACIA_MINIMA:</label>
                            <input class="form-control" id="GANACIA_MINIMA" name="GANACIA_MINIMA" type="number" placeholder="GANACIA_MINIMA"/>
                           </div>
                           <div class="form-group">
                            <label for="TELEFONO">TOPE_SUBASTA:</label>
                            <input class="form-control" id="TOPE_SUBASTA" name="TOPE_SUBASTA" type="number" placeholder="TOPE_SUBASTA"/>
                           </div>
                           <div class="form-group">
                            <label for="EDAD">OFERTA_FINAL:</label>
                            <input class="form-control" id="OFERTA_FINAL" name="OFERTA_FINAL" type="number" placeholder="OFERTA_FINAL"/>
                          </div>
                          <div class="form-group">
                            <label for="ID_CULTIVO">ID CULTIVO:</label>
                             <select name="ID_CULTIVO" id="ID_CULTIVO"  > 
<?php
    
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
              </form>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-warning" data-dismiss="modal">Cerrar</button>
                    </div>
                </div>
            </div>
        </div> 



  

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
  </body>
</html>