<?php
ob_start();

$ext = getenv('LINK_EXT');

$LANG='ru';
?>

    <h2>Примеры Формул игроков</h2>

    <p>Эта страница находится в разработке.</p>

    <p>Пожалуйста, помогите нам с ее наполнением, поделившись своей Формулой! Инструкции как это сделать можно найти здесь:
        <a href="https://github.com/mindwarriorgame/public-formulas/blob/main/README.ru.md" target="_blank">
            https://github.com/mindwarriorgame/public-formulas/blob/main/README.ru.md
        </a>
    </p>


    <div id="review" class="">




        <!-- vvv --- rendered HTML --- vvv -->



        <!-- ^^^ --- rendered HTML --- ^^^ --->







    </div>


    <p style="display:none">
        <span class="code-highlight">736dd20c-547a-4b69-9c2f-61b3e2e403c2, буддизм</span>
    </p>


    <p>
    <a href="#">Следующая формула</a>
    </p>



<?php
$CONTENT = ob_get_contents();
ob_end_clean();

$MENU_SELECTED = "public-formulas";
$MENU = include("includes/menu.$LANG.php");

$TITLE="MindWarrior: Примеры Формул";

$CSS = ["includes/quick-start.css", "includes/public-formulas.css"];
$JS = [];

include("includes/layout.php");