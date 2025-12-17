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
    
    <div class="mw-disclaimer-banner__text mw-lang mw-lang--en">
      <sub>The “Formulas” on this page are examples submitted by players — personal texts people write for themselves and reread regularly. They’re shared publicly only for inspiration and general information.<br /><br />

They are not instructions or professional advice (medical, mental health/psychological, legal, financial, or otherwise), and MindWarrior does not verify them. What helps one person may not help another and could be harmful. Use your own judgment, adapt cautiously, and skip anything that doesn’t feel right. If you need professional help or are in crisis, seek support from a qualified professional or local emergency services.
</sub></div>
  </div>
</div>

    <p>
    <ul>
        <li>
            <a href="/formulas/formula1.<?=$LANG;?>.<?=$ext;?>" target="_blank">
                Example Formula 1 [⏳ 49d 21h 42m] [⭐⭐⭐⭐ 4/5 Hard] [🏆 11]
            </a>
        </li>
    </ul>
</p>



<p id="legend" style=""><sub>
            ⏳ - active play time at the moment the sample <i>Formula</i> was submitted<br />
            ⭐ - difficulty level at which the player was playing<br />
            🏆 - player's game level<br />
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
    <sub>Submission policy: by submitting a Formula for publication, you confirm it’s your original work (no copyrighted text), it doesn’t include personal data about anyone (including names/contact details), and it isn’t defamatory, hateful, or harmful (including self-harm/violence/illegal instructions). If we publish it, you agree to release it under CC0 (public domain), and you understand we may edit, reject, or remove submissions at any time. To report a Public Formula or request removal, please reach us using the links above. We only publish a small selection and may refuse any submission for any reason.</sub>

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
