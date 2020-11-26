<?php 

require '../fw/fw.php';
require '../views/ListadoClientes.php';
require '../models/ListaCliente.php';

$nombre = $_POST['nombre'];
$cuil_cuit = $_POST['cuil'];
$domicilio = $_POST['domicilio'];
$mail = $_POST['mail'];
$celular = $_POST['celular'];
$dni = $_POST['dni'];


$LC = new ListaCliente();
$resultado = $LC->agregar($cuil_cuit,$nombre,$dni,$domicilio,$mail,$celular);

/*aca probar throw y catch*/

if($resultado == 1){header('Location:ListadoClientes.php');}
elseif ($resultado == 3) { die();echo "cliente ya existe" ;}
else{die();}


/*
$clientes = $LC->getTodos();

$vista = new ListadoClientes();
$vista->clientes = $clientes;
$vista->resultado=$resultado;
$vista->render();
*/






	






































 ?>