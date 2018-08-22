<?php

namespace NathaliaAssis\DB;

// se tivessemos em outro nivel utilizariamos o seguinte codigo
//use NathaliaAssis\Db\MySql 
class MySql implements Db{                   //:string força o retorno a ser uma string 
    public function connect() :string{
        return 'Connected to MySql';
    }
}