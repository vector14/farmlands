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

<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
    <!-- Bootstrap CSS -->
  
    <link rel="stylesheet" type="text/css" href="style.css">
    <link rel="stylesheet" href="bootstrap.css">
  	<link rel="stylesheet" href="css2/menu_principal.css">
  	<link rel="stylesheet" href="css2/menu_principal2.css">

    <title>Menu Principal</title>
  </head>
  <body>

   <nav class="navbar navbar-expand-lg navbar-success bg-success">
        <a class="navbar-brand" href="#"> <img src="pl.png" width="30" height="30" class="d-inline-block align-top" alt="">Menu Principal: Administrador</a>
        <button class="navbar-toggler" style="outline:0px" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <i id="icon-toggler" style="color:#fff; font-size:22px" class="fas fa-bars"></i>
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
            <a href="cerrar.php"> <button class="btn btn-success" type="submit" ><i class="fas fa-power-off"></i> Cerrar Sesión</button></a>
            </form>
        </div>
      </nav>
        <!------------------ Efecto Hover 16 --------------->
       <div class="container mt-40" style="margin-bottom: 20px">
            <h3 class="text-center">Bienvenido! Escoja una opcion</h3>
            <div class="row mt-30">
                <div class="col-md-4 col-sm-6">
                    <div class="box16">
                        <img src="assets/icons/Administrador.png">
                        <div class="box-content">
                            <h3 class="title">Administrador</h3>
                            <span class="post">Opciones</span>
                            <ul class="social">
                                <li><a data-toggle="tooltip" data-placement="bottom" title="Administrador" href="consultar_administrador.php"><i class="fas fa-users-cog"></i></a></li>
                                <li><a data-toggle="tooltip" data-placement="bottom" title="Biologo" href="consultar_biologo.php"><i class="fas fa-atom"></i></i></a></li>
                                <li><a data-toggle="tooltip" data-placement="bottom" title="Granjero" href="consultar_granjero.php"><i class="fas fa-child"></i></a></li>
                                <li><a data-toggle="tooltip" data-placement="bottom" title="Acerca de esta opcion" href="#"><i class="fas fa-info"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6">
                    <div class="box16">
                        <img src="assets/icons/Granja.jpg">
                        <div class="box-content">
                            <h3 class="title">Granja</h3>
                            <span class="post">Opciones</span>
                            <ul class="social">
                                <li><a data-toggle="tooltip" data-placement="bottom" title="Granjas" href="consultar_granja.php"><i class="fas fa-warehouse"></i></a></li>
                                <li><a data-toggle="tooltip" data-placement="bottom" title="Producto" href="consultar_producto.php"><i class="far fa-lemon"></i></a></li>
                                <li><a data-toggle="tooltip" data-placement="bottom" title="Acerca de esta opcion" href="#"><i class="fas fa-info"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6">
                    <div class="box16">
                        <img src="assets/icons/Cultivo.jpg">
                        <div class="box-content">
                            <h3 class="title">Cultivo</h3>
                            <span class="post">Opciones</span>
                            <ul class="social">
                                <li><a data-toggle="tooltip" data-placement="bottom" title="Cultivos" href="consultar_cultivo.php"><i class="fab fa-pagelines"></i></a></li>
                                <li><a data-toggle="tooltip" data-placement="bottom" title="Secciones de Cultivo" href="consultar_seccion_de_cultivo.php"><i class="fas fa-puzzle-piece"></i></a></li>
                                <li><a data-toggle="tooltip" data-placement="bottom" title="Muestras de Cultivo" href="#"><i class="fas fa-file-signature"></i></a></li>
                                <li><a data-toggle="tooltip" data-placement="bottom" title="Graficar Muestras" href="Google_Charts_Farmlands/vista/Graficar_Muestras.php"><i class="far fa-chart-bar"></i></a></li>
                                <li><a data-toggle="tooltip" data-placement="bottom" title="Acerca de esta opcion" href="#"><i class="fas fa-info"></i></a></li>
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
					<h5>Quick links</h5>
					<ul class="list-unstyled quick-links">
						<li><a href="javascript:void();"><i class="fa fa-angle-double-right"></i>Home</a></li>
						<li><a href="javascript:void();"><i class="fa fa-angle-double-right"></i>About</a></li>
						<li><a href="javascript:void();"><i class="fa fa-angle-double-right"></i>FAQ</a></li>
						<li><a href="javascript:void();"><i class="fa fa-angle-double-right"></i>Get Started</a></li>
						<li><a href="javascript:void();"><i class="fa fa-angle-double-right"></i>Videos</a></li>
					</ul>
				</div>
				<div class="col-xs-12 col-sm-4 col-md-4">
					<h5>Quick links</h5>
					<ul class="list-unstyled quick-links">
						<li><a href="javascript:void();"><i class="fa fa-angle-double-right"></i>Home</a></li>
						<li><a href="javascript:void();"><i class="fa fa-angle-double-right"></i>About</a></li>
						<li><a href="javascript:void();"><i class="fa fa-angle-double-right"></i>FAQ</a></li>
						<li><a href="javascript:void();"><i class="fa fa-angle-double-right"></i>Get Started</a></li>
						<li><a href="javascript:void();"><i class="fa fa-angle-double-right"></i>Videos</a></li>
					</ul>
				</div>
				<div class="col-xs-12 col-sm-4 col-md-4">
					<h5>Quick links</h5>
					<ul class="list-unstyled quick-links">
						<li><a href="javascript:void();"><i class="fa fa-angle-double-right"></i>Home</a></li>
						<li><a href="javascript:void();"><i class="fa fa-angle-double-right"></i>About</a></li>
						<li><a href="javascript:void();"><i class="fa fa-angle-double-right"></i>FAQ</a></li>
						<li><a href="javascript:void();"><i class="fa fa-angle-double-right"></i>Get Started</a></li>
						<li><a href="https://wwwe.sunlimetech.com" title="Design and developed by"><i class="fa fa-angle-double-right"></i>Imprint</a></li>
					</ul>
				</div>
			</div>
			<div class="row">
				<div class="col-xs-12 col-sm-12 col-md-12 mt-2 mt-sm-5">
					<ul class="list-unstyled list-inline social text-center">
						<li class="list-inline-item"><a href="javascript:void();"><i class="fa fa-facebook"></i></a></li>
						<li class="list-inline-item"><a href="javascript:void();"><i class="fa fa-twitter"></i></a></li>
						<li class="list-inline-item"><a href="javascript:void();"><i class="fa fa-instagram"></i></a></li>
						<li class="list-inline-item"><a href="javascript:void();"><i class="fa fa-google-plus"></i></a></li>
						<li class="list-inline-item"><a href="javascript:void();" target="_blank"><i class="fa fa-envelope"></i></a></li>
					</ul>
				</div>
				</hr>
			</div>	
			<div class="row">
				<div class="col-xs-12 col-sm-12 col-md-12 mt-2 mt-sm-2 text-center text-white">
					<p><u><a href="https://www.nationaltransaction.com/">National Transaction Corporation</a></u> is a Registered MSP/ISO of Elavon, Inc. Georgia [a wholly owned subsidiary of U.S. Bancorp, Minneapolis, MN]</p>
					<p class="h6">&copy All right Reversed.<a class="text-green ml-2" href="https://www.sunlimetech.com" target="_blank">Sunlimetech</a></p>
				</div>
				</hr>
			</div>	
		</div>
	</section>
	<!-- ./Footer -->




    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
  <script>
  $(function () {
  $('[data-toggle="tooltip"]').tooltip()
})
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