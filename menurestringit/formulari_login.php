<?php
session_start();
if (isset($_COOKIE['error'])){
    echo $_COOKIE['error'];
    unset($_COOKIE['error']);
}
?>
<!DOCTYPE <!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
</head>
<body>
    <h1>Menu Restringit</h1>
    <form action="processar_login.php" method="post" name="formulari">
        <label>Usuari</label>
        <input type="text" value="introdueix el usuari" name="usuari"><br>
        <label>Password</label>
        <input type="text" value="" name="passw"><br>
        <input type="submit" onclick="<a href='procesar_login.php'></a>">
    </form>
</body>
</html>
