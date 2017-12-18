<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Aldine
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta http-equiv="x-ua-compatible" content="ie=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<svg style="position: absolute; width: 0; height: 0;" width="0" height="0" xmlns="http://www.w3.org/2000/svg">
	<defs>
		<symbol id="icon-pressbooks" fill="currentColor" viewBox="0 0 45 44">
			<path d="M44.195 41.872c0 .745-.618 1.346-1.377 1.346H1.377C.617 43.219 0 42.617 0 41.872V1.347C0 .604.618 0 1.377 0h41.44c.76 0 1.378.604 1.378 1.347v40.525zM15.282 10.643h-5.21v21.43h3.304V24h1.906c1.435 0 2.656-.5 3.665-1.504 1.008-1.004 1.513-2.213 1.513-3.626v-3.113c0-1.47-.444-2.678-1.33-3.625-.956-.993-2.24-1.489-3.848-1.489zm1.977 5.165h-.001v3.131c0 .513-.184.952-.55 1.318a1.826 1.826 0 0 1-1.338.547h-1.994v-6.86h1.995c.571 0 1.029.171 1.372.513.344.342.516.792.516 1.35zm5.84 16.265h6.118c.828 0 1.662-.25 2.502-.752a4.642 4.642 0 0 0 1.73-1.779c.526-.945.788-2.097.788-3.455 0-.545-.04-1.043-.122-1.486-.163-.868-.414-1.575-.751-2.122-.513-.81-1.137-1.352-1.871-1.625a3.325 3.325 0 0 0 1.154-.839c.78-.866 1.173-2.018 1.173-3.455 0-.876-.105-1.635-.315-2.274-.386-1.198-1.027-2.08-1.925-2.652-1.049-.672-2.225-1.008-3.531-1.008h-4.95v21.447zm3.568-12.69v-5.475h1.382c.652 0 1.184.212 1.592.634.443.456.665 1.13.665 2.018 0 .537-.065.987-.193 1.352-.35.982-1.039 1.471-2.064 1.471h-1.382zm0 9.493v-6.397h1.382c.815 0 1.433.25 1.853.751.466.549.7 1.42.7 2.617 0 .502-.075.948-.227 1.335-.432 1.13-1.208 1.694-2.326 1.694h-1.382z" />
		</symbol>
		<symbol id="logo-pressbooks" viewBox="0 0 265 40">
			<path fill="#000" d="M51.979 1.754c2.75 0 4.942.868 6.579 2.602 1.514 1.656 2.272 3.768 2.272 6.34v5.442c0 2.472-.862 4.586-2.587 6.34-1.724 1.754-3.813 2.631-6.264 2.631H48.72v14.114h-5.651V1.754h8.91zm3.38 9.03c0-.977-.296-1.764-.882-2.364-.588-.597-1.371-.896-2.348-.896H48.72v11.99h3.409c.897 0 1.66-.32 2.287-.957a3.163 3.163 0 0 0 .942-2.303v-5.47zM74.255 1.754c3.149 0 5.462.868 6.937 2.602 1.295 1.516 1.943 3.63 1.943 6.34v5.442c0 2.652-1.006 4.893-3.02 6.727L84.3 39.222h-6.112l-3.425-14.114h-3.767v14.114h-5.651V1.754h8.91zm3.379 9.03c0-2.173-1.076-3.259-3.23-3.259h-3.408v11.99h3.409c.897 0 1.66-.32 2.287-.957a3.163 3.163 0 0 0 .942-2.302v-5.472zM89.145 39.22V1.724h16.087v5.681H94.796v10.227h7.625v5.682h-7.625V33.54h10.436v5.68zM127.808 29.892c.04 2.61-.639 4.843-2.034 6.697-.917 1.256-2.213 2.143-3.887 2.661-.897.278-1.944.418-3.14.418-2.212 0-4.047-.548-5.5-1.645-1.217-.896-2.179-2.117-2.886-3.661-.707-1.544-1.121-3.315-1.24-5.308l5.381-.388c.239 2.185.817 3.768 1.735 4.749.676.74 1.455 1.092 2.332 1.052 1.237-.039 2.223-.648 2.96-1.826.38-.578.569-1.407.569-2.485 0-1.555-.708-3.103-2.124-4.64l-5.024-4.758c-1.873-1.815-3.2-3.442-3.976-4.879-.837-1.615-1.257-3.37-1.257-5.267 0-3.411 1.146-5.995 3.438-7.75 1.415-1.057 3.17-1.586 5.263-1.586 2.014 0 3.739.447 5.173 1.346 1.116.697 2.018 1.672 2.706 2.93.687 1.256 1.101 2.701 1.24 4.335l-5.411.987c-.16-1.536-.598-2.73-1.317-3.589-.519-.616-1.266-.926-2.242-.926-1.037 0-1.823.459-2.362 1.374-.438.738-.658 1.656-.658 2.752 0 1.715.736 3.458 2.213 5.233.557.678 1.395 1.476 2.512 2.391 1.316 1.096 2.182 1.865 2.602 2.303 1.395 1.397 2.471 2.772 3.229 4.126.358.639.647 1.227.867 1.766.54 1.334.818 2.531.838 3.588zM150.383 29.892c.04 2.61-.637 4.843-2.032 6.697-.917 1.256-2.213 2.143-3.889 2.661-.897.278-1.944.418-3.138.418-2.213 0-4.049-.548-5.503-1.645-1.215-.896-2.178-2.117-2.885-3.661-.707-1.544-1.121-3.315-1.24-5.308l5.383-.388c.238 2.185.817 3.768 1.733 4.749.676.74 1.454 1.092 2.331 1.052 1.236-.039 2.223-.648 2.96-1.826.38-.578.57-1.407.57-2.485 0-1.555-.71-3.103-2.125-4.64l-5.024-4.758c-1.872-1.815-3.199-3.442-3.976-4.879-.838-1.616-1.256-3.372-1.256-5.268 0-3.412 1.146-5.995 3.44-7.75 1.414-1.058 3.168-1.587 5.262-1.587 2.013 0 3.737.448 5.173 1.346 1.116.698 2.018 1.673 2.706 2.93.688 1.257 1.102 2.702 1.242 4.336l-5.412.986c-.16-1.535-.599-2.73-1.316-3.588-.52-.616-1.266-.927-2.244-.927-1.036 0-1.823.46-2.362 1.374-.438.739-.658 1.656-.658 2.752 0 1.715.737 3.458 2.213 5.234.556.677 1.395 1.476 2.51 2.391 1.317 1.096 2.184 1.865 2.603 2.303 1.395 1.396 2.472 2.772 3.23 4.126.358.638.649 1.226.867 1.765.538 1.336.817 2.533.837 3.59zM155.077 39.22V1.724h8.463c2.231 0 4.245.588 6.04 1.764 1.535.998 2.631 2.543 3.29 4.636.359 1.117.538 2.442.538 3.977 0 2.512-.67 4.526-2.004 6.04a5.674 5.674 0 0 1-1.973 1.465c1.256.479 2.321 1.426 3.198 2.84.579.958 1.008 2.193 1.286 3.709.14.778.21 1.644.21 2.601 0 2.372-.449 4.386-1.345 6.04a8.075 8.075 0 0 1-2.96 3.11c-1.436.878-2.862 1.317-4.276 1.317h-10.467v-.001zm6.1-22.186h2.363c1.754 0 2.93-.856 3.528-2.57.219-.64.328-1.426.328-2.364 0-1.555-.379-2.73-1.137-3.53-.697-.736-1.605-1.105-2.72-1.105h-2.363v9.57zm0 16.595h2.363c1.912 0 3.239-.986 3.977-2.96.258-.676.387-1.455.387-2.332 0-2.092-.398-3.618-1.197-4.575-.717-.877-1.774-1.316-3.169-1.316h-2.363v11.183h.001zM187.88 1.276c2.491 0 4.607.877 6.353 2.631 1.743 1.754 2.616 3.868 2.616 6.34v20.452c0 2.491-.878 4.61-2.631 6.353-1.756 1.745-3.87 2.616-6.34 2.616-2.492 0-4.604-.877-6.34-2.631-1.734-1.753-2.602-3.866-2.602-6.34v-20.45c0-2.492.877-4.61 2.632-6.354 1.754-1.744 3.859-2.617 6.312-2.617zm3.078 8.85c0-.897-.313-1.66-.94-2.287a3.12 3.12 0 0 0-2.29-.941c-.896 0-1.664.314-2.302.941a3.085 3.085 0 0 0-.958 2.288v20.512c0 .898.319 1.66.958 2.287a3.17 3.17 0 0 0 2.302.943 3.12 3.12 0 0 0 2.29-.943c.627-.627.94-1.389.94-2.287V10.127zM210.663 1.276c2.49 0 4.61.877 6.353 2.631 1.746 1.754 2.617 3.868 2.617 6.34v20.452c0 2.491-.877 4.61-2.631 6.353-1.754 1.745-3.868 2.616-6.34 2.616-2.492 0-4.605-.877-6.34-2.631-1.733-1.753-2.602-3.866-2.602-6.34v-20.45c0-2.492.877-4.61 2.632-6.354 1.754-1.744 3.859-2.617 6.31-2.617zm3.08 8.85c0-.897-.316-1.66-.943-2.287s-1.39-.941-2.288-.941c-.898 0-1.665.314-2.302.941a3.09 3.09 0 0 0-.958 2.288v20.512c0 .898.32 1.66.958 2.287a3.166 3.166 0 0 0 2.302.943c.899 0 1.66-.315 2.288-.943.627-.627.943-1.389.943-2.287V10.127zM230.247 27.334V39.22h-5.652V1.723h5.652V15.09l6.907-13.366h6.025l-7.735 15.295 9.073 22.201h-6.644l-5.935-15.224zM264.784 29.892c.041 2.61-.637 4.843-2.032 6.697-.916 1.256-2.213 2.143-3.889 2.661-.896.278-1.943.418-3.138.418-2.213 0-4.048-.548-5.502-1.645-1.216-.896-2.178-2.117-2.886-3.661-.708-1.545-1.12-3.315-1.242-5.308l5.384-.388c.238 2.185.817 3.768 1.733 4.749.676.74 1.454 1.092 2.331 1.052 1.236-.039 2.223-.648 2.96-1.826.38-.578.57-1.407.57-2.485 0-1.555-.71-3.103-2.125-4.64l-5.024-4.758c-1.872-1.815-3.199-3.442-3.976-4.879-.838-1.616-1.258-3.372-1.258-5.268 0-3.412 1.147-5.995 3.44-7.75 1.415-1.058 3.169-1.587 5.263-1.587 2.012 0 3.737.448 5.173 1.346 1.115.698 2.018 1.673 2.705 2.93.688 1.257 1.102 2.702 1.242 4.336l-5.411.986c-.16-1.535-.6-2.73-1.316-3.588-.52-.616-1.266-.927-2.244-.927-1.036 0-1.823.46-2.362 1.374-.438.739-.658 1.656-.658 2.752 0 1.715.736 3.458 2.213 5.234.555.677 1.395 1.476 2.51 2.391 1.317 1.096 2.184 1.865 2.602 2.303 1.395 1.396 2.473 2.772 3.23 4.126.359.638.65 1.226.868 1.765.54 1.336.82 2.533.84 3.59z"/>
			<path fill="#B01109" d="M39.549 37.515c0 .667-.553 1.205-1.232 1.205H1.232A1.217 1.217 0 0 1 0 37.515V1.25C0 .585.553.045 1.232.045h37.083c.681 0 1.234.54 1.234 1.205v36.265z"/>
			<path fill="#EDEDED" d="M13.648 10.504c1.44 0 2.588.444 3.444 1.332.793.848 1.19 1.93 1.19 3.245v2.786c0 1.264-.452 2.346-1.354 3.244-.903.898-1.996 1.346-3.28 1.346h-1.705v7.225H8.986V10.504h4.662zm1.77 4.622c0-.5-.155-.903-.462-1.209-.307-.305-.717-.458-1.228-.458h-1.785v6.138h1.784c.468 0 .868-.163 1.197-.49.328-.327.492-.72.492-1.179v-2.802h.002zM20.644 29.682V10.489h4.429c1.169 0 2.222.3 3.16.902.803.511 1.377 1.301 1.722 2.374.188.57.282 1.25.282 2.034 0 1.286-.35 2.317-1.05 3.092a2.976 2.976 0 0 1-1.032.75c.657.245 1.215.73 1.674 1.455.302.49.526 1.123.672 1.899.073.397.11.842.11 1.33 0 1.215-.235 2.245-.705 3.092a4.154 4.154 0 0 1-1.55 1.591c-.75.45-1.497.674-2.238.674h-5.474zm3.193-11.356h1.236c.918 0 1.534-.438 1.847-1.317.115-.327.172-.73.172-1.21 0-.795-.197-1.397-.595-1.806-.365-.377-.84-.567-1.424-.567h-1.236v4.9zm0 8.494h1.236c1 0 1.695-.505 2.081-1.515.136-.347.204-.746.204-1.195 0-1.072-.21-1.85-.626-2.342-.376-.45-.93-.672-1.66-.672h-1.235v5.724z"/>
		</symbol>
	</defs>
