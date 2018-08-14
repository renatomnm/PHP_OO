<?php

 class Endereco{
   protected $cidade;
   protected $estado;
   protected $logradouro;
   protected $cep;


   public function __construct($cidade,$estado,$logradouro,$cep){
     $this->cidade = $cidade;
     $this->estado = $estado;
     $this->$logradouro = $logradouro;
     $this->cep = $cep;
   }

   public function getCidade(){
     return $this->cidade;
   }

   public function getEstado(){
     return $this->estado;
   }

   public function getLogradouro(){
     return $this->logradouro;
   }

   public function getCep(){
     return $this->cep;
   }
 }

?>
