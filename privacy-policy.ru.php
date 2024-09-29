<?php
ob_start();

$ext = getenv('LINK_EXT');
?>

    <h2>Политика конфиденциальности</h2>


    <h3>Введение</h3>
    <p>
        Мы ценим вашу конфиденциальность. Ваша <a href="/faq.en.<?=$ext;?>#formula">"Формула Твердой Решимости"</a>
        остается приватной.
        Игра не копирует ее и не отправляет на свои сервера.
        Она хранится на вашем устройстве в
        <a href="https://davitdvalashvili1996.medium.com/local-storage-in-javascript-f7aad374980e"
           target="_blank">localStorage</a> Телеграма, в
        <a href="https://docs.ton.org/develop/dapps/telegram-apps/testing-apps#debug-mode-for-mini-apps"
           target="_blank">WebView</a>.
    </p>

    <p>
        Поэтому мы рекомендуем вам регулярно вручную создавать резервные копии вашей Формулы путем копирования ее содержимого
        в какое-нибудь безопасное место (например, в <a href="https://telegram.org/blog/new-saved-messages-and-9-more/ru" target="_blank">
            Сохраненные сообщения</a> Телеграма), чтобы можно было ее восстановить в случае непредвиденных обстоятельств
        (переустановка Телеграма, использование нового устройства и т. д.).
    </p>

    <h3>Открытый исходный код</h3>
    <p>
        MindWarrior – проект с открытым исходным кодом, который предоставляет полную прозрачность того, как игра обращается с вашими данными.
        Вы можете сами изучить исходный код проекта, который доступен всем на GitHub-е:
        <a href="https://github.com/mindwarriorgame" target="_blank">https://github.com/mindwarriorgame</a>
    </p>

    <h3>Информацию, которую мы собираем</h3>

    <p>Игра собирает и хранит следующую информацию об игроках:</p>

    <h4>Информация о пользователе</h4>
    <ul>
        <li><span class="code-highlight">user_id</span>: идентификатор пользователя в Телеграме
            (<a href="https://flows.network/blog/how-to-find-telegram-chat-id#:~:text=Telegram%20has%20three%20different%20kinds,is%20called%20group%20chat%20ID." target="_blank">chat_id</a>),

            число.</li>
        <li><span class="code-highlight">lang_code</span>: код языка пользователя.</li>
        <li><span class="code-highlight">shared_key_uuid</span>: случайный набор символов, ассоциированный с пользователем.</li>
    </ul>

    <h4>Game Data</h4>
    <ul>
        <li>
            <span class="code-highlight">difficulty</span>,
            <span class="code-highlight">rewards</span>: числа
        </li>


        <li>
            <span class="code-highlight">review_counter_state</span>,
            <span class="code-highlight">active_game_counter_state</span>,
            <span class="code-highlight">paused_counter_state</span>: значения таймеров,
            включающие дату/время, счетчики прошедшего времени и статус (включен/выключен)
        </li>

        <li>
            <span class="code-highlight">last_reward_time</span>,
            <span class="code-highlight">next_prompt_time</span>: дата и время
        </li>

        <li>
            <span class="code-highlight">counters_history_serialized</span>: история изменений счетчиков игрока для отображения графика прогресса
        </li>


    </ul>

    <h3>Как мы используем собранную информацию</h3>
    <p>Мы используем собранную информацию для того, чтобы:</p>
    <ul>
        <li>обеспечивать игрокам функционал игры</li>
        <li>анализировать, как наши пользователи используют игру</li>
        <li>разрабатывать новые возможности для игры</li>
    </ul>

    <h3>Хранение информации</h3>
    <p>Мы принимаем адекватные меры для того, чтобы собранные данные хранились в безопасности. Мы не предоставляем
        доступ для них посторонним лицам (кроме случаев, когда этого требует закон).</p>

    <h3>Ваши возможности</h3>
    <p>В любой момент вы можете:</p>
    <ul>
        <li><strong>Получить доступ к вашим данных</strong>: для этого используйте команду
            <span class="code-highlight">/data</span>. В качестве ответа бот вернет вам все данные,
            которые хранятся на его сервере.</li>
        <li><strong>Удалить свои данные</strong>: для этого используйте команду
            <span class="code-highlight">/data</span>, нажмите на кнопу "УДАЛИТЬ МОИ ДАННЫЕ" и следуйте инструкции.
            <ul>
                <li>Если вы решитесь на это, пожалуйста, не забудьте также очистить вашу историю переписки с ботом: эта
                    информация хранится в Телеграме, и мы не имеем к ней никакого доступа. Кроме этого, нет никакой гарантии,
                    что Телеграм не сохранит копию истории переписки с ботом где-то на своих серверах даже после ее очистки. Пожалуйста,
                    имейте это в виду. См. пункт "Использование Телеграма в качестве платформы проекта" ниже.
                </li>
            </ul>
        </li>
    </ul>

    <h3>Использование Телеграма в качестве платформы проекта</h3>

    <p>
        Проект выполнен в виде Телеграм бота. Поэтому, помимо нашей политики конфиденциальности, вам также следует ознакомиться
        с <a href="https://telegram.org/privacy" target="_blank">политикой конфиденциальности Телеграма</a>. Мы не несем ответственности
        за обработку данных Телеграмом и не имеем к ней никакого доступа. Пожалуйста, взвесьте все риски, связанные с этим,
        перед началом использования игры.
    </p>

    <h3>Изменения этой политики</h3>
    <p>Политика конфиденциальности этого проекта может изменяться со временем. Пожалуйста, регулярно просматривайте ее,
        чтобы не пропустить важные изменения.</p>

    <h2>Обратная связь</h2>
    <p>Если у вас появились вопросы по поводу политики конфиденциальности нашего проекта, пожалуйста, обратитесь к нам
        через Issues на GitHub в любом нашем репозитории:
        <a href="https://github.com/mindwarriorgame" target="_blank">https://github.com/mindwarriorgame</a>
    </p>

    <p>Продолжая пользоваться проектом, вы соглашаетесь и даете нам согласие на хранение и обработку ваших данных соответственно
        с тем, как это описано в этой политике.</p>





    &nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp; &nbsp;
    &nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp; &nbsp;
    &nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp; &nbsp;
    &nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp; &nbsp;


<?php
$CONTENT = ob_get_contents();
ob_end_clean();

$LANG='ru';
$MENU_SELECTED = "privacy-policy";
$MENU = include("includes/menu.ru.php");

$TITLE="MindWarrior: Политика конфиденциальности";

$CSS = ["includes/quick-start.css"];
$JS = [];

include("includes/layout.php");