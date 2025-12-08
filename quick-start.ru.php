<?php
ob_start();

$ext = getenv('LINK_EXT');
$ver = time();
$ACTIVE_MENU = 'quick-start';
$LANG='ru';
?>


    <div style="text-align: center">
        <h2>Добро пожаловать в игру «MindWarrior»!</h2>

        <p><strong>MindWarrior</strong> — это игра в Telegram, которая <a href="/faq.<?=$LANG;?>.<?=$ext;?>#purpose">помогает вам поддерживать фокус</a> на ваших личных целях, <a href="/faq.<?=$LANG;?>.<?=$ext;?>#review">регулярно показывая вам</a> <a href="/faq.<?=$LANG;?>.<?=$ext;?>#formula">приватное сообщение</a>, которое вы сами создаете.</p>

        <div class="quickstart-parent">
            <div class="telegram">
                <img src="/images/telegram.svg" width="32" style="vertical-align: middle" /> <a href="https://t.me/mindwarriorgame_bot" target="_blank">Начать игру в Telegram</a>
            </div>
        </div>

        <h2>Краткое руководство по началу работы</h2>

        <p>(Нажмите на изображения ниже, чтобы увеличить их)</p>

    </div>

    <div class="quickstart-parent">
        <div>
            <a href="/images/quickstart_ru/_01.png?<?=$ver;?>" class="image-link"><img src='/images/quickstart_ru/_01_cropped.png?<?=$ver;?>' width='250' /></a>
        </div>
        <div class="quickstart-step single">
            <h1>Нажмите кнопку СТАРТ</h1>

        </div>
    </div>


    <div class="quickstart-parent">
        <div>
            <a href="/images/quickstart_ru/_02.png?<?=$ver;?>" class="image-link"><img src='/images/quickstart_ru/_02_cropped.png?<?=$ver;?>' width='250' /></a>
        </div>
        <div class="quickstart-step single">
            <h1>Выберите язык</h1>

        </div>
    </div>


    <div class="quickstart-parent">
        <div>
            <a href="/images/quickstart_ru/_03.png?<?=$ver;?>" class="image-link"><img src='/images/quickstart_ru/_03_cropped.png?<?=$ver;?>' width='250' /></a>
        </div>
        <div class="quickstart-step single">
            <h1>Нажмите "Написать формулу..."</h1>

        </div>
    </div>

    <div class="quickstart-parent">
        <div>
            <a href="/images/quickstart_ru/_05.png?<?=$ver;?>" class="image-link"><img src='/images/quickstart_ru/_05_cropped.png?<?=$ver;?>' width='250' /></a>
        </div>
        <div class="quickstart-step">
            <h1>Напишите свою <a href="/faq.<?=$LANG;?>.<?=$ext;?>#formula" target="_blank"><i>Формулу</i></a></h1>
        </div>
    </div>

    <div class="quickstart-parent">
        <div>
            <a href="/images/quickstart_ru/_06.png?<?=$ver;?>" class="image-link"><img src='/images/quickstart_ru/_06_cropped.png?<?=$ver;?>' width='250' /></a>
        </div>
        <div class="quickstart-step">
            <h1>Игра началась!</h1>
            <p>Возвращайтесь к своим повседневным делам.</p>
        </div>
    </div>

    <div class="quickstart-parent">

        <div class="quickstart-parent">
            ⌛спустя некоторое время ⌛
        </div>

    </div>

    <div class="quickstart-parent">
        <div>
            <a href="/images/quickstart_ru/_07.png?<?=$ver;?>" class="image-link"><img src='/images/quickstart_ru/_07_cropped.png?<?=$ver;?>' width='250' /></a>
        </div>
        <div class="quickstart-step">
            <h1>Нажмите "Просмотреть Формулу"</h1>
            <p>
                (когда вы вернулись в игру)
            </p>
        </div>
    </div>

    <div class="quickstart-parent">
        <div>
            <a href="/images/quickstart_ru/_08.png?<?=$ver;?>" class="image-link"><img src='/images/quickstart_ru/_08_cropped.png?<?=$ver;?>' width='250' /></a>
        </div>
        <div class="quickstart-step">
            <h1>Прочитайте вашу <i>Формулу</i></h1>
            <p>
                Вдохновитесь!
            </p>
        </div>
    </div>

    <div class="quickstart-parent">
        <div>
            <a href="/images/quickstart_ru/_09.png?<?=$ver;?>" class="image-link"><img src='/images/quickstart_ru/_09_cropped.png?<?=$ver;?>' width='250' /></a>
        </div>
        <div class="quickstart-step">
            <h1>Вот и все!</h1>
            <p>
                Получите свои награды. Возвращайтесь скорее!
            </p>
        </div>
    </div>

    <div class="quickstart-parent">
        <div class="telegram">
            <img src="/images/telegram.svg" width="32" style="vertical-align: middle" /> <a href="https://t.me/mindwarriorgame_bot" target="_blank">Перейти в Телеграм</a>
        </div>
    </div>

<?php
$CONTENT = ob_get_contents();
ob_end_clean();

$MENU_SELECTED = "quick-start";
$MENU = include("includes/menu.$LANG.php");

$TITLE="MindWarrior: Краткое руководство";

$CSS = ["includes/quick-start.css"];
$JS = [];

include("includes/layout.php");