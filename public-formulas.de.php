<?php
ob_start();

$ext = getenv('LINK_EXT');

$LANG='de';
?>


    <h2>Öffentliche Formeln</h2>

    <p>Diese Seite befindet sich in der Entwicklung.</p>

    <p>Bitte hilf uns, sie aufzubauen, indem du deine eigene Formel öffentlich teilst! Die Anleitung, wie du das tun kannst, findest du hier:
        <a href="https://github.com/mindwarriorgame/public-formulas/blob/main/README.md" target="_blank">
            https://github.com/mindwarriorgame/public-formulas/blob/main/README.md
        </a>
    </p>

    <div id="review" class="">

        <!-- vvv --- gerendertes HTML --- vvv --->

        <ol start="1"><li><strong>Alles kommt von irgendwoher und geht irgendwohin.</strong>
                <ul><li>beobachten</li><li>lächeln</li><li>was hält dich zurück?</li></ul></li></ol>

        <ol start="2"><li><strong>Ein getrübter Geist vervielfacht schlechtes Karma und Leiden, dein eigenes und das anderer.</strong>
                <ul><li>alle bösen Taten, ob groß oder klein, wurden von Menschen mit einem getrübten Geist begangen</li></ul></li></ol>

        <ol start="3"><li><strong>Zerlege deinen Geist in den Beobachter, das Beobachtete und den Hintergrund.</strong>
                <ul><li>erkenne, dass das Festhalten am Beobachteten sinnlos und vergeblich ist</li><li>was lässt dich glauben, dass dies die Wahrheit ist? Wie oft hat es dich enttäuscht?</li><li>was lässt dich glauben, dass es irgendeinen Wert hat? Was lässt dich glauben, dass es eine Bedeutung hat?</li><li>Festhalten ist nicht förderlich</li><li>halte nicht am Beobachteten fest (Gedanken/Gefühle/Empfindungen). Wer ist der Beobachter? Was ist der Hintergrund? Konzentriere dich darauf.</li><li><strong>Der Beobachter spürt weder Kälte noch Schmerz, ebenso wenig der Hintergrund. Nur das Beobachtete.</strong>
                        <ul><li><strong>Du bist mehr als das Beobachtete.</strong></li></ul></li></ul></li></ol>

        <h1>Im Moment bist du höchstwahrscheinlich in einem getrübten Geisteszustand</h1>

        <ul><li>du machst dir Sorgen über Dinge, die nicht existieren (die Vergangenheit und die Zukunft)</li><li>du bist besorgt über flüchtige Freuden oder Unannehmlichkeiten, die bald verschwinden, und du wirst dich nicht einmal mehr daran erinnern</li><li>du hörst auf eine „innere Stimme“, die Unsinn redet, der nichts mit der Realität zu tun hat</li><li>du nimmst die Realität nicht als Illusion wahr</li><li>du siehst andere Menschen als Quelle deines Unglücks</li><li>du vergisst deinen Tod, deinen Platz im Raum/Kosmos, ganz zu schweigen von der Leere der Realität, die ohne Konzepte existiert</li></ul>

        <h1>In einem getrübten Geisteszustand erzeugst du schlechtes Karma</h1>

        <ul><li>Menschen in einem getrübten Geisteszustand erzeugen eine immense Menge an Leiden. Indem du in diesem Zustand bleibst, bleibst du einer von ihnen: <strong>du bist nicht besser als die schlimmste Person</strong>, die du dir vorstellen kannst, die Unterschiede sind lediglich umständehalber.
                <ul><li>schlechtes Karma wird dir schlechte Konsequenzen bringen</li><li>schlechtes Karma wird das Leiden in der Welt vervielfachen</li></ul></li></ul>

        <h1>Komm jetzt heraus!</h1>

        <ul><li><strong>entscheide, welches Karma du erzeugen wirst</strong></li><li>konzentriere dich auf den gegenwärtigen Moment, er ist alles, was du hast</li><li>denke daran, dass all deine Phänomene nur Bilder, Phantome, Hüllen sind. Beobachte, wie sie entstehen und verschwinden. Wo entstehen und verschwinden sie?</li><li><strong>teile dich in den Beobachter, das Beobachtete und die Bühne, auf der alles geschieht, und verlagere deine Aufmerksamkeit dorthin</strong></li><li>verlagere deine Aufmerksamkeit auf deinen Atem</li><li>denke über die Nichtexistenz der Vergangenheit und der Zukunft nach. Warum machst du dir darüber Sorgen?</li><li>denke über die Vergänglichkeit von allem nach, was passiert. Warum machst du dir darüber Sorgen?</li><li>denke über die Begrenzungen deiner alltäglichen Wahrnehmung nach (kein Fokus auf die Unvermeidlichkeit des Todes, kein Fokus auf deine Position im Raum/Kosmos, obwohl diese Dinge weit wichtiger sind als das, was du zum Frühstück haben wirst; ein Fisch denkt auch, dass er die Realität so versteht, wie sie ist)</li><li>denke darüber nach, dass <strong>äußere Dinge und andere Menschen dich weder glücklich noch unglücklich machen können</strong>, dass es deine Entscheidung ist (denke an deine hohen Erwartungen an geliebte Menschen, die genauso getrübt und verloren sind)</li><li>denke an das Glück, als Mensch im 21. Jahrhundert geboren zu sein</li></ul>

        <h1>Schneller Selbstcheck</h1>

        <ul><li>eilst du, um die Nachricht zu schließen?</li><li>willst du nicht meditieren?</li><li>prokrastinierst du?</li><li>bist du gereizt von anderen?</li><li>beeilst du dich zu essen?</li><li>snackst du? trinkst du kein Wasser?</li><li>machst du keine Pausen?</li></ul>

        <!-- ^^^ --- gerendertes HTML --- ^^^ --->

    </div>

    <p>
        <span class="code-highlight">736dd20c-547a-4b69-9c2f-61b3e2e403c2, buddhism</span>
    </p>

    <p>
        <a href="#">Nächste Formel ansehen</a>
    </p>






<?php
$CONTENT = ob_get_contents();
ob_end_clean();

$MENU_SELECTED = "public-formulas";
$MENU = include("includes/menu.$LANG.php");

$TITLE="MindWarrior: Öffentliche Formeln";

$CSS = ["includes/quick-start.css", "includes/public-formulas.css"];

$JS = [];

include("includes/layout.php");