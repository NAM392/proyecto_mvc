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

	public function MisInscripciones ($cuil){
		$this->db->query("SELECT id_impuesto FROM clienteinscripto  
						  WHERE cuil_cuit = $cuil ");
		return $this->db->fetchAll();

	}

	public function AgregoNuevoImpuesto ($cuil_cuit,$id_impuesto){
		if(!$this->db->query("INSERT INTO clienteinscripto (cuil_cuit,id_impuesto,estado,fecha_realiz)
							  VALUES ($cuil_cuit,$id_impuesto,'no',0) ")){return 1;}

		else {return 0;}; //error porque algo salio mal
				
	}	




	public function Erase_Impuesto ($cuil_cuit,$id_impuesto){
		if(!$this->db->query("DELETE FROM ClienteInscripto WHERE cuil_cuit = $cuil_cuit
									AND id_impuesto = $id_impuesto ")){return 1;}

		else {return 0;} //error porque algo salio mal
				
	}	
























}