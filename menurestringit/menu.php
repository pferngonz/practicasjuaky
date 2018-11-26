<?php
include ("comprovar_usuari.php");
usuari();
?>
<!DOCTYPE <!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
</head>
<body>
    <h1>Benvingut <?php echo $_SESSION['user']?></h1>
    <a href="comprovar_divisors.php">Comprovar divisors</a><br>
    <a href="collatz.php">Conjetura Collatz</a><br>
    <a href="formulari_login.php">Tornar al login</a>
</body>
</html>
