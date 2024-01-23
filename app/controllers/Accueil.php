<?php

namespace app\controllers;

use app\views\Accueil as AccueilView;

class Accueil
{

    public function execute(): void {
        (new AccueilView())->show();
    }

}