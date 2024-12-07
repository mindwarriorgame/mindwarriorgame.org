<?php
ob_start();

$ext = getenv('LINK_EXT');
$ACTIVE_MENU = 'privacy-policy';
$LANG='en';
?>

    <h2>Privacy policy</h2>


    <h3>Introduction</h3>
    <p>
        We value your privacy. Your <a href="/faq.<?=$LANG;?>.<?=$ext;?>#formula">"Formula of firm resolution"</a>
        remains private and safe.
        The game doesn't create any copies or sends it anywhere.
        It is stored right on your device in
        <a href="https://davitdvalashvili1996.medium.com/local-storage-in-javascript-f7aad374980e"
           target="_blank">localStorage</a> of Telegram's
        <a href="https://docs.ton.org/develop/dapps/telegram-apps/testing-apps#debug-mode-for-mini-apps"
           target="_blank">WebView</a>.
    </p>

    <p>
        Because of this, we recommend you to regularly create manual backup copies of your Formula by copy-pasting its content
        to some secure place (e.g. Telegram's <a href="https://telegram.org/blog/new-saved-messages-and-9-more" target="_blank">
            Saved Messages</a>).
    </p>

    <h3>Open sources</h3>
    <p>
        Our project is proudly open source, allowing complete transparency regarding how the game treats your data.
        Please feel free to browse through the sources of the game on GitHub:
        <a href="https://github.com/orgs/mindwarriorgame/repositories" target="_blank">https://github.com/orgs/mindwarriorgame/repositories</a>
    </p>

    <h3>Data We Collect</h3>

    <p>The game collects the following user data:</p>

    <h4>User Information</h4>
    <ul>
        <li><span class="code-highlight">user_id</span>: A unique Telegram identifier of the user
            (<a href="https://flows.network/blog/how-to-find-telegram-chat-id#:~:text=Telegram%20has%20three%20different%20kinds,is%20called%20group%20chat%20ID." target="_blank">chat_id</a>),

            a plain number.</li>
        <li><span class="code-highlight">lang_code</span>: The code of the user's language.</li>
        <li><span class="code-highlight">shared_key_uuid</span>: a random string associated with the user.</li>
    </ul>

    <h4>Game Data</h4>
    <ul>
        <li>
            <span class="code-highlight">difficulty</span>
        </li>


        <li>
            <span class="code-highlight">review_counter_state</span>,
            <span class="code-highlight">active_game_counter_state</span>,
            <span class="code-highlight">paused_counter_state</span>: stopwatch timer values that
            contain timestamps, elapsed time counters and status flags
        </li>

        <li>
            <span class="code-highlight">next_prompt_time</span>, <span class="code-highlight">next_autopause_event_time</span>: timestamps
        </li>
        <li>
            <span class="code-highlight">next_prompt_type</span>: string (could contain only 2 possible values: "reminder" and "penalty")
        </li>

        <li>
            <span class="code-highlight">counters_history_serialized</span>: historical data of player's counters for rendering the progress chart
        </li>

        <li>
            <span class="code-highlight">badges_serialized</span>: the data about the game board: earned badges, their statuses, level etc.
        </li>

        <li>
            <span class="code-highlight">autopause_config_serialized</span>: settings of the sleep scheduler. ⚠️Contains user's timezone (if the feature is used).
        </li>


    </ul>

    <h3>How We Use Your Data</h3>
    <p>We use the collected data to:</p>
    <ul>
        <li>provide, operate, and maintain the game experience</li>
        <li>understand and analyze how the players use the game</li>
        <li>develop new features and functionality of the game</li>
    </ul>

    <h3>Data Storage</h3>
    <p>We store your data securely and take appropriate measures to protect it from unauthorized access,
        disclosure, alteration, or destruction.</p>

    <h3>Your Rights</h3>
    <p>You have the following controls regarding your data:</p>
    <ul>
        <li><strong>Access</strong>: You can access all you data anytime by using
            <span class="code-highlight">/data</span> command. That will
            return all your raw data that the game stores about you on its server.</li>
        <li><strong>Deletion</strong>: You can delete your data at any time by using
            <span class="code-highlight">/data</span> bot command and then clicking "Delete" button.
            <ul>
                <li>
                    Please make sure to also clear the chat history with the game bot as it is stored outside of our control
                    somewhere in Telegram, although it won't guarantee the complete deletion of your data as we don't
                    know how Telegram handles it. Please check "Using Telegram" section below for more information.
                </li>
            </ul>
        </li>
    </ul>

    <h3>Using Telegram</h3>

    <p>
        The project is implemented as a bot in Telegram. Because of that, you should also check Telegram's own
        <a href="https://telegram.org/privacy" target="_blank">privacy policy</a> to understand how it will treat your
        data. We are not responsible for the privacy practices of Telegram and don't have any visibility or control
        over them. Please make sure that you are comfortable with that before using the game.
    </p>

    <h3>Changes to This Policy</h3>

    <p>We may update this policy from time to time. Please make sure to regularly check this page
        to review the latest version of our privacy policy.</p>

    <h2>Contact Us</h2>

    <p>If you have any questions or concerns about this policy,
        please raise it as a GitHub Issue:
        <a href="https://github.com/mindwarriorgame/mindwarrior-telegram-bot/issues" target="_blank">https://github.com/mindwarriorgame/mindwarrior-telegram-bot/issues</a>
    </p>

    <p>By using the game, you consent to the collection and use of your data as it is described
        in this policy.</p>







<?php
$CONTENT = ob_get_contents();
ob_end_clean();

$MENU_SELECTED = "privacy-policy";
$MENU = include("includes/menu.$LANG.php");

$TITLE="MindWarrior: Privacy policy";

$CSS = ["includes/quick-start.css"];
$JS = [];

include("includes/layout.php");