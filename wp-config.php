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
define('DB_NAME', 'jeanne_theme');

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
define('AUTH_KEY',         'n(^dL`cm-bK[kI:63J$65FR`Zecy-e^cB3/aPB}/XC+|1k}uZKDc( _XDsKImhG_');
define('SECURE_AUTH_KEY',  'JfW7^}i!1txwpWF, &;w(9>a7:HDMjM@Y]}Kra_&]vV*&d72}rpoEt@cwQ3Pm#jx');
define('LOGGED_IN_KEY',    '0K<hl~LA+%:NoMb+~qMT({,V#WV3m&$1@~o%J*wfj41eg-k)Dp%Q%a!,dfpG|N?,');
define('NONCE_KEY',        '5R`y@hT!GmhHys|D[4W9/Yp+;]Lc7[MHR8miO<2Ia_!l2I?]{&L.Otp$&4l%Wv|R');
define('AUTH_SALT',        'b4!pHV6`oM*M~qrq{[1_%2NGAqHI?jEG:C5`v4dIAduNe_T9V[FSUu)iFaoR,-L|');
define('SECURE_AUTH_SALT', 'pf^8;T,ird[T`W?zjRp2v}oz&1l~>0B02H#$@lrz0YH3}B>M j0Vd8H(!{;.2NV5');
define('LOGGED_IN_SALT',   'G?1`<S_AW4?IB$^hF4](3J%29qV5Nh&&R^>7Q|jhYMC7IUj:Q!To3,G:<@h^iGF5');
define('NONCE_SALT',       '4DD3p +q yQhYn[k6,Dsua]}*|R*@eErX0QW{ tFbOvT{Yu|v*MD-a[-+Tg3*6zr');
/**#@-*/

/**
 * Préfixe de base de données pour les tables de WordPress.
 *
 * Vous pouvez installer plusieurs WordPress sur une seule base de données
 * si vous leur donnez chacune un préfixe unique.
 * N’utilisez que des chiffres, des lettres non-accentuées, et des caractères soulignés !
 */
$table_prefix  = 'wp_';

/**
 * Pour les développeurs : le mode déboguage de WordPress.
 *
 * En passant la valeur suivante à "true", vous activez l’affichage des
 * notifications d’erreurs pendant vos essais.
 * Il est fortemment recommandé que les développeurs d’extensions et
 * de thèmes se servent de WP_DEBUG dans leur environnement de
 * développement.
 *
 * Pour plus d'information sur les autres constantes qui peuvent être utilisées
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