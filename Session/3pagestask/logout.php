<?php
//LOGOUT
session_start();
session_destroy();
$a = $_SESSION['login'];
header('Location: login.php');