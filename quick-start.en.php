<?php
ob_start();

$ext = getenv('LINK_EXT');
$ver = time();
$ACTIVE_MENU = 'quick-start';
$LANG='en';
?>


<div style="text-align: center">

    <h2>Welcome to "MindWarrior" game bot!</h2>

    <p><strong>MindWarrior</strong> is a Telegram game that <a href="/faq.<?=$LANG;?>.<?=$ext;?>#purpose">helps you stay focused</a> on your personal goals by <a href="/faq.<?=$LANG;?>.<?=$ext;?>#review">regularly revisiting</a> a <a href="/faq.<?=$LANG;?>.<?=$ext;?>#formula">private message</a> you write to yourself.</p>

    <div class="quickstart-parent">
        <div class="telegram">
            <img src="/images/telegram.svg" width="32" style="vertical-align: middle" />    <a href="https://t.me/mindwarriorgame_bot" target="_blank">Start playing on Telegram</a>
        </div>
    </div>

    <h2>Quick-start guide</h2>

    <p>(Tap the images below to expand)</p>
</div>

<div class="quickstart-parent">
    <div>
        <a href="/images/quickstart_en/_01.png?<?=$ver;?>" class="image-link"><img src='/images/quickstart_en/_01_cropped.png?<?=$ver;?>' width='250' /></a>
    </div>
    <div class="quickstart-step single">
        <h1>Press the START button</h1>
    </div>
</div>


<div class="quickstart-parent">
    <div>
        <a href="/images/quickstart_en/_02.png?<?=$ver;?>" class="image-link"><img src='/images/quickstart_en/_02_cropped.png?<?=$ver;?>' width='250' /></a>
    </div>
    <div class="quickstart-step single">
        <h1>Choose your language</h1>
    </div>
</div>


<div class="quickstart-parent">
    <div>
        <a href="/images/quickstart_en/_03.png?<?=$ver;?>" class="image-link"><img src='/images/quickstart_en/_03_cropped.png?<?=$ver;?>' width='250' /></a>
    </div>
    <div class="quickstart-step single">
        <h1>Press the "Write Formula..." button</h1>
    </div>
</div>

<div class="quickstart-parent">
    <div>
        <a href="/images/quickstart_en/_05.png?<?=$ver;?>" class="image-link"><img src='/images/quickstart_en/_05_cropped.png?<?=$ver;?>' width='250' /></a>
    </div>
    <div class="quickstart-step">
        <h1>Write your <a href="/faq.<?=$LANG;?>.<?=$ext;?>#formula" target="_blank"><i>Formula</i></a></h1>
    </div>
</div>

<div class="quickstart-parent">
    <div>
        <a href="/images/quickstart_en/_06.png?<?=$ver;?>" class="image-link"><img src='/images/quickstart_en/_06_cropped.png?<?=$ver;?>' width='250' /></a>
    </div>
    <div class="quickstart-step">
        <h1>The game has started!</h1>
        <p>Go back to your daily routines.</p>
    </div>
</div>

<div class="quickstart-parent">
    <div class="quickstart-parent">
        ⌛ some time later... ⌛
    </div>
</div>

<div class="quickstart-parent">
    <div>
        <a href="/images/quickstart_en/_07.png?<?=$ver;?>" class="image-link"><img src='/images/quickstart_en/_07_cropped.png?<?=$ver;?>' width='250' /></a>
    </div>
    <div class="quickstart-step">
        <h1>Press the "Review Formula" button</h1>
        <p>
            (when you are back to the game)
        </p>
    </div>
</div>

<div class="quickstart-parent">
    <div>
        <a href="/images/quickstart_en/_08.png?<?=$ver;?>" class="image-link"><img src='/images/quickstart_en/_08_cropped.png?<?=$ver;?>' width='250' /></a>
    </div>
    <div class="quickstart-step">
        <h1>Review your <i>Formula</i></h1>
        <p>
            Get inpspired!
        </p>
    </div>
</div>

<div class="quickstart-parent">
    <div>
        <a href="/images/quickstart_en/_09.png?<?=$ver;?>" class="image-link"><img src='/images/quickstart_en/_09_cropped.png?<?=$ver;?>' width='250' /></a>
    </div>
    <div class="quickstart-step">
        <h1>All done!</h1>
        <p>
            Collect your rewards. Be back soon!
        </p>
    </div>
</div>

<div class="quickstart-parent">
    <div class="telegram">
        <img src="/images/telegram.svg" width="32" style="vertical-align: middle" /> <a href="https://t.me/mindwarriorgame_bot" target="_blank">Start playing on Telegram</a>
    </div>
</div>




<?php
$CONTENT = ob_get_contents();
ob_end_clean();

$MENU_SELECTED = "quick-start";
$MENU = include("includes/menu.$LANG.php");

$TITLE="MindWarrior: Quick start";

$CSS = ["includes/quick-start.css"];
$JS = [];

include("includes/layout.php");
