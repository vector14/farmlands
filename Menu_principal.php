<?php
	session_start();
	if(isset($_SESSION['nombreusu']))
	{
?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">



    <!-- Bootstrap CSS -->
  
    <link rel="stylesheet" type="text/css" href="style.css">
    <link rel="stylesheet" href="bootstrap.css">	

    <title>Menu Principal</title>
  </head>
  <body>

   <nav class="navbar navbar-expand-lg navbar-success bg-success">
        <a class="navbar-brand" href="#"> <img src="pl.png" width="30" height="30" class="d-inline-block align-top" alt="">Gestiòn Administrador</a>
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

<div class="container">
  <div class="opcion dropright" style="max-width: 420px;">
  <img data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" src="assets/img/OpcionUsuarios.jpg" width="130px" height="auto" style="z-index:-2;"/>
    <span >Usuarios</span>
    <div class="dropdown-menu">
    <a  class="dropdown-item" href="consultar_administrador.php">Administrador</a>
    <a class="dropdown-item" href="consultar_granjero.php">Granjero</a>
    <a class="dropdown-item" href="consultar_comprador.php">Comprador</a>
    <a class="dropdown-item" href="consultar_biologo.php">Biologo</a>
    <div class="dropdown-divider"></div>
    <a class="dropdown-item" href="#">Acerca de esta opcion</a>
</div>
</div>
<!--
    <div class="opcion dropright" style="max-width: 330px;">
    <img data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" src="assets/img/OpcionSubasta.jpg" width="130px" height="145" style="z-index:-2;"/>
    <span>Subasta</span>
    <div class="dropdown-menu">
    <a class="dropdown-item" href="consultar_subasta.php">Subastas</a>
    <a class="dropdown-item" href="consultar_oferta_para_subasta.php">Ofertas de subastas</a>
    <div class="dropdown-divider"></div>
    <a class="dropdown-item" href="#">Acerca de esta opcion</a>
  </div>
  </div>    -->
      <div class="opcion dropright" style="max-width: 330px;">
    <img data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" src="assets/img/OpcionCultivo.jpg" width="130px" height="145" style="z-index:-2;"/>
    <span>Cultivo</span>
    <div class="dropdown-menu">
    <a class="dropdown-item" href="consultar_cultivo.php">Cultivos</a>
    <a class="dropdown-item" href="consultar_seccion_de_cultivo.php">Secciones de cultivo</a>
    <a class="dropdown-item" href="consultar_muestra.php">Muestras Suelo</a>
    <a class="dropdown-item" href="consultar_muestrap.php">Muestras Planta</a>
    <div class="dropdown-divider"></div>
    <a class="dropdown-item" href="#">Acerca de esta opcion</a>
  </div>
  </div> 
   <div  class="opcion dropright" style="max-width: 330px;">
    <img data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" src="assets/img/OpcionGranja.jpg" width="130px" height="145" style="z-index:-2;"/>
    <span>Granja</span>
    <div class="dropdown-menu">
    <a class="dropdown-item" href="consultar_granja.php">Granjas</a>
    <div class="dropdown-divider"></div>
    <a class="dropdown-item" href="#">Acerca de esta opcion</a>
  </div>
  
  </div>
<div>

</div>
 <a href="cerrar.php"> <button class="btn btn-primary" type="submit" style="margin-top: 15px; margin-right: 6px;" ><i class="fas fa-long-arrow-alt-left"></i>  Cerrar Sesión</button></a>
 <a href="Google_Charts_Farmlands/vista/newEmptyPHP.php"> <button class="btn btn-primary" type="submit" style="margin-top: 15px; margin-right: 6px;" ><i class="fas fa-long-arrow-alt-left"></i>  graficas </button></a>
</div>



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