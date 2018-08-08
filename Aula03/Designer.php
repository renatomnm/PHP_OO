<?php  

	class Designer extends Tecnico {

		function __construct($salarioBase,$horasExtras,$horasExtras){
			parent::__construct($this->salarioBase, $this->horasExtras,$this->horasExtras);
		}

		public function calculaSalario(){
			parent::calculaSalario();
		}
	}	
?>