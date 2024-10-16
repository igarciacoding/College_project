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
	<table width="200" border="0" align="center">
  <tr>
    <td colspan="5" align="center" valign="middle" class="BordeSuperior"><h3>Buscar aspirantes para las plazas</h3></td>
    </tr>
  <tr>
    <td align="center" valign="middle" nowrap="nowrap"><h4>&nbsp;</h4></td>
    <td width="100"> Nombres</td>
    <td width="102">Apellidos</td>
    <td width="109">Dui/Pasaporte</td>
    <td width="117">Calificacion</td>
    </tr>
  <tr>
    <td height="22" align="center" valign="middle" nowrap="nowrap"><h4>Busqueda por:</h4></td>
    <td colspan="4" rowspan="9"><select name="listausuarios[]" size="14" multiple="MULTIPLE" id="listausuarios" title="En esta area se muestra la lista de las personas que aparece segun la busqueda">
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
    <td width="153" align="center" valign="middle" nowrap="nowrap"><input type="text" name="universidadoinstitucion" id="universidadoinstitucion" placeholder=" Universidad o  Institucion" title="Ingrese la institucion o la universidad para realizar la busqueda"></td>
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
    <td align="center" valign="middle" nowrap="nowrap"><h4>
      <input name="button2" type="button" class="Botones" id="PDF" value="Ver PDF" title="Click para ver el curriculum del aspirante seleccionado">
    </h4></td>
  </tr>
  <tr>
    <td align="center" valign="top" nowrap="nowrap"><input name="Eliminar" type="button" class="Botones" id="Eliminar" value="Eliminar aspirante" title="Click aqui para eliminar un aspirante"></td>
  </tr>
  <tr>
    <td colspan="5" align="center" valign="middle" nowrap="nowrap"><h4 class="BordeSuperior">Acta de inicio de proceso de seleccion para plaza</h4></td>
  </tr>
  <tr>
    <td colspan="5" align="center" valign="middle" nowrap="nowrap"><label for="plazas"></label>
      <select name="plazas" class="fechaplazas" id="plazas">
