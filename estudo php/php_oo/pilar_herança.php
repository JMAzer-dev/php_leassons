<?php
    class Carro extends Veiculo{//EXTENDE a classe CARRO à VEICULO!
        public $teto_solar = false;

        function __construct($placa, $cor, $modelo)
        {
            $this->placa = $placa; //This = do próprio objeto
            $this->cor = $cor;
            $this->modelo = $modelo;
        }
        function abrirTetoSolar(){
            echo 'Abrir teto solar';
        }
        function alterarPosicaoVolante(){
            echo 'Alterar posição do volante';
        }

    }
    // sempre que uma class compartilhar de outros atributos com
    // uma outra classe utilizada, cria-se uma 3 classe para unir
    // essas particularidades
    class Moto extends Veiculo{   //EXTENDE a classe MOTO à VEICULO!
        public $contra_peso_guidao = true;

        function __construct($placa, $cor, $modelo)
        {
            $this->placa = $placa;
            $this->cor = $cor;
            $this->modelo = $modelo;
        }

        function empinar(){
            echo 'Empinar';
        }
    }
    class Veiculo{
        public $cor = null;
        public $placa = null;
        public $modelo = null;

        function acelerar(){
            echo 'Acelerou';
        }

    }

    $carro01 = new Carro('LKP-5166' , 'Preto', 'Celta');
    $moto01 = new Moto('FLJ-567', 'Vermelho', 'Honda CB-500');
    $carro01->acelerar();
    echo '<br>';
    $carro01->abrirTetoSolar();
    echo '<hr>';
    $moto01->acelerar();
    echo '<br>';
    $moto01->empinar();

    echo '<pre>';
    print_r($carro01);
    echo '<hr>';
    print_r($moto01);
    echo '</pre>';



?>