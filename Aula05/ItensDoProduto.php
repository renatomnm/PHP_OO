<?php

  class ItensDoProduto{
    private $produto;
    private $quantidade = 1;

    public function __construct($produto){
      $this->produto = $produto;
    }

    public function adicionarProduto(){
      $this->quantidade++;
    }

    public function removerProduto(){
      $this->quantidade--;
    }

    public function getQuantidade(){
      return $this->quantidade;
    }
  }

?>
