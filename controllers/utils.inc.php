<?php

function start_page($title) { ?>

    <!DOCTYPE html>
    <html lang='fr'>
    <head>
        <meta name="google-site-verification" content="_pnlU29nynGkGXBLZpOj2xSqbPqGWmXyJyXiCjy2-9s" />
        <meta charset="UTF-8">
        <meta name="titre" content="<?php echo $title ?>">
        <meta name="description" content="<?php echo $title ?>">
        <link rel="stylesheet" href="../ressources/styles/style.css">
        <script src="../ressources/styles/transition.js"></script>
        <title><?php echo $title ?></title>
    </head>

    <body>
    <header>
        <label class="headerLabel">A. Bergeron</label>
        <div class="headerDiv">
            <button class="headerButton" onclick="window.location.href='../views/accueil.php'">Accueil</button>
            <button class="headerButton" onclick="window.location.href='../views/projets.php'">Projets</button>
            <button class="headerButton" onclick="window.location.href='../views/contacts.php'">Contacts</button>
        </div>
    </header>

<?php }

function end_page() { ?>

    <footer>
        <label class="footerLabel">A. Bergeron</label>
        <label class="footerLabel">2023</label>
    </footer>

<?php }

?>