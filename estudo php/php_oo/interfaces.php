<?php
//Atributos NÃO são atribuidos nas INTERFACES !!!
    interface EquipamentosEletronicosInterface {
//A interface NÃO IMPLEMENTA o MÉTODO !! Portanto NÃO tem CHAVES 
        public function ligar();

        
        public function desligar(); 

        
    }
//RESUMINDO AS INTERFACES \/
//Tem por OBJETIVO IMPLEMENT METODOS COMUNS para as diversas CLASSES
//HOMOGENEIDADE de métodos(funções)
    class Geladeira implements EquipamentosEletronicosInterface{
        public function abrirPorta() {
            echo 'Abriu a porta';
        }
        public function ligar() {
            echo 'Ligar';
        }
        public function desligar() {
            echo 'Desligar';
        }
    }
    class TV implements EquipamentosEletronicosInterface {  
        public function trocarCanal() {
            echo 'Trocou o canal';
        }
        public function ligar() {
            echo 'Ligar';
        }
        public function desligar() {
            echo 'Desligar';
        }
    }
//Novo Objeto \/
    $x = new Geladeira();
    $y = new TV();

?>