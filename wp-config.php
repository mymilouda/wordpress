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
define( 'DB_NAME', 'wordpress' );

/** Utilisateur de la base de données MySQL. */
define( 'DB_USER', 'root' );

/** Mot de passe de la base de données MySQL. */
define( 'DB_PASSWORD', '' );

/** Adresse de l’hébergement MySQL. */
define( 'DB_HOST', '127.0.0.1' );

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
define( 'AUTH_KEY',         '2+BT,8(sx2Pi^#1Ry88 #[F v:1#cjQ~Y|x{<4{1MUY/,^Inr wXS/)XhZ}@;Wj*' );
define( 'SECURE_AUTH_KEY',  'Eif2!J8]p.o=XF*,`O{(!P=yo }tEh$X,ECnw[$r,_8b]3)>n^kJ2n,te9?()$]e' );
define( 'LOGGED_IN_KEY',    '@{qR._-z}mqBK%^ TX|lUw$%P%R3OQ^s_KzkdH;/wvBm>>v2Sxp[Z:yFBx~s~E=E' );
define( 'NONCE_KEY',        '4^Z`<lF6@^~PXkRY|bw?wdhM3%5#uGh]0b1$FNO~9C4+%xkE!#S(|o(#D_DQ[i6a' );
define( 'AUTH_SALT',        '4crTeh;C[ el/,X7#o6djcad*4nUdk0(.MIo~/@l&T:h;rL7gLH9;g^CO2tXke,9' );
define( 'SECURE_AUTH_SALT', 'n&dpa@Q{Ip`XF*DKiig|>6/s_:yhPFfJ(cu05wMq2tFm[Ymh`0}X}a%wc1I2,T{3' );
define( 'LOGGED_IN_SALT',   '`0|siiuG ZFclp0,iWRL1sEBG0HeXXji~Ny6;[Ygkj}?=;^*(9u]/, %`P*VPW%6' );
define( 'NONCE_SALT',       '/Kz|Y0%&i|@LZ%.Xy>&dQ$LE<SsZ9#S5t?JoiV*iyN9ECtownd&eTct=T+c[ynZ@' );
/**#@-*/

/**
 * Préfixe de base de données pour les tables de WordPress.
 *
 * Vous pouvez installer plusieurs WordPress sur une seule base de données
 * si vous leur donnez chacune un préfixe unique.
 * N’utilisez que des chiffres, des lettres non-accentuées, et des caractères soulignés !
 */
$table_prefix = 'wpress';

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
