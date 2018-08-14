<?php

  class Pessoa{
    private $nome;
    private $sobrenome;

    public function __construct($nome,$sobrenome){
      $this->nome = $nome;
      $this->sobrenome = $sobrenome;
    }

    public function getNome(){
      return $nome . " " . $sobrenome;
    }
  }

?>
