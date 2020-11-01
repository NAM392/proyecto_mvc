<?php

//models

class ClienteInscripto extends Model {
	
	public function getTodos() {
		$this->db->query("SELECT * FROM clienteinscripto");
		return $this->db->fetchAll();
	}

	public function getImpuestoInscripto($cuil) {
		$this->db->query("SELECT * FROM clienteinscripto  
						  WHERE cuil_cuit = $cuil ");
		return $this->db->fetchAll();
	}


	public function ModificoEstadoOK($ID,$CUIL){
		$si = "si";
		$this->db->query("UPDATE clienteinscripto  
							SET estado = $si
							WHERE cuil_cuit = $CUIL
							AND id_impuesto = $ID
							
								   ");
		return $this->db->fetch();

	}

}