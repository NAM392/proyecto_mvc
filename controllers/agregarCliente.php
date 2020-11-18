<?php 

require '../fw/fw.php';
require '../models/agregarCliente.php';
require '../views/ListadoClientes.php';
require '../models/ListaCliente.php';


/*COMPRUEBO TODOS LOS DATOS DE ENTRADA*/
$nombre=$_POST['nombre'];
$dni=$_POST['dni'];
$cuil_cuit=$_POST['cuil'];
$domicilio=$_POST['domicilio'];
$mail=$_POST['mail'];
$celular=$_POST['celular'];



$AG=new agregarCliente();
$LC = new ListaCliente();
$resultado = $AG->agregar($cuil_cuit,$nombre,$dni,$domicilio,$mail,$celular);
$clientes = $LC->getTodos();

$vista = new ListadoClientes();
$vista->clientes = $clientes;
$vista->resultado=$resultado;
$vista->render();







	






































 ?>