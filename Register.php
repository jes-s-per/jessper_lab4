<?php

include '$_POST';


$username = $_POST['username'];
$email = $_POST['email'];
$password = $_POST['password'];

header('Location: login.php');

require_once 'db_connect.php';

$conn = db_connect();

?>
