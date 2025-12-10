<?php
ob_start();

$ext = getenv('LINK_EXT');
$ACTIVE_MENU = 'public-formulas';
$LANG='de';
?>


    <h2>Öffentliche Formeln</h2>


<p>
    <ul>
        <li>
            <a href="/formulas/formula1.<?=$LANG;?>.<?=$ext;?>" target="_blank">
                Beispiel 1, aktive Spielzeit: 48d 11h 59m, Schwierigkeit: Schwer, Stufe: 10
            </a>
        </li>
    </ul>
</p>

<p><sub>
    Teile deine <i>Formel</i> auf dieser Seite! Schick sie uns dazu:
        
    <a href="https://t.me/MindWarriorSupport_bot" target="_blank"
    ><img src="/images/telegram.svg" width="32" style="vertical-align: middle" /></a> 
&nbsp;
    <a href="https://github.com/mindwarriorgame/mindwarriorgame.org/issues" target="_blank"
    ><img src="/images/github.svg" width="32" style="vertical-align: middle" /> 
    </a>
</sub>
</p>





<?php
$CONTENT = ob_get_contents();
ob_end_clean();

$MENU_SELECTED = "public-formulas";
$MENU = include("includes/menu.$LANG.php");

$TITLE="MindWarrior: Öffentliche Formeln";

$CSS = ["includes/quick-start.css", "includes/public-formulas.css"];

$JS = [];

include("includes/layout.php");