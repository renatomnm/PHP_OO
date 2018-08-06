<?php

  class IMC{
    public $peso;
    public $altura;

    public function IMC(){
      return $this->peso / pow(2,$this->altura);
    }

    public function calculaIMC(){
      $imc = $this->IMC();
      if($imc < 20){
        return 'Abaixo do peso';
      } else if($imc >= 20 && $imc < 25) {
        return 'Peso ideal';
      } else {
        return 'Acima do peso';
      }
    }
  }

?>
