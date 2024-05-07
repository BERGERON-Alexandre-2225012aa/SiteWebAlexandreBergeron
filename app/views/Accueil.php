<?php

namespace app\views;

class Accueil
{
    public function show(): void {
        ob_start();
        ?>

        <div class="mainDiv">
            <div class="backgroundDiv right">
                <img class="accueilImg" src="/assets/ressources/accueil/alexandre_cocotiers.jpg">
            </div>
            <label class="accueilLabel rightLabel blueLabel reveal floating">
                Bonjour, je suis Alexandre Bergeron !
                <br>
                <br>J'ai 18 ans, et je suis passionné d'informatique.
                <br>
                <br>
                <label class="importantWord">Motivé</label>,
                <label class="importantWord">organisé</label> et
                <label class="importantWord">rigoureux</label> dans mon travail,
                je suis un atout primordial pour les équipes avec qui je travaille.
            </label>
        </div>

        <div class="mainDiv">
            <div class="backgroundDiv left">
                <img class="accueilImg" src="/assets/ressources/accueil/alexandre_lavandes.jpg">
            </div>
            <label class="accueilLabel leftLabel greenLabel reveal floating">
                J'ai obtenu mon
                <label class="importantWord"> Baccalauréat Général </label>
                spécialité Numérique et Sciences de l'Informatique et Mathématiques avec la mention
                <label class="importantWord"> Bien </label>
                en 2022.
            </label>
        </div>

        <div class="mainDiv">
            <label class="accueilLabel blueLabel leftLabel reveal floating">
                Je suis actuellement en
                <label class="importantWord">2ème année</label> de <label class="importantWord">BUT informatique</label> à l'Institut Universitaire de Technologies d'Aix-en-Provence.
            </label>
            <div class="backgroundDiv left">
                <img class="accueilImg" src="/assets/ressources/accueil/iut.jpg">
            </div>
        </div>


        <div class="mainDiv">
            <label class="accueilLabel greenLabel rightLabel reveal projetsLabel">
                Pour en savoir plus sur mes réalisations :
            </label>
            <div class="backgroundDiv right">
                <div class="carousel">
                    <div class="carouselContainer">
                        <img onclick="window.location.href='projets'" class="accueilImg floating projetsImg carouselItem" src="/assets/ressources/accueil/projets1.png">
                        <img onclick="window.location.href='projets'" class="accueilImg floating projetsImg carouselItem" src="/assets/ressources/accueil/projets2.png">
                        <img onclick="window.location.href='projets'" class="accueilImg floating projetsImg carouselItem" src="/assets/ressources/accueil/projets3.png">
                        <img onclick="window.location.href='projets'" class="accueilImg floating projetsImg carouselItem" src="/assets/ressources/accueil/projets4.png">
                        <img onclick="window.location.href='projets'" class="accueilImg floating projetsImg carouselItem" src="/assets/ressources/accueil/projets5.png">
                        <img onclick="window.location.href='projets'" class="accueilImg floating projetsImg carouselItem" src="/assets/ressources/accueil/projets6.png">
                    </div>
                </div>
                <button class="projetsButton" onclick="window.location.href='projets'">Mon Portfolio</button>
            </div>
        </div>

        <footer>
            <img class="boutonVersHautPage" src="/assets/ressources/flechehaut.png">
        </footer>
        
        <!--
        <div class="mainDiv">
            <div class="skills">
                <label class="skillsTitle">Mes compétences</label>
                <div class="allSkills">
                    <div class="skillBox reveal">
                        <label id="webSkill" class="skillsTitle">Web</label>
                        <div class="skillBoxSkills">
                            <div class="oneSkill">
                                <label class="skillName">HTML</label>
                                <div class="skillStarsDiv">
                                    <img src="/assets/ressources/accueil/etoile-jaune.png" class="skillStarsImg">
                                    <img src="/assets/ressources/accueil/etoile-jaune.png" class="skillStarsImg">
                                    <img src="/assets/ressources/accueil/etoile-jaune.png" class="skillStarsImg">
                                    <img src="/assets/ressources/accueil/etoile-jaune.png" class="skillStarsImg">
                                    <img src="/assets/ressources/accueil/etoile-jaune.png" class="skillStarsImg">
                                </div>
                            </div>
                            <div class="oneSkill">
                                <label class="skillName">CSS</label>
                                <div class="skillStarsDiv">
                                    <img src="/assets/ressources/accueil/etoile-jaune.png" class="skillStarsImg">
                                    <img src="/assets/ressources/accueil/etoile-jaune.png" class="skillStarsImg">
                                    <img src="/assets/ressources/accueil/etoile-jaune.png" class="skillStarsImg">
                                    <img src="/assets/ressources/accueil/etoile-jaune.png" class="skillStarsImg">
                                    <img src="/assets/ressources/accueil/etoile-jaune.png" class="skillStarsImg">
                                </div>
                            </div>
                            <div class="oneSkill">
                                <label class="skillName">JavaScript</label>
                                <div class="skillStarsDiv">
                                    <img src="/assets/ressources/accueil/etoile-jaune.png" class="skillStarsImg">
                                    <img src="/assets/ressources/accueil/etoile-jaune.png" class="skillStarsImg">
                                    <img src="/assets/ressources/accueil/etoile-jaune.png" class="skillStarsImg">
                                    <img src="/assets/ressources/accueil/etoile-grise.png" class="skillStarsImg">
                                    <img src="/assets/ressources/accueil/etoile-grise.png" class="skillStarsImg">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="skillBox reveal">
                        <label id="bddSkill" class="skillsTitle">Bases de données</label>
                        <div class="skillBoxSkills">
                            <div class="oneSkill">
                                <label class="skillName">PHP</label>
                                <div class="skillStarsDiv">
                                    <img src="/assets/ressources/accueil/etoile-jaune.png" class="skillStarsImg">
                                    <img src="/assets/ressources/accueil/etoile-jaune.png" class="skillStarsImg">
                                    <img src="/assets/ressources/accueil/etoile-jaune.png" class="skillStarsImg">
                                    <img src="/assets/ressources/accueil/etoile-jaune.png" class="skillStarsImg">
                                    <img src="/assets/ressources/accueil/etoile-grise.png" class="skillStarsImg">
                                </div>
                            </div>
                            <div class="oneSkill">
                                <label class="skillName">SQL</label>
                                <div class="skillStarsDiv">
                                    <img src="/assets/ressources/accueil/etoile-jaune.png" class="skillStarsImg">
                                    <img src="/assets/ressources/accueil/etoile-jaune.png" class="skillStarsImg">
                                    <img src="/assets/ressources/accueil/etoile-jaune.png" class="skillStarsImg">
                                    <img src="/assets/ressources/accueil/etoile-jaune.png" class="skillStarsImg">
                                    <img src="/assets/ressources/accueil/etoile-grise.png" class="skillStarsImg">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="skillBox reveal">
                        <label id="progSkill" class="skillsTitle">Programmation</label>
                        <div class="skillBoxSkills">
                            <div class="oneSkill">
                                <label class="skillName">Java</label>
                                <div class="skillStarsDiv">
                                    <img src="/assets/ressources/accueil/etoile-jaune.png" class="skillStarsImg">
                                    <img src="/assets/ressources/accueil/etoile-jaune.png" class="skillStarsImg">
                                    <img src="/assets/ressources/accueil/etoile-jaune.png" class="skillStarsImg">
                                    <img src="/assets/ressources/accueil/etoile-jaune.png" class="skillStarsImg">
                                    <img src="/assets/ressources/accueil/etoile-jaune.png" class="skillStarsImg">
                                </div>
                            </div>
                            <div class="oneSkill">
                                <label class="skillName">C++</label>
                                <div class="skillStarsDiv">
                                    <img src="/assets/ressources/accueil/etoile-jaune.png" class="skillStarsImg">
                                    <img src="/assets/ressources/accueil/etoile-jaune.png" class="skillStarsImg">
                                    <img src="/assets/ressources/accueil/etoile-jaune.png" class="skillStarsImg">
                                    <img src="/assets/ressources/accueil/etoile-jaune.png" class="skillStarsImg">
                                    <img src="/assets/ressources/accueil/etoile-grise.png" class="skillStarsImg">
                                </div>
                            </div>
                            <div class="oneSkill">
                                <label class="skillName">Python</label>
                                <div class="skillStarsDiv">
                                    <img src="/assets/ressources/accueil/etoile-jaune.png" class="skillStarsImg">
                                    <img src="/assets/ressources/accueil/etoile-jaune.png" class="skillStarsImg">
                                    <img src="/assets/ressources/accueil/etoile-jaune.png" class="skillStarsImg">
                                    <img src="/assets/ressources/accueil/etoile-jaune.png" class="skillStarsImg">
                                    <img src="/assets/ressources/accueil/etoile-jaune.png" class="skillStarsImg">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
        
        <div class="mainDiv">
            <div class="backgroundDiv right">
                <iframe width="560" height="315" src="https://www.youtube.com/embed/k-j9owScQNs?si=JU6fwd4E4HalbLjM" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
            </div>
            <label class="accueilLabel youtubeLabel greenLabel"> Pour en savoir plus ... </label>
        </div>
        -->
        
        <?php
        (new View('Accueil', ob_get_clean(), 'accueil', 'accueil'))->show();
    }
}