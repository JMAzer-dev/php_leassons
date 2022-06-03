<?php
    class Carro extends Veiculo{//EXTENDE a classe CARRO à VEICULO!
        public $teto_solar = false;

        function abrirTetoSolar(){
            echo 'Abrir teto solar';
        }
        function alterarPosicaoVolante(){
            echo 'Alterar posição do volante';
        }

    }

    class Moto extends Veiculo{   //EXTENDE a classe MOTO à VEICULO!
        public $contra_peso_guidao = true;

        function empinar(){
            echo 'Empinar';
        }
        function trocarMarcha(){  // SOBRE ESCRITA == POLIMORFIA
            echo 'Marcha trocada no pedal';
        }
    }
    class Veiculo{
        public $cor = null;
        public $placa = null;
        public $modelo = null;

        function __construct($placa, $cor, $modelo) //HERANÇA GLOBAL
        {
            $this->placa = $placa;
            $this->cor = $cor;
            $this->modelo = $modelo;
        }
        function acelerar(){
            echo 'Acelerou';
        }
        function trocarMarcha(){   // HERANÇA SEMI GLOBAL
            echo 'Marcha trocada na mão';
        }

    }
    class Caminhao extends Veiculo{
        function bozinar(){
            echo 'Bozinou';
        }
    }
    $carro = new Carro('LKP-5166', 'Preto', 'Celta');
    $moto = new Moto('KGB-2255', 'Verde', 'Kawasaki');
    $caminhao = new Caminhao('RLS-8122', 'Verde', 'Mercedao');
    echo '<pre>';
    print_r($carro);
    echo '<hr>';
    print_r($moto);
    $moto->trocarMarcha();
    echo '<hr>';
    print_r($caminhao);
    echo $caminhao->trocarMarcha();
    echo '</pre>';