<?php
    class Pai {
        private $nome = 'jorge';
        protected $sobrenome = 'silva';
        public $humor = 'feliz';

        // public function getNome(){
        //     return $this->nome;
        // }
        // public function setNome($valor){
        //     if(strlen($valor) >= 3 ){
        //       $this->nome = $valor;  
        //     }
            
        // }
        // public function getSobrenome(){
        //     return $this->sobrenome;
        // }
        // public function setSobrenome($valor){
        //     if(strlen($valor) >= 3 ){
        //       $this->sobrenome = $valor;  
        //     }
            
        // }

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
    class Filho extends Pai{
                // //permite uso da sintex sem chamar a função
        public function __get($value){
            return $this->$value; //this = do próprio objeto
        }
        //permite uso da sintex sem chamar a função
        public function __set($atrib, $value){
            $this->$atrib = $value;
        }
    //     public function getAtributo($attr){
    //         return $this->$attr;
    //     }
    //     public function setAtributo($attr, $value){
    //         $this->$attr = $value;
    //     }
    }

    // $pai = new Pai();
    // // sintex simplificada p/ mudança de attb private ou public :O !!!
    // echo $pai->nome . ' '; 
    // echo $pai->sobrenome;
    // echo '<hr>';
    // echo $pai->nome . ' ';
    // echo $pai->sobrenome = 'porca';
    // echo '<hr>';
    // $pai->executarAcao();
     $filho = new Filho();
     echo '<pre>';
     print_r($filho);
     echo '<hr>';
     print_r(get_class_methods($filho));
     echo $filho->nome;
     $filho->nome = 'pigmeu';
     echo '<pre>';
     print_r($filho);
     echo '<hr>';
    //  echo $filho->getAtributo('nome');

    //  echo '<hr>';
    //  $filho->setAtributo('nome' , 'malakias');
    //  echo '<pre>';
    //  print_r($filho);
    //  echo '</pre>';
    //  echo '<hr>';
    //  echo $filho->getAtributo('nome');


     



















    // echo $pai->humor;
    // $pai->humor = 'triste';
    // echo '<hr>';
    // echo $pai->humor;
    // echo '<hr>';
    // echo $pai->getNome();
    // echo '<hr>';
    // $pai->setNome('JAUM');
    // echo $pai->getNome(); 
    // echo '<hr>';
    // echo $pai->getSobrenome();
    // echo '<hr>';
    // $pai->setSobrenome('');
    // echo $pai->getSobrenome();
    

?>