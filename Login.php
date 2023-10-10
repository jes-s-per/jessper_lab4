<?php

include '$_POST';

$username = $_POST['username'];
$password = $_POST['password'];

header('Location: home.php');

require_once 'db_connect.php';

$conn = db_connect();


?>
