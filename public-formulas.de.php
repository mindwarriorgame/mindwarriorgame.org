<?php
ob_start();

$ext = getenv('LINK_EXT');

$LANG='de';
?>


    <h2>Öffentliche Formeln</h2>

    <p>Diese Seite befindet sich in der Entwicklung.</p>

    <p>Bitte hilf uns, sie aufzubauen, indem du deine eigene Formel öffentlich teilst! Die Anleitung, wie du das tun kannst, findest du hier:
        <a href="https://github.com/mindwarriorgame/public-formulas/blob/main/README.md" target="_blank">
            https://github.com/mindwarriorgame/public-formulas/blob/main/README.md
        </a>
    </p>

    <div id="review" class="">

        <!-- vvv --- gerendertes HTML --- vvv --->



        <!-- ^^^ --- gerendertes HTML --- ^^^ --->

    </div>

    <p style="display: none">
        <span class="code-highlight">736dd20c-547a-4b69-9c2f-61b3e2e403c2, buddhism</span>
    </p>

    <p>
        <a href="#">Nächste Formel ansehen</a>
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