<?php
ob_start();

$ext = getenv('LINK_EXT');
$ver = time();
$ACTIVE_MENU = 'quick-start';
$LANG='es';
?>

    <div style="text-align: center">

        <h2>¡Bienvenido al bot de juego «MindWarrior»!</h2>

        <p><strong>MindWarrior</strong> es un juego de Telegram que te <a href="/faq.<?=$LANG;?>.<?=$ext;?>#purpose">ayuda a mantenerte enfocado</a> en tus metas personales al <a href="/faq.<?=$LANG;?>.<?=$ext;?>#review">revisar regularmente</a> un <a href="/faq.<?=$LANG;?>.<?=$ext;?>#formula">mensaje privado</a> que te escribes a ti mismo.</p>

        <div class="quickstart-parent">
            <div class="telegram">
               <img src="/images/telegram.svg" width="32" style="vertical-align: middle" /> <a href="https://t.me/mindwarriorgame_bot" target="_blank">Empieza a jugar en Telegram</a>
            </div>
        </div>

        <h2>Guía de inicio rápido</h2>

        <p>(Toca las imágenes de abajo para ampliarlas)</p>

    </div>

    <div class="quickstart-parent">
        <div>
            <a href="/images/quickstart_en/_01.png?<?=$ver;?>" class="image-link"><img src='/images/quickstart_en/_01_cropped.png?<?=$ver;?>' width='250' alt='Paso 1: Presiona el botón INICIAR'/></a>
        </div>
        <div class="quickstart-step single">
            <h1>Presiona el botón INICIAR</h1>
        </div>
    </div>

    <div class="quickstart-parent">
        <div>
            <a href="/images/quickstart_en/_02.png?<?=$ver;?>" class="image-link"><img src='/images/quickstart_en/_02_cropped.png?<?=$ver;?>' width='250' alt='Paso 2: Elige tu idioma'/></a>
        </div>
        <div class="quickstart-step single">
            <h1>Elige tu idioma</h1>
        </div>
    </div>

    <div class="quickstart-parent">
        <div>
            <a href="/images/quickstart_en/_03.png?<?=$ver;?>" class="image-link"><img src='/images/quickstart_en/_03_cropped.png?<?=$ver;?>' width='250' alt='Paso 3: Presiona el botón "Escribir Fórmula..."/>'/></a>
        </div>
        <div class="quickstart-step single">
            <h1>Presiona el botón "Escribir Fórmula..."</h1>
        </div>
    </div>

    <div class="quickstart-parent">
        <div>
            <a href="/images/quickstart_en/_05.png?<?=$ver;?>" class="image-link"><img src='/images/quickstart_en/_05_cropped.png?<?=$ver;?>' width='250' alt='Paso 5: Presiona el botón "Iniciar Juego"'/></a>
        </div>
        <div class="quickstart-step">
            <h1>Escribe tu <a href="/faq.<?=$LANG;?>.<?=$ext;?>#formula" target="_blank"><i>fórmula</i></a></h1>
        </div>
    </div>

    <div class="quickstart-parent">
        <div>
            <a href="/images/quickstart_en/_06.png?<?=$ver;?>" class="image-link"><img src='/images/quickstart_en/_06_cropped.png?<?=$ver;?>' width='250' alt='Paso 6: ¡El juego ha comenzado!'/></a>
        </div>
        <div class="quickstart-step">
            <h1>¡El juego ha comenzado!</h1>
            <p>Vuelve a tus rutinas diarias.</p>
        </div>
    </div>

    <div class="quickstart-parent">
        <div class="quickstart-parent">
            ⌛un tiempo después ⌛
        </div>
    </div>

    <div class="quickstart-parent">
        <div>
            <a href="/images/quickstart_en/_07.png?<?=$ver;?>" class="image-link"><img src='/images/quickstart_en/_07_cropped.png?<?=$ver;?>' width='250' alt='Paso 7: Presiona el botón "Revisar Fórmula"'/></a>
        </div>
        <div class="quickstart-step">
            <h1>Presiona el botón "Revisar Fórmula"</h1>
            <p>
                (cuando regreses al juego)
            </p>
        </div>
    </div>

    <div class="quickstart-parent">
        <div>
            <a href="/images/quickstart_en/_08.png?<?=$ver;?>" class="image-link"><img src='/images/quickstart_en/_08_cropped.png?<?=$ver;?>' width='250' /></a>
        </div>
        <div class="quickstart-step">
            <h1>Revisa tu <i>fórmula</i></h1>
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


    <div class="quickstart-parent">
        <div class="telegram">
            <img src="/images/telegram.svg" width="32" style="vertical-align: middle" /> <a href="https://t.me/mindwarriorgame_bot" target="_blank">Ve a Telegram</a>
        </div>
    </div>






<?php
$CONTENT = ob_get_contents();
ob_end_clean();

$MENU_SELECTED = "quick-start";
$MENU = include("includes/menu.$LANG.php");

$TITLE="MindWarrior: Inicio rápido";

$CSS = ["includes/quick-start.css"];
$JS = [];

include("includes/layout.php");
