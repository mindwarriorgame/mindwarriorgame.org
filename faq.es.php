<?php
ob_start();

$ext = getenv('LINK_EXT');

require_once("includes/image_tag_renderer.php");
?>

    <div id="smooth-purpose" class="faq-item">
        <h3>¿Cuál es el propósito del juego?</h3>
        <p>
            El juego "MindWarrior" fue creado para ayudarte en tu crecimiento personal y desarrollo.
            Lo logra manteniéndote enfocado en tus sueños y aspiraciones.
            El concepto principal del juego – <a href="#formula"><i>Fórmula de firme resolución</i></a> – es tu mensaje inspirador privado
            que escribes para ti mismo y luego revisas regularmente durante el día.
        </p>

        <p>
            Cada vez que revisas la <i>Fórmula</i>, tus pensamientos regresan a lo que realmente importa para ti.
            Esta práctica te ayudará a mantener tu mente clara y enfocada, alejándola del ruido y las distracciones de la vida cotidiana.
        </p>

    </div>

    <div id="smooth-formula" class="faq-item">
        <h3>¿Qué debería escribir en mi Fórmula?</h3>

        <p>
            La <i>Fórmula de firme resolución</i> es un mensaje de texto libre y privado, en el que puedes
            expresar cualquier cosa que sea significativa para ti. Pueden ser tus citas, mantras, recordatorios, pensamientos
            y observaciones sabias, o cualquier otra cosa que decidas. ¡La única guía es que debe
            motivarte hacia tu crecimiento y desarrollo personal!
        </p>
        <p>
            Una <i>Fórmula</i> fuerte <a href="#review">te mantendrá enfocado, motivado y disciplinado</a>. Debe apoyarte en tu viaje por la vida y ayudarte
            a mantenerte comprometido
            y enérgico. Si te encuentras recibiendo constantes recordatorios del juego sobre revisiones perdidas, o si estás pensando en dejar el juego,
            podría ser una señal de que tu <i>Fórmula</i> necesita una revisión.
        </p>

    </div>

    <div id="smooth-review" class="faq-item">
        <h3>¿Qué sucede cuando reviso mi Fórmula?</h3>

        <p>
            Espiritualmente, cuando revisas tu <i>Fórmula de firme resolución</i>,
            tu mente vuelve a lo que realmente importa, alejándote de las distracciones y tonterías
            de la vida cotidiana.
        </p>

        <p>
            En términos del juego, cuando realizas la revisión sin que se te recuerde,
            ¡ganarás recompensas del juego!
        </p>

        <p>
            <a href="/images/faq_en/review_plus_score.jpg" class="image-link" target="_blank">
                <?=renderImageTag(200, "images/faq_en/review_plus_score.jpg", "/images/faq_en/review_plus_score.jpg");?>
            </a>
        </p>

        <p>
            Puedes usar el comando <span class="pre">/stats</span> para ver el progreso de tu juego.
        </p>

    </div>


    <div id="smooth-forgot" class="faq-item">
        <h3>¿Qué sucede si olvido revisar mi Fórmula?</h3>

        <p>
            Si olvidas revisar tu <i>Fórmula de firme resolución</i> a tiempo, el juego te recordará con una notificación.
            Si la ignoras, entonces (dependiendo del nivel de dificultad) podrías ser penalizado.
            Por favor, <a href="#difficulty">consulta la tabla en la siguiente respuesta</a> para más detalles.
        </p>

        <p>
            <a href="/images/faq_en/review_minus_score.jpg" class="image-link" target="_blank">
                <?=renderImageTag(200, "images/faq_en/review_minus_score.jpg", "/images/faq_en/review_minus_score.jpg");?>
            </a>
        </p>

    </div>


    <div id="smooth-difficulty" class="faq-item">
        <h3>¿Con qué frecuencia debo revisar mi Fórmula?</h3>

        <p>
            Puedes revisar tu <i>Fórmula</i> tantas veces como quieras, pero solo las revisiones realizadas con al menos
            5 minutos de diferencia entre ellas serán recompensadas (regla de "enfriamiento").
        </p>

        <p>
            La frecuencia de las revisiones y las penalizaciones por las revisiones no realizadas se determinan por el nivel de dificultad del juego,
            el cual puedes cambiar en cualquier momento usando el comando <span class="code-highlight">/difficulty</span>.
        </p>

        <p>
            Si olvidas revisar tu <i>Fórmula</i>, entonces (dependiendo del nivel de dificultad) podrías ser penalizado.
        </p>

        <table>
            <tr>
                <td>Principiante</td>
                <td>
                    ⏰ revisar una vez cada 6 horas<br/>
                    😻 recompensa por una revisión antes del recordatorio: 2 estrellas<br/>
                    😺 recompensa por una revisión después del recordatorio: 1 estrella<br/>
                    😼 sin penalización
                </td>
            </tr>
            <tr>
                <td>Fácil</td>
                <td>⏰ revisar una vez cada 3 horas<br/>
                    😻 recompensa por una revisión antes del recordatorio: 2 estrellas<br/>
                    😺 recompensa por una revisión después del recordatorio: 1 estrella<br/>
                    😼 penalización por la primera falta: sin penalización<br/>
                    😿 penalización por cada <a href="#next_penalty">falta consecuente(*)</a>: -3 estrellas<br />
                </td>
            </tr>
            <tr>
                <td>Normal</td>
                <td>⏰ revisar una vez cada 1 hora y 30 minutos<br/>
                    😺 recompensa por una revisión antes del recordatorio: 1 estrella<br/>
                    😺 recompensa por una revisión después del recordatorio: 1 estrella<br/>
                    😿 penalización por la primera falta: -3 estrellas<br/>
                    🙀 penalización por cada <a href="#next_penalty">falta consecuente(*)</a>: -6 estrellas<br />
                </td>
            </tr>
            <tr>
                <td>Difícil</td>
                <td>⏰⚠️ revisar una vez cada 1 hora, <u>sin recordatorios</u><br/>
                    😺 recompensa por una revisión: 1 estrella<br/>
                    😿 penalización por la primera falta: -3 estrellas<br/>
                    🙀 penalización por cada <a href="#next_penalty">falta consecuente(*)</a>: -6 estrellas<br />
                </td>
            </tr>
            <tr>
                <td>Experto</td>
                <td>⏰⚠️ revisar una vez cada 45 minutos, <u>sin recordatorios</u><br/>
                    😺 recompensa por una revisión: 1 estrella<br/>
                    🙀 penalización por cada falta: -6 estrellas<br />
                </td>
            </tr>
        </table>

        <p id="next_penalty">
            (*) Una vez que realices una revisión, el "contador de penalización" se reinicia. Supongamos que tu nivel de dificultad es "Fácil" y
            olvidas algunas revisiones. Esto es lo que sucede:
        <ul>
            <li>
                ⏰ el juego envía una notificación de recordatorio
                <ul><li>😼 (en 15 minutos) primera falta: sin penalización</li></ul>
            </li>
            <li>
                ⏰ (en 2 horas y 45 minutos) el juego envía una notificación de recordatorio
                <ul><li>😿 (en 15 minutos) falta consecuente: -3 estrellas</li></ul>
            </li>
            <li>
                ⏰ (en 2 horas y 45 minutos) el juego envía una notificación de recordatorio
                <ul><li>😿 (en 15 minutos) falta consecuente: -3 estrellas</li></ul>
            </li>
            <li>
                <strong>😺 realizas tu revisión de la <i>Fórmula</i>: +1 estrella</strong>
                <ul><li>el "contador de penalización" se reinicia</li></ul>
            </li>
            <li>
                ⏰ (en 2 horas y 45 minutos) el juego envía una notificación de recordatorio
                <ul><li><strong>😼 (en 15 minutos) primera falta: sin penalización</strong></li></ul>
            </li>
            <li>
                ⏰ el juego envía una notificación de recordatorio
                <ul><li>😿 (en 15 minutos) falta consecuente: -3 estrellas</li></ul>
            </li>
        </ul>
        </p>

    </div>



    <div id="smooth-pause" class="faq-item">
        <h3>¿Cómo tomar un descanso sin penalizaciones?</h3>

        <p>
            Para tomar un descanso, simplemente pausa el juego con el comando <span class="pre">/pause</span>.
        </p>

        <p>
            El juego en pausa no te enviará notificaciones ni cambiará tus puntuaciones.
            El contador de tiempo de juego activo tampoco estará contando.
        </p>

        <p>
            Para reanudar el juego, simplemente revisa tu <i>Fórmula</i> como de costumbre.
        </p>
    </div>

    <div id="smooth-formula-formatting" class="faq-item">
        <h3>¿Puedo usar formato de texto en la Fórmula?</h3>

        <p>
            El editor de <i>Fórmula</i> admite <a href="https://www.markdownguide.org/cheat-sheet/" target="_blank">sintaxis markdown</a>.
        </p>
        <p>
            <a href="/images/faq_en/markdown.jpg" class="image-link" target="_blank">
                <?=renderImageTag(300, "images/faq_en/markdown.jpg", "/images/faq_en/markdown.jpg");?>
            </a>
        </p>
    </div>

    <div id="smooth-controls" class="faq-item">
        <h3>️¿Qué controles tiene el juego?</h3>
        <p>
            Para comenzar a jugar, solo necesitas 3 comandos básicos:
        </p>
        <ul>
            <li><strong><span class="pre">/review</span></strong> - 💫 <a href="#review">revisar</a> tu <i>Fórmula</i></li>
            <li><strong><span class="pre">/pause</span></strong> - ⏸️ <a href="#pause">pausar</a> el juego</li>
            <li><strong><span class="pre">/formula</span></strong> - 🧪 abrir tu <a href="#formula"><i>Fórmula</i></a> en el editor</li>
        </ul>
        <p>
            Comandos avanzados:
        </p>
        <ul>
            <li><span class="pre">/stats</span> - 🌟 ver tu progreso en el juego</li>
            <li><span class="pre">/difficulty</span> - 💪 cambiar el nivel de <a href="#difficulty">dificultad</a> (frecuencia de tus revisiones)</li>
            <li><span class="pre">/data</span> - 🗂️ ver y gestionar tus datos en bruto</li>
        </ul>
        <p>
            <a href="/images/faq_en/menu.jpg" class="image-link" target="_blank">
                <?=renderImageTag(300, "images/faq_en/menu.jpg", "/images/faq_en/menu.jpg");?>
            </a>
        </p>
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

        <p>
            Nosotros (los creadores del juego) creemos firmemente que todos pueden hacer una diferencia en el mundo.
            Al cambiarnos a nosotros mismos, contribuimos a hacer del mundo un lugar mejor.
            Convertirnos en mejores versiones de nosotros mismos nos lleva a tomar mejores decisiones, que resultan en mejores acciones y
            resultados para que todos disfruten.
        </p>

        <p>
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
            (Consulta nuestra <a href="/privacy-policy.es.<?=$ext;?>" target="_blank">Política de privacidad</a> para obtener más detalles.)
        </p>
        <p>
            Sin embargo, <strong>algunos jugadores han compartido voluntariamente sus <i>Fórmulas</i> en público
                en nuestro sitio web</strong>. Estas fórmulas se pueden encontrar
            en la página "<a href="/public-formulas.es.<?=$ext;?>">Fórmulas públicas</a>".
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

$LANG='es';
$MENU = include("includes/menu.es.php");

$TITLE="MindWarrior: Preguntas frecuentes";

$CSS = ["/includes/faq_anchors.css"];
$JS = ["/includes/faq_anchors.js"];

include("includes/layout.php");