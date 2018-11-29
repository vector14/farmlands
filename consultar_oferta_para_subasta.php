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

    <title>Consultar Oferta</title>
  </head>
  <body>

    <div class="pos-f-t">
  <div class="collapse" id="navbarToggleExternalContent">
    <div class="bg-dark p-4">
      <h5 class="text-white h4">Consultar Oferta</h5>

      <span class="text-muted">Aqui puedes Consultar Oferta  FarmWare</span>
         <button type="button" class="btn btn-outline-primary">Inicio</button>
     <button type="button" class="btn btn-outline-primary">Blog</button>
     <button type="button" class="btn btn-outline-primary">Contacto</button>
     <button type="button" class="btn btn-outline-primary">Proyecto</button>
     <button type="button" class="btn btn-outline-primary">Acerca De</button>

     <button type="button" class="btn btn-primary" id="po">
  Notificaciones <span class="badge badge-light">50</span>
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
  <!-- Image and text -->
<nav class="navbar navbar-light bg-light">
  <a class="navbar-brand" href="#">
    <img src="pl.png" width="30" height="30" class="d-inline-block align-top" alt="">
    Bienvenidos A FarmLands Gestiòn oferta  De  subasta
  </a>
</nav>
  <div class="collapse navbar-collapse" id="navbarTogglerDemo01">
    <a class="navbar-brand" href="#"></a>
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
    <table class="table" style="margin-top: 50px;">
  <thead class="thead-dark">
    <tr>
      
      <th scope="col">Id Oferta</th>
      <th scope="col">Monto</th>
      <th scope="col">Fecha Hora de de registro</th>
      <th scope="col">Documento comprador</th>
      <th scope="col">Id subasta</th>
      </tr>
  </thead>
  <tbody>
  <?php
		include("conexion.php");
    $mysqli=conectar();
			$consulta= "SELECT * FROM  oferta_para_subasta";
			if ($resultado = $mysqli->query($consulta)) 
			{
				while ($fila = $resultado->fetch_row()) 
				{					
					echo "<tr>";
					echo "<td>$fila[0]</td><td>$fila[1]</td><td>$fila[2]</td><td>$fila[3]</td><td>$fila[4]</td>";	
					echo"<td>";						
				    echo "<a  data-toggle='modal' data-target='#editUsu' data-id_oferta='" .$fila[0] ."' data-nombre='" .$fila[1] ."' data-edad='" .$fila[2] ."' data-direccion='" .$fila[3]."' data-direccion='".$fila[4]."' class='btn btn-warning'><span class='glyphicon glyphicon-pencil'></span>Editar</a> ";			
            echo "<a class='btn btn-danger' href='eliminar_oferta.php?ID_OFERTA=" .$fila[0] ."'><span class='glyphicon glyphicon-remove'></span>Eliminar</a>";		
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
<button  data-toggle="modal" data-target="#nuevoUsu" class="btn btn-primary" type="submit">nueva oferta</button>
  <a href="Menu_principal.php"><button class="btn btn-primary" type="submit">Atras</button></a>
  <div class="modal" id="nuevoUsu" tabindex="-1" role="dialog" aria-labellebdy="myModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                        <h4>Nueva oferta</h4>                       
                    </div>
                    <div class="modal-body">
                       <form action="crear_oferta.php" method="GET">                 
                          <div class="form-group">
                            <label for="MONTO">MONTO:</label>
                            <input class="form-control" id="MONTO" name="MONTO" type="number" placeholder="MONTO"/>
                          </div>
                          <div class="form-group">
                            <label for="APELLIDO">FECHA_HORA_REGISTRO:</label>
                            <input class="form-control" id="FECHA_HORA_REGISTRO" name="FECHA_HORA_REGISTRO" type="date" placeholder="FECHA_HORA_REGISTRO"/>
                           </div>
                           <div class="form-group">
                            <label for="DOCUMENTO_COMPRADOR">DOCUMENTO COMPRADOR:</label>
                             <select name="DOCUMENTO_COMPRADOR" id="DOCUMENTO_COMPRADOR" > 
<?php
    
      $consulta= "SELECT * FROM  biologo";
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
                            <label for="ID_SUBASTA">ID_SUBASTA:</label>
                             <select name="ID_SUBASTA" id="ID_SUBASTA"  > 
<?php
      $mysqli = new mysqli("localhost", "root", "", "farmwaredb");    
      if ($mysqli->connect_errno) {
          echo "Fallo al conectar a MySQL: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
          exit();
      }
      $consulta= "SELECT * FROM  subasta";
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



    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
  </body>
</html>



