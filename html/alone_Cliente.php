<!DOCTYPE html>
<html>
<head>
	<title></title>
	<meta http-equiv="content-type" ; content="text/html" ; charset="utf-8">
	<style >
		
				html , body {
				height: 100%;
				width: 100%;
				overflow:auto;
				background-color: #C2EA62;
				/*background-image: url(../css/clientela.jpg);*/
			}
			table th.realiz,table td.realiz {
		        border: 1px solid black;
			    background-color: lightgreen;
			    font-family: verdana;
			    width: 680px;
			    padding-left: 63px;
			    height: 20px;
			    /* margin-top: 3px; */
			    margin-left: 477px;
			    display: flex;
		}
			table th,table td {
		        border: 1px solid black;
			    background-color: yellow;
			    font-family: verdana;
			    width: 680px;
			    padding-left: 63px;
			    height: 38px;
			    /* margin-top: 3px; */
			    margin-left: 477px;
			    display: flex;
		}

		p{
			    padding-left: 20px;
			    padding-top: 1px;
			    font-family: fixed-width fontsAndale Mono, monospace;
			    color: brown;
			    text-shadow: 4px 4px 4px white;
			    text-decoration: none;
}
		}	

		label{
			    padding-left: 466px;
			    padding-top: 6px;
			    font-family: fixed-width fontsAndale Mono, monospace;
			    color: black;
			   	font-family: "calibri", Garamond, 'Comic Sans';
		}	
		


		h1{
			font-family: verdana;
		    display: flex;
		    padding-left: 628px;
		    color: coral;

		}

		div.fondo{
			align-content: center;
			align-items: center;
			margin: auto;

		}

		div.cuil{
			display: flex;
    		padding-left: 700px;
    		  align-items: center;
    		  background-color: lavenderblush;
		}


			a.agregar{
				    margin-top: 17px;
				    align-content: center;
				    margin-left: 550px;
				    text-align: center;
				    height: 34px;
				    width: 164px;
				    border-style: solid;
				    background-color: #07C5A9;
				    border-radius: 20px;
				    text-decoration: none;

}

			a.quitar{
				    margin-top: 17px;
				    align-content: center;
				    margin-left: 300px;
				    text-align: center;
				    height: 34px;
				    width: 164px;
				    border-style: solid;
				    background-color: #07C5A9;
				    border-radius: 20px;
				    text-decoration: none;

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


a.botones{

	margin-top: 17px;
				        margin-top: 1px;
					    align-content: center;
					    margin-left: 183px;
					    text-align: center;
					    height: 20px;
					    width: 180px;
					    border-style: solid;
					    border-color: navy;
					    background-color: tan;
					    border-radius: 5px;
					    text-decoration: none;


}
div.impuestos{
	        /*overflow-y: auto;*/
		    height: 146px;
		    width: 60%;
		    margin-left: 15px;
		    align-items: center;
		    align-content: center;
		    padding-right: 241px;
			}



	</style>
</head>
<body>
<div class="fondo" >
	<h1><?= $this->un_cliente['nombre'] ?></h1>
<div  class="cuil" >
	<label for="cuil" > CUIL : </label>
	<p><?= $this->un_cliente['cuil_cuit'] ?></p>
</div>
<?= $cuil = $this->un_cliente['cuil_cuit'] ?>
<div  class="cuil" >
	<label for="domicilio" > DOMICILIO : </label>
	<p ><?= $this->un_cliente['domicilio'] ?></p>
</div>
<div  class="cuil" >
	<label for="mail" > MAIL : </label>
	<p><?= $this->un_cliente['mail'] ?></p>
</div>
<div  class="cuil" >
	<label for="mail" > CELULAR : </label>
	<p><?= $this->un_cliente['celular'] ?></p>
</div>
<div  class="cuil" >
	<label for="mail" > FECHA INICIO : </label>
		<?php 
	$originalDate = $this->un_cliente['fecha_inicio'];
	$newDate = date("d/m/Y", strtotime($originalDate)); ?>
	<p><?= $newDate  ?></p>
	
</div>


	<br>

<div class="impuestos" >
	<table>
		<tbody>
			
		<?php
			
			foreach ($this->mis_impuestos as $key => $value) {

				if($value == "no"){ ?>
				<tr>	
				<td> <?= $key ?> estado = <?=$value?>
					<a class="botones" href="../modifico_estado.php?cuil=<?= $cuil ?>&nombre=<?=$key?>">HECHO</a> </td>
				
		<?php  

					foreach ($this->mis_vencimientos as $codigo => $valor) {
						if($key == $codigo){ ?><td>VENCE : <?php 
							$originalDate = $valor;
							$newDate = date("d/m/Y", strtotime($originalDate)); ?><?=$newDate?> </td> </td>
						<?php }
					}
		        } ?>
		        </tr>
				<? else { ?>
					<tr>
					 <td class="realiz"> <?= $key ?> estado = REALIZADO </td> 
					 </tr>

			  <?php } 

		  ?>
		
	 </tbody>
</table>
</div>
	   
	   <a class="agregar" href=" agregoImpuesto.php?cuil=<?= $cuil ?>">AGREGAR IMPUESTO</a>
	    <a class="quitar" href=" QuitarImpuesto.php?cuil=<?= $cuil ?>">QUITAR IMPUESTO</a>


	<br><br><br><br>
	<a class="volver" href=" ListadoClientes.php">VOLVER</a>
</div>	

<script  src="../../jquery.js" ></script>
<script type="text/javascript">
	




	$(".botones").click(function(){
		 var resp = confirm("confirma?");
		 if(!resp) return false;
	 } );




</script>



	







</body>
</html>