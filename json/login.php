<?php
session_start();

$obj = new stdClass();
$obj -> success = false;
$obj -> message = 'username or password is incorrect';

//Identifiants de connexion
$username ="user";
$password ="123";
// php a rempli $_POST['username'] et $_POST['pwd']
if ($_POST['username'] == $username && $_POST['password'] == $password) {
    $obj -> success = true;
    $_SESSION['user'] = $username;
}
else {
    $obj -> success = false;
}

$obj -> success = isset($_SESSION['user']);
header('Cache-Control: no-cache, must-revalidate');
header('Expires: Mon, 26 Jul 1997 05:00:00 GMT');
header('Content-type: application/json');

echo json_encode($obj);