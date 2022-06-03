<?php
//ATRUBUTOS MAGICOS NA CLASSE PAI PERMITE SUA ALTERAÇÃO SER FEITA PELA CLASSE FILHO
    class Pai {
        private $nome = 'jorge';
        protected $sobrenome = 'silva'; //THIS = do próprio objeto
        public $humor = 'feliz';
//permite uso da sintex sem chamar a função
        public function __get($value){
        return $this->$value;
        }
//permite uso da sintex sem chamar a função
        public function __set($atrib, $value){
        $this->$atrib = $value;
        }
        private function executarMania(){
            echo 'Assobiar';
        }
        protected function responder(){
            echo 'Oi!!!';
        }
        public function executarAcao(){
            $i = rand(1, 2);
            if($i === 1){
                $this->executarMania();
            } if($i === 2){
                $this->responder();
            }
            
        }

    }
    
//get class methods não tem acesso a LEITURA de dados PROTEGIDOS
    class Filho extends Pai{
        //APENAS no contruct é mostrado todos os metodos herdados
        public function __construct() 
        {
            echo '<pre>';
            print_r(get_class_methods($this));
        }
        private function executarMania(){
            echo 'cantar';
        }
        public function x(){
            $this->executarMania();
        }
        protected function responder(){ //PROTECT herda uma sobreposição
            echo 'olá';
        }

    }
    $filho = new Filho();
    
    print_r($filho);
    echo '<hr>';
    $filho->executarAcao();
    
    



?>