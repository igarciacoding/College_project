<?php
include("../php/clase-secretaria/secretaria.php");
?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Sistema de Seleccion de Personal de Recursos Humanos</title>
	<link rel="stylesheet" href="../estilos/estilo-pagina/estilopagina.css" />
	<link rel="stylesheet" href="../estilos/estilo-menu/estilomenu.css"     />
	<link rel="stylesheet" href="../estilos/estilo-cuadros/sexyalertbox.css"/>
  	<link rel="stylesheet" href="../estilos/estilo-tablas/estilo-tablas.css"/>
    
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

    <div id="contenedor">  
   <form action="" method="post" name="NuevoAspirante" id="NuevoAspirante"> 
      <table width="200"  border="0" align="center">
  <tr >
    <td class="BordeSuperior" colspan="12" align="center" valign="middle" nowrap><h2>Datos Personales</h2></td>
  </tr>
  <tr>
    <td width="73" height="22" align="right" valign="middle" nowrap><strong>Nombres:</strong></td>
    <td width="128" nowrap><input name="CampoNombre" type="text" id="CampoNombre" title="Ingrese el nombre"  placeholder="Ingrese el nombre"></td>
    <td width="72"><strong>Apellidos:
        
    </strong></td>
    <td width="123"><strong>
      <input name="CampoApellido" type="text" id="CampoApellido" placeholder="Ingrese el apellido" title="Ingrese el apellido">
    </strong></td>
    <td width="35"><strong>DUI:</strong></td>
    <td width="74"><strong>
      <input name="CampoDui" type="text" id="CampoDui" size="10" maxlength="10" title="Ingrese el numero de dui" placeholder="00000000-0">
    </strong></td>
    <td width="34"><strong>NIT:</strong></td>
    <td width="112"><strong>
      <input name="CampoNit" type="text" id="CampoNit" size="14" maxlength="17" title="Ingrese el numero de nit" placeholder="0000-000000-000-0">
    </strong></td>
    <td width="44" align="center"><strong>AFP:</strong></td>
    <td width="86"><strong>
      <input name="CampoAfp" type="text" id="CampoAfp" size="12" maxlength="12" title="Ingrese el numero de afp" placeholder="000000000000">
    </strong></td>
    <td width="70"><strong>Pasaporte:</strong></td>
    <td width="74"><strong>
      <input name="CampoPasaporte" type="text" id="CampoPasaporte" size="4" maxlength="10" title="Ingrese el numero de pasaporte" placeholder="X0000000">
    </strong></td>
    </tr>
  <tr>
    <td height="22" nowrap><strong>Direccion:</strong></td>
    <td colspan="10" nowrap><input name="CampoDireccion" type="text" id="CampoDireccion" title="Se requiere que ingrese la direccion de su vivienda donde reside actualmente" autocomplete="off" size="95" placeholder="Ingrese su direccion actual" >
      <strong> ISSS:</strong></td>
    <td nowrap><strong>
      <input name="CampoIsss" type="text" id="CampoIsss" size="10" maxlength="10" title="Ingrese el numero del Isss" placeholder="000000000">
    </strong></td>
  </tr>
  <tr>
    <td height="24" align="right" nowrap><strong>Sexo:</strong></td>
    <td colspan="10" align="left" nowrap><select name="CampoSexo" id="CampoSexo" title="Se requiere que seleccione el tipo de sexo" >
      <option value=''>Seleccionar</option>
      <option value="Masculino">Masculino</option>
      <option value="Femenino">Femenino</option>
      </select>
      <strong>Departamento:
        <select name="CampoDepartamento" id="CampoDepartamento" title="Se requiere que seleccione el departamento o zona del pais">
          <option value="">Seleccione el Departamento</option>
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
          </select>
        Estado Familar:
  <select  name="CampoEstadoFamiliar" id="CampoEstadoFamiliar" title="Se requiere que seleccione su estado familiar" >
    <option value="">Seleccionar</option>
    <option value="Soltero/a">Soltero/a</option>
    <option value="Casado/a">Casado/a</option>
    <option value="Divorciado/a">Divorciado/a</option>
    <option value="Viudo/a">Viudo/a</option>
    <option value="Acompañado/a">Acompañado/a</option>
  </select>
        Fecha de Nacimiento: </strong></td>
    <td align="left" nowrap><strong>
      <input type="text" name="CampoFecha" id="CampoFecha" placeholder="00/00/0000" title="Ingrese la fecha de nacimiento: Ejemplo: 00/00/0000">
      </strong></td>
  </tr>
  <tr>
    <td align="right" nowrap>&nbsp;</td>
    <td align="left" nowrap>&nbsp;</td>
    <td align="center" nowrap>&nbsp;</td>
    <td colspan="5" align="center" nowrap><input name="GuardarDatos" type="button" class="Botones" id="GuardarDatos" value="Guardar datos personales" title="Click aqui para guardar sus datos personales"></td>
    <td colspan="4" rowspan="3" align="center" valign="middle" nowrap><img src="../images/loho.png" width="263" height="100"></td>
  </tr>
  <tr>
    <td height="22" align="right" nowrap><strong>Telefonos: </strong></td>
    <td align="left" nowrap><strong>
      <input name="CampoTelefono" type="text" disabled id="CampoTelefono" title="Para agregar el numero de telefono, presione la tecla enter" size="8" maxlength="8" placeholder="00000000">
      </strong></td>
    <td align="left" nowrap>&nbsp;</td>
    <td colspan="5" align="left" nowrap><strong>Email: 
      <input name="CampoEmail" type="text" disabled id="CampoEmail" placeholder="ejemplo@ejemplo.com" title="Para agregar el correo electronico, presione la tecla enter" size="8" maxlength="30">
    </strong></td>
    </tr>
  <tr>
    <td height="50" align="right" nowrap>&nbsp;</td>
    <td colspan="7" align="left" nowrap><select name="ListaTelefono" size="5" id="ListaTelefono" >
      </select>
      <strong>
        <input name="BorrarTelefono" id="BorrarTelefono" type="button" class="Botones" value="Eliminar Telefono" title="Seleccione el telefono y click aqui para eliminar">
        </strong>
      <select name="CampoListaEmail" size="5" id="CampoListaEmail" >
