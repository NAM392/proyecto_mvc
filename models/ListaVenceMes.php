<?php

//models

class ListaVenceMes extends Model {
	
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
		return $sani_imp;

	}
	private function Vali_char($char) {
		//esta vacia
		if(!isset($char )) throw new ValidationException('error set ');
		//es un string
		//tamaño minimo y maximo
		$ch = strlen($char);
		if(!$ch == 1) throw new ValidationException('error set ');
		//escapar comodines 
		$_char = $this->db->escapeWildcards($char);
		//escapo comodines
		$sani_char = $this->db->escape($_char);
		return $sani_char;

	}
	
	public function getTodos() {
		$this->db->query("SELECT * FROM listavencemes");
		return $this->db->fetchAll();
	}

	public function getMiFecha($_id,$_ultimo) {
		$id_impuesto = $this->Vali_idimpuesto($_id);
		$ultimo = $this->Vali_char($_ultimo);
		$this->db->query("SELECT fecha FROM listavencemes WHERE id_impuesto = $id_impuesto AND ultimo_num_cui  = $ultimo ");
		return $this->db->fetch();
	}

	public function getMesVence($_id,$_ultimo) {
		$id_impuesto = $this->Vali_idimpuesto($_id);
		$ultimo = $this->Vali_char($_ultimo);
		$this->db->query("SELECT MONTH(fecha) FROM listavencemes WHERE id_impuesto = $id_impuesto AND ultimo_num_cui  = $ultimo ");
		return $this->db->fetch();
	}
	public function getAnioVence($_id,$_ultimo) {
		$id_impuesto = $this->Vali_idimpuesto($_id);
		$ultimo = $this->Vali_char($_ultimo);
		$this->db->query("SELECT YEAR(fecha) FROM listavencemes WHERE id_impuesto = $id_impuesto AND ultimo_num_cui  = $ultimo ");
		return $this->db->fetch();
	}










}