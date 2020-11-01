<?php 

require '../fw/fw.php';
require '../models/ClienteInscripto.php';
require '../models/ListaImpuesto.php';
require '../models/ListaCliente.php';
require '../views/alone_Cliente.php';

$cuil =  $_GET['cuil'] ;
$nombre_imp = $_GET['nombre'];

?>

<script type="text/javascript">
		
var conf = confirm("Ya realizaste este trabajo ? ");	
if(conf == true){
	<?php 

	$imp = new ListaImpuesto();
	$ci = new ClienteInscripto();
	$LC = new ListaCliente();
	$mis_impuestos=[];

	$id_imp= $imp->getIDconNombre($nombre_imp);
	$id_del_impuesto= $id_imp['id_impuesto'];

	$ci->ModificoEstadoOK($id_del_impuesto, $cuil);

	$mis_inscripciones = $insc->getImpuestoInscripto($cuil);
	foreach ( $mis_inscripciones as $mis ) {
		$nombre_de_imp = $imp->getNombreImpuestoconID($mis['id_impuesto']);
		$mis_impuestos[$nombre_de_imp ['nombre_impuesto']] = $mis['estado'];
	}


	$un_cliente = $LC->getClienteConCuil($cuil);
	$vista = new alone_Cliente();
	$vista->un_cliente = $un_cliente;
	$vista->mis_impuestos = $mis_impuestos;

	?>

}
else {

	<?php 

	$imp = new ListaImpuesto();
	$ci = new ClienteInscripto();
	$LC = new ListaCliente();
	$mis_impuestos=[];

	$id_del_impuesto = $imp->getIDconNombre($nombre_imp);

	//$ci->ModificoEstadoOK($id_del_impuesto, $cuil);

	$mis_inscripciones = $insc->getImpuestoInscripto($cuil);
	foreach ( $mis_inscripciones as $mis ) {
		$nombre_de_imp = $imp->getNombreImpuestoconID($mis['id_impuesto']);
		$mis_impuestos[$nombre_de_imp ['nombre_impuesto']] = $mis['estado'];
	}


	$un_cliente = $LC->getClienteConCuil($cuil);
	$vista = new alone_Cliente();
	$vista->un_cliente = $un_cliente;
	$vista->mis_impuestos = $mis_impuestos;

	?>

}











	
</script>











