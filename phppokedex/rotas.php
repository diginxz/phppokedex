<?php

include 'Controller/PokedexController.php';

use phppokedex\PokedexController\PokedexController;

$url = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);


switch($url)
{
    ## ROTAS PARA PESSOA
    case '/pokedex':
        PokedexController::index();
    break;

    case '/pokedexoriginal':
        PokedexController::indexOriginal();
    break;

    case '/pokedex/form':
        PokedexController::form();
    break;

    case '/pokedex/save':
        PokedexController::save();
    break;

    case '/pokedex/delete':
        PokedexController::delete();
    break;

    default:
    {
        include 'phppokedex\View\modules.php';
    break;
    }
}