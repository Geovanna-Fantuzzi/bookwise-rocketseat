<?php

/* Caso o usuário esteja em outra página que não seja a inicial, a index pegará o nome do REQUEST_URI para referenciar o controller*/

function controllerLoad()
{

    $controller = str_replace('/', '', parse_url($_SERVER['REQUEST_URI'])['path']);

    /* Caso não a uri esteja vazia, o controller se torna a home*/

    if (!$controller) $controller = 'home';

    /*Caso não exista o controller com o nome da uri, retorna o status 404 not found*/
    if (! file_exists("controllers/{$controller}.controller.php")) {

        http_response_code(404);

        echo "Página não encontrada";

        die();
    }

    // Chama o controlodador da página atual
    require "controllers/{$controller}.controller.php";
}

controllerLoad();