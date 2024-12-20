<?php
ob_start();

$ext = getenv('LINK_EXT');

require_once("includes/image_tag_renderer.php");

$LANG='es';
?>

    <div id="smooth-purpose" class="faq-item">
        <h3>¿Cuál es el propósito del juego?</h3>
        <p>
            El juego "MindWarrior" fue creado para ayudarte en tu camino de crecimiento personal, desarrollo y transformación.
            El concepto principal del juego – <a href="#formula"><i>Fórmula de firme resolución</i></a> – es tu mensaje inspirador privado
            que escribes para ti mismo y luego revisas regularmente durante el día.
        </p>

        <p>
            Cada vez que revisas tu <i>Fórmula</i>, tus pensamientos regresan a lo que realmente importa para ti.
            Esta práctica ayuda a mantener tu mente clara y enfocada en las cosas más importantes, alejándola de la monotonía, el ruido y las distracciones de la vida cotidiana.
        </p>
    </div>

    <div id="smooth-formula" class="faq-item">
        <h3>¿Qué debo escribir en mi Fórmula?</h3>

        <p>
            La <i>Fórmula de firme resolución</i> es un mensaje de texto libre y privado, donde puedes
            escribir cualquier cosa que tenga significado para ti. Pueden ser tus citas favoritas, mantras, recordatorios, pensamientos sabios
            y observaciones, o cualquier otra cosa; ¡solo tú decides! La única guía es que
            debe motivarte en tu camino personal de transformación y crecimiento.
        </p>
        <p>
            Una <i>Fórmula</i> fuerte <a href="#review">te mantendrá enfocado, motivado y disciplinado</a>. Te apoyará diariamente y te ayudará
            a mantenerte comprometido. Si encuentras que el juego te envía recordatorios constantes sobre revisiones perdidas, o si empiezas a pensar en abandonar el juego,
            tal vez sea una señal de que tu <i>Fórmula</i> necesita una revisión.
        </p>
    </div>

    <div id="smooth-review" class="faq-item">
        <h3>¿Qué sucede cuando reviso mi Fórmula?</h3>

        <p>
            Espiritualmente, cada vez que revisas tu <i>Fórmula de firme resolución</i>, el enfoque de tu mente
            vuelve a las cosas más importantes en tu vida, alejándote de las distracciones y tonterías
            de la vida cotidiana.
        </p>

        <p>
            En cuanto al juego, cuando realizas la revisión sin ser recordado,
            ¡ganas recompensas en el juego!
        </p>

        <p>
            <a href="/images/faq_en/review_plus_score.jpg" class="image-link" target="_blank">
                <?=renderImageTag(200, "images/faq_en/review_plus_score.jpg", "/images/faq_en/review_plus_score.jpg");?>
            </a>
        </p>
    </div>



    <div id="smooth-forgot" class="faq-item">
        <h3>¿Qué sucede si olvido revisar la "Fórmula"?</h3>

        <p>
            Si olvidas revisar tu <i>Fórmula de Firme Resolución</i>, el juego te lo recordará.
            Dependiendo del nivel de dificultad elegido, las omisiones pueden dificultar
            el proceso de desbloquear los niveles posteriores del juego.
        </p>

        <p>
            <a href="/images/faq_en/review_minus_score.jpg" class="image-link" target="_blank">
                <?=renderImageTag(450, "images/faq_en/review_minus_score.jpg", "/images/faq_en/review_minus_score.jpg");?>
            </a>
        </p>

        <p id="smooth-forgot-grumpycat" class="anchor">
            Para acelerar el proceso de desbloqueo, puedes aumentar la frecuencia de revisiones de la <i>Fórmula</i>, pero no más de una vez cada 5 minutos
            (de lo contrario, la revisión no será contabilizada).
        </p>

    </div>


    <div id="smooth-difficulty" class="faq-item">
        <h3>¿Con qué frecuencia necesito revisar mi Fórmula?</h3>

        <p>
            Puedes revisar tu <i>Fórmula</i> tantas veces como quieras, sin embargo, solo se recompensarán las revisiones realizadas al menos
            con 5 minutos de diferencia entre sí (regla de "enfriamiento").
        </p>

        <p>
            La frecuencia de las revisiones y las penalizaciones por omisiones se determinan por el nivel de dificultad del juego,
            que puedes cambiar en cualquier momento usando el comando <span class="code-highlight">/difficulty</span>.
        </p>
    </div>

    <div id="smooth-pause" class="faq-item">
        <h3>¿Cómo tomar un descanso sin penalizaciones?</h3>

        <p>
            Para tomar un descanso, simplemente pausa el juego con el comando <span class="pre">/pause</span>.
        </p>

        <p>
            El juego en pausa no te enviará ninguna notificación ni cambiará tus puntuaciones del juego.
            Tampoco se contará el tiempo de juego activo.
            Para reanudar el juego, simplemente revisa tu <i>Fórmula</i> como de costumbre.
        </p>

        <p>También puedes configurar un intervalo para dormir. El juego se pausará automáticamente (diariamente) durante este tiempo.
            Para configurarlo, vaya al menú <span class="code-highlight">/settings</span> y presione el botón <i>"💤 Programador de sueño"</i>.</p>

    </div>


    <div id="smooth-formula-formatting" class="faq-item">
        <h3>¿Puedo usar formato de texto en la Fórmula?</h3>

        <p>
            El editor de <i>Fórmula</i> admite <a href="https://www.markdownguide.org/cheat-sheet/" target="_blank">sintaxis markdown</a>.
        </p>
        <p>
            <a href="/images/faq_en/markdown.jpg" class="image-link" target="_blank">
                <?=renderImageTag(450, "images/faq_en/markdown.jpg", "/images/faq_en/markdown.jpg");?>
            </a>
        </p>

        <p>También puede utilizar los widgets <span class="code-highlight">{counter}</span> y <span class="code-highlight">{stopwatch}</span>
            para incorporar contadores y cronómetros en su fórmula. Esto puede resultar útil si necesita realizar un seguimiento manual
            de algún progreso.</p>

        <p>
            <a href="/images/faq_en/counter.jpg" class="image-link" target="_blank>">
                <?=renderImageTag(600, "images/faq_en/counter.jpg", "/images/faq_en/counter.jpg");?>
            </a>
        </p>
    </div>

    <div id="smooth-controls" class="faq-item">
        <h3>¿Qué controles tiene el juego?</h3>
        <p>
            El juego admite los siguientes comandos:
        </p>
        <ul>
            <li><span class="pre">/review</span> - 💫 <a href="#review">revisar</a> tu <i>Fórmula</i>
            <li><span class="pre">/pause</span> - ⏸️ <a href="#pause">pausar</a> el juego</li>
            <li><span class="pre">/formula</span> - 🧪 abrir tu <a href="#formula"><i>Fórmula</i></a> en el editor</li>
            <li><span class="pre">/stats</span> - 📊 ver tu progreso en el juego</li>
            <li><span class="pre">/settings</span> - 🔧 ajustes del juego</li>
        </ul>
        <p>
            <a href="/images/faq_en/menu.jpg" class="image-link" target="_blank>">
                <?=renderImageTag(450, "images/faq_en/menu.jpg", "/images/faq_en/menu.jpg");?>
            </a>
        </p>

        <p>
            En la configuración del juego (<span class="pre">/settings</span>) puedes encontrar los siguientes botones:
        </p>

        <ul>
            <li>
                <i>"💤 Programador de sueño"</i>: puedes configurar un intervalo de tiempo en el que el juego se pausará automáticamente, diariamente
            </li>

            <li>
                <i>"💪 Dificultad del juego"</i>: cambia la <a href="#difficulty">dificultad del juego</a>
            </li>

            <li>
                <i>"💾 Datos personales"</i>: <a href="privacy-policy.<?=$LANG;?>.<?=getenv('LINK_EXT');?>">capacidad de examinar los datos que el juego conoce sobre ti</a>
            </li>

            <li>
                <i>"📢 Comentarios"</i> - enlace a un formulario de comentarios
            </li>
        </ul>
    </div>




    <div id="smooth-name" class="faq-item">
        <h3>¿Por qué el juego se llama "MindWarrior"?</h3>

        <div class="quote">
            <p>
                "No podemos resolver nuestros problemas con el mismo pensamiento que utilizamos cuando los creamos."
            </p>
            <p class="quote-reference">– <a href="https://en.wikipedia.org/wiki/Albert_Einstein" target="_blank">Albert Einstein</a></p>
        </div>

        &nbsp;
        <div class="quote">
            <p>
                "Nada puede cambiar para ellos, porque ellos mismos ya no pueden cambiar."
            </p>
            <p class="quote-reference">– <a href="https://en.wikipedia.org/wiki/Michael_Ende" target="_blank">Michael Ende</a></p>
        </div>
        &nbsp;
        <div class="quote">
            <p>
                "La mente precede a todos los estados mentales. La mente es su jefa; todos son obra de la mente. Si con una mente pura una persona habla o actúa, la felicidad le sigue como su sombra que nunca se aparta."
            </p>
            <p class="quote-reference">– <a href="https://en.wikipedia.org/wiki/Buddha" target="_blank">Buda (Dhammapada 1.2)</a></p>
        </div>

        <p>
            La parte de "Mente" se refiere al "yo interior" y los pensamientos personales.
            Para hacer un cambio en la vida, primero debes hacer un cambio en tu mente.
        </p>

        <p>
            La parte de "Guerrero" se refiere a la acción y el esfuerzo persistente. El cambio no sucede mágicamente por sí mismo.
        </p>

        <div class="quote">
            <p>
                "Ayer era inteligente, así que quería cambiar el mundo. Hoy soy sabio, así que estoy cambiando yo mismo."
            </p>
            <p class="quote-reference">– <a href="https://en.wikipedia.org/wiki/Rumi" target="_blank">Rumi</a></p>
        </div>
        &nbsp;
        <div class="quote">
            <p>
                "Sé el cambio que deseas ver en el mundo."
            </p>
            <p class="quote-reference">– <a href="https://en.wikipedia.org/wiki/Mahatma_Gandhi" target="_blank">Mahatma Gandhi</a></p>
        </div>
        &nbsp;
        <div class="quote">
            <p>
                "Todos piensan en cambiar el mundo, pero nadie piensa en cambiarse a sí mismo."
            </p>
            <p class="quote-reference">– <a href="https://en.wikipedia.org/wiki/Leo_Tolstoy" target="_blank">León Tolstói</a></p>
        </div>

        <p id="smooth-name-betterworld" class="anchor">
            Nosotros (los creadores del juego) creemos firmemente que todos pueden hacer una diferencia en el mundo.
            Al cambiarnos a nosotros mismos, contribuimos a hacer del mundo un lugar mejor.
            Convertirnos en mejores versiones de nosotros mismos nos lleva a tomar mejores decisiones, que resultan en mejores acciones y
            resultados para que todos disfruten.
        </p>

        <p class="anchor">
            Por lo tanto, cada vez que revisas tu <a href="#formula"><i>Fórmula de firme resolución</i></a>, no solo estás mejorando tu vida,
            ¡sino también haciendo del mundo un lugar mejor para todos! 🙌
        </p>

        <p>Esto es de lo que se trata el nombre "MindWarrior" ¯\_(ツ)_/¯.</p>

    </div>


    <div id="smooth-formula-example" class="faq-item">
        <h3>¿Puedo ver las Fórmulas de otros jugadores?</h3>

        <p>
            El juego "MindWarrior" se toma muy en serio la privacidad de los jugadores.
            Tu <i>Fórmula de firme resolución</i> se almacena localmente en tu dispositivo y
            el juego nunca la copia ni la envía a sus servidores.
            Por lo tanto, es físicamente imposible ver la <i>Fórmula</i> de un
            jugador aleatorio simplemente porque el juego no tiene acceso a ella.
            (Consulta nuestra <a href="/privacy-policy.<?=$LANG;?>.<?=$ext;?>" target="_blank">Política de privacidad</a> para obtener más detalles.)
        </p>
        <p>
            Sin embargo, <strong>algunos jugadores han compartido voluntariamente sus <i>Fórmulas</i> en público
                en nuestro sitio web</strong>. Estas fórmulas se pueden encontrar
            en la página "<a href="/public-formulas.<?=$LANG;?>.<?=$ext;?>">Fórmulas públicas</a>".
            ¡Siéntete libre de revisarlas!
        </p>
        <p>
            Si te gustaría ayudar a inspirar a otros jugadores compartiendo tu propia <i>Fórmula</i>, sigue
            <a href="https://github.com/mindwarriorgame/public-formulas/blob/main/README.es.md" target="_blank">estas instrucciones</a>.
        </p>
    </div>

    <div id="smooth-share" class="faq-item">
        <h3>¿Puedo compartir mi Fórmula con otros jugadores?</h3>

        <p>
            Consulta la <a href="#formula-example">pregunta anterior</a> para obtener más detalles.
        </p>

    </div>

    <div id="smooth-privacy" class="faq-item">
        <h3>¿Quién puede ver mi Fórmula?</h3>

        <p>
            Consulta la <a href="#formula-example">pregunta anterior</a> para obtener más detalles.
        </p>
    </div>

<?php
$CONTENT = ob_get_contents();
ob_end_clean();


$MENU = include("includes/menu.$LANG.php");

$TITLE="MindWarrior: Preguntas frecuentes";

$CSS = ["/includes/faq_anchors.css"];
$JS = ["/includes/faq_anchors.js"];

include("includes/layout.php");