<?php
	if( isset( $_GET[ 'tab' ] ) ) {
		$active_tab = $_GET[ 'tab' ];
	}
?>
<div class="wrap about-wrap">
	<h1><?php printf( __( 'Welcome to Alpha! - Version  %s', 'pine-alpha' ), THEME_VERSION ); ?></h1>

	<?php settings_errors(); ?>

	<div class="about-text">
		<?php _e( 'Alpha is a clean and minimalistic magazine/blog theme for those who like to create content each day. It is ideal for creators too because it supports a portfolio CPT. The theme is user-friendly, responsive, retina ready and performs well. It supports WPML, Jetpack features, and WooCommerce.', 'pine-alpha' ); ?>
	</div>

	<div class="wp-badge pine-welcome-logo"></div>

	<h2 class="nav-tab-wrapper">
		<a href="?page=pine_alpha_welcome_page&tab=getting_started" class="nav-tab <?php echo $active_tab == 'getting_started' ? 'nav-tab-active' : ''; ?> <?php echo !isset( $active_tab ) ? 'nav-tab-active' : ''; ?>"><?php _e( 'Getting Started', 'pine-alpha' ); ?></a>
		<a href="?page=pine_alpha_welcome_page&tab=about_us" class="nav-tab <?php echo $active_tab == 'about_us' ? 'nav-tab-active' : ''; ?>"><?php _e( 'About Us', 'pine-alpha' ); ?></a>
	</h2>

	<?php if( $active_tab == 'getting_started' || !isset( $active_tab ) ) : ?>
		<div class="feature-section three-col">
			<div class="col">
				<h3><?php _e( 'Required Plugins', 'pine-alpha' ); ?></h3>
				<p><?php _e( 'For using this theme first, you need to install two required plugin. For more functionality, we also have recommended ones so you can achieve more.', 'pine-alpha' ); ?></p>
				<p><a href="<?php echo admin_url( 'themes.php?page=tgmpa-install-plugins' ); ?>" class="button button-primary"><?php _e( 'Install Plugins', 'pine-alpha' ); ?></a></p>
			</div>
			<div class="col">
				<h3><?php _e( 'Check out the Documentation', 'pine-alpha' ); ?></h3>
				<p><?php _e( 'Need help or more information?  Go to Alpha\'s documentation page for detailed information.', 'pine-alpha' ); ?></p>
				<p><a target="_blank" href="https://pineco.de" rel="noopener" class="button button-primary"><?php _e( 'Go to the Documentation', 'pine-alpha' ); ?></a></p>
			</div>
			<div class="col">
				<h3><?php _e( 'Go to the Customizer', 'pine-alpha' ); ?></h3>
				<p><?php _e( 'To customize Alpha, you must navigate to the WordPress Customizer.', 'pine-alpha' ); ?></p>
				<p><a href="<?php echo admin_url( 'customize.php' ); ?>" class="button button-primary"><?php _e( 'Go to the Customizer', 'pine-alpha' ); ?></a></p>
			</div>
		</div>
	<?php else : ?>
		<div class="feature-section one-col">
			<div class="col">
				<h3><?php _e( 'Hello, We Are Pine!', 'pine-alpha' ); ?></h3>
				<p><?php _e( 'We are two web developers with a passion for learning and sharing the knowledge. Our vision, to keep learning and shipping what you know, is a win-win situation. We also develop open-source like this WordPress theme which hopefully will be useful for many.', 'pine-alpha' ); ?></p>
				<p><a href="https://pineco.de" rel="noopener" target="_blank" class="button button-primary"><?php _e( 'Check out our Site', 'pine-alpha' ); ?></a></p>
			</div>
		</div>
	<?php endif; ?>
</div>