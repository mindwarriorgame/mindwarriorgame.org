<?php
    ob_start();

$ext = getenv('LINK_EXT');
require_once("includes/image_tag_renderer.php");

    $LANG='en';
?>

<div id="smooth-what-is" class="faq-item">
    <h3>What is MindWarrior?</h3>

    <p>
        MindWarrior is a Telegram game bot that helps you stay focused on what truly matters in your life.
        You write a personal Formula of Firm Resolution (we'll call it the "Formula" below) — a private message to yourself —
        and the game reminds you to review it regularly during the day.
    </p>

    <p>
        Each time you review your Formula, you gently bring your attention back to your priorities instead of getting lost in
        the noise and distractions of everyday life.
    </p>

</div>

<div id="smooth-purpose" class="faq-item">
    <h3>What is the purpose of the game?</h3>
    <p>
        The purpose of the game is to support you on your journey of personal growth, development, and transformation.
        MindWarrior helps you remember your own deepest intentions throughout the day, so you can live more consciously instead
        of being carried away by distractions and habits.

        The main concept of the game – <a href="#formula"><i>Formula of Firm Resolution</i></a> – is your private inspirational message
        that you write to yourself and then review regularly during the day.
    </p>

    <p>
        Each time you review your <i>Formula</i>, your thoughts are returned back to what really matters for you.
        This practice helps to keep your mind clear and focused on the most important things, pulling it away from the dullness, noise and distractions of everyday life.
    </p>

</div>

<div id="smooth-formula" class="faq-item">
    <h3>What should I write in my Formula?</h3>

    <p>
        Your Formula of Firm Resolution is a private, free-form text that only you see. It can contain anything meaningful to
        you, for example:
    </p>

    <ul>
        <li>favourite quotes</li>
        <li>mantras or affirmations</li>
        <li>reminders to your future self</li>
        <li>wise thoughts and observations</li>
    </ul>

    <p>
        For example, your Formula might remind you to stay calm with your kids, work on a specific habit, or keep moving
        toward a long-term goal. The only rule: it should motivate you on your personal journey of growth.
    </p>

</div>

<div id="smooth-review" class="faq-item">
    <h3>What happens when I review my Formula?</h3>

    <p>
        Spiritually, each time you review your <i>Formula of Firm Resolution</i>, the focus of your mind
        is returned back to the most important things in your life, pulling you away from distractions and nonsense
        of everyday life.
    </p>

    <p>
        Game-wise, if you review your Formula on time (before the reminder), you earn in-game rewards — such as progress on
        your counters, badges, and levels.
    </p>

    <p>
        <a href="/images/faq_en/review_plus_score.jpg" class="image-link" target="_blank>">
            <?=renderImageTag(200, "images/faq_en/review_plus_score.jpg", "/images/faq_en/review_plus_score.jpg");?>
        </a>
    </p>

</div>

    <div id="smooth-forgot" class="faq-item">
        <h3>What happens if you forget to review the "Formula"?</h3>

        <p>
            If you forget to review your <i>Formula of Firm Resolution</i>, the game will remind you about it.
            Depending on the selected difficulty level, missing reviews might make it harder for you
            to unlock subsequent game levels.
        </p>

        <p>
            <a href="/images/faq_en/review_minus_score.jpg" class="image-link" target="_blank">
                <?=renderImageTag(450, "images/faq_en/review_minus_score.jpg", "/images/faq_en/review_minus_score.jpg");?>
            </a>
        </p>

        <p><strong>There are no penalties on the easiest level! 🚫😾</strong></p>

        <p id="smooth-forgot-grumpycat" class="anchor">
            To speed up the unlocking process, you can increase the frequency of reviewing the <i>Formula</i>,
            but no more than once every 5 minutes (otherwise, the review will not be counted).
        </p>
    </div>


<div id="smooth-difficulty" class="faq-item">
    <h3>How often do I need to review my Formula?</h3>

    <p>
        You can review your <i>Formula</i> as often as you'd like.
    </p>

    <p><strong>Important:</strong> reviews count only if they are at least 5 minutes apart. If you try to review more often than
        every 5 minutes, those extra reviews are ignored by the game.</p>

    <p>
        The frequency of reviews and the penalties for missed ones are determined by the difficulty level of the game,
        which you could change at any time using <span class="code-highlight">/difficulty</span> command.
    </p>


</div>

<div id="smooth-pause" class="faq-item">
    <h3>How to take a break without penalties?</h3>

    <p>
        To take a break, simply pause the game with <span class="pre">/pause</span> command.
    </p>

    <p>
        The paused game won't send you any notifications or change your game scores.
        The active play time counter won't be counting, too.
        To resume the game, simply review your <i>Formula</i> as usually.
    </p>

    <p>The game can automatically pause during your sleep time, so you are not disturbed by reminders. Here is how it works:</p>

    <ul>
        <li>Every day, the game is automatically paused during your configured sleep interval.</li>
        <li>If you review your Formula during that interval, the game resumes.</li>
        <li>After it resumes, you may receive a reminder and can be penalised if you miss that review.</li>
        <li>To avoid this, you can manually pause the game in the bot if you do a late-night review but do not want the game to continue immediately.</li>
    </ul>

    <p>To set it up, open <span class="code-highlight">/settings</span> and press the <i>"💤 Sleep Scheduler"</i> button.</p>


</div>

<div id="smooth-formula-formatting" class="faq-item">
    <h3>Can I use text formatting in Formula?</h3>

    <p>
        <i>Formula</i> editor supports <a href="https://www.markdownguide.org/cheat-sheet/" target="_blank">markdown syntax</a>.
    </p>
    <p>
        <a href="/images/faq_en/markdown.jpg" class="image-link" target="_blank>">
            <?=renderImageTag(450, "images/faq_en/markdown.jpg", "/images/faq_en/markdown.jpg");?>
        </a>
    </p>

    <p>You can also use <span class="code-highlight">{counter}</span> and <span class="code-highlight">{stopwatch}</span>
    widgets to embed counters and stopwatches into your formula. That might be useful if you need to manually track
    some progress.</p>

    <p>
        <a href="/images/faq_en/counter.jpg" class="image-link" target="_blank>">
            <?=renderImageTag(600, "images/faq_en/counter.jpg", "/images/faq_en/counter.jpg");?>
        </a>
    </p>

</div>

<div id="smooth-controls" class="faq-item">
    <h3>️Which controls does the game have?</h3>
    <p>
        The game supports the following commands:
    </p>
    <ul>
        <li><span class="pre">/review</span> - 💫 <a href="#review">review</a> your <i>Formula</i>
        <li><span class="pre">/pause</span> - ⏸️ <a href="#pause">pause</a> the game</li>
        <li><span class="pre">/formula</span> - 🧪 open your <a href="#formula"><i>Formula</i></a> in editor</li>
        <li><span class="pre">/stats</span> - 📊 view your game progress</li>
        <li><span class="pre">/settings</span> - 🔧 game settings</li>
    </ul>
    <p>
        <a href="/images/faq_en/menu.jpg" class="image-link" target="_blank>">
            <?=renderImageTag(450, "images/faq_en/menu.jpg", "/images/faq_en/menu.jpg");?>
        </a>
    </p>

    <p>
        In the game settings (<span class="pre">/settings</span>) you can find the following buttons:
    </p>

    <ul>
        <li>
            <i>"💤 Sleep Scheduler"</i> - you can set up a time interval when the game will be automatically paused, daily
        </li>

        <li>
            <i>"💪 Game Difficulty"</i> - change the <a href="#difficulty">difficulty of the game</a>
        </li>

        <li>
            <i>"💾 Personal Data"</i> - <a href="privacy-policy.<?=$LANG;?>.<?=getenv('LINK_EXT');?>">ability to examine the data that the game knows about you</a>
        </li>

        <li>
            <i>"📢 Feedback"</i> - link to a feedback form
        </li>
    </ul>
</div>


<div id="smooth-name" class="faq-item">
    <h3>Why the game is called "MindWarrior"?</h3>

    <p>Here are some of the ideas that inspired the name "MindWarrior".</p>

    <div class="quote">
        <p>
            "We cannot solve our problems with the same thinking we used when we created them."
        </p>
        <p class="quote-reference">– <a href="https://en.wikipedia.org/wiki/Albert_Einstein" target="_blank">Albert Einstein</a></p>
    </div>

    &nbsp;
    <div class="quote">
        <p>
            "Nothing can change for them, because they themselves can't change anymore."
        </p>
        <p class="quote-reference">– <a href="https://en.wikipedia.org/wiki/Michael_Ende" target="_blank">Michael Ende</a></p>
    </div>
    &nbsp;
    <div class="quote">
        <p>
            "Mind precedes all mental states. Mind is their chief; they are all mind-wrought. If with a pure mind a person speaks or acts happiness follows him like his never-departing shadow."
        </p>
        <p class="quote-reference">– <a href="https://en.wikipedia.org/wiki/Buddha" target="_blank">Buddha  (Dhammapada 1.2)</a></p>
    </div>

    <p>
        "Mind" part is about "inner self" and personal thoughts. Most of the time, you need to change your thoughts first
        to make a significant change in your life.
    </p>

    <p>
        "Warrior" part is about action and persistent effort. The change doesn't happen magically by itself.
    </p>

    <div class="quote">
        <p>
            "Yesterday I was clever, so I wanted to change the world. Today I am wise, so I am changing myself."
        </p>
        <p class="quote-reference">– <a href="https://en.wikipedia.org/wiki/Rumi" target="_blank">Rumi</a></p>
    </div>
    &nbsp;
    <div class="quote">
        <p>
            "Be the change that you wish to see in the world."
        </p>
        <p class="quote-reference">– <a href="https://en.wikipedia.org/wiki/Mahatma_Gandhi" target="_blank">Mahatma Gandhi</a></p>
    </div>
    &nbsp;
    <div class="quote">
        <p>
            "Everyone thinks of changing the world, but no one thinks of changing themselves."
        </p>
        <p class="quote-reference">– <a href="https://en.wikipedia.org/wiki/Leo_Tolstoy" target="_blank">Leo Tolstoy</a></p>
    </div>

    <p id="smooth-name-betterworld" class="anchor">
        We (creators of the game) strongly believe that everyone could make a difference in the world.
        By changing ourselves, we contribute in making the world a better place.
        Becoming better versions of ourselves leads us to better decisions, which result in better actions and
        outcomes for everyone to enjoy.
    </p>

    <p class="anchor">
        Therefore, every time you review your <a href="#formula"><i>Formula of Firm Resolution</i></a>, you're not only improving your life,
        but also making the world a better place for everyone! 🙌
    </p>

    <p>This is what the name MindWarrior is all about.</p>

    <p>¯\_(ツ)_/¯</p>

</div>

<div id="smooth-formula-example" class="faq-item">
    <h3>Can I see Formulas of other players?</h3>

    <p>
        MindWarrior takes privacy of the players very seriously.
        Your <i>Formula of Firm Resolution</i> is stored locally on your device and
        the game doesn't create any copies of your Formula or send it anywhere.
        Therefore, it is physically impossible to see the <i>Formula</i> of a
        random player simply because the game itself doesn't have the access to it.
        (Please check our <a href="/privacy-policy.<?=$LANG;?>.<?=getenv('LINK_EXT');?>" target="_blank">Privacy policy</a> for more details.)
    </p>
    <p>
        However, <strong>some players voluntarily shared their <i>Formulas</i> to the public
            on our website</strong>. These formulas could be found
        on "<a href="/public-formulas.<?=$LANG;?>.<?=getenv('LINK_EXT');?>">Public Formulas</a>" page.
        Please feel free to check them out!
    </p>
    <p>
        If you'd like to help inspiring other players by sharing your own <i>Formula</i>, please follow
        <a href="https://github.com/mindwarriorgame/public-formulas/blob/main/README.md" target="_blank">these instructions</a>.
    </p>
</div>


<div id="smooth-share" class="faq-item">
    <h3>Can I share my Formula with others players?</h3>

    <p>
        Please refer to <a href="#formula-example">the question above</a> for more details.
    </p>

</div>

<div id="smooth-privacy" class="faq-item">
    <h3>Who could see my Formula?</h3>

    <p>
        By default, only you can see your Formula. It is stored locally on your device inside the Telegram WebView and is not sent to our servers.

        If you choose to share your Formula manually (for example, by submitting it to the Public Formulas page), other people will be able to see that shared version.
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
