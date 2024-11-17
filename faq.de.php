<?php
    ob_start();

    $ext = getenv('LINK_EXT');
    require_once("includes/image_tag_renderer.php");

    $LANG='de';
?>

    <div id="smooth-purpose" class="faq-item">
        <h3>Was ist der Zweck des Spiels?</h3>
        <p>
            Das Spiel "MindWarrior" wurde entwickelt, um dir bei deinem persönlichen Wachstum und deiner Entwicklung zu helfen.
            Es erreicht dies, indem es dich auf deine Träume und Bestrebungen fokussiert hält.
            Das Hauptkonzept des Spiels – <a href="#formula"><i>Formel des festen Entschlusses</i></a> – ist deine private inspirierende Nachricht,
            die du für dich selbst schreibst und dann regelmäßig im Laufe des Tages überprüfst.
        </p>

        <p>
            Jedes Mal, wenn du die <i>Formel</i> überprüfst, kehren deine Gedanken zu dem zurück, was dir wirklich wichtig ist.
            Diese Praxis hilft dir, deinen Geist klar und fokussiert zu halten und ihn von der Eintönigkeit des alltäglichen Lebenslärms und Ablenkungen wegzuziehen.
        </p>

    </div>

    <div id="smooth-formula" class="faq-item">
        <h3>Was sollte ich in meine Formel schreiben?</h3>

        <p>
            Die <i>Formel des festen Entschlusses</i> ist eine private Freitextnachricht, in der du alles ausdrücken kannst, was für dich bedeutsam ist.
            Es könnten deine Lieblingszitate, Mantras, Erinnerungen, weise Gedanken und Beobachtungen oder etwas anderes sein, du entscheidest! Die einzige Orientierung ist, dass sie
            dich in Richtung deines persönlichen Wachstums und deiner Entwicklung motivieren sollte.
        </p>
        <p>
            Eine starke <i>Formel</i> <a href="#review">wird dich fokussiert, motiviert und diszipliniert halten</a>. Sie muss dich auf deiner Lebensreise unterstützen und dir helfen, engagiert
            und verpflichtet zu bleiben. Wenn du feststellst, dass du ständige Erinnerungen vom Spiel über verpasste Überprüfungen erhältst oder daran denkst, das Spiel zu beenden,
            könnte dies ein Zeichen dafür sein, dass deine <i>Formel</i> einer Überarbeitung bedarf.
        </p>

    </div>

    <div id="smooth-review" class="faq-item">
        <h3>Was passiert, wenn ich meine Formel überprüfe?</h3>

        <p>
            Spirituell betrachtet, wenn du deine <i>Formel des festen Entschlusses</i> überprüfst,
            bringt sie deinen Geist zurück zu dem, was wirklich zählt, und zieht dich von den Ablenkungen und dem Unsinn des Alltags weg.
        </p>

        <p>
            Im Spiel, wenn du die Überprüfung durchführst, ohne daran erinnert zu werden,
            erhältst du Spielbelohnungen!
        </p>

        <p>
            <a href="/images/faq_en/review_plus_score.jpg" class="image-link" target="_blank">
                <?=renderImageTag(200, "images/faq_en/review_plus_score.jpg", "/images/faq_en/review_plus_score.jpg");?>
            </a>
        </p>

        <p>
            Du kannst den Befehl <span class="pre">/stats</span> verwenden, um den Fortschritt deines Spiels zu sehen.
        </p>
    </div>

    <div id="smooth-forgot" class="faq-item">
        <h3>Was passiert, wenn ich vergesse, meine Formel zu überprüfen?</h3>

        <p>
            Wenn Sie vergessen, Ihre <i>Formel für einen festen Entschluss</i> rechtzeitig zu überprüfen, werden Sie vom Spiel mit einer Benachrichtigung daran erinnert.
            Wenn Sie dies ignorieren, kann es (je nach Schwierigkeitsgrad) zu einer Strafe kommen.
        </p>

        <p>
            <a href="/images/faq_en/review_minus_score.jpg" class="image-link" target="_blank">
                <?=renderImageTag(450, "images/faq_en/review_minus_score.jpg", "/images/faq_en/review_minus_score.jpg");?>
            </a>
        </p>

    </div>


    <div id="smooth-difficulty" class="faq-item">
        <h3>Wie oft muss ich meine Formel überprüfen?</h3>

        <p>
            Sie können Ihre <i>Formel</i> so oft überprüfen, wie Sie möchten. Allerdings werden nur die Überprüfungen, die mindestens
            5 Minuten auseinander liegen, belohnt (Regel der "Abkühlzeit").
        </p>

        <p>
            Die Häufigkeit der Überprüfungen und die Strafen für verpasste Überprüfungen werden durch den Schwierigkeitsgrad des Spiels bestimmt,
            den Sie jederzeit mit dem <span class="code-highlight">/difficulty</span>-Befehl ändern können.
        </p>
    </div>

    <div id="smooth-pause" class="faq-item">
        <h3>Wie mache ich eine Pause ohne Strafen?</h3>

        <p>
            Um eine Pause einzulegen, pausieren Sie das Spiel einfach mit dem <span class="pre">/pause</span>-Befehl.
        </p>

        <p>
            Das pausierte Spiel sendet Ihnen keine Benachrichtigungen und verändert Ihre Spielpunkte nicht.
            Auch der Zähler für die aktive Spielzeit wird nicht fortlaufen.
        </p>

        <p>
            Um das Spiel fortzusetzen, überprüfen Sie einfach wie gewohnt Ihre <i>Formel</i>.
        </p>
    </div>

    <div id="smooth-formula-formatting" class="faq-item">
        <h3>Kann ich Textformatierungen in der Formel verwenden?</h3>

        <p>
            Der <i>Formel</i>-Editor unterstützt <a href="https://www.markdownguide.org/cheat-sheet/" target="_blank">Markdown-Syntax</a>.
        </p>
        <p>
            <a href="/images/faq_en/markdown.jpg" class="image-link" target="_blank">
                <?=renderImageTag(450, "images/faq_en/markdown.jpg", "/images/faq_en/markdown.jpg");?>
            </a>
        </p>
    </div>


    <div id="smooth-controls" class="faq-item">
        <h3>️Welche Steuerungen hat das Spiel?</h3>
        <p>
            Das Spiel unterstützt die folgenden Befehle:
        </p>
        <ul>
            <li><strong><span class="pre">/review</span></strong> - 💫 <a href="#review">Überprüfen</a> Ihrer <i>Formel</i></li>
            <li><strong><span class="pre">/pause</span></strong> - ⏸️ <a href="#pause">Pausieren</a> des Spiels</li>
            <li><strong><span class="pre">/formula</span></strong> - 🧪 Öffnen Ihrer <a href="#formula"><i>Formel</i></a> im Editor</li>
            <li><span class="pre">/stats</span> - 📊 Anzeigen Ihres Spielfortschritts</li>
            <li><span class="pre">/difficulty</span> - 💪 Ändern des <a href="#difficulty">Schwierigkeitsgrads</a> (Häufigkeit Ihrer Überprüfungen)</li>
            <li><span class="pre">/data</span> - 💾️ Anzeigen und Verwalten Ihrer Rohdaten</li>
        </ul>
        <p>
            <a href="/images/faq_en/menu.jpg" class="image-link" target="_blank">
                <?=renderImageTag(450, "images/faq_en/menu.jpg", "/images/faq_en/menu.jpg");?>
            </a>
        </p>
    </div>




    <div id="smooth-name" class="faq-item">
        <h3>Warum heißt das Spiel "MindWarrior"?</h3>

        <div class="quote">
            <p>
                "Wir können unsere Probleme nicht mit derselben Denkweise lösen, die wir verwendet haben, als wir sie geschaffen haben."
            </p>
            <p class="quote-reference">– <a href="https://de.wikipedia.org/wiki/Albert_Einstein" target="_blank">Albert Einstein</a></p>
        </div>

        &nbsp;
        <div class="quote">
            <p>
                "Nichts kann sich für sie ändern, weil sie selbst sich nicht mehr ändern können."
            </p>
            <p class="quote-reference">– <a href="https://de.wikipedia.org/wiki/Michael_Ende" target="_blank">Michael Ende</a></p>
        </div>
        &nbsp;
        <div class="quote">
            <p>
                "Der Geist geht allen mentalen Zuständen voraus. Der Geist ist ihr Führer; sie sind alle geistesgeschaffen. Wenn eine Person mit reinem Geist spricht oder handelt, folgt ihr das Glück wie ihr nie scheidender Schatten."
            </p>
            <p class="quote-reference">– <a href="https://de.wikipedia.org/wiki/Buddha" target="_blank">Buddha (Dhammapada 1.2)</a></p>
        </div>

        <p>
            Der Teil "Mind" bezieht sich auf das "innere Selbst" und persönliche Gedanken.
            Um im Leben etwas zu ändern, muss man zuerst seine Denkweise ändern.
        </p>

        <p>
            Der Teil "Warrior" steht für Handlung und anhaltende Anstrengung. Die Veränderung geschieht nicht von selbst auf magische Weise.
        </p>

        <div class="quote">
            <p>
                "Gestern war ich klug, also wollte ich die Welt verändern. Heute bin ich weise, also verändere ich mich selbst."
            </p>
            <p class="quote-reference">– <a href="https://de.wikipedia.org/wiki/Rumi" target="_blank">Rumi</a></p>
        </div>
        &nbsp;
        <div class="quote">
            <p>
                "Sei du selbst die Veränderung, die du dir wünschst für diese Welt."
            </p>
            <p class="quote-reference">– <a href="https://de.wikipedia.org/wiki/Mahatma_Gandhi" target="_blank">Mahatma Gandhi</a></p>
        </div>
        &nbsp;
        <div class="quote">
            <p>
                "Jeder denkt daran, die Welt zu verändern, aber niemand denkt daran, sich selbst zu verändern."
            </p>
            <p class="quote-reference">– <a href="https://de.wikipedia.org/wiki/Leo_Tolstoi" target="_blank">Leo Tolstoi</a></p>
        </div>

        <p id="smooth-name-betterworld" class="anchor">
            Wir (die Erschaffer des Spiels) glauben fest daran, dass jeder die Welt verändern kann.
            Indem wir uns selbst verändern, tragen wir dazu bei, die Welt zu einem besseren Ort zu machen.
            Bessere Versionen von uns selbst führen zu besseren Entscheidungen, was zu besseren Handlungen und
            Ergebnissen führt, von denen alle profitieren können.
        </p>

        <p>
            Jedes Mal, wenn du deine <a href="#formula"><i>Formel des festen Entschlusses</i></a> überprüfst, verbesserst du nicht nur dein eigenes Leben,
            sondern machst die Welt für alle ein Stück besser! 🙌
        </p>

        <p>Das ist es, worum es beim Namen "MindWarrior" geht ¯\_(ツ)_/¯.</p>

    </div>

    <div id="smooth-formula-example" class="faq-item">
        <h3>Kann ich die Formeln anderer Spieler sehen?</h3>

        <p>
            Das Spiel "MindWarrior" nimmt den Datenschutz der Spieler sehr ernst.
            Deine <i>Formel des festen Entschlusses</i> wird lokal auf deinem Gerät gespeichert und
            das Spiel kopiert oder sendet sie nie auf seine Server.
            Es ist daher physisch unmöglich, die <i>Formel</i> eines zufälligen Spielers einzusehen, weil das Spiel keinen Zugriff darauf hat.
            (Bitte prüfe unsere <a href="/privacy-policy.<?=$LANG;?>.<?=getenv('LINK_EXT');?>" target="_blank">Datenschutzerklärung</a> für weitere Details.)
        </p>
        <p>
            Allerdings haben <strong>einige Spieler freiwillig ihre <i>Formeln</i> öffentlich auf unserer Website geteilt</strong>.
            Diese Formeln findest du auf der Seite "<a href="/public-formulas.<?=$LANG;?>.<?=getenv('LINK_EXT');?>">Öffentliche Formeln</a>".
            Schau sie dir gerne an!
        </p>
        <p>
            Wenn du andere Spieler inspirieren möchtest, indem du deine eigene <i>Formel</i> teilst, folge bitte
            <a href="https://github.com/mindwarriorgame/public-formulas/blob/main/README.md" target="_blank">diesen Anweisungen</a>.
        </p>
    </div>

    <div id="smooth-share" class="faq-item">
        <h3>Kann ich meine Formel mit anderen Spielern teilen?</h3>

        <p>
            Bitte sieh dir <a href="#formula-example">die obige Frage</a> für weitere Details an.
        </p>

    </div>

    <div id="smooth-privacy" class="faq-item">
        <h3>Wer kann meine Formel sehen?</h3>

        <p>
            Bitte sieh dir <a href="#formula-example">die obige Frage</a> für weitere Details an.
        </p>
    </div>



<?php
    $CONTENT = ob_get_contents();
    ob_end_clean();

    $MENU = include("includes/menu.$LANG.php");

    $TITLE="MindWarrior: FAQ";

    $CSS = ["/includes/faq_anchors.css"];
    $JS = ["/includes/faq_anchors.js"];

    include("includes/layout.php");