</select>
      <strong>
        <input name="BorrarEmail" type="button"  class="Botones" id="BorrarEmail" value="Eliminar Email" title="Seleccione el email y click aqui para eliminar">
      </strong></td>
    </tr>
</table>
      <table width="200" border="0" align="center">
        <tr>
          <td class="BordeSuperior" colspan="2" align="center" valign="middle" nowrap><h2>Educacion Basica</h2></td>
        </tr>
        <tr>
          <td align="center" nowrap><strong>Centro Escolar / Colegio: </strong></td>
          <td align="center"><strong>Periodo Academico</strong></td>
        </tr>
        <tr>
          <td width="735" align="center"><label for="CampoCentroEscolar"></label>            <input name="CampoCentroEscolar" type="text" disabled  id="CampoCentroEscolar"
            placeholder="Ingrese el nombre del centro escolar o colegio: Ejemplo: 'Centro Escolar Dr. Ranulfo Castro'" title="Para agregar el centro escolar, presione la tecla enter" autocomplete="on" size="95" maxlength="200" ></td>
          <td align="center"><strong>
            Inicio:
            <input name="CampoICE" type="text" disabled id="CampoICE" placeholder="0000" title="Ingrese la fecha inicial" size="2" maxlength="4">
            ---
          Final:</strong><strong>
            <input name="CampoFCE" type="text" disabled id="CampoFCE" placeholder="0000" title="Ingrese la fecha final" size="2" maxlength="4">
          </strong></td>
        </tr>
        <tr>
          <td align="center"><select name="ListaCentroEscolar" size="5" id="ListaCentroEscolar" >
          </select></td>
          <td align="center" valign="middle"><input name="BotonCentroEscolar" type="button" class="Botones" id="BotonCentroEscolar" value="Eliminar Educacion Basica" title="Para eliminar un centro escolar o colegio, seleccione uno de la lista y click en este boton" ></td>
        </tr>
      </table>
      <table width="200" border="0" align="center">
        <tr>
          <td class="BordeSuperior" colspan="2" align="center" valign="middle" nowrap><h2>Educacion Media</h2></td>
        </tr>
        <tr>
          <td align="center" nowrap><strong>Instituto Nacional / Colegio: </strong></td>
          <td align="center"><strong>Periodo Academico</strong></td>
        </tr>
        <tr>
          <td align="center"><input name="CampoBachillerato" type="text" disabled  id="CampoBachillerato" placeholder="Ingrese el nombre del instituto nacional o colegio: Ejemplo: Instituto Nacional 'Jorge Eliseo Azucena Ortega'" title="Para ingresar el nombre del bachillerato, presione la tecla enter" autocomplete="on" size="95" maxlength="200" ></td>
          <td align="center">&nbsp;</td>
        </tr>
        <tr>
          <td width="735" align="center"><input name="CampoTipoBachillerato" type="text" disabled  id="CampoTipoBachillerato" placeholder="Ingrese el nombre del tipo de bachillerato: Ejemplo 'Bachillerato Tecnico Vocacional Opcion Contaduria'" title="Para ingresar el nombre del tipo de bachillerato, presione la tecla enter" autocomplete="on" size="95" maxlength="200" ></td>
          <td align="center"><strong> Inicio:
            <input name="CampoIIN" type="text" disabled id="CampoIIN" placeholder="0000" title="Ingrese la fecha inicial" size="2" maxlength="4">
            ---
            Final:</strong><strong>
              <input name="CampoFIN" type="text" disabled id="CampoFIN" placeholder="0000" title="Ingrese la fecha final" size="2" maxlength="4">
            </strong></td>
        </tr>
        <tr>
          <td align="center"><select name="ListaBachillerato" size="5" id="ListaBachillerato" >
          </select></td>
          <td align="center" valign="middle"><input name="BotonBachillerato" type="button" class="Botones" id="BotonBachillerato" value="Eliminar Educacion Media" title="Para eliminar un bachillerato o colegio, seleccione uno de la lista y click en este boton"></td>
        </tr>
      </table>
      <table width="200" border="0" align="center">
        <tr>
          <td class="BordeSuperior" colspan="2" align="center" valign="middle" nowrap><h2>Educacion Superior</h2></td>
        </tr>
        <tr>
          <td align="center" nowrap><strong>Universidad / Instituto de Educacion Superior:</strong></td>
          <td align="center"><strong>Periodo Academico</strong></td>
        </tr>
        <tr>
          <td align="center"><input name="CampoUniversidad" type="text" disabled  id="CampoUniversidad" placeholder="Ingrese el nombre de la universidad o institucion superior: Ejemplo: 'Universidad de El Salvador'" title="Para ingresar el nombre de la universidad o institucion superior, presione la tecla enter" autocomplete="on" size="95" maxlength="200" ></td>
          <td align="center">&nbsp;</td>
        </tr>
        <tr>
          <td width="735" align="center"><input name="CampoCarrera" type="text" disabled  id="CampoCarrera" placeholder="Ingrese la carrera con su especialidad Ejemplo: 'Ingenieria de Sistemas Informaticos Especialidad en Redes'" title="Para ingresar la carrera de la universidad o institucion superior, presione la tecla enter" autocomplete="on" size="95" maxlength="200" ></td>
          <td align="center"><strong> Inicio:
            <input name="CampoIU" type="text" disabled id="CampoIU" placeholder="0000" title="Ingrese la fecha inicial" size="2" maxlength="4">
            ---
            Final:</strong><strong>
              <input name="CampoFU" type="text" disabled id="CampoFU" placeholder="0000" title="Ingrese la fecha final" size="2" maxlength="4">
            </strong></td>
        </tr>
        <tr>
          <td align="center"><select name="ListaUniversidad" size="5" id="ListaUniversidad" >
          </select></td>
          <td align="center" valign="middle"><input name="BotonUniversidad" type="button" class="Botones" id="BotonUniversidad" value="Eliminar Educacion Superior" title="Para eliminar una universidad o colegio, seleccione uno de la lista y click en este boton" ></td>
        </tr>
      </table>
      <table width="200" border="0" align="center">
        <tr>
          <td class="BordeSuperior" colspan="2" align="center" valign="middle" nowrap><h2>Otros Estudios</h2></td>
        </tr>
        <tr>
          <td align="center" nowrap><strong>Universidad / Institucion / Lugar</strong></td>
          <td align="center"><strong>Periodo Academico</strong></td>
        </tr>
        <tr>
          <td align="center"><input name="CampoOtros" type="text" disabled id="CampoOtros" placeholder="Ingrese el nombre de la institucion donde a obtenido un estudio o curso: Ejemplo 'Academia Europea'" title="Para agregar el nombre del la institucion, presione la tecla enter" autocomplete="on" size="95" maxlength="200" ></td>
          <td align="center">&nbsp;</td>
        </tr>
        <tr>
          <td width="735" align="center"><input name="CampoOtrosTipo" type="text" disabled id="CampoOtrosTipo" placeholder="Ingrese el nombre del estudio o curso el cual estudio: Ejemplo: 'Ingles Intensivo Avanzado'" title="Para agregar el nombre del estudio o curso el cual estudio, presione la tecla enter" autocomplete="on" size="95" maxlength="200" ></td>
          <td align="center"><strong> Inicio:
            <input name="CampoIO" type="text" disabled id="CampoIO" placeholder="0000" title="Ingrese la fecha inicial" size="2" maxlength="4">
            ---
            Final:</strong><strong>
              <input name="CampoFO" type="text" disabled id="CampoFO" placeholder="0000" title="Ingrese la fecha final" size="2" maxlength="4">
            </strong></td>
        </tr>
        <tr>
          <td align="center"><select name="ListaOtros" size="5" id="ListaOtros" >
          </select></td>
          <td align="center" valign="middle"><input name="BotonOtros" type="button" class="Botones" id="BotonOtros" value="Eliminar Otros Estudios" title="Para eliminar una universidad, institucion o lugar, seleccione uno de la lista y click en este boton"></td>
        </tr>
      </table>
      <table width="200" border="0" align="center">
        <tr>
          <td class="BordeSuperior" colspan="11" align="center" valign="middle" nowrap><h2>Referencias Personales</h2></td>
        </tr>
        <tr>
          <td width="126" align="center" nowrap><strong>Nombre:</strong></td>
          <td width="118" align="center" nowrap><strong>Apellido:</strong></td>
          <td width="74" align="center" nowrap><strong>Dui:</strong></td>
          <td width="74" align="center" nowrap><strong>Telefono:</strong></td>
          <td width="536" colspan="7" align="center" nowrap><strong>Ocupacion:</strong></td>
        </tr>
        <tr>
          <td height="26" align="right"><input name="CampoNombreRP" type="text" disabled id="CampoNombreRP" placeholder="Ingrese el nombre" maxlength="25"></td>
          <td align="center"><strong>
            <input name="CampoApellidoRP" type="text" disabled id="CampoApellidoRP" placeholder="Ingrese el apellido" maxlength="25">
          </strong></td>
          <td align="center"><strong>
          <input name="CampoDuiRP" type="text" disabled id="CampoDuiRP" placeholder="00000000-0" size="10" maxlength="10">
          </strong></td>
          <td align="center"><strong>
          <input name="CampoTelefonoRP" type="text" disabled id="CampoTelefonoRP" placeholder="00000000" size="8" maxlength="8">
          </strong></td>
          <td colspan="7" align="center"><label for="CampoOcupacionRP">
            <input name="CampoOcupacionRP" type="text" disabled id="CampoOcupacionRP" placeholder="Ingrese la ocupacion de la referencia personal: Ejemplo: 'Gerente General'" size="85" maxlength="200">
          </label></td>
        </tr>
        <tr>
          <td height="62" colspan="11" align="center"><select name="ListaReferenciasPersonales" size="5" id="ListaReferenciasPersonales" >
          </select>
          <input name="BotonReferenciaPersonal" type="button" class="Botones" id="BotonReferenciaPersonal" value="Eliminar Referencia Personal" title="Para eliminar una referencia personal, seleccione uno de la lista y click en este boton"></td>
        </tr>
      </table>
      <table width="200" border="0" align="center">
        <tr>
          <td class="BordeSuperior" colspan="11" align="center" valign="middle" nowrap><h2>Referencias Laborales</h2></td>
        </tr>
        <tr>
          <td width="126" align="center" nowrap><strong>Nombre:</strong></td>
          <td width="118" align="center" nowrap><strong>Apellido:</strong></td>
          <td width="74" align="center" nowrap><strong>Dui:</strong></td>
          <td width="74" align="center" nowrap><strong>Telefono:</strong></td>
          <td width="536" colspan="7" align="center" nowrap><strong>Ocupacion:</strong></td>
        </tr>
        <tr>
          <td align="right"><input name="CampoNombreRL" type="text" disabled id="CampoNombreRL" placeholder="Ingrese el nombre" maxlength="25"></td>
          <td align="center"><strong>
            <input name="CampoApellidoRL" type="text" disabled id="CampoApellidoRL" placeholder="Ingrese el apellido" maxlength="25">
          </strong></td>
          <td align="center"><strong>
          <input name="CampoDuiRL" type="text" disabled id="CampoDuiRL" placeholder="00000000-0" size="10" maxlength="10">
          </strong></td>
          <td align="center"><strong>
          <input name="CampoTelefonoRL" type="text" disabled id="CampoTelefonoRL" placeholder="00000000" size="8" maxlength="8">
          </strong></td>
          <td colspan="7" align="center"><label for="CampoOcupacionRL">
            <input name="CampoOcupacionRL" type="text" disabled id="CampoOcupacionRL" placeholder="Ingrese la ocupacion de la referencia laboral: Ejemplo: 'Gerente General'" size="85" maxlength="200">
          </label></td>
        </tr>
        <tr>
          <td colspan="11" align="center"><select name="ListaReferenciasLaborales" size="5" id="ListaReferenciasLaborales" >
          </select>
          <input name="BotonReferenciaLaboral" type="button" class="Botones" id="BotonReferenciaLaboral" value="Eliminar Referencia Laboral" title="Para eliminar una referencia laboral, seleccione uno de la lista y click en este boton"></td>
        </tr>
      </table>
      <table width="200" border="0" align="center">
        <tr>
          <td class="BordeSuperior" colspan="2" align="center" valign="middle" nowrap><h2>Experiencias Laborales</h2></td>
        </tr>
        <tr>
          <td align="center" nowrap><strong>Empresa/ Institucion / Lugar</strong></td>
          <td align="center"><strong>Periodo de Experiencia</strong></td>
        </tr>
        <tr>
          <td align="center"><input name="CampoExperiencias" type="text" disabled id="CampoExperiencias" placeholder="Ingrese el nombre de la empresa, Institucion o Lugar en la cual trabajo: Ejemplo: 'Panaderia y Pasteleria El Rosario'"  title="Para ingresar el nombre de la empresa o institucion, presione la tecla enter" autocomplete="on" size="95" maxlength="200" ></td>
          <td align="center">&nbsp;</td>
        </tr>
        <tr>
          <td width="735" align="center"><input name="CampoTipoExperiencias" type="text" disabled id="CampoTipoExperiencias" placeholder="Ingrese el nombre del puesto donde laboro en la empresa: Ejemplo: 'Atencion al cliente'" title="Para ingresar el puesto de la empresa donde laboro, presione la tecla enter" autocomplete="on" size="95" maxlength="200" ></td>
          <td align="center"><strong> Inicio:
            <input name="CampoIE" type="text" disabled id="CampoIE" placeholder="0000" title="Ingrese la fecha inicial" size="2" maxlength="4">
            ---
            Final:</strong><strong>
              <input name="CampoFE" type="text" disabled id="CampoFE" placeholder="0000" title="Ingrese la fecha final" size="2" maxlength="4">
          </strong></td>
        </tr>
        <tr>
          <td align="center"><select name="ListaEsperiencias" size="5" id="ListaEsperiencias" >
          </select></td>
          <td align="center" valign="middle"><input name="BotonExperiencias" type="button" class="Botones" id="BotonExperiencias" value="Eliminar Experiencia Laboral" title="Para eliminar una experiencia laboral, seleccione uno de la lista y click en este boton"></td>
        </tr>
        <tr>
          <td colspan="2" align="center"><input name="terminarproceso" type="button" class="Botones" id="terminarproceso" value="Terminar ingreso de datos e ingresar nuevo aspirante" >
          <input name="PDF" type="button" class="Botones" id="PDF" value="Ver el curriculum en PDF" title="Para ver el pdf, click aqui" ></td>
        </tr>
      </table>
     </form>   
  </div>
 
