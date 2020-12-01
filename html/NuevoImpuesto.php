<!DOCTYPE html>
<html>
<head>
	<title>Nuevo Impuesto</title>
	<style >
		
		div.todo{
			    background-color: lightgreen;
    			padding: 75px;
    			margin-left: 430px;
    			margin-top: 150px;
    			height: 33%;
    			width: 33%;

		}
		div.fondo{
			align-content: center;
			align-items: center;
			margin: auto;
			background-color: cyan;
}
			html , body {
				height: 100%;
				width: 100%;
				overflow:hidden;
				background-color: beige;
			}
			h2{
				color: brown;
				font-family: verdana;
			}
			h3{
				color: red;
			}
						a.volver{
				    margin-top: 17px;
				    align-content: center;
				    margin-left: 173px;
				    text-align: center;
				    height: 44px;
				    width: 180px;
				    border-style: solid;
				    border-color: brown;

				    background-color: beige;
				    border-radius: 5px;
				    text-decoration: none;

}


	</style>
</head>
<body>
<div class="todo" >

<h2>Seleccione Impuesto que se le dara de alta al Cliente : <?= $this->cliente['nombre'] ?></h2>
<h3>N° de Cliente : <?=$this->cuil?></h3>


<div class="fondo" >
 <form method="POST" action="agrego-impuesto-<?=$this->cuil?>" > 
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

</div>

</div>
<a class="volver" href=" Lista-Clientes">VOLVER</a>
<script  src="../../jquery.js" ></script>
<script type="text/javascript">
	




	$("#agregar").click(function(){
		 var resp = confirm("confirma?");
		 if(!resp) return false;
	 } );




</script>




</body>
</html>