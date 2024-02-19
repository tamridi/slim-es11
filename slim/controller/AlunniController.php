<?php
use Psr\Http\Message\ResponseInterface as Response;
use Psr\Http\Message\ServerRequestInterface as Request;
include __DIR__ . '/../views/Alunni.php';
include __DIR__ . '/../Classe.php';
class AlunniController
{
    function index(Request $request, Response $response, $args) {
        $miaclasse = new Classe();
        $view = new Alunni();
        $view->setData($miaclasse);
        $response->getBody()->write($view->render());
        return $response;
    }

}

?>