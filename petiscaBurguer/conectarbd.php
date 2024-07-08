<?php
/*
define(HOST,"localhost");
define(USER,"root");
define(PASS,"");
define(BASE,"db_petiscaburguer");
 */
$servidor = "localhost";
$dbusuario = "root";
$dbsenha = "senac";
$dbname = "db_petiscaburguer";

$conn = mysqli_connect($servidor, $dbusuario, $dbsenha, $dbname);
if (!$conn) {
    die("Conexão falhou: ". mysqli_connect_error());
}