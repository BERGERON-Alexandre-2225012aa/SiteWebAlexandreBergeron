<?php

require_once __DIR__ . '/../vendor/autoload.php';

use app\controllers\Accueil as AccueilController;
use app\controllers\Projets as ProjetsController;
use app\controllers\Contacts as ContactsController;

try {

    $path = ($_SERVER['REQUEST_URI'] === '/') ? '/' : explode('/', trim($_SERVER['REQUEST_URI'], '/'));

    switch ($path[0]) {
        case 'accueil':
            (new AccueilController())->execute();
            break;
        case 'projets':
            (new ProjetsController())->execute();
            break;
        case 'contacts':
            (new ContactsController())->execute();
            break;
        default :
            (new AccueilController())->execute();
    }

}
catch (Exception) {

}

?>
