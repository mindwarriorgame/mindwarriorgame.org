<?php
ob_start();

$ext = getenv('LINK_EXT');

require_once("includes/image_tag_renderer.php");

$LANG='ru';
?>

    <div id="smooth-purpose" class="faq-item">
        <h3>В чем цель игры?</h3>
        <p>
            Цель игры "MindWarrior" – поддержать вас на пути вашего личностного развития.
            Для этого игра попросит вас записать <a href="#formula"><i>"Формулу твердой решимости"</i></a> – вдохновляющее приватное послание для
            себя, которое вы будете регулярно просматривать в течение своего дня.
        </p>

        <p>
            Всякий раз, когда вы просматриваете свою <i>Формулу</i>, ваши мысли возвращаются к тому, что действительно важно для вас.
            Эта практика помогает вам не утонуть в ежедневном потоке будничных забот, поддерживая ваш фокус на ваших истинных целях и ценностях.
        </p>

    </div>

    <div id="smooth-formula" class="faq-item">
        <h3>Что писать в "Формуле"?</h3>

        <p>
            <i>"Формула твердой решимости"</i> – это послание самому себе, которое вы будете просматривать
            регулярно в течение дня. Вы можете написать туда
            все, что захотите. Главное, чтобы эта информация была для вас полезной и мотивирующей на вашем пути.
            Это может быть любимая мотивирующая цитата, мантра, личные цели, мудрые мысли и наблюдения, напоминания,
            или что-то другое – только вам решать!
        </p>
        <p>
            Хорошая <i>Формула</i> <a href="#review">поможет вам сконцентрироваться, будет вас поддерживать и мотивировать</a> в течение всего дня.
            Если же вы постоянно пропускаете просмотры, и игре приходится вам напоминать; или же если вы задумались бросить игру,
            то возможно это признак того, что нужно улучшить свою <i>Формулу</i>.
        </p>

    </div>

    <div id="smooth-review" class="faq-item">
        <h3>Что происходит во время просмотра "Формулы"?</h3>

        <p>
            Всякий раз, когда вы просматриваете свою <i>Формулу твердой решимости</i>, вы
            возвращаете себя к своим самым важным мыслям, вытягивая себя из круговорота будничных забот, в котором так легко
            потеряться.
        </p>

        <p>
            С точки зрения игры, просмотры <i>Формулы</i> приносят вам награды и разблокируют новые игровые уровни!
        </p>

        <p>
            <a href="/images/faq_ru/review_plus_score.jpg" class="image-link" target="_blank>">
                <?=renderImageTag(200, "images/faq_ru/review_plus_score.jpg", "/images/faq_ru/review_plus_score.jpg");?>

            </a>
        </p>

    </div>

    <div id="smooth-forgot" class="faq-item">
        <h3>Что будет, если забыть просмотреть "Формулу"?</h3>

        <p>
            Если вы забудете просмотреть свою <i>Формулу твердой решимости</i>, то игра напомнит вам об этом.
            В зависимости от выбранного уровня сложности, пропуски могут затруднить вам
            процесс разблокирования последующих игровых уровней.
        </p>

        <p>
            <a href="/images/faq_ru/review_minus_score.jpg" class="image-link" target="_blank>">
                <?=renderImageTag(450, "images/faq_ru/review_minus_score.jpg", "/images/faq_ru/review_minus_score.jpg");?>
            </a>
        </p>

        <p id="smooth-forgot-grumpycat" class="anchor">
            Для ускорения процесса разблокирования, вы можете чаще просматривать <i>Формулу</i>, но не чаще, чем раз в 5 минут
            (иначе просмотр не будет засчитан).
        </p>

    </div>

    <div id="smooth-difficulty" class="faq-item">
        <h3>Как часто нужно просматривать "Формулу"?</h3>

        <p>
            Вы можете просматривать свою <i>Формулу</i> как угодно часто, но <a href="#review">вознаграждаются</a> только те просмотры, между которыми
            прошло хотя бы 5 минут.
        </p>

        <p>
            Частота просмотра <i>Формулы твердой решимости</i> зависит от уровня сложности игры: чем выше сложность, тем
            чаще требуются просмотры.
            Уровень сложности можно поменять в любой момент с помощью команды <span class="pre">/difficulty</span>.
        </p>

    </div>

    <div id="smooth-pause" class="faq-item">
        <h3>Как сделать перерыв от игры без штрафов?</h3>

        <p>
            Если вам нужен перерыв, то воспользуйтесь командой "пауза" (<span class="pre">/pause</span>).
        </p>

        <p>
            Когда игра "на паузе", вы не будете получать оповещения о пропущенных просмотрах <i>Формулы твердой решимости</i>, и вас
            не будут штрафовать.
            Счетчик активного времени игры также будет приостановлен.
            Для возобновления игры необходимо просто просмотрите свою <i>Формулу</i> как обычно.
        </p>

        <p>Кроме этого, вы также можете задать время своего сна. На этот период времени игра ежедневно будет автоматически ставиться на паузу. Для этого
            зайдите в меню <span class="code-highlight">/difficulty</span> и нажмите на кнопку <i>"💤 Планировщик сна"</i>.</p>
    </div>

    <div id="smooth-formula-formatting" class="faq-item">
        <h3>Можно ли форматировать "Формулу"?</h3>

        <p>
            Редактор <i>Формулы</i> поддерживает <a href="https://www.markdownguide.org/cheat-sheet/" target="_blank">markdown</a>.
        </p>
        <p>
            <a href="/images/faq_ru/markdown.jpg" class="image-link" target="_blank>">
                <?=renderImageTag(450, "images/faq_ru/markdown.jpg", "/images/faq_ru/markdown.jpg");?>
            </a>
        </p>
    </div>

    <div id="smooth-controls" class="faq-item">
        <h3>Какие команды игра понимает?</h3>
        <p>
            В игре доступны следующие команды:
        </p>
        <ul>
            <li><span class="pre">/review</span> - 💫 <a href="#review">просмотреть</a> свою <i>Формулу</i>
            <li><span class="pre">/pause</span> - поставить игру ⏸️ <a href="#pause">на паузу</a></li>
            <li><span class="pre">/formula</span> - 🧪 редактировать свою <a href="#formula"><i>Формулу твердой решимости</i></a></li>
            <li><span class="pre">/stats</span> - 📊 просмотр детальной статистики игры</li>

            <li><span class="pre">/settings</span> - 🔧 настройки игры</li>
        </ul>

        <p>
            <a href="/images/faq_ru/menu.jpg" class="image-link" target="_blank>">
                <?=renderImageTag(450, "images/faq_ru/menu.jpg", "/images/faq_ru/menu.jpg");?>
            </a>
        </p>

        <p>В настроойках игры (<span class="pre">/settings</span>) вы также найдете кноки:</p>

        <ul>
            <li>
                <i>"💤 Планировщик сна"</i> - позволяет задать время вашего сна, чтобы игра автоматически ставилась на паузу
            </li>

            <li>
                <i>"💪 Сложность игры"</i> - выбор <a href="#difficulty">сложности игры</a>
            </li>

            <li>
                <i>"💾 Личные данные"</i> - <a href="privacy-policy.<?=$LANG;?>.<?=getenv('LINK_EXT');?>">возможность посмотреть все свои данные</a>
            </li>

            <li>
                <i>"📢 Обратная связь"</i> - инструкции для обратной связи
            </li>
        </ul>
    </div>


    <div id="smooth-name" class="faq-item">
        <h3>Что означает название "MindWarrior"?</h3>

        <div class="quote">
            <p>
                "Ни одна проблема не может быть решена на том же уровне сознания, на котором она была создана."
            </p>
            <p class="quote-reference">– <a href="https://ru.wikipedia.org/wiki/%D0%AD%D0%B9%D0%BD%D1%88%D1%82%D0%B5%D0%B9%D0%BD,_%D0%90%D0%BB%D1%8C%D0%B1%D0%B5%D1%80%D1%82" target="_blank">Альберт Эйнштейн</a></p>
        </div>

        &nbsp;
        <div class="quote">
            <p>
                "Ничего не может измениться для тех, кто сам не меняется."
            </p>
            <p class="quote-reference">– <a href="https://ru.wikipedia.org/wiki/%D0%AD%D0%BD%D0%B4%D0%B5,_%D0%9C%D0%B8%D1%85%D0%B0%D1%8D%D0%BB%D1%8C" target="_blank">Михаэль Энде</a></p>
        </div>
        &nbsp;
        <div class="quote">
            <p>
                "Дхаммы (элементы бытия) обусловлены разумом, их лучшая часть – разум, из разума они сотворены. Если кто-нибудь говорит или делает с чистым разумом, то за ним следует счастье, как неотступная тень."
            </p>
            <p class="quote-reference">– <a href="https://en.wikipedia.org/wiki/Buddha" target="_blank">Будда  (Дхаммапада 1.2)</a></p>
        </div>

        <p>
            Слово "Mind" в переводе означает "ум", "разум", "сознание". В названии оно указывает на то, что фундаментальные изменения в жизни как правило обусловлены
            требуют внутренних изменений и трансформаций.
        </p>

        <p>
            Слово "Warrior" в переводе означает "воин". В названии оно указывает на действие, решимость, бесстрашие. Воин – это тот, кто
            принимает ответственность за свою жизнь и поступки; тот, кто готов бороться за свои ценности и цели, даже когда это борьба
            с самим собой.
        </p>

        <div class="quote">
            <p>
                "Вчера я был умным, хотел изменить мир. Сегодня я мудрый, и поэтому меняю себя."
            </p>
            <p class="quote-reference">– <a href="https://ru.wikipedia.org/wiki/%D0%94%D0%B6%D0%B0%D0%BB%D0%B0%D0%BB%D0%B0%D0%B4%D0%B4%D0%B8%D0%BD_%D0%A0%D1%83%D0%BC%D0%B8" target="_blank">Руми</a></p>
        </div>
        &nbsp;
        <div class="quote">
            <p>
                "Будьте тем изменением, которое вы хотите увидеть в мире."
            </p>
            <p class="quote-reference">– <a href="https://ru.wikipedia.org/wiki/%D0%9C%D0%B0%D1%85%D0%B0%D1%82%D0%BC%D0%B0_%D0%93%D0%B0%D0%BD%D0%B4%D0%B8" target="_blank">Махатма Ганди</a></p>
        </div>
        &nbsp;
        <div class="quote">
            <p>
                "Каждый хочет изменить человечество, но никто не задумывается о том, как изменить себя"
            </p>
            <p class="quote-reference">– <a href="https://ru.wikipedia.org/wiki/%D0%A2%D0%BE%D0%BB%D1%81%D1%82%D0%BE%D0%B9,_%D0%9B%D0%B5%D0%B2_%D0%9D%D0%B8%D0%BA%D0%BE%D0%BB%D0%B0%D0%B5%D0%B2%D0%B8%D1%87" target="_blank">Лев Толстой</a></p>
        </div>

        <p id="smooth-name-betterworld" class="anchor">
            Мы, создатели игры, глубоко убеждены, что каждый человек способен изменить мир к лучшему.
            Меняя себя к лучшему изнутри, мы автоматически меняем к лучшему и внешний мир, поскольку,
            становясь лучше, мы принимаем лучшие решения, которые приводят к лучшим действиям и результатам, которые
            влияют на всех окружающих.
        </p>

        <p class="anchor">
            Ступая на путь внутренних трансформаций, вы вступаете на путь борьбы за лучший мир. И всякий раз, когда вы просматриваете свою <a href="#formula"><i>Формулу твердой решимости</i></a>,
            вы не просто меняете себя, но также делайте наш мир чуточку лучше! 🙌
        </p>

        <p>В этом и заключена главная идея названия "MindWarrior" ¯\_(ツ)_/¯.</p>

    </div>

    <div id="smooth-formula-example" class="faq-item">
        <h3>Могу ли я смотреть "Формулы" других игроков?</h3>

        <p>
            Мы ценим и уважаем конфиденциальность наших игроков.
            Ваша <i>Формула твердой решимости</i> хранится на вашем устройстве. Игра не копирует ее и не отправляет на свои сервера.
            Поэтому нет никакой возможности просмотра <i>Формул</i> других игроков хотя бы просто потому, что
            игровые сервера не имеют к ним доступа. (См. детали в <a href="/privacy-policy.<?=$LANG;?>.<?=getenv('LINK_EXT');?>" target="_blank">политике конфиденциальности</a>.)
        </p>
        <p>
            Однако <strong>некоторые игроки добровольно выложили свои <i>Формулы</i> в открытый доступ.</strong> Они доступны для
            просмотра на странице нашего сайта "<a href="https://mindwarriorgame.org/public-formulas.ru.html">Примеры Формул</a>".
        </p>
        <p>
            Если вы считаете, что нашли сильную, рабочую <i>Формулу</i>,  которая сможет вдохновить и послужить
            примером для других, то вы тоже можете поделиться ей с другими игроками на нашем сайте. Для этого
            следуйте <a href="https://github.com/mindwarriorgame/public-formulas/blob/main/README.ru.md" target="_blank">этим инструкциям</a>.
        </p>
    </div>


    <div id="smooth-share" class="faq-item">
        <h3>Могу ли я поделиться своей "Формулой" с другими игроками?</h3>

        <p>
            См. <a href="#formula-example">выше</a>.
        </p>

    </div>

    <div id="smooth-privacy" class="faq-item">
        <h3>У кого есть доступ к моей "Формуле"?</h3>

        <p>
            См. <a href="#formula-example">выше</a>.
        </p>
    </div>


<?php
$CONTENT = ob_get_contents();
ob_end_clean();

$MENU = include("includes/menu.$LANG.php");

$TITLE="MindWarrior: Вопросы";

$CSS = ["/includes/faq_anchors.css"];
$JS = ["/includes/faq_anchors.js"];

include("includes/layout.php");
