<?php 

require '../fw/fw.php';
require '../models/agregarCliente.php';
require '../views/ListadoClientes.php';
require '../models/ListaCliente.php';
require '../models/Sanitizacion.php';


/*COMPRUEBO TODOS LOS DATOS DE ENTRADA*/
$sani = new Sanitizacion();

$_nombre=$_POST['nombre'];
$_cuil_cuit=$_POST['cuil'];
$_domicilio=$_POST['domicilio'];
$_mail = $_POST['mail'];
$_dni=$_POST['dni'];
$_celular=$_POST['celular'];

$nombre = $sani->Sani_string($_nombre);
$cuil_cuit = $sani->Sani_cuil($_cuil_cuit);
$domicilio = $sani->Sani_string($_domicilio);
$mail = $sani->Sani_string($_mail);
$celular = $sani->Sani_number($_celular);
$dni = $sani->Sani_dni($_dni);




$AG = new agregarCliente();
$LC = new ListaCliente();
$resultado = $AG->agregar($cuil_cuit,$nombre,$dni,$domicilio,$mail,$celular);

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