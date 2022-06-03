<?php
    namespace A; //SEPARA TOTALMENTE AS APLICAÇÔES REALIZADAS

    class Cliente implements \B\CadastroInterface, CadastroInterface { //PODE SER CONVOCADA EM QQ LUGAR
        public $nome = 'Jorge';
        public function __construct()
        {
            echo '<pre>';
            print_r(get_class_methods($this));
            echo'</pre>';
        }
        public function __get($attr){
            return $this->$attr;
        }
        public function salvar()
        {
            echo 'SALVO !!';
        }
        public function remover(){
            'Remover';
        }
        public function subtrair()
        {
            'Malocou';
        }
    }

    interface CadastroInterface{
        public function subtrair();
    }

    namespace B;

    class Cliente implements CadastroInterface {
        public $nome = 'Jamilton';
        public function __construct()
        {
            echo '<pre>';
            print_r(get_class_methods($this));
            echo'</pre>';
        }
        public function __get($attr){
            return $this->$attr;
        }
        public function remover()
        {
            echo 'REMOVEU !!';
        }
    }

    interface CadastroInterface{
        public function remover();
    }

    $c = new \A\Cliente(); // DEFINICAO DE namespace \A\
    print_r($c);
    echo $c->nome;




?>