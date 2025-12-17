<?php
ob_start();

$ext = getenv('LINK_EXT');
$ACTIVE_MENU = 'public-formulas';
$LANG='es';
?>

    <h2>Ejemplos de fórmulas de jugadores</h2>


<div class="mw-disclaimer-banner" role="note" aria-label="Aviso legal">
  <div class="mw-disclaimer-banner__icon" aria-hidden="true">!</div>

  <div class="mw-disclaimer-banner__body">
    
    <div class="mw-disclaimer-banner__text mw-lang mw-lang--es">
      <sub>Las “Fórmulas” de esta página son ejemplos enviados por jugadores: textos personales que las personas escriben para sí mismas y releen con regularidad. Se comparten públicamente solo como inspiración e información general.<br /><br />

No son instrucciones ni asesoramiento profesional (médico, de salud mental/psicológico, legal, financiero ni de ningún otro tipo), y MindWarrior no las verifica. Lo que ayuda a una persona puede no ayudar a otra e incluso podría ser perjudicial. Usa tu propio criterio, adapta con cautela y omite cualquier cosa que no te parezca adecuada. Si necesitas ayuda profesional o estás en crisis, busca apoyo de un profesional cualificado o de los servicios de emergencia locales.
</sub></div>
  </div>
</div>

    <p>
    <ul>
        <li>
            <a href="/formulas/formula1.<?=$LANG;?>.<?=$ext;?>" target="_blank">
                Fórmula de ejemplo 1 [⏳ 49d 21h 42m] [⭐⭐⭐⭐ 4/5 Difícil] [🏆 11]
            </a>
        </li>
    </ul>
</p>



<p id="legend" style=""><sub>
            ⏳ - tiempo de juego activo en el momento en que se envió la <i>Fórmula</i> de ejemplo<br />
            ⭐ - nivel de dificultad en el que estaba jugando el jugador<br />
            🏆 - nivel del jugador en el juego<br />
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
    <sub>Política de envío: al enviar una Fórmula para su publicación, confirmas que es tu obra original (sin texto con derechos de autor), que no incluye datos personales de nadie (incluidos nombres/datos de contacto) y que no es difamatoria, de odio ni dañina (incluidas instrucciones de autolesión/violencia/actividades ilegales). Si la publicamos, aceptas liberarla bajo CC0 (dominio público) y entiendes que podemos editar, rechazar o eliminar envíos en cualquier momento. Para denunciar una Fórmula pública o solicitar su retirada, contáctanos mediante los enlaces anteriores. Solo publicamos una pequeña selección y podemos rechazar cualquier envío por cualquier motivo.</sub>

</p>

<?php
$CONTENT = ob_get_contents();
ob_end_clean();

$MENU_SELECTED = "public-formulas";
$MENU = include("includes/menu.$LANG.php");

$TITLE="MindWarrior: Ejemplos de fórmulas";

$CSS = ["includes/quick-start.css", "includes/public-formulas.css"];
$JS = [];

include("includes/layout.php");
?>
