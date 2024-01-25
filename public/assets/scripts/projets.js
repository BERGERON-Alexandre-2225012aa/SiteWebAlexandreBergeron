var clicks = 0;

function changeImageOnClickSpartiates() {
    const image = document.getElementById('spartiatesProjectImage');
    const images = ['/assets/ressources/projets/spartiates_accueil.png', '/assets/ressources/projets/spartiates_quiz.png', '/assets/ressources/projets/spartiates_admin.png'];
    clicks++;
    image.src = images[clicks%3];
}

function changeImageOnClickCroustagram() {
    const image = document.getElementById('croustagramProjectImage');
    const images = ['/assets/ressources/projets/croustagram.png', '/assets/ressources/projets/croustagram_account.png', '/assets/ressources/projets/croustagram_leaderboard.png'];
    clicks++;
    image.src = images[clicks%3];
}

function changeImageOnClickOvniClicker() {
    const image = document.getElementById('ovniClickerProjectImage');
    const images = ['/assets/ressources/projets/ovniclicker.png', '/assets/ressources/projets/ovniclicker_auto.png', '/assets/ressources/projets/ovniclicker_menu.png'];
    clicks++;
    image.src = images[clicks%3];
}

function changeImageOnClickKamaSeisme() {
    const image = document.getElementById('kamaSeismeProjectImage');
    const images = ['/assets/ressources/projets/kamaseisme.png', '/assets/ressources/projets/kamaseisme_stats.png', '/assets/ressources/projets/kamaseisme_map.png'];
    clicks++;
    image.src = images[clicks%3];
}

function changeImageOnClickEscapeTheHack() {
    const image = document.getElementById('escapeTheHackProjectImage');
    const images = ['/assets/ressources/projets/escapethehack.png', '/assets/ressources/projets/escapethehack_demarrage.png', '/assets/ressources/projets/escapethehack_jeu.png'];
    clicks++;
    image.src = images[clicks%3];
}

function changeImageOnClickPokedex() {
    const image = document.getElementById('pokedexProjectImage');
    const images = ['/assets/ressources/projets/pokedex.png', '/assets/ressources/projets/pokedex_recherche.png', '/assets/ressources/projets/pokedex_affichage.png'];
    clicks++;
    image.src = images[clicks%3];
}