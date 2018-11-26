<?php
if (isset($_COOKIE["cookiep1"])){
    setcookie("cookiep1",101);
}
else {
    setcookie("cookiep1",100);
}
header ("Location:p2.php");
?>

