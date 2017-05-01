<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />

	<title>Liga de Beisbol</title>

	<meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />

	<!-- Bootstrap Core CSS -->
	<link href="<?php echo URL.APP_PATH.'views/'.DFT; ?>css/bootstrap.min.css" rel="stylesheet">

	<!-- Custom CSS -->
	<link href="<?php echo URL.APP_PATH.'views/'.DFT; ?>css/landing-page.css" rel="stylesheet">

	<!-- Custom Fonts -->
	<link href="<?php echo URL.APP_PATH.'views/'.DFT; ?>css/font-awesome.min.css" rel="stylesheet" type="text/css">
	<link href="https://fonts.googleapis.com/css?family=Lato:300,400,700,300italic,400italic,700italic" rel="stylesheet" type="text/css">
	<!-- CSS Files -->
  <link href="<?php echo URL.APP_PATH.'views/'.DFT; ?>css/estilos.css" rel="stylesheet" />
	<link href="<?php echo URL.APP_PATH.'views/'.DFT; ?>css/style.css" rel="stylesheet" />
	<!-- jQuery -->
	<script src="<?php echo URL.APP_PATH.'views/'.DFT; ?>js/jquery.js"></script>
	<script type="text/javascript" charset="utf8" src="//cdn.datatables.net/1.10.15/js/jquery.dataTables.js"></script>

</head>
<body>
	<header id="header">
	    <div class="container">
	      <div class="row">
	    <nav id="nav-menu-container" class="navbar navbar-default navbar-fixed-top topnav" role="navigation">
	        <div class="container topnav">
	            <!-- Brand and toggle get grouped for better mobile display -->
	            <div class="navbar-header">
	                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
	                    <span class="sr-only"></span>
	                    <span class="icon-bar"></span>
	                    <span class="icon-bar"></span>
	                    <span class="icon-bar"></span>
	                </button>
	                <a class="navbar-brand topnav" href="<?php echo URL.'public/' ?>">Inicio</a>
	            </div>
	            <!-- Collect the nav links, forms, and other content for toggling -->
	            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
	              <ul class="nav navbar-nav navbar-left">
	                <li><a href="<?php echo URL.'public/Liga/partidos'; ?>">Resultados recientes</a></li>
	              </ul>
	                <ul class="nav navbar-nav navbar-right">
	                  <li class="dropdown">
	                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Liga<span class="caret"></span></a>
	                    <ul class="dropdown-menu">
	                      <li><a href="<?php echo URL.'public/Liga/general'; ?>">General</a></li>
	                      <li><a href="<?php echo URL.'public/Liga/divisiones'; ?>">Divisiones</a></li>
	                    </ul>
	                  </li>
	                  <li class="dropdown">
	                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Divisiones<span class="caret"></span></a>
	                    <ul class="dropdown-menu">
	                      <li><a href="vistas/posiciones.html">Division 1</a></li>
	                      <li><a href="vistas/posiciones.html">Division 2</a></li>
	                      <li><a href="vistas/posiciones.html">Division 3</a></li>
	                      <li><a href="vistas/posiciones.html">Division 4</a></li>
	                    </ul>
	                  </li>
	                  <li class="dropdown">
	                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Estadisticas<span class="caret"></span></a>
	                    <ul class="dropdown-menu">
	                      <li><a href="<?php echo URL.'public/Liga/estadisticas'; ?>">Jugadores</a></li>
	                      <li><a href="<?php echo URL.'public/Liga/estadisticasEquipo'; ?>">Equipo</a></li>
	                      <li><a href="#">Liga</a></li>
	                    </ul>
	                  </li>
	                </ul>
	            </div>
	            <!-- /.navbar-collapse -->
	        </div>
	        <!-- /.container -->
	    </nav>
	  </div>
	</div>
	</header>
