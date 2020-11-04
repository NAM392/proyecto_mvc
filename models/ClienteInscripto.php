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
		$si = "\"si\"";
		//preguntar si ya habia un si
		$estado = $this->db->query("SELECT estado FROM clienteinscripto 
						  WHERE cuil_cuit = $CUIL
							AND id_impuesto = $ID ");
		if($estado != "si"){
		$this->db->query("UPDATE clienteinscripto  
							SET estado = $si, fecha_realiz = NOW()
							WHERE cuil_cuit = $CUIL
							AND id_impuesto = $ID  ");
		}


	}

}