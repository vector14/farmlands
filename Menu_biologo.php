<?php
	session_start();
	if(isset($_SESSION['resultado']))
	{
?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="shortcut icon" type="image/x-icon" href="assets/icons/favicon.ico"/>
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
    <!-- Bootstrap CSS -->
  
    <link rel="stylesheet" type="text/css" href="style.css">
    <link rel="stylesheet" href="bootstrap.css">
  	<link rel="stylesheet" href="css2/menu_principal.css">
  	<link rel="stylesheet" href="css2/menu_principal2.css">

    <title>Menu Granjero</title>
  </head>
  <body>

   <nav class="navbar navbar-expand-lg navbar-success bg-success">
        <a class="navbar-brand" href="menu_principal.php"><img src="assets/icons/Farmlands_logo.png" width="50" height="auto" class="d-inline-block align-center" alt=""></a>
        <a class="navbar-brand" href="menu_principal.php"><img src="assets/icons/Letters.png" width="auto" height="45" class="d-inline-block align-center" alt=""></a>
        <span class="navbar-brand d-inline-block align-center justify-content-center" style="color:#fff;">Menu Principal: Granjero</span>
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
        <!------------------ Efecto Hover 16 --------------->
                <div class="col-md-4 col-sm-6">
                    <div class="box16">
                        <img src="assets/icons/Cultivo.jpg">
                        <div class="box-content">
                            <h3 class="title">Cultivo</h3>
                            <span class="post">Opciones</span>
                            <ul class="social">
                                <li><a data-toggle="tooltip" data-placement="bottom" title="Graficar Muestras" href="Google_Charts_Farmlands/vista/Graficar_Muestras.php"><i class="far fa-chart-bar"></i></a></li>
                                <li><a title="Acerca de esta opcion" href="#" data-toggle="modal" data-target="#exampleModal3" href="#"><i class="fas fa-info"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
          <!------------------ Efecto Hover 16 --------------->
</div>
<!-- Footer -->
	<section id="footer">
		<div class="container" style="padding: 0">
			<div class="row text-center text-xs-center text-sm-left text-md-left">
				<div class="col-xs-12 col-sm-4 col-md-4">
					<h5>Desarrolladores</h5>
					<ul class="list-unstyled quick-links">
						<li><a href="https://github.com/javierninco" target="_blank"><i class="fa fa-angle-double-right"></i>Hernando Ninco</a></li>
						<li><a href="https://github.com/MaTrIxGg" target="_blank"><i class="fa fa-angle-double-right"></i>Juan Guayana</a></li>
						<li><a href="https://github.com/vector14" target="_blank"><i class="fa fa-angle-double-right"></i>David Cano</a></li>
					</ul>
				</div>
				<div class="col-xs-12 col-sm-4 col-md-4">
					<h5>Manuales</h5>
					<ul class="list-unstyled quick-links">
						<li><a href="pdf/MANUAL_DE_USUARIO.pdf" target="_blank"><i class="fa fa-angle-double-right"></i>Manual de usuario</a></li>
						<li><a href="pdf/MANUAL_TÉCNICO.pdf" target="_blank"><i class="fa fa-angle-double-right"></i>Manual Tecnico</a></li>
						<li><a href="https://www.youtube.com/watch?v=818_G3AKLso&list=PLGR-Zuae2elGIypc87uxQnTWMgmJLU0UM"><i class="fa fa-angle-double-right" target="_blank"></i>Videos Explicativos</a></li>
					</ul>
				</div>
				<div class="col-xs-12 col-sm-4 col-md-4">
					<h5>Herramientas utilizadas</h5>
					<ul class="list-unstyled quick-links">
						<li><a href="http://php.net/" target="_blank"><i class="fa fa-angle-double-right"></i>PHP</a></li>
						<li><a href="https://www.mysql.com/" target="_blank"><i class="fa fa-angle-double-right"></i>MySQL</a></li>
						<li><a href="https://developers.google.com/chart/" target="_blank"><i class="fa fa-angle-double-right"></i>Google Charts</a></li>
						<li><a href="https://git-scm.com/" target="_blank"><i class="fa fa-angle-double-right"></i>Git</a></li>
						<li><a href="https://code.visualstudio.com/" target="_blank"><i class="fa fa-angle-double-right"></i>Visual Studio Code</a></li>
					</ul>
				</div>
			</div>
			<div class="row">
				<div class="col-xs-12 col-sm-12 col-md-12 mt-2 mt-sm-5">
					<ul class="list-unstyled list-inline social text-center">
						<li class="list-inline-item"><a href="https://www.facebook.com/si.farmlands/" target="_blank"><i class="fa fa-facebook"></i></a></li>
						<li class="list-inline-item"><a href="https://twitter.com/offc_farmlands"><i class="fa fa-twitter"></i></a></li>
						<li class="list-inline-item"><a href="https://github.com/MaTrIxGg/farmlands/" target="_blank"><i class="fa fa-github"></i></a></li>
						<li class="list-inline-item"><a href="https://www.youtube.com/channel/UCfxH1S9ewu7XvpY-GGArH4Q?view_as=subscriber" target="_blank"><i class="fa fa-youtube-play"></i></a></li>
						<li class="list-inline-item"><a id="mail" data-toggle="tooltip" data-placement="top" title="Clic para copiar el correo" href="javascript:copiarAlPortapapeles('p1');"><i class="fa fa-envelope"></i></a></li>
					</ul>
				</div>
				</hr>
			</div>	
			<div class="row">
				<div class="col-xs-12 col-sm-12 col-md-12 mt-2 mt-sm-2 text-center text-white">
					<p><u>Farmlands</u> es un sistema de informacion que permite realizar un seguimiento a un cultivo en especifico.</p>
					<p class="h6">&copy Todos los derechos reservados.<a class="text-green ml-2" href="#">Farmlands</a></p>
				</div>
				</hr>
			</div>	
		</div>
	</section>
	<!-- ./Footer -->
<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Acerca de: Administrador</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        La funcion Administrador, permite crear cada tipo de usuario (Administrador, Granjero, Biologo), tambien tiene la posibilidad de modificar y eliminar cualquiera de estos. Solo seleccione la opcion que desee colocando el puntero en la opcion administrador y se desdplegaran las diferentes opciones que tiene la funcion Administrador.
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
      </div>
    </div>
  </div>
</div>

<div class="modal fade" id="exampleModal2" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel2" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel2">Acerca de: Granja</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        La funcion Granja le permite al granjero gestionar su propia granja, así como los productos que hay en su inventario. Solo seleccione la opcion que desee colocando el puntero en la opcion administrador y se desdplegaran las diferentes opciones que tiene la funcion Granja.
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
      </div>
    </div>
  </div>
</div>

<div class="modal fade" id="exampleModal3" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel3" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel3">Acerca de: Cultivo</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        La funcion Cultivo le permite al granjero gestionar sus cultivos, a su vez le permite hacer muestras al cultivo, dependiendo de la seccion que elija y por ultimo, la posibilidad de visualizar las muestras mediante una grafica interactiva. Solo seleccione la opcion que desee colocando el puntero en la opcion administrador y se desdplegaran las diferentes opciones que tiene la funcion Granja.
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
      </div>
    </div>
  </div>
</div>


    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
  <script>
  $(function () {
  $('[data-toggle="tooltip"]').tooltip()
})
function copiarAlPortapapeles(id_elemento) {
  var aux = document.createElement("input");
  aux.setAttribute("value", document.getElementById(id_elemento).innerHTML);
  document.body.appendChild(aux);
  aux.select();
  document.execCommand("copy");
  document.body.removeChild(aux);
    var tooltipc = document.getElementById("mail");
    tooltipc.removeAttribute("data-original-title");
    tooltipc.setAttribute("title", "Se ha copiado el correo en el portapapeles");
    tooltipc.setAttribute("data-original-title", "Se ha copiado el correo en el portapapeles");
    alert("Se ha copiado el correo en el portapapeles");
}
  </script>
  <p hidden id="p1">official.farmlands@gmail.com</p>
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
