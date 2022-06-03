<?php
    class Exemplo {
        public static $attr1 = 'Attr estatico aqui!!';
        public $attr2 = 'Attr normal aqui !!!';

        public static function metodo1() {
            echo 'Metodo estatico aqui !!!';
        }
        public function metodo2() {
            echo 'Metodo normal aqui !!!';
        }
    }
    // $x = new Exemplo();
    // echo Exemplo::$attr1;
    // echo '<br>';
    // Exemplo::metodo1()
    $x = new Exemplo();
    // METODOS ESTATICOS podem ser chamados sem que haja a instância previamente criada /\
    Exemplo::metodo1()




?>