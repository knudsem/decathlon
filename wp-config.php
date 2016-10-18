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
define('DB_NAME', 'decathlon');

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
define('AUTH_KEY',         'INwY2t@c+[hC=qa-Q$!e5G_$Q_%^?MIB0i[IWq2m)V:t*dMcKx` BG:a_?6HYwV{');
define('SECURE_AUTH_KEY',  '7]Y`zJ8LZk<A>X!};X#xnD ?r[L(4[B6o}Qiv[]0L-z%eTtYSPkI[Eq9x=(jPr2?');
define('LOGGED_IN_KEY',    '.neG<|n_.+cA7$:@R1%5G,4}gBlN++}LOhKf>!a0RY:g)0XdU6h7i$rX,Bj}g+KK');
define('NONCE_KEY',        'Xlks|)uQT W f~D9q(CJmerSfOcpic ,M|t.*6/LNlxEbqlU(MPM]Al=JCY*QT2r');
define('AUTH_SALT',        'p^1-ec=vl,/tTxrX6&R-VhIuR)%!R2&>2hJIb1u1Pj|Y36t&Hsv2w{i{|`y_TH_G');
define('SECURE_AUTH_SALT', '&s5lY^yY,/Amy2)NW)~MZ,{;i},YYe<h[lKRSpdka/g-l1uao3 ~hZ,dp#fe#?6*');
define('LOGGED_IN_SALT',   'B!OWzk ]L&}Qghu%7KOZ*|GHgrLUANSf[H)@N]Yiht,xkj-$zmE?]G<6tknAJX!H');
define('NONCE_SALT',       '61#x a-zc`nLT#EsCP@I}_7xJYHkBN+h]]T5lXF9$<etriT8bp~u<@|k,wHoTmab');
/**#@-*/

/**
 * Préfixe de base de données pour les tables de WordPress.
 *
 * Vous pouvez installer plusieurs WordPress sur une seule base de données
 * si vous leur donnez chacune un préfixe unique.
 * N’utilisez que des chiffres, des lettres non-accentuées, et des caractères soulignés !
 */
$table_prefix  = 'mk_';

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