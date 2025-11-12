<?php
require_once(__DIR__."/models/investigador.php");
include_once(__DIR__."/views/header.php");
$app = new Investigador();
$investigadores = $app -> read();
require_once(__DIR__.'/views/investigador/index.php');
include_once(__DIR__.'/views/footer.php');
?>