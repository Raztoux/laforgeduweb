<?php

// BEGIN iThemes Security - Do not modify or remove this line
// iThemes Security Config Details: 2
define( 'DISALLOW_FILE_EDIT', true ); // Disable File Editor - Security > Settings > WordPress Tweaks > File Editor
// END iThemes Security - Do not modify or remove this line

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
define('DB_NAME', 'laforgeduweb');

/** Utilisateur de la base de données MySQL. */
define('DB_USER', 'root');

/** Mot de passe de la base de données MySQL. */
define('DB_PASSWORD', '');

/** Adresse de l’hébergement MySQL. */
define('DB_HOST', 'localhost');

/** Jeu de caractères à utiliser par la base de données lors de la création des tables. */
define('DB_CHARSET', 'utf8mb4');

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
define('AUTH_KEY',         '@ok07l9@<x|w>kf@}VzD9! ^KV]2;+eT3}d6RJsb*6YXbY#AiJ]!,L*LO4F18Ct|');
define('SECURE_AUTH_KEY',  '<rH!wP9y0!csOZ(m8%nTNZAD09<;?vcH;^g!trW=UKY.$d|HCxC.tLg5=;VcbcN-');
define('LOGGED_IN_KEY',    '(j?X4#E2`/:s7K5%LwyrM8;=O4gQ3Dy]}f_)&R`+$62_%?7!zge&E6[eFWawa+^L');
define('NONCE_KEY',        '&laY3,IgakcKWaH>&zs:0)Y1P=z2Er%ix8}n}I=V17o0_qfWBn#7-@W{e%zo)95K');
define('AUTH_SALT',        '`m9[y|o<ZHCe~}{//8F)~l/<r[wG=!X:nx(OCw!;$SE7PJC}?Qp*pg=db:w4Iw2k');
define('SECURE_AUTH_SALT', '8oi|^`QzAP+B<quAJm)y0Al)Y gJ(l/QTzRe9,g8WGjZ@KAtpq9+];[,e9JP=&LY');
define('LOGGED_IN_SALT',   'LUqDpIa74+.wSXwL)8B}&,Vtx+s#1DrB>5c*@b4GK]tgd|v:]mC?!Rs9Ht viu)S');
define('NONCE_SALT',       'Z5[F#ft-auJ8W!Zc [6k|pCc]c>&|-=U#3?>J0ol<JwY]rAHG;EA Re`/xN%Vxwm');
/**#@-*/

/**
 * Préfixe de base de données pour les tables de WordPress.
 *
 * Vous pouvez installer plusieurs WordPress sur une seule base de données
 * si vous leur donnez chacune un préfixe unique.
 * N’utilisez que des chiffres, des lettres non-accentuées, et des caractères soulignés !
 */
$table_prefix  = 'lfdw_';

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

/* C’est tout, ne touchez pas à ce qui suit ! */

/** Chemin absolu vers le dossier de WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Réglage des variables de WordPress et de ses fichiers inclus. */
require_once(ABSPATH . 'wp-settings.php');