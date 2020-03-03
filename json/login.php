<?php
session_start();

$obj = new stdClass();
$obj -> success = false;
$obj -> message = 'username or password is incorrect';

// php a rempli $_POST['username'] et $_POST['pwd']
$found = true; // on simule que le couple user pwd est correct
if ($found) {
    $obj->success = true;
    $_SESSION['user'] = 123;
}

header('Cache-Control: no-cache, must-revalidate');
header('Expires: Mon, 26 Jul 1997 05:00:00 GMT');
header('Content-type: application/json');

echo json_encode($obj);