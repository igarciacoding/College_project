<?php
include("../php/clase-usuario/usuario.php");
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
        <li><a href="#" class="parent"><span>Menu Area Usuario</span></a>
        <div><ul>
                <li><a href="9-buscaraspirantesparaproceso.php" class="parent"><span>Buscar Curriculum</span></a></li>
                <li><a href="10-buscaraspirantesparaplaza.php" class="parent"><span>Personal para plaza</span></a></li>
       </ul></div>
      </li>
      <li><a href="13-ayuda.php" class="parent"><span>Ayuda</span></a></li>
      <li><a href="../php/clase-usuario/cerrarusuario.php" class="parent"><span>Cerrar Session</span></a></li>
    </ul>
</div>
<div id="conten"> 
  <p>&nbsp;</p>
  <form method="post" name="Calificar" id="Calificar" >
	<table width="200" border="0" align="center">
  <tr>
    <td colspan="5" align="center" valign="middle" class="BordeSuperior"><h3>Buscar aspirantes para proceso de seleccion</h3></td>
    </tr>
  <tr>
    <td align="center" valign="middle" nowrap="nowrap"><h4>&nbsp;</h4></td>
    <td width="93"> Nombres</td>
    <td width="97">Apellidos</td>
    <td width="104">Dui/Pasaporte</td>
    <td width="133">Calificacion</td>
    </tr>
  <tr>
    <td height="22" align="center" valign="middle" nowrap="nowrap"><h4>Busqueda por:</h4></td>
    <td colspan="4" rowspan="10"><select name="listausuarios[]" size="14" multiple="MULTIPLE" id="listausuarios" title="En esta area se muestra la lista de las personas que aparece segun la busqueda">
    </select></td>
    </tr>
  <tr>
    <td align="center" valign="middle" nowrap="nowrap"><select name="CampoDepartamento" id="CampoDepartamento" title="Seleccione el departamento para realizar la busqueda">
    <option value="">Departamento</option>
          <option value="Ahuachapán">Ahuachapán</option>
          <option value="Cabañas">Cabañas</option>
          <option value="Chalatenango">Chalatenango</option>
          <option value="Cuscatlán">Cuscatlán</option>
          <option value="La Libertad">La Libertad</option>
          <option value="La Paz">La Paz</option>
          <option value="La Unión">La Unión</option>
          <option value="Morazán">Morazán</option>
          <option value="San Miguel">San Miguel</option>
          <option value="San Salvador">San Salvador</option>
          <option value="San Vicente">San Vicente</option>
          <option value="Santa Ana">Santa Ana</option>
          <option value="Sonsonate">Sonsonate</option>
          <option value="Usulután">Usulután</option>
    </select></td>
    </tr>
  <tr>
    <td align="center" valign="middle" nowrap="nowrap"><input type="text" name="especialidadoprofesion" id="especialidadoprofesion" placeholder=" Especialidad o Profesion" title="Ingrese la profesion o la especialidad para realizar la busqueda"></td>
    </tr>
  <tr>
    <td width="151" align="center" valign="middle" nowrap="nowrap"><input type="text" name="universidadoinstitucion" id="universidadoinstitucion" placeholder=" Universidad o  Institucion" title="Ingrese la institucion o la universidad para realizar la busqueda"></td>
    </tr>
  <tr>
    <td align="center" valign="middle" nowrap="nowrap">&nbsp;</td>
    </tr>
  <tr>
    <td align="center" valign="middle" nowrap="nowrap"><input name="button" type="button" class="Botones" id="button" value="Buscar persona" title="Click aqui para realizar la busqueda de aspirantes segun lo escrito en los campos de busqueda"></td>
  </tr>
  <tr>
    <td align="center" valign="middle" nowrap="nowrap">&nbsp;</td>
  </tr>
  <tr>
    <td align="center" valign="middle" nowrap="nowrap"><h4>Numero de personas</h4></td>
    </tr>
  <tr>
    <td align="center" valign="bottom" nowrap="nowrap"><h4>
      <select name="CampoNumero" id="CampoNumero">
        <option>Seleccionar Numero</option>
      </select>
    </h4></td>
    </tr>
  <tr>
    <td align="center" valign="top" nowrap="nowrap"><input name="ListaPDF" type="button" class="Botones" id="ListaPDF" value="Mostrar Lista en PDF" title="Generar lista de aspirantes en PDF" ></td>
    </tr>
  <tr>
    <td align="center" valign="middle" nowrap="nowrap">&nbsp;</td>
    <td colspan="4" align="center" valign="middle"><input name="button2" type="button" class="Botones" id="PDF" value="Ver PDF" title="Click para ver el curriculum del aspirante seleccionado">      <input name="Eliminar" type="button" class="Botones" id="Eliminar" value="Eliminar Curriculum" title="Click aqui para eliminar un aspirante"></td>
    </tr>
</table>
    <p>&nbsp;</p>
    <p>
      <input name="" id="CampoDui" type="hidden" value="">
    </p>
  </form>
</div>  
<footer id="PiePagina"></footer>  
	<script src="../javascript/efectos-cambios/jquery-1.7.1.min.js"				            ></script>
    <script src="../javascript/validaciones/maskedinput.js"                                 ></script>
    <script src="../javascript/cuadrosdialogos/sexyalertbox.v1.2.jquery.js"                 ></script>
    <script src="../javascript/metodobusquedas/busquedasporproceso.js"                      ></script> 
    <script src="../javascript/metodoeliminaraspirante/eliminaraspirante.js"                ></script> 
	<script src="../javascript/efectos-menu/JavaMenu.js"                                    ></script>
</body>
</html>
