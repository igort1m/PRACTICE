<?php
//LOGIN
session_start();
if (isset($_POST['login']) && isset($_POST['pass'])){
    $a = $_POST['login'];
    $b = $_POST['pass'];
    if ($b == 123456){
        $_SESSION['login'] = $a;
        header('Location: secure.php');
    }
}
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>login</title>
</head>
<body>
<form method="post" action="login.php"><br>
    <label for="login">LOGIN</label><br>
    <input type="text" name="login" id="login"><br>
    <label for="pass">PASS</label><br>
    <input type="password" id="pass" name="pass">
    <input type="submit">
</form>
</body>
</html>
