<?php 

if(!isset($_SESSION['ingrese'])){
	header('location: ing.php');
	exit();
}

?>
<!DOCTYPE html>
<html>
<head>
	<title>LISTA DE CLIENTES</title>
	<meta http-equiv="content-type" ; content="text/html" ; charset="utf-8">

	<style>

		html , body {
				height: 100%;
				width: 100%;
				overflow:hidden;
				background-image: url(../css/clientela.jpg);
			}

		p{
			padding-left: 583px;
		    padding-top: 6px;
		    font-family: fixed-width fontsAndale Mono, monospace;
		    color: brown;
		    text-shadow: 4px 4px 4px white;
		}


		table th,table td {
		        border: 1px solid black;
			    background-color: lightblue;
			    font-family: verdana;
			    width: 217px;
			    padding-left: 13px;
			    height: 30px;
			    /* margin-top: 3px; */
			    margin-left: 216px;
			    display: flex;
		}

		a {
			text-decoration: none;
			color: black;


		}

		div.con_clientes {

				width: 45%;
			    height: 381px;
			    margin-left: 460px;
			    border-style: solid;
			    display: flex;
			    background-color: olive;
			}

		div.agregar{
				    margin-top: 17px;
				    align-content: center;
				    margin-left: 394px;
				    text-align: center;
				    height: 34px;
				    width: 164px;
				    border-style: solid;
				    background-color: #07C5A9;
				    border-radius: 20px;

					}
		div.borrar{
				    margin-top: -32px;
				    align-content: center;
				    margin-left: 1094px;
				    text-align: center;
				    height: 26px;
				    width: 164px;
				    border-style: solid;
				    background-color: #07C5A9;
				    border-radius: 20px;
					}
		div.volver{
				    margin-top: -32px;
				    align-content: center;
				    margin-left: 718px;
				    text-align: center;
				    height: 26px;
				    width: 164px;
				    border-style: solid;
				    background-color: #07C5A9;
				    border-radius: 20px;
					}

		div.titulo{
			        background-color: transparent;
				    width: 983px;
				    height: 62px;
				    margin-left: -174px;
				    padding-left: 300px;
				    font-size: 28px;
				}

	</style>
</head>
<div class="titulo" ><p>LISTA DE CLIENTES</p></div>

<div class="con_clientes">
<body>

	<?php if($this->resultado == NULL OR $this->resultado == 1 ) { ?> 

			

	<table>

		<tbody>
				
				<?php foreach($this->clientes as $c) { ?>
				<tr>	
				<td>	<a href="mi-cliente-<?= $c['cuil_cuit'] ?>"><?= $c['nombre'] ?></a></td>
				</tr>

					<br>
				<?php } ?>
				

		</tbody>		
	</table>

</div>

				



			<div  class="agregar">	<a href="nuevo-cliente">AGREGAR NUEVO CLIENTE</a> </div>
				
			<div class="borrar" >	<a href="borro-cliente">BORRAR CLIENTE</a> </div>
				
			<div class="volver" >	<a href="Asistente-Contable">VOLVER</a> </div>
				
				


<?php }

	elseif ($this->resultado == 3) {  //existe un cliente con ese cuit?>

		<h2>YA ESXISTE UN CLIENTE CON ESE CUIL/CUIT</h2>
		<a href="ListadoClientes.php">VOLVER</a>



<?php } ?>








	
</body>
</html>

<?php



//<a href="Honorarios.php">Honorarios</a>


?>


















