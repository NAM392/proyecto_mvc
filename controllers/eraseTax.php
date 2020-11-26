<?php 
require '../fw/fw.php';
require '../models/ClienteInscripto.php';
require '../views/ListadoClientes.php';


$cuil = $_GET['cuil'];
$id_impuesto = $_GET['id_impuesto'];

$elimino = new ClienteInscripto ();
var_dump($cuil);

/* probar throw catch */
$resultado = $elimino->Erase_Impuesto($cuil,$id_impuesto);


header('Location: ListadoClientes.php');




 ?>