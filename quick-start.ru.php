<?php
ob_start();

$ext = getenv('LINK_EXT');
$ver = time();
$ACTIVE_MENU = 'quick-start';
$LANG='ru';
?>


<div style="text-align: center">

    <h2>Добро пожаловать в игрового бота «MindWarrior»!</h2>

    <p><strong>MindWarrior</strong> — это игра в Telegram, которая <a href="/faq.<?=$LANG;?>.<?=$ext;?>#purpose">помогает вам поддерживать фокус</a> на ваших личных целях, <a href="/faq.<?=$LANG;?>.<?=$ext;?>#review">регулярно показывая вам</a> <a href="/faq.<?=$LANG;?>.<?=$ext;?>#formula">приватное сообщение</a>, которое вы сами создаете.</p>

    <div class="quickstart-parent">
        <div class="store-buttons">
            <a class="store-badge telegram" href="https://t.me/mindwarriorgame_bot" target="_blank">
                <img class="store-icon" src="/images/telegram.svg" alt="Telegram" />
                <span class="store-label">Играть в Telegram</span>
            </a>
            <a class="store-badge play-store" href="https://play.google.com/store/apps/details?id=com.mindwarrior.app" target="_blank">
                <img class="play-badge" src="https://play.google.com/intl/en_us/badges/images/generic/en_badge_web_generic.png" alt="Get it on Google Play" />
                <span class="store-label">Играть на Android</span>
            </a>
        </div>
    </div>

    </div>

    <div style="text-align: center;">
        <h2>Краткое руководство</h2>
        <h3>Выберите платформу:</h3>
    </div>

    <div class="quickstart-parent" data-platform-tabs data-target-panel-filter="quick-start" data-default-platform="telegram">
        <div class="platform-tabs" role="tablist" aria-label="Выбор платформы">
            <button class="platform-tab active" type="button" role="tab" aria-selected="true" data-platform-tab="telegram">Telegram</button>
            <button class="platform-tab" type="button" role="tab" aria-selected="false" data-platform-tab="android">Android</button>
        </div>

        <div class="platform-content active" data-target-panel-filter="quick-start" data-platform-panel="telegram" role="tabpanel">
        

            <p>(Нажимайте на изображения ниже, чтобы увеличить)</p>

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
        ⌛ некоторое время спустя... ⌛
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

        </div>

        <div class="platform-content" data-target-panel-filter="quick-start" data-platform-panel="android" role="tabpanel">


            <div class="quickstart-parent">
                <div>
                    <a href="/images/quickstart_android_en/01.png?<?=$ver;?>" class="image-link"><img src='/images/quickstart_android_en/01_cropped.png?<?=$ver;?>' width='250' /></a>
                </div>
                <div class="quickstart-step single">
                    <h1>Нажмите кнопку 🧪 ("пробирка")</h1>
                </div>
            </div>

            <div class="quickstart-parent">
                <div>
                    <a href="/images/quickstart_android_en/02.png?<?=$ver;?>" class="image-link"><img src='/images/quickstart_android_en/02_cropped.png?<?=$ver;?>' width='250' /></a>
                </div>
                <div class="quickstart-step single">
                    <h1>Напишите свою <a href="/faq.<?=$LANG;?>.<?=$ext;?>#formula" target="_blank"><i>Формулу</i></a></h1>
                </div>
            </div>

            <div class="quickstart-parent">
                <div>
                    <a href="/images/quickstart_android_en/03.png?<?=$ver;?>" class="image-link"><img src='/images/quickstart_android_en/03_cropped.png?<?=$ver;?>' width='250' /></a>
                </div>
                <div class="quickstart-step">
                    <h1>Игра началась!</h1>
                    <p>Возвращайтесь к своим повседневным делам.</p>
                </div>
            </div>

            <div class="quickstart-parent">
                <div class="quickstart-parent">
                    ⌛ некоторое время спустя... ⌛
                </div>
            </div>

            <div class="quickstart-parent">
                <div>
                    <a href="/images/quickstart_android_en/04.png?<?=$ver;?>" class="image-link"><img src='/images/quickstart_android_en/04_cropped.png?<?=$ver;?>' width='250' /></a>
                </div>
                <div class="quickstart-step">
                    <h1>Нажмите кнопку «Review Formula»</h1>
                    <p>
                        (когда вы вернётесь в игру)
                    </p>
                </div>
            </div>

            <div class="quickstart-parent">
                <div>
                    <a href="/images/quickstart_android_en/05.png?<?=$ver;?>" class="image-link"><img src='/images/quickstart_android_en/05_cropped.png?<?=$ver;?>' width='250' /></a>
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
                    <a href="/images/quickstart_android_en/06.png?<?=$ver;?>" class="image-link"><img src='/images/quickstart_android_en/06_cropped.png?<?=$ver;?>' width='250' /></a>
                </div>
                <div class="quickstart-step">
                    <h1>Вот и все!</h1>
                    <p>
                        Получите свои награды. Возвращайтесь скорее!
                    </p>
                </div>
            </div>


        </div>
    </div>
    
    <div class="quickstart-parent">
        <div class="store-buttons">
            <a class="store-badge telegram" href="https://t.me/mindwarriorgame_bot" target="_blank">
                <img class="store-icon" src="/images/telegram.svg" alt="Telegram" />
                <span class="store-label">Играть в Telegram</span>
            </a>
            <a class="store-badge play-store" href="https://play.google.com/store/apps/details?id=com.mindwarrior.app" target="_blank">
                <img class="play-badge" src="https://play.google.com/intl/en_us/badges/images/generic/en_badge_web_generic.png" alt="Get it on Google Play" />
                <span class="store-label">Играть на Android</span>
            </a>
        </div>
    </div>



<?php
$CONTENT = ob_get_contents();
ob_end_clean();

$MENU_SELECTED = "quick-start";
$MENU = include("includes/menu.$LANG.php");

$TITLE="MindWarrior: Быстрый старт";

$CSS = ["includes/quick-start.css"];
$JS = ["/includes/quick-start-tabs.js"];

include("includes/layout.php");
