<?php
ob_start();

$ext = getenv('LINK_EXT');
?>

    <h2>Politique de confidentialité</h2>

    <h3>Introduction</h3>
    <p>
        Nous accordons une grande importance à votre vie privée. Votre <a href="/faq.fr.<?=$ext;?>#formula">"Formule de résolution ferme"</a>
        reste privée et sécurisée.
        Le jeu ne crée aucune copie et ne l'envoie nulle part.
        Elle est stockée directement sur votre appareil dans le
        <a href="https://davitdvalashvili1996.medium.com/local-storage-in-javascript-f7aad374980e"
           target="_blank">localStorage</a> du WebView de Telegram
        <a href="https://docs.ton.org/develop/dapps/telegram-apps/testing-apps#debug-mode-for-mini-apps"
           target="_blank">WebView</a>.
    </p>

    <p>
        En raison de cela, nous vous recommandons de créer régulièrement des copies de sauvegarde manuelles de votre Formule en copiant son contenu
        dans un endroit sécurisé (par exemple, les <a href="https://telegram.org/blog/new-saved-messages-and-9-more" target="_blank">messages sauvegardés</a> de Telegram).
    </p>

    <h3>Sources ouvertes</h3>
    <p>
        Notre projet est fièrement open source, permettant une transparence totale sur la manière dont le jeu traite vos données.
        N'hésitez pas à parcourir les sources du jeu sur GitHub :
        <a href="https://github.com/orgs/mindwarriorgame/repositories" target="_blank">https://github.com/orgs/mindwarriorgame/repositories</a>
    </p>

    <h3>Données que nous collectons</h3>

    <p>Le jeu collecte les données utilisateur suivantes :</p>

    <h4>Informations utilisateur</h4>
    <ul>
        <li><span class="code-highlight">user_id</span> : Un identifiant Telegram unique de l'utilisateur
            (<a href="https://flows.network/blog/how-to-find-telegram-chat-id#:~:text=Telegram%20has%20three%20different%20kinds,is%20called%20group%20chat%20ID." target="_blank">chat_id</a>),
            un simple numéro.
        </li>
        <li><span class="code-highlight">lang_code</span> : Le code de la langue de l'utilisateur.</li>
        <li><span class="code-highlight">shared_key_uuid</span> : Une chaîne aléatoire associée à l'utilisateur.</li>
    </ul>

    <h4>Données de jeu</h4>
    <ul>
        <li>
            <span class="code-highlight">difficulty</span>,
            <span class="code-highlight">rewards</span> : nombres simples
        </li>

        <li>
            <span class="code-highlight">review_counter_state</span>,
            <span class="code-highlight">active_game_counter_state</span>,
            <span class="code-highlight">paused_counter_state</span> : valeurs de chronomètre qui
            contiennent des horodatages, des compteurs de temps écoulé et des indicateurs de statut.
        </li>

        <li>
            <span class="code-highlight">last_reward_time</span>,
            <span class="code-highlight">next_prompt_time</span> : horodatages
        </li>
        <li>
            <span class="code-highlight">next_prompt_type</span> : chaîne de caractères (pouvant contenir uniquement 2 valeurs possibles : "rappel" et "pénalité").
        </li>

        <li>
            <span class="code-highlight">counters_history_serialized</span> : données historiques des compteurs du joueur pour générer le graphique de progression.
        </li>
    </ul>

    <h3>Comment nous utilisons vos données</h3>
    <p>Nous utilisons les données collectées pour :</p>
    <ul>
        <li>fournir, exploiter et maintenir l'expérience de jeu</li>
        <li>comprendre et analyser comment les joueurs utilisent le jeu</li>
        <li>développer de nouvelles fonctionnalités et améliorations pour le jeu</li>
    </ul>

    <h3>Stockage des données</h3>
    <p>Nous stockons vos données de manière sécurisée et prenons des mesures appropriées pour les protéger contre tout accès non autorisé,
        divulgation, altération ou destruction.
    </p>

    <h3>Vos droits</h3>
    <p>Vous avez les droits suivants concernant vos données :</p>
    <ul>
        <li><strong>Accès</strong> : Vous pouvez accéder à toutes vos données à tout moment en utilisant
            la commande <span class="code-highlight">/data</span>. Cela renverra toutes les données brutes que le jeu stocke à votre sujet.
        </li>
        <li><strong>Suppression</strong> : Vous pouvez supprimer vos données à tout moment en utilisant
            la commande <span class="code-highlight">/data</span> du bot, puis en cliquant sur le bouton "Supprimer".
            <ul>
                <li>
                    Veuillez également vous assurer de supprimer l'historique de conversation avec le bot du jeu, car il est stocké en dehors de notre contrôle,
                    quelque part sur Telegram. Cependant, cela ne garantit pas la suppression complète de vos données, car nous ne savons pas comment Telegram les gère. Veuillez consulter la section "Utiliser Telegram" ci-dessous pour plus d'informations.
                </li>
            </ul>
        </li>
    </ul>

    <h3>Utiliser Telegram</h3>

    <p>
        Le projet est mis en œuvre sous forme de bot dans Telegram. Pour cette raison, vous devez également consulter la propre
        <a href="https://telegram.org/privacy" target="_blank">politique de confidentialité de Telegram</a> afin de comprendre comment ils traiteront vos données. Nous ne sommes pas responsables des pratiques de confidentialité de Telegram et nous n'avons aucune visibilité ni contrôle sur celles-ci. Veuillez vous assurer que vous êtes à l'aise avec cela avant d'utiliser le jeu.
    </p>

    <h3>Modifications de cette politique</h3>
    <p>Nous pouvons mettre à jour cette politique de temps à autre. Veuillez consulter régulièrement cette page
        pour examiner la version la plus récente de notre politique de confidentialité.
    </p>

    <h2>Contactez-nous</h2>
    <p>Si vous avez des questions ou des préoccupations concernant cette politique,
        veuillez les soulever sous forme de problème GitHub dans l'un de nos dépôts :
        <a href="https://github.com/mindwarriorgame" target="_blank">https://github.com/mindwarriorgame</a>
    </p>

    <p>En utilisant le jeu, vous consentez à la collecte et à l'utilisation de vos données telles que décrites
        dans cette politique.
    </p>








<?php
$CONTENT = ob_get_contents();
ob_end_clean();

$LANG='fr';
$MENU_SELECTED = "privacy-policy";
$MENU = include("includes/menu.fr.php");

$TITLE="MindWarrior: Politique de confidentialité";

$CSS = ["includes/quick-start.css"];
$JS = [];

include("includes/layout.php");