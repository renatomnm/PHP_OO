<?php

  class ToDoList{
    private $toDoList = [];

    public function adicionarItem($item){
      array_push($this->toDoList,$item);
    }
  }

?>
