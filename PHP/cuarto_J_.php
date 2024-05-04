<?php

//INSERT INTO `4"j"` (`Id_Matricula`, `Nombre`, `Grupo y Grupo`, `Fecha`, 'Hora');

include_once '../Configuraciones/bd.php';
$conexionBD=BD::crearInstancia();

$id_nombre=isset($_POST['Id_Nombre'])?$_POST['Id_Nombre']:'';
$matricula=isset($_POST['Matricula'])?$_POST['Matricula']:'';
$fecha=isset($_POST['Fecha'])?$_POST['Fecha']:'';
$hora=isset($_POST['Hora'])?$_POST['Hora']:'';


$consulta=$conexionBD->prepare("SELECT * FROM 4j");
$consulta->execute();
$listaCuartoJ=$consulta->fetchAll();


?>