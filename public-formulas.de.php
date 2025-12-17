<?php
ob_start();

$ext = getenv('LINK_EXT');
$ACTIVE_MENU = 'public-formulas';
$LANG='de';
?>

    <h2>Beispiele für Formeln</h2>


<div class="mw-disclaimer-banner" role="note" aria-label="Haftungsausschluss">
  <div class="mw-disclaimer-banner__icon" aria-hidden="true">!</div>

  <div class="mw-disclaimer-banner__body">
    <div class="mw-disclaimer-banner__title">Achtung!</div>

    <div class="mw-disclaimer-banner__text mw-lang mw-lang--de">
      Die „Formeln“ auf dieser Seite sind lediglich Beispiele, die von Spieler:innen eingereicht wurden — persönliche Texte, die jemand für sich selbst schreibt und regelmäßig erneut liest.
Sie werden nur als Beispiele / zur Inspiration veröffentlicht.<br /><br />
Dies sind keine Anweisungen oder Ratschläge (medizinisch, psychologisch, rechtlich, finanziell usw.). Was einer Person hilft, muss für eine andere nicht funktionieren — und könnte sogar schädlich sein. Handle sorgfältig, verlasse dich auf dein eigenes Urteilsvermögen und überspringe alles, was nicht zu dir passt.
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
            👤 – Spielername <br />
            ⏳ – aktive Spielzeit<br />
            ⭐ – Schwierigkeitsgrad<br />
            🏆 – Spiellevel<br />
</sub></p>

<p>
    Teile deine <i>Formel</i> auf dieser Seite! <br />Dazu sende sie uns:
        
            
            <a href="https://t.me/MindWarriorSupport_bot" target="_blank"
            ><img src="/images/telegram.svg" width="32" style="vertical-align: middle" /></a> 
&nbsp;
            <a href="https://github.com/mindwarriorgame/mindwarriorgame.org/issues" target="_blank"
            ><img src="/images/github.svg" width="32" style="vertical-align: middle" /> 
            </a>

            <br /><br />
    <sub>Mit dem Einreichen deiner Formel widmest du sie unwiderruflich der Gemeinfreiheit unter CC0 1.0 Universal und erklärst dich damit einverstanden, dass du keine Urheberrechte (oder verwandte Schutzrechte) daran gegenüber irgendjemandem widerrufen oder geltend machen wirst.</sub>

</p>

<?php
$CONTENT = ob_get_contents();
ob_end_clean();

$MENU_SELECTED = "public-formulas";
$MENU = include("includes/menu.$LANG.php");

$TITLE="MindWarrior: Beispiele für Formeln";

$CSS = ["includes/quick-start.css", "includes/public-formulas.css"];
$JS = [];

include("includes/layout.php");
?>
