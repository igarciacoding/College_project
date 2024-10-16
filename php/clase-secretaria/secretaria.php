<?php
ini_set("session.use_cookies", 1);
ini_set("session.use_only_cookies", 1);
session_start();
session_id($_SESSION["idsession"]);
if (!isset($_SESSION["idsession"])){
header("Location: login.php");
}
?>