<?php
$numero=$_GET['number'];
while($numero!=1){
    if($numero%2==0){
        $numero=$numero/2;
    }
    else{
        $numero=($numero*3)+1;
    }
    echo "$numero\n";
}
?>