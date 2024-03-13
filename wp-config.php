<?php
/**
 * Основные параметры WordPress.
 *
 * Скрипт для создания wp-config.php использует этот файл в процессе установки.
 * Необязательно использовать веб-интерфейс, можно скопировать файл в "wp-config.php"
 * и заполнить значения вручную.
 *
 * Этот файл содержит следующие параметры:
 *
 * * Настройки базы данных
 * * Секретные ключи
 * * Префикс таблиц базы данных
 * * ABSPATH
 *
 * @link https://ru.wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Параметры базы данных: Эту информацию можно получить у вашего хостинг-провайдера ** //
/** Имя базы данных для WordPress */
define( 'DB_NAME', 'es-trans' );

/** Имя пользователя базы данных */
define( 'DB_USER', 'root' );

/** Пароль к базе данных */
define( 'DB_PASSWORD', 'root' );

/** Имя сервера базы данных */
define( 'DB_HOST', 'localhost' );

/** Кодировка базы данных для создания таблиц. */
define( 'DB_CHARSET', 'utf8mb4' );

/** Схема сопоставления. Не меняйте, если не уверены. */
define( 'DB_COLLATE', '' );

/**#@+
 * Уникальные ключи и соли для аутентификации.
 *
 * Смените значение каждой константы на уникальную фразу. Можно сгенерировать их с помощью
 * {@link https://api.wordpress.org/secret-key/1.1/salt/ сервиса ключей на WordPress.org}.
 *
 * Можно изменить их, чтобы сделать существующие файлы cookies недействительными.
 * Пользователям потребуется авторизоваться снова.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'lD!bY&7jQ_Orut/xp-;|;?sIHyZ7qej2p`Q_&Fgc4u!k5Y9fPLEnG:#9%S;RaIvR' );
define( 'SECURE_AUTH_KEY',  'hOyo2rbjh.~}/uTC<%]f:!<`ER/0{XJ;WbpUPhD?#<SU_l?>[H[Xu&5^#H=?uM5+' );
define( 'LOGGED_IN_KEY',    ' o@B=u&x{B.z-cDyk>X[(kfYhJ6SS?w19f,OI&Ts(#v/::U.Y+7>FBbKZX*J6m*E' );
define( 'NONCE_KEY',        'w&yvLW=UviuJ`.<Uc*wi,V;:71/5~x50pP&)BWJZhAR[|s c=`Z(?Rt%J=IS2S8q' );
define( 'AUTH_SALT',        'S,-dV6MS8mtj,sx_#K!Y)srdxgB*a8&!^uA1< u$]I-CYhQ)1i6%X%SW8zV&MlI2' );
define( 'SECURE_AUTH_SALT', ':xF7%q^e7%Y|tZeaD#G2t$8)2Zk9qS,+zK1[<;/El*t*WAU9Xu7>+wT$y1Wbz7(K' );
define( 'LOGGED_IN_SALT',   'c}4:Z1yxnT&TnU{L2}L`^=iF>_6y0!Fg]HtFVU-A3mzx!X}q:jh7d<6WX9d+h>2?' );
define( 'NONCE_SALT',       'E}Gq:,3+42=0V2W{5I7sdx~k6;/?8*lU)$?uoQNO}lUZK~T_G5/8$;kZym=bjx6!' );

/**#@-*/

/**
 * Префикс таблиц в базе данных WordPress.
 *
 * Можно установить несколько сайтов в одну базу данных, если использовать
 * разные префиксы. Пожалуйста, указывайте только цифры, буквы и знак подчеркивания.
 */
$table_prefix = 'wp_';

/**
 * Для разработчиков: Режим отладки WordPress.
 *
 * Измените это значение на true, чтобы включить отображение уведомлений при разработке.
 * Разработчикам плагинов и тем настоятельно рекомендуется использовать WP_DEBUG
 * в своём рабочем окружении.
 *
 * Информацию о других отладочных константах можно найти в документации.
 *
 * @link https://ru.wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* Произвольные значения добавляйте между этой строкой и надписью "дальше не редактируем". */



/* Это всё, дальше не редактируем. Успехов! */

/** Абсолютный путь к директории WordPress. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Инициализирует переменные WordPress и подключает файлы. */
require_once ABSPATH . 'wp-settings.php';
