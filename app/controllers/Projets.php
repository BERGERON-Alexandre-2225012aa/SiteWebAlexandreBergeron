<?php

namespace app\controllers;

use app\views\Projets as ProjetsView;

class Projets
{

    public function execute():void {
        (new ProjetsView())->show();
    }

}