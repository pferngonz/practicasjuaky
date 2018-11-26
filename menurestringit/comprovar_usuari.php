<?php
session_start();
function usuari(){
include("usuaris.php");
$comprovacio = isset ($_SESSION['user']) && array_key_exists($_SESSION['user'], $usuarios);
if (!comprovacio){
    header ("Location:formulari_login.php");
}
}
?>