<?php
ob_start();

$ext = getenv('LINK_EXT');
$ver = time();

$LANG='fr';
?>


    <div style="text-align: center">

        <h2>Bienvenue sur le bot de jeu "MindWarrior" !</h2>

        <p>Ce jeu <a href="/faq.<?=$LANG;?>.<?=$ext;?>#purpose">vous aidera à rester concentré</a> sur les choses les plus importantes de votre vie et
            <a href="/faq.<?=$LANG;?>.<?=$ext;?>#review">vous soutiendra dans votre parcours</a> à travers tout le bruit quotidien.</p>

        <h2>Guide de démarrage rapide</h2>

        <p>(Appuyez sur les images ci-dessous pour les développer)</p>
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
            <a href="/images/quickstart_en/_04.png?<?=$ver;?>" class="image-link"><img src='/images/quickstart_en/_04_cropped.png?<?=$ver;?>' width='250' /></a>
        </div>
        <div class="quickstart-step">
            <h1>Écrivez votre <a href="/faq.<?=$LANG;?>.<?=$ext;?>#formula" target="_blank"><i>Formule</i></a></h1>
            <p>
                Utilisez le bouton 👁️ ("œil") pour prévisualiser le résultat.
            </p>
        </div>
    </div>

    <div class="quickstart-parent">
        <div>
            <a href="/images/quickstart_en/_05.png?<?=$ver;?>" class="image-link"><img src='/images/quickstart_en/_05_cropped.png?<?=$ver;?>' width='250' /></a>
        </div>
        <div class="quickstart-step">
            <h1>Appuyez sur le bouton "Démarrer le jeu"</h1>
            <p>Lorsque vous êtes satisfait de votre <i>Formule</i>.</p>
        </div>
    </div>

    <div class="quickstart-parent">
        <div>
            <a href="/images/quickstart_en/_06.png?<?=$ver;?>" class="image-link"><img src='/images/quickstart_en/_06_cropped.png?<?=$ver;?>' width='250' /></a>
        </div>
        <div class="quickstart-step">
            <h1>Le jeu a commencé !</h1>
            <p>Vous pouvez retourner à vos activités quotidiennes habituelles. N'oubliez pas de revenir !</p>
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
            <h1>Lisez votre <i>Formule</i></h1>
            <p>
                Une fois terminé, appuyez sur le bouton "Terminer la révision".
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
                N'oubliez pas de revenir de temps en temps pour revoir votre <i>Formule</i>.
            </p>
        </div>
    </div>


    <div class="quickstart-parent">
        <div class="telegram">
            <a href="https://t.me/mindwarriorgame_bot" target="_blank">Aller sur Telegram</a>
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