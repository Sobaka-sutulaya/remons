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
define('DB_NAME', 'remont');

/** Имя пользователя MySQL */
define('DB_USER', 'root');

/** Пароль к базе данных MySQL */
define('DB_PASSWORD', '');

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
define('AUTH_KEY',         'C-;(.hg {vK/~mtu]Xp1|jn7UnKmrm?UQ55B%`-Z#ggU8ywHNphc5|byH6-~R@&)');
define('SECURE_AUTH_KEY',  'fT9Z(zA6[,2CXE%[C|ey}wxs$bZQ4zAJE.Mor?~SnKOwH)Z!2)0PE]FDW:BJ0m%5');
define('LOGGED_IN_KEY',    '> <gLD6x<XqV1 [D(Uuf7LLa$n?at[V8c!Ukh=Lmr&w;,@~4*:Um;,]7#/Oqah~G');
define('NONCE_KEY',        '!CYyg|rPhtNro)s`5MT%<cH@CqpcG Q<s=OCZ3z-Xmq:<,S0+6(%5ry|9u.-pKA<');
define('AUTH_SALT',        'yG!BF>%x1B(D:yZmUv?$b7Rya?M5+ZQSquDj<D:bXHG!TD6;!yF}^<L3D(~0yNkH');
define('SECURE_AUTH_SALT', '1mh].fg25{)C;W%A=O~J>0V*}b>|=myX1ig]Fk!%W/it!*%=aW<g8YQ6RxAFDGHI');
define('LOGGED_IN_SALT',   'J-`qw[jWtd8^W>-C1y{/+R:knMS.0/vk<kXgZ-)5I2NM4vROPj=*32n9dWDmy;R9');
define('NONCE_SALT',       '/~0s75JIDC#=])vMvABG6 e7O%c/c8N/NZ6Dhnv`wp|.]0O^V9)o*w%Vd}iCZl,_');

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
