<?php
session_start();
include_once("usuaris.php");
$usuari = $_POST['usuari'];
$passw = $_POST['passw'];
$condicio = isset ($_POST['usuari']) && isset ($_POST['passw']) && isset ($usuarios[$usuari]) && $usuarios[$usuari] == $passw;
if (!$condicio){
    setcookie("error", "L'usuari o contrasenya introduit es invalid");
    header ("Location:formulari_login.php");
}
else{
    $_SESSION['user'] = $usuari;
    header ("Location:menu.php");
}
?>