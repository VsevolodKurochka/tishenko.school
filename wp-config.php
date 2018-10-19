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
define('DB_NAME', 'visotskiy');

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
define('AUTH_KEY',         'nBvdpD1`C*1OBTPNr#2908DthI_Uz2GqJ@3T1`:[DF~HHH&$P=Gse [j<AQXYF=r');
define('SECURE_AUTH_KEY',  '!v4?6JzuKkpO>(fR+?is}}uJFj0kh=9@xd{K>zrk/g{y`V0teWIj,Z=|AGdn.lkM');
define('LOGGED_IN_KEY',    'nkL3V>_J$NBy{Yb#cbNV29At0E0]ZQ.I[8:;oRb9y[mVA6uw%:OLJ0=UJ91?6^0)');
define('NONCE_KEY',        '?>>,{fE_z%r(uTnL?=615/:-PYz5YZKPt8USfpWEt1<.<KSwzML+h/EMyAc=S*.{');
define('AUTH_SALT',        '|EUWr*&B;fkR6;Y7V4u5J]f[6`aUsS8^4$<eSz&J0w4JMxDSe6TC--*7GO#~<3}(');
define('SECURE_AUTH_SALT', 'KH!8a)LTBd2?9,17tI#>t8p,zd]d:I@`dbt0TJVhLCrnTIBTbQA#/$h!I.|@<KBE');
define('LOGGED_IN_SALT',   'x(05^>-qSJqWa;E{8&Z$CXO? l_T7{GVsBwa=oVPh]PL}L7GU67w9/3wWU+8{e<D');
define('NONCE_SALT',       '@P @LZW=hZnG3loMJ+.tV8>;pGea=3=m_Z?b^OESKXu!w-qn-.uq7s3W^^DhOLxR');

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
