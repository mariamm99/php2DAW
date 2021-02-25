<?php
session_start();
unset($_SESSION["pila"]);
session_destroy();

header("Location: index.php");
?>