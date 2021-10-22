<?php
session_start();

unset($_SESSION['user']);
unset($_SESSION['cred']);

session_destroy();

header('location: index.php')
?>