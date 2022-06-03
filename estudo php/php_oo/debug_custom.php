<?php
    class MinhaExceptionCustomizada extends Exception {
        private $erro = '';
        public function __construct($erro)
        {
            $this->erro = $erro;
        }
        public function exibirMensagemErroCustomizada(){
            echo '<div style="border: solid 1px #000; padding: 15px; background-color: red; color: white;">';
                echo $this->erro;
            echo '</div>';
        }   
    }
    //Error (php) - Não Comum
    //Exception (programadores) - Comum
    //Customizadas (programadores) - Comum

try {
    throw new MinhaExceptionCustomizada('Esse é um erro de teste');
} catch (MinhaExceptionCustomizada $e){
    $e->exibirMensagemErroCustomizada();
}
?>