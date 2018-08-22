<?php

require __DIR__.'/src/Autoload.php';

$autoload = new NathaliaAssis\Autoload;
$autoload->register();

$autoload->addNamespace('NathaliaAssis', 'src');