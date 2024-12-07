<?php
ob_start();

$ext = getenv('LINK_EXT');
$ver = time();
$ACTIVE_MENU = 'quick-start';
$LANG='ru';
?>


    <div style="text-align: center">
        <h2>Руководство</h2>

        <p>(Нажимайте на изображения для их увеличения)</p>
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
            <a href="/images/quickstart_ru/_04.png?<?=$ver;?>" class="image-link"><img src='/images/quickstart_ru/_04_cropped.png?<?=$ver;?>' width='250' /></a>
        </div>
        <div class="quickstart-step">
            <h1>Напишите вашу <a href="/faq.<?=$LANG;?>.<?=$ext;?>#formula" target="_blank"><i>Формулу</i></a></h1>
            <p>
                Используйте кнопку 👁️ ("глаз") чтобы посмотреть результат.
            </p>

        </div>
    </div>

    <div class="quickstart-parent">
        <div>
            <a href="/images/quickstart_ru/_05.png?<?=$ver;?>" class="image-link"><img src='/images/quickstart_ru/_05_cropped.png?<?=$ver;?>' width='250' /></a>
        </div>
        <div class="quickstart-step">
            <h1>Нажмите "Начать игру"</h1>
            <p>Если вы довольны получившейся <i>Формулой</i>.</p>
        </div>
    </div>

    <div class="quickstart-parent">
        <div>
            <a href="/images/quickstart_ru/_06.png?<?=$ver;?>" class="image-link"><img src='/images/quickstart_ru/_06_cropped.png?<?=$ver;?>' width='250' /></a>
        </div>
        <div class="quickstart-step">
            <h1>Игра началась!</h1>
            <p>Можете вернуться к обычным делам. Но не забудьте вернуться назад.</p>
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
                Когда закончите, нажмите "Закончить просмотр".
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
                Не забывайте регулярно просматривать свою <i>Формулу</i>.
            </p>
        </div>
    </div>

    <div class="quickstart-parent">
        <div class="telegram">
            <a href="https://t.me/mindwarriorgame_bot" target="_blank">Перейти в Телеграм</a>
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