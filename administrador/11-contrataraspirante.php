<?php
include("../php/clase-administrador/administrador.php");
include('cargarplazas.php');
?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Sistema de Seleccion de Personal de Recursos Humanos</title>
	<link rel="stylesheet" href="../estilos/estilo-pagina/estilopagina.css" />
	<link rel="stylesheet" href="../estilos/estilo-menu/estilomenu.css" />
    <link rel="stylesheet" href="../estilos/estilo-cuadros/sexyalertbox.css"/>
    <link rel="stylesheet" href="../estilos/estilo-busqueda/estilobusqueda.css"/>
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
  <form method="post" name="Calificar" id="Calificar" >
	<table width="200" border="0" align="center"> <tr>
    <td colspan="5" align="center" valign="middle" class="BordeSuperior"><h3>Contratar, Cambiar o Despedir personal</h3></td>
  </tr><tr>
    <td colspan="5" align="center" valign="middle" nowrap="nowrap"><label for="plazas"></label>
      <select name="plazas" class="fechaplazas" id="plazas">
  <?php echo $ListaPlazas;?>
        </select></td></tr> <tr>
    <td width="205" align="right" valign="middle" nowrap="nowrap"><label for="id"></label>
      <label for="persona"></label>      <label for="fechainicial">
        <input name="id" type="text" class="comision" id="id" placeholder="Ingrese el dui/pasaporte">
      </label></td>
    <td width="47">&nbsp;</td>
    <td width="91">Nombres</td>
    <td width="87">Apellidos</td>
    <td width="148">Dui/Pasaporte</td>
    </tr> <tr>
    <td rowspan="2" align="center" valign="middle" nowrap="nowrap"><input name="buscar" type="button" class="Botones" id="buscar" value="Buscar Personal"></td>
    <td colspan="4" align="left" valign="middle" nowrap="nowrap"><input name="persona" type="text" class="cargos" id="persona" readonly></td>
    </tr><tr>
    <td colspan="4" align="left" valign="middle" nowrap="nowrap"><input name="plaza" type="text" class="cargos" id="plaza" readonly></td></tr><tr>
    <td align="center" valign="bottom" nowrap="nowrap">&nbsp;</td>
    <td colspan="3" align="center" valign="bottom" nowrap="nowrap">&nbsp;</td>
    <td align="center" valign="bottom" nowrap="nowrap">&nbsp;</td>
  </tr><tr>
    <td align="center" valign="top" nowrap="nowrap"><input name="contratar" type="button" class="Botones" id="contratar" value="Contratar Personal"></td>
    <td colspan="3" align="center" valign="top" nowrap="nowrap"><input name="cambiar" type="button" class="Botones" id="cambiar" value="Cambiar de Plaza"></td>
    <td align="center" valign="top" nowrap="nowrap"><input name="despedir" type="button" class="Botones" id="despedir" value="Despedir Personal"></td>
  </tr><tr>
    <td align="center" valign="top" nowrap="nowrap">&nbsp;</td>
    <td colspan="3" align="center" valign="top" nowrap="nowrap">&nbsp;</td>
    <td align="center" valign="top" nowrap="nowrap">&nbsp;</td>
    </tr>
    </table>
	<p>&nbsp;</p>
  </form>
</div>  
<footer id="PiePagina"></footer>  
	<script src="../javascript/efectos-cambios/jquery-1.7.1.min.js"				            ></script>
    <script src="../javascript/validaciones/maskedinput.js"                                 ></script>
    <script src="../javascript/cuadrosdialogos/sexyalertbox.v1.2.jquery.js"                 ></script>
    <script src="../javascript/metodocontratar/contratar.js"								></script>
	<script src="../javascript/efectos-menu/JavaMenu.js"                                    ></script>
</body>
</html>
