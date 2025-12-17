<?php
ob_start();

$ext = getenv('LINK_EXT');
$ACTIVE_MENU = 'public-formulas';
$LANG='en';
?>

    <h2>Examples of Players’ Formulas</h2>


<div class="mw-disclaimer-banner" role="note" aria-label="Disclaimer">
  <div class="mw-disclaimer-banner__icon" aria-hidden="true">!</div>

  <div class="mw-disclaimer-banner__body">
    <div class="mw-disclaimer-banner__title">Attention!</div>

    <div class="mw-disclaimer-banner__text mw-lang mw-lang--en">
      The “Formulas” on this page are just examples submitted by players — personal texts someone writes for themselves and rereads regularly.
They are published only as examples / for inspiration.<br /><br />
These are not instructions or advice (medical, psychological, legal, financial, etc.). What helps one person may not work for another — and could even be harmful. Act carefully, rely on your own judgment, and skip anything that doesn’t suit you.
    </div>
  </div>
</div>

    <p>
    <ul>
        <li>
            <a href="/formulas/formula1.<?=$LANG;?>.<?=$ext;?>" target="_blank">
                [👤 stillwaiting] [⏳ 49d 21h 42m] [⭐⭐⭐⭐ 4/5 Hard] [🏆 11]
            </a>
        </li>
    </ul>
</p>



<p id="legend" style=""><sub>
            👤 - player name <br />
            ⏳ - active play time<br />
            ⭐ - difficulty level<br />
            🏆 - game level<br />
</sub></p>

<p>
    Share your <i>Formula</i> on this page! <br />To do that, send it to us:
        
            
            <a href="https://t.me/MindWarriorSupport_bot" target="_blank"
            ><img src="/images/telegram.svg" width="32" style="vertical-align: middle" /></a> 
&nbsp;
            <a href="https://github.com/mindwarriorgame/mindwarriorgame.org/issues" target="_blank"
            ><img src="/images/github.svg" width="32" style="vertical-align: middle" /> 
            </a>

            <br /><br />
    <sub>By submitting your Formula, you irrevocably dedicate it to the public domain under CC0 1.0 Universal and agree you will not revoke or assert any copyright (or related rights) in it against anyone.</sub>

</p>

<?php
$CONTENT = ob_get_contents();
ob_end_clean();

$MENU_SELECTED = "public-formulas";
$MENU = include("includes/menu.$LANG.php");

$TITLE="MindWarrior: Examples of Formulas";

$CSS = ["includes/quick-start.css", "includes/public-formulas.css"];
$JS = [];

include("includes/layout.php");
