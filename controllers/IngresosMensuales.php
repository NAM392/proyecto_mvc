<?php 

session_start();
if(!isset($_SESSION['ingrese'])){
	header('location: ing.php');
	exit();
}

require '../fw/fw.php';
require '../views/InicioMensual.php';

$vista = new InicioMensual();
$vista->nombre_usuario = $_SESSION['usuario'];
$vista->render();


















 ?>