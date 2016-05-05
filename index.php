<?php
	session_start();
	include("../controllers/conection.php");
	//$self = $_SERVER['PHP_SELF']; //Obtenemos la página en la que nos encontramos
	//$header("refresh:30; url=$self"); //Refrescamos cada 30 segundos
?>
<!DOCTYPE html>
<html lang="es">
	<head>
    	<meta charset="UTF-8">
    	<meta http-equiv="X-UA-Compatible" content="IE=edge">
    	<meta name="viewport" content="width=device-width, initial-scale=1">
    	<title>Dashboard|Monitoreo de sistema fotovoltaico, Salitre-Guayas [Ecuador]</title>
		<link rel="shortcut icon" type="image/x-icon" href="../resources/icon_web.ico">
    	<link href="../styles/bootstrap.min.css" rel="stylesheet" media="screen">
		<link href="../styles/style.css" rel="stylesheet" media="screen">
		<script src="http://code.jquery.com/jquery.js"></script>
		<script src="https://code.highcharts.com/stock/highstock.js"></script>
        <script src="https://code.highcharts.com/stock/modules/exporting.js"></script>
        <script>
        $(function (){
            Highcharts.setOptions({
                global : {
                    useUTC : false
                }
            });
            // Create the chart
            $('#graphic-vgenerator').highcharts('StockChart', {
                chart : {
                events : {
                load : function () {
                        // set up the updating of the chart each second
                        var series = this.series[0];
                        setInterval(function () {
                            var x = (new Date()).getTime(), // current time
                            y = Math.round(Math.random() * 100);
                            series.addPoint([x, y], true, true);
                        }, 1000);
                    }
                }
                },
                rangeSelector: {buttons: [{count: 1, type: 'minute', text: '1Min'}, 
                                          {count: 5, type: 'minute', text: '5Min'},
                                          {type: 'all', text: 'Todos'}],
                                inputEnabled: false,
                                selected: 0
                },
                title : {
                    text : 'Mediciones en tiempo real [V]'
                },
                exporting: {
                    enabled: true
                },
                series : [{
                    name : 'Voltaje:',
                    data : (function () {
                        // generate an array of random data
                        var data = [], time = (new Date()).getTime(), i;
                        for (i = -999; i <= 0; i += 1) {
                            data.push([
                                time + i * 1000,
                                Math.round(Math.random() * 100)
                            ]);
                        }
                        return data;
                    }())
                }]
            });
            $('#graphic-cgenerator').highcharts('StockChart', {
                chart : {
                events : {
                load : function () {
                        // set up the updating of the chart each second
                        var series = this.series[0];
                        setInterval(function () {
                            var x = (new Date()).getTime(), // current time
                            y = Math.round(Math.random() * 100);
                            series.addPoint([x, y], true, true);
                        }, 1000);
                    }
                }
                },
                rangeSelector: {buttons: [{count: 1, type: 'minute', text: '1Min'}, 
                                          {count: 5, type: 'minute', text: '5Min'},
                                          {type: 'all', text: 'Todos'}],
                                inputEnabled: false,
                                selected: 0
                },
                title : {
                    text : 'Mediciones en tiempo real [A]'
                },
                exporting: {
                    enabled: true
                },
                series : [{
                    name : 'Amperios:',
                    data : (function () {
                        // generate an array of random data
                        var data = [], time = (new Date()).getTime(), i;
                        for (i = -999; i <= 0; i += 1) {
                            data.push([
                                time + i * 1000,
                                Math.round(Math.random() * 100)
                            ]);
                        }
                        return data;
                    }())
                }]
            });

        });
        </script>
     	<!-- Librerías opcionales que activan el soporte de HTML5 para IE8-->
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
      				<a class="navbar-brand" href="../controllers/logout.php">Monitoreo remoto</a>
    			</div>
    			<div class="collapse navbar-collapse" id="myNavbar">
      				<ul class="nav navbar-nav">
        				<li  class="active"><a href="../views/dashboard.php"><i class="glyphicon glyphicon-dashboard"></i>Principal</a></li>
        				<li><a href="../views/reports.php"><i class="glyphicon glyphicon-stats"></i>Reportes</a></li>
        				<li><a href="../views/pictures.php"><i class="glyphicon glyphicon-picture"></i>Imágenes</a></li>
        				<li><a href="../views/about.php"><i class="glyphicon glyphicon-exclamation-sign"></i>Acerca de</a></li>
      				</ul>
      				<ul class="nav navbar-nav navbar-right">
        				<li><a href="../controllers/logout.php"><i class="glyphicon glyphicon-log-out"></i>Cerrar sesión</a></li>
      				</ul>
				</div>
  			</div>
		</nav>
		<div class="container-fluid">
			<div class="row">
				<div class="col-md-3"><!-- Monitor de energía-->
					<div class="panel panel-primary class">
					    <div class="panel-heading">Energía actual:</div> 
                        <div class="container-fluid">
                            <div id="graphic-egenerator"></div>
					    </div>
                    </div>
				</div>
				<div class="col-md-9"><!-- Monitor de gráficas-->
					<div class="panel panel-primary class">
						<div class="panel-heading">Datos de variables del Generador [Panel Fotovoltaico]:</div> 
      						<div class="panel-body">
								<div class="container-fluid">
									<div class="row-fluid">
										<div class="col-md-6" id="graphic-vgenerator" style="height: 250px; min-width: 300px"></div>
										<div class="col-md-6" id="graphic-cgenerator" style="height: 250px;"></div>
									</div>	
								</div>
							</div>
					</div>
					<div class="panel panel-primary class">
						<div class="panel-heading">Datos de variables de la Cargar [Luminarias]:</div> 
      						<div class="panel-body">
								<div class="container-fluid">
									<div class="row-fluid">
										<div class="col-md-6" id="graphic-vcharge" style="height: 250px;"></div>
										<div class="col-md-6" id="graphic-ccharge" style="height: 250px;"></div>
									</div>	
								</div>
							</div>
					
					</div>
				</div>
		    </div>
        </div>
		<!-- Pie de página
		<footer class="footer">
      		<div class="container-fluid">
				<div class="row">
					<div class="col-md-6 text-footer">Todos los derechos reservados. Universidad Politécnica Salesiana [Guayaquil]                         </div>
					<div class="col-md-6"><span class="pull-right">
						<img src="../resources/ups.png" height="40" width="150px">  
						<img src="../resources/colegio_franciscano.png" height="40" width="40px"> 
						</span>
					</div>
				</div>
      		</div>
    	</footer>-->
     	<script src="../javascript/bootstrap/bootstrap.min.js"></script>
  	</body>
</html>