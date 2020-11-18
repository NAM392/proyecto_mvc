<?php 

require '../fw/fw.php';
require '../views/agregarClienteNuevo.php';
require '../models/agregarCliente.php';


/*COMPRUEBO TODOS LOS DATOS DE ENTRADA*/
$nombre=$_POST['nombre'];
$dni=$_POST['dni'];
$cuil_cuit=$_POST['cuil'];
$domicilio=$_POST['domicilio'];
$mail=$_POST['mail'];
$celular=$_POST['celular'];



$AG=new agregarCliente();
$resultado = $AG->agregar($cuil_cuit,$nombre,$dni,$domicilio,$mail,$celular);
$vista = new agregarClienteNuevo();
$vista->resultado=$resultado;
$vista->render();





	






































 ?>