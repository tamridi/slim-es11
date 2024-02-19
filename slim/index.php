<?php
use Psr\Http\Message\ResponseInterface as Response;
use Psr\Http\Message\ServerRequestInterface as Request;
use Slim\Factory\AppFactory;

require __DIR__ . '/vendor/autoload.php';
include __DIR__ . '/controller/AlunniController.php';

$app = AppFactory::create();

$app->get('/alunni', 'AlunniController:index');

$app->run();
