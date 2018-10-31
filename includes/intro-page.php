<?php
/**
 * Template for ElasticPress intro page
 *
 * @since  2.1
 * @package elasticpress
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

if ( defined( 'EP_IS_NETWORK' ) && EP_IS_NETWORK ) {
	$setup_url = admin_url( 'network/admin.php?page=elasticpress-settings' );
} else {
	$setup_url = admin_url( 'admin.php?page=elasticpress-settings' );
}
?>

<?php require_once( dirname( __FILE__ ) . '/header.php' ); ?>

<div class="wrap intro">
	<h1><?php esc_html_e( 'A Fast and Flexible Search and Query Engine for WordPress.', 'elasticpress' ); ?></h1>
	<div class="intro-container">
		<div class="intro-box">
			<div class="circle red-circle">
				<?php esc_html_e( 'Step', 'elasticpress' ); ?><p>1</p>
			</div>
			<h2><?php esc_html_e( 'Plugin has been installed', 'elasticpress' ); ?></h2>
			<p><?php esc_html_e( 'You\'ve taken your first step into a faster and more flexible search and query engine for WordPress', 'elasticpress' ); ?></p>
		</div>
		<div class="intro-box">
			<div class="circle white-circle">
				<?php esc_html_e( 'Step', 'elasticpress' ); ?><p>2</p>
			</div>
			<h2><?php esc_html_e( 'Setup hosting', 'elasticpress' ); ?></h2>
			<p>
				<?php echo sprintf( __( 'The next step is to create an %s account or if you want you can %s set up %s your own hosting', 'elasticpress' ),
					'<a href="https://www.elasticpress.io/">ElasticPress.io</a>',
					'<a href="#">',
					'</a>'
				); ?>
			</p>
		</div>
		<div class="intro-box">
			<div class="circle white-circle">
				<?php esc_html_e( 'Step', 'elasticpress' ); ?><p>3</p>
			</div>
			<h2><?php esc_html_e( 'Index your content', 'elasticpress' ); ?></h2>
			<p><?php esc_html_e( 'Once you have hosting set up you are ready to start customising your content and search results', 'elasticpress' ); ?></p>
		</div>
	</div>
	<div class="setup-message">
		<a class="setup-button" href="<?php echo esc_url( $setup_url ); ?>"><?php esc_html_e( 'Got hosting? Get Started', 'elasticpress' ); ?></a>
	</div>
</div>