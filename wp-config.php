<?php
/**
 * La configuration de base de votre installation WordPress.
 *
 * Ce fichier est utilisé par le script de création de wp-config.php pendant
 * le processus d’installation. Vous n’avez pas à utiliser le site web, vous
 * pouvez simplement renommer ce fichier en « wp-config.php » et remplir les
 * valeurs.
 *
 * Ce fichier contient les réglages de configuration suivants :
 *
 * Réglages MySQL
 * Préfixe de table
 * Clés secrètes
 * Langue utilisée
 * ABSPATH
 *
 * @link https://fr.wordpress.org/support/article/editing-wp-config-php/.
 *
 * @package WordPress
 */

// ** Réglages MySQL - Votre hébergeur doit vous fournir ces informations. ** //
/** Nom de la base de données de WordPress. */
define( 'DB_NAME', 'bap_kaldy' );

/** Utilisateur de la base de données MySQL. */
define( 'DB_USER', 'root' );

/** Mot de passe de la base de données MySQL. */
define( 'DB_PASSWORD', '' );

/** Adresse de l’hébergement MySQL. */
define( 'DB_HOST', 'localhost' );

/** Jeu de caractères à utiliser par la base de données lors de la création des tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/**
 * Type de collation de la base de données.
 * N’y touchez que si vous savez ce que vous faites.
 */
define( 'DB_COLLATE', '' );

/**#@+
 * Clés uniques d’authentification et salage.
 *
 * Remplacez les valeurs par défaut par des phrases uniques !
 * Vous pouvez générer des phrases aléatoires en utilisant
 * {@link https://api.wordpress.org/secret-key/1.1/salt/ le service de clés secrètes de WordPress.org}.
 * Vous pouvez modifier ces phrases à n’importe quel moment, afin d’invalider tous les cookies existants.
 * Cela forcera également tous les utilisateurs à se reconnecter.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'gSQ#r>@Sj5;EY ai6LzO`bh8mqb~t*YsRBGDpFB*0etT;<<oyJ:5mX6[G{r0eeM1' );
define( 'SECURE_AUTH_KEY',  '*fJzt}0tnArV@xOo&q4%<9j$nVJYoNn0!}WVA)FlsL, UYQ%8;}@$|2m209.?QaL' );
define( 'LOGGED_IN_KEY',    ']4UY_@L34c2hW~A0a!F;&F!G=|fRpc% H3SxpRQGAkKZynd 0LPEwV8N0LcR{8yJ' );
define( 'NONCE_KEY',        'h<hkJ*J]fWLmbP<p[;w`CJn( +,g*$3IxNjPu3:T>F$QF|}U{wg/d**Ua`RI2W0_' );
define( 'AUTH_SALT',        'n}J3/V&$b*IeRblBBv!AVoYdN@nQ`o>v@mn_FbF&Op%>W{L?0ChpwzXA-Su5s@3D' );
define( 'SECURE_AUTH_SALT', 'SuUEz%9m:7p^|NlKuInk2)=fL##f7t1}3l<kRRE7j0m()NP9 QYBNxC$Qa/HK,Si' );
define( 'LOGGED_IN_SALT',   'O+xL{Ta`._E5?N*Zm _y&7uV:YJNrheFJwH>__>%&rO%q]X$RP8i!bdLQHNF0)LU' );
define( 'NONCE_SALT',       'k+ArL~M!W^Eh]40~`TX5i|iz^tg8=n.qdPXF]o=J[0@%StbNwbUwr{xn2xw))l*s' );
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
 * @link https://fr.wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

define( 'JETPACK_DEV_DEBUG', true );

/* C’est tout, ne touchez pas à ce qui suit ! Bonne publication. */

/** Chemin absolu vers le dossier de WordPress. */
if ( ! defined( 'ABSPATH' ) )
  define( 'ABSPATH', dirname( __FILE__ ) . '/' );

/** Réglage des variables de WordPress et de ses fichiers inclus. */
require_once( ABSPATH . 'wp-settings.php' );
