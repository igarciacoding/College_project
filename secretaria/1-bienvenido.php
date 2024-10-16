<?php
include("../php/clase-secretaria/secretaria.php");
?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Sistema de Seleccion de Personal de Recursos Humanos</title>
	<link rel="stylesheet" href="../estilos/estilo-pagina/estilopagina.css" />
	<link rel="stylesheet" href="../estilos/estilo-menu/estilomenu.css" />
	<link rel="stylesheet" href="../estilos/estilo-slider/panning-slideshow.css"/>
</head>
<div style="visibility:hidden"><a id="ds" href="http://apycom.com/"></a></div>
<body id="Cuerpo">
<header id="Cabecera"></header>
<div id="menu">
    <ul class="menu">
        <li><a href="1-bienvenido.php" class="parent"><span>Pagina de Bienvenida</span></a></li>
        <li><a href="2-nuevoaspirante.php" class="parent"><span>Agregar Nuevo Aspirante</span></a></li>
        <li><a href="3-editaraspirante.php" class="parent"><span>Editar Antiguo Aspirante</span></a></li>
      <li><a href="13-ayuda.php" class="parent"><span>Ayuda</span></a></li>
      <li><a href="../php/clase-secretaria/cerrarsecretaria.php" class="parent"><span>Cerrar Session</span></a></li>
    </ul>
</div>
<div id="window">		
	<ul id="slideshow">
			<li class="box1"><img src="../images/Regional1.jpg"/></li>
			<li class="box2"><img src="../images/Regional2.jpg"/></li>
			<li class="box3"><img src="../images/Regional3.jpg"/></li>
			<li class="box4"><img src="../images/Regional4.jpg"/></li>
		</ul>
</div>    
<footer id="PiePagina"></footer>  
	<script src="../javascript/efectos-cambios/jquery-1.7.1.min.js"></script>
	<script src="../javascript/efectos-slider/jquery-latest.js"    ></script>
	<script src="../javascript/efectos-slider/jquery.easing.1.3.js"></script>
	<script src="../javascript/efectos-slider/jquery.timer.js"     ></script>
	<script src="../javascript/efectos-slider/image-rotator.js"    ></script>
	<script src="../javascript/efectos-menu/JavaMenu.js"           ></script>	
</body>
</html>
