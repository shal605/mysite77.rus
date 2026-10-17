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
define( 'DB_NAME', 'mysite7.rus' );

/** Имя пользователя базы данных */
define( 'DB_USER', 'Admin' );

/** Пароль к базе данных */
define( 'DB_PASSWORD', 'giveme5' );

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
define( 'AUTH_KEY',         'AyfUTwJ$rO~])<*/9k;1#Iq:9ZJT2%bz1:sfyPwv8is2yB/ub>60o]<iSI:z@E^0' );
define( 'SECURE_AUTH_KEY',  'DCz6(&$>w^$`MB)@9S]]OXd*jBN#,ByMqzb R/R|e&cq@7Ba$*O`tKiS6IA6q #v' );
define( 'LOGGED_IN_KEY',    '`FiG=oq3wFgjs.m`;#u^LZix#JGtK+_;qo{-5a[d=zH1& t3,X&`Dmr_@qO5*9c|' );
define( 'NONCE_KEY',        'ELw@Z^]o|.C4[MNa<q2Unu&ZxpbHw#$ufnPX}34pflXi4r?}|3H3DBbVcgCp8%$a' );
define( 'AUTH_SALT',        '^+dod3`O9|~rs@O%fb8;%@k!2V2E1/7<sTg]yvu~>E_uMGZN!bQv<?NQme[h2hb6' );
define( 'SECURE_AUTH_SALT', '8?/V%xGcF1/<6SO(a`-nZ*Bv[> r4/IqZ/fZd|:Z)@@*!dU/l!rv6%cTGi09$7K0' );
define( 'LOGGED_IN_SALT',   '!G?9kzj!U+m,.LUCchk!FYX-B_YS)?+Acd1pI<jO 8aq{wLsQ?LO0[ZRu]Us-.Mg' );
define( 'NONCE_SALT',       'VaP3}a;?zdb=Pp!m1F4vdH,<M$Sg#_MaN_bvxNR60*.k]&^~6#Z4]i&[vXXl/e},' );

/**#@-*/

/**
 * Префикс таблиц в базе данных WordPress.
 *
 * Можно установить несколько сайтов в одну базу данных, если использовать
 * разные префиксы. Пожалуйста, указывайте только цифры, буквы и знак подчеркивания.
 *
 * В процессе установки указанный префикс добавляется к именам таблиц базы данных.
 * Если изменить это значение после установки WordPress, то сайт снова перейдёт
 * в режим установки.
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/#table-prefix
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
