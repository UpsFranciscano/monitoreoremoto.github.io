<!DOCTYPE html>
<html lang="es">
	<head>
    	<meta charset="UTF-8">
    	<meta http-equiv="X-UA-Compatible" content="IE=edge">
    	<meta name="viewport" content="width=device-width, initial-scale=1">
    	<title>Imágenes|Monitoreo de sistema fotovoltaico, Salitre-Guayas [Ecuador]</title>
		<link rel="shortcut icon" type="image/x-icon" href="../resources/icon_web.ico">
    	<link href="../styles/bootstrap.min.css" rel="stylesheet" media="screen">
		<link href="../styles/style.css" rel="stylesheet" media="screen">
     	<!-- LibrerÃ­as opcionales que activan el soporte de HTML5 para IE8-->
    	<!--[if lt IE 9]>
      		<script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      		<script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    	<![endif]-->
  	</head>
  	<body>
		<nav class="navbar navbar-default navbar">
  			<div class="container-fluid">
    			<div class="navbar-header">
      				<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        				<span class="icon-bar"></span>
        				<span class="icon-bar"></span>
        				<span class="icon-bar"></span>
      				</button>
      				<a class="navbar-brand" href="../index.php">Monitoreo remoto</a>
    			</div>
				<div class="collapse navbar-collapse" id="myNavbar">
      				<ul class="nav navbar-nav">
        				<li><a href="../views/dashboard.php"><i class="glyphicon glyphicon-dashboard"></i>Principal</a></li>
        				<li><a href="../views/reports.php"><i class="glyphicon glyphicon-stats"></i>Reportes</a></li>
        				<li   class="active"><a href="../views/pictures.php"><i class="glyphicon glyphicon-picture"></i>Imágenes</a></li>
        				<li><a href="../views/about.php"><i class="glyphicon glyphicon-exclamation-sign"></i>Acerca de</a></li>
      				</ul>
      				<ul class="nav navbar-nav navbar-right">
        				<li><a href="../controllers/logout.php"><i class="glyphicon glyphicon-log-out"></i>Cerrar sesión</a></li>
      				</ul>
    			</div>
  			</div>
		</nav>
		<div class="container">
            <br>
            <div id="myCarousel" class="carousel slide" data-ride="carousel">
                <!--Indicadores-->
                <ol class="carousel-indicators">
                    <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                    <li data-target="#myCarousel" data-slide-to="1"></li>
                    <li data-target="#myCarousel" data-slide-to="2"></li>
                    <li data-target="#myCarousel" data-slide-to="3"></li>
                </ol>
                <!--Imágenes para el carrusel-->
                <div class="carousel-inner" role="listbox">
                    <div class="item active">
                        <img src="../resources/images/imagen1.JPG" alt="Chania" width="460" height="345">
                        <div class="carousel-caption">
                              <h3>Foto Número 1</h3>
                              <p>Sector de el exterior del Colegio Franciscano.</p>
                        </div>
                    </div>
                    <div class="item">
                        <img src="../resources/images/imagen2.JPG" alt="Chania" width="460" height="345">
                        <div class="carousel-caption">
                              <h3>Foto Número 2</h3>
                              <p>Panóramica del Colegio Franciscano.</p>
                        </div>
                    </div>
                    <div class="item">
                        <img src="../resources/images/imagen3.JPG" alt="Flower" width="460" height="345">
                        <div class="carousel-caption">
                            <h3>Foto Número 3</h3>
                            <p>Reflectores de Halógenos a reemplazar.</p>
                        </div>
                    </div>
                    <div class="item">
                        <img src="../resources/images/imagen4.JPG" alt="Flower" width="460" height="345">
                        <div class="carousel-caption">
                            <h3>Foto Número 4</h3>
                            <p>Entrada del Colegio Franciscano.</p>
                        </div>
                    </div>
                </div>
                <!--Controles de antes y después-->
                <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
                    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                    <span class="sr-only">Anterior</span>
                </a>
                <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
                    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                    <span class="sr-only">Siguiente</span>
                </a>
            </div>
        </div>
 		<script src="http://code.jquery.com/jquery.js"></script>
     	<script src="../javascript/bootstrap/bootstrap.min.js"></script>
  	</body>
</html>
</html>