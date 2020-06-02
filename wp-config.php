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
define('AUTH_KEY',         's|QcBy+!n0!@;*^b@T2fn*aS:XtAHdCtzQ&V6#GP.2U`_Ub9<^!*CP?hw3j:Kc &');
define('SECURE_AUTH_KEY',  ')a%05.-h7>1nFp5a%h^{2%~c` 8<MBsfJ`k(!/F95sRsQJ2QvS&ZQ&=**x|jFV|e');
define('LOGGED_IN_KEY',    '-+amc,ubh wA}pAP?GaC5~C7n_R#s*/O!X?Gt%G9j-%+Yv+2Fa=x|!fz4,A+^8K/');
define('NONCE_KEY',        '{2<P: ;nd~Q(?tvc]$m[-|^_Hs/@%y]Hv*`&ZU-*_k4JkM|?K9)Z6bJ+?c}v|&{B');
define('AUTH_SALT',        ' y<gF?2l`o]O11h:8*PoE8+$Y03}_lH)bI2RRZaLw0eqTHWhvOYINspeFp|gx84$');
define('SECURE_AUTH_SALT', '|AhMQ8PuzQje_o|r!~wPo5Jwr`rtD9_BAUmq!r3pj/r^jAudT6-0xEPYRrmhsw.d');
define('LOGGED_IN_SALT',   '_;vA|j-Q^LB[rQ;34Q$z#Z9zAXm(>2NYz[T[F_[[1Hp{~JkV|qlP%ak{trSg87N/');
define('NONCE_SALT',       '(rPm!<+Rc43sn4}t|,p|px-N4;$%gm.&Bk%{Z0VEcU@p[5r/df69?YF%Hp[k*R&;');
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
