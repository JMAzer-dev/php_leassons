<?php
    //modelo
    class Funcionario {
        //atributos
        public $nome = null; 
        public $telefone = null;
        public $numFilhos = null;
        public $cargo = null;
        public $salario = null;

        // getters e setters -- entrada e saida de dados
        function setNome($nome) {
            $this->nome = $nome; //THIS = do próprio objeto
         }
        function setNumFilhos($numFilhos) {
            $this->numFilhos = $numFilhos;
        }
        function setTelefone($telefone) {
            $this->telefone = $telefone;
        }
        function getNome() {
            return $this->nome;
        }
        function getNumFilhos() {
            return $this->numFilhos;
        }
        function getTelefone() {
            return $this->telefone;
        }

        //metodos
        function resumirCadFunc() {
            return "$this->nome / $this->numFilhos filho(s) / tel.: $this->telefone.";
        }
        function modificarNumFilhos($numFilhos) {
            $this->numFilhos = $numFilhos;
        }
    }
    // acessando atrib ou métodos:
    $y = new Funcionario();
    $y->setNome('Joao');
    $y->setTelefone('(21)99999-9999');
    $y->setNumFilhos(3);
    echo $y->resumirCadFunc();
    $y->modificarNumFilhos(6);
    echo '<hr>';
    echo $y->getNome() . ' / ' . $y->getNumFilhos() . ' filho(s) / tel:.' . $y->getTelefone() . '.';
    echo '<hr>';
    $x = new Funcionario();
    $x->setNome('Maria');
    $x->setNumFilhos(0);
    $x->setTelefone('(21)99999-8888');
    echo $x->resumirCadFunc();
    $x->modificarNumFilhos(1);
    echo '<hr>';
    echo $x->getNome() . ' / ' . $x->getNumFilhos() . ' filho(s) / tel.: ' . $x->getTelefone() . '.';

?>