<footer id="PiePagina"></footer>  
	<script src="../javascript/efectos-cambios/jquery-1.7.1.min.js"				            ></script>
	<script src="../javascript/efectos-slider/jquery.easing.1.3.js"					        ></script>
    <script src="../javascript/validaciones/maskedinput.js"                                 ></script>
	<script src="../javascript/cuadrosdialogos/sexyalertbox.v1.2.jquery.js"                 ></script>
    <script src="../javascript/validaciones/validacioncampos.js"                            ></script>	
	<script src="../javascript/metodosdatospersonales/metodosdatospersonales.js"            ></script>
	<script src="../javascript/metodostelefonos/metodostelefonos.js"                        ></script>
	<script src="../javascript/metodosemail/metodosemail.js"                                ></script>
	<script src="../javascript/metodoseducacionbasica/metodoseducacionbasica.js"            ></script>
	<script src="../javascript/metodoseducacionmedia/metodoseducacionmedia.js"              ></script>
	<script src="../javascript/metodoseducacionsuperior/metodoseducacionsuperior.js"        ></script>
	<script src="../javascript/metodosotrosestudios/metodosotrosestudios.js"                ></script>
    <script src="../javascript/metodosreferenciaspersonales/metodosreferenciaspersonales.js"></script>
    <script src="../javascript/metodosreferenciaslaborales/metodosreferenciaslaborales.js"  ></script>
	<script src="../javascript/metodosexperiencias/metodosexperiencias.js"                  ></script>    
	<script src="../javascript/efectos-menu/JavaMenu.js"                                    ></script>
</body>
</html>
