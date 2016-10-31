<?php
include 'form.php';
$db_data = array(
    'username' => 'jessie',
    'password' => 'magnets'
);
if ($_POST) {
    $username = isset($_POST['username']) ? $_POST['username'] : null;
    $password = isset($_POST['password']) ? $_POST['password'] : null;
} elseif ($_COOKIE) {
    $username = isset($_COOKIE['username']) ? $_COOKIE['username'] : null;
    $password = isset($_COOKIE['password']) ? $_COOKIE['password'] : null;
} else {
    die("Restricted area!");
}
 $status = true;
    foreach ($db_data as $k => $v) {
        $status = $status && ($$k === $v);
    }
if ($status) {
    if (isset($_POST['remember'])) {
        setcookie('username', $username, time() + 60*60*24*366);
        setcookie('password', $password, time() + 60*60*24*366);
    }
    echo 'Logged in!';
}