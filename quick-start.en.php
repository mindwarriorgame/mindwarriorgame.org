<?php
ob_start();

$ext = getenv('LINK_EXT');
$ver = time();
$ACTIVE_MENU = 'quick-start';
$LANG='en';
?>


<div style="text-align: center">

    <h2>Welcome to "MindWarrior" game bot!</h2>

    <p>MindWarrior is a Telegram game bot that helps you stay focused on what truly matters in your life. You write a personal
        Formula of Firm Resolution (we'll call it the "Formula" below), and the game reminds you to review it regularly during the day.</p>

    <p>To start playing, you just need Telegram — no extra installation is required. Open the MindWarrior bot and follow the steps below.</p>

    <h2>Quick-start guide</h2>

    <p>(Press images below to expand)</p>
</div>

<ol class="quickstart-list">
    <li>
        <div class="quickstart-parent">
            <div>
                <a href="/images/quickstart_en/_01.png?<?=$ver;?>" class="image-link"><img src='/images/quickstart_en/_01_cropped.png?<?=$ver;?>' width='250' /></a>
            </div>
            <div class="quickstart-step single">
                <h1>Press START in the bot.</h1>
                <p>Open the MindWarrior Telegram bot and press the START button.</p>
            </div>
        </div>
    </li>

    <li>
        <div class="quickstart-parent">
            <div>
                <a href="/images/quickstart_en/_02.png?<?=$ver;?>" class="image-link"><img src='/images/quickstart_en/_02_cropped.png?<?=$ver;?>' width='250' /></a>
            </div>
            <div class="quickstart-step single">
                <h1>Choose your language.</h1>
                <p>Select the language you want to play in.</p>
            </div>
        </div>
    </li>

    <li>
        <div class="quickstart-parent">
            <div>
                <a href="/images/quickstart_en/_03.png?<?=$ver;?>" class="image-link"><img src='/images/quickstart_en/_03_cropped.png?<?=$ver;?>' width='250' /></a>
            </div>
            <div class="quickstart-step single">
                <h1>Press "Write Formula of Firm Resolution".</h1>
                <p>Use the button in the bot to start writing your Formula.</p>
            </div>
        </div>
    </li>

    <li>
        <div class="quickstart-parent">
            <div>
                <a href="/images/quickstart_en/_04.png?<?=$ver;?>" class="image-link"><img src='/images/quickstart_en/_04_cropped.png?<?=$ver;?>' width='250' /></a>
            </div>
            <div class="quickstart-step">
                <h1>Write your <a href="/faq.<?=$LANG;?>.<?=$ext;?>#formula" target="_blank"><i>Formula</i></a>.</h1>
                <p>
                    Type your text in the editor. You can use the "eye" (👁) button to preview what it looks like before saving.
                </p>

            </div>
        </div>
    </li>

    <li>
        <div class="quickstart-parent">
            <div>
                <a href="/images/quickstart_en/_05.png?<?=$ver;?>" class="image-link"><img src='/images/quickstart_en/_05_cropped.png?<?=$ver;?>' width='250' /></a>
            </div>
            <div class="quickstart-step">
                <h1>Press "Start Game".</h1>
                <p>When you are happy with your Formula, press "Start Game" to begin.</p>
            </div>
        </div>
    </li>

    <li>
        <div class="quickstart-parent">
            <div>
                <a href="/images/quickstart_en/_06.png?<?=$ver;?>" class="image-link"><img src='/images/quickstart_en/_06_cropped.png?<?=$ver;?>' width='250' /></a>
            </div>
            <div class="quickstart-step">
                <h1>Live your life.</h1>
                <p>You can now go back to your regular daily activities. Just remember to return to the bot from time to time to review your Formula.</p>
            </div>
        </div>
    </li>

    <li>
        <div class="quickstart-parent">
            <div>
                <a href="/images/quickstart_en/_07.png?<?=$ver;?>" class="image-link"><img src='/images/quickstart_en/_07_cropped.png?<?=$ver;?>' width='250' /></a>
            </div>
            <div class="quickstart-step">
                <h1>Review when the bot reminds you.</h1>
                <p>Some time later, the bot will send you a reminder to review your Formula.</p>
                <p>Open the bot, press "Review Formula", read your Formula carefully, and then press "Finish Review".</p>
                <p>⌛ some time later ⌛</p>
            </div>
        </div>

        <div class="quickstart-parent">
            <div>
                <a href="/images/quickstart_en/_08.png?<?=$ver;?>" class="image-link"><img src='/images/quickstart_en/_08_cropped.png?<?=$ver;?>' width='250' /></a>
            </div>
            <div class="quickstart-step">
                <h1>Read your Formula.</h1>
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
                    Don't forget to come back from time to time to review your Formula.
                </p>
            </div>
        </div>
    </li>
</ol>

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