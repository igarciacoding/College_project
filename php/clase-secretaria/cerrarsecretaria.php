<?php
include("secretaria.php");
unset($_SESSION["nickse"]); 
unset($_SESSION["passse"]); 
session_destroy();
header("Location: ../../secretaria/login.php");
?>