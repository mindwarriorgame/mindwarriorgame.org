<?php
ob_start();

$ext = getenv('LINK_EXT');
$ver = time();
$ACTIVE_MENU = 'quick-start';
$LANG='es';
?>


<div style="text-align: center">

    <h2>¡Bienvenido al bot del juego "MindWarrior"!</h2>

    <p><strong>MindWarrior</strong> es un juego de Telegram que <a href="/faq.<?=$LANG;?>.<?=$ext;?>#purpose">te ayuda a mantenerte enfocado</a> en tus metas personales al <a href="/faq.<?=$LANG;?>.<?=$ext;?>#review">revisar regularmente</a> un <a href="/faq.<?=$LANG;?>.<?=$ext;?>#formula">mensaje privado</a> que te escribes a ti mismo.</p>

    <div class="quickstart-parent">
        <div class="store-buttons">
            <a class="store-badge telegram" href="https://t.me/mindwarriorgame_bot" target="_blank">
                <img class="store-icon" src="/images/telegram.svg" alt="Telegram" />
                <span class="store-label">Jugar en Telegram</span>
            </a>
            <a class="store-badge play-store" href="https://play.google.com/store/apps/details?id=com.mindwarrior.app" target="_blank">
                <img class="play-badge" src="https://play.google.com/intl/en_us/badges/images/generic/en_badge_web_generic.png" alt="Consíguelo en Google Play" />
                <span class="store-label">Jugar en Android</span>
            </a>
        </div>
    </div>

    </div>

    <div style="text-align: center;">
        <h2>Guía de inicio rápido</h2>
        <h3>Selecciona tu plataforma:</h3>
    </div>

    <div class="quickstart-parent" data-platform-tabs data-target-panel-filter="quick-start" data-default-platform="telegram">
        <div class="platform-tabs" role="tablist" aria-label="Elegir plataforma">
            <button class="platform-tab active" type="button" role="tab" aria-selected="true" data-platform-tab="telegram">Telegram</button>
            <button class="platform-tab" type="button" role="tab" aria-selected="false" data-platform-tab="android">Android</button>
        </div>

        <div class="platform-content active" data-target-panel-filter="quick-start" data-platform-panel="telegram" role="tabpanel">
        

            <p>(Toca las imágenes de abajo para ampliarlas)</p>

<div class="quickstart-parent">
    <div>
        <a href="/images/quickstart_en/_01.png?<?=$ver;?>" class="image-link"><img src='/images/quickstart_en/_01_cropped.png?<?=$ver;?>' width='250' /></a>
    </div>
    <div class="quickstart-step single">
        <h1>Pulsa el botón START</h1>
    </div>
</div>


<div class="quickstart-parent">
    <div>
        <a href="/images/quickstart_en/_02.png?<?=$ver;?>" class="image-link"><img src='/images/quickstart_en/_02_cropped.png?<?=$ver;?>' width='250' /></a>
    </div>
    <div class="quickstart-step single">
        <h1>Elige tu idioma</h1>
    </div>
</div>


<div class="quickstart-parent">
    <div>
        <a href="/images/quickstart_en/_03.png?<?=$ver;?>" class="image-link"><img src='/images/quickstart_en/_03_cropped.png?<?=$ver;?>' width='250' /></a>
    </div>
    <div class="quickstart-step single">
        <h1>Pulsa el botón "Write Formula..."</h1>
    </div>
</div>

<div class="quickstart-parent">
    <div>
        <a href="/images/quickstart_en/_05.png?<?=$ver;?>" class="image-link"><img src='/images/quickstart_en/_05_cropped.png?<?=$ver;?>' width='250' /></a>
    </div>
    <div class="quickstart-step">
        <h1>Escribe tu <a href="/faq.<?=$LANG;?>.<?=$ext;?>#formula" target="_blank"><i>Fórmula</i></a></h1>
    </div>
</div>

<div class="quickstart-parent">
    <div>
        <a href="/images/quickstart_en/_06.png?<?=$ver;?>" class="image-link"><img src='/images/quickstart_en/_06_cropped.png?<?=$ver;?>' width='250' /></a>
    </div>
    <div class="quickstart-step">
        <h1>¡El juego ha comenzado!</h1>
        <p>Vuelve a tus rutinas diarias.</p>
    </div>
</div>

<div class="quickstart-parent">
    <div class="quickstart-parent">
        ⌛ algún tiempo después... ⌛
    </div>
</div>

<div class="quickstart-parent">
    <div>
        <a href="/images/quickstart_en/_07.png?<?=$ver;?>" class="image-link"><img src='/images/quickstart_en/_07_cropped.png?<?=$ver;?>' width='250' /></a>
    </div>
    <div class="quickstart-step">
        <h1>Pulsa el botón "Review Formula"</h1>
        <p>
            (cuando vuelvas al juego)
        </p>
    </div>
