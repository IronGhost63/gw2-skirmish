<?php
use \Psr\Http\Message\ServerRequestInterface as Request;
use \Psr\Http\Message\ResponseInterface as Response;

require 'vendor/autoload.php';

$app = new \Slim\App;

$app->group('/skirmish', function(){
	$this->get('/', function($request, $respond, $args){

	});

	$this->get('/{match_id}', function(){

	});

	$this->get('/{match_id}/{round}', function(){

	});
});

/*
$app->get('/hello/{name}', function (Request $request, Response $response) {
    $name = $request->getAttribute('name');
    $response->getBody()->write("Hello, $name");

    return $response;
});
*/
$app->run();
?>