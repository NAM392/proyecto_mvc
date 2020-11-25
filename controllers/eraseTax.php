<?php 
require '../fw/fw.php';
require '../models/ClienteInscripto.php';
require '../views/ListadoClientes.php';
require '../models/Sanitizacion.php';


$sani = new Sanitizacion();
$_cuil = $_GET['cuil'];
$_id_impuesto = $_GET['id_impuesto'];
$cuil = $sani->Sani_cuil($_cuil);
$id_impuesto = $sani->Sani_idimpuesto($_id_impuesto);

$elimino = new ClienteInscripto ();

/* probar throw catch */
$resultado = $elimino->Erase_Impuesto($cuil,$id_impuesto);


header('Location:../ListadoClientes.php');




 ?>