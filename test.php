<?php
require_once('models/institucion.php');
$app = new Institucion;
//Prueba de delete
//$filas = $app-> delete(4);

//Prueba de create
$data['institucion']="Institucion de prueba";
$data['logotipo']="logotipo_prueba.png";
$filas = $app->create($data);
print_r($filas);
?>