<?php
/**
 * Header Navbar (bootstrap5)
 *
 * @package Understrap
 * @since 1.1.0
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

$container = get_theme_mod( 'understrap_container_type' );
?>

<nav id="main-nav" class="navbar navbar-expand-md navbar-dark custom-navbar" aria-labelledby="main-nav-label">

	<h2 id="main-nav-label" class="screen-reader-text">
		<?php esc_html_e( 'Main Navigation', 'understrap' ); ?>
	</h2>


	<div class="<?php echo esc_attr( $container ); ?> bg-menu">

		<div class="row w-100">
			<!-- Your site branding in the menu -->
			<div class="col-3 logo-wrapc">
				<?php get_template_part( 'global-templates/navbar-branding' ); ?>
			</div>
			<div class="col-6 m-auto text-center menuwrapc">
				<button
					class="navbar-toggler"
					type="button"
					data-bs-toggle="collapse"
					data-bs-target="#navbarNavDropdown"
					aria-controls="navbarNavDropdown"
					aria-expanded="false"
					aria-label="<?php esc_attr_e( 'Toggle navigation', 'understrap' ); ?>"
				>
					<span class="navbar-toggler-icon"></span>
					Menu
				</button>

				<!-- The WordPress Menu goes here -->
				<?php
				wp_nav_menu(
					array(
						'theme_location'  => 'primary',
						'container_class' => 'collapse navbar-collapse',
						'container_id'    => 'navbarNavDropdown',
						'menu_class'      => 'navbar-nav m-auto',
						'fallback_cb'     => '',
						'menu_id'         => 'main-menu',
						'depth'           => 2,
						'walker'          => new Understrap_WP_Bootstrap_Navwalker(),
					)
				);
				?>
			</div>
			<div class="col-3 m-auto text-right contact-wrap">
				<button class="btn btn-menu">Contact us</button>
			</div>
		</div>

	</div><!-- .container(-fluid) -->

</nav><!-- #main-nav -->
