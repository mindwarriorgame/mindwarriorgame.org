<?php
ob_start();

$ext = getenv('LINK_EXT');
require_once("includes/image_tag_renderer.php");

$LANG='fr';
?>

    <div id="smooth-purpose" class="faq-item">
        <h3>Quel est le but du jeu ?</h3>
        <p>
            Le jeu "MindWarrior" a été créé pour vous aider dans votre parcours de croissance personnelle, de développement et de transformation.
            Le concept principal du jeu – <a href="#formula"><i>Formule de ferme résolution</i></a> – est votre message d'inspiration privé
            que vous écrivez pour vous-même et que vous consultez régulièrement au cours de la journée.
        </p>

        <p>
            Chaque fois que vous consultez votre <i>Formule</i>, vos pensées reviennent vers ce qui compte vraiment pour vous.
            Cette pratique aide à garder votre esprit clair et concentré sur les choses les plus importantes, en l'éloignant de la monotonie, du bruit et des distractions de la vie quotidienne.
        </p>
    </div>

    <div id="smooth-formula" class="faq-item">
        <h3>Que devrais-je écrire dans ma Formule ?</h3>

        <p>
            La <i>Formule de ferme résolution</i> est un message texte libre et privé, où vous pouvez
            écrire tout ce qui a du sens pour vous. Il peut s'agir de vos citations préférées, de mantras, de rappels, de pensées et d'observations sages, ou de tout autre contenu, à vous de décider ! La seule directive est qu'il
            devrait vous motiver dans votre parcours personnel de transformation et de croissance.
        </p>
        <p>
            Une <i>Formule</i> forte <a href="#review">vous gardera concentré, motivé et discipliné</a>. Elle vous soutiendra quotidiennement et vous aidera
            à rester engagé et déterminé. Si vous recevez constamment des rappels du jeu concernant des consultations manquées, ou si vous commencez à penser à quitter le jeu,
            cela pourrait être un signe que votre <i>Formule</i> nécessite une révision.
        </p>
    </div>



    <div id="smooth-review" class="faq-item">
        <h3>Que se passe-t-il lorsque je consulte ma Formule ?</h3>

        <p>
            Spirituellement, chaque fois que vous consultez votre <i>Formule de ferme résolution</i>, l'attention de votre esprit
            se recentre sur les choses les plus importantes de votre vie, vous éloignant des distractions et des futilités
            de la vie quotidienne.
        </p>

        <p>
            Dans le jeu, lorsque vous effectuez la consultation sans être rappelé de le faire,
            vous gagnez des récompenses de jeu !
        </p>

        <p>
            <a href="/images/faq_en/review_plus_score.jpg" class="image-link" target="_blank">
                <?=renderImageTag(200, "images/faq_en/review_plus_score.jpg", "/images/faq_en/review_plus_score.jpg");?>
            </a>
        </p>

    </div>

    <div id="smooth-forgot" class="faq-item">
        <h3>Que se passe-t-il si j'oublie de consulter ma Formule ?</h3>

        <p>
            Si vous oubliez de consulter votre <i>Formule de ferme résolution</i> à temps, le jeu vous enverra une notification de rappel.
            Si vous l'ignorez, alors (selon le niveau de difficulté) vous pourriez être pénalisé.
        </p>

        <p>
            <a href="/images/faq_en/review_minus_score.jpg" class="image-link" target="_blank">
                <?=renderImageTag(450, "images/faq_en/review_minus_score.jpg", "/images/faq_en/review_minus_score.jpg");?>
            </a>
        </p>

    </div>



    <div id="smooth-difficulty" class="faq-item">
        <h3>À quelle fréquence dois-je consulter ma Formule ?</h3>

        <p>
            Vous pouvez consulter votre <i>Formule</i> aussi souvent que vous le souhaitez, cependant seules les consultations effectuées
            avec au moins 5 minutes d'écart seront récompensées (règle de "période de récupération").
        </p>

        <p>
            La fréquence des consultations et les pénalités pour celles manquées sont déterminées par le niveau de difficulté du jeu,
            que vous pouvez changer à tout moment en utilisant la commande <span class="code-highlight">/difficulty</span>.
        </p>
    </div>

    <div id="smooth-pause" class="faq-item">
        <h3>Comment faire une pause sans pénalités ?</h3>

        <p>
            Pour faire une pause, il suffit de mettre le jeu en pause avec la commande <span class="pre">/pause</span>.
        </p>

        <p>
            Le jeu en pause ne vous enverra aucune notification et n'affectera pas vos scores de jeu.
            Le compteur de temps de jeu actif ne comptera pas non plus.
        </p>

        <p>
            Pour reprendre le jeu, consultez simplement votre <i>Formule</i> comme d'habitude.
        </p>
    </div>

    <div id="smooth-formula-formatting" class="faq-item">
        <h3>Puis-je utiliser la mise en forme du texte dans la Formule ?</h3>

        <p>
            L'éditeur de <i>Formule</i> prend en charge la <a href="https://www.markdownguide.org/cheat-sheet/" target="_blank">syntaxe markdown</a>.
        </p>
        <p>
            <a href="/images/faq_en/markdown.jpg" class="image-link" target="_blank">
                <?=renderImageTag(450, "images/faq_en/markdown.jpg", "/images/faq_en/markdown.jpg");?>
            </a>
        </p>
    </div>


    <div id="smooth-controls" class="faq-item">
        <h3>️Quels sont les contrôles du jeu ?</h3>
        <p>
            Le jeu prend en charge les commandes suivantes :
        </p>
        <ul>
            <li><strong><span class="pre">/review</span></strong> - 💫 <a href="#review">consulter</a> votre <i>Formule</i></li>
            <li><strong><span class="pre">/pause</span></strong> - ⏸️ <a href="#pause">mettre en pause</a> le jeu</li>
            <li><strong><span class="pre">/formula</span></strong> - 🧪 ouvrir votre <a href="#formula"><i>Formule</i></a> dans l'éditeur</li>
            <li><span class="pre">/stats</span> - 📊 voir votre progression dans le jeu</li>
            <li><span class="pre">/difficulty</span> - 💪 changer le <a href="#difficulty">niveau de difficulté</a> (fréquence de vos consultations)</li>
            <li><span class="pre">/data</span> - 💾️ consulter et gérer vos données brutes</li>
        </ul>
        <p>
            <a href="/images/faq_en/menu.jpg" class="image-link" target="_blank">
                <?=renderImageTag(450, "images/faq_en/menu.jpg", "/images/faq_en/menu.jpg");?>
            </a>
        </p>
    </div>

    <div id="smooth-name" class="faq-item">
        <h3>Pourquoi le jeu s'appelle-t-il "MindWarrior" ?</h3>

        <div class="quote">
            <p>
                "Nous ne pouvons pas résoudre nos problèmes avec le même état d'esprit que celui que nous avions en les créant."
            </p>
            <p class="quote-reference">– <a href="https://en.wikipedia.org/wiki/Albert_Einstein" target="_blank">Albert Einstein</a></p>
        </div>

        &nbsp;
        <div class="quote">
            <p>
                "Rien ne peut changer pour eux, car eux-mêmes ne peuvent plus changer."
            </p>
            <p class="quote-reference">– <a href="https://en.wikipedia.org/wiki/Michael_Ende" target="_blank">Michael Ende</a></p>
        </div>
        &nbsp;
        <div class="quote">
            <p>
                "L'esprit précède tous les états mentaux. L'esprit en est le chef ; ils sont tous façonnés par l'esprit. Si avec un esprit pur une personne parle ou agit, le bonheur le suit comme son ombre qui ne s'éloigne jamais."
            </p>
            <p class="quote-reference">– <a href="https://en.wikipedia.org/wiki/Buddha" target="_blank">Bouddha (Dhammapada 1.2)</a></p>
        </div>

        <p>
            La partie "Mind" fait référence à "soi intérieur" et aux pensées personnelles. La plupart du temps, il faut changer ses pensées en premier
            pour effectuer un changement significatif dans sa vie.
        </p>

        <p>
            La partie "Warrior" concerne l'action et l'effort persistant. Le changement ne se produit pas magiquement par lui-même.
        </p>

        <div class="quote">
            <p>
                "Hier, j'étais intelligent, alors je voulais changer le monde. Aujourd'hui, je suis sage, alors je me change moi-même."
            </p>
            <p class="quote-reference">– <a href="https://en.wikipedia.org/wiki/Rumi" target="_blank">Rumi</a></p>
        </div>
        &nbsp;
        <div class="quote">
            <p>
                "Soyez le changement que vous souhaitez voir dans le monde."
            </p>
            <p class="quote-reference">– <a href="https://en.wikipedia.org/wiki/Mahatma_Gandhi" target="_blank">Mahatma Gandhi</a></p>
        </div>
        &nbsp;
        <div class="quote">
            <p>
                "Tout le monde pense à changer le monde, mais personne ne pense à se changer soi-même."
            </p>
            <p class="quote-reference">– <a href="https://en.wikipedia.org/wiki/Leo_Tolstoy" target="_blank">Léon Tolstoï</a></p>
        </div>

        <p>
            Nous (créateurs du jeu) croyons fermement que chacun peut faire une différence dans le monde.
            En nous changeant nous-mêmes, nous contribuons à rendre le monde meilleur.
            Devenir de meilleures versions de nous-mêmes nous conduit à de meilleures décisions, qui entraînent de meilleures actions et
            des résultats dont tout le monde peut profiter.
        </p>

        <p>
            Par conséquent, chaque fois que vous consultez votre <a href="#formula"><i>Formule de ferme résolution</i></a>, vous améliorez non seulement votre vie,
            mais vous rendez également le monde meilleur pour tout le monde ! 🙌
        </p>

        <p>C'est ce que signifie le nom "MindWarrior" ¯\_(ツ)_/¯.</p>

    </div>


    <div id="smooth-formula-example" class="faq-item">
        <h3>Puis-je voir les Formules des autres joueurs ?</h3>

        <p>
            Le jeu "MindWarrior" prend la confidentialité des joueurs très au sérieux.
            Votre <i>Formule de ferme résolution</i> est stockée localement sur votre appareil et
            le jeu ne la copie ni ne l'envoie à ses serveurs.
            Il est donc physiquement impossible de voir la <i>Formule</i> d'un
            joueur aléatoire simplement parce que le jeu lui-même n'y a pas accès.
            (Veuillez consulter notre <a href="/privacy-policy.<?=$LANG;?>.<?=getenv('LINK_EXT');?>" target="_blank">Politique de confidentialité</a> pour plus de détails.)
        </p>
        <p>
            Cependant, <strong>certains joueurs ont volontairement partagé leurs <i>Formules</i> avec le public
                sur notre site web</strong>. Ces formules sont disponibles
            sur la page "<a href="/public-formulas.<?=$LANG;?>.<?=getenv('LINK_EXT');?>">Formules publiques</a>".
            N'hésitez pas à les consulter !
        </p>
        <p>
            Si vous souhaitez inspirer d'autres joueurs en partageant votre propre <i>Formule</i>, veuillez suivre
            <a href="https://github.com/mindwarriorgame/public-formulas/blob/main/README.md" target="_blank">ces instructions</a>.
        </p>
    </div>

    <div id="smooth-share" class="faq-item">
        <h3>Puis-je partager ma Formule avec d'autres joueurs ?</h3>

        <p>
            Veuillez consulter <a href="#formula-example">la question ci-dessus</a> pour plus de détails.
        </p>
    </div>

    <div id="smooth-privacy" class="faq-item">
        <h3>Qui peut voir ma Formule ?</h3>

        <p>
            Veuillez consulter <a href="#formula-example">la question ci-dessus</a> pour plus de détails.
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
