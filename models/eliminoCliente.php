<?php 


class eliminoCliente extends Model {

	function Erase ($cuil_cuit){
		if(!$this->db->query("DELETE FROM listacliente WHERE cuil_cuit = $cuil_cuit")){return 1;}

		else {return 0;} //error porque algo salio mal
				
	}	






}



 ?>