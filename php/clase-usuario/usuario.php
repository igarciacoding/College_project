<?php
ini_set("session.use_cookies", 3);
ini_set("session.use_only_cookies", 3);
session_start();
session_id($_SESSION["idsession"]);
if (!isset($_SESSION["idsession"])){
header("Location: login.php");
}
 ?>