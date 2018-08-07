<?php  
	class Pessoa{
		public $sexo;
		public $peso;
		public $altura;

		function __construct($sexo,$peso,$altura){
			$this->sexo = $sexo;
			$this->peso = $peso;
			$this->altura = $altura;
		}
	}
?>