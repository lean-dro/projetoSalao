<?php
session_start();

if (($_SESSION['user'] != 'adm')||($_SESSION['cred'] != '123')) {
   header('location: ../index.php');
}
?>