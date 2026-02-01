<?php
ob_start();

$ext = getenv('LINK_EXT');
$ver = time();
$ACTIVE_MENU = 'quick-start';
$LANG='fr';
?>


<div style="text-align: center">

    <h2>Bienvenue dans le bot de jeu « MindWarrior » !</h2>

    <p><strong>MindWarrior</strong> est un jeu Telegram qui <a href="/faq.<?=$LANG;?>.<?=$ext;?>#purpose">vous aide à rester concentré</a> sur vos objectifs personnels en <a href="/faq.<?=$LANG;?>.<?=$ext;?>#review">revisitant régulièrement</a> un <a href="/faq.<?=$LANG;?>.<?=$ext;?>#formula">message privé</a> que vous vous écrivez à vous-même.</p>

    <div class="quickstart-parent">
        <div class="store-buttons">
            <a class="store-badge telegram" href="https://t.me/mindwarriorgame_bot" target="_blank">
                <img class="store-icon" src="/images/telegram.svg" alt="Telegram" />
                <span class="store-label">Jouer sur Telegram</span>
            </a>
            <a class="store-badge play-store" href="https://play.google.com/store/apps/details?id=com.mindwarrior.app" target="_blank">
                <img class="play-badge" src="https://play.google.com/intl/en_us/badges/images/generic/en_badge_web_generic.png" alt="Disponible sur Google Play" />
                <span class="store-label">Jouer sur Android</span>
            </a>
        </div>
    </div>

    </div>

    <div style="text-align: center;">
        <h2>Guide de démarrage rapide</h2>
        <h3>Sélectionnez votre plateforme :</h3>
    </div>

    <div class="quickstart-parent" data-platform-tabs data-target-panel-filter="quick-start" data-default-platform="telegram">
        <div class="platform-tabs" role="tablist" aria-label="Choisir la plateforme">
            <button class="platform-tab active" type="button" role="tab" aria-selected="true" data-platform-tab="telegram">Telegram</button>
            <button class="platform-tab" type="button" role="tab" aria-selected="false" data-platform-tab="android">Android</button>
        </div>

        <div class="platform-content active" data-target-panel-filter="quick-start" data-platform-panel="telegram" role="tabpanel">
        

            <p>(Touchez les images ci-dessous pour les agrandir)</p>

<div class="quickstart-parent">
    <div>
        <a href="/images/quickstart_en/_01.png?<?=$ver;?>" class="image-link"><img src='/images/quickstart_en/_01_cropped.png?<?=$ver;?>' width='250' /></a>
    </div>
    <div class="quickstart-step single">
        <h1>Appuyez sur le bouton START</h1>
    </div>
</div>


<div class="quickstart-parent">
    <div>
        <a href="/images/quickstart_en/_02.png?<?=$ver;?>" class="image-link"><img src='/images/quickstart_en/_02_cropped.png?<?=$ver;?>' width='250' /></a>
    </div>
    <div class="quickstart-step single">
        <h1>Choisissez votre langue</h1>
    </div>
</div>


<div class="quickstart-parent">
    <div>
        <a href="/images/quickstart_en/_03.png?<?=$ver;?>" class="image-link"><img src='/images/quickstart_en/_03_cropped.png?<?=$ver;?>' width='250' /></a>
    </div>
    <div class="quickstart-step single">
        <h1>Appuyez sur le bouton « Write Formula... »</h1>
    </div>
</div>

<div class="quickstart-parent">
    <div>
        <a href="/images/quickstart_en/_05.png?<?=$ver;?>" class="image-link"><img src='/images/quickstart_en/_05_cropped.png?<?=$ver;?>' width='250' /></a>
    </div>
    <div class="quickstart-step">
        <h1>Écrivez votre <a href="/faq.<?=$LANG;?>.<?=$ext;?>#formula" target="_blank"><i>Formule</i></a></h1>
    </div>
</div>

<div class="quickstart-parent">
    <div>
        <a href="/images/quickstart_en/_06.png?<?=$ver;?>" class="image-link"><img src='/images/quickstart_en/_06_cropped.png?<?=$ver;?>' width='250' /></a>
    </div>
    <div class="quickstart-step">
        <h1>Le jeu a commencé !</h1>
        <p>Retournez à vos routines quotidiennes.</p>
    </div>
</div>

<div class="quickstart-parent">
    <div class="quickstart-parent">
        ⌛ un peu plus tard... ⌛
    </div>
</div>

<div class="quickstart-parent">
    <div>
        <a href="/images/quickstart_en/_07.png?<?=$ver;?>" class="image-link"><img src='/images/quickstart_en/_07_cropped.png?<?=$ver;?>' width='250' /></a>
    </div>
    <div class="quickstart-step">
        <h1>Appuyez sur le bouton « Review Formula »</h1>
        <p>
            (quand vous revenez dans le jeu)
        </p>
    </div>
</div>

