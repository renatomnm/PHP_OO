<?php

  class Cartao{
   private $portador;
   private $numero;
   private $vencimento;
   private $cvv;

   public function __construct($portador,$numero,$vencimento,$cvv){
     $this->portador = $portador;
     $this->numero = $numero;
     $this->vencimento = $vencimento;
     $this->cvv = $cvv;
   }

   public function getNumeroCartao(){
     return $this->numero;
   }
  }


?>
