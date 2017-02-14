<?php
use \Psr\Http\Message\ServerRequestInterface as Request;
use \Psr\Http\Message\ResponseInterface as Response;

require '../vendor/autoload.php';
require '../config/config.php';

$app = new \Slim\App(['settings' => ['displayErrorDetails' => true]]);

// Home
$app->get('/', 'App\Controllers\PersonController:getAllPersons');

// One Person
$app->get('/{id}', 'App\Controllers\PersonController:getOnePerson');

$app->run();