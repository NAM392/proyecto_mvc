<!DOCTYPE html>
<html>
<head>
	<title>Nuevo Impuesto</title>
</head>
<body>


<h2>Seleccione Impuesto que se le dara de alta al Cliente : <?= $this->cliente['nombre'] ?></h2>
<h3>N° de Cliente : <?=$this->cuil?></h3>



 <form method="POST" action="../otroImpuesto.php/?cuil=<?=$this->cuil?>" > 
	<label for="impuestos" >Seleccione Nuevo Impuesto: </label>

		<select name="impuestos"  id="impuestos">
			<?php  foreach ($this->no_inscripto AS $NI ){  ?>

				<option value="<?= $NI['id_impuesto']?>">
					<?=$NI['nombre_impuesto']?>
				</option>
							
			<?php } ?>
		</select>
	<input type="submit" id="agregar" value="AGREGAR">

</form>




<script  src="../../jquery.js" ></script>
<script type="text/javascript">
	




	$("#agregar").click(function(){
		 var resp = confirm("confirma?");
		 if(!resp) return false;
	 } );




</script>




</body>
</html>