<?
if (isset($_COOKIE["user"])) {
    echo $_COOKIE["user"];
} else {
    setcookie("user", "María Moreno Muñoz", time()+3600);
}



?>