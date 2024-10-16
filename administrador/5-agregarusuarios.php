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
		  <form action="welcome.html" id="Formulario">
		    <div class="Titulos"> Agregar Secretaria o Usuario/a</div>
		    <div class="Titulos"><img src="../images/agregarusuario.png" name="imagen" width="98" height="85" id="imagen">
             <table width="200" border="0" id="e">
		      <tr>
		        <td class="actualizararial">Nombres</td>
		        <td><input name="CampoNombreA" type="text" id="CampoNombreA" size="9" title="Ingrese el nombre" placeholder="Ingrese el nombre"></td>
		        <td class="actualizararial"><label for="CampoPasswordA">Nickname</label></td>
		        <td><input name="CampoNicknameA" type="text" id="CampoNicknameA" size="9" title="Ingrese el Nickname" placeholder="Ingrese el nickname"></td>
	          </tr>
		      <tr>
		        <td class="actualizararial">Apellidos</td>
		        <td><input name="CampoApellidoA" type="text" id="CampoApellidoA" size="9" placeholder="Ingrese el apellido"></td>
		        <td nowrap="nowrap" class="actualizararial">Password</td>
		        <td><input name="CampoPasswordA" type="password" id="CampoPasswordA" size="9" title="Ingrese la contraseña de la session" placeholder="Ingrese la contraseña"></td>
	          </tr>
		      <tr>
		        <td class="actualizararial">Dui:</td>
		        <td><input name="CampoDuiA" type="text" id="CampoDuiA" size="9" placeholder="00000000-0"></td>
		        <td class="actualizararial">Sexo:</td>
		        <td><select name="CampoSexoA" id="CampoSexoA" title="Se requiere que seleccione el tipo de sexo" >
		          <option value=''>Seleccionar</option>
		          <option value="Masculino">Masculino</option>
		          <option value="Femenino">Femenino</option>
	            </select></td>
	           </tr>
		      <tr>
		        <td colspan="4" nowrap="nowrap" class="actualizararial"> Tipo de usuario:
		          <select name="CampoTipo" id="CampoTipo">
		          <option>Seleccionar Tipo</option>
		          <option value="Secretaria">Secretaria</option>
		          <option value="Usuario/a">Usuario/a</option>
                </select></td>
	           </tr>
	         </table>
		    </div>
		    <span class="Titulos">
		    <input type="button" name="submit" value="Aceptar" id="Aceptar" />
		    </span>
		    <p>&nbsp;</p>
		  </form>
	</div>
</div>  
<footer id="PiePagina"></footer>  
	<script src="../javascript/efectos-cambios/jquery-1.7.1.min.js"				            ></script>
    <script src="../javascript/validaciones/maskedinput.js"                                 ></script>
    <script src="../javascript/cuadrosdialogos/sexyalertbox.v1.2.jquery.js"                 ></script>
    <script src="../javascript/metodoagregarusuario/agregarusuario.js"                      ></script>
	<script src="../javascript/efectos-menu/JavaMenu.js"                                    ></script>
   
</body>
</html>
