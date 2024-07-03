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
define( 'DB_NAME', 'wp_test_DB' );

/** Имя пользователя базы данных */
define( 'DB_USER', 'root' );

/** Пароль к базе данных */
define( 'DB_PASSWORD', '' );

/** Имя сервера базы данных */
define( 'DB_HOST', 'MySQL-8.2' );

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
define( 'AUTH_KEY',         'Y%KJyc?-m)DXz;c@Ooq|>+$Bdju1fVTb7DBheUr% tuD`drE/g,, ]sR/J,H+Up*' );
define( 'SECURE_AUTH_KEY',  'zlp Q|ltC7.k07C`k[31N*(7xh(pE>Jd;z5SN/KXPE,{X?myk*:J2Ao?x%P2H29)' );
define( 'LOGGED_IN_KEY',    'RqP,8<$4+Db20By:/UoR~I,Y9Z[3zK%TvK>lsXYZb&P49yN!~6CNtwP6D!W[J5J7' );
define( 'NONCE_KEY',        'MBv<XS=7I2byQSpmh[*M@8*tbW.Z4HpF<q-`tO}&2:pjh|2fbfAr2Dot9X9EftRV' );
define( 'AUTH_SALT',        '5`V(kp?zLS!A!`,!)6V+&_1}_SOGH+t(CD&AH3:*qKT&/Oo?9#R73azKr-Wh:M^5' );
define( 'SECURE_AUTH_SALT', '5,2^)r^Q851P5iwjK`rC{6->.Gf:o$C?zYag^?-vcayx?SB-(L;vX&lb3lcpHIJ5' );
define( 'LOGGED_IN_SALT',   'N?K=;D__R_J|hNMS;:fk :rmfs,H!aWS$mwW}zL*$i+_De7RwymYKGTx>X*EB*2T' );
define( 'NONCE_SALT',       '0q)Xyi|A}I[b<C){gr9]Z}/-0-*KJoH|&3K&X##)ACk8kl(]kD^IJ77!E QLvH@,' );

/**#@-*/

/**
 * Префикс таблиц в базе данных WordPress.
 *
 * Можно установить несколько сайтов в одну базу данных, если использовать
 * разные префиксы. Пожалуйста, указывайте только цифры, буквы и знак подчеркивания.
 */
$table_prefix = 'wp_test_';

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
define( 'WP_DEBUG', true );

/* Произвольные значения добавляйте между этой строкой и надписью "дальше не редактируем". */



/* Это всё, дальше не редактируем. Успехов! */

/** Абсолютный путь к директории WordPress. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Инициализирует переменные WordPress и подключает файлы. */
require_once ABSPATH . 'wp-settings.php';
