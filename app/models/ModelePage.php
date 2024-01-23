<?php

namespace app\models;

class ModelePage
{
    public function __construct(private string $title,
                                private string $content,
                                private string $stylesheet = ''){}

    public function show(): void
    {
        ?>
        <html lang="fr">
        <head>
            <meta name="google-site-verification" content="_pnlU29nynGkGXBLZpOj2xSqbPqGWmXyJyXiCjy2-9s" />
            <meta charset="UTF-8">
            <meta name="titre" content="Accueil">
            <meta name="description" content="Accueil">
            <link rel="stylesheet" href="/assets/styles/main.css">
            <?php if ($this->stylesheet !== '') { ?>
                <link rel="stylesheet" href="/assets/styles/<?= $this->stylesheet ?>.css">
            <?php } ?>
            <script src="/assets/scripts/script.js" defer></script>
            <title>A. Bergeron - <?= $this->title?></title>
            <link rel="icon" type="image/x-icon" href="/assets/ressources/logo.ico">
        </head>
        <body>
        <header>
            <label class="headerLabel">A. Bergeron</label>
            <div class="headerDiv">
                <button class="headerButton <?php if ($this->title == 'Accueil') { echo 'currentPageButton'; } ?>" onclick="window.location.href='accueil'">Accueil</button>
                <button class="headerButton <?php if ($this->title == 'Projets') { echo 'currentPageButton'; } ?>" onclick="window.location.href='projets'">Projets</button>
                <button class="headerButton <?php if ($this->title == 'Contacts') { echo 'currentPageButton'; } ?>" onclick="window.location.href='contacts'">Contacts</button>
            </div>
        </header>
        <?= $this->content?>
        </body>
        </html>
        <?php
    }

}