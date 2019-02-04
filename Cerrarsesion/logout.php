<?php
session_start();
unset($_SESSION['user']);
header('Location: '."\php\proyecto_1\Iniciodesesion\login.php");
?>