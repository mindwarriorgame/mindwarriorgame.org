<?php
ob_start();

$ext = getenv('LINK_EXT');
require_once("includes/image_tag_renderer.php");

$LANG='fr';
?>

    <div id="smooth-purpose" class="faq-item">
        <h3>Quel est le but du jeu ?</h3>
        <p>
            Le jeu "MindWarrior" a été créé pour vous aider dans votre développement personnel.
            Il y parvient en vous gardant concentré sur vos rêves et vos aspirations.
            Le concept principal du jeu – <a href="#formula"><i>Formule de ferme résolution</i></a> – est votre message d'inspiration privé
            que vous rédigez pour vous-même et que vous relisez régulièrement tout au long de la journée.
        </p>

        <p>
            Chaque fois que vous relisez la <i>Formule</i>, vos pensées reviennent à ce qui compte vraiment pour vous.
            Cette pratique vous aidera à garder votre esprit clair et concentré, en l'éloignant de la monotonie des distractions et du bruit de la vie quotidienne.
        </p>
    </div>

    <div id="smooth-formula" class="faq-item">
        <h3>Que dois-je écrire dans ma Formule ?</h3>

        <p>
            La <i>Formule de ferme résolution</i> est un message privé en texte libre, dans lequel vous pouvez
            exprimer tout ce qui a du sens pour vous. Cela peut être vos citations préférées, des mantras, des rappels, des pensées
            et des observations sages, ou tout autre chose, c'est à vous de décider ! La seule recommandation est qu'elle
            doit vous motiver vers votre développement personnel.
        </p>
        <p>
            Une <i>Formule</i> solide <a href="#review">vous gardera concentré, motivé et discipliné</a>. Elle doit vous soutenir dans votre parcours de vie et vous aider à rester engagé
            et déterminé. Si vous recevez des rappels constants du jeu concernant des révisions manquées, ou si vous envisagez d'abandonner le jeu,
            cela pourrait être le signe que votre <i>Formule</i> nécessite une révision.
        </p>

    </div>


    <div id="smooth-review" class="faq-item">
        <h3>Que se passe-t-il lorsque je révise ma Formule?</h3>

        <p>
            Spirituellement, lorsque vous révisez votre <i>Formule de résolution ferme</i>, cela ramène votre esprit à ce qui compte vraiment, vous éloignant des distractions et des futilités de la vie quotidienne.
        </p>

        <p>
            En termes de jeu, lorsque vous effectuez la révision sans y être rappelé, vous gagnerez des récompenses dans le jeu ! Veuillez <a href="#difficulty">consulter le tableau ci-dessous</a> pour les détails.
        </p>

        <p>
            <a href="/images/faq_en/review_plus_score.jpg" class="image-link" target="_blank>">
                <?=renderImageTag(200, "images/faq_en/review_plus_score.jpg", "/images/faq_en/review_plus_score.jpg");?>
            </a>
        </p>

        <p>
            Vous pouvez utiliser la commande <span class="pre">/stats</span> pour voir l'avancement de votre jeu.
        </p>

    </div>

    <div id="smooth-forgot" class="faq-item">
        <h3>Que se passe-t-il si j'oublie de réviser ma Formule?</h3>

        <p>
            Si vous oubliez de réviser votre <i>Formule de résolution ferme</i> à temps, le jeu vous enverra une notification pour vous le rappeler. Si vous l'ignorez, alors (en fonction du niveau de difficulté), vous pourriez être pénalisé. Veuillez <a href="#difficulty">consulter le tableau dans la réponse suivante</a> pour les détails.
        </p>

        <p>
            <a href="/images/faq_en/review_minus_score.jpg" class="image-link" target="_blank>">
                <?=renderImageTag(200, "images/faq_en/review_minus_score.jpg", "/images/faq_en/review_minus_score.jpg");?>
            </a>
        </p>

    </div>


    <div id="smooth-difficulty" class="faq-item">
        <h3>À quelle fréquence dois-je consulter ma Formule ?</h3>

        <p>
            Vous pouvez consulter votre <i>Formule</i> aussi souvent que vous le souhaitez, cependant seules les consultations espacées d'au moins
            5 minutes l'une de l'autre seront récompensées (règle de "cool-down").
        </p>

        <p>
            La fréquence des consultations et les pénalités pour celles manquées sont déterminées par le niveau de difficulté du jeu,
            que vous pouvez changer à tout moment en utilisant la commande <span class="code-highlight">/difficulty</span>.
        </p>

        <p>
            Si vous oubliez de consulter votre <i>Formule</i>, alors (selon le niveau de difficulté) vous pourriez être pénalisé.
        </p>

        <table>
            <tr>
                <td>Débutant</td>
                <td>
                    ⏰ consultation une fois toutes les 6 heures<br/>
                    😻 récompense pour une consultation avant le rappel : 2 étoiles<br/>
                    😺 récompense pour une consultation après le rappel : 1 étoile<br/>
                    😼 aucune pénalité
                </td>
            </tr>
            <tr>
                <td>Facile</td>
                <td>⏰ consultation une fois toutes les 3 heures<br/>
                    😻 récompense pour une consultation avant le rappel : 2 étoiles<br/>
                    😺 récompense pour une consultation après le rappel : 1 étoile<br/>
                    😼 pénalité pour le premier oubli : aucune pénalité<br/>
                    😿 pénalité pour chaque <a href="#next_penalty">oubli suivant(*)</a> : -3 étoiles<br />
                </td>
            </tr>
            <tr>
                <td>Normal</td>
                <td>⏰ consultation une fois toutes les 1 heure 30 minutes<br/>
                    😺 récompense pour une consultation avant le rappel : 1 étoile<br/>
                    😺 récompense pour une consultation après le rappel : 1 étoile<br/>
                    😿 pénalité pour le premier oubli : -3 étoiles<br/>
                    🙀 pénalité pour chaque <a href="#next_penalty">oubli suivant(*)</a> : -6 étoiles<br />
                </td>
            </tr>
            <tr>
                <td>Difficile</td>
                <td>⏰⚠️ consultation une fois toutes les 1 heure, <u>pas de rappels</u><br/>
                    😺 récompense pour une consultation : 1 étoile<br/>
                    😿 pénalité pour le premier oubli : -3 étoiles<br/>
                    🙀 pénalité pour chaque <a href="#next_penalty">oubli suivant(*)</a> : -6 étoiles<br />
                </td>
            </tr>
            <tr>
                <td>Expert</td>
                <td>⏰⚠️ consultation une fois toutes les 45 minutes, <u>pas de rappels</u><br/>
                    😺 récompense pour une consultation : 1 étoile<br/>
                    🙀 pénalité pour chaque oubli : -6 étoiles<br />
                </td>
            </tr>
        </table>

        <p id="next_penalty">
            (*) Une fois que vous effectuez une consultation, le "compteur de pénalités" est réinitialisé. Disons que votre niveau de difficulté est "Facile" et
            que vous manquez quelques consultations. Voici ce qui se passe :
        <ul>
            <li>
                ⏰ le jeu envoie une notification de rappel
                <ul><li>😼 (dans 15 minutes) premier oubli : pas de pénalités</li></ul>
            </li>
            <li>
                ⏰ (dans 2 heures 45 minutes) le jeu envoie une notification de rappel
                <ul><li>😿 (dans 15 minutes) oubli suivant : -3 étoiles</li></ul>
            </li>
            <li>
                ⏰ (dans 2 heures 45 minutes) le jeu envoie une notification de rappel
                <ul><li>😿 (dans 15 minutes) oubli suivant : -3 étoiles</li></ul>
            </li>
            <li>
                <strong>😺 vous consultez votre <i>Formule</i> : +1 étoile</strong>
                <ul><li>le "compteur de pénalités" est réinitialisé</li></ul>
            </li>
            <li>
                ⏰ (dans 2 heures 45 minutes) le jeu envoie une notification de rappel
                <ul><li><strong>😼 (dans 15 minutes) premier oubli : pas de pénalités</strong></li></ul>
            </li>
            <li>
                ⏰ le jeu envoie une notification de rappel
                <ul><li>😿 (dans 15 minutes) oubli suivant : -3 étoiles</li></ul>
            </li>
        </ul>
        </p>

    </div>


    <div id="smooth-pause" class="faq-item">
        <h3>Comment faire une pause sans pénalités ?</h3>

        <p>
            Pour faire une pause, il suffit de mettre le jeu en pause avec la commande <span class="pre">/pause</span>.
        </p>

        <p>
            Le jeu en pause ne vous enverra aucune notification et ne modifiera pas vos scores de jeu.
            Le compteur de temps de jeu actif ne tournera pas non plus.
        </p>

        <p>
            Pour reprendre le jeu, relisez simplement votre <i>Formule</i> comme d'habitude.
        </p>
    </div>

    <div id="smooth-formula-formatting" class="faq-item">
        <h3>Puis-je utiliser du formatage de texte dans la Formule ?</h3>

        <p>
            L'éditeur de <i>Formule</i> prend en charge la <a href="https://www.markdownguide.org/cheat-sheet/" target="_blank">syntaxe markdown</a>.
        </p>
        <p>
            <a href="/images/faq_en/markdown.jpg" class="image-link" target="_blank>">
                <?=renderImageTag(300, "images/faq_en/markdown.jpg", "/images/faq_en/markdown.jpg");?>
            </a>
        </p>
    </div>

    <div id="smooth-controls" class="faq-item">
        <h3>Quels contrôles le jeu propose-t-il ?</h3>
        <p>
            Pour commencer à jouer, vous n'avez besoin que de 3 commandes de base :
        </p>
        <ul>
            <li><strong><span class="pre">/review</span></strong> - 💫 <a href="#review">revoir</a> votre <i>Formule</i></li>
            <li><strong><span class="pre">/pause</span></strong> - ⏸️ <a href="#pause">mettre</a> le jeu en pause</li>
            <li><strong><span class="pre">/formula</span></strong> - 🧪 ouvrir votre <a href="#formula"><i>Formule</i></a> dans l'éditeur</li>
        </ul>
        <p>
            Commandes avancées :
        </p>
        <ul>
            <li><span class="pre">/stats</span> - 🌟 voir votre progression dans le jeu</li>
            <li><span class="pre">/difficulty</span> - 💪 changer le <a href="#difficulty">niveau de difficulté</a> (fréquence de vos revues)</li>
            <li><span class="pre">/data</span> - 🗂️ voir et gérer vos données brutes</li>
        </ul>
        <p>
            <a href="/images/faq_en/menu.jpg" class="image-link" target="_blank>">
                <?=renderImageTag(300, "images/faq_en/menu.jpg", "/images/faq_en/menu.jpg");?>
            </a>
        </p>
    </div>



    <div id="smooth-name" class="faq-item">
        <h3>Pourquoi le jeu s'appelle-t-il "MindWarrior" ?</h3>

        <div class="quote">
            <p>
                "Nous ne pouvons pas résoudre nos problèmes avec la même pensée que celle que nous avons utilisée pour les créer."
            </p>
            <p class="quote-reference">– <a href="https://en.wikipedia.org/wiki/Albert_Einstein" target="_blank">Albert Einstein</a></p>
        </div>

        &nbsp;
        <div class="quote">
            <p>
                "Rien ne peut changer pour eux, car ils ne peuvent plus se changer eux-mêmes."
            </p>
            <p class="quote-reference">– <a href="https://en.wikipedia.org/wiki/Michael_Ende" target="_blank">Michael Ende</a></p>
        </div>
        &nbsp;
        <div class="quote">
            <p>
                "L'esprit précède tous les états mentaux. L'esprit est leur chef ; ils sont tous forgés par l'esprit. Si une personne parle ou agit avec un esprit pur, le bonheur la suit comme son ombre qui ne la quitte jamais."
            </p>
            <p class="quote-reference">– <a href="https://en.wikipedia.org/wiki/Buddha" target="_blank">Bouddha (Dhammapada 1.2)</a></p>
        </div>

        <p>
            La partie "Mind" concerne le "soi intérieur" et les pensées personnelles. Pour effectuer un changement dans la vie, il faut d'abord changer son esprit.
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
                "Soyez le changement que vous voulez voir dans le monde."
            </p>
            <p class="quote-reference">– <a href="https://en.wikipedia.org/wiki/Mahatma_Gandhi" target="_blank">Mahatma Gandhi</a></p>
        </div>
        &nbsp;
        <div class="quote">
            <p>
                "Tout le monde pense à changer le monde, mais personne ne pense à se changer lui-même."
            </p>
            <p class="quote-reference">– <a href="https://en.wikipedia.org/wiki/Leo_Tolstoy" target="_blank">Léon Tolstoï</a></p>
        </div>

        <p>
            Nous (les créateurs du jeu) croyons fermement que chacun peut faire une différence dans le monde. En nous changeant, nous contribuons à rendre le monde meilleur. Devenir de meilleures versions de nous-mêmes nous conduit à de meilleures décisions, qui entraînent de meilleures actions et des résultats dont tout le monde peut profiter.
        </p>

        <p>
            Donc, chaque fois que vous révisez votre <a href="#formula"><i>Formule de ferme résolution</i></a>, vous améliorez non seulement votre vie, mais vous rendez également le monde meilleur pour tous ! 🙌
        </p>

        <p>C'est ça que représente le nom "MindWarrior" ¯\_(ツ)_/¯.</p>

    </div>

    <div id="smooth-formula-example" class="faq-item">
        <h3>Puis-je voir les Formules des autres joueurs ?</h3>

        <p>
            Le jeu "MindWarrior" prend la confidentialité des joueurs très au sérieux. Votre <i>Formule de ferme résolution</i> est stockée localement sur votre appareil et le jeu ne la copie ni ne l'envoie à ses serveurs. Par conséquent, il est physiquement impossible de voir la <i>Formule</i> d'un joueur aléatoire simplement parce que le jeu n'y a pas accès. (Veuillez consulter notre <a href="/privacy-policy.<?=$LANG;?>.<?=getenv('LINK_EXT');?>" target="_blank">politique de confidentialité</a> pour plus de détails.)
        </p>
        <p>
            Cependant, <strong>certains joueurs ont volontairement partagé leurs <i>Formules</i> publiquement sur notre site web</strong>. Ces formules peuvent être trouvées sur la page "<a href="/public-formulas.<?=$LANG;?>.<?=getenv('LINK_EXT');?>">Formules Publiques</a>". N'hésitez pas à les consulter !
        </p>
        <p>
            Si vous souhaitez inspirer d'autres joueurs en partageant votre propre <i>Formule</i>, veuillez suivre <a href="https://github.com/mindwarriorgame/public-formulas/blob/main/README.md" target="_blank">ces instructions</a>.
        </p>
    </div>

    <div id="smooth-share" class="faq-item">
        <h3>Puis-je partager ma Formule avec d'autres joueurs ?</h3>

        <p>
            Veuillez vous référer à <a href="#formula-example">la question ci-dessus</a> pour plus de détails.
        </p>

    </div>

    <div id="smooth-privacy" class="faq-item">
        <h3>Qui peut voir ma Formule ?</h3>

        <p>
            Veuillez vous référer à <a href="#formula-example">la question ci-dessus</a> pour plus de détails.
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
