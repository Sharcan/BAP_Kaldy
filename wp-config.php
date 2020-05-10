<?php
/**
 * La configuration de base de votre installation WordPress.
 *
 * Ce fichier contient les réglages de configuration suivants : réglages MySQL,
 * préfixe de table, clés secrètes, langue utilisée, et ABSPATH.
 * Vous pouvez en savoir plus à leur sujet en allant sur
 * {@link http://codex.wordpress.org/fr:Modifier_wp-config.php Modifier
 * wp-config.php}. C’est votre hébergeur qui doit vous donner vos
 * codes MySQL.
 *
 * Ce fichier est utilisé par le script de création de wp-config.php pendant
 * le processus d’installation. Vous n’avez pas à utiliser le site web, vous
 * pouvez simplement renommer ce fichier en "wp-config.php" et remplir les
 * valeurs.
 *
 * @package WordPress
 */

// ** Réglages MySQL - Votre hébergeur doit vous fournir ces informations. ** //
/** Nom de la base de données de WordPress. */
define('DB_NAME', 'bap_kaldy');

/** Utilisateur de la base de données MySQL. */
define('DB_USER', 'root');

/** Mot de passe de la base de données MySQL. */
define('DB_PASSWORD', '');

/** Adresse de l’hébergement MySQL. */
define('DB_HOST', 'localhost:3306');

/** Jeu de caractères à utiliser par la base de données lors de la création des tables. */
define('DB_CHARSET', 'utf8');

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
define('AUTH_KEY',         '}6[-~|dxz54:YdmC&/ros>oJt ^iT`vYJ;izu,uaSis#(K/T|prq!xA2g=Gg+p^Z');
define('SECURE_AUTH_KEY',  'S|0DP~+?_Me K&?Rw-w7i 00TLXZN#nyn];B${;09QBNa*q<42<>h/P1?Qlb}z44');
define('LOGGED_IN_KEY',    '-&t~1U2>+=&DYfs!Xr|ynJ/w^tXZ4l b^$j_7$v5Ee:]}LldXmF9_B0*|H 174t+');
define('NONCE_KEY',        'q?`~>lH*HV-3-8+S~o^3[yCQqDt`~L|4Z-iwWOjU`rn6N~|WCx3GH3<q^F$twz`D');
define('AUTH_SALT',        's-*#y*0!taD;%~:+c41/2;mIV>*C}s5JRK`4#x98;aM9gsd~Yel_oe4Ku/1]W/+,');
define('SECURE_AUTH_SALT', '![.~E0,+/Vj*-`;7zM9qS1G!@x$|.B6#J/Z8HfYuBZt}ke-;Q+|STt1feIz~2R:z');
define('LOGGED_IN_SALT',   'SOH2WwvN2HZyIM~3}6BE[RVWx;SN&y@5|yP%EXZ$IV5c*bh,X#<W,EJ-VL#5*3>D');
define('NONCE_SALT',       '|P6u 9|F:M^a?!;]H%o/)gnLmWXh:G61?B^GtL!&$hvGV2>#,mspm(<relxW|sNV');
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
 * Pour les développeurs : le mode déboguage de WordPress.
 *
 * En passant la valeur suivante à "true", vous activez l’affichage des
 * notifications d’erreurs pendant vos essais.
 * Il est fortemment recommandé que les développeurs d’extensions et
 * de thèmes se servent de WP_DEBUG dans leur environnement de
 * développement.
 *
 * Pour plus d’information sur les autres constantes qui peuvent être utilisées
 * pour le déboguage, rendez-vous sur le Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define('WP_DEBUG', false);

/* C’est tout, ne touchez pas à ce qui suit ! Bonne publication. */

/** Chemin absolu vers le dossier de WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Réglage des variables de WordPress et de ses fichiers inclus. */
require_once(ABSPATH . 'wp-settings.php');
