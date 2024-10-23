<?php
ob_start();

$ext = getenv('LINK_EXT');

$LANG='fr';
?>


    <h2>Formules Publiques</h2>

    <p>Cette page est en cours de développement.</p>

    <p>Aidez-nous à la construire en partageant votre propre Formule en public ! Vous pouvez trouver les instructions pour ce faire ici :
        <a href="https://github.com/mindwarriorgame/public-formulas/blob/main/README.md" target="_blank">
            https://github.com/mindwarriorgame/public-formulas/blob/main/README.md
        </a>
    </p>


    <div id="review" class="">


        <!-- vvv --- rendu HTML --- vvv --->

        <ol start="1"><li><strong>Tout vient de quelque part et va quelque part.</strong>
                <ul><li>observer</li><li>sourire</li><li>qu'est-ce qui te retient ?</li></ul></li></ol>

        <ol start="2"><li><strong>Un esprit embrouillé multiplie le mauvais karma et la souffrance, la tienne et celle des autres.</strong>
                <ul><li>tous les actes mauvais, grands et petits, ont été commis par des personnes au mental embrouillé</li></ul></li></ol>

        <ol start="3"><li><strong>Décompose ton esprit en observateur, observé et arrière-plan.</strong>
                <ul><li>réalise que s'accrocher à l'observé est inutile et futile</li><li>qu'est-ce qui te fait croire que c'est la vérité ? Combien de fois cela t'a-t-il déçu ?</li><li>qu'est-ce qui te fait croire que cela a de la valeur ? Qu'est-ce qui te fait croire que cela a un sens ?</li><li>l'attachement n'est pas bénéfique</li><li>ne t'attache pas à l'observé (pensées/sentiments/sensations). Qui est l'observateur ? Quel est l'arrière-plan ? Concentre-toi là-dessus.</li><li><strong>l'observateur ne ressent ni froid ni douleur, ni l'arrière-plan. Seulement l'observé.</strong>
                        <ul><li><strong>Tu es plus que l'observé.</strong></li></ul></li></ul></li></ol>

        <h1>En ce moment, tu es probablement dans un état d'esprit embrouillé</h1>

        <ul><li>tu t'inquiètes pour des choses qui n'existent pas (le passé et le futur)</li><li>tu es préoccupé par des plaisirs/inconforts éphémères qui vont bientôt disparaître, et dont tu ne te souviendras même plus</li><li>tu écoutes une "voix intérieure" qui raconte des absurdités, sans lien avec la réalité</li><li>tu ne perçois pas la réalité comme une illusion</li><li>tu vois les autres comme la source de ton malheur</li><li>tu oublies ta mort, ta place dans l'espace/cosmos, sans parler du vide de la réalité dépourvue de concepts</li></ul>

        <h1>Dans un état d'esprit embrouillé, tu crées du mauvais karma</h1>

        <ul><li>les personnes dans un état d'esprit embrouillé créent une immense quantité de souffrance. En y restant, tu restes parmi eux : <strong>tu ne vaux pas mieux que la pire personne</strong> à laquelle tu peux penser, les différences sont simplement circonstancielles.
                <ul><li>le mauvais karma t'apportera de mauvaises conséquences</li><li>le mauvais karma multipliera la souffrance dans le monde</li></ul></li></ul>

        <h1>Sors-en maintenant !</h1>

        <ul><li><strong>décide, quel type de karma vas-tu créer ?</strong></li><li>concentre-toi sur le moment présent, c'est tout ce que tu as</li><li>rappelle-toi que tous tes phénomènes ne sont que des images, des fantômes, des coquilles vides. Observe comment ils surgissent et disparaissent. D'où surgissent-ils et disparaissent-ils ?</li><li><strong>sépare-toi en observateur, observé et scène où tout se passe, et déplace ton attention là-bas</strong></li><li>déplace ton attention vers ta respiration</li><li>réfléchis à l'inexistence du passé et du futur. Pourquoi s'en inquiéter ?</li><li>réfléchis à la nature éphémère de tout ce qui se passe. Pourquoi s'en inquiéter ?</li><li>réfléchis aux limites de ta perception quotidienne (pas de concentration sur l'inévitabilité de la mort, pas de concentration sur ta position dans l'espace/cosmos, bien que ces choses soient bien plus importantes que ce que tu prendras au petit-déjeuner ; un poisson pense aussi comprendre la réalité telle qu'elle est)</li><li>réfléchis au fait que <strong>les choses extérieures et les autres personnes ne peuvent pas te rendre heureux ou malheureux</strong>, que c'est ton choix (pense à tes attentes élevées envers tes proches, qui sont tout aussi embrouillés et perdus)</li><li>réfléchis au bonheur d'être né humain au 21e siècle</li></ul>

        <h1>Auto-vérification rapide</h1>

        <ul><li>tu te presses pour fermer le Message ?</li><li>tu ne veux pas méditer ?</li><li>tu procrastines ?</li><li>tu es irrité par les autres ?</li><li>tu te presses pour manger ?</li><li>tu grignotes ? tu ne bois pas d'eau ?</li><li>tu ne fais pas de pauses ?</li></ul>

        <!-- ^^^ --- rendu HTML --- ^^^ --->


    </div>

    <p>
        <span class="code-highlight">736dd20c-547a-4b69-9c2f-61b3e2e403c2, bouddhisme</span>
    </p>

    <p>
        <a href="#">Voir la prochaine formule</a>
    </p>






<?php
$CONTENT = ob_get_contents();
ob_end_clean();

$MENU_SELECTED = "public-formulas";
$MENU = include("includes/menu.$LANG.php");

$TITLE="MindWarrior: Formules Publiques";

$CSS = ["includes/quick-start.css", "includes/public-formulas.css"];

$JS = [];

include("includes/layout.php");