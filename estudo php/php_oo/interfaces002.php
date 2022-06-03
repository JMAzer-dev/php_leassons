<?php
//RESUMINDO AS INTERFACES \/
//Tem por OBJETIVO IMPLEMENT METODOS COMUNS para as diversas CLASSES
//HOMOGENEIDADE de métodos(funções)
    interface MamiferoInterface extends AnimalInterface{
        public function nascimento();  
    }
    interface AquaticoInterface extends AnimalInterface {
        public function nadar();
    }
    interface TerrestreInterface extends AnimalInterface {
        public function andar();
    }
    interface AveInterface extends AnimalInterface {
        public function voar();
    }
    interface AnimalInterface {
        public function alimentar_se();
        public function respirar();
    }
    class HabilidadesEspeciais {
        private function conversar(){
            echo '';
        }
    }
    class Humano extends HabilidadesEspeciais implements MamiferoInterface, TerrestreInterface, AnimalInterface {
        public function conversar() {
            echo 'Dialogou';
        }
        public function andar() {
            echo 'Andou';
        }
        public function respirar() {
            echo 'Respirou naturalmente';
        }
        public function nascimento()
        {
            echo 'Leite materno';
        }
        public function alimentar_se()
        {
            echo 'Variado';
        }
    }
    class Baleia implements MamiferoInterface, AquaticoInterface, AnimalInterface {  
        public function respirar() {
            echo 'Subiu na superfície para respirar';
        }
        public function nadar() {
            echo 'Nadou';
        }
        public function esguichar() {
            echo 'Esguichou';
        }
        public function nascimento()
        {
            echo 'Leite materno';
        }
        public function alimentar_se()
        {
            echo 'planctom';
        }

    }
    class Papagaio extends HabilidadesEspeciais implements AveInterface, AnimalInterface {
        public function voar()
        {
            echo 'Voou';
        }
        public function alimentar_se()
        {
            echo 'Comeu grãos e frutas';
        }
        public function respirar()
        {
            echo 'Respirou';
        }
        public function conversar()
        {
            echo 'Repetiu';
        }

    } 
//Novo Objeto \/
    $x = new Baleia();
    $y = new Humano();
    $z = new Papagaio();

    $z->conversar();

?>