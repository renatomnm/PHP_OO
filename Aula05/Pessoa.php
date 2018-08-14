<?php

  class Pessoa{
    protected $nome;
    protected $sobrenome;
    protected $username;
    protected $email;
    protected $endereco

    public function __construct($nome,$sobrenome,$username,$email){
      $this->nome = $nome;
      $this->sobrenome = $sobrenome;
      $this->username = $username;
      $this->email = $email;
    }

    public function setEndereco($endereco){
      $this->endereco = $endereco;
    }

    public function getNome(){
      return $this->nome . " " . $this->sobrenome;
    }

    public function getUsername(){
      return $username;
    }

    public function getEmail(){
      return $email;
    }



  }

?>
