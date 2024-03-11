<?php

namespace app\views;

class Contacts
{

    public function show(): void {
        ob_start();
        ?>

        <div class="mainDiv contactBackground">
            <div class="contactDiv">
                <label class="contactLabel greenLabel reveal">
                    <div class="contactTitleDiv">
                        Téléphone <img src="/assets/ressources/contacts/telephone_logo.png" class="icon">
                    </div>
                    <br><a href="tel:+33641413958" class="importantWord">06 41 41 39 58</a>
                </label>
                <label class="contactLabel greenLabel reveal">
                    <div class="contactTitleDiv">
                        E-mail <img src="/assets/ressources/contacts/gmail_logo.png" class="icon">
                    </div>
                    <br><a href="mailto:alexandrebergeron12@gmail.com" class="importantWord">alexandrebergeron12@gmail.com</a>
                </label>
                <label class="contactLabel greenLabel reveal">
                    <div class="contactTitleDiv">
                        LinkedIn <img src="/assets/ressources/contacts/LinkedIn_logo.png" class="icon">
                    </div>
                    <br><a href="https://www.linkedin.com/in/alexandre-bergeron-2901542a0/" class="importantWord">Alexandre Bergeron</a>
                </label>
            </div>
            <img class="contactImage reveal" src="/assets/ressources/contacts/alexandre_fleurs.jpg">
        </div>

        <?php
        (new View('Contacts', ob_get_clean(), 'contacts', 'contacts'))->show();
    }
}