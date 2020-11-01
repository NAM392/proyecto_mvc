<?php

//models

class ListaCliente extends Model {
	
	public function getTodos() {
		$this->db->query("SELECT * FROM listacliente");
		return $this->db->fetchAll();
	}

		public function getClienteConCuil($cuil) {
		$this->db->query("SELECT * FROM listacliente
							WHERE cuil_cuit = $cuil");
		return $this->db->fetchAll();
	}


}