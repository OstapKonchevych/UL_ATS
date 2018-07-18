<?php
//===========================================================================\\
// Aardvark Topsites PHP 5.2                                                 \\
// Copyright (c) 2000-2009 Jeremy Scheff.  All rights reserved.              \\
//---------------------------------------------------------------------------\\
// http://www.aardvarktopsitesphp.com/                http://www.avatic.com/ \\
//---------------------------------------------------------------------------\\
// This program is free software; you can redistribute it and/or modify it   \\
// under the terms of the GNU General Public License as published by the     \\
// Free Software Foundation; either version 2 of the License, or (at your    \\
// option) any later version.                                                \\
//                                                                           \\
// This program is distributed in the hope that it will be useful, but       \\
// WITHOUT ANY WARRANTY; without even the implied warranty of                \\
// MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the GNU General \\
// Public License for more details.                                          \\
//===========================================================================\\

if (!defined('ATSPHP')) {
  die("This file cannot be accessed directly.");
}

// When you make a new translation, fill out the following four variables to
// get credit for you work.
$translation = 'Ukraine (Українська)';
$translator_name = 'Адріян Кончевич';
$translator_email = 'hanter.name@gmail.com';
$translator_url = 'http://konchevych.pp.ua/';

// Set this to the character encoding of your translation
$LNG['charset'] = "windows-1251";

// Global
$LNG['g_form_submit_short'] = "Вперед";
$LNG['g_username'] = "Ім`я користувача";
$LNG['g_url'] = "URL";
$LNG['g_title'] = "Заголовок";
$LNG['g_description'] = "Опис";
$LNG['g_category'] = "Категорія"; // 4.1.0
$LNG['g_email'] = "Email";
$LNG['g_banner_url'] = "URL банера";
$LNG['g_password'] = "Пароль";
$LNG['g_average'] = "Середнє";
$LNG['g_today'] = "Сьогодні";
$LNG['g_yesterday'] = "Вчора";
$LNG['g_daily'] = "В день"; // 5.0
$LNG['g_this_month'] = "В цьому місяці"; // 5.0
$LNG['g_last_month'] = "В минулому місяці"; // 5.0
$LNG['g_monthly'] = "В місяць"; // 5.0
$LNG['g_this_week'] = "На цьому тижні"; // 5.0
$LNG['g_last_week'] = "На прошлой неделе"; // 5.0
$LNG['g_weekly'] = "В тиждень"; // 5.0
$LNG['g_pv'] = 'Показів сторінки'; // 5.0
$LNG['g_overall'] = 'Всього'; // 5.0
$LNG['g_in'] = 'Прийшло'; // 5.0
$LNG['g_out'] = 'Вийшло'; // 5.0
$LNG['g_unq_pv'] = "Унікальних сторінок"; // 5.0
$LNG['g_tot_pv'] = "Всього сторінок"; // 5.0
$LNG['g_unq_in'] = "Унікальних прийшло"; // 5.0
$LNG['g_tot_in'] = "Всього прийшло"; // 5.0
$LNG['g_unq_out'] = "Унікальних вийшло"; // 5.0
$LNG['g_tot_out'] = "Всього вийшло"; // 5.0
$LNG['g_invalid_u_or_p'] = "Невірне ім`я користувача або пароль. Спробуйте ще раз."; // 5.0
$LNG['g_invalid_u'] = "Невірне ім`я користувача.  Спробуйте ще раз."; // 5.0
$LNG['g_invalid_p'] = "Невірний пароль.  Спробуйте ще раз."; // 5.0
$LNG['g_session_expired'] = "Сесія закінчилася. Спробуйте ще раз."; // 5.0
$LNG['g_error'] = "Помилка"; // 5.0
$LNG['g_delete_install'] = "Перед запуском, Ви повинні видалити директорію /install."; // 5.0
$LNG['g_ip'] = "IP"; // 5.2.0

// Edit Account
$LNG['edit_header'] = "Особисті дані";
$LNG['edit_info_edited'] = "Зміни успішно збережені.";
$LNG['edit_password_blank'] = "Залишіть це поле порожнім, для використання поточного паролю."; // 4.0
$LNG['edit_delay'] = "Зміни в назві та адресу Вашого сайту повинні бути перевірені адміністратором рейтингу перед тим, як набудуть чинності."; // 5.2.0

// Gateway Page
$LNG['gateway_header'] = "Шлюзова сторінка рейтингу";
$LNG['gateway_text'] = "Для запобігання накрутки ви перенаправлені на шлюзову сторінку. Натисніть на посилання нижче для входу в рейтинг.";
$LNG['gateway_vote'] = "Увійти і проголосувати";
$LNG['gateway_no_vote'] = "Увійти без голосування"; // 5.0

