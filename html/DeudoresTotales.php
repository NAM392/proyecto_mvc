<!DOCTYPE html>
<html>
<head>
	<title>deudores</title>
		<style>

		html , body {
				height: 100%;
				width: 100%;
				overflow:hidden;
				
				background-repeat:no-repeat;
				background-position:center center;
				background-size:contain;
				background-color: beige;
			}

		p{
			padding-left: 583px;
		    padding-top: 6px;
		    font-family: fixed-width fontsAndale Mono, monospace;
		    color: brown;
		    text-shadow: 4px 4px 4px white;
		}

		div.con_clientes {

				width: 45%;
			    height: 381px;
			    margin-left: 460px;
			    border-style: solid;
			    display: flex;
			    background-color: #5F4CA2;
			}


		table th,table td {
		        border: 1px solid black;
			    background-color: lightblue;
			    font-family: verdana;
			    width: 400px;
			    padding-left: 13px;
			    height: 60px;
			    /* margin-top: 3px; */
			    margin-left: 180px;
			    display: flex;
		}

		a {
			text-decoration: none;
			color: black;


		}

		div.con_clientes {

				width: 45%;
			    height: 381px;
			    margin-left: 400px;
			    border-style: solid;
			    display: flex;
			    background-color: #5F4CA2;
			    padding-top: 70px;
			    overflow: auto;
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
h1{

	margin-left: 650px;
	color: brown;
	text-shadow: 4px 4px 4px white; 

}

	</style>

</head>
<body>
<h1>Lista de Deudores Totales</h1>

<div class="con_clientes" >
<table>
	<tbody>		
		<?php foreach ($this->todos as $t) { ?>
			<tr>
				<td>N°Cliente: <?= $t['cuil_cuit'] ?><br> Deuda :  $<?= $t['total']  ?> 
		
		<?php }  ?>


	

	</tbody>

</table>
</div>

<div class="volver" >	<a href="IngresosMensuales.php">VOLVER</a> </div>

</body>
</html>





