<?php
function limpiarCadena($valor)
{
	$valor = str_replace("SELECT","",$valor);
	$valor = str_replace("COPY","",$valor);
	$valor = str_replace("DELETE","",$valor);
	$valor = str_replace("DROP","",$valor);
	$valor = str_replace("DUMP","",$valor);
	$valor = str_replace(" OR ","",$valor);
	$valor = str_replace("%","",$valor);
	$valor = str_replace("LIKE","",$valor);
	$valor = str_replace("--","",$valor);
	$valor = str_replace("^","",$valor);
	$valor = str_replace("[","",$valor);
	$valor = str_replace("]","",$valor);
	$valor = str_replace("\\","",$valor);
	$valor = str_replace("!","",$valor);
	$valor = str_replace("¡","",$valor);
	$valor = str_replace("?","",$valor);
	$valor = str_replace("=","",$valor);
	$valor = str_replace("&","",$valor);
	$valor = str_replace("{","",$valor);
	$valor = str_replace("}","",$valor);
	$valor = str_replace("+","",$valor);
	$valor = str_replace("-","",$valor);
	$valor = str_replace("¿","",$valor);
	return $valor;
}

?>