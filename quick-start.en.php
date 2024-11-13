<?php
ob_start();

$ext = getenv('LINK_EXT');
$ver = time();

$LANG='en';
?>


<div style="text-align: center">

    <h2>Welcome to "MindWarrior" game bot!</h2>

    <p>This game <a href="/faq.<?=$LANG;?>.<?=$ext;?>#purpose">will keep you focused</a> on the most important things in your life and
        <a href="/faq.<?=$LANG;?>.<?=$ext;?>#review">will support you on your journey</a> through all the nonsense of everyday buzz.</p>

    <h2>Quick-start guide</h2>

    <p>(Press images below to expand)</p>
</div>

<div class="quickstart-parent">
    <div>
        <a href="/images/quickstart_en/_01.png?<?=$ver;?>" class="image-link"><img src='/images/quickstart_en/_01_cropped.png?<?=$ver;?>' width='250' /></a>
    </div>
    <div class="quickstart-step single">
        <h1>Press START button</h1>

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
        <h1>Press "Write Formula..." button</h1>

    </div>
</div>

<div class="quickstart-parent">
    <div>
        <a href="/images/quickstart_en/_04.png?<?=$ver;?>" class="image-link"><img src='/images/quickstart_en/_04_cropped.png?<?=$ver;?>' width='250' /></a>
    </div>
    <div class="quickstart-step">
        <h1>Write your <a href="/faq.<?=$LANG;?>.<?=$ext;?>#formula" target="_blank"><i>Formula</i></a></h1>
        <p>
            Use 👁️ ("eye") button to preview the result.
        </p>

    </div>
</div>

<div class="quickstart-parent">
    <div>
        <a href="/images/quickstart_en/_05.png?<?=$ver;?>" class="image-link"><img src='/images/quickstart_en/_05_cropped.png?<?=$ver;?>' width='250' /></a>
    </div>
    <div class="quickstart-step">
        <h1>Press "Start Game" button</h1>
        <p>When you are happy with your <i>Formula</i>.</p>
    </div>
</div>

<div class="quickstart-parent">
    <div>
        <a href="/images/quickstart_en/_06.png?<?=$ver;?>" class="image-link"><img src='/images/quickstart_en/_06_cropped.png?<?=$ver;?>' width='250' /></a>
    </div>
    <div class="quickstart-step">
        <h1>The game has started!</h1>
        <p>You can return back to your regular daily activities. Don't forget to return back!</p>
    </div>
</div>

<div class="quickstart-parent">

    <div class="quickstart-parent">
        ⌛some time later ⌛
    </div>

</div>

<div class="quickstart-parent">
    <div>
        <a href="/images/quickstart_en/_07.png?<?=$ver;?>" class="image-link"><img src='/images/quickstart_en/_07_cropped.png?<?=$ver;?>' width='250' /></a>
    </div>
    <div class="quickstart-step">
        <h1>Press "Review Formula" button</h1>
        <p>
            (when you are back to game)
        </p>
    </div>
</div>

<div class="quickstart-parent">
    <div>
        <a href="/images/quickstart_en/_08.png?<?=$ver;?>" class="image-link"><img src='/images/quickstart_en/_08_cropped.png?<?=$ver;?>' width='250' /></a>
    </div>
    <div class="quickstart-step">
        <h1>Read your <i>Formula</i></h1>
        <p>
            When finished, press "Finish Review" button.
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
            Don't forget to come back from time to time to review your <i>Formula</i>.
        </p>
    </div>
</div>

<div class="quickstart-parent">
    <div class="telegram">
        <a href="https://t.me/mindwarriorgame_bot" target="_blank">Go to Telegram</a>
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