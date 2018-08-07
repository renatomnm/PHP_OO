<?php 

	class CalculaPeso
	{
		public $individuo;

		function __construct($ind) {
			$this->individuo = $ind;
		}

		public function IMC() {
			return $this->individuo->peso / pow(2,$this->individuo->altura);
		}

		public function veredito(){
			$imc = $this->IMC();
			if($this->individuo->sexo === 'M'){
			      if($imc < 20){
			        return 'Abaixo do peso';
			      } else if($imc >= 20 && $imc < 25) {
			        return 'Peso ideal';
			      } else {
			        return 'Acima do peso';
			      }					
			} else if ($this->individuo->sexo === 'F'){
			      if($imc < 19){
			        return 'Abaixo do peso';
			      } else if($imc >= 19 && $imc < 24) {
			        return 'Peso ideal';
			      } else {
			        return 'Acima do peso';
			      }							
			}
		}
	}

?>