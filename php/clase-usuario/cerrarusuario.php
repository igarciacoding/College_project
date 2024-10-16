<?php
include("usuario.php");
session_destroy();
header("Location: ../../usuario/login.php");
?>