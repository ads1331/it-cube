<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class QuotesSeeder extends Seeder
{
    public function run()
    {
        DB::table('quotes')->insert([
            ['text' => 'Что может угрожать вашим данным и какие методы используют злоумышленники?', 'author' => 'Возможность сделать карусель с возможностью перелистывания отдельных текстовых блоков:
 
Что угрожает данным?
Потеря
Утечки и компрометация – ваши данные доступны не только вам
Искажение 
 
Цифровая среда предоставляет злоумышленникам много возможностей для доступа к вам и вашим данным посредством:
Сайтов и приложений
Мессенджеров
Электронной почты
Социальных сетей
 
Какими методами пользуются злоумышленники?
Социальная инженерия
Вредоносное ПО
Эксплуатация уязвимостей устройств
Компрометация учетных данных
 
Что интересует злоумышленников?
Учетные данные ваших аккаунтов
Переписка и компрометирующие материалы
Данные платежных карт
Персональные данные
'],
            ['text' => '123456…насколько стойкий ваш пароль?', 'author' => 'Проверьте свои пароли на надежность: 
Длина пароля от 12 символов
Буквы в ВЕРХНЕМ и нижнем регистре
Специальные знаки (!@#$%^&*()<>?/| и др.)
Цифры
В пароле отсутствует информация, связанная с вами
Знаете только вы
'],
            ['text' => 'Храните свои пароли в надежном месте', 'author' => 'Используйте сервисы для безопасного хранения паролей:
Специальный функционал в браузерах
Позволяет хранить несколько пар «логин-пароль» и автоматически вставлять на сайтах. Следует обязательно установить надежный мастер-пароль, который стоит запомнить или записать в бумажном блокноте. 
 
Программы для хранения паролей
Например, бесплатное и надежное приложение KeePass (KeePass XC). База данных с вашими паролями может быть защищена только мастер-паролем. Также приложение позволяет сгенерировать стойкие пароли по заданным правилам.
'],
            ['text' => 'Как часто вы обновляете пароли?', 'author' => 'Поставьте напоминание, чтобы обновить все важные пароли через 6 месяцев!'],
            ['text' => 'Один сервис – один пароль', 'author' => 'Проверьте, не используете ли вы одинаковые пароли на разных аккаунтах. Замените одинаковые пароли!'],
            ['text' => 'Перейдете на новый уровень защищенности ваших аккаунтов!', 'author' => 'Примените двухфакторную аутентификацию (2ФА) во всех важных аккаунтах:
личный почтовый ящик
все аккаунты в социальных сетях и системах мгновенного обмена сообщениями 
аккаунты в государственных информационных системах
'],
            ['text' => 'Узнайте, как усилить двухфакторную аутентификацию', 'author' => 'Используйте приложения для генерации одноразового кода! Это обеспечит приватность и доступность даже в случае отсутствия мобильного интернета. Примеры приложений: Яндекс Ключ, FreeOTP и другие.
'],
            ['text' => 'Уменьшайте публикацию личных данных в сети', 'author' => 'Создайте отдельный почтовый ящик для регистрации в различных сервисах! Настройте двухфакторную аутентификацию (2ФА) для подобных почтовых ящиков тоже.  Таким образом будет меньше шансов компрометации вашего основного адреса электронной почты.
'],
            ['text' => 'Обновите настройки безопасности вашей электронной почты', 'author' => 'Ознакомьтесь с рекомендациями по проверке аккаунтов электронной почты на предмет защищенности. Обновите настройки безопасности в ваших почтовых сервисах!'],
            ['text' => 'Обновите настройки безопасности ваших социальных сетей!', 'author' => 'Ознакомьтесь с рекомендациями по проверке аккаунтов социальных сетей на предмет защищенности. Обновите настройки безопасности ваших аккаунтов!'],
            ['text' => 'Обновите настройки безопасности ваших мессенджеров!', 'author' => 'Ознакомьтесь с рекомендациями по проверке защищенности аккаунтов сервисов мгновенного обмена сообщениями. Обновите настройки безопасности ваших мессенджеров!'],
            ['text' => 'Что делать, если ваш мессенджер взломали мошенники? ', 'author' => 'Ознакомьтесь с алгоритмом действий в случае взлома мессенджера и поделитесь с близкими и коллегами!'],
            ['text' => 'Минимизируйте риск компрометации своих аккаунтов', 'author' => 'При работе на чужих устройствах всегда выходите из аккаунтов, удаляйте историю из браузера и замените пароли от аккаунтов, в которые входили! На чужих устройствах могут быть следящие программы и вирусы (зачастую без ведома владельца устройства), а информация сохраняется на диске в качестве кэша
'],
            ['text' => 'Проведите «уборку» в вашем браузере!', 'author' => 'Регулярно очищайте браузер от различной идентифицирующей вас и ваши привычки информации: файлы cookies и кэш.  '],
            ['text' => 'Вы уверены, что ваши данные доступны только вам?', 'author' => 'Проверьте свои аккаунты на предмет утечек в специальных сервисах: например, chk.safe-surf.ru или haveibeenpwned.com. Незамедлительно замените пароли в аккаунтах, которые были скомпрометированы
'],
            ['text' => 'Используйте безопасные сканеры QR-кодов!', 'author' => 'Используйте безопасные сканеры QR-кодов, которые предварительно демонстрируют адрес сайта и для перехода по ссылке необходимо ваше подтверждение '],
            ['text' => 'Не обменивайтесь чувствительными данными при подключении к публичным wi-fi сетям', 'author' => 'Данные, передаваемые через публичные wi-fi-сети плохо защищены, могут подвергнуться компрометации и краже. До подключения к таким сетям закройте все приложения с чувствительными данными (финансовые, госуслуг и др.)'],
            ['text' => 'Заведите отдельную карту для онлайн-покупок!', 'author' => 'Не храните на ней деньги. Переводите ровно ту сумму, которая необходима для оплаты вашей покупки.'],
            ['text' => 'Установите и настройте антивирусное ПО', 'author' => 'Применяйте отечественное антивирусное ПО с платной лицензией для настольных и мобильных устройств. В бесплатных антивирусных решениях отсутствует функционал защиты в режиме реального времени, например при просмотре вэб-сайтов и проверка поступающих мгновенных сообщений.'],
            ['text' => 'Установите обновления операционных систем ваших устройств!', 'author' => 'Проверьте наличие и установите обновления в операционных системах ваших настольных и мобильных устройств. Перед запуском обновлений рекомендуется закрыть открытые приложения и файлы, сделать резервные копии чувствительных данных'],
            ['text' => 'Установите обновления программ и приложений!', 'author' => 'Проверьте наличие и установите обновления браузеров, антивирусного и другого ПО, установленного на всех ваших устройствах'],
            ['text' => 'Отключите уведомления на экране блокировки мобильных устройств!', 'author' => 'По умолчанию уведомления демонстрируются даже на заблокированных устройствах, что может привести к компрометации чувствительных данных и личной переписки.'],
            ['text' => 'Обновите настройки конфиденциальности программ и приложений!', 'author' => 'Изучите и настройте приемлемые разрешения для мобильных приложений, расширений браузеров и настроек конфиденциальности на всех устройствах в соответствии с рекомендациями'],
            ['text' => 'Создайте резервные копии чувствительных данных!', 'author' => 'Создайте резервные копии данных с настольных и мобильных устройств согласно рекомендациям'],
            ['text' => 'Изучите, какая информация является чувствительной, и не рекомендуется публиковать', 'author' => 'Не нужно публиковать о себе сведения, которыми могут воспользоваться мошенники:
Паспортные данные;
Личный номер телефона;
Дата и место рождения;
Домашний адрес;
Фотографии дорогостоящего имущества;
Подробности личной жизни;
Сведения о детях (личный номер телефона, адрес и номер школы, дата им место рождения, места проведения досуга и т.д.);
Сведения об образовании;
Ссылки на аккаунты родственников.
'],
            ['text' => 'Изучите основные приемы интернет-мошенников!', 'author' => 'Ознакомьтесь со способами обмана/манипуляции с целью кражи финансовых средств, данных и реквизитов доступа'],
            ['text' => 'Сможете ли вы распознать мошенническое сообщение?', 'author' => 'Игровая механика. Кейс будет предложен во время очного этапа'],
            ['text' => 'Не доверяйте запросам, в которых у вас просят деньги, банковские реквизиты или одноразовые коды! Даже от знакомых и близких!', 'author' => 'После взлома аккаунтов пользователей сети (почта, социальная сеть, мессенджеры), всем, с кем общались  владельцы взломанных аккаунтов, поступают массовые рассылки мошеннических сообщений (текстовые и голосовые) с запросом денег, банковских реквизитов или одноразовых кодов. Не довеяйте подобным сообщениям, даже от близких! Свяжитесь с тем, от кого поступило сообщение голосом, видео звонком или очно и уточните суть/истинность поступившего запроса'],
            ['text' => 'Изучите способы защиты от онлайн-мошенников!', 'author' => 'Изучите основные правила противодействия онлайн-мошенникам и поделитесь информацией с близкими'],
            ['text' => 'Соблюдайте правила этики в сети', 'author' => 'Запомните «золотое правило» общения в сети: не стоит писать человеку того, что вы бы ему не сказали лично. Изучите базовые правила сетевого этикета и поделитесь информацией с близкими!'],
            ['text' => 'Изучите способы защиты детей от опасных коммуникации в сети', 'author' => 'Изучите базовые принципы безопасной коммуникации в сети и поделитесь информацией с близкими!'],
            ['text' => 'Изучите признаки неблагонадежных сайтов', 'author' => 'Неблагонадежные сайты содержат следующие признаки: Отсутствуют сведения об адресе, информации о юридическом лице, отсутствует номер телефона  
            Адрес сайта похож на адреса известных сайтов, расположены вне доменной зоны ru, su, рф
Предложения через чур хорошие, чтобы быть правдой
В адресном поле отсутствует замочек и протокол https. Браузер уведомляет о просроченном сертификате
Сайт содержит грамматические ошибки, мало страниц, нелогичная структура
']

            
        ]);
        
    }
}