</div>

<div class="quickstart-parent">
    <div>
        <a href="/images/quickstart_en/_08.png?<?=$ver;?>" class="image-link"><img src='/images/quickstart_en/_08_cropped.png?<?=$ver;?>' width='250' /></a>
    </div>
    <div class="quickstart-step">
        <h1>Revisa tu <i>Fórmula</i></h1>
        <p>
            ¡Inspírate!
        </p>
    </div>
</div>

<div class="quickstart-parent">
    <div>
        <a href="/images/quickstart_en/_09.png?<?=$ver;?>" class="image-link"><img src='/images/quickstart_en/_09_cropped.png?<?=$ver;?>' width='250' /></a>
    </div>
    <div class="quickstart-step">
        <h1>¡Todo listo!</h1>
        <p>
            Recoge tus recompensas. ¡Vuelve pronto!
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
                    <h1>Pulsa el botón 🧪 (tubo)</h1>
                </div>
            </div>

            <div class="quickstart-parent">
                <div>
                    <a href="/images/quickstart_android_en/02.png?<?=$ver;?>" class="image-link"><img src='/images/quickstart_android_en/02_cropped.png?<?=$ver;?>' width='250' /></a>
                </div>
                <div class="quickstart-step single">
                    <h1>Escribe tu <a href="/faq.<?=$LANG;?>.<?=$ext;?>#formula" target="_blank"><i>Fórmula</i></a></h1>
                </div>
            </div>

            <div class="quickstart-parent">
                <div>
                    <a href="/images/quickstart_android_en/03.png?<?=$ver;?>" class="image-link"><img src='/images/quickstart_android_en/03_cropped.png?<?=$ver;?>' width='250' /></a>
                </div>
                <div class="quickstart-step">
                    <h1>¡El juego ha comenzado!</h1>
                    <p>Vuelve a tus rutinas diarias.</p>
                </div>
            </div>

            <div class="quickstart-parent">
                <div class="quickstart-parent">
                    ⌛ algún tiempo después... ⌛
                </div>
            </div>

            <div class="quickstart-parent">
                <div>
                    <a href="/images/quickstart_android_en/04.png?<?=$ver;?>" class="image-link"><img src='/images/quickstart_android_en/04_cropped.png?<?=$ver;?>' width='250' /></a>
                </div>
                <div class="quickstart-step">
                    <h1>Pulsa el botón "Review Formula"</h1>
                    <p>
                        (cuando vuelvas al juego)
                    </p>
                </div>
            </div>

            <div class="quickstart-parent">
                <div>
                    <a href="/images/quickstart_android_en/05.png?<?=$ver;?>" class="image-link"><img src='/images/quickstart_android_en/05_cropped.png?<?=$ver;?>' width='250' /></a>
                </div>
                <div class="quickstart-step">
                    <h1>Revisa tu <i>Fórmula</i></h1>
                    <p>
                        ¡Inspírate!
                    </p>
                </div>
            </div>


            <div class="quickstart-parent">
                <div>
                    <a href="/images/quickstart_android_en/06.png?<?=$ver;?>" class="image-link"><img src='/images/quickstart_android_en/06_cropped.png?<?=$ver;?>' width='250' /></a>
                </div>
                <div class="quickstart-step">
                    <h1>¡Todo listo!</h1>
                    <p>
                        Recoge tus recompensas. ¡Vuelve pronto!
                    </p>
                </div>
            </div>


        </div>
    </div>
    
    <div class="quickstart-parent">
        <div class="store-buttons">
            <a class="store-badge telegram" href="https://t.me/mindwarriorgame_bot" target="_blank">
                <img class="store-icon" src="/images/telegram.svg" alt="Telegram" />
                <span class="store-label">Jugar en Telegram</span>
            </a>
            <a class="store-badge play-store" href="https://play.google.com/store/apps/details?id=com.mindwarrior.app" target="_blank">
                <img class="play-badge" src="https://play.google.com/intl/en_us/badges/images/generic/en_badge_web_generic.png" alt="Consíguelo en Google Play" />
                <span class="store-label">Jugar en Android</span>
            </a>
        </div>
    </div>



<?php
$CONTENT = ob_get_contents();
ob_end_clean();

$MENU_SELECTED = "quick-start";
$MENU = include("includes/menu.$LANG.php");

$TITLE="MindWarrior: Inicio rápido";

$CSS = ["includes/quick-start.css"];
$JS = ["/includes/quick-start-tabs.js"];

include("includes/layout.php");
