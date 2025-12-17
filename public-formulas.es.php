<?php
ob_start();

$ext = getenv('LINK_EXT');
$ACTIVE_MENU = 'public-formulas';
$LANG='es';
?>

    <h2>Ejemplos de Fórmulas de jugadores</h2>


<div class="mw-disclaimer-banner" role="note" aria-label="Descargo de responsabilidad">
  <div class="mw-disclaimer-banner__icon" aria-hidden="true">!</div>

  <div class="mw-disclaimer-banner__body">
    <div class="mw-disclaimer-banner__title">¡Atención!</div>

    <div class="mw-disclaimer-banner__text mw-lang mw-lang--es">
      Las “Fórmulas” de esta página son solo ejemplos enviados por jugadores: textos personales que alguien escribe para sí mismo y relee con regularidad.
Se publican únicamente como ejemplos / para inspirarse.<br /><br />
No son instrucciones ni consejos (médicos, psicológicos, legales, financieros, etc.). Lo que ayuda a una persona puede no funcionar para otra — e incluso podría ser perjudicial. Actúa con cuidado, confía en tu propio criterio y omite cualquier cosa que no te sirva.
    </div>
  </div>
</div>

    <p>
    <ul>
        <li>
            <a href="/formulas/formula1.<?=$LANG;?>.<?=$ext;?>" target="_blank">
                [👤 stillwaiting] [⏳ 49d 21h 42m] [⭐⭐⭐⭐ 4/5 Difícil] [🏆 11]
            </a>
        </li>
    </ul>
</p>



<p id="legend" style=""><sub>
            👤 - nombre del jugador <br />
            ⏳ - tiempo de juego activo<br />
            ⭐ - nivel de dificultad<br />
            🏆 - nivel del juego<br />
</sub></p>

<p>
    ¡Comparte tu <i>Fórmula</i> en esta página! <br />Para hacerlo, envíanosla:
        
            
            <a href="https://t.me/MindWarriorSupport_bot" target="_blank"
            ><img src="/images/telegram.svg" width="32" style="vertical-align: middle" /></a> 
&nbsp;
            <a href="https://github.com/mindwarriorgame/mindwarriorgame.org/issues" target="_blank"
            ><img src="/images/github.svg" width="32" style="vertical-align: middle" /> 
            </a>

            <br /><br />
    <sub>Al enviar tu Fórmula, la dedicas de forma irrevocable al dominio público bajo CC0 1.0 Universal y aceptas que no revocarás ni harás valer ningún derecho de autor (o derechos relacionados) sobre ella contra nadie.</sub>

</p>

<?php
$CONTENT = ob_get_contents();
ob_end_clean();

$MENU_SELECTED = "public-formulas";
$MENU = include("includes/menu.$LANG.php");

$TITLE="MindWarrior: Ejemplos de Fórmulas";

$CSS = ["includes/quick-start.css", "includes/public-formulas.css"];
$JS = [];

include("includes/layout.php");
