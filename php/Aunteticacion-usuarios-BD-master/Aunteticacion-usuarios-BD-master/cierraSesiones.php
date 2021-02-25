<?php
session_start();
unset($_SESSION["perfil"]);
session_destroy();

header("Location: index.php");


?>