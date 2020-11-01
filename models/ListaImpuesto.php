<?php

//models

class ListaImpuesto extends Model {
	
	public function getTodos() {
		$this->db->query("SELECT * FROM listaimpuesto");
		return $this->db->fetchAll();
	}

		public function getNombreImpuestoconID($ID) {
		$this->db->query("SELECT nombre_impuesto FROM listaimpuesto 
						  WHERE id_impuesto = $ID ");
		return $this->db->fetch();
	}
	
}