// Install
$LNG['install_header'] = "Установити";
$LNG['install_welcome'] = "Ласкаво просимо в програму установки Aardvark Topsites PHP 5. Заповніть форму, наведену нижче, щоб почати установку.";
$LNG['install_sql_prefix'] = "Приставка до імені таблиць - міняйте тільки якщо ви запускаєте більше одного рейтингу в тій же базі даних";
$LNG['install_error_chmod'] = "Програма установки не має прав на запис в файл settings_sql.php. Перевірте, чи ви змінили права доступу на 666 (chmod 666) для файлу settings_sql.php.";
$LNG['install_error_sql'] = "Програма установки не може приєднатися до бази даних. Поверніться і перевірте установки підключення до бази.";
$LNG['install_done'] = "Ваш Topsites рейтинг успішно встановлений. Негайно видаліть директорію /install.";
$LNG['install_your'] = "Ваш рейтинг Topsites";
$LNG['install_admin'] = "Адміністрування";
$LNG['install_manual'] = "Керівництво (мануал)";
$LNG['upgrade_header'] = "Оновлення";
$LNG['upgrade_welcome'] = "Ласкаво просимо в програму оновлення Aardvark Topsites PHP 5. Перед оновленням обов'язково зробіть резервну копію бази даних.";
$LNG['upgrade_version'] = "Упевніться, що Ви оновлюєте версію %s."; // 5.1.0
$LNG['upgrade_error_version'] = "Оновлення можливо тільки для версії Aardvark Topsites PHP 4.1.0 або вище.";
$LNG['upgrade_done'] = "Ваша копія Topsites рейтингу була оновлена​​. Негайно видаліть директорію /install.";
$LNG['install_mailing_list'] = "Щоб підписатись на список розсилки Aardvark Topsites, внесіть e-mail в поле, розташоване нижче. Кількість повідомлень розсилки вельми мале, це інформація про важливі оновлення та поради щодо заходів безпеки."; // 5.2.0

// Join
$LNG['join_header'] = "Зареєструвати сайт в рейтингу";
$LNG['join_enter_text'] = "Введіть текст, який показаний на зображенні нижче:"; // 4.2.2
$LNG['join_enter_text_read'] = "Не можете прочитати?"; // 5.2.0
$LNG['join_user'] = "Учасник"; // 5.0
$LNG['join_website'] = "Веб сайт"; // 5.0
$LNG['join_banner_size'] = "(Максимальний розмір: %sx%s)"; // 5.2.0
$LNG['join_error_username'] = "Ім'я користувача може складатися тільки з: букв, цифр, підкреслень і тире."; // 5.0
$LNG['join_error_username_duplicate'] = "Використовуйте інше ім'я користувача, це вже зайнято."; // 5.0
$LNG['join_error_url'] = "Введіть правильний URL.";
$LNG['join_error_email'] = "Введіть правильний e-mail адрес.";
$LNG['join_error_title'] = "Введіть заголовок Вашого сайту.";
$LNG['join_error_password'] = "Введіть пароль.";
$LNG['join_error_confirm_password'] = "Пароль не підходить."; // 5.2.0
$LNG['join_error_urlbanner'] = "Введіть адресу працюючого банера. Якщо у Вас немає банера, залиште це поле порожнім."; // 5.2.0
$LNG['join_error_time'] = "Не оновлюйте сторінку з підтвердженням реєстрації."; // 4.2.0
$LNG['join_error_captcha'] = "Значення, яке ви ввели, не співпадає з тим, що написано на зображенні."; // 4.2.2
$LNG['join_error_question'] = "Відповідь невірна. Виправте її, щоб підтвердити, що Ви людина, а не бот."; // 5.2.0
$LNG['join_thanks'] = "Дякуємо за реєстрацію! Внесіть цей код на ваш сайт і він з'явиться в рейтингу.";
$LNG['join_change_warning'] = "Зміни в коді можуть порушити його працездатність.";
$LNG['join_welcome'] = "Вітаємо в %s";
$LNG['join_welcome_admin'] = "Новий член приєднався до вашої Topsites List.";
$LNG['join_approve'] = "Спасибі, що приєдналися до нас! Ваш сайт з'явиться в рейтингу після перевірки адміністратором рейтингу. Вам буде відправлений e-mail, який сповістить Вас, що ваш сайт перевірений."; // 5.2.0
$LNG['join_type'] = "Тип акаунта"; // 5.1.0
$LNG['join_standard'] = "Звичайний"; // 5.1.0
$LNG['join_error_top'] = "В процесі реєстрації була виявлена ​​помилка. Виправте помилку, наведену нижче."; // 5.2.0
$LNG['join_ban_top'] = "Ваша реєстрація містить тексти заборонені адміністрацією рейтингу."; // 5.2.0
$LNG['join_security'] = "Безпека."; // 5.2.0
$LNG['join_confirm_password'] = "Повторіть пароль"; // 5.2.0

// Link Code
$LNG['link_code_header'] = "Код посилання"; // 5.0

