<?php
include("../php/clase-administrador/administrador.php");
?>
<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <title>Sistema de Seleccion de Personal de Recursos Humanos</title>
    <link rel="stylesheet" href="../estilos/estilo-pagina/estilopagina.css" />
	<link rel="stylesheet" href="../estilos/estilo-menu/estilomenu.css" />
    <link href="../estilos/estilo-ayuda/nf.lightbox.css" rel="stylesheet" type="text/css" media="screen">
    <link href="../estilos/estilo-ayuda/cuadro.css" rel="stylesheet" type="text/css" media="screen">
</head>
<div style="visibility:hidden"><a id="ds" href="http://apycom.com/"></a></div>
<body id="Cuerpo">
<header id="Cabecera"></header>
<div id="menu">
   <ul class="menu">
        <li><a href="1-bienvenido.php" class="parent"><span>Pagina de Bienvenida</span></a></li>
        <li><a href="2-nuevoaspirante.php" class="parent"><span>Agregar Nuevo Aspirante</span></a></li>
        <li><a href="3-editaraspirante.php" class="parent"><span>Editar Antiguo Aspirante</span></a></li>
        <li><a href="#" class="parent"><span>Menu Area Administrativa</span></a>
        <div><ul>
                <li><a href="4-editaradministrador.php" class="parent"><span>Modificar Administrador</span></a></li>
                <li><a href="5-agregarusuarios.php" class="parent"><span>Agregar Usuarios</span></a></li>
                <li><a href="6-eliminarusuarios.php" class="parent"><span>Eliminar Usuarios</span></a></li>
                <li><a href="7-calificaraspirante.php#" class="parent"><span>Calificar Aspirante</span></a></li>
                <li><a href="8-actualizarcalificacion.php" class="parent"><span>Modifica Calificacion</span></a></li>
                <li><a href="9-buscaraspirantesparaproceso.php#" class="parent"><span>Buscar Curriculum</span></a></li>
                <li><a href="10-buscaraspirantesparaplaza.php" class="parent"><span>Personal para plaza</span></a></li>
                <li><a href="11-contrataraspirante.php" class="parent"><span>Contratar o despedir</span></a></li>
                <li><a href="12-reportes.php" class="parent"><span>Reportes</span></a></li>
       </ul></div>
      </li>
      <li><a href="13-ayuda.php" class="parent"><span>Ayuda</span></a></li>
      <li><a href="../php/clase-administrador/cerraradministrador.php" class="parent"><span>Cerrar Session</span></a></li>
    </ul>
