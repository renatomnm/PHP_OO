<?php 
	class Conversor 
	{
		public $cotacao;

		public function __Construct($cotacao){
			$this->cotacao = $cotacao;
		}

		public function fazConversaoDolaresParaReais($quantiaDeDolares){
			return $quantiaDeDolares * $this->cotacao;
		}

	}
?>