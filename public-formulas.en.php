<?php
ob_start();

$ext = getenv('LINK_EXT');

$LANG='en';
?>


    <h2>Public Formulas</h2>

<p>This page is under development.</p>

    <p>Please help us to build it by sharing your own Formula in public! You can find the instructions how to do that here:
        <a href="https://github.com/mindwarriorgame/public-formulas/blob/main/README.md" target="_blank">
            https://github.com/mindwarriorgame/public-formulas/blob/main/README.md
        </a>
    </p>


    <div id="review" class="">


        <!-- vvv --- rendered HTML --- vvv --->


        <!-- ^^^ --- rendered HTML --- ^^^ --->


    </div>

    <p style="display: none">
        <span class="code-highlight">736dd20c-547a-4b69-9c2f-61b3e2e403c2, buddhism</span>
    </p>

    <p>
        <a href="#">See next formula</a>
    </p>






<?php
$CONTENT = ob_get_contents();
ob_end_clean();

$MENU_SELECTED = "public-formulas";
$MENU = include("includes/menu.$LANG.php");

$TITLE="MindWarrior: Public Formulas";

$CSS = ["includes/quick-start.css", "includes/public-formulas.css"];

$JS = [];

include("includes/layout.php");