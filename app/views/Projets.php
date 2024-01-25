<?php

namespace app\views;

use app\models\ModelePage;

class Projets
{
    public function show(): void {
        ob_start();
        ?>

        <div class="mainDiv">
            <div class="backgroundDiv projectDiv">
                <label class="projectTitle"><u>Spartiates Hockey Game</u></label>
                <label class="projectDate">2024</label>
                <div class="projectContentDiv">
                    <div class="projectTextDiv">
                        <label class="projectSubtitle">Présentation</label>
                        <label class="projectDescriptionText">
                            Il s'agit d'un jeu développé pour <label class="importantWord">l'équipe de Hockey sur Glace de Marseille</label>. Accessible depuis le <label class="importantWord">Web</label>, ce projet a été développé en <label class="importantWord">PHP</label>, <label class="importantWord">HTML</label>, <label class="importantWord">CSS</label> et <label class="importantWord">JavaScript</label>.
                            <br>Le jeu a pour but de faire connaître aux joueurs les règles du Hockey sur Glace tout en permettant aux organisateurs d'animer les tiers-temps pendant les matchs.
                            <br>Le jeu se présente sous la forme d'un <label class="importantWord">quiz interactif et animé</label>.
                            Une interface administrateur est également disponible afin de permettre aux organisateurs de gérer les questions du quiz stockées dans la <label class="importantWord">base de données</label> du site.
                            <br> <br> Projet réalisé dans un cadre scolaire en collaboration avec BIHI Ayoub, BOUT Thomas, HOSPITAL Jules et LOUARN Mathis en utilisant la <label class="importantWord">méthode Agile</label>.
                            <br> <br> Site en ligne accessible <a class="importantWord" href="https://spartiatejeu.alwaysdata.net/">ici</a>.
                        </label>
                    </div>
                    <div class="projectTextDiv">
                        <label class="projectSubtitle">Fonctionnalités</label>
                        <div class="projectFunctionalitiesDiv">
                            <label class="projectDescriptionText">• Quiz interactif et animé avec des pixel-arts</label>
                            <label class="projectDescriptionText">• Page entièrement dédiée aux règles du Hockey sur Glace</label>
                            <label class="projectDescriptionText">• Login administrateur</label>
                            <label class="projectDescriptionText">• Interface administrateur permettant la gestion du quiz</label>
                            <label class="projectDescriptionText">• Administrateur : ajouter / modifier / supprimer de questions</label>
                            <label class="projectDescriptionText">• Administrateur : créer une room, lancer et stopper le jeu</label>
                        </div>
                    </div>
                </div>
                <div class="projectImageDiv">
                    <img class="projectImage spartiatesProjectImage reveal" src="/assets/ressources/projets/spartiates_accueil.png">
                    <img class="projectImage spartiatesProjectImage reveal" src="/assets/ressources/projets/spartiates_quiz.png">
                    <img class="projectImage spartiatesProjectImage reveal" src="/assets/ressources/projets/spartiates_admin.png">
                </div>
            </div>
        </div>

        <div class="mainDiv">
            <div class="backgroundDiv projectDiv">
                <label class="projectTitle"><u>Croustagram</u></label>
                <label class="projectDate">2023</label>
                <div class="projectContentDiv">
                    <div class="projectTextDiv">
                        <label class="projectSubtitle">Présentation</label>
                        <label class="projectDescriptionText">
                            Croustagram est un réseau social accessible depuis le <label class="importantWord">Web</label> développé en <label class="importantWord">PHP</label>, <label class="importantWord">HTML</label>, <label class="importantWord">CSS</label> et <label class="importantWord">JavaScript</label>.
                            Chaque utilisateur inscrit a accès aux fonctionnalités d'un réseau social classique : poster, commenter, voter...
                            <br> <br> Projet réalisé dans un cadre scolaire en collaboration avec GOUACHE Nathan, GINER Léo, LEPERLIER Maël, SALOMON Clément et SEJOURNE Victor.
                            <br> <br> Site en ligne accessible <a class="importantWord" href="https://thecroustagram.alwaysdata.net/">ici</a>.
                        </label>
                    </div>
                    <div class="projectTextDiv">
                        <label class="projectSubtitle">Fonctionnalités</label>
                        <div class="projectFunctionalitiesDiv">
                            <label class="projectDescriptionText">• Créer un compte et se connecter</label>
                            <label class="projectDescriptionText">• Poster, commenter, voter (upvote / downvote)</label>
                            <label class="projectDescriptionText">• Rechercher des postes par score, catégorie, utilisateurs, ...</label>
                            <label class="projectDescriptionText">• Accéder au compte d'une personne</label>
                            <label class="projectDescriptionText">• Classement de tous les utilisateurs en fonction de leur score</label>
                            <label class="projectDescriptionText">• Version mobile entièrement redesignée</label>
                            <label class="projectDescriptionText">• Comptes administrateurs qui peuvent modérer</label>
                        </div>
                    </div>
                </div>
                <div class="projectImageDiv">
                    <img class="projectImage reveal" src="/assets/ressources/projets/croustagram.png">
                    <img class="projectImage reveal" src="/assets/ressources/projets/croustagram_connexion.png">
                    <img class="projectImage reveal" src="/assets/ressources/projets/croustagram_account.png">
                </div>
            </div>
        </div>

        <div class="mainDiv">
            <div class="backgroundDiv projectDiv">
                <label class="projectTitle"><u>KAMA Séisme</u></label>
                <label class="projectDate">2023</label>
                <div class="projectContentDiv">
                    <div class="projectTextDiv">
                        <label class="projectSubtitle">Présentation</label>
                        <label class="projectDescriptionText">
                            Il s'agit d'une application développée en <label class="importantWord">Java</label> à l'aide de la bibliothèque <label class="importantWord">JavaFX</label>.
                            Elle permet l'utilisation de fichiers au format <label class="importantWord">.csv</label> contenant des données liées à des séismes enregistrés sur le site <a href="https://www.sisfrance.net/" class="importantWord">SisFrance.net</a>.
                            <br> <br> Projet réalisé dans un cadre scolaire en collaboration avec ALI Mdallah, BIHI Ayoub, et FERRIER Killian.
                            <br> <br> Accessible via GitHub <a class="importantWord" href="https://github.com/BERGERON-Alexandre-2225012aa/S201_ProjetSeisme">ici</a>.
                        </label>
                    </div>
                    <div class="projectTextDiv">
                        <label class="projectSubtitle">Fonctionnalités</label>
                        <div class="projectFunctionalitiesDiv">
                            <label class="projectDescriptionText">• Naviguer à travers 3 pages différentes depuis un menu</label>
                            <label class="projectDescriptionText">• Sélectionner un fichier <label class="importantWord">.csv</label></label>
                            <label class="projectDescriptionText">• Choisir une période à analyser</label>
                            <label class="projectDescriptionText">• Accéder à des statistiques</label>
                            <label class="projectDescriptionText">• Accéder à une carte intéractive</label>
                        </div>
                    </div>
                </div>
                <div class="projectImageDiv">
                    <img class="projectImage reveal" src="/assets/ressources/projets/kamaseisme.png">
                    <img class="projectImage reveal" src="/assets/ressources/projets/kamaseisme_stats.png">
                    <img class="projectImage reveal" src="/assets/ressources/projets/kamaseisme_map.png">
                </div>
            </div>
        </div>

        <div class="mainDiv">
            <div class="backgroundDiv projectDiv">
                <label class="projectTitle"><u>Escape the Hack</u></label>
                <label class="projectDate">2023</label>
                <div class="projectContentDiv">
                    <div class="projectTextDiv">
                        <label class="projectSubtitle">Présentation</label>
                        <label class="projectDescriptionText">
                            Escape the Hack est un escape game numérique accessible depuis le <label class="importantWord">Web</label> développé en <label class="importantWord">HTML</label>, <label class="importantWord">CSS</label> et <label class="importantWord">JavaScript</label>.
                            Le but du joueur est de trouver le mot-de-passe de l'ordinateur dans un temps imparti de 20 minutes.
                            <br> Le site de l'escape game présente également des données sur le harcèlement, afin de sensibiliser les utilisateurs.
                            <br> <br> Projet réalisé dans un cadre scolaire en collaboration avec BAMAS Mathias, BIHI Ayoub, BOUT Thomas et GINER Léo.
                            <br> <br> Site en ligne accessible <a class="importantWord" href="https://singesinge.github.io/SAE-R.2.06/">ici</a>.
                            <br> Code source accessible via GitHub <a class="importantWord" href="https://github.com/singesinge/SAE-R.2.06">ici</a>.
                        </label>
                    </div>
                    <div class="projectTextDiv">
                        <label class="projectSubtitle">Fonctionnalités</label>
                        <div class="projectFunctionalitiesDiv">
                            <label class="projectDescriptionText">• Interface d'ordinateur fictive</label>
                            <label class="projectDescriptionText">• Applications fictives qui cachent des énigmes</label>
                            <label class="projectDescriptionText">• Barre de progression indiquant le temps restant</label>
                            <label class="projectDescriptionText">• Indices disponibles en cas de doutes</label>
                            <label class="projectDescriptionText">• Hors jeu, données sur le harcèlement afin de sensibiliser</label>
                        </div>
                    </div>
                </div>
                <div class="projectImageDiv">
                    <img class="projectImage reveal" src="/assets/ressources/projets/escapethehack.png">
                    <img class="projectImage reveal" src="/assets/ressources/projets/escapethehack_demarrage.png">
                    <img class="projectImage reveal" src="/assets/ressources/projets/escapethehack_jeu.png">
                </div>
            </div>
        </div>

        <div class="mainDiv">
            <div class="backgroundDiv projectDiv">
                <label class="projectTitle"><u>Ovni Clicker</u></label>
                <label class="projectDate">2023</label>
                <div class="projectContentDiv">
                    <div class="projectTextDiv">
                        <label class="projectSubtitle">Présentation</label>
                        <label class="projectDescriptionText">
                            Un jeu "clicker" développé en <label class="importantWord">Java</label> à l'aide de la bibliothèque <label class="importantWord">JavaFX</label>.
                            Le but est de cliquer sur la planète afin de faire apparaître des ovnis qui font augmenter le score. Le joueur peut également acheter des améliorations.
                            <br> <br> Projet réalisé dans mon temps libre.
                            <br> <br> Accessible via GitHub <a class="importantWord" href="https://github.com/BERGERON-Alexandre-2225012aa/OvniClicker">ici</a>.
                        </label>
                    </div>
                    <div class="projectTextDiv">
                        <label class="projectSubtitle">Fonctionnalités</label>
                        <div class="projectFunctionalitiesDiv">
                            <label class="projectDescriptionText">• Possibilité de sauvegarder et de charger une sauvegarde</label>
                            <label class="projectDescriptionText">• Possibilité d'acheter des améliorations</label>
                        </div>
                    </div>
                </div>
                <div class="projectImageDiv">
                    <img class="projectImage reveal" src="/assets/ressources/projets/ovniclicker.png">
                    <img class="projectImage reveal" src="/assets/ressources/projets/ovniclicker_auto.png">
                    <img class="projectImage reveal" src="/assets/ressources/projets/ovniclicker_menu.png">
                </div>
            </div>
        </div>

        <div class="mainDiv">
            <div class="backgroundDiv projectDiv">
                <label class="projectTitle"><u>Pokédex</u></label>
                <label class="projectDate">2022</label>
                <div class="projectContentDiv">
                    <div class="projectTextDiv">
                        <label class="projectSubtitle">Présentation</label>
                        <label class="projectDescriptionText">
                            Une application développée en <label class="importantWord">Python</label> à l'aide de la bibliothèque <label class="importantWord">Tkinter</label> qui permet de lister toutes les créatures de l'univers Pokémon de la première à la huitième génération.
                            <br> <br> Projet réalisé dans mon temps libre.
                            <br> <br> Accessible via MediaFire <a class="importantWord" href="https://www.mediafire.com/file/12430aig7gbzlf1/Pokedex_V3.0_%2528python%2529.zip/file">ici</a>.
                        </label>
                    </div>
                    <div class="projectTextDiv">
                        <label class="projectSubtitle">Fonctionnalités</label>
                        <div class="projectFunctionalitiesDiv">
                            <label class="projectDescriptionText">• Possibilité de voir la liste complète de tous les Pokémon</label>
                            <label class="projectDescriptionText">• Possibilité de trier les Pokémon par noms, types et numéros</label>
                            <label class="projectDescriptionText">• Possibilité de voir chaque Pokémon dans une fenêtre dédiée</label>
                        </div>
                    </div>
                </div>
                <div class="projectImageDiv">
                    <img class="projectImage pokedexProjectImage reveal" src="/assets/ressources/projets/pokedex.png">
                    <img class="projectImage pokedexProjectImage reveal" src="/assets/ressources/projets/pokedex_recherche.png">
                    <img class="projectImage pokedexProjectImage reveal" src="/assets/ressources/projets/pokedex_affichage.png">
                </div>
            </div>
        </div>

        <?php
        (new ModelePage('Projets', ob_get_clean(), 'projets'))->show();
    }
}