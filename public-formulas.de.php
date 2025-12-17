<?php
ob_start();

$ext = getenv('LINK_EXT');
$ACTIVE_MENU = 'public-formulas';
$LANG='de';
?>

    <h2>Beispiele für Formeln von Spieler:innen</h2>


<div class="mw-disclaimer-banner" role="note" aria-label="Haftungsausschluss">
  <div class="mw-disclaimer-banner__icon" aria-hidden="true">!</div>

  <div class="mw-disclaimer-banner__body">
    
    <div class="mw-disclaimer-banner__text mw-lang mw-lang--de">
      <sub>Die „Formeln“ auf dieser Seite sind Beispiele, die von Spieler:innen eingereicht wurden – persönliche Texte, die Menschen für sich selbst schreiben und regelmäßig erneut lesen. Sie werden öffentlich nur zur Inspiration und allgemeinen Information geteilt.<br /><br />

Sie sind keine Anleitungen oder professionelle Beratung (medizinisch, psychisch/psychologisch, rechtlich, finanziell oder anderweitig), und MindWarrior überprüft sie nicht. Was einer Person hilft, kann einer anderen nicht helfen und könnte schädlich sein. Nutze dein eigenes Urteilsvermögen, passe Inhalte vorsichtig an und überspringe alles, was sich nicht richtig anfühlt. Wenn du professionelle Hilfe brauchst oder dich in einer Krise befindest, wende dich an eine qualifizierte Fachperson oder den lokalen Notruf.</sub></div>
  </div>
</div>

    <p>
    <ul>
        <li>
            <a href="/formulas/formula1.<?=$LANG;?>.<?=$ext;?>" target="_blank">
                Beispiel-Formel 1 [⏳ 49d 21h 42m] [⭐⭐⭐⭐ 4/5 Schwer] [🏆 11]
            </a>
        </li>
    </ul>
</p>



<p id="legend" style=""><sub>
            ⏳ – aktive Spielzeit zum Zeitpunkt, als die Beispiel-<i>Formel</i> eingereicht wurde<br />
            ⭐ – Schwierigkeitsgrad, auf dem die Person gespielt hat<br />
            🏆 – Spiellevel der Person<br />
</sub></p>

<p>
    Teile deine <i>Formel</i> auf dieser Seite! <br />Dafür sende sie uns:
        
            
            <a href="https://t.me/MindWarriorSupport_bot" target="_blank"
            ><img src="/images/telegram.svg" width="32" style="vertical-align: middle" /></a> 
&nbsp;
            <a href="https://github.com/mindwarriorgame/mindwarriorgame.org/issues" target="_blank"
            ><img src="/images/github.svg" width="32" style="vertical-align: middle" /> 
            </a>

            <br /><br />
    <sub>Einreichungsrichtlinie: Mit dem Einreichen einer Formel zur Veröffentlichung bestätigst du, dass es sich um dein eigenes Originalwerk handelt (keine urheberrechtlich geschützten Texte), dass sie keine personenbezogenen Daten über irgendjemanden enthält (einschließlich Namen/Kontaktdaten) und dass sie nicht verleumderisch, hasserfüllt oder schädlich ist (einschließlich Selbstverletzung/Gewalt/Anleitungen zu illegalen Handlungen). Wenn wir sie veröffentlichen, stimmst du zu, sie unter CC0 (Public Domain) freizugeben, und du verstehst, dass wir Einsendungen jederzeit bearbeiten, ablehnen oder entfernen können. Um eine öffentliche Formel zu melden oder die Entfernung zu beantragen, kontaktiere uns bitte über die Links oben. Wir veröffentlichen nur eine kleine Auswahl und können Einsendungen aus beliebigem Grund ablehnen.</sub>

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
