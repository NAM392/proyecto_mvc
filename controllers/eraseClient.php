<?php 
require '../fw/fw.php';
require '../models/eliminoCliente.php';
require '../models/ListaCliente.php';
require '../views/ListadoClientes.php';
require '../models/Sanitizacion.php';


$sani = new Sanitizacion();
$_cuil = $_GET['cuil'];
$cuil = $sani->Sani_cuil($_cuil);


$elimino = new eliminoCliente ();

/* probar throw catch */
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