</div>
    <div id="gallery">
        <ul>
        <li><a href="../photos/1.jpg" title="Pagina 1">
                <img src="../photos/p1.jpg" width="100" alt="">
            </a></li>
            <li><a href="../photos/2.jpg" title="Pagina 2">
                <img src="../photos/p2.jpg" width="100" alt="">
            </a></li>
            <li><a href="../photos/3.jpg" title="Pagina 3">
                <img src="../photos/p3.jpg" width="100" alt="">
            </a></li>
            <li><a href="../photos/4.jpg" title="Pagina 4">
                <img src="../photos/p4.jpg" width="100" alt="">
            </a></li>
            <li><a href="../photos/5.jpg" title="Pagina 5">
                <img src="../photos/p5.jpg" width="100" alt="">
            </a></li>
            <li><a href="../photos/6.jpg" title="Pagina 6">
                <img src="../photos/p6.jpg" width="100" alt="">
            </a></li>
            <li><a href="../photos/7.jpg" title="Pagina 7">
                <img src="../photos/p7.jpg" width="100" alt="">
            </a></li>
            <li><a href="../photos/8.jpg" title="Pagina 8">
                <img src="../photos/p8.jpg" width="100" alt="">
            </a></li>
            <li><a href="../photos/9.jpg" title="Pagina 9">
                <img src="../photos/p9.jpg" width="100" alt="">
            </a></li>
            <li><a href="../photos/10.jpg" title="Pagina 10">
                <img src="../photos/p10.jpg" width="100" alt="">
            </a></li>
            <li><a href="../photos/11.jpg" title="Pagina 11">
                <img src="../photos/p11.jpg" width="100" alt="">
            </a></li>
            <li><a href="../photos/12.jpg" title="Pagina 12">
                <img src="../photos/p12.jpg" width="100" alt="">
            </a></li>
            <li><a href="../photos/13.jpg" title="Pagina 13">
                <img src="../photos/p13.jpg" width="100" alt="">
            </a></li>
            <li><a href="../photos/14.jpg" title="Pagina 14">
                <img src="../photos/p14.jpg" width="100" alt="">
            </a></li>
            <li><a href="../photos/15.jpg" title="Pagina 15">
                <img src="../photos/p15.jpg" width="100" alt="">
            </a></li>
            <li><a href="../photos/16.jpg" title="Pagina 16">
                <img src="../photos/p16.jpg" width="100" alt="">
            </a></li>
            <li><a href="../photos/17.jpg" title="Pagina 17">
                <img src="../photos/p17.jpg" width="100" alt="">
            </a></li>
            <li><a href="../photos/18.jpg" title="Pagina 18">
                <img src="../photos/p18.jpg" width="100" alt="">
            </a></li>
            <li><a href="../photos/19.jpg" title="Pagina 19">
                <img src="../photos/p19.jpg" width="100" alt="">
            </a></li>
            <li><a href="../photos/20.jpg" title="Pagina 20">
                <img src="../photos/p20.jpg" width="100" alt="">
            </a></li>
             <li><a href="../photos/21.jpg" title="Pagina 21">
                <img src="../photos/p21.jpg" width="100" alt="">
            </a></li>
            <li><a href="../photos/22.jpg" title="Pagina 22">
                <img src="../photos/p22.jpg" width="100" alt="">
            </a></li>
            <li><a href="../photos/23.jpg" title="Pagina 23">
                <img src="../photos/p23.jpg" width="100" alt="">
            </a></li>
            <li><a href="../photos/24.jpg" title="Pagina 24">
                <img src="../photos/p24.jpg" width="100" alt="">
            </a></li>
            <li><a href="../photos/25.jpg" title="Pagina 25">
                <img src="../photos/p25.jpg" width="100" alt="">
            </a></li>
            <li><a href="../photos/26.jpg" title="Pagina 26">
                <img src="../photos/p26.jpg" width="100" alt="">
            </a></li>
            <li><a href="../photos/27.jpg" title="Pagina 27">
                <img src="../photos/p27.jpg" width="100" alt="">
            </a></li>
            <li><a href="../photos/28.jpg" title="Pagina 28">
                <img src="../photos/p28.jpg" width="100" alt="">
            </a></li>
            <li><a href="../photos/29.jpg" title="Pagina 29">
                <img src="../photos/p29.jpg" width="100" alt="">
            </a></li>
            <li><a href="../photos/30.jpg" title="Pagina 30">
                <img src="../photos/p30.jpg" width="100" alt="">
            </a></li>
             <li><a href="../photos/31.jpg" title="Pagina 31">
                <img src="../photos/p31.jpg" width="100" alt="">
            </a></li>
            <li><a href="../photos/32.jpg" title="Pagina 32">
                <img src="../photos/p32.jpg" width="100" alt="">
            </a></li>
            <li><a href="../photos/33.jpg" title="Pagina 33">
                <img src="../photos/p33.jpg" width="100" alt="">
            </a></li>
            <li><a href="../photos/34.jpg" title="Pagina 34">
                <img src="../photos/p34.jpg" width="100" alt="">
            </a></li>
            <li><a href="../photos/35.jpg" title="Pagina 35">
                <img src="../photos/p35.jpg" width="100" alt="">
            </a></li>
        </ul>
        <div id="Reglamento">
         <object id="Reglamento"  data="../reglamento/REGLAMENTO INTERNO DE RECURSOS HUMANOS MSPAS.pdf" type="application/pdf">
        </object>
        </div>
       
    </div>
<footer id="PiePagina"></footer>    
      <script  src="../javascript/efectos-cambios/jquery-1.7.1.min.js" type="text/javascript"></script>
    <script  src="../javascript/efectoayuda/NFLightBox.js" type="text/javascript"></script>
<script src="../javascript/efectoayuda/verayuda.js">   </script>
	<script src="../javascript/efectos-menu/JavaMenu.js"           ></script>	
</body>
</html>
