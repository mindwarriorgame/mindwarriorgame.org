<?php
ob_start();

$ext = getenv('LINK_EXT');
$ACTIVE_MENU = 'public-formulas';
$LANG='fr';
?>


    <h2>Formules Publiques</h2>

<p>Cette page est en cours de développement.</p>

<p>
    Veuillez nous aider à la construire en partageant votre propre formule publiquement !<br />
    Veuillez nous contacter ici :
    <img src="/images/telegram.svg" width="20" style="vertical-align: middle" />
    <a href="https://t.me/MindWarriorSupport_bot" target="_blank">
        MindWarrior Support Bot
    </a>
</p>

<p>
    <ul>
        <li>
            <a href="/formulas/formula1.<?=$LANG;?>.<?=$ext;?>" target="_blank">
                Exemple 1, temps de jeu actif : 48d 11h 59m, difficulté : Difficile, niveau : 10
            </a>
        </li>
    </ul>
</p>





<?php
$CONTENT = ob_get_contents();
ob_end_clean();

$MENU_SELECTED = "public-formulas";
$MENU = include("includes/menu.$LANG.php");

$TITLE="MindWarrior: Formules Publiques";

$CSS = ["includes/quick-start.css", "includes/public-formulas.css"];

$JS = [];

include("includes/layout.php");