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
define( 'DB_NAME', 'geetlm_wp' );

/** Utilisateur de la base de données MySQL. */
define( 'DB_USER', 'root' );

/** Mot de passe de la base de données MySQL. */
define( 'DB_PASSWORD', '' );

/** Adresse de l’hébergement MySQL. */
define( 'DB_HOST', 'localhost' );

/** Jeu de caractères à utiliser par la base de données lors de la création des tables. */
define( 'DB_CHARSET', 'utf8' );

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
define( 'AUTH_KEY',         'N2ppKAx1DYWtXP:<WNh;xq>d~fu<5hqMvJTnLn@VA*5{iN8Y >eF;9!ydTTT`v&%' );
define( 'SECURE_AUTH_KEY',  'U)PdLSIgam}N/!#ef]3+8sBgcHG`((0]8Qp<6IJm>09?y[OOKn#E]?]OQSaJ*r5I' );
define( 'LOGGED_IN_KEY',    'G:-#:k7[a0tJ=24n|8f]=Ep:B!P5S&QuKi_/z7hL}$8C?N)FQNQU+|X#I{3%hk4.' );
define( 'NONCE_KEY',        'L,`y~$*E71>Ea^}FnV9zoLh^N8ubbk3`K3rv_`Guj ep?B{_:gVSHpq9A?{(9rNB' );
define( 'AUTH_SALT',        'X;Q:AP/v$iVF>}<?z-z%xoZ!(Oph;bI[1Ho_F%+`=sy{mc4I!W+C#5)]G!m|8map' );
define( 'SECURE_AUTH_SALT', 'o=REon*kG;hD+OEA#G<1OlWsJ)5cKv!_bCgPV0a]ryguRJ64:(k1:~-j3T_>@r>P' );
define( 'LOGGED_IN_SALT',   '9~&cw(Wy^ #$DJQd@HvMK[gfZtkaFSymtnEM9&YqYJs)4~J}cgx)H#-4eD$.^?`[' );
define( 'NONCE_SALT',       'sIxnYWH@3r<Yvj#f+Cml u4BCI9rqOFLX(nz`jA*1DvA{NUP9HRTb8tLU~@o>/r5' );
/**#@-*/

/**
 * Préfixe de base de données pour les tables de WordPress.
 *
 * Vous pouvez installer plusieurs WordPress sur une seule base de données
 * si vous leur donnez chacune un préfixe unique.
 * N’utilisez que des chiffres, des lettres non-accentuées, et des caractères soulignés !
 */
$table_prefix = 'gee_';

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

/* C’est tout, ne touchez pas à ce qui suit ! Bonne publication. */

/** Chemin absolu vers le dossier de WordPress. */
if ( ! defined( 'ABSPATH' ) )
  define( 'ABSPATH', dirname( __FILE__ ) . '/' );

/** Réglage des variables de WordPress et de ses fichiers inclus. */
require_once( ABSPATH . 'wp-settings.php' );
