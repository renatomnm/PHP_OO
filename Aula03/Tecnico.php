<?php  
	
	class Tecnico extends Pessoa{
		public $valorHoraExtra;
		public $horasExtras;

		function __construct($salarioBase,$horasExtras,$valorHoraExtra){
			$this->salarioBase = $salarioBase;
			$this->horasExtras = $horasExtras;
			$this->valorHoraExtra = $valorHoraExtra;
		}

		public function calculaSalario(){
			return $this->salarioBase + ($this->valorHoraExtra * $this->horasExtras);
		}
	}
?>