<?php

//models

class ListaDeudores extends Model {
	private function Vali_cuil($_cuil) {
		//esta vacia
		if(!isset($_cuil )) throw new ValidationException('error set ');
		//es numero
		if(!ctype_digit($_cuil)) throw new ValidationException('error numeric ');
		//tiene 11 digitos
		if(substr($_cuil, 11))throw new ValidationException('error cantidad numeros ');
		//escapo comillas
		$sani_cuil = $_cuil;

		return $sani_cuil;

	}
	private function Vali_num($num) {
		//esta vacia
		if(!isset($num )) throw new ValidationException('error set ');
		//es un numero
		if(!ctype_digit($num)) throw new ValidationException('error numeros ');
		
		$sani_num = $num;
		return $sani_num;
	}

	private function Vali_id($_id) {
		//esta vacia
		if(!isset($_id)) throw new ValidationException('error set ');
		//es un numero
		if(!ctype_digit($_id)) throw new ValidationException('error numeros ');
		//tiene menos de 50 digitos , mas de 1 digito
		if(!$_id >= 1)throw new ValidationException('es un 0 ');
		//escapo comillas
		$sani_id = $this->db->escape($_id);

		return $sani_id;

	}

	
	public function getTodos() {
		$this->db->query("SELECT * FROM listadeudores");
		return $this->db->fetchAll();
	}

	public function getUnDeudorMes($_cuil) {
		$cuil =  $this->Vali_cuil($_cuil);
		$hoy = getdate();	
		$mes = $hoy['mon'];
		$this->db->query("SELECT * FROM listadeudores WHERE cuil_cuit = $cuil AND MONTH(fecha_debe) = $mes ");
		return $this->db->fetch();
	}
	


	public function CambioDeuda($_id,$_monto){
		$monto = $this->Vali_num($_monto);
		$id = $this->Vali_id($_id);

		if(!$this->db->query("UPDATE  listadeudores SET monto_deuda = (monto_deuda - $monto) WHERE id_deudor = $_id ")){
			return 1;
		}
		else return 0;

	}

	public function DeudaTotalAcumulada(){
		$this->db->query("SELECT cuil_cuit,SUM(monto_deuda) AS total FROM listadeudores GROUP BY cuil_cuit");
		return $this->db->fetchAll();
	}
	




}



