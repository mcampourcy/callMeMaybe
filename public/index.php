<?php
use \Psr\Http\Message\ServerRequestInterface as Request;
use \Psr\Http\Message\ResponseInterface as Response;

require '../vendor/autoload.php';
require '../config/config.php';

$app = new \Slim\App(['settings' => ['displayErrorDetails' => true]]);

// Home
$app->get('/', 'App\Controllers\PersonController:getAllPersons');

// One Person
$app->get('/person-{id}', 'App\Controllers\PersonController:getOnePerson');

//404
$app->get('/404', 'App\Controllers\PersonController:getOnePerson');

$app->run();