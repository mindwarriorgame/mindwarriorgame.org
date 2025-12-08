<?php
ob_start();

$ext = getenv('LINK_EXT');
$ver = time();
$ACTIVE_MENU = 'quick-start';
$LANG='fr';
?>


    <div style="text-align: center">

        <h2>Bienvenue sur le bot de jeu « MindWarrior » !</h2>

        <p><strong>MindWarrior</strong> est un jeu Telegram qui vous <a href="/faq.<?=$LANG;?>.<?=$ext;?>#purpose">aide à rester concentré</a> sur vos objectifs personnels en <a href="/faq.<?=$LANG;?>.<?=$ext;?>#review">revenant régulièrement</a> sur un <a href="/faq.<?=$LANG;?>.<?=$ext;?>#formula">message privé</a> que vous vous écrivez.</p>

        <div class="quickstart-parent">
            <div class="telegram">
                <img src="/images/telegram.svg" width="32" style="vertical-align: middle" /> <a href="https://t.me/mindwarriorgame_bot" target="_blank">Commencer à jouer sur Telegram</a>
            </div>
        </div>

        <h2>Guide de démarrage rapide</h2>

        <p>(Touchez les images ci-dessous pour les agrandir)</p>

    </div>


    <div class="quickstart-parent">
        <div>
            <a href="/images/quickstart_en/_01.png?<?=$ver;?>" class="image-link"><img src='/images/quickstart_en/_01_cropped.png?<?=$ver;?>' width='250' /></a>
        </div>
        <div class="quickstart-step single">
            <h1>Appuyez sur le bouton DÉMARRER</h1>
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
            <h1>Appuyez sur le bouton "Écrire la formule..."</h1>
        </div>
    </div>


    <div class="quickstart-parent">
        <div>
            <a href="/images/quickstart_en/_05.png?<?=$ver;?>" class="image-link"><img src='/images/quickstart_en/_05_cropped.png?<?=$ver;?>' width='250' /></a>
        </div>
        <div class="quickstart-step">
            <h1>Écrivez votre <a href="/faq.<?=$LANG;?>.<?=$ext;?>#formula" target="_blank"><i>formule</i></a></h1>
        </div>
    </div>

    <div class="quickstart-parent">
        <div>
            <a href="/images/quickstart_en/_06.png?<?=$ver;?>" class="image-link"><img src='/images/quickstart_en/_06_cropped.png?<?=$ver;?>' width='250' /></a>
        </div>
        <div class="quickstart-step">
            <h1>Le jeu a commencé !</h1>
            <p>Retournez à vos activités quotidiennes.</p>
        </div>
    </div>


    <div class="quickstart-parent">

        <div class="quickstart-parent">
            ⌛un certain temps plus tard⌛
        </div>

    </div>

    <div class="quickstart-parent">
        <div>
            <a href="/images/quickstart_en/_07.png?<?=$ver;?>" class="image-link"><img src='/images/quickstart_en/_07_cropped.png?<?=$ver;?>' width='250' /></a>
        </div>
        <div class="quickstart-step">
            <h1>Appuyez sur le bouton "Revoir la Formule"</h1>
            <p>
                (quand vous êtes de retour dans le jeu)
            </p>
        </div>
    </div>

    <div class="quickstart-parent">
        <div>
            <a href="/images/quickstart_en/_08.png?<?=$ver;?>" class="image-link"><img src='/images/quickstart_en/_08_cropped.png?<?=$ver;?>' width='250' /></a>
        </div>
        <div class="quickstart-step">
            <h1>Vérifie ta <i>formule</i></h1>
            <p>
                Laisse-toi inspirer !
            </p>
        </div>
    </div>

    <div class="quickstart-parent">
        <div>
            <a href="/images/quickstart_en/_09.png?<?=$ver;?>" class="image-link"><img src='/images/quickstart_en/_09_cropped.png?<?=$ver;?>' width='250' /></a>
        </div>
        <div class="quickstart-step">
            <h1>Tout est prêt !</h1>
            <p>
                Récupère tes récompenses. Reviens vite !
            </p>
        </div>
    </div>


    <div class="quickstart-parent">
        <div class="telegram">
            <img src="/images/telegram.svg" width="32" style="vertical-align: middle" /> <a href="https://t.me/mindwarriorgame_bot" target="_blank">Aller sur Telegram</a>
        </div>
    </div>





<?php
$CONTENT = ob_get_contents();
ob_end_clean();

$MENU_SELECTED = "quick-start";
$MENU = include("includes/menu.$LANG.php");

$TITLE="MindWarrior : Démarrage rapide";

$CSS = ["includes/quick-start.css"];
$JS = [];

include("includes/layout.php");