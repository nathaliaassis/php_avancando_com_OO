<?php

namespace  NathaliaAssis\People;  // a classe agora se chama NathaliaAssis\People

class Person{
    use \NathaliaAssis\GetterSetter;

    // utilizando o instring na frente do paramentro $name não é preciso o if, 
    //pois ele já transforma o valor em string
    //declaramos uma variavel para retornar todos os valores de Person
    private $data = [];

    public function __construct(){
        echo "Classe instanciada" . PHP_EOL;
    }

    public function setName(string $name){
        
        // if(!is_string($name)){
        //     die('não é uma string');
        // }
        //$this->data[] = $name;
        $this->name = $name;
    }

    public function setAge(int $age){
        //$this->data[] = $age;
        $this->age = $age;
    }

    public function setWeight(float $weight){
        // $this->data[] = $weight;
        $this->weight = $weight;
    }

    //explode separa em arrays a partir da letra especificada
    public function getName(){
        return explode('o', $this->name);
    }

    public function __toString() :string{

        return $this->name . ',' . $this->age . ',' .  $this->weight;
    }
}