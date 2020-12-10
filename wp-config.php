<?php
/**
 * As configurações básicas do WordPress
 *
 * O script de criação wp-config.php usa esse arquivo durante a instalação.
 * Você não precisa usar o site, você pode copiar este arquivo
 * para "wp-config.php" e preencher os valores.
 *
 * Este arquivo contém as seguintes configurações:
 *
 * * Configurações do MySQL
 * * Chaves secretas
 * * Prefixo do banco de dados
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Configurações do MySQL - Você pode pegar estas informações com o serviço de hospedagem ** //
/** O nome do banco de dados do WordPress */
define( 'DB_NAME', 'projetosenac' );

/** Usuário do banco de dados MySQL */
define( 'DB_USER', 'root' );

/** Senha do banco de dados MySQL */
define( 'DB_PASSWORD', '' );

/** Nome do host do MySQL */
define( 'DB_HOST', 'localhost' );

/** Charset do banco de dados a ser usado na criação das tabelas. */
define( 'DB_CHARSET', 'utf8mb4' );

/** O tipo de Collate do banco de dados. Não altere isso se tiver dúvidas. */
define( 'DB_COLLATE', '' );

/**#@+
 * Chaves únicas de autenticação e salts.
 *
 * Altere cada chave para um frase única!
 * Você pode gerá-las
 * usando o {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org
 * secret-key service}
 * Você pode alterá-las a qualquer momento para invalidar quaisquer
 * cookies existentes. Isto irá forçar todos os
 * usuários a fazerem login novamente.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         '7eA/|e-`jE{[Q$CdIwFl|_H;obyDC4m<ZDVk6,[6uhg6KHiJ@oEtx>`5M90L-,[s' );
define( 'SECURE_AUTH_KEY',  ' OYlD<ZgIKq^0xyZO>zb3_!:!N8?|rA ^S<Ndoe*q9LyE+z>p7dABBD?&f]Z:n%e' );
define( 'LOGGED_IN_KEY',    '(@1Lq}rKqK `?DoDPn)]d/{^8]hL^x3l,D_$l %L+kxfFKl2jx0f_ei<oGwHg XN' );
define( 'NONCE_KEY',        'zd,`rxR%H7nH8E@m5xE%VhSSrK(_as-JrK~/R6DQzO7$(R9CJ?Nz2x)R6RqNd`CI' );
define( 'AUTH_SALT',        'y*^4`9$xvD)4f(S)a<,xKT7I{QUpny1jPyhOGdGM2hce2)@6pc6eGR_F/3I9CYgo' );
define( 'SECURE_AUTH_SALT', 'F&0GqiDB;%g|<AaujsH&Bq)<3gtQFr2r{h:I{cg`qoU2)-G8Oy:Pp72r4T)G{ch<' );
define( 'LOGGED_IN_SALT',   'Z&:pr/R@:LH@x0)*n?0,Oob6l`V8z{tZ64 n#z?8ZO%/Qk]2PP%JJJ!byXAcM`wy' );
define( 'NONCE_SALT',       '?>r5M,# 0`s]lxWT a5)&J)NnumX$+QsefzD2t,zwYPc{qG~8j+P!w-kEqwBC-/6' );

/**#@-*/

/**
 * Prefixo da tabela do banco de dados do WordPress.
 *
 * Você pode ter várias instalações em um único banco de dados se você der
 * um prefixo único para cada um. Somente números, letras e sublinhados!
 */
$table_prefix = 'wp_';

/**
 * Para desenvolvedores: Modo de debug do WordPress.
 *
 * Altere isto para true para ativar a exibição de avisos
 * durante o desenvolvimento. É altamente recomendável que os
 * desenvolvedores de plugins e temas usem o WP_DEBUG
 * em seus ambientes de desenvolvimento.
 *
 * Para informações sobre outras constantes que podem ser utilizadas
 * para depuração, visite o Codex.
 *
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* Isto é tudo, pode parar de editar! :) */

/** Caminho absoluto para o diretório WordPress. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Configura as variáveis e arquivos do WordPress. */
require_once ABSPATH . 'wp-settings.php';
