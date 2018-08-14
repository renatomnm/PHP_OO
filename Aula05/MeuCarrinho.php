<?php

  class MeuCarrinho{
    private $itensDoProduto = [];

    public function getItensDoCarrinho(){
      return $this->ItensDoProduto;
    }

    public function adicionaItem($item){
      $this->ItensDoProduto[] = $item;
    }
  }
?>
