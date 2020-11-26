<?php

//models

class ClienteInscripto extends Model {

	private function Vali_cuil($_cuil) {
		//esta vacia
		if(!isset($_cuil )) throw new ValidationException('error set ');
		//es numero
		
		if(!ctype_digit($_cuil)) throw new ValidationException('error numeric ');
		//tiene 12 digitos
		//if(substr($_cuil, 11))throw new ValidationException('error cantidad numeros ');
		//escapo comillas
		$sani_cuil = $this->db->escape($_cuil);
		return $_cuil;

	}

	private function Vali_idimpuesto($_idimpuesto) {
		/*reveer sanitizacion de esto*/
		//esta vacia
		if(!isset($_idimpuesto)) throw new ValidationException('error set ');
		//es un numero
		if(!ctype_digit($_idimpuesto)) throw new ValidationException('error numeros ');
		//tiene menos de 50 digitos , mas de 1 digito
		if(!$_idimpuesto >= 1)throw new ValidationException('es un 0 ');
		//escapo comillas
		$sani_imp = $this->db->escape($_idimpuesto);
		return $_idimpuesto;

	}

	
	public function getTodos() {
		$this->db->query("SELECT * FROM clienteinscripto");
		return $this->db->fetchAll();
	}

	public function getImpuestoInscripto($_cuil) {
		$cuil = $this->Vali_cuil($_cuil);
		$this->db->query("SELECT * FROM clienteinscripto  
						  WHERE cuil_cuit = $_cuil ");
		return $this->db->fetchAll();
	}


	public function ModificoEstadoOK($_id,$_cuil){
		$CUIL = Vali_cuil($_cuil);
		$ID = Vali_idimpuesto($_id);
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

	public function MisInscripciones ($_cuil){
		$cuil = $this->Vali_cuil($_cuil);
		$this->db->query("SELECT id_impuesto FROM clienteinscripto  
						  WHERE cuil_cuit = $cuil ");
		return $this->db->fetchAll();

	}

	public function AgregoNuevoImpuesto ($_cuil,$_id){
		$cuil_cuit =  $this->Vali_cuil($_cuil);
		$id_impuesto =  $this->Vali_idimpuesto($_id);
		if(!$this->db->query("INSERT INTO clienteinscripto (cuil_cuit,id_impuesto,estado,fecha_realiz)
							  VALUES ($cuil_cuit,$id_impuesto,'no',0) ")){return 1;}

		else {return 0;}; //error porque algo salio mal
				
	}	




	public function Erase_Impuesto ($_cuil,$_id){
		$cuil_cuit =  $this->Vali_cuil($_cuil);
		$id_impuesto =  $this->Vali_idimpuesto($_id);
		if(!$this->db->query("DELETE FROM ClienteInscripto WHERE cuil_cuit = $cuil_cuit
									AND id_impuesto = $id_impuesto ")){return 1;}

		else {return 0;} //error porque algo salio mal
				
	}	
























}