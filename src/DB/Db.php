<?php

namespace NathaliaAssis\DB;

interface Db{                   //:string força o retorno a ser uma string 
    public function connect() :string;
}