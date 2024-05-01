<?php
header("Content-Type: text/html;charset=utf-8");
$Usuario = "root";
$password="";
$servidor = "localhost";
$basededatos ="ejemplo 1";

$con = mysqli_connect($servidor, $Usuario, $password) or die("No se ha podido conectar al Servidor");
mysqli_query($con, "SET SESSION colletion_connection ='utf8_unicode_ci'");
$db = mysqli_select_db($con, $basededatos) or die("Upps! Error en conectar a la Base de Datos");



?>