// Lost Password
$LNG['lost_pw_header'] = "Втрачений пароль"; // 5.0
$LNG['lost_pw_forgot'] = "Забули пароль?"; // 5.0
$LNG['lost_pw_get'] = "Отримати пароль"; // 5.0
$LNG['lost_pw_emailed'] = "Перевірте ваш e-mail, вам надіслано лист з подальшими вказівками."; // 5.0
$LNG['lost_pw_email'] = "Щоб отримати новий пароль, натисніть на це посилання:"; // 5.0
$LNG['lost_pw_new'] = "Введіть новий пароль"; // 5.0
$LNG['lost_pw_set_new'] = "Зберегти новий пароль"; // 5.0
$LNG['lost_pw_finish'] = "Ваш пароль оновлений."; // 5.0

// Main Page
$LNG['main_header'] = "Рейтинг"; // 5.0
$LNG['main_all'] = "Всі сайти"; // 4.2.0
$LNG['main_method'] = "Метод рейтинга";
$LNG['main_members'] = "Учасники";
$LNG['main_menu_rankings'] = "Рейтинг";
$LNG['main_menu_join'] = "Стати учасником";
$LNG['main_menu_random'] = "Випадковий сайт";
$LNG['main_menu_search'] = "Пошук";
$LNG['main_menu_lost_code'] = "Отримати код"; // 5.0
$LNG['main_menu_lost_password'] = "Отримати пароль"; // 5.0
$LNG['main_menu_edit'] = "Редагувати установки";
$LNG['main_menu_user_cp'] = "Контрольна панель користувача"; // 5.0
$LNG['main_featured'] = "Просунутий учасник"; // 4.0.2
$LNG['main_executiontime'] = "Час запуску скрипта"; // 4.0
$LNG['main_queries'] = "SQL запитів"; // 4.0
$LNG['main_powered'] = "З використанням";

// Ranking Table
$LNG['table_stats'] = "Статистика";
$LNG['table_unique'] = "Унікальних";
$LNG['table_total'] = "Всього";
$LNG['table_rank'] = "Позиція";
$LNG['table_title'] = "Назва"; // 4.0
$LNG['table_description'] = "Опис"; // 4.0
$LNG['table_movement'] = "Зміна";
$LNG['table_up'] = "Вверх"; // 5.0
$LNG['table_down'] = "Вниз"; // 5.0
$LNG['table_neutral'] = "Без змін"; // 5.0
$LNG['table_your_site_here'] = "Ваш сайт знаходиться тут"; // 5.2.0

// Rate and Review
$LNG['rate_header'] = "Оцінка і відгук";
$LNG['rate_message'] = "Поставте оцінку і внесіть опис для %s в форму, розташовану нижче."; // 5.2.0
$LNG['rate_rating'] = "Оцінка";
$LNG['rate_review'] = "Відгук  - використання HTML заборонено"; // 5.0
$LNG['rate_thanks'] = "Спасибі за вашу оцінку.";
$LNG['rate_error'] = "Ви вже голосували за цей сайт.";
$LNG['rate_back'] = "Повернутися до статистики.";
$LNG['rate_email_admin'] = "У Ваш рейтинг додали новий сайт."; // 5.1.0

// Search
$LNG['search_header'] = "Пошук";
$LNG['search_off'] = "Пошукова функція вимкнена.";
$LNG['search_no_sites'] = "По заданим умовам пошуку, сайтів не виявлено."; // 5.0
$LNG['search_prev'] = "Попередній"; // 3.2.1
$LNG['search_next'] = "Наступний"; // 3.2.1
$LNG['search_displaying_results'] = "Показані від %s до %s из %s результатів для <b>%s</b>."; // 5.1.0

// Stats
$LNG['stats_header'] = "Статистика";
$LNG['stats_info'] = "Інформація";
$LNG['stats_member_since'] = "Учасник з"; // 5.0
$LNG['stats_rating_avg'] = "Седній бал";
$LNG['stats_rating_num'] = "Кількість оцінок";
$LNG['stats_rate'] = "Оцініть цей сайт.";
$LNG['stats_reviews'] = "Відгуки.";
$LNG['stats_allreviews'] = "Переглянути всі відгуки."; // 4.0
$LNG['stats_week'] = "Тиждень"; // 5.0
$LNG['stats_highest'] = "Найкращий показник"; // 5.0
$LNG['stats_overall'] = "Загальна статистика"; // 5.2.0
$LNG['stats_overall_average'] = "Середнє (Останні 10 %s)"; // 5.2.0
$LNG['stats_overall_total'] = "Всього (За весь час)"; // 5.2.0

// ssi.php
$LNG['ssi_top'] = "Найкращі %s сайтів"; // 4.0
$LNG['ssi_new'] = "%s нових учасників"; // 5.0
$LNG['ssi_all'] = "Всі сайти"; // 4.0