</svg>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'pressbooks-aldine' ); ?></a>

	<header id="masthead" class="header header--root" role="banner">
		<div class="header__inner">
			<div class="header__start-container">
				<?php if ( ! is_front_page() ) {?>
					<a class="header__home" href="<?php echo home_url( '/' ); ?>">Home</a>
				<?php } ?>
				<div class="header__search js-search">
					<a class="icon icon-search js-toggle-search"></a>
					<div class="header__search__form">
						<?php get_search_form(); ?>
					</div>
				</div>
			</div>
			<div class="header__brand">
				<a class="header__logo" href="<?php echo network_home_url(); ?>">
					<svg class="logo--svg">
						<use xlink:href="#logo-pressbooks" />
					</svg>
					<?php /* <span class="clip">
						<?php switch_to_blog( 1 ); echo get_bloginfo( 'name', 'display' ); restore_current_blog(); ?>
					</span> */ ?>
				</a>
				<h1><a href="{{ home_url('/' ); ?>"><?php echo get_bloginfo( 'name', 'display' ); ?></a></h1>
				<p><?php echo get_bloginfo( 'description', 'display' ); ?></p>
			</div>
			<div class="header__end-container">
				<nav class="header__nav js-header-nav" id="navigation">
					<?php if ( function_exists( 'pb_meets_minimum_requirements' ) && pb_meets_minimum_requirements() ) : ?>
						<a href="<?php echo home_url( '/catalog' ); ?>">Catalog</a>
					<?php endif; ?>
					<?php if ( get_option( 'pb_network_contact_form' ) ) : ?>
						<a class="banner__navigation--contact" href="#contact">Contact</a>
					<?php endif; ?>
					<?php if ( ! is_user_logged_in() ) : ?>
						<a href="<?php echo wp_login_url( get_permalink() ) ?>"><?php _e( 'Sign in', 'pressbooks-aldine' ) ?></a>
						<?php if ( in_array( get_site_option( 'registration' ), [ 'user', 'all' ], true ) ) : ?>
							<a href="<?php echo network_home_url( '/wp-signup.php' ); ?>"><?php _e( 'Sign up', 'pressbooks-aldine' ); ?></a>
						<?php endif; ?>
					<?php else : ?>
						<?php if ( is_super_admin() || is_user_member_of_blog() ) : ?>
						<a href="<?php echo admin_url(); ?>"><?php _e( 'Admin', 'pressbooks-aldine' ); ?></a>
						<span class="sep">/</span>
						<?php endif; ?>
						<a href="<?php echo wp_logout_url( get_permalink() ); ?>"><?php _e( 'Sign out', 'pressbooks-aldine' ); ?></a>
					<?php endif; ?>
				</nav>
				<a class="header__menu-icon js-header-menu-toggle" href="#navigation"><?php _e( 'Toggle Menu', 'pressbooks-book' ); ?><span class="header__menu-icon__icon"></span></a>
			</div>
		</div>
	</header><!-- #masthead -->

	<div id="content" class="site-content">
