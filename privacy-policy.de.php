<?php
ob_start();

$ext = getenv('LINK_EXT');

$LANG='de';
?>

    <h2>Datenschutzerklärung</h2>

    <h3>Einführung</h3>
    <p>
        Wir schätzen Ihre Privatsphäre. Ihre <a href="/faq.<?=$LANG;?>.<?=$ext;?>#formula">„Formel der festen Entschlossenheit“</a>
        bleibt privat und sicher.
        Das Spiel erstellt keine Kopien und sendet diese auch nicht.
        Sie wird direkt auf Ihrem Gerät gespeichert in
        <a href="https://davitdvalashvili1996.medium.com/local-storage-in-javascript-f7aad374980e"
           target="_blank">localStorage</a> der Telegram-
        <a href="https://docs.ton.org/develop/dapps/telegram-apps/testing-apps#debug-mode-for-mini-apps"
           target="_blank">WebView</a>.
    </p>

    <p>
        Daher empfehlen wir, regelmäßig manuelle Sicherungskopien Ihrer Formel zu erstellen, indem Sie den Inhalt
        an einem sicheren Ort speichern (z.B. in den <a href="https://telegram.org/blog/new-saved-messages-and-9-more" target="_blank">
            gespeicherten Nachrichten</a> von Telegram).
    </p>

    <h3>Offene Quellen</h3>
    <p>
        Unser Projekt ist stolz darauf, Open Source zu sein, was volle Transparenz darüber ermöglicht, wie das Spiel mit Ihren Daten umgeht.
        Sie können die Quellen des Spiels gerne auf GitHub durchsuchen:
        <a href="https://github.com/orgs/mindwarriorgame/repositories" target="_blank">https://github.com/orgs/mindwarriorgame/repositories</a>
    </p>


    <h3>Daten, die wir erfassen</h3>

    <p>Das Spiel erfasst die folgenden Benutzerdaten:</p>

    <h4>Benutzerinformationen</h4>
    <ul>
        <li><span class="code-highlight">user_id</span>: Eine eindeutige Telegram-Kennung des Benutzers
            (<a href="https://flows.network/blog/how-to-find-telegram-chat-id#:~:text=Telegram%20has%20three%20different%20kinds,is%20called%20group%20chat%20ID." target="_blank">chat_id</a>),
            eine einfache Zahl.</li>
        <li><span class="code-highlight">lang_code</span>: Der Code der Benutzersprache.</li>
        <li><span class="code-highlight">shared_key_uuid</span>: Eine zufällige Zeichenkette, die dem Benutzer zugeordnet ist.</li>
    </ul>

    <h4>Spieldaten</h4>
    <ul>
        <li>
            <span class="code-highlight">difficulty</span>
        </li>

        <li>
            <span class="code-highlight">review_counter_state</span>,
            <span class="code-highlight">active_game_counter_state</span>,
            <span class="code-highlight">paused_counter_state</span>: Stoppuhr-Zeitwerte, die
            Zeitstempel, abgelaufene Zeit und Statusflags enthalten
        </li>

        <li>
            <span class="code-highlight">next_prompt_time</span>: Zeitstempel
        </li>
        <li>
            <span class="code-highlight">next_prompt_type</span>: Zeichenkette (kann nur zwei mögliche Werte enthalten: „reminder“ und „penalty“)
        </li>

        <li>
            <span class="code-highlight">counters_history_serialized</span>: Historische Daten der Spielerzähler zur Darstellung des Fortschrittsdiagramms
        </li>

        <li>
            <span class="code-highlight">badges_serialized</span>: Die Daten über das Spielbrett: verdiente Abzeichen, deren Status, Level usw.
        </li>
    </ul>


    <h3>Wie wir Ihre Daten verwenden</h3>
    <p>Wir verwenden die gesammelten Daten, um:</p>
    <ul>
        <li>das Spielerlebnis bereitzustellen, zu betreiben und zu pflegen</li>
        <li>zu verstehen und zu analysieren, wie die Spieler das Spiel nutzen</li>
        <li>neue Funktionen und Spielmöglichkeiten zu entwickeln</li>
    </ul>

    <h3>Datenspeicherung</h3>
    <p>Wir speichern Ihre Daten sicher und ergreifen geeignete Maßnahmen, um sie vor unbefugtem Zugriff,
        Offenlegung, Veränderung oder Zerstörung zu schützen.</p>

    <h3>Ihre Rechte</h3>
    <p>Sie haben folgende Möglichkeiten bezüglich Ihrer Daten:</p>
    <ul>
        <li><strong>Zugriff</strong>: Sie können jederzeit auf alle Ihre Daten zugreifen, indem Sie den
            Befehl <span class="code-highlight">/data</span> verwenden. Dieser Befehl
            gibt alle Ihre Rohdaten zurück, die das Spiel über Sie auf seinem Server speichert.</li>
        <li><strong>Löschung</strong>: Sie können Ihre Daten jederzeit löschen, indem Sie den
            Befehl <span class="code-highlight">/data</span> verwenden und anschließend auf die Schaltfläche „Löschen“ klicken.
            <ul>
                <li>
                    Bitte achten Sie darauf, auch den Chatverlauf mit dem Spielbot zu löschen, da dieser außerhalb unserer Kontrolle
                    irgendwo in Telegram gespeichert wird. Dies garantiert jedoch nicht die vollständige Löschung Ihrer Daten,
                    da wir nicht wissen, wie Telegram diese verwaltet. Weitere Informationen finden Sie im Abschnitt „Verwendung von Telegram“ unten.
                </li>
            </ul>
        </li>
    </ul>


    <h3>Verwendung von Telegram</h3>

    <p>
        Das Projekt ist als Bot in Telegram implementiert. Daher sollten Sie auch die
        <a href="https://telegram.org/privacy" target="_blank">Datenschutzrichtlinie</a> von Telegram überprüfen, um zu verstehen,
        wie Ihre Daten dort behandelt werden. Wir sind nicht für die Datenschutzpraktiken von Telegram verantwortlich und haben
        keinerlei Einblick oder Kontrolle darüber. Bitte stellen Sie sicher, dass Sie damit einverstanden sind, bevor Sie das Spiel nutzen.
    </p>

    <h3>Änderungen an dieser Richtlinie</h3>

    <p>Wir können diese Richtlinie von Zeit zu Zeit aktualisieren. Bitte überprüfen Sie regelmäßig diese Seite,
        um die neueste Version unserer Datenschutzrichtlinie einzusehen.</p>

    <h2>Kontaktieren Sie uns</h2>

    <p>Wenn Sie Fragen oder Bedenken zu dieser Richtlinie haben, erstellen Sie bitte ein GitHub-Issue:
        <a href="https://github.com/mindwarriorgame/mindwarrior-telegram-bot/issues" target="_blank">https://github.com/mindwarriorgame/mindwarrior-telegram-bot/issues</a>
    </p>

    <p>Durch die Nutzung des Spiels stimmen Sie der Erhebung und Nutzung Ihrer Daten zu, wie in dieser Richtlinie beschrieben.</p>








<?php
$CONTENT = ob_get_contents();
ob_end_clean();

$MENU_SELECTED = "privacy-policy";
$MENU = include("includes/menu.$LANG.php");

$TITLE="MindWarrior: Datenschutzrichtlinie";

$CSS = ["includes/quick-start.css"];
$JS = [];

include("includes/layout.php");