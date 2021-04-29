<?php
session_start();
unset($_SESSION["username"]);
unset($_SESSION["password"]);
unset($_SESSION["id"]);

header("Location:../admin/index.php");
?>