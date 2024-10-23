<?php
ob_start();

$ext = getenv('LINK_EXT');
$ver = time();

$LANG='de';
?>


    <div style="text-align: center">

        <h2>Willkommen beim "MindWarrior" Spiel-Bot!</h2>

        <p>Dieses Spiel <a href="/faq.<?=$LANG;?>.<?=$ext;?>#purpose">wird dir helfen, dich</a> auf die wichtigsten Dinge in deinem Leben zu konzentrieren und
            <a href="/faq.<?=$LANG;?>.<?=$ext;?>#review">wird dich auf deiner Reise</a> durch den ganzen Unsinn des Alltags unterstützen.</p>

        <h2>Schnellstart-Anleitung</h2>

        <p>(Drücke auf die Bilder unten, um sie zu vergrößern)</p>
    </div>

    <div class="quickstart-parent">
        <div>
            <a href="/images/quickstart_en/_01.png?<?=$ver;?>" class="image-link"><img src='/images/quickstart_en/_01_cropped.png?<?=$ver;?>' width='250' /></a>
        </div>
        <div class="quickstart-step single">
            <h1>Drücke die START-Taste</h1>

        </div>
    </div>


    <div class="quickstart-parent">
        <div>
            <a href="/images/quickstart_en/_02.png?<?=$ver;?>" class="image-link"><img src='/images/quickstart_en/_02_cropped.png?<?=$ver;?>' width='250' /></a>
        </div>
        <div class="quickstart-step single">
            <h1>Wähle deine Sprache</h1>

        </div>
    </div>


    <div class="quickstart-parent">
        <div>
            <a href="/images/quickstart_en/_03.png?<?=$ver;?>" class="image-link"><img src='/images/quickstart_en/_03_cropped.png?<?=$ver;?>' width='250' /></a>
        </div>
        <div class="quickstart-step single">
            <h1>Drücke die "Formel schreiben..."-Taste</h1>

        </div>
    </div>

    <div class="quickstart-parent">
        <div>
            <a href="/images/quickstart_en/_04.png?<?=$ver;?>" class="image-link"><img src='/images/quickstart_en/_04_cropped.png?<?=$ver;?>' width='250' /></a>
        </div>
        <div class="quickstart-step">
            <h1>Schreibe deine <a href="/faq.<?=$LANG;?>.<?=$ext;?>#formula" target="_blank"><i>Formel</i></a></h1>
            <p>
                Verwende die 👁️ ("Auge")-Taste, um das Ergebnis zu überprüfen.
            </p>

        </div>
    </div>

    <div class="quickstart-parent">
        <div>
            <a href="/images/quickstart_en/_05.png?<?=$ver;?>" class="image-link"><img src='/images/quickstart_en/_05_cropped.png?<?=$ver;?>' width='250' /></a>
        </div>
        <div class="quickstart-step">
            <h1>Drücke die "Spiel starten"-Taste</h1>
            <p>Wenn du mit deiner <i>Formel</i> zufrieden bist.</p>
        </div>
    </div>

    <div class="quickstart-parent">
        <div>
            <a href="/images/quickstart_en/_06.png?<?=$ver;?>" class="image-link"><img src='/images/quickstart_en/_06_cropped.png?<?=$ver;?>' width='250' /></a>
        </div>
        <div class="quickstart-step">
            <h1>Das Spiel hat begonnen!</h1>
            <p>Du kannst zu deinen täglichen Aktivitäten zurückkehren. Vergiss nicht, zurückzukommen!</p>
        </div>
    </div>

    <div class="quickstart-parent">

        <div class="quickstart-parent">
            ⌛etwas später ⌛
        </div>

    </div>

    <div class="quickstart-parent">
        <div>
            <a href="/images/quickstart_en/_07.png?<?=$ver;?>" class="image-link"><img src='/images/quickstart_en/_07_cropped.png?<?=$ver;?>' width='250' /></a>
        </div>
        <div class="quickstart-step">
            <h1>Drücke die "Formel überprüfen"-Taste</h1>
            <p>
                (wenn du ins Spiel zurückkommst)
            </p>
        </div>
    </div>

    <div class="quickstart-parent">
        <div>
            <a href="/images/quickstart_en/_08.png?<?=$ver;?>" class="image-link"><img src='/images/quickstart_en/_08_cropped.png?<?=$ver;?>' width='250' /></a>
        </div>
        <div class="quickstart-step">
            <h1>Lies deine <i>Formel</i></h1>
            <p>
                Wenn du fertig bist, drücke die "Belohnung erhalten"-Taste.
            </p>
        </div>
    </div>

    <div class="quickstart-parent">
        <div>
            <a href="/images/quickstart_en/_09.png?<?=$ver;?>" class="image-link"><img src='/images/quickstart_en/_09_cropped.png?<?=$ver;?>' width='250' /></a>
        </div>
        <div class="quickstart-step">
            <h1>Genieße deine Belohnung!</h1>
            <p>
                Vergiss nicht, deine <i>Formeln</i> regelmäßig zu überprüfen.
            </p>
        </div>
    </div>

    <div class="quickstart-parent">
        <div class="telegram">
            <a href="https://t.me/mindwarriorgame_bot" target="_blank">Zu Telegram</a>
        </div>
    </div>





<?php
$CONTENT = ob_get_contents();
ob_end_clean();

$MENU_SELECTED = "quick-start";
$MENU = include("includes/menu.$LANG.php");

$TITLE="MindWarrior: Schnellstart";

$CSS = ["includes/quick-start.css"];
$JS = [];

include("includes/layout.php");