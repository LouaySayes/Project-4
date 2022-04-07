<?php
define('ROOT', str_replace('index.php','',$_SERVER['SCRIPT_FILENAME']));

require_once(ROOT.'controllers\annoncesController.php');
require_once(ROOT.'');

// On sépare les paramètres et on les met dans le tableau $params
$params = explode('/', $_GET['p']);

// Si au moins 1 paramètre existe
if($params[0] != ""){
    // On sauvegarde le 1er paramètre dans $controller en mettant sa 1ère lettre en majuscule
    $controller = ucfirst($params[0]);

    // On sauvegarde le 2ème paramètre dans $action si il existe, sinon index
    $action = isset($params[1]) ? $params[1] : 'index';

}else{
    // Ici aucun paramètre n'est défini
}

echo "Hello world !";