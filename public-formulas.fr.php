<?php
ob_start();

$ext = getenv('LINK_EXT');
$ACTIVE_MENU = 'public-formulas';
$LANG='fr';
?>

    <h2>Exemples de Formules de joueurs</h2>


<div class="mw-disclaimer-banner" role="note" aria-label="Avertissement">
  <div class="mw-disclaimer-banner__icon" aria-hidden="true">!</div>

  <div class="mw-disclaimer-banner__body">
    <div class="mw-disclaimer-banner__title">Attention&nbsp;!</div>

    <div class="mw-disclaimer-banner__text mw-lang mw-lang--fr">
      Les «&nbsp;Formules&nbsp;» sur cette page ne sont que des exemples soumis par des joueurs — des textes personnels que l’on écrit pour soi-même et que l’on relit régulièrement.
Elles sont publiées uniquement à titre d’exemples / d’inspiration.<br /><br />
Il ne s’agit pas d’instructions ni de conseils (médicaux, psychologiques, juridiques, financiers, etc.). Ce qui aide une personne peut ne pas fonctionner pour une autre — et pourrait même être nuisible. Agissez avec prudence, fiez-vous à votre propre jugement et ignorez tout ce qui ne vous convient pas.
    </div>
  </div>
</div>

    <p>
    <ul>
        <li>
            <a href="/formulas/formula1.<?=$LANG;?>.<?=$ext;?>" target="_blank">
                [👤 stillwaiting] [⏳ 49d 21h 42m] [⭐⭐⭐⭐ 4/5 Difficile] [🏆 11]
            </a>
        </li>
    </ul>
</p>



<p id="legend" style=""><sub>
            👤 - nom du joueur <br />
            ⏳ - temps de jeu actif<br />
            ⭐ - niveau de difficulté<br />
            🏆 - niveau du jeu<br />
</sub></p>

<p>
    Partagez votre <i>Formule</i> sur cette page&nbsp;! <br />Pour ce faire, envoyez-la-nous&nbsp;:
        
            
            <a href="https://t.me/MindWarriorSupport_bot" target="_blank"
            ><img src="/images/telegram.svg" width="32" style="vertical-align: middle" /></a> 
&nbsp;
            <a href="https://github.com/mindwarriorgame/mindwarriorgame.org/issues" target="_blank"
            ><img src="/images/github.svg" width="32" style="vertical-align: middle" /> 
            </a>

            <br /><br />
    <sub>En soumettant votre Formule, vous la placez irrévocablement dans le domaine public sous CC0 1.0 Universal et acceptez de ne pas révoquer ni faire valoir de droits d’auteur (ou droits connexes) à son égard contre quiconque.</sub>

</p>

<?php
$CONTENT = ob_get_contents();
ob_end_clean();

$MENU_SELECTED = "public-formulas";
$MENU = include("includes/menu.$LANG.php");

$TITLE="MindWarrior : Exemples de Formules";

$CSS = ["includes/quick-start.css", "includes/public-formulas.css"];
$JS = [];

include("includes/layout.php");
