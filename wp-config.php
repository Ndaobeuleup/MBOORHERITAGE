<?php
/**
 * La configuration de base de votre installation WordPress.
 *
 * Ce fichier contient les réglages de configuration suivants : réglages MySQL,
 * préfixe de table, clés secrètes, langue utilisée, et ABSPATH.
 * Vous pouvez en savoir plus à leur sujet en allant sur
 * {@link https://fr.wordpress.org/support/article/editing-wp-config-php/ Modifier
 * wp-config.php}. C’est votre hébergeur qui doit vous donner vos
 * codes MySQL.
 *
 * Ce fichier est utilisé par le script de création de wp-config.php pendant
 * le processus d’installation. Vous n’avez pas à utiliser le site web, vous
 * pouvez simplement renommer ce fichier en "wp-config.php" et remplir les
 * valeurs.
 *
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Réglages MySQL - Votre hébergeur doit vous fournir ces informations. ** //
/** Nom de la base de données de WordPress. */
define( 'DB_NAME', 'basemboor' );

/** Utilisateur de la base de données MySQL. */
define( 'DB_USER', 'root' );

/** Mot de passe de la base de données MySQL. */
define( 'DB_PASSWORD', '' );

/** Adresse de l’hébergement MySQL. */
define( 'DB_HOST', 'localhost' );

/** Jeu de caractères à utiliser par la base de données lors de la création des tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** Type de collation de la base de données.
  * N’y touchez que si vous savez ce que vous faites.
  */
define('DB_COLLATE', '');

/**#@+
 * Clés uniques d’authentification et salage.
 *
 * Remplacez les valeurs par défaut par des phrases uniques !
 * Vous pouvez générer des phrases aléatoires en utilisant
 * {@link https://api.wordpress.org/secret-key/1.1/salt/ le service de clefs secrètes de WordPress.org}.
 * Vous pouvez modifier ces phrases à n’importe quel moment, afin d’invalider tous les cookies existants.
 * Cela forcera également tous les utilisateurs à se reconnecter.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         '-<E_1Jeh9?e^xwT};8pqT-al@Z_c&aAX,?w-*=ej:1y ;Q~D&e.M/@@rQ{cXUIWz' );
define( 'SECURE_AUTH_KEY',  'lNo%2U|8Jmxyu!q./T|N(eB|0h_o+qV`TZ~.}=r~*sEGQRu]Njv+a&Ao_A[kM-{B' );
define( 'LOGGED_IN_KEY',    'lMaM2PTxaG05i<{bmRU/;ls[?Ui,}d{BJaW%hUm}Z@:/.FsWb7t|-} {5~W>fs,J' );
define( 'NONCE_KEY',        'jaH!]Q$5}TJ_2]8n,%)*R>e]1VxFJCA/5`3C~!kJn;~4I-:x-r.b^98O8R@GR&YJ' );
define( 'AUTH_SALT',        'tTZt(]narjy^48W#f8(BAT{M8|x[S.-M%k}5{:=B}!fC&`R#aI{|<maQH_y0c&1m' );
define( 'SECURE_AUTH_SALT', '2</#aeZq3l|!-gf]5l)y),6%P3J!)I`FPrT^(*u7`emrxqA`T*Y@`4z xcDoAf;{' );
define( 'LOGGED_IN_SALT',   'a-KKX7VvjmM$r[ZRj igpXG9QY>Sr)L_5%, A+]liZ5F-FUiFcM`aLE%14aunR|M' );
define( 'NONCE_SALT',       '#rG3IUlXoEa/qwj(ODi)D9D9dQ{E!wA,`k]W;yo`Tt1;aH{olC7s;iRvr8=S@rUc' );
/**#@-*/

/**
 * Préfixe de base de données pour les tables de WordPress.
 *
 * Vous pouvez installer plusieurs WordPress sur une seule base de données
 * si vous leur donnez chacune un préfixe unique.
 * N’utilisez que des chiffres, des lettres non-accentuées, et des caractères soulignés !
 */
$table_prefix = 'wp_';

/**
 * Pour les développeurs et développeuses : le mode déboguage de WordPress.
 *
 * En passant la valeur suivante à "true", vous activez l’affichage des
 * notifications d’erreurs pendant vos essais.
 * Il est fortemment recommandé que les développeurs d’extensions et
 * de thèmes se servent de WP_DEBUG dans leur environnement de
 * développement.
 *
 * Pour plus d’information sur les autres constantes qui peuvent être utilisées
 * pour le déboguage, rendez-vous sur la documentation.
 *
 * @link https://fr.wordpress.org/support/article/debugging-in-wordpress/
 */
define('WP_DEBUG', false);

/* C’est tout, ne touchez pas à ce qui suit ! Bonne publication. */

/** Chemin absolu vers le dossier de WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Réglage des variables de WordPress et de ses fichiers inclus. */
require_once(ABSPATH . 'wp-settings.php');
