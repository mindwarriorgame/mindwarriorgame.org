<?php
ob_start();

$ext = getenv('LINK_EXT');
$ACTIVE_MENU = 'tos';
$LANG='fr';
?>

    <h2>Conditions d’utilisation de MindWarrior</h2>

    <p style="padding-top: 0"><sub>Date d’entrée en vigueur : 2025-12-17</sub></p>

<p>MindWarrior est exploité par une personne physique basée en Australie (<i>nous</i>, <i>notre</i>).</p>

<p>En utilisant MindWarrior (le <i>Service</i>), vous acceptez les présentes Conditions.</p>

<h3>1) Le Service</h3>
<p>MindWarrior est un jeu d’auto-réflexion / de développement personnel pouvant inclure des rappels, des invites, et une page <i>Formules publiques</i> contenant des exemples sélectionnés soumis par des joueurs.</p>

<h3>2) Pas un avis professionnel</h3>
<p>Le Service et toute Formule publique sont fournis uniquement à titre d’information générale et d’inspiration. Ils ne constituent <strong>pas</strong> un avis médical, de santé mentale/psychologique, juridique ou financier, et ne remplacent pas les soins d’un professionnel.</p>
<p>Si vous êtes en danger immédiat ou avez besoin d’une aide urgente, contactez les services d’urgence locaux. En Australie, vous pouvez contacter <strong>Lifeline 13 11 14</strong>.</p>

<h3>3) Éligibilité</h3>
<p>Vous devez avoir au moins <strong>16 ans</strong>, ou disposer de l’autorisation d’un parent/tuteur, pour utiliser le Service.</p>

<h3>4) Utilisation acceptable</h3>
<p>Vous acceptez de ne pas utiliser le Service pour enfreindre la loi ou porter atteinte aux droits d’autrui, harceler/menacer/diffamer/usurper l’identité de quiconque, soumettre ou publier des données personnelles concernant d’autres personnes (y compris des noms ou des coordonnées), soumettre du texte protégé par le droit d’auteur que vous ne possédez pas, promouvoir la haine, l’automutilation, la violence ou une activité illégale, ou perturber le Service (y compris spam, scraping, piratage ou abus).</p>

<h3>5) Contributions des joueurs et Formules publiques</h3>
<p>Les contributions ne sont <strong>pas publiées automatiquement</strong>. Nous pouvons à tout moment examiner, modifier, rejeter ou supprimer des contributions.</p>
<p>Si vous soumettez une Formule en vue d’une éventuelle publication, vous confirmez qu’il s’agit de votre œuvre originale (ou que vous disposez des droits nécessaires pour la soumettre), et qu’elle ne contient pas de données personnelles concernant des tiers, de contenu diffamatoire, ni d’instructions nuisibles/illégales.</p>

<h3>6) CC0 (domaine public) pour les Formules publiées</h3>
<p>Si nous publions votre contribution en tant que Formule publique, vous acceptez qu’elle soit placée sous <strong>CC0 (domaine public)</strong>. Cela signifie que n’importe qui peut l’utiliser sans vous demander d’autorisation. Vous consentez à ce que nous la mettions en forme ou la modifiions pour plus de clarté et de sécurité.</p>

<h3>7) Signalement et demandes de suppression</h3>
<p>Nous pouvons supprimer toute Formule publique à tout moment. Pour signaler une Formule publique ou demander sa suppression, contactez-nous (voir ci-dessous) avec un lien (ou suffisamment de détails pour la retrouver). Si vous en êtes l’auteur, vous pouvez également nous contacter via le même moyen que celui utilisé pour la soumettre.</p>

<h3>8) Services tiers</h3>
<p>Le Service peut utiliser des plateformes et prestataires tiers (par exemple, Telegram et l’hébergement/l’infrastructure). Leurs conditions et politiques s’appliquent également à votre utilisation de ces services.</p>

<h3>9) Confidentialité</h3>
<p>Votre utilisation du Service est également régie par notre <strong><a href="/privacy-policy.<?=$LANG;?>.<?=$ext;?>">Politique de confidentialité</a></strong>.</p>

<h3>10) Disponibilité et modifications</h3>
<p>Nous pouvons modifier, suspendre ou interrompre le Service (ou toute partie de celui-ci) à tout moment. Nous ne garantissons pas que le Service sera toujours disponible, ininterrompu ou exempt d’erreurs.</p>

<h3>11) Exclusions de garanties</h3>
<p>Dans la mesure permise par la loi, le Service est fourni <strong>« tel quel »</strong> et <strong>« selon disponibilité »</strong>, sans garanties d’aucune sorte.</p>

<h3>12) Limitation de responsabilité</h3>
<p>Dans la mesure permise par la loi, nous ne sommes pas responsables des pertes indirectes ou consécutives (y compris perte de données, de profits ou d’atteinte à la réputation) résultant de votre utilisation du Service.</p>
<p>Rien dans les présentes Conditions n’exclut les garanties légales des consommateurs qui ne peuvent pas être exclues en vertu de la <strong>Australian Consumer Law</strong>.</p>

<h3>13) Droit applicable</h3>
<p>Les présentes Conditions sont régies par les lois de <strong>l’Australie</strong>. Tout litige relève des tribunaux du <strong>Queensland</strong> (sauf disposition impérative contraire).</p>

<h3>14) Modifications des présentes Conditions</h3>
<p>Nous pouvons mettre à jour ces Conditions de temps à autre afin de refléter des changements du Service, des exigences légales ou notre mode de fonctionnement. En cas de modification, nous mettrons à jour la « Date d’entrée en vigueur » en haut de cette page. Le fait de continuer à utiliser le Service après la publication des Conditions mises à jour signifie que vous acceptez ces modifications. Si vous n’acceptez pas les Conditions mises à jour, vous devez cesser d’utiliser le Service.</p>

<h3>15) Contact</h3>
<p>Questions concernant ces Conditions : <strong><a href="https://t.me/MindWarriorSupport_bot" target="_blank">Telegram</a></strong> ou <strong><a href="https://github.com/mindwarriorgame/mindwarrior-telegram-bot/issues" target="_blank">GitHub</a></strong>. (Veuillez ne pas inclure d’informations personnelles sensibles dans les issues GitHub.)</p>

<?php
$CONTENT = ob_get_contents();
ob_end_clean();

$MENU_SELECTED = "tos";
$MENU = include("includes/menu.$LANG.php");

$TITLE="MindWarrior : Conditions d’utilisation";

$CSS = ["includes/quick-start.css"];
$JS = [];

include("includes/layout.php");
?>
