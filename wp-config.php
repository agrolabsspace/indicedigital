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
 * * Configurações do banco de dados
 * * Chaves secretas
 * * Prefixo do banco de dados
 * * ABSPATH
 *
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Configurações do banco de dados - Você pode pegar estas informações com o serviço de hospedagem ** //
/** O nome do banco de dados do WordPress */
define( 'DB_NAME', 'imdft_db' );

/** Usuário do banco de dados MySQL */
define( 'DB_USER', 'root' );

/** Senha do banco de dados MySQL */
define( 'DB_PASSWORD', 'root' );

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
define( 'AUTH_KEY',         'XN<A>3u~G _J*r 3n5<hxV_z,9d)hc#R>SQOJ?*f&c[N5fS,A}1A:)s)|<|8B_9]' );
define( 'SECURE_AUTH_KEY',  'm$@]H3~~[}#==;vy4?&PZWxInJ$Y$hHflgW#gc}N/#d(oZC!]?!3fu-+aN/W}au5' );
define( 'LOGGED_IN_KEY',    '.Kpa=_L!w/2ZY*xiJX:k[B .[_bC*J<;4++b1=oW-sV42)c}0:BYZCjLU+BP@X$.' );
define( 'NONCE_KEY',        'jSPW%vM&AMGsM@!nlNXvLP Q>%~?#6N]J_:3% Gfn,@SfzCIKrf+WT<5]+}:HH+]' );
define( 'AUTH_SALT',        'ue:Sc7jiNJnB2^MHQ`Q6IljUK8j)=M|Mv:1|,5RXOtt?QyIcpAA9raJE(G8s=%=+' );
define( 'SECURE_AUTH_SALT', '^N-Kzjw)Fv7Esed /6AMZ+1x_gN<s;caRqe1W[KLVqqHIF|l`IQ~gaoS(Q}=CWc4' );
define( 'LOGGED_IN_SALT',   '^}Vn 7MI1O.SP1P5,ZPgTQ?u mn:wv29IANiGC-Fs8Lh~8o|f(WlKqxc,&R1cFqw' );
define( 'NONCE_SALT',       'Nt9R>D1iOFe~ R_,{#l@62W)?5dtp?!+S]KhT78m|isgns$7$CFY*#Tj^Ps/L;Wj' );

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
 * @link https://wordpress.org/documentation/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* Adicione valores personalizados entre esta linha até "Isto é tudo". */



/* Isto é tudo, pode parar de editar! :) */

/** Caminho absoluto para o diretório WordPress. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Configura as variáveis e arquivos do WordPress. */
require_once ABSPATH . 'wp-settings.php';
