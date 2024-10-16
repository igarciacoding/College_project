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
    <link rel="stylesheet" href="../estilos/estilo-cuadros/sexyalertbox.css"/>
    <link rel="stylesheet" href="../estilos/estilo-calificacion/estilocalificacion.css"/>
   
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
<div id="conten"> 
  <p>&nbsp;</p>
  <form action="../pdf/vercurriculum.php" method="post" name="Calificar" id="Calificar" target="new">
	<table width="200" border="0" align="center"><tr>
    <td colspan="5" align="center" valign="middle" class="BordeSuperior"><h2>Calificar Aspirante</h2></td></tr> <tr>
    <td align="center" valign="middle" nowrap="nowrap"><h4>Analisis Curricular </h4></td>
    <td width="93"> Nombres</td>
    <td width="97">Apellidos</td>
    <td width="104">Dui/Pasaporte</td>
    <td width="133">Calificacion</td></tr><tr>
    <td height="22" align="center" valign="middle" nowrap="nowrap"><label for="estudios"></label>
      <input type="text" name="estudios" id="estudios" placeholder="        Estudios(10%):"></td>
    <td colspan="4" rowspan="11"><select name="listausuarios[]" size="14" id="listausuarios">
    </select></td></tr> <tr>
    <td align="center" valign="middle" nowrap="nowrap"><input type="text" name="experiencias" id="experiencias" placeholder="      Experiencia(15%):"></td>
    </tr><tr>
    <td align="center" valign="middle" nowrap="nowrap"><input type="text" name="referencias" id="referencias" placeholder="       Referencias(5%):"></td></tr><tr>
    <td width="151" align="center" valign="middle" nowrap="nowrap"><h4>Evaluacion Psicologica</h4></td></tr><tr>
    <td align="center" valign="middle" nowrap="nowrap"><input type="text" name="personalidad" id="personalidad" placeholder="     Personalidad(10%):"></td></tr><tr>
    <td align="center" valign="middle" nowrap="nowrap"><input type="text" name="inteligencia" id="inteligencia" placeholder="      Inteligencia(10%):"></td>
    </tr><tr><td align="center" valign="middle" nowrap="nowrap"><h4>Entrevista</h4></td>
    </tr><tr><td align="center" valign="middle" nowrap="nowrap"><select name="CampoCondicion" id="CampoCondicion">
      <option value="" selected="selected">Condicion</option>
      <option value="Muy buena">Muy buena</option>
      <option value="Buena">Buena</option>
      <option value="Regular">Regular</option>
    </select></td></tr> <tr>
    <td align="center" valign="middle" nowrap="nowrap"><input type="text" name="nota" id="nota" placeholder="            Nota(10%):"></td></tr><tr>
    <td align="center" valign="bottom" nowrap="nowrap"><h4>Prueba Tecnica</h4></td></tr> <tr>
    <td align="center" valign="bottom" nowrap="nowrap"><input type="text" name="escrita" id="escrita" placeholder="          Escrita(40%):"></td></tr><tr>
    <td align="center" valign="middle" nowrap="nowrap">&nbsp;</td>
    <td colspan="4" align="center" valign="middle"><input name="botoncalificar" type="button" class="Botones" id="botoncalificar" value="Calificar Curriculum">
      <input name="pdf" type="button" class="Botones" id="pdf" value="Ver PDF"></td>
    </tr>
</table>
	<p>&nbsp;</p>
  </form>
</div>  
<footer id="PiePagina"></footer>  
	<script src="../javascript/efectos-cambios/jquery-1.7.1.min.js"				            ></script>
    <script src="../javascript/validaciones/maskedinput.js"                                 ></script>
    <script src="../javascript/cuadrosdialogos/sexyalertbox.v1.2.jquery.js"                 ></script>
    <script src="../javascript/metodocalificarcurriculum/calificarcurriculum.js"            ></script>  
	<script src="../javascript/efectos-menu/JavaMenu.js"                                    ></script>
</body>
</html>
