<?php
//SECURE
session_start();
$a = $_SESSION['login'];
//if(isset($_POST['logout'])){
//    header('Location: logout.php');
//}
if(isset($_SESSION['login'])): ?>
    <!DOCTYPE html>
    <html>
    <head>
        <meta charset="UTF-8">
        <title>a</title>
    </head>
    <body>
    <p>Добрый день, <?php echo $a; ?></p>
    <form action="secure.php" method="post">
<!--        <input type="submit" value="logout" name="logout">-->
    </form>
    <a href="logout.php">Выйти.</a>
    </body>
    </html>
<?php else:
    header('Location: login.php');
endif; ?>