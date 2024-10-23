<?php
ob_start();

$ext = getenv('LINK_EXT');

$LANG='es';
?>


    <h2>Fórmulas Públicas</h2>

    <p>Esta página está en desarrollo.</p>

    <p>¡Ayúdanos a construirla compartiendo tu propia Fórmula en público! Puedes encontrar las instrucciones sobre cómo hacerlo aquí:
        <a href="https://github.com/mindwarriorgame/public-formulas/blob/main/README.es.md" target="_blank">
            https://github.com/mindwarriorgame/public-formulas/blob/main/README.es.md
        </a>
    </p>


    <div id="review" class="">


        <!-- vvv --- rendered HTML --- vvv --->

        <ol start="1"><li><strong>Todo viene de alguna parte y va hacia alguna parte.</strong>
                <ul><li>observa</li><li>sonríe</li><li>¿qué lo impide?</li></ul></li></ol>

        <ol start="2"><li><strong>La mente ofuscada multiplica el mal karma y el sufrimiento, tuyo y de los demás</strong>
                <ul><li>todos los actos malvados, grandes y pequeños, fueron cometidos por personas con una mente ofuscada</li></ul></li></ol>

        <ol start="3"><li><strong>Descompón tu mente en observador, lo observado y el fondo</strong>
                <ul><li>comprende que aferrarse a lo observado es inútil y sin futuro</li><li>¿por qué crees que eso es la verdad? ¿Cuántas veces te ha fallado?</li><li>¿por qué crees que eso tiene algún valor? ¿Por qué crees que tiene sentido?</li><li>el aferrarse no es para bien</li><li>no te aferres a lo observado (pensamientos/sentimientos/sensaciones). ¿Quién es el observador? ¿Qué es el fondo? Ahí va el enfoque.</li><li><strong>al observador no le da frío ni dolor, al fondo tampoco. Sólo a lo observado</strong>
                        <ul><li><strong>Tú eres más que lo observado</strong></li></ul></li></ul></li></ol>

        <h1>En este momento probablemente te encuentras en un estado mental ofuscado</h1>

        <ul><li>te preocupas por algo que no existe (pasado y futuro)</li><li>te inquietas por un placer/incómodo momentáneo que pronto desaparecerá y ni lo recordarás</li><li>escuchas una "voz interna" que dice tonterías sin relación con la realidad</li><li>percibes la realidad como si no fuera una ilusión</li><li>ves a otras personas como la fuente de tus desgracias</li><li>no recuerdas tu muerte, tu posición en el espacio/cosmos, ni hablar de la vacuidad de la realidad respecto a los conceptos</li></ul>

        <h1>Estando en un estado mental ofuscado, creas mal karma</h1>

        <ul><li>las personas en un estado mental ofuscado generan una cantidad increíble de sufrimiento. Si continúas en ese estado, sigues en sus filas: <strong>no eres mejor que la peor persona que puedas imaginar</strong>, las diferencias son meramente circunstanciales.
                <ul><li>el mal karma te traerá malas consecuencias</li><li>el mal karma multiplicará el sufrimiento en el mundo</li></ul></li></ul>

        <h1>¡Sal de ahí ahora!</h1>

        <ul><li><strong>decide qué tipo de karma vas a crear</strong></li><li>enfócate en el momento presente, es todo lo que tienes</li><li>recuerda que todos tus fenómenos son solo imágenes, fantasmas, cáscaras. Observa cómo surgen y desaparecen. ¿Dónde surgen y desaparecen?</li><li><strong>divídete en observador, lo observado y el escenario donde todo ocurre, dirige ahí tu atención</strong></li><li>enfócate en la respiración</li><li>reflexiona sobre la inexistencia del pasado y el futuro. ¿Para qué preocuparse por ellos?</li><li>reflexiona sobre lo efímero de todo lo que sucede. ¿Para qué preocuparse por ello?</li><li>reflexiona sobre las limitaciones de tu percepción cotidiana (no te enfocas en la inevitabilidad de la muerte, ni en tu posición en el espacio/cosmos, aunque estas cosas son mucho más importantes que lo que vas a desayunar; piensa que los peces también creen que conocen la realidad tal cual es)</li><li>reflexiona sobre <strong>que lo externo y otras personas no pueden hacerte feliz o infeliz</strong>, que eso es tu elección (piensa en las expectativas exageradas hacia tus seres cercanos, que son pobres almas igualmente ofuscadas)</li><li>reflexiona sobre la suerte de haber nacido humano en el siglo XXI</li></ul>

        <h1>Rápida autoevaluación</h1>

        <ul><li>¿tienes prisa por cerrar el Mensaje?</li><li>¿no quieres meditar?</li><li>¿procrastinas?</li><li>¿te irritas con los demás?</li><li>¿tienes prisa por comer?</li><li>¿picoteas? ¿no bebes agua?</li><li>¿no tomas descansos?</li></ul>


        <!-- ^^^ --- rendered HTML --- ^^^ --->

    </div>

    <p>
        <span class="code-highlight">736dd20c-547a-4b69-9c2f-61b3e2e403c2, budismo</span>
    </p>

    <p>
        <a href="#">Ver la siguiente fórmula</a>
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
