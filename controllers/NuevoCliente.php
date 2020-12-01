<?php 
session_start();
if(!isset($_SESSION['ingrese'])){
	header('location: ing.php');
	exit();
}


require '../fw/fw.php';
require '../views/NuevoCliente.php';



$vista = new NuevoCliente();
$vista->render();

	






































 ?>