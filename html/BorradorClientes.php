<!DOCTYPE html>
<html>
<head>
	<title>borro clientes</title>
	<style >
		

				table th,table td {
		            border: 1px solid black;
    background-color: beige;
    font-family: verdana;
    width: 500px;
    padding-left: 13px;
    height: 60px;
    margin-top: 0px;
    margin-left: 216px;
    display: flex;
    align-content: center;
    align-items: center;
		}



a.botones{

	margin-top: 17px;
				        margin-top: 1px;
					    align-content: center;
					    margin-left: 149px;
					    text-align: center;
					    height: 20px;
					    width: 180px;
					    border-style: solid;
					    border-color: navy;
					    background-color: tan;
					    border-radius: 5px;
					    text-decoration: none;


}




		div.Fondo{
			       height: 490px;
    width: 70%;
    align-content: center;
    background-color: lightblue;
    margin: 10px;
    margin-top: 44px;
    margin-left: 10%;
    margin-right: 8%;
    align-content: center;
    align-items: center;
			    
		
						    
			}


h1{
	padding-top: 63px;
    padding-left: 300px;
}
















	</style>
</head>
<body>

<div class="Fondo" >

<h1>Lista de Clientes a Eliminar : </h1>	
<table>
	<tbody>

	<?php foreach($this->clientes as $c) { ?>
		<td>
				<p><?= $c['nombre'] ?></p>
				<a class="botones" id="botones" href="eraseClient.php?cuil=<?= $c['cuil_cuit'] ?>">ELIMINAR</a> </td>
				<?php } ?>

	</tbody>			
				
</table>

</div>





<script  src="../jquery.js" ></script>
<script type="text/javascript">
	




	$("#botones").click(function(){
		 var resp = confirm("confirma?");
		 if(!resp) return false;
	 } );




</script>




</body>
</html>