<div class="quickstart-parent">
    <div>
        <a href="/images/quickstart_en/_08.png?<?=$ver;?>" class="image-link"><img src='/images/quickstart_en/_08_cropped.png?<?=$ver;?>' width='250' /></a>
    </div>
    <div class="quickstart-step">
        <h1>Relisez votre <i>Formule</i></h1>
        <p>
            Laissez-vous inspirer !
        </p>
    </div>
</div>

<div class="quickstart-parent">
    <div>
        <a href="/images/quickstart_en/_09.png?<?=$ver;?>" class="image-link"><img src='/images/quickstart_en/_09_cropped.png?<?=$ver;?>' width='250' /></a>
    </div>
    <div class="quickstart-step">
        <h1>C’est terminé !</h1>
        <p>
            Récupérez vos récompenses. À très vite !
        </p>
    </div>
</div>

        </div>

        <div class="platform-content" data-target-panel-filter="quick-start" data-platform-panel="android" role="tabpanel">


            <div class="quickstart-parent">
                <div>
                    <a href="/images/quickstart_android_en/01.png?<?=$ver;?>" class="image-link"><img src='/images/quickstart_android_en/01_cropped.png?<?=$ver;?>' width='250' /></a>
                </div>
                <div class="quickstart-step single">
                    <h1>Appuyez sur le bouton 🧪 (tube)</h1>
                </div>
            </div>

            <div class="quickstart-parent">
                <div>
                    <a href="/images/quickstart_android_en/02.png?<?=$ver;?>" class="image-link"><img src='/images/quickstart_android_en/02_cropped.png?<?=$ver;?>' width='250' /></a>
                </div>
                <div class="quickstart-step single">
                    <h1>Écrivez votre <a href="/faq.<?=$LANG;?>.<?=$ext;?>#formula" target="_blank"><i>Formule</i></a></h1>
                </div>
            </div>

            <div class="quickstart-parent">
                <div>
                    <a href="/images/quickstart_android_en/03.png?<?=$ver;?>" class="image-link"><img src='/images/quickstart_android_en/03_cropped.png?<?=$ver;?>' width='250' /></a>
                </div>
                <div class="quickstart-step">
                    <h1>Le jeu a commencé !</h1>
                    <p>Retournez à vos routines quotidiennes.</p>
                </div>
            </div>

            <div class="quickstart-parent">
                <div class="quickstart-parent">
                    ⌛ un peu plus tard... ⌛
                </div>
            </div>

            <div class="quickstart-parent">
                <div>
                    <a href="/images/quickstart_android_en/04.png?<?=$ver;?>" class="image-link"><img src='/images/quickstart_android_en/04_cropped.png?<?=$ver;?>' width='250' /></a>
                </div>
                <div class="quickstart-step">
                    <h1>Appuyez sur le bouton « Review Formula »</h1>
                    <p>
                        (quand vous revenez dans le jeu)
                    </p>
                </div>
            </div>

            <div class="quickstart-parent">
                <div>
                    <a href="/images/quickstart_android_en/05.png?<?=$ver;?>" class="image-link"><img src='/images/quickstart_android_en/05_cropped.png?<?=$ver;?>' width='250' /></a>
                </div>
                <div class="quickstart-step">
                    <h1>Relisez votre <i>Formule</i></h1>
                    <p>
                        Laissez-vous inspirer !
                    </p>
                </div>
            </div>


            <div class="quickstart-parent">
                <div>
                    <a href="/images/quickstart_android_en/06.png?<?=$ver;?>" class="image-link"><img src='/images/quickstart_android_en/06_cropped.png?<?=$ver;?>' width='250' /></a>
                </div>
                <div class="quickstart-step">
                    <h1>C’est terminé !</h1>
                    <p>
                        Récupérez vos récompenses. À très vite !
                    </p>
                </div>
            </div>


        </div>
    </div>
    
    <div class="quickstart-parent">
        <div class="store-buttons">
            <a class="store-badge telegram" href="https://t.me/mindwarriorgame_bot" target="_blank">
                <img class="store-icon" src="/images/telegram.svg" alt="Telegram" />
                <span class="store-label">Jouer sur Telegram</span>
            </a>
            <a class="store-badge play-store" href="https://play.google.com/store/apps/details?id=com.mindwarrior.app" target="_blank">
                <img class="play-badge" src="https://play.google.com/intl/en_us/badges/images/generic/en_badge_web_generic.png" alt="Disponible sur Google Play" />
                <span class="store-label">Jouer sur Android</span>
            </a>
        </div>
    </div>



<?php
$CONTENT = ob_get_contents();
ob_end_clean();

$MENU_SELECTED = "quick-start";
$MENU = include("includes/menu.$LANG.php");

$TITLE="MindWarrior : Démarrage rapide";

$CSS = ["includes/quick-start.css"];
$JS = ["/includes/quick-start-tabs.js"];

include("includes/layout.php");
