<?php
    //modelo

use Funcionario as GlobalFuncionario;

    class Funcionario {
        //atributos
        public $nome = null;
        public $telefone = null;
        public $numFilhos = null;
        public $cargo = null;
        public $salario = null;

        //getter e setters em overload(SOBRECARGA)
        function __set($atributo, $valor) {
            $this->$atributo = $valor;
        }
        function __get($atributo){
            return $this->$atributo;
        }
        //metodos
        function resumirCadFunc() {
            return $this->__get('nome') . ' | ' . $this->__get('numFilhos') . ' filho(s) ' . ' | ' . ' tel.: ' . $this->__get('telefone') . ' | ' . ' cargo: ' . $this->__get('cargo') . ' | ' . ' salário: ' . $this->__get('salario') . '$.';
        }
        function modificarNumFilhos($numFilhos) {
            $this->numFilhos = $numFilhos;
        }
    }
    //Acessando atributos com sobrecarga xD
    $x = new Funcionario();
    $x->__set('nome', 'Joao');
    $x->__set('numFilhos', 3);
    $x->__set('telefone', '(21)99999-9999');
    $x->__set('cargo', 'gerente');
    $x->__set('salario', 4800.00);
    echo $x->resumirCadFunc();
    echo '<hr>';
    echo $x->__get('nome') . ' | ' . $x->__get('numFilhos') . ' filho(s) ' . ' | ' . ' tel.: ' . $x->__get('telefone') .  ' | ' . ' cargo: ' . $x->__get('cargo') . ' | ' . ' salario: ' . $x->__get('salario') .  '$.';

    $y= new Funcionario();
    $y->__set('nome', 'Michele Maia');
    $y->__set('numFilhos', 1);
    $y->__set('telefone', '(21)99999-8888');
    echo '<hr>';
    echo $y->__get('nome') . ' | ' . ' tel.: ' . $y->__get('telefone') . ' | ' . 
    $y->__get('numFilhos') . ' filho(s).';