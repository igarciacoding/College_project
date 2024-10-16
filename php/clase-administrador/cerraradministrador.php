<?php
include("administrador.php");
session_destroy();
header("Location: ../../administrador/login.php");
?>