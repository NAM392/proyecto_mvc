<?php 
session_start();
if(!isset($_SESSION['ingrese'])){
	header('location: ing.php');
	exit();
}



	require '../fw/fw.php';
	require '../models/ListaCliente.php';
	require '../views/ListadoClientes.php';




	$LC = new ListaCliente();
	$clientes = $LC->getTodos();
	$vista = new ListadoClientes();
	$vista->clientes = $clientes;
	$vista->render();









	 ?>