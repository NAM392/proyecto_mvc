<?php

//models

class ListaImpuesto extends Model {
	


	private function Vali_string($palabra) {
		//esta vacia
		if(!isset($palabra )) throw new ValidationException('error set ');
		//es un string
		if(!is_string($palabra)) throw new ValidationException('error string ');
		//tamaño minimo y maximo
		$pb = strlen($palabra);
		if($pb > 50 || $pb < 1) throw new ValidationException('error longitud ');
		//escapar comodines 
		$_palabra = $this->db->escapeWildcards($palabra);
		//escapo comodines
		$sani_palabra = $this->db->escape($_palabra);

		return $sani_palabra;

	}
	private function Vali_idimpuesto($_idimpuesto) {
		//esta vacia
		if(!isset($_idimpuesto)) throw new ValidationException('error set ');
		//es un numero
		if(!ctype_digit($_idimpuesto)) throw new ValidationException('error numeros ');
		//tiene menos de 50 digitos , mas de 1 digito
		if(!$_idimpuesto >= 1)throw new ValidationException('es un 0 ');
		
		$sani_imp = $_idimpuesto;
		return $sani_imp;
	}	
	public function getTodos() {
		$this->db->query("SELECT * FROM listaimpuesto");
		return $this->db->fetchAll();
	}

	public function getNombreImpuestoconID($_id) {
		$ID = $this->Vali_idimpuesto($_id);
		$this->db->query("SELECT nombre_impuesto FROM listaimpuesto 
						  WHERE id_impuesto = $ID ");
		return $this->db->fetch();
		}
	
	public function getIDconNombre($_nombre){
		$nombre = $this->Vali_string($_nombre);	
			
		$this->db->query("SELECT id_impuesto FROM listaimpuesto 
						  WHERE nombre_impuesto = '$nombre'");
		return $this->db->fetch();
		
		}

	



}


