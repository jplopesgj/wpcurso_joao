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
define( 'DB_NAME', 'wpbanco' );

/** Usuário do banco de dados MySQL */
define( 'DB_USER', 'admin' );

/** Senha do banco de dados MySQL */
define( 'DB_PASSWORD', 'password' );

/** Nome do host do MySQL */
define( 'DB_HOST', '127.0.0.1' );

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
define( 'AUTH_KEY',         '8X5u0>H:d`ScM-kJYIhtpAO+ZgH~EXm4}9D@!v/rUQ}h 9d=sEH[nt~<]i?X@R/q' );
define( 'SECURE_AUTH_KEY',  'z!H`COlhyRRyKZ9QPOkb,.]Vq[!%|sCzh87S(ShFb,wjggprTSicJq9w!)?P<Yd+' );
define( 'LOGGED_IN_KEY',    'e`ey[vH?TXf4cH54_-_Z2F-3ofe+[po`7+w71P}J&x}u6#97;AV-hl4tYHKW`Lg[' );
define( 'NONCE_KEY',        'y-~?5{DwH+(-NcdLFn%ncaPF|zNT|n8a~kRYt{8 !K+]Bwm2w}W#D@*/3u%wD@bm' );
define( 'AUTH_SALT',        '|ni[YeNVk@*G<[^I`?1)Q~14CV8I>)yL;au/=LO?L*nFFPl$pt dhQiqVOLIqSys' );
define( 'SECURE_AUTH_SALT', ' n6{B;pMIXot+SI)YD9G1Ms{X_qj9u.+`-.jQmxY}G4p&PzB,AhdS*3t4YY$wzZ6' );
define( 'LOGGED_IN_SALT',   'o %KgFtStuR3u!P$UQd2y+8-G1sc=>dy}#iRVv-EDvxR0f`J3_{?V8aSPbMY<%@V' );
define( 'NONCE_SALT',       'dN+vDuDti[(wJQ4@(4[<%a`^wF^8CA|_bkU}k_bz%F12bN>J]3K*X3-++.Za16i<' );

/**#@-*/

/**
 * Prefixo da tabela do banco de dados do WordPress.
 *
 * Você pode ter várias instalações em um único banco de dados se você der
 * um prefixo único para cada um. Somente números, letras e sublinhados!
 */
$table_prefix = 'wpjota_';

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
define( 'WP_DEBUG', true );


/* Isto é tudo, pode parar de editar! :) */

/** Caminho absoluto para o diretório WordPress. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Configura as variáveis e arquivos do WordPress. */
require_once ABSPATH . 'wp-settings.php';