<?php
ob_start();

$ext = getenv('LINK_EXT');
$ver = time();
$ACTIVE_MENU = 'quick-start';
$LANG='de';
?>


    <div style="text-align: center">

        <h2>Willkommen beim Spiel-Bot „MindWarrior“!</h2>

        <p><strong>MindWarrior</strong> ist ein Telegram-Spiel, das dir dabei <a href="/faq.<?=$LANG;?>.<?=$ext;?>#purpose">hilft, fokussiert zu bleiben</a> auf deine persönlichen Ziele, indem du <a href="/faq.<?=$LANG;?>.<?=$ext;?>#review">regelmäßig</a> eine <a href="/faq.<?=$LANG;?>.<?=$ext;?>#formula">private Nachricht</a> wieder aufrufst, die du dir selbst geschrieben hast.</p>

    <div class="quickstart-parent">
        <div class="store-buttons">
            <a class="store-badge telegram" href="https://t.me/mindwarriorgame_bot" target="_blank">
                <img class="store-icon" src="/images/telegram.svg" alt="Telegram" />
                <span class="store-label">Auf Telegram spielen</span>
            </a>
            <a class="store-badge play-store" href="https://play.google.com/store/apps/details?id=com.mindwarrior.app" target="_blank">
                <img class="play-badge" src="https://play.google.com/intl/en_us/badges/images/generic/en_badge_web_generic.png" alt="Bei Google Play herunterladen" />
                <span class="store-label">Auf Android spielen</span>
            </a>
        </div>
    </div>

        <h2>Schnellstartanleitung</h2>

        <p>(Tippe auf die Bilder unten, um sie zu vergrößern)</p>

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
            <a href="/images/quickstart_en/_05.png?<?=$ver;?>" class="image-link"><img src='/images/quickstart_en/_05_cropped.png?<?=$ver;?>' width='250' /></a>
        </div>
        <div class="quickstart-step">
            <h1>Schreiben Sie Ihre <a href="/faq.<?=$LANG;?>.<?=$ext;?>#formula" target="_blank"><i>Formel</i></a></h1>
        </div>
    </div>

    <div class="quickstart-parent">
        <div>
            <a href="/images/quickstart_en/_06.png?<?=$ver;?>" class="image-link"><img src='/images/quickstart_en/_06_cropped.png?<?=$ver;?>' width='250' /></a>
        </div>
        <div class="quickstart-step">
            <h1>Das Spiel hat begonnen!</h1>
            <p>Kehren Sie zu Ihrem Alltag zurück.</p>
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
            <h1>Überprüfe deine <i>Formel</i></h1>
            <p>
                Lass dich inspirieren!
            </p>
        </div>
    </div>

    <div class="quickstart-parent">
        <div>
            <a href="/images/quickstart_en/_09.png?<?=$ver;?>" class="image-link"><img src='/images/quickstart_en/_09_cropped.png?<?=$ver;?>' width='250' /></a>
        </div>
        <div class="quickstart-step">
            <h1>Alles erledigt!</h1>
            
            <p>
                Sammle deine Belohnungen. Komm bald wieder!
            </p>
        </div>
    </div>


<div class="quickstart-parent">
    <div class="store-buttons">
        <a class="store-badge telegram" href="https://t.me/mindwarriorgame_bot" target="_blank">
            <img class="store-icon" src="/images/telegram.svg" alt="Telegram" />
            <span class="store-label">Zu Telegram</span>
        </a>
        <a class="store-badge play-store" href="https://play.google.com/store/apps/details?id=com.mindwarrior.app" target="_blank">
            <img class="play-badge" src="https://play.google.com/intl/en_us/badges/images/generic/en_badge_web_generic.png" alt="Bei Google Play herunterladen" />
            <span class="store-label">Auf Android spielen</span>
        </a>
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