<?php echo $ListaPlazas;?>
      </select></td>
    </tr>
  <tr>
    <td colspan="5" align="center" valign="middle" nowrap="nowrap"><label for="fechainicial"></label>
      <input name="fechainicial" type="text" class="fechaplazas" id="fechainicial" placeholder="Ingrese la fecha inicial del acta: Ejemplo: ocho horas del dia veinticuatro de octubre de dos mil doce" title="En este campo ingresara la fecha inicial del acta inicial, para ingresar la fecha debe seguir el siguiente formato: 'ocho horas del dia veinticuatro de octubre de dos mil doce'"></td>
    </tr>
  <tr>
    <td colspan="5" align="center" valign="middle" nowrap="nowrap"><input name="lugar" type="text" class="fechaplazas" id="lugar" placeholder="Ingrese el lugar donde esta la plaza: Ejemplo: Texistepeque" title="En este campo ingresara el lugar donde esta la plaza de trabajo, el formato de como escribir el lugar es: 'Texistepeque'"></td>
  </tr>
  <tr>
    <td colspan="5" align="center" valign="middle" nowrap="nowrap"><label for="nombre1"></label>
      <input name="nombre1" type="text" class="comision" id="nombre1" placeholder="Ingrese un participante" title="En este campo ingresara al nombre completo de unas de las personas que esta participando en el proceso de seleccion" autocomplete="on">
      <input name="cargo1" type="text" class="cargos" id="cargo1" placeholder="Ingrese el cargo del participante" title="Ingrese el cargo de la persona que va a participar en el proceso de seleccion" autocomplete="on"></td>
    </tr>
  <tr>
    <td colspan="5" align="center" valign="middle" nowrap="nowrap"><input name="nombre2" type="text" class="comision" id="nombre2" placeholder="Ingrese un participante" title="En este campo ingresara al nombre completo de unas de las personas que esta participando en el proceso de seleccion" autocomplete="on">
      <input name="cargo2" type="text" class="cargos" id="cargo2" placeholder="Ingrese el cargo del participante" title="Ingrese el cargo de la persona que va a participar en el proceso de seleccion" autocomplete="on"></td>
    </tr>
  <tr>
    <td colspan="5" align="center" valign="middle" nowrap="nowrap"><input name="nombre3" type="text" class="comision" id="nombre3" placeholder="Ingrese un participante" title="En este campo ingresara al nombre completo de unas de las personas que esta participando en el proceso de seleccion" autocomplete="on">
      <input name="cargo3" type="text" class="cargos" id="cargo3" placeholder="Ingrese el cargo del participante" title="Ingrese el cargo de la persona que va a participar en el proceso de seleccion" autocomplete="on"></td>
    </tr>
  <tr>
    <td colspan="5" align="center" valign="middle" nowrap="nowrap"><label for="evaluacion"></label>
      <input name="evaluacion" type="text" class="fechaspruebas" id="evaluacion" placeholder="Fecha Evaluacion Psicologica" title="Ingrese la fecha de la evaluacion psicologia con el siguiente formato: 28/05/2012">
      <input name="entrevista" type="text" class="fechaspruebas" id="entrevista" placeholder="    Fecha Entrevista" title="Ingrese la fecha de la entrevista con el siguiente formato: 28/05/2012">
      <input name="analisis" type="text" class="fechaspruebas" id="analisis" placeholder="Fecha Analisis Curricular" title="Ingrese la fecha del analisis curricular con el siguiente formato: 28/05/2012">
      <input name="prueba" type="text" class="fechaspruebas" id="prueba" placeholder="Fecha Prueba Tecnica" title="Ingrese la fecha de la prueba escrita con el siguiente formato: 28/05/2012"></td>
    </tr>
  <tr>
    <td colspan="5" align="center" valign="middle" nowrap="nowrap"><input name="Inicial" type="button" class="Botones" id="Inicial" value="Generar acta inicial" title="Click aqui para generar el acta inicial"></td>
  </tr>
  <tr>
    <td colspan="5" align="center" valign="middle" nowrap="nowrap"><h4 class="BordeSuperior">Acta de finalizacion de proceso de seleccion para plaza</h4></td>
  </tr>
  <tr>
    <td colspan="5" align="center" valign="middle" nowrap="nowrap"><input name="fechafinal" type="text" class="fechaplazas" id="fechafinal" placeholder="Ingrese la fecha final del acta: Ejemplo: ocho horas del dia veinticuatro de octubre de dos mil doce" title="En este campo ingresara la fecha final del acta final, para ingresar la fecha debe seguir el siguiente formato: 'ocho horas del dia veinticuatro de octubre de dos mil doce'"></td>
  </tr>
  <tr>
    <td colspan="5" align="center" valign="middle" nowrap="nowrap"><select name="CampoNumero" class="fechaplazas" id="CampoNumero">
      <option>Seleccionar Numero de aspirantes que saldra en el acta final</option>
    </select></td>
  </tr>
  <tr>
    <td colspan="5" align="center" valign="middle" nowrap="nowrap"><input name="Final" type="button" disabled="true" class="Botones" id="Final" value="Generar acta final" title="Click aqui para generar el acta final">
    </td>
  </tr>
    </table>
	<p>&nbsp;</p>
  </form>
</div>  
<footer id="PiePagina"></footer>  
	<script src="../javascript/efectos-cambios/jquery-1.7.1.min.js"				            ></script>
    <script src="../javascript/validaciones/maskedinput.js"                                 ></script>
    <script src="../javascript/cuadrosdialogos/sexyalertbox.v1.2.jquery.js"                 ></script>
    <script src="../javascript/metodobusquedas/busquedasporplaza.js"                        ></script> 
    <script src="../javascript/metodoeliminaraspirante/eliminaraspirante.js"                ></script> 
	<script src="../javascript/efectos-menu/JavaMenu.js"                                    ></script>
</body>
</html>
