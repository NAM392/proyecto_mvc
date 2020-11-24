<?php 
require '../fw/fw.php';
require '../models/ClienteInscripto.php';
require '../views/ListadoClientes.php';



$id_impuesto = $_GET['id_impuesto'];
$cuil = $_GET['cuil'];
$elimino = new ClienteInscripto ();

/* probar throw catch */
$resultado = $elimino->Erase_Impuesto($cuil,$id_impuesto);


header('Location:../ListadoClientes.php');




 ?>