<?php
ob_start();

$ext = getenv('LINK_EXT');
$ACTIVE_MENU = 'public-formulas';
$LANG='es';
?>


    <h2>Fórmulas Públicas</h2>

<p>Esta página está en desarrollo.</p>

<p>
    Por favor, ayúdanos a desarrollarla compartiendo tu propia fórmula públicamente.<br />
    Por favor, contáctanos aquí:
    <img src="/images/telegram.svg" width="20" style="vertical-align: middle" />
    <a href="https://t.me/MindWarriorSupport_bot" target="_blank">
        MindWarrior Support Bot
    </a>
</p>

<p>
    <ul>
        <li>
            <a href="/formulas/formula1.<?=$LANG;?>.<?=$ext;?>" target="_blank">
                Ejemplo 1, tiempo de juego activo: 48d 11h 59m, dificultad: Difícil, nivel: 10
            </a>
        </li>
    </ul>
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
