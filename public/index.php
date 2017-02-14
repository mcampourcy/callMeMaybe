<?php
use \Psr\Http\Message\ServerRequestInterface as Request;
use \Psr\Http\Message\ResponseInterface as Response;

require '../vendor/autoload.php';
require '../config/config.php';

$app = new \Slim\App(['settings' => ['displayErrorDetails' => true]]);

$app->get('/', 'App\Controllers\HomeController:getAllPersons');

$app->run();