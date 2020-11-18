<?php 
require '../fw/fw.php';
require '../models/eliminoCliente.php';
require '../models/ListaCliente.php';
require '../views/ListadoClientes.php';



$cuil = $_GET['cuil'];

$elimino = new eliminoCliente ();
$resultado = $elimino->Erase($cuil);


header('Location:../ListadoClientes.php');


/*
$LC = new ListaCliente();
$clientes = $LC->getTodos();
$vista = new ListadoClientes();
$vista->clientes = $clientes;
$vista->resultado = $resultado;
$vista->render();


*/







 ?>