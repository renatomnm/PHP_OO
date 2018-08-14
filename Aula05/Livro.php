<?php

  class Livro extends Produto{
    private $isbn;
    private $autor;

    public function __construct($nome,$valor,$autor){
      $this->autor = $autor;
      parent::__construct($nome,$valor);
    }

    public function getIsbn(){
      return $this->isbn;
    }
    
  }

?>
