<?php
include("../php/clase-administrador/administrador.php");
include('cargarplazas.php');
include('cargarprocesos.php');
$Fecha="";
for($x=2013;$x<=date("Y");$x++){
	$Fecha=$Fecha."<option value='$x'>".$x."</option>";
	}
?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Sistema de Seleccion de Personal de Recursos Humanos</title>
	<link rel="stylesheet" href="../estilos/estilo-pagina/estilopagina.css" />
	<link rel="stylesheet" href="../estilos/estilo-menu/estilomenu.css" />
    <link rel="stylesheet" href="../estilos/estilo-cuadros/sexyalertbox.css"/>
    <link rel="stylesheet" href="../estilos/estilo-reportes/estiloreportes.css"/>
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
  <tr><td colspan="7" align="center" valign="top" nowrap="nowrap" class="BordeSuperior"><h3>Reportes</h3></td>
    </tr><tr>
    <td colspan="2" align="center" valign="top" nowrap="nowrap" class="BordeSuperior"><h4>Ver aspirantes</h4></td>
    <td colspan="2" align="center" valign="top" nowrap="nowrap" class="BordeSuperior"><h4>Ver aspirantes con plaza</h4></td>
    <td colspan="2" align="center" valign="top" nowrap="nowrap" class="BordeSuperior"><h4>Ver aspirantes sin plaza</h4></td>
    <td width="173" align="center" valign="top" nowrap="nowrap" class="BordeSuperior"><h4>Eliminar aspirantes</h4></td>
    </tr><tr>
    <td width="61" align="center" valign="middle" nowrap="nowrap">&nbsp;</td>
    <td width="61" align="center" valign="middle" nowrap="nowrap"><select name="a" id="a">
      <?php echo $Fecha;?>
    </select></td>
    <td width="74" align="center" valign="middle" nowrap="nowrap">&nbsp;</td>
    <td width="69" align="center" valign="top" nowrap="nowrap"><select name="b" id="b">
     <?php echo $Fecha;?>
    </select></td>
    <td width="70" align="center" valign="top" nowrap="nowrap">&nbsp;</td>
    <td width="62" align="center" valign="top" nowrap="nowrap"><select name="c" id="c">
     <?php echo $Fecha;?>
    </select></td>
    <td align="center" valign="top" nowrap="nowrap"><select name="d" id="d">
     <?php echo $Fecha;?>
    </select></td>
  </tr><tr>
    <td width="61" align="center" valign="middle" nowrap="nowrap"><input name="b1" type="button" class="Botones" id="b1" value="Todos"></td>
    <td width="61" align="center" valign="middle" nowrap="nowrap"><input name="b2" type="button" class="Botones" id="b2" value="Por fecha"></td>
    <td width="74" align="center" valign="middle" nowrap="nowrap"><input name="b3" type="button" class="Botones" id="b3" value="Todos"></td>
    <td width="69" align="center" valign="top" nowrap="nowrap"><input name="b4" type="button" class="Botones" id="b4" value="Por fecha"></td>
    <td align="center" valign="top" nowrap="nowrap"><input name="b5" type="button" class="Botones" id="b5" value="Todos"></td>
    <td width="62" align="center" valign="top" nowrap="nowrap"><input name="b6" type="button" class="Botones" id="b6" value="Por fecha"></td>
    <td align="center" valign="top" nowrap="nowrap"><input name="b7" type="button" class="Botones" id="b7" value="Por fecha"></td>
  </tr><tr>
    <td colspan="7" align="center" valign="top" nowrap="nowrap" class="BordeSuperior"><h4>Ver procesos</h4></td></tr>
  <tr><td align="center" valign="top" nowrap="nowrap">&nbsp;</td>
    <td colspan="6" align="center" valign="top" nowrap="nowrap"><select name="select" class="fechaplazas" id="select">
    <?php echo $Listafechas;?>
    </select></td>
  </tr><tr>
    <td align="center" valign="middle" nowrap="nowrap"><input name="b8" type="button" class="Botones" id="b8" value="Todos"></td>
    <td colspan="6" align="center" valign="top" nowrap="nowrap"><input name="b9" type="button" class="Botones" id="b9" value="Por fecha"></td></tr><tr>
    <td colspan="7" align="center" valign="middle" nowrap="nowrap" class="BordeSuperior"><h4>Ver por plazas</h4></td>
    </tr><tr>
    <td align="center" valign="middle" nowrap="nowrap">&nbsp;</td>
    <td colspan="6" align="center" valign="middle" nowrap="nowrap"><select name="select2" class="fechaplazas" id="select2">
    <?php echo $ListaPlazas;?>
    </select></td>
    </tr><tr>
    <td align="center" valign="middle" nowrap="nowrap">&nbsp;</td>
    <td colspan="6" align="center" valign="middle" nowrap="nowrap"><input name="b10" type="button" class="Botones" id="b10" value="Por plaza"></td>
    </tr>
  </table>
	<p>&nbsp;</p>
  </form>
</div>  
<footer id="PiePagina"></footer>  
	<script src="../javascript/efectos-cambios/jquery-1.7.1.min.js"				            ></script>
    <script src="../javascript/cuadrosdialogos/sexyalertbox.v1.2.jquery.js"                 ></script>
    <script src="../javascript/metodospdfs/metodospdfs.js"									></script>
	<script src="../javascript/efectos-menu/JavaMenu.js"                                    ></script>
</body>
</html>
