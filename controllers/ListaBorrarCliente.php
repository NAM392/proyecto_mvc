<?php 

require '../fw/fw.php';
require '../views/BorradorClientes.php';
require '../models/ListaCliente.php';


$LC = new ListaCliente();
$clientes = $LC->getTodos();
$BC = new BorradorClientes();
$BC->clientes = $clientes;
$BC->render();

































 ?>