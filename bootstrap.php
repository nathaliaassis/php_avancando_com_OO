<?php

require __DIR__.'/autoload.php';
// $name = (new Person)->setName('nathalia')

// $person = new NathaliaAssis\People\Person;
// $person->setName('Nathália');
// $person->setAge(20);
// $person->setWeight(49.5);

// var_dump($person);

// var_dump((new NathaliaAssis\DB\Db)->connect());
// var_dump((new NathaliaAssis\DB\MySql)->connect());

// para pegar o erro 
// try{
//     (new NathaliaAssis\DB\ORM)->select(false);
// } catch (\Exception $e){
//     echo $e->getMessage();
// }

//new NathaliaAssis\People\Person;

$people = new NathaliaAssis\People\Person;

$people->name = 'nathalia';
$people->age = 20;
$people->weight = 51.2;

echo ($people);

