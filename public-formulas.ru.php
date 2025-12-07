<?php
ob_start();

$ext = getenv('LINK_EXT');
$ACTIVE_MENU = 'public-formulas';
$LANG='ru';
?>

    <h2>Примеры Формул игроков</h2>

<p>Эта страница находится в разработке.</p>

<p>
    Пожалуйста, помогите нам создать её, поделившись своей формулой публично!<br />
    Пожалуйста, свяжитесь с нами здесь:
    <img src="/images/telegram.svg" width="20" style="vertical-align: middle" />
    <a href="https://t.me/MindWarriorSupport_bot" target="_blank">
        MindWarrior Support Bot
    </a>
</p>

<p>
    <ul>
        <li>
            <a href="/formulas/formula1.<?=$LANG;?>.<?=$ext;?>" target="_blank">
                Пример 1, активное время игры: 48d 11h 59m, сложность: Сложно, уровень: 10
            </a>
        </li>
    </ul>
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