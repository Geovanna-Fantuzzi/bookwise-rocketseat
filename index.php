<?php 

/* O controller inicial sempre será 'home' */

$controller = 'home';

/* Caso o usuário esteja em outra página que não seja a inicial, a index pegará o nome do PATH_INFO para referenciar o controller*/

if (isset($_SERVER['PATH_INFO']) && !empty($_SERVER['PATH_INFO'])) {
    $controller = str_replace('/', '', $_SERVER['PATH_INFO']);
}

// Chama o controlodador da página atual
require "controllers/{$controller}.controller.php";

?>
