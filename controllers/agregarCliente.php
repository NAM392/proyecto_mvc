<?php 
session_start();
if(!isset($_SESSION['ingrese'])){
	header('location: ing.php');
	exit();
}


require '../fw/fw.php';
require '../views/ListadoClientes.php';
require '../models/ListaCliente.php';

$nombre = $_POST['nombre'];
$cuil_cuit = intval($_POST['cuil']);
$domicilio = $_POST['domicilio'];
$mail = $_POST['mail'];
$celular = intval($_POST['celular']);
$dni = intval($_POST['dni']);



$LC = new ListaCliente();
$resultado = $LC->agregar($cuil_cuit,$nombre,$dni,$domicilio,$mail,$celular);



if($resultado == 1){header('Location:Lista-Clientes');}
elseif ($resultado == 3) { die();echo "cliente ya existe" ;}
else{die();}


 ?>