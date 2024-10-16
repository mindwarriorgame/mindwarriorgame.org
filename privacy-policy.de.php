<?php
ob_start();

$ext = getenv('LINK_EXT');
?>

    <h2>Datenschutzrichtlinie</h2>

    <h3>Einführung</h3>
    <p>
        Wir schätzen Ihre Privatsphäre. Ihre <a href="/faq.de.<?=$ext;?>#formula">"Formel der festen Entschlossenheit"</a>
        bleibt privat und sicher.
        Das Spiel erstellt keine Kopien oder sendet sie irgendwohin.
        Es wird direkt auf Ihrem Gerät in
        <a href="https://davitdvalashvili1996.medium.com/local-storage-in-javascript-f7aad374980e"
           target="_blank">localStorage</a> von Telegrams
        <a href="https://docs.ton.org/develop/dapps/telegram-apps/testing-apps#debug-mode-for-mini-apps"
           target="_blank">WebView</a> gespeichert.
    </p>

    <p>
        Aus diesem Grund empfehlen wir Ihnen, regelmäßig manuelle Sicherungskopien Ihrer Formel zu erstellen, indem Sie deren Inhalt
        an einem sicheren Ort (z.B. Telegrams <a href="https://telegram.org/blog/new-saved-messages-and-9-more" target="_blank">Gespeicherte Nachrichten</a>) speichern.
    </p>

    <h3>Offene Quellen</h3>
    <p>
        Unser Projekt ist stolz darauf, Open Source zu sein und somit vollständige Transparenz darüber zu ermöglichen, wie das Spiel Ihre Daten behandelt.
        Sie können die Quellen des Spiels auf GitHub durchsuchen:
        <a href="https://github.com/orgs/mindwarriorgame/repositories" target="_blank">https://github.com/orgs/mindwarriorgame/repositories</a>
    </p>

    <h3>Daten, die wir erfassen</h3>

    <p>Das Spiel sammelt die folgenden Benutzerdaten:</p>

    <h4>Benutzerinformationen</h4>
    <ul>
        <li><span class="code-highlight">user_id</span>: Eine eindeutige Telegram-ID des Benutzers
            (<a href="https://flows.network/blog/how-to-find-telegram-chat-id#:~:text=Telegram%20has%20three%20different%20kinds,is%20called%20group%20chat%20ID." target="_blank">chat_id</a>),
            eine einfache Zahl.</li>
        <li><span class="code-highlight">lang_code</span>: Der Sprachcode des Benutzers.</li>
        <li><span class="code-highlight">shared_key_uuid</span>: Eine zufällige Zeichenfolge, die dem Benutzer zugeordnet ist.</li>
    </ul>

    <h4>Spieldaten</h4>
    <ul>
        <li>
            <span class="code-highlight">difficulty</span>,
            <span class="code-highlight">rewards</span>: einfache Zahlen
        </li>

        <li>
            <span class="code-highlight">review_counter_state</span>,
            <span class="code-highlight">active_game_counter_state</span>,
            <span class="code-highlight">paused_counter_state</span>: Stoppuhr-Werte, die
            Zeitstempel, abgelaufene Zeitmesser und Statusflags enthalten
        </li>

        <li>
            <span class="code-highlight">last_reward_time</span>,
            <span class="code-highlight">next_prompt_time</span>: Zeitstempel
        </li>
        <li>
            <span class="code-highlight">next_prompt_type</span>: Zeichenfolge (kann nur zwei mögliche Werte enthalten: "Erinnerung" und "Strafe")
        </li>

        <li>
            <span class="code-highlight">counters_history_serialized</span>: Historische Daten der Zähler des Spielers zur Darstellung des Fortschrittsdiagramms
        </li>
    </ul>

    <h3>Wie wir Ihre Daten verwenden</h3>
    <p>Wir verwenden die gesammelten Daten, um:</p>
    <ul>
        <li>das Spielerlebnis bereitzustellen, zu betreiben und zu warten</li>
        <li>zu verstehen und zu analysieren, wie die Spieler das Spiel nutzen</li>
        <li>neue Funktionen und Spielmöglichkeiten zu entwickeln</li>
    </ul>

    <h3>Datenspeicherung</h3>
    <p>Wir speichern Ihre Daten sicher und ergreifen geeignete Maßnahmen, um sie vor unbefugtem Zugriff,
        Offenlegung, Änderung oder Zerstörung zu schützen.</p>

    <h3>Ihre Rechte</h3>
    <p>Sie haben die folgenden Rechte in Bezug auf Ihre Daten:</p>
    <ul>
        <li><strong>Zugriff</strong>: Sie können jederzeit auf alle Ihre Daten zugreifen, indem Sie
            den Befehl <span class="code-highlight">/data</span> verwenden. Dieser wird
            alle Rohdaten zurückgeben, die das Spiel über Sie speichert.</li>
        <li><strong>Löschung</strong>: Sie können Ihre Daten jederzeit löschen, indem Sie den Befehl
            <span class="code-highlight">/data</span> im Bot verwenden und dann auf die Schaltfläche "Löschen" klicken.
            <ul>
                <li>
                    Bitte stellen Sie auch sicher, den Chatverlauf mit dem Spiel-Bot zu löschen, da dieser außerhalb unserer Kontrolle
                    irgendwo in Telegram gespeichert wird. Dies garantiert jedoch nicht die vollständige Löschung Ihrer Daten, da wir
                    nicht wissen, wie Telegram damit umgeht. Bitte lesen Sie den Abschnitt "Verwendung von Telegram" weiter unten für weitere Informationen.
                </li>
            </ul>
        </li>
    </ul>

    <h3>Verwendung von Telegram</h3>

    <p>
        Das Projekt wird als Bot in Telegram implementiert. Daher sollten Sie auch die eigene
        <a href="https://telegram.org/privacy" target="_blank">Datenschutzrichtlinie</a> von Telegram überprüfen, um zu verstehen, wie Ihre Daten behandelt werden.
        Wir sind nicht verantwortlich für die Datenschutzpraktiken von Telegram und haben keine Einsicht oder Kontrolle darüber.
        Bitte stellen Sie sicher, dass Sie sich damit wohlfühlen, bevor Sie das Spiel verwenden.
    </p>

    <h3>Änderungen an dieser Richtlinie</h3>
    <p>Wir können diese Richtlinie von Zeit zu Zeit aktualisieren. Bitte überprüfen Sie regelmäßig diese Seite,
        um die neueste Version unserer Datenschutzrichtlinie zu lesen.</p>

    <h2>Kontaktieren Sie uns</h2>
    <p>Wenn Sie Fragen oder Bedenken zu dieser Richtlinie haben,
        melden Sie dies bitte als GitHub-Issue:
        <a href="https://github.com/mindwarriorgame/mindwarrior-telegram-bot/issues" target="_blank">https://github.com/mindwarriorgame/mindwarrior-telegram-bot/issues</a>
    </p>

    <p>Durch die Nutzung des Spiels stimmen Sie der Erhebung und Verwendung Ihrer Daten zu, wie in dieser Richtlinie beschrieben.</p>








<?php
$CONTENT = ob_get_contents();
ob_end_clean();

$LANG='de';
$MENU_SELECTED = "privacy-policy";
$MENU = include("includes/menu.de.php");

$TITLE="MindWarrior: Datenschutzrichtlinie";

$CSS = ["includes/quick-start.css"];
$JS = [];

include("includes/layout.php");