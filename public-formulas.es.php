<?php
ob_start();

$ext = getenv('LINK_EXT');
?>


    <h2>Fórmulas Públicas</h2>

    <p>Esta página está en desarrollo.</p>

    <p>¡Ayúdanos a construirla compartiendo tu propia Fórmula en público! Puedes encontrar las instrucciones sobre cómo hacerlo aquí:
        <a href="https://github.com/mindwarriorgame/public-formulas/blob/main/README.md" target="_blank">
            https://github.com/mindwarriorgame/public-formulas/blob/main/README.md
        </a>
    </p>


    <div id="review" class="">

        <p>
            <span class="code-highlight"># 736dd20c-547a-4b69-9c2f-61b3e2e403c2, etiquetas: budismo</span>
        </p>




        <ol start="1"><li><strong>Todo viene de algún lugar y va a algún lugar.</strong>
                <ul><li>¿Puedes enviar una sonrisa a este "lugar"? </li><li>¿Qué obstáculos tienes con esto?</li></ul></li></ol>

        <ol start="2"><li><strong>Una mente nublada multiplica el mal karma y el sufrimiento, el tuyo y el de tus vecinos</strong>
                <ul><li>todos los actos malvados, grandes y pequeños, fueron cometidos por personas con una mente nublada</li></ul></li></ol>

        <ol start="3"><li><strong> Descompón tu mente en el observador, lo observado y el fondo</strong>
                <ul><li>date cuenta de que aferrarte a lo observado es insignificante e inútil</li><li>¿qué te hizo pensar que esto es la verdad? ¿Cuántas veces te ha decepcionado?</li><li>¿qué te hizo pensar que esto tiene algún valor? ¿Qué te hizo pensar que esto tiene sentido?</li><li>aferrarse no es para el bien</li><li>no te aferres a lo observado (pensamientos/sentimientos/sensaciones). ¿Quién es el observador? ¿Cuál es el fondo? Ahí es donde está el enfoque.</li></ul></li></ol>

        <h1>En este momento, lo más probable es que estés en un estado de mente nublada</h1>

        <ul><li>tienes prisa por cerrar la información más importante de tu vida</li><li>te preocupas por cosas que no existen (pasado y futuro)</li><li>te importa un placer/inconveniente fugaz que pronto desaparecerá y ni siquiera lo recordarás</li><li>escuchas la "voz interna" que lleva alguna tontería que no tiene nada que ver con la realidad</li><li>percibes la realidad no como una ilusión</li><li>consideras a otras personas como la fuente de tus desventajas
                <ul><li>cuando muere un familiar, sientes una gran pérdida, pero eres indiferente a las pérdidas de los demás</li><li>no recuerdas tu propia muerte, tu posición en el espacio/galaxia</li></ul></li></ul>

        <h1>Estar en un estado de mente nublada crea mal karma</h1>

        <ul><li>las personas que están en un estado de mente nublada crean una cantidad increíble de sufrimiento. Al continuar en él, permaneces en las filas con ellos: <strong>no eres mejor que cualquier persona terrible</strong> que puedas imaginar, las diferencias son puramente circunstanciales.
                <ul><li>el mal karma te traerá malas consecuencias</li><li>el mal karma aumentará el sufrimiento en el mundo</li></ul></li></ul>

        <h1>¡Sal ahora!</h1>

        <ul><li><strong>¿decides qué karma vas a crear?</strong></li><li>enfócate en el momento presente, es todo lo que tienes</li><li>recuerda que todos tus fenómenos son solo imágenes, fantasmas, cáscaras. Observa cómo surgen y desaparecen. ¿Dónde surgen y desaparecen?</li><li><strong>divídete en el observador, lo observado y el escenario en el que todo sucede, transfiere tu atención allí</strong></li><li>transfiere la atención a la respiración</li><li>reflexiona sobre la no existencia del pasado y el futuro. ¿Por qué preocuparse por ellos?</li><li>reflexiona sobre la transitoriedad de todo lo que ocurre. ¿Por qué preocuparse por ello?</li><li>reflexiona sobre las limitaciones de tu percepción cotidiana (sin enfocar en la inevitabilidad de la muerte, sin enfocar en tu posición en el espacio/cosmos, aunque estas cosas son mucho más importantes que lo que comerás para el desayuno; que el pez también cree que conoce la realidad tal como es)</li><li>reflexiona sobre el hecho de que <strong>lo externo y otras personas no pueden hacerte feliz o infeliz</strong>, que esa es tu elección (piensa en las expectativas infladas de los seres queridos, las mismas almas sombrías y pobres)</li><li>reflexiona sobre la felicidad de haber nacido humano en el siglo XXI</li></ul>

        <h1>Autoevaluación Rápida</h1>

        <ul><li>¿tienes prisa por cerrar la Fórmula?</li><li>¿no quieres meditar?</li><li>¿estás procrastinando?</li><li>¿estás irritado con los demás?</li><li>¿tienes prisa por masticar?</li><li>¿estás picando? ¿no bebes agua?</li><li>¿no tomas un descanso?</li></ul>



    </div>

    <p>
        <a href="#">Ver la siguiente fórmula</a>
    </p>






<?php
$CONTENT = ob_get_contents();
ob_end_clean();

$LANG='es';
$MENU_SELECTED = "public-formulas";
$MENU = include("includes/menu.es.php");

$TITLE="MindWarrior: Fórmulas Públicas";

$CSS = ["includes/quick-start.css", "includes/public-formulas.css"];

$JS = [];

include("includes/layout.php");
