<?php
/**
 * Основные параметры WordPress.
 *
 * Скрипт для создания wp-config.php использует этот файл в процессе
 * установки. Необязательно использовать веб-интерфейс, можно
 * скопировать файл в "wp-config.php" и заполнить значения вручную.
 *
 * Этот файл содержит следующие параметры:
 *
 * * Настройки MySQL
 * * Секретные ключи
 * * Префикс таблиц базы данных
 * * ABSPATH
 *
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** Параметры MySQL: Эту информацию можно получить у вашего хостинг-провайдера ** //
/** Имя базы данных для WordPress */
define('DB_NAME', 'sushi-rolls');

/** Имя пользователя MySQL */
define('DB_USER', 'Sushi');

/** Пароль к базе данных MySQL */
define('DB_PASSWORD', 'mr123456789');

/** Имя сервера MySQL */
define('DB_HOST', 'localhost');

/** Кодировка базы данных для создания таблиц. */
define('DB_CHARSET', 'utf8mb4');

/** Схема сопоставления. Не меняйте, если не уверены. */
define('DB_COLLATE', '');

/**#@+
 * Уникальные ключи и соли для аутентификации.
 *
 * Смените значение каждой константы на уникальную фразу.
 * Можно сгенерировать их с помощью {@link https://api.wordpress.org/secret-key/1.1/salt/ сервиса ключей на WordPress.org}
 * Можно изменить их, чтобы сделать существующие файлы cookies недействительными. Пользователям потребуется авторизоваться снова.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'PP$b?C:yml#*9)3C-@[8IBaS<] NAKxWk7&N2cY.o2`jHB@sLaIQixn##>hOI|@i');
define('SECURE_AUTH_KEY',  'jD_*}L.$U8F<3luU}6jl%=S$-%y90A.,n=ga/0$-gsb_ZIN6Z*x|3iIin]6.A4@7');
define('LOGGED_IN_KEY',    '!4vC4z9K{8^6GGXviMMW6V-(e;sxh4P@mRoenpbR,R9g{Om]v(t-Xk&,6h)Oy~6b');
define('NONCE_KEY',        'j?@6zrob{Z$gnfcQs]TM3N^UOAl{y`i.?qAy$!j$4QDgg&28(#=O9A )e7mauoUX');
define('AUTH_SALT',        '@z7jwV?mu|s,,>5@/R_ZZTxSMYfCzXi>)_A[XR2zVSZi~HVAHDlk_:lbwii7`5p7');
define('SECURE_AUTH_SALT', '&:j?C^sfTxmVd !;6l(e8 %nUMs9&{iND$9!vBPEfXnlY<hXTJ7CFAbqUFDU@oEk');
define('LOGGED_IN_SALT',   'IX~%JqQS4vWk33KxV@rakD26~Je!g5$JF3$wu^bV6u|OCy?vjM,s0fZ8ihnky-2z');
define('NONCE_SALT',       'p__D3`BbIg|AShdv>czFU#aj[.3XNlpZEdicR@*]JqJ(k8|uGAUVM>0rH?1vY03,');

/**#@-*/

/**
 * Префикс таблиц в базе данных WordPress.
 *
 * Можно установить несколько сайтов в одну базу данных, если использовать
 * разные префиксы. Пожалуйста, указывайте только цифры, буквы и знак подчеркивания.
 */
$table_prefix  = 'wp_';

/**
 * Для разработчиков: Режим отладки WordPress.
 *
 * Измените это значение на true, чтобы включить отображение уведомлений при разработке.
 * Разработчикам плагинов и тем настоятельно рекомендуется использовать WP_DEBUG
 * в своём рабочем окружении.
 *
 * Информацию о других отладочных константах можно найти в Кодексе.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define('WP_DEBUG', false);

/* Это всё, дальше не редактируем. Успехов! */

/** Абсолютный путь к директории WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Инициализирует переменные WordPress и подключает файлы. */
require_once(ABSPATH . 'wp-settings.php');
