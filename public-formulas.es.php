<?php
ob_start();

$ext = getenv('LINK_EXT');
$ACTIVE_MENU = 'public-formulas';
$LANG='es';
?>


    <h2>Fórmulas Públicas</h2>

    <p>Esta página está en desarrollo.</p>

    <p>¡Ayúdanos a construirla compartiendo tu propia Fórmula en público! Puedes encontrar las instrucciones sobre cómo hacerlo aquí:
        <a href="https://github.com/mindwarriorgame/public-formulas/blob/main/README.es.md" target="_blank">
            https://github.com/mindwarriorgame/public-formulas/blob/main/README.es.md
        </a>
    </p>


    <div id="review" class="">


        <!-- vvv --- rendered HTML --- vvv --->



        <!-- ^^^ --- rendered HTML --- ^^^ --->

    </div>

    <p style="display: none">
        <span class="code-highlight">736dd20c-547a-4b69-9c2f-61b3e2e403c2, budismo</span>
    </p>

    <p>
        <a href="#">Ver la siguiente fórmula</a>
    </p>






<?php
$CONTENT = ob_get_contents();
ob_end_clean();

$MENU_SELECTED = "public-formulas";
$MENU = include("includes/menu.$LANG.php");

$TITLE="MindWarrior: Fórmulas Públicas";

$CSS = ["includes/quick-start.css", "includes/public-formulas.css"];

$JS = [];

include("includes/layout.php");
