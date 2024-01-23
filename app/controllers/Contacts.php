<?php

namespace app\controllers;

use app\views\Contacts as ContactsView;

class Contacts
{

    public function execute():void {
        (new ContactsView())->show();
    }

}