<?php
include ("comprovar_usuari.php");
usuari();
?>
<!DOCTYPE html>
<html>
<head>
    <title></title>
</head>
<body>
<h1>Benvingut <?php echo $_SESSION['user']?></h1>
<form action="resultatcollatz.php" method="post">
    <label>Digues un numero</label>
    <input type="number" name="numerocollatz"><br>
    <input type="submit" onclick="<a href='resultatcollatz.php'></a>">
</form>
<a href="menu.php">Menu</a>
</body>
</html>
