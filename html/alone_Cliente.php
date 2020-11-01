<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<h1></h1>
<?php 
	
	foreach ($this->un_cliente as $c) {
		
	  	echo "<h2>". $c['nombre'] . "</h2>";
		echo "<br><p>  CUIL : " . $c['cuil_cuit']   . "</p>";
		$cuil=$c['cuil_cuit'];
	  	echo "<br><p>  DOMICILIO : " . $c['domicilio']   . "</p>";
		echo "<br><p> MAIL : " . $c['mail']   . "</p>";
		echo "<br><p> CELULAR: " . $c['celular']   . "</p>";
		echo "<br><p> DEBE : $" . $c['honorarios']  . "</p>";
	}
?>

<br>
	
	<?php

		foreach ($this->mis_impuestos as $key => $value) {
			echo "<h3>" .  $key. "  estado = " . $value   ?> <a href="../modifico_estado.php/?cuil='<?= $cuil ?>'&nombre= '<?= $key ?>'            ">HECHO</a></h3><br>


	<?php } 
			



	



	/*  foreach ($this->mis_impuestos as $i) {
		echo "<h3>" .  $i['nombre_impuesto'] . "</h3>" . "<br>";
	}


	 */


	?>
	
   



</body>
</html>