<?php
ob_start();

$ext = getenv('LINK_EXT');
$ACTIVE_MENU = 'public-formulas';
$LANG='en';
?>


    <h2>Public Formulas</h2>

    <p>
        <ul>
            <li>
                    <a href="/formulas/formula1.<?=$LANG;?>.<?=$ext;?>" target="_blank">
                    Example 1, active play time: 48d 11h 59m, difficulty: Hard, level: 10
                    </a>
            </li>   
        </ul>
</p>


<hr />

    <p>Please help us to build it by sharing your own Formula in public!<br />
    Please contact us here:
        <img src="/images/telegram.svg" width="20" style="vertical-align: middle" />
        <a href="https://t.me/MindWarriorSupport_bot" target="_blank">
            MindWarrior Support Bot
        </a>
    </p>
    






<?php
$CONTENT = ob_get_contents();
ob_end_clean();

$MENU_SELECTED = "public-formulas";
$MENU = include("includes/menu.$LANG.php");

$TITLE="MindWarrior: Public Formulas";

$CSS = ["includes/quick-start.css", "includes/public-formulas.css"];

$JS = [];

include("includes/layout.php");