<?php
require_once __DIR__.'/../vendor/autoload.php'; 

$app = new Silex\Application(); 
//essa linha mostra o hello world
$app->get('/hello/{name}', function($name) use($app) { 
    return 'Hello '.$app->escape($name); 
}); 
//executar
$app->run(); 
