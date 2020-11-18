<!DOCTYPE html>
<html>
<head>
	<title>borro clientes</title>
</head>
<body>


	<?php foreach($this->clientes as $c) { ?>
				<p><?= $c['nombre'] ?></p>
				<a id="botones" href="eraseClient.php/?cuil='<?= $c['cuil_cuit'] ?>'">borrar</a>
					<br>
				<?php } ?>








<script  src="../jquery.js" ></script>
<script type="text/javascript">
	




	$("#botones").click(function(){
		 var resp = confirm("confirma?");
		 if(!resp) return false;
	 } );




</script>




</body>
</html>