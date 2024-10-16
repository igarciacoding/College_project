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
<div id="contenedor"> 
	<div id="container">
		  <form action="welcome.html" id="Formulario">
		    <div class="Titulos">Bienvenido al Area Administrativa</div>
		    <div class="Titulos"><img src="../images/Administrador.png" name="imagen" width="110" height="85" id="imagen"></div>
		    <p>&nbsp;</p>
		    <div class="username-text">Nombre de usuario:</div>
			<div class="password-text">Contraseña:</div>
				<div class="username-field">
				  <input type="text" name="username" id="username" title="Ingrese su nombre de usuario"  />
				</div>
				<div class="password-field">
				  <input type="password" name="password" id="password" title="Ingrese la contraseña" />
				</div>
				<div class="forgot-usr-pwd">Ingrese su nombre de usuario y la contraseña</div>
			<input type="button" name="submit" value="Entrar" id="Entrar" />
		  </form>
	</div>
</div>  
<footer id="PiePagina"></footer>  
	<script src="../javascript/efectos-cambios/jquery-1.7.1.min.js"				            ></script>
    <script src="../javascript/cuadrosdialogos/sexyalertbox.v1.2.jquery.js"                 ></script>
    <script src="../javascript/metodoverificarpersona/verificaradministrador.js"			></script>
    <script src="../javascript/efectos-menu/JavaMenu.js"                                    ></script>
</body>
</html>
