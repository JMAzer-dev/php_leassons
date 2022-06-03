<?php
    namespace A; //SEPARA TOTALMENTE AS APLICAÇÔES REALIZADAS
        interface CadastroInterface{
            public function salvar();
        }   
    
        class Cliente implements CadastroInterface { //PODE SER CONVOCADA EM QQ LUGAR
            public $nome = 'Jorge';
            public function __construct() {
                echo '<pre>';
                print_r(get_class_methods($this)); //DESTA CLASSE
                echo'</pre>';
            }
            public function __get($attr){
                return $this->$attr;
            }
            public function salvar() {
                echo 'SALVO !!';
            }
        }
?>