<?php
    ob_start();

    $ext = getenv('LINK_EXT');
    require_once("includes/image_tag_renderer.php");
?>

<div id="smooth-purpose" class="faq-item">
    <h3>What is the purpose of the game?</h3>
    <p>
        "MindWarrior" game was created to help you with your personal growth and development.
        It achieves that by keeping you focused on your dreams and aspirations.
        The main concept of the game – <a href="#formula"><i>Formula of firm resolution</i></a> – is your private inspirational message
        that you write for yourself and then review regularly during the day.
    </p>

    <p>
        Each time you review the <i>Formula</i>, your thoughts are returned back to what really matters for you.
        This practice will help you keep your mind clear and focused, pulling it away from the dullness of everyday life's noise and distractions.
    </p>

</div>

<div id="smooth-formula" class="faq-item">
    <h3>What should I write in my Formula?</h3>

    <p>
        <i>Formula of firm resolution</i> is a private freeform text message, in which you can
        express anything that is meaningful to you. It could be your favorite quotes, mantras, reminders, wise thoughts
        and observations, or anything else, you decide! The only guidance is that it
        should motivate you towards your personal growth and development.
    </p>
    <p>
        A strong <i>Formula</i> <a href="#review">will keep you focused, motivated, and disciplined</a>. It must support you on your life journey and help
        staying engaged
        and committed. If you find yourself receiving constant reminders from the game about missed reviews, or you are thinking of quitting the game,
        it might be a sign that your <i>Formula</i> requires a revision.
    </p>

</div>

<div id="smooth-review" class="faq-item">
    <h3>What happens when I review my Formula?</h3>

    <p>
        Spiritually, when you review your <i>Formula of firm resolution</i>, it
        brings your mind back to what truly matters, pulling you away from distractions and nonsense
        of everyday life.
    </p>

    <p>
        Game-wise, when you perform the review without being reminded about that,
        you will earn game rewards! Please <a href="#difficulty">refer to the table below</a> for the details.
    </p>

    <p>
        <a href="/images/faq_en/review_plus_score.jpg" class="image-link" target="_blank>">
            <?=renderImageTag(200, "images/faq_en/review_plus_score.jpg", "/images/faq_en/review_plus_score.jpg");?>
        </a>
    </p>

    <p>
        You could use <span class="pre">/stats</span> command to see the progress of your game.
    </p>

</div>

<div id="smooth-forgot" class="faq-item">
    <h3>What happens if I forget to review my Formula?</h3>

    <p>
        If you forget to review your <i>Formula of firm resolution</i> in time, the game will remind you with a notification.
        If you ignore it, then (depending on the difficulty level) you might be penalised.
        Please <a href="#difficulty">refer to the table in the next answer</a> for the details.
    </p>

    <p>
        <a href="/images/faq_en/review_minus_score.jpg" class="image-link" target="_blank>">
            <?=renderImageTag(200, "images/faq_en/review_minus_score.jpg", "/images/faq_en/review_minus_score.jpg");?>
        </a>
    </p>

</div>

<div id="smooth-difficulty" class="faq-item">
    <h3>How often do I need to review my Formula?</h3>

    <p>
        You can review your <i>Formula</i> as often as you'd like, however only the reviews performed at least
        5 minutes apart from each other will be rewarded ("cool-down" rule).
    </p>

    <p>
        The frequency of reviews and the penalties for missed ones are determined by the difficulty level of the game,
        which you could change at any time using <span class="code-highlight">/difficulty</span> command.
    </p>

    <p>
        If you forget to review your <i>Formula</i>, then (depending on the difficulty level) you might be penalised.
    </p>

    <table>
        <tr>
            <td>Beginner</td>
            <td>
                    ⏰ review once per 6 hours<br/>
                    😻 reward for a review before the reminder: 2 stars<br/>
                    😺 reward for a review after the reminder: 1 star<br/>
                    😼 no penalty
            </td>
        </tr>
        <tr>
            <td>Easy</td>
            <td>⏰ review once per 3 hours<br/>
                😻 reward for a review before the reminder: 2 stars<br/>
                😺 reward for a review after the reminder: 1 star<br/>
                😼 penalty for the first miss: no penalty<br/>
                😿 penalty for every <a href="#next_penalty">consequent(*) miss</a>: -3 stars<br />
            </td>
        </tr>
        <tr>
            <td>Normal</td>
            <td>⏰ review once per 1 hour 30 minutes<br/>
                😺 reward for a review before the reminder: 1 star<br/>
                😺 reward for a review after the reminder: 1 star<br/>
                😿 penalty for the first miss: -3 stars<br/>
                🙀 penalty for every <a href="#next_penalty">consequent(*) miss</a>: -6 stars<br />
            </td>
        </tr>
        <tr>
            <td>Hard</td>
            <td>⏰⚠️ review once per 1 hour, <u>no reminders</u><br/>
                😺 reward for a review: 1 star<br/>
                😿 penalty for the first miss: -3 stars<br/>
                🙀 penalty for every <a href="#next_penalty">consequent(*) miss</a>: -6 stars<br />
            </td>
        </tr>
        <tr>
            <td>Expert</td>
            <td>⏰⚠️ review once per 45 minutes, <u>no reminders</u><br/>
                😺 reward for a review: 1 star<br/>
                🙀 penalty for every miss: -6 stars<br />
            </td>
        </tr>
    </table>

    <p id="next_penalty">
        (*) Once you perform a review, the "penalty counter" restarts. Let's say your difficulty level is "Easy" and
        you miss some reviews. This is what happens:
    <ul>
        <li>
            ⏰ the game sends a reminder notification
            <ul><li>😼 (in 15 minutes) first miss: no penalties</li></ul>
        </li>
        <li>
            ⏰ (in 2 hours 45 minutes) the game sends a reminder notification
            <ul><li>😿 (in 15 minutes) consequent miss: -3 stars</li></ul>
        </li>
        <li>
            ⏰ (in 2 hours 45 minutes) the game sends a reminder notification
            <ul><li>😿 (in 15 minutes) consequent miss: -3 stars</li></ul>
        </li>
        <li>
            <strong>😺 you review your <i>Formula</i>: +1 star</strong>
            <ul><li>the "penalty counter" is restarted</li></ul>
        </li>
        <li>
            ⏰ (in 2 hours 45 minutes) the game sends a reminder notification
            <ul><li><strong>😼 (in 15 minutes) first miss: no penalties</strong></li></ul>
        </li>
        <li>
            ⏰ the game sends a reminder notification
            <ul><li>😿 (in 15 minutes) consequent miss: -3 stars</li></ul>
        </li>
    </ul>
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
    </p>

    <p>
        To resume the game, simply review your <i>Formula</i> as usually.
    </p>
</div>

<div id="smooth-formula-formatting" class="faq-item">
    <h3>Can I use text formatting in Formula?</h3>

    <p>
        <i>Formula</i> editor supports <a href="https://www.markdownguide.org/cheat-sheet/" target="_blank">markdown syntax</a>.
    </p>
    <p>
        <a href="/images/faq_en/markdown.jpg" class="image-link" target="_blank>">
            <?=renderImageTag(300, "images/faq_en/markdown.jpg", "/images/faq_en/markdown.jpg");?>
        </a>
    </p>
</div>

<div id="smooth-controls" class="faq-item">
    <h3>️Which controls does the game have?</h3>
    <p>
        To start playing, you only need 3 basic commands:
    </p>
    <ul>
        <li><strong><span class="pre">/review</span></strong> - 💫 <a href="#review">review</a> your <i>Formula</i>
        <li><strong><span class="pre">/pause</span></strong> - ⏸️ <a href="#pause">pause</a> the game</li>
        <li><strong><span class="pre">/formula</span></strong> - 🧪 open your <a href="#formula"><i>Formula</i></a> in editor</li>
    </ul>
    <p>
        Advanced commands:
    </p>
    <ul>
        <li><span class="pre">/stats</span> - 🌟 view your game progress</li>
        <li><span class="pre">/difficulty</span> - 💪 change the <a href="#difficulty">difficulty</a> level (frequency of your reviews)</li>
        <li><span class="pre">/data</span> - 🗂️ view and manage your raw data</li>
    </ul>
    <p>
        <a href="/images/faq_en/menu.jpg" class="image-link" target="_blank>">
            <?=renderImageTag(300, "images/faq_en/menu.jpg", "/images/faq_en/menu.jpg");?>
        </a>
    </p>
</div>


<div id="smooth-name" class="faq-item">
    <h3>Why the game is called "MindWarrior"?</h3>

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
        "Mind" part is about "inner self" and personal thoughts.
        To make a change in life, first you have to make a change in your mind.
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

    <p>
        We (creators of the game) strongly believe that everyone could make a difference in the world.
        By changing ourselves, we contribute in making the world a better place.
        Becoming better versions of ourselves leads us to better decisions, which result in better actions and
        outcomes for everyone to enjoy.
    </p>

    <p>
        Therefore, every time you review your <a href="#formula"><i>Formula of firm resolution</i></a>, you're not only improving your life,
        but also making the world a better place for everyone! 🙌
    </p>

    <p>This is what "MindWarrior" name is all about ¯\_(ツ)_/¯.</p>

</div>

<div id="smooth-formula-example" class="faq-item">
    <h3>Can I see Formulas of other players?</h3>

    <p>
        "MindWarrior" game takes privacy of the players very seriously.
        Your <i>Formula of firm resolution</i> is stored locally on your device and
        the game never copies or sends it to its servers.
        Therefore, it is physically impossible to see the <i>Formula</i> of a
        random player simply because the game doesn't have access to it.
        (Please check our <a href="/privacy-policy.en.<?=getenv('LINK_EXT');?>" target="_blank">Privacy policy</a> for more details.)
    </p>
    <p>
        However, <strong>some players voluntarily shared their <i>Formulas</i> in public
            on our website</strong>. These formulas could be found
        on "<a href="/public-formulas.en.<?=getenv('LINK_EXT');?>">Public Formulas</a>" page.
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
        Please refer to <a href="#formula-example">the question above</a> for more details.
    </p>
</div>


<?php
    $CONTENT = ob_get_contents();
    ob_end_clean();

    $LANG='en';
    $MENU = include("includes/menu.en.php");

    $TITLE="MindWarrior: FAQ";

    $CSS = ["/includes/faq_anchors.css"];
    $JS = ["/includes/faq_anchors.js"];

    include("includes/layout.php");