// User Control Panel // 5.0
$LNG['user_cp_header'] = "Контрольна панель учасника"; // 5.0
$LNG['user_cp_login'] = "Увійти"; // 5.0
$LNG['user_cp_logout'] = "Вийти"; // 5.0
$LNG['user_cp_welcome'] = "Ласкаво просимо в контрольну панель учасника. Використовуйте посилання зліва для управління Вашим акаунтом."; // 5.0
$LNG['user_cp_logout_message'] = "Ви вийшли з контрольної панелі учасника."; // 5.0
$LNG['user_cp_login_long'] = "Увійдіть в систему використовуючи Ваше ім'я користувача і пароль або Ваш відкритий ідентифікатор."; // 5.1.0
$LNG['user_cp_openid'] = "Відкритий ідентифікатор"; // 5.1.0
$LNG['user_cp_openid_error_server'] = "Неможливо знайти сервер з відкритим ідентифікатором для %s."; // 5.1.0
$LNG['user_cp_openid_error_join'] = "Ви повинні зареєструватися в рейтингу, щоб отримати доступ до контрольної панелі користувача."; // 5.1.0
$LNG['user_cp_openid_error_general'] = "У процесі авторизації сталася помилка. Спробуйте ще раз."; // 5.1.0
$LNG['user_cp_openid_error_cancel'] = "Ви повинні мати права доступу для цієї дії."; // 5.1.0
$LNG['user_cp_openid_error_from_server'] = "Помилка на сервері: %s"; // 5.1.0
$LNG['user_cp_inactive'] = "Ви не маєте доступу до контрольної панелі до тих пір, поки ваш сайт не буде перевірений. По закінченні перевірки ви отримаєте повідомлення на e-mail."; // 5.2.0

// Admin > Approve New Members // 4.0
$LNG['a_approve_header'] = "Дозволити вхід в рейтинг новому учасникові"; // 5.0
$LNG['a_approve'] = "Дозволити"; // 4.0
$LNG['a_approve_none'] = "Немає учасників, які очікують дозволу."; // 4.0
$LNG['a_approve_done'] = "Учаснику дозволено бути в рейтингу."; // 4.0
$LNG['a_approve_dones'] = "Новий учасник допущений до рейтингу."; // 4.0
$LNG['a_approve_sel'] = "З вибраними:"; // 5.0

// Admin > Approve Edited Members // 5.2.0
$LNG['a_approve_edited_header'] = "Дозволити участь відредагованим учасникам"; // 5.2.0
$LNG['a_approve_edited_none'] = "Більше немає учасників, що чекають дозволу."; // 5.2.0
$LNG['a_approve_edited_old'] = "Минулу назву та URL"; // 5.2.0
$LNG['a_approve_edited_new'] = "Запропонована назва та URL"; // 5.2.0
$LNG['a_approve_edited_reject'] = "Відмовити"; // 5.2.0
$LNG['a_approve_edited_done'] = "Зміни були підтверджені."; // 5.2.0
$LNG['a_approve_rejected_done'] = "У змінах було відмовлено."; // 5.2.0

// Admin > Approve New Reviews // 5.0
$LNG['a_approve_rev_header'] = "Дозволити нові огляди"; // 5.0
$LNG['a_approve_rev_none'] = "Немає оглядів, які очікують дозволу."; // 5.0
$LNG['a_approve_rev_done'] = "Огляд був дозволений."; // 5.0
$LNG['a_approve_rev_dones'] = "Огляди були дозволені."; // 5.0

// Admin > Backup Database // 5.2.0
$LNG['a_backup_header'] = "Резервна копія бази даних"; // 5.2.0
$LNG['a_backup_warn'] = "Ви створюєте резервну копію даних про ваших учасників, статистику та установках. Якщо в рейтингу багато учасників, це може зайняти багато часу і створити файл великого розміру."; // 5.2.0

// Admin > Create Custom Page // 5.1.0
$LNG['a_create_page_header'] = "Створення спеціалізованої сторінки"; // 5.1.0
$LNG['a_create_page_id'] = "Ідентифікатор сторінки - буде використаний в URL і може складатися тільки з англійських букв, цифр, підкреслень і тире"; // 5.1.0
$LNG['a_create_page_error_id'] = "Ідентифікатор сторінки може складатися тільки з англійських букв, цифр, підкреслень і тире. Поверніться і виправте ідентифікатор сторінки."; // 5.1.0
$LNG['a_create_page_error_id_duplicate'] = "Сторінка з таким ідентифікатором вже існує. Поверніться та виберіть новий ідентифікатор."; // 5.1.0
$LNG['a_create_page_created'] = "Сторінка створена. Ви можете додати посилання на %s вручну в файл wrapper.html."; // 5.1.0

// Admin > Delete Member
$LNG['a_del_header'] = "Видалити учасника"; // 5.0
$LNG['a_del_headers'] = "Видалити учасників"; // 5.0
$LNG['a_del_done'] = "Учасник був видалений."; // 5.0
$LNG['a_del_dones'] = "Учасники були видалені."; // 5.0
$LNG['a_del_warn'] = "Ви впевнені, що хочете видалити %s?"; // 5.0
$LNG['a_del_multi'] = "всього %s учасників"; //5.0

