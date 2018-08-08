<?php

	class Comercial extends Pessoa{
		public $contratosFechados;	
		public $percentualContratos;

		function __construct($salarioBase,$contratosFechados){
			$this->salarioBase = $salarioBase;
			$this->contratosFechados = $contratosFechados;
			$this->percentualContratos = 0.15;
		}

		public function calculaSalario(){
			return $this->salarioBase + ($this->contratosFechados * $this->percentualContratos);
		}

	}

?>