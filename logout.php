<?php

error_reporting(E_ALL);
ini_set('display_errors', '1');

session_start();

unset($_SESSION['username']);
unset($_SESSION['id']);

session_destroy();

echo "you are logout";
?>
<a href="index.php"> home</a>