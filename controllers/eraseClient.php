<?php 
session_start();
if(!isset($_SESSION['ingrese'])){
	header('location: ing.php');
	exit();
}

require '../fw/fw.php';
require '../models/ListaCliente.php';
require '../views/ListadoClientes.php';




$cuil = $_GET['cuil'];


$elimino = new ListaCliente ();

/* probar throw catch */
$resultado = $elimino->Erase($cuil);


header('Location:Lista-Clientes');


/*
$LC = new ListaCliente();
$clientes = $LC->getTodos();
$vista = new ListadoClientes();
$vista->clientes = $clientes;
$vista->resultado = $resultado;
$vista->render();


*/







 ?>