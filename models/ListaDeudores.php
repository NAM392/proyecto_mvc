<?php

//models

class ListaDeudores extends Model {
	
	public function getTodos() {
		$this->db->query("SELECT * FROM listadeudores");
		return $this->db->fetchAll();
	}


}