// Admin > Delete Bad Word // 5.1.0
$LNG['a_del_bad_word_header'] = "Видалити фільтруюче слово"; // 5.1.0
$LNG['a_del_bad_word_headers'] = "Видалити фільтруючі слова"; // 5.1.0
$LNG['a_del_bad_word_done'] = "Фільтруюче слово видалено."; // 5.1.0
$LNG['a_del_bad_word_dones'] = "Фільтруючі слова видалені."; // 5.1.0
$LNG['a_del_bad_word_warn'] = "Ви впевнені, що хочете видалити %s зі списку фільтруючих слів?"; //5.1.0
$LNG['a_del_bad_word_multi'] = "це %s слова"; //5.1.0
$LNG['a_del_bad_word_invalid_id'] = "Помилковий ідентифікатор фільтруючого слова. Спробуйте ще раз."; // 5.1.0

// Admin > Delete Ban // 5.2.0
$LNG['a_del_ban_header'] = "Видалити запис з блеклісту"; // 5.2.0
$LNG['a_del_ban_headers'] = "Видалити записи з блеклісту"; // 5.2.0
$LNG['a_del_ban_done'] = "Запис з блеклісту була видалена."; // 5.2.0
$LNG['a_del_ban_dones'] = "Записи з блеклісту були видалені."; // 5.2.0
$LNG['a_del_ban_warn'] = "Ви впевнені, що Ви хочете видалити %s з блеклісту?"; //5.2.0
$LNG['a_del_ban_multi'] = "всього %s записів"; //5.2.0
$LNG['a_del_ban_invalid_id'] = "Помилковий ідентифікатор в блеклісті. Спробуйте ще раз."; // 5.2.0

// Admin > Delete Custom Page // 5.1.0
$LNG['a_del_page_header'] = "Видалити спеціалізовану сторінку"; // 5.1.0
$LNG['a_del_page_headers'] = "Видалити спеціалізовані сторінки"; // 5.1.0
$LNG['a_del_page_done'] = "Спеціалізована сторінка видалена."; // 5.1.0
$LNG['a_del_page_dones'] = "Спеціалізовані сторінки видалені."; // 5.1.0
$LNG['a_del_page_warn'] = "Ви впевнені, що хочете видалити %s?"; //5.1.0
$LNG['a_del_page_multi'] = "це %s учасників"; //5.1.0
$LNG['a_del_page_invalid_id'] = "Невірний ідентифікатор спеціалізованої сторінки. Спробуйте ще раз."; // 5.1.0

// Admin > Delete Review // 5.0
$LNG['a_del_rev_header'] = "Видалити огляд"; // 5.0
$LNG['a_del_rev_headers'] = "Видалити огляди"; // 5.0
$LNG['a_del_rev_done'] = "Огляд був видалений."; // 5.0
$LNG['a_del_rev_dones'] = "Огляди були видалені."; // 5.0
$LNG['a_del_rev_warn'] = "Ви впевнені, що хочете видалити цей огляд?"; //5.0
$LNG['a_del_rev_warns'] = "Ви впевнені, що хочете видалити ці огляди?"; //5.0
$LNG['a_del_rev_invalid_id'] = "Неправильний ID огляду. Спробуйте ще раз."; // 5.0

// Admin > Edit Member
$LNG['a_edit_header'] = "Редагувати учасника"; // 5.0
$LNG['a_edit_site_is'] = "Це сайт"; // 4.0
$LNG['a_edit_active'] = "Активний (в рейтингу)"; // 4.0
$LNG['a_edit_inactive'] = "Неактивний (не в рейтингу)"; // 5.0
$LNG['a_edit_edited'] = "Учасник був відредагований.";

// Admin > Edit Bad Word // 5.1.0
$LNG['a_edit_bad_word_header'] = "Редагувати фільтруюче слово"; // 5.1.0
$LNG['a_edit_bad_word_edited'] = "Фільтруюче слово відредаговане."; // 5.1.0

// Admin > Edit Ban // 5.2.0
$LNG['a_edit_ban_header'] = "Редагувати запис у блеклісті."; // 5.2.0
$LNG['a_edit_ban_edited'] = "Запис в блеклісті відредагований."; // 5.2.0

// Admin > Edit Custom Page // 5.1.0
$LNG['a_edit_page_header'] = "Редагувати спеціалізовану сторінку"; // 5.1.0
$LNG['a_edit_page_content'] = "Зміст - Ви можете використовувати HTML"; // 5.1.0
$LNG['a_edit_page_edited'] = "Сторінка відредагована."; // 5.1.0

// Admin > Edit Review // 5.0
$LNG['a_edit_rev_header'] = "Редагувати огляд"; // 5.0
$LNG['a_edit_rev_edited'] = "Огляд був відредагований.";

// Admin > Email Members
$LNG['a_email_header'] = "Послати Email учасникам"; // 5.0
$LNG['a_email_subject'] = "Тема"; // 4.2.0
$LNG['a_email_message'] = "Повідомлення"; // 4.2.0
$LNG['a_email_msg_sent'] = "Email відправлений %s"; // 5.0
$LNG['a_email_not_sent'] = "Email не може бути посланий %s"; // 5.0
$LNG['a_email_sent'] = "%s учасникам був відправлений email."; // 4.2.0
$LNG['a_email_failed'] = "%s учасникам email не був посланий."; // 4.2.0

// Admin > Logout
$LNG['a_logout_message'] = "Ви вийшли з облікового запису адміністратора."; // 5.0

// Admin > Main
$LNG['a_header'] = "Адміністратор"; // 5.0
$LNG['a_main'] = "Ласкаво просимо в панель адміністратора. Використовуйте посилання в лівій частині сторінки для управління Вашим рейтингом."; // 5.0
$LNG['a_main_approve'] = "1 сайт чекає дозволу."; // 5.0
$LNG['a_main_approves'] = "%s сайтів чекають дозволу."; // 5.0
$LNG['a_main_approve_edit'] = "Зміни на одному сайті чекають підтвердження."; // 5.2.0
$LNG['a_main_approve_edits'] = "Зміни на  s сайтах чекають підтвердження."; // 5.2.0
$LNG['a_main_approve_rev'] = "1 огляд чекає дозволу."; // 5.0
$LNG['a_main_approve_revs'] = "%s оглядів чекає дозволу."; // 5.0
$LNG['a_main_your'] = "Ваша версія"; // 5.0
$LNG['a_main_latest'] = "Остання версія"; // 5.0
$LNG['a_main_new'] = "<a href=\"http://www.aardvarktopsitesphp.com/\">Aardvark Topsites PHP</a>"; // 5.0

// Admin > Manage Members
$LNG['a_man_header'] = "Управління учасниками"; // 5.0
$LNG['a_man_actions'] = "Дії"; // 4.2.0
$LNG['a_man_edit'] = "Редагувати"; // 4.2.0
$LNG['a_man_delete'] = "Видалити"; // 4.2.0
$LNG['a_man_email'] = "Email"; // 4.2.0
$LNG['a_man_all'] = "Вибрати все"; // 5.0
$LNG['a_man_none'] = "Нічого не вибирати"; // 5.0
$LNG['a_man_del_sel'] = "Видалити вибрані"; // 5.0

// Admin > Manage Bad Words // 5.1.0
$LNG['a_man_bad_words_header'] = "Фільтр ненормативної лексики"; // 5.1.0
$LNG['a_man_bad_words_instructions'] = "Введіть слово і нижче його заміну. Наприклад, Ви можете ввести \"мудак\" в поле слово і \"м ***к\" в полі заміни."; // 5.1.0
$LNG['a_man_bad_words_instructions_matching'] = "Точне співпадіння замінить тільки повністю слово, яке збігається. Глобальний збіг замінить будь-яку частину слова. Приміром, глобальна заміна слова \"сук\" змінить слова \"борсук\" і \"сукно\"."; // 5.1.0
$LNG['a_man_bad_words_word'] = "Слово"; // 5.1.0
$LNG['a_man_bad_words_replacement'] = "Заміна"; // 5.1.0
$LNG['a_man_bad_words_matching'] = "Збіг"; // 5.1.0
$LNG['a_man_bad_words_exact'] = "Точне"; // 5.1.0
$LNG['a_man_bad_words_global'] = "Глобальне"; // 5.1.0
$LNG['a_man_bad_words_filter'] = "Фільтрувати слово"; // 5.1.0
$LNG['a_man_bad_words_filtered'] = "Слово \"%s\" було додано до списку ненормативної лексики."; // 5.1.0

// Admin > Manage Ban // 5.2.0
$LNG['a_man_ban_header'] = "Блекліст"; // 5.2.0
$LNG['a_man_ban_instructions'] = "Щоб забанити когось із вашого рейтингу, заповніть форму наведену нижче. Коли користувач реєструється, URL, e-mail, ім'я користувача і IP адрес перевіряються. Коли сайт редагується, перевіряється URL і e-mail адреса. <br /> <br /> Блекліст не поширюється на вже зареєстрованих учасників."; // 5.2.0
$LNG['a_man_ban_words_instructions_matching'] = "Точне співпадіння буде працювати тільки при повній ідентичності тексту. Глобальний збіг буде працювати з будь-якими фрагментами тексту. Наприклад, глобальний збіг http://www.yahoo.com/ буде працювати для будь-яких сторінок, що містять http://www.yahoo.com/ в URL, а точний збіг тексту http://www.yahoo.com/ вплине тільки на титульну сторінку."; // 5.2.0
$LNG['a_man_ban_string'] = "Строка"; // 5.2.0
$LNG['a_man_ban_field'] = "Поле"; // 5.2.0
$LNG['a_man_ban_blacklisted'] = "\"%s\" був доданий в блекліст."; // 5.2.0

// Admin > Manage Custom Pages // 5.1.0
$LNG['a_man_pages_header'] = "Управління спеціалізованими сторінками"; // 5.1.0

// Admin > Manage Reviews // 5.0
$LNG['a_man_rev_header'] = "Управління оглядами сайтів"; // 5.0
$LNG['a_man_rev_enter'] = "Щоб редагувати огляд сайту, введіть ім'я користувача."; // 5.0
$LNG['a_man_rev_id'] = "ID"; // 5.0
$LNG['a_man_rev_rev'] = "Огляд"; // 5.0
$LNG['a_man_rev_date'] = "Дата"; // 5.0

// Admin > Menu
$LNG['a_menu'] = "Меню";
$LNG['a_menu_main'] = "На початок"; // 5.0
$LNG['a_menu_approve'] = "Перевірити нових учасників";
$LNG['a_menu_approve_edits'] = "Підтвердити відредагованих учасників"; // 5.2.0
$LNG['a_menu_manage'] = "Управління учасниками"; // 4.2.0
$LNG['a_menu_settings'] = "Змінити налаштування"; // 5.0
$LNG['a_menu_manage_bad_words'] = "Фільтр ненормативної лексики"; // 5.1.0
$LNG['a_menu_manage_ban'] = "Блекліст"; // 5.2.0
$LNG['a_menu_backup'] = "Резервна копія бази даних"; // 5.2.0
$LNG['a_menu_skins'] = "Шаблони і категорії"; // 5.0
$LNG['a_menu_approve_reviews'] = "Перевірити нові огляди"; // 5.0
$LNG['a_menu_manage_reviews'] = "Редагувати огляди"; // 5.0
$LNG['a_menu_email'] = "Послати email учасникам";
$LNG['a_menu_delete_review'] = "Видалити огляд";
$LNG['a_menu_logout'] = "Вийти";
$LNG['a_menu_delete'] = "Видалити учасника";
$LNG['a_menu_edit'] = "Редагувати учасника";
$LNG['a_menu_create_page'] = "Створення спеціалізованої сторінки"; // 5.1.0
$LNG['a_menu_manage_pages'] = "Управління спеціалізованими сторінками"; // 5.1.0
$LNG['a_header_members'] = "Учасники"; // 5.0
$LNG['a_header_settings'] = "Установки"; // 5.0
$LNG['a_header_tools'] = "Інструменти"; // 5.2.0
$LNG['a_header_reviews'] = "Описи"; // 5.0
$LNG['a_header_pages'] = "Спеціалізовані сторінки"; // 5.1.0

// Admin > Settings
$LNG['a_s_header'] = "Змінити налаштування";
$LNG['a_s_help'] = "Допомога"; // 5.1.0

$LNG['a_s_general'] = "Основні налаштування";
$LNG['a_s_admin_password'] = "Пароль адміністратора";
$LNG['a_s_list_name'] = "Назва Вашого рейтингу";
$LNG['a_s_list_url'] = "URL директорії, в якій встановлено рейтинг";
$LNG['a_s_default_language'] = "Основна мова";
$LNG['a_s_your_email'] = "Ваш email адрес";

$LNG['a_s_sql'] = "Налаштування бази даних";
$LNG['a_s_sql_type'] = "Тип БД"; // 4.1.0
$LNG['a_s_sql_host'] = "Хост БД";
$LNG['a_s_sql_database'] = "Назва БД";
$LNG['a_s_sql_username'] = "Ім'я користувача БД";
$LNG['a_s_sql_password'] = "Пароль";

$LNG['a_s_ranking'] = "Налаштування рейтингу";
$LNG['a_s_num_list'] = "Число учасників на одній сторінці"; // 5.0
$LNG['a_s_ranking_period'] = "Період рейтингу"; // 5.0
$LNG['a_s_ranking_method'] = "Метод рейтингу"; // 5.0
$LNG['a_s_ranking_average'] = "Рейтинг за середнім значенням або по %s"; // 5.0
$LNG['a_s_featured_member'] = 'Просунутий учасник - додайте {$featured_member} в файл wrapper.html після включення цієї установки.'; // 4.1.0
$LNG['a_s_top_skin_num'] = "Кількість учасників, які відображатимуться у вигляді _top";
$LNG['a_s_ad_breaks'] = "Показувати рекламу після цих значень (розділяйте комами) - <a href=\"http://www.aardvarktopsitesphp.com/manual/ad_breaks.php\" class=\"help\" target=\"_blank\">{$LNG['a_s_help']}</a>"; // 5.1.0
$LNG['a_s_fill_blank_rows'] = "Заповніть порожні рядки повідомленнями про \"{$LNG['table_your_site_here']}\""; // 5.2.0

$LNG['a_s_member'] = "Настройки участников";
$LNG['a_s_active_default'] = "Чи потрібно дозвіл новому учасникові перед тим, як він почне показуватися в рейтингу";
$LNG['a_s_active_default_review'] = "Чи потрібно перевіряти нові огляди перед тим, як вони стануть доступні всім";
$LNG['a_s_delete_after'] = "Після скількох днів бездіяльності видаляти неактивних учасників (якщо вибрати 0, видалятися не будуть)"; // 4.1.0
$LNG['a_s_email_admin_on_join'] = "Відправляти e-mail адміністратору при реєстрації нового учасника"; // 5.1.0
$LNG['a_s_email_admin_on_review'] = "Відправляти e-mail адміністратору при отриманні нового огляду"; // 5.1.0
$LNG['a_s_max_banner_width'] = "Максимальна ширина банера учасника (якщо вибрати 0, обмежень не буде)"; // 4.2.0
$LNG['a_s_max_banner_height'] = "Максимальна висота банера учасника (якщо вибрати 0, обмежень не буде)"; // 4.2.0
$LNG['a_s_default_banner'] = "Банер за замовчуванням для тих учасників, хто не завантажив свій";

$LNG['a_s_button'] = "Настройки кнопок рейтингу";
$LNG['a_s_ranks_on_buttons'] = "Значення на кнопках -  <a href=\"http://www.aardvarktopsitesphp.com/manual/buttons.php\" class=\"help\" target=\"_blank\">{$LNG['a_s_help']}</a>"; // 5.1.0
$LNG['a_s_stat_buttons'] = "Кнопка со статистикой"; // 4.2.0
$LNG['a_s_button_url'] = "При виборі \"Так\" або \"Ні\" - для показу на сайтах учасників буде обраний URL кнопки за замовчуванням"; // 4.0
$LNG['a_s_button_dir'] = "Якщо вибрано \"Так\" - URL директорії, в якій знаходиться кнопка"; // 4.0
$LNG['a_s_button_ext'] = "Якщо вибрано \"Так\" - розширення файлу кнопки (gif, png, jpg, etc.)"; // 4.0
$LNG['a_s_button_num'] = "Якщо вибрано \"Так\" - число кнопок, яке Ви зробите"; // 4.0
$LNG['a_s_google_friendly_links'] = "Список схожий на видачу Google - <a href=\"http://www.aardvarktopsitesphp.com/manual/google_friendly_links.php\" class=\"help\" target=\"_blank\">{$LNG['a_s_help']}</a>"; // 5.1.0

$LNG['a_s_gateway'] = "Шлюзова сторінка для перенаправлення накрутчиків";
$LNG['a_s_captcha'] = "Перевірка на введення символів при реєстрації (захист від спамерів) - <a href=\"http://www.aardvarktopsitesphp.com/manual/word_verification.php\" class=\"help\" target=\"_blank\">{$LNG['a_s_help']}</a>"; // 5.1.0
$LNG['a_s_security_question'] = "Питання і відповідь для розпізнавання спаму (якщо залишити порожнім, блокування відключиться) - <a href=\"http://www.aardvarktopsitesphp.com/manual/security_question.php\" class=\"help\" target=\"_blank\">{$LNG['a_s_help']}</a>"; // 5.2.0

$LNG['a_s_other'] = "Інші налаштування";
$LNG['a_s_search'] = "Пошук";
$LNG['a_s_time_offset'] = "Зрушення часу рейтингу по відношенню до часу сервера (в годинах)";

$LNG['a_s_on'] = "Вкл";
$LNG['a_s_off'] = "Викл";
$LNG['a_s_days'] = "Днів";
$LNG['a_s_months'] = "Місяців";
$LNG['a_s_weeks'] = "Тижнів"; // 4.2.0
$LNG['a_s_yes'] = "Так";
$LNG['a_s_no'] = "Ні";
$LNG['a_s_answer'] = "Відповідь"; // 5.2.0

$LNG['a_s_updated'] = "Ваші налаштування були оновлені.";

// Admin > Skins and Categories // 5.0
$LNG['a_skins_header'] = "Шаблони і категорії"; // 5.0
$LNG['a_skins_default'] = "Шаблон по замовчуванню"; // 5.0
$LNG['a_skins_set_default'] = "Встановити шаблон по замовчуванню"; // 5.0
$LNG['a_skins_anon'] = "Anonymous"; // 5.0
$LNG['a_skins_default_done'] = "Шаблон по замовчуванню був обраний."; // 5.0
$LNG['a_skins_categories_done'] = "Шаблон для категорії був обраний."; // 5.0
$LNG['a_skins_new_category_done'] = "Нова категорія створена."; // 5.0
$LNG['a_skins_delete_done'] = "Категорія була видалена."; // 5.0
$LNG['a_skins_delete_error'] = "Категорія не може бути вилучена, оскільки в рейтингу повинна бути хоч одна категорія."; // 5.1.0
$LNG['a_skins_edit_done'] = "Категорія була відредагована."; // 5.0
$LNG['a_skins_invalid_skin'] = "Неправильний шаблон: %s. Спробуйте ще раз."; // 5.0
$LNG['a_skins_categories'] = "Категорії"; // 5.0
$LNG['a_skins_new_category'] = "Створити нову категорію"; // 5.0
$LNG['a_skins_set_skins'] = "Вибрати шаблон для категорії"; // 5.0
$LNG['a_skins_edit_category'] = "Редагувати категорію"; // 5.0
$LNG['a_skins_category_name'] = "Назва категорії"; // 5.0
$LNG['a_skins_diff_skins'] = "Якщо Ви хочете вибрати різні шаблони для різних директорій, виберіть їх нижче."; // 5.0
?>
 
