<?php
if (isset($_SERVER["REQUEST_METHOD"])){
    print $_POST['mytext'];
    if ($_SERVER["REQUEST_METHOD"] == "POST"){
        $mytext=$_POST['mytext'];
        header ("Location:process_dades_finals.php?mytext=$mytext");
    }
    else{
        header('Location:patronprg.php');
    }
}
?>