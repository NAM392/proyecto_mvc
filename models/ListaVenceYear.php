<?php

//models

class ListaVenceYear extends Model {
	
	private function Vali_idimpuesto($_idimpuesto) {
		//esta vacia
		if(!isset($_idimpuesto)) throw new ValidationException('error set ');
		//es un numero
		if(!ctype_digit($_idimpuesto)) throw new ValidationException('error numeros ');
		//tiene menos de 50 digitos , mas de 1 digito
		if(!$_idimpuesto >= 1)throw new ValidationException('es un 0 ');
		//escapo comillas
		$sani_imp = $this->db->escape($_idimpuesto);

		return $sani_imp;
	}
	private function Vali_num($num) {
		//esta vacia
		if(!isset($num )) throw new ValidationException('error set ');
		//es un numero
		if(!ctype_digit($num)) throw new ValidationException('error numeros ');
		//tamaño minimo y maximo
		if(!$num >= 1)throw new ValidationException('es un 0 ');
		
		return $num;
	}
	
	public function getTodos() {
		$this->db->query("SELECT * FROM listavenceyear");
		return $this->db->fetchAll();
	}

	public function getMiFecha($_id,$_ultimo) {
		$id_impuesto = $this->Vali_idimpuesto($_id);
		$ultimo = $this->Vali_num($_ultimo);
		
		$this->db->query("SELECT fecha FROM listavenceyear WHERE id_impuesto = $id_impuesto AND ultimo_num_cui  = $ultimo ");
		return $this->db->fetch();
	}

	public function getMesVence($_id,$_ultimo) {
		$id_impuesto = $this->Vali_idimpuesto($_id);
		$ultimo = $this->Vali_num($_ultimo);
		$this->db->query("SELECT MONTH(fecha) FROM listavenceyear WHERE id_impuesto = $id_impuesto AND ultimo_num_cui  = $ultimo ");
		return $this->db->fetch();
	}

	public function getAnioVence($_id,$_ultimo) {
		$id_impuesto = $this->Vali_idimpuesto($_id);
		$ultimo = $this->Vali_num($_ultimo);
		$this->db->query("SELECT YEAR(fecha) FROM listavenceyear WHERE id_impuesto = $id_impuesto AND ultimo_num_cui  = $ultimo ");
		return $this->db->fetch();
	}


}