<?php
include("../php/clase-administrador/administrador.php");
?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Sistema de Seleccion de Personal de Recursos Humanos</title>
	<link rel="stylesheet" href="../estilos/estilo-pagina/estilopagina.css" />
    <link rel="stylesheet" href="../estilos/estilo-login/estilo-login.css" />
	<link rel="stylesheet" href="../estilos/estilo-menu/estilomenu.css" />
    <link rel="stylesheet" href="../estilos/estilo-cuadros/sexyalertbox.css"/>
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
<div id="contenedor"> 
	<div id="container">
		  <form method="post"  name="Formulario" id="Formulario">
		    <div id="Titulo1">Editar Antiguo Aspirante</div>
	<div class="Titulos"><img src="../images/user-icons2.png" name="imagen" width="100" height="85" id="imagen">
	</div>
		    <p>&nbsp;</p>
		    <div class="username-text" id="nombredui">Ingrese el numero de Dui o pasaporte:</div>
		    <div class="username-field" id="duirededor">
				  <input type="text" name="username" id="username" title="Ingrese el numero de Dui o pasaporte para modificar los datos del aspirante, y dar click en 'entrar' para ingresar"/>
				</div>
				<div class="forgot-usr-pwd">Sistema de Seleccion de Personal de Recursos Humanos</div>
			<input type="button" name="Entrar" value="Entrar" id="Entrar" title="Click aqui para entrar">
	  </form>
  </div>
</div>  
<footer id="PiePagina"></footer>  
	<script src="../javascript/efectos-cambios/jquery-1.7.1.min.js"				            ></script>
	<script src="../javascript/cuadrosdialogos/sexyalertbox.v1.2.jquery.js"                 ></script>
    <script src="../javascript/metodoverificarpersona/verificarpersona.js"                  ></script>
    <script src="../javascript/efectos-menu/JavaMenu.js"                                    ></script>
</body>
</html>
