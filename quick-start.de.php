<?php
ob_start();

$ext = getenv('LINK_EXT');
$ver = time();
$ACTIVE_MENU = 'quick-start';
$LANG='de';
?>


<div style="text-align: center">

    <h2>Willkommen beim „MindWarrior“-Game-Bot!</h2>

    <p><strong>MindWarrior</strong> ist ein Telegram-Spiel, das dir <a href="/faq.<?=$LANG;?>.<?=$ext;?>#purpose">hilft, fokussiert zu bleiben</a> auf deine persönlichen Ziele, indem du <a href="/faq.<?=$LANG;?>.<?=$ext;?>#review">regelmäßig</a> eine <a href="/faq.<?=$LANG;?>.<?=$ext;?>#formula">private Nachricht</a>, die du an dich selbst schreibst, wieder liest.</p>

    <div class="quickstart-parent">
        <div class="store-buttons">
            <a class="store-badge telegram" href="https://t.me/mindwarriorgame_bot" target="_blank">
                <img class="store-icon" src="/images/telegram.svg" alt="Telegram" />
                <span class="store-label">Auf Telegram spielen</span>
            </a>
            <a class="store-badge play-store" href="https://play.google.com/store/apps/details?id=com.mindwarrior.app" target="_blank">
                <img class="play-badge" src="https://play.google.com/intl/en_us/badges/images/generic/en_badge_web_generic.png" alt="Jetzt bei Google Play" />
                <span class="store-label">Auf Android spielen</span>
            </a>
        </div>
    </div>

    </div>

    <div style="text-align: center;">
        <h2>Schnellstart-Anleitung</h2>
        <h3>Wähle deine Plattform:</h3>
    </div>

    <div class="quickstart-parent" data-platform-tabs data-target-panel-filter="quick-start" data-default-platform="telegram">
        <div class="platform-tabs" role="tablist" aria-label="Plattform auswählen">
            <button class="platform-tab active" type="button" role="tab" aria-selected="true" data-platform-tab="telegram">Telegram</button>
            <button class="platform-tab" type="button" role="tab" aria-selected="false" data-platform-tab="android">Android</button>
        </div>

        <div class="platform-content active" data-target-panel-filter="quick-start" data-platform-panel="telegram" role="tabpanel">
        

            <p>(Tippe auf die Bilder unten, um sie zu vergrößern)</p>

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
        <h1>Drücke die Schaltfläche „Formel schreiben…“</h1>
    </div>
</div>

<div class="quickstart-parent">
    <div>
        <a href="/images/quickstart_en/_05.png?<?=$ver;?>" class="image-link"><img src='/images/quickstart_en/_05_cropped.png?<?=$ver;?>' width='250' /></a>
    </div>
    <div class="quickstart-step">
        <h1>Schreibe deine <a href="/faq.<?=$LANG;?>.<?=$ext;?>#formula" target="_blank"><i>Formel</i></a></h1>
    </div>
</div>

<div class="quickstart-parent">
    <div>
        <a href="/images/quickstart_en/_06.png?<?=$ver;?>" class="image-link"><img src='/images/quickstart_en/_06_cropped.png?<?=$ver;?>' width='250' /></a>
    </div>
    <div class="quickstart-step">
        <h1>Das Spiel hat begonnen!</h1>
        <p>Mach mit deinen täglichen Routinen weiter.</p>
    </div>
</div>

<div class="quickstart-parent">
    <div class="quickstart-parent">
        ⌛ einige Zeit später... ⌛
    </div>
</div>

<div class="quickstart-parent">
    <div>
        <a href="/images/quickstart_en/_07.png?<?=$ver;?>" class="image-link"><img src='/images/quickstart_en/_07_cropped.png?<?=$ver;?>' width='250' /></a>
    </div>
    <div class="quickstart-step">
        <h1>Drücke die Schaltfläche „Formel überprüfen“</h1>
        <p>
            (wenn du wieder im Spiel bist)
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
        <h1>Fertig!</h1>
        <p>
            Sammle deine Belohnungen ein. Bis bald!
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
                    <h1>Drücke die 🧪-Taste (Reagenzglas)</h1>
                </div>
            </div>

            <div class="quickstart-parent">
                <div>
                    <a href="/images/quickstart_android_en/02.png?<?=$ver;?>" class="image-link"><img src='/images/quickstart_android_en/02_cropped.png?<?=$ver;?>' width='250' /></a>
                </div>
                <div class="quickstart-step single">
                    <h1>Schreibe deine <a href="/faq.<?=$LANG;?>.<?=$ext;?>#formula" target="_blank"><i>Formel</i></a></h1>
                </div>
            </div>

            <div class="quickstart-parent">
                <div>
                    <a href="/images/quickstart_android_en/03.png?<?=$ver;?>" class="image-link"><img src='/images/quickstart_android_en/03_cropped.png?<?=$ver;?>' width='250' /></a>
                </div>
                <div class="quickstart-step">
                    <h1>Das Spiel hat begonnen!</h1>
                    <p>Mach mit deinen täglichen Routinen weiter.</p>
                </div>
            </div>

            <div class="quickstart-parent">
                <div class="quickstart-parent">
                    ⌛ einige Zeit später... ⌛
                </div>
            </div>

            <div class="quickstart-parent">
                <div>
                    <a href="/images/quickstart_android_en/04.png?<?=$ver;?>" class="image-link"><img src='/images/quickstart_android_en/04_cropped.png?<?=$ver;?>' width='250' /></a>
                </div>
                <div class="quickstart-step">
                    <h1>Drücke die Schaltfläche „Formel überprüfen“</h1>
                    <p>
                        (wenn du wieder im Spiel bist)
                    </p>
                </div>
            </div>

            <div class="quickstart-parent">
                <div>
                    <a href="/images/quickstart_android_en/05.png?<?=$ver;?>" class="image-link"><img src='/images/quickstart_android_en/05_cropped.png?<?=$ver;?>' width='250' /></a>
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
                    <a href="/images/quickstart_android_en/06.png?<?=$ver;?>" class="image-link"><img src='/images/quickstart_android_en/06_cropped.png?<?=$ver;?>' width='250' /></a>
                </div>
                <div class="quickstart-step">
                    <h1>Fertig!</h1>
                    <p>
                        Sammle deine Belohnungen ein. Bis bald!
                    </p>
                </div>
            </div>


        </div>
    </div>
    
    <div class="quickstart-parent">
        <div class="store-buttons">
            <a class="store-badge telegram" href="https://t.me/mindwarriorgame_bot" target="_blank">
                <img class="store-icon" src="/images/telegram.svg" alt="Telegram" />
                <span class="store-label">Auf Telegram spielen</span>
            </a>
            <a class="store-badge play-store" href="https://play.google.com/store/apps/details?id=com.mindwarrior.app" target="_blank">
                <img class="play-badge" src="https://play.google.com/intl/en_us/badges/images/generic/en_badge_web_generic.png" alt="Jetzt bei Google Play" />
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
$JS = ["/includes/quick-start-tabs.js"];

include("includes/layout.php");
