<?php
ob_start();

$ext = getenv('LINK_EXT');
$ACTIVE_MENU = 'public-formulas';
$LANG='fr';
?>

    <h2>Exemples de formules de joueurs</h2>


<div class="mw-disclaimer-banner" role="note" aria-label="Avertissement">
  <div class="mw-disclaimer-banner__icon" aria-hidden="true">!</div>

  <div class="mw-disclaimer-banner__body">
    
    <div class="mw-disclaimer-banner__text mw-lang mw-lang--fr">
      <sub>Les « formules » sur cette page sont des exemples soumis par des joueurs — des textes personnels que chacun écrit pour soi-même et relit régulièrement. Elles sont partagées publiquement uniquement à titre d’inspiration et d’information générale.<br /><br />

Elles ne constituent pas des instructions ni des conseils professionnels (médicaux, de santé mentale/psychologiques, juridiques, financiers ou autres), et MindWarrior ne les vérifie pas. Ce qui aide une personne peut ne pas aider une autre et peut même être nuisible. Faites preuve de discernement, adaptez avec prudence et ignorez tout ce qui ne vous convient pas. Si vous avez besoin d’une aide professionnelle ou si vous êtes en crise, demandez du soutien auprès d’un professionnel qualifié ou des services d’urgence locaux.
</sub></div>
  </div>
</div>

    <p>
    <ul>
        <li>
            <a href="/formulas/formula1.<?=$LANG;?>.<?=$ext;?>" target="_blank">
                Exemple de formule 1 [⏳ 49j 21h 42m] [⭐⭐⭐⭐ 4/5 Difficile] [🏆 11]
            </a>
        </li>
    </ul>
</p>



<p id="legend" style=""><sub>
            ⏳ - temps de jeu actif au moment où l’exemple de <i>Formule</i> a été soumis<br />
            ⭐ - niveau de difficulté auquel le joueur jouait<br />
            🏆 - niveau du joueur dans le jeu<br />
</sub></p>

<p>
    Partagez votre <i>Formule</i> sur cette page ! <br />Pour cela, envoyez-la-nous :
        
            
            <a href="https://t.me/MindWarriorSupport_bot" target="_blank"
            ><img src="/images/telegram.svg" width="32" style="vertical-align: middle" /></a> 
&nbsp;
            <a href="https://github.com/mindwarriorgame/mindwarriorgame.org/issues" target="_blank"
            ><img src="/images/github.svg" width="32" style="vertical-align: middle" /> 
            </a>

            <br /><br />
    <sub>Politique de soumission : en soumettant une Formule pour publication, vous confirmez qu’il s’agit de votre œuvre originale (sans texte protégé par le droit d’auteur), qu’elle ne contient pas de données personnelles sur qui que ce soit (y compris des noms/coordonnées), et qu’elle n’est pas diffamatoire, haineuse ou dangereuse (y compris des instructions d’automutilation/de violence/d’activités illégales). Si nous la publions, vous acceptez de la placer sous licence CC0 (domaine public) et vous comprenez que nous pouvons modifier, refuser ou retirer des soumissions à tout moment. Pour signaler une Formule publique ou demander sa suppression, contactez-nous via les liens ci-dessus. Nous ne publions qu’une petite sélection et pouvons refuser toute soumission pour quelque raison que ce soit.</sub>

</p>

<?php
$CONTENT = ob_get_contents();
ob_end_clean();

$MENU_SELECTED = "public-formulas";
$MENU = include("includes/menu.$LANG.php");

$TITLE="MindWarrior : Exemples de formules";

$CSS = ["includes/quick-start.css", "includes/public-formulas.css"];
$JS = [];

include("includes/layout.php");
?>
