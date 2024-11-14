<?php
ob_start();

$ext = getenv('LINK_EXT');

$LANG='fr';
?>

    <h2>Politique de confidentialité</h2>

    <h3>Introduction</h3>
    <p>
        Nous attachons une grande importance à votre vie privée. Votre
        <a href="/faq.<?=$LANG;?>.<?=$ext;?>#formula">"Formule de résolution ferme"</a>
        reste privée et sécurisée.
        Le jeu ne crée aucune copie et ne l'envoie nulle part.
        Elle est stockée directement sur votre appareil dans le
        <a href="https://davitdvalashvili1996.medium.com/local-storage-in-javascript-f7aad374980e"
           target="_blank">localStorage</a> du
        <a href="https://docs.ton.org/develop/dapps/telegram-apps/testing-apps#debug-mode-for-mini-apps"
           target="_blank">WebView</a> de Telegram.
    </p>

    <p>
        Pour cette raison, nous vous recommandons de créer régulièrement des copies de sauvegarde manuelles de votre Formule en copiant son contenu
        vers un endroit sécurisé (par exemple, les <a href="https://telegram.org/blog/new-saved-messages-and-9-more" target="_blank">Messages enregistrés</a> de Telegram).
    </p>

    <h3>Sources ouvertes</h3>
    <p>
        Notre projet est fièrement open source, ce qui permet une transparence totale quant à la manière dont le jeu traite vos données.
        N'hésitez pas à parcourir les sources du jeu sur GitHub :
        <a href="https://github.com/orgs/mindwarriorgame/repositories" target="_blank">https://github.com/orgs/mindwarriorgame/repositories</a>
    </p>


    <h3>Données que Nous Collectons</h3>

    <p>Le jeu collecte les données utilisateur suivantes :</p>

    <h4>Informations Utilisateur</h4>
    <ul>
        <li><span class="code-highlight">user_id</span> : Un identifiant unique Telegram de l'utilisateur
            (<a href="https://flows.network/blog/how-to-find-telegram-chat-id#:~:text=Telegram%20has%20three%20different%20kinds,is%20called%20group%20chat%20ID." target="_blank">chat_id</a>),
            un simple numéro.</li>
        <li><span class="code-highlight">lang_code</span> : Le code de la langue de l'utilisateur.</li>
        <li><span class="code-highlight">shared_key_uuid</span> : une chaîne de caractères aléatoire associée à l'utilisateur.</li>
    </ul>

    <h4>Données de Jeu</h4>
    <ul>
        <li>
            <span class="code-highlight">difficulty</span>
        </li>

        <li>
            <span class="code-highlight">review_counter_state</span>,
            <span class="code-highlight">active_game_counter_state</span>,
            <span class="code-highlight">paused_counter_state</span> : valeurs du chronomètre qui
            contiennent des horodatages, des compteurs de temps écoulé et des indicateurs d'état
        </li>

        <li>
            <span class="code-highlight">next_prompt_time</span> : horodatage
        </li>
        <li>
            <span class="code-highlight">next_prompt_type</span> : chaîne de caractères (ne peut contenir que 2 valeurs possibles : "reminder" et "penalty")
        </li>

        <li>
            <span class="code-highlight">counters_history_serialized</span> : données historiques des compteurs du joueur pour afficher le graphique de progression
        </li>

        <li>
            <span class="code-highlight">badges_serialized</span> : les données du plateau de jeu : badges gagnés, leurs statuts, niveau, etc.
        </li>
    </ul>


    <h3>Comment Nous Utilisons Vos Données</h3>
    <p>Nous utilisons les données collectées pour :</p>
    <ul>
        <li>fournir, opérer et maintenir l'expérience de jeu</li>
        <li>comprendre et analyser comment les joueurs utilisent le jeu</li>
        <li>développer de nouvelles fonctionnalités et capacités du jeu</li>
    </ul>

    <h3>Stockage des Données</h3>
    <p>Nous stockons vos données de manière sécurisée et prenons des mesures appropriées pour les protéger contre tout accès,
        divulgation, altération ou destruction non autorisés.</p>

    <h3>Vos Droits</h3>
    <p>Vous disposez des contrôles suivants concernant vos données :</p>
    <ul>
        <li><strong>Accès</strong> : Vous pouvez accéder à toutes vos données à tout moment en utilisant la commande
            <span class="code-highlight">/data</span>. Cela vous permettra de recevoir toutes les données brutes que le jeu stocke à votre sujet sur son serveur.</li>
        <li><strong>Suppression</strong> : Vous pouvez supprimer vos données à tout moment en utilisant la commande bot
            <span class="code-highlight">/data</span>, puis en cliquant sur le bouton "Supprimer".
            <ul>
                <li>
                    Veuillez également effacer l'historique de chat avec le bot du jeu car il est stocké en dehors de notre contrôle,
                    quelque part dans Telegram, bien que cela ne garantisse pas la suppression complète de vos données car nous
                    ne savons pas comment Telegram les gère. Veuillez consulter la section "Utiliser Telegram" ci-dessous pour plus d'informations.
                </li>
            </ul>
        </li>
    </ul>

    <h3>Utiliser Telegram</h3>

    <p>
        Le projet est implémenté en tant que bot sur Telegram. Pour cette raison, vous devriez également consulter la propre
        <a href="https://telegram.org/privacy" target="_blank">politique de confidentialité</a> de Telegram pour comprendre
        comment elle traitera vos données. Nous ne sommes pas responsables des pratiques de confidentialité de Telegram et nous n'avons
        ni visibilité ni contrôle sur celles-ci. Assurez-vous d'être à l'aise avec cela avant d'utiliser le jeu.
    </p>

    <h3>Modifications de Cette Politique</h3>

    <p>Nous pouvons mettre à jour cette politique de temps en temps. Veuillez vous assurer de vérifier régulièrement cette page
        pour consulter la dernière version de notre politique de confidentialité.</p>

    <h2>Nous Contacter</h2>

    <p>Si vous avez des questions ou des préoccupations concernant cette politique,
        veuillez les soulever en tant qu'Issue sur GitHub :
        <a href="https://github.com/mindwarriorgame/mindwarrior-telegram-bot/issues" target="_blank">https://github.com/mindwarriorgame/mindwarrior-telegram-bot/issues</a>
    </p>

    <p>En utilisant le jeu, vous consentez à la collecte et à l'utilisation de vos données telles que décrites
        dans cette politique.</p>









<?php
$CONTENT = ob_get_contents();
ob_end_clean();

$MENU_SELECTED = "privacy-policy";
$MENU = include("includes/menu.$LANG.php");

$TITLE="MindWarrior: Politique de confidentialité";

$CSS = ["includes/quick-start.css"];
$JS = [];

include("includes/layout.php");