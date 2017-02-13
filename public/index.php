<?php
use \Psr\Http\Message\ServerRequestInterface as Request;
use \Psr\Http\Message\ResponseInterface as Response;

require '../vendor/aura/autoload/autoload.php';

$app = new \Slim\App();

//$app->get('/', '\HomeController:home');

$app->run();