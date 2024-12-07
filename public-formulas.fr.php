<?php
ob_start();

$ext = getenv('LINK_EXT');
$ACTIVE_MENU = 'public-formulas';
$LANG='fr';
?>


    <h2>Formules Publiques</h2>

    <p>Cette page est en cours de développement.</p>

    <p>Aidez-nous à la construire en partageant votre propre Formule en public ! Vous pouvez trouver les instructions pour ce faire ici :
        <a href="https://github.com/mindwarriorgame/public-formulas/blob/main/README.md" target="_blank">
            https://github.com/mindwarriorgame/public-formulas/blob/main/README.md
        </a>
    </p>


    <div id="review" class="">


        <!-- vvv --- rendu HTML --- vvv --->


        <!-- ^^^ --- rendu HTML --- ^^^ --->


    </div>

    <p style="display: none">
        <span class="code-highlight">736dd20c-547a-4b69-9c2f-61b3e2e403c2, bouddhisme</span>
    </p>

    <p>
        <a href="#">Voir la prochaine formule</a>
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