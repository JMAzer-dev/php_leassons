<?php
  class Pessoa {
    public $nome = null;
    public $cidade = null;
    public $sexo = null;

    // function __destruct()
    // {
    //   echo 'Pessoa removido(a).';
    // }
    function __construct($nome)
    { 
      $this->nome = $nome;
      echo 'Nova pessoa de nome: ' . $this->__get('nome') . ', adicionada.';
    }
    function __set($atributo, $valor) {
      $this->$atributo = $valor;     
    }
    function __get($atributo){
      return $this->$atributo;
    }

  }

  $pessoa1 = new Pessoa('Jorge');
  echo '<br>';
  echo $pessoa1->__get('nome');
  echo '<br>';
  $pessoa1->__set('cidade', 'RJ');
  echo $pessoa1->__get('cidade');
  echo '<br>';
 


?>