<?php
ob_start();

$ext = getenv('LINK_EXT');

$LANG='es';
?>

    <h2>Política de privacidad</h2>

    <h3>Introducción</h3>
    <p>
        Valoramos tu privacidad. Tu <a href="/faq.<?=$LANG;?>.<?=$ext;?>#formula">"Fórmula de resolución firme"</a>
        permanece privada y segura.
        El juego no crea ninguna copia ni la envía a ningún lugar.
        Se almacena directamente en tu dispositivo en
        <a href="https://davitdvalashvili1996.medium.com/local-storage-in-javascript-f7aad374980e"
           target="_blank">localStorage</a> del
        <a href="https://docs.ton.org/develop/dapps/telegram-apps/testing-apps#debug-mode-for-mini-apps"
           target="_blank">WebView</a> de Telegram.
    </p>

    <p>
        Debido a esto, te recomendamos que realices copias de seguridad manuales de tu Fórmula de forma regular,
        copiando y pegando su contenido en un lugar seguro (por ejemplo, en los
        <a href="https://telegram.org/blog/new-saved-messages-and-9-more" target="_blank">
            Mensajes Guardados</a> de Telegram).
    </p>

    <h3>Código abierto</h3>
    <p>
        Nuestro proyecto es orgullosamente de código abierto, lo que permite una total transparencia sobre cómo el juego maneja tus datos.
        Siéntete libre de revisar los códigos fuente del juego en GitHub:
        <a href="https://github.com/orgs/mindwarriorgame/repositories" target="_blank">https://github.com/orgs/mindwarriorgame/repositories</a>
    </p>


    <h3>Datos Que Recopilamos</h3>

    <p>El juego recopila los siguientes datos del usuario:</p>

    <h4>Información del Usuario</h4>
    <ul>
        <li><span class="code-highlight">user_id</span>: Un identificador único de Telegram del usuario
            (<a href="https://flows.network/blog/how-to-find-telegram-chat-id#:~:text=Telegram%20has%20three%20different%20kinds,is%20called%20group%20chat%20ID." target="_blank">chat_id</a>),
            un número simple.</li>
        <li><span class="code-highlight">lang_code</span>: El código del idioma del usuario.</li>
        <li><span class="code-highlight">shared_key_uuid</span>: una cadena aleatoria asociada con el usuario.</li>
    </ul>

    <h4>Datos del Juego</h4>
    <ul>
        <li>
            <span class="code-highlight">difficulty</span>
        </li>

        <li>
            <span class="code-highlight">review_counter_state</span>,
            <span class="code-highlight">active_game_counter_state</span>,
            <span class="code-highlight">paused_counter_state</span>: valores de temporizador de cronómetro que
            contienen marcas de tiempo, contadores de tiempo transcurrido y banderas de estado.
        </li>

        <li>
            <span class="code-highlight">next_prompt_time</span>: marca de tiempo
        </li>
        <li>
            <span class="code-highlight">next_prompt_type</span>: cadena (solo puede contener 2 valores posibles: "reminder" y "penalty")
        </li>

        <li>
            <span class="code-highlight">counters_history_serialized</span>: datos históricos de los contadores del jugador para renderizar el gráfico de progreso
        </li>

        <li>
            <span class="code-highlight">badges_serialized</span>: datos sobre el tablero del juego: insignias obtenidas, sus estados, nivel, etc.
        </li>
    </ul>


    <h3>Cómo Usamos Tus Datos</h3>
    <p>Usamos los datos recopilados para:</p>
    <ul>
        <li>proporcionar, operar y mantener la experiencia del juego</li>
        <li>entender y analizar cómo los jugadores utilizan el juego</li>
        <li>desarrollar nuevas características y funcionalidades del juego</li>
    </ul>

    <h3>Almacenamiento de Datos</h3>
    <p>Almacenamos tus datos de forma segura y tomamos medidas adecuadas para protegerlos contra el acceso no autorizado,
        divulgación, alteración o destrucción.</p>

    <h3>Tus Derechos</h3>
    <p>Tienes los siguientes controles respecto a tus datos:</p>
    <ul>
        <li><strong>Acceso</strong>: Puedes acceder a todos tus datos en cualquier momento usando el comando
            <span class="code-highlight">/data</span>. Esto te devolverá todos tus datos en bruto que el juego almacena
            sobre ti en su servidor.</li>
        <li><strong>Eliminación</strong>: Puedes eliminar tus datos en cualquier momento usando el comando
            <span class="code-highlight">/data</span> del bot y luego haciendo clic en el botón "Eliminar".
            <ul>
                <li>
                    Asegúrate también de borrar el historial de chat con el bot del juego, ya que se almacena fuera de nuestro control
                    en algún lugar de Telegram, aunque esto no garantiza la eliminación completa de tus datos, ya que no
                    sabemos cómo los maneja Telegram. Consulta la sección "Uso de Telegram" a continuación para obtener más información.
                </li>
            </ul>
        </li>
    </ul>


    <h3>Uso de Telegram</h3>

    <p>
        El proyecto está implementado como un bot en Telegram. Debido a esto, también debes revisar la
        <a href="https://telegram.org/privacy" target="_blank">política de privacidad</a> de Telegram para entender cómo tratará tus
        datos. No somos responsables de las prácticas de privacidad de Telegram y no tenemos visibilidad ni control
        sobre ellas. Asegúrate de que te sientes cómodo con esto antes de usar el juego.
    </p>

    <h3>Cambios en Esta Política</h3>

    <p>Podemos actualizar esta política de vez en cuando. Por favor, asegúrate de revisar regularmente esta página
        para consultar la versión más reciente de nuestra política de privacidad.</p>

    <h2>Contáctanos</h2>

    <p>Si tienes alguna pregunta o inquietud sobre esta política,
        por favor planteala como un GitHub Issue:
        <a href="https://github.com/mindwarriorgame/mindwarrior-telegram-bot/issues" target="_blank">https://github.com/mindwarriorgame/mindwarrior-telegram-bot/issues</a>
    </p>

    <p>Al usar el juego, das tu consentimiento para la recopilación y uso de tus datos tal como se describe
        en esta política.</p>






<?php
$CONTENT = ob_get_contents();
ob_end_clean();

$MENU_SELECTED = "privacy-policy";
$MENU = include("includes/menu.$LANG.php");

$TITLE="MindWarrior: Política de privacidad";

$CSS = ["includes/quick-start.css"];
$JS = [];

include("includes/layout.php");
