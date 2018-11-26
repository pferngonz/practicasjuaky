<?php
    include ("comprovar_usuari.php");
    usuari();
    $numero = $_POST['numero'];
     $divisors = array();
    for ( $i=1; $i<=$numero; $i++ ) {
        if ($numero % $i == 0) {
            $divisors[]=$i;
        }
    }

    $es_primer = (count( $divisors ) == 2);
?>

<!DOCTYPE <!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
</head>
<body>
    <h1>Benvingut <?php echo $_SESSION['user']?></h1>
    <p> <?php 
    if ($es_primer) {
        echo "El número $numero és primer";
    }else{
        echo "El número $numero no és primer i els seus divisors són: ";
        $separador = "";
        foreach( $divisors as $d ) {
            echo "$separador $d";
            $separador = ",";
        }
    }
    ?></p>
    <a href="menu.php">Menu</a><br>
    <a href="comprovar_divisors.php">Tornar a provar</a>
</body>
</html>