<?php
include ("comprovar_usuari.php");
usuari();
$numero=$_POST['numerocollatz'];
$arraycoll = array();
while($numero!=1){
    if($numero%2==0){
        $numero=$numero/2;
    }
    else{
        $numero=($numero*3)+1;
    }
    array_push($arraycoll, $numero);
}
?>
<!DOCTYPE <!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
</head>
<body>
    <h1>Benvingut <?php echo $_SESSION['user'] ;?> </h1>
    <p> <?php foreach ( $arraycoll as $value){echo "$value \n" ;}?></p><br>
    <a href="menu.php">Menu</a><br>
    <a href="collatz.php">Tornar a provar</a>
</body>
</html>