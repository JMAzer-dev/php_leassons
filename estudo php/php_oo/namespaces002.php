<?php
//IMPORTACAO DE BIBLIOTECAS 
    require "bibliotecas/lib1/lib1.php";
    require "bibliotecas/lib2/lib2.php";
//Informa a Biblioteca que irá UTILIZAR
    use A\Cliente as C1;  //APELIDANDO o Cliente de (Namespace)->A de "C1".
    use B\Cliente as C2;
    use A\CadastroInterface as C3;
    $c = new C2();
    print_r($c);
    $c->nome;
    $x = new C1();
    print_r($x);
    $x->nome;

    class C5 implements C3 {
        public $nome = 'Vikario';
        public function __construct(){
            echo '<pre>';
            print_r(get_class_methods($this));
            echo'</pre>';
        }
        public function ninar(){
            echo 'ninou';
        }
        public function salvar(){
            echo 'salvo nos';
        }
    }

    $v = new C5();
    print_r($v)


?>