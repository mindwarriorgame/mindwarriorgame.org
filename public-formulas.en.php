<?php
ob_start();

$ext = getenv('LINK_EXT');

$LANG='en';
?>


    <h2>Public Formulas</h2>

<p>This page is under development.</p>

    <p>Please help us to build it by sharing your own Formula in public! You can find the instructions how to do that here:
        <a href="https://github.com/mindwarriorgame/public-formulas/blob/main/README.md" target="_blank">
            https://github.com/mindwarriorgame/public-formulas/blob/main/README.md
        </a>
    </p>


    <div id="review" class="">


        <!-- vvv --- rendered HTML --- vvv --->

        <ol start="1"><li><strong>Everything comes from somewhere and goes somewhere.</strong>
                <ul><li>observe</li><li>smile</li><li>what’s holding you back?</li></ul></li></ol>

        <ol start="2"><li><strong>A clouded mind multiplies bad karma and suffering, yours and others'.</strong>
                <ul><li>all evil deeds, big and small, were committed by people with a clouded mind</li></ul></li></ol>

        <ol start="3"><li><strong>Break your mind down into the observer, the observed, and the background.</strong>
                <ul><li>realize that clinging to the observed is pointless and futile</li><li>what makes you think this is the truth? How many times has it let you down?</li><li>what makes you think it has any value? What makes you think it has any meaning?</li><li>clinging is not beneficial</li><li>don’t cling to the observed (thoughts/feelings/sensations). Who is the observer? What is the background? Focus there.</li><li><strong>the observer feels neither cold nor pain, nor does the background. Only the observed.</strong>
                        <ul><li><strong>You are more than the observed.</strong></li></ul></li></ul></li></ol>

        <h1>Right now, you are most likely in a clouded state of mind</h1>

        <ul><li>you worry about things that don’t exist (the past and the future)</li><li>you’re concerned about fleeting pleasure/discomfort that will soon disappear, and you won’t even remember it</li><li>you listen to an “inner voice” that talks nonsense, unrelated to reality</li><li>you don’t perceive reality as an illusion</li><li>you see other people as the source of your misery</li><li>you forget about your death, your place in space/cosmos, not to mention the emptiness of reality devoid of concepts</li></ul>

        <h1>In a clouded state of mind, you create bad karma</h1>

        <ul><li>people in a clouded state of mind create an immense amount of suffering. By staying in it, you remain among them: <strong>you are no better than the worst person</strong> you can think of, the differences are merely circumstantial.
                <ul><li>bad karma will bring you bad consequences</li><li>bad karma will multiply suffering in the world</li></ul></li></ul>

        <h1>Get out now!</h1>

        <ul><li><strong>decide, what kind of karma will you create?</strong></li><li>focus on the present moment, it’s all you have</li><li>remember that all your phenomena are just images, phantoms, husks. Watch how they arise and disappear. Where do they arise and disappear?</li><li><strong>split yourself into the observer, the observed, and the stage where it all happens, and shift your attention there</strong></li><li>shift your attention to your breath</li><li>reflect on the non-existence of the past and future. Why worry about them?</li><li>reflect on the fleeting nature of everything happening. Why worry about it?</li><li>reflect on the limitations of your everyday perception (no focus on the inevitability of death, no focus on your position in space/cosmos, though these things are far more important than what you’ll have for breakfast; a fish also thinks it understands reality as it is)</li><li>reflect on the fact that <strong>external things and other people cannot make you happy or unhappy</strong>, that it’s your choice (think about your high expectations of loved ones, who are just as clouded and lost)</li><li>reflect on the happiness of being born a human in the 21st century</li></ul>

        <h1>Quick self-check</h1>

        <ul><li>rushing to close the Message?</li><li>don’t want to meditate?</li><li>procrastinating?</li><li>irritated with others?</li><li>rushing to eat?</li><li>snacking? not drinking water?</li><li>not taking breaks?</li></ul>

        <!-- ^^^ --- rendered HTML --- ^^^ --->


    </div>

    <p>
        <span class="code-highlight">736dd20c-547a-4b69-9c2f-61b3e2e403c2, buddhism</span>
    </p>

    <p>
        <a href="#">See next formula</a>
    </p>






<?php
$CONTENT = ob_get_contents();
ob_end_clean();

$MENU_SELECTED = "public-formulas";
$MENU = include("includes/menu.$LANG.php");

$TITLE="MindWarrior: Public Formulas";

$CSS = ["includes/quick-start.css", "includes/public-formulas.css"];

$JS = [];

include("includes/layout.php");