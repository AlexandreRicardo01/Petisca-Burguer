<?php
session_start();
unset($_SESSION['login']);
unset($_SESSION['senha']);
unset($_SESSION['funcao_func']);
header("Location: login/formLogin.php");
?>

