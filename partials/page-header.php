<?php
/**
 * The template for displaying the page header.
 *
 * @package OceanWP WordPress theme
 */

// Exit if accessed directly
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

// Return if page header is disabled
if ( ! oceanwp_has_page_header() ) {
	return;
}

// Classes
$classes = array( 'page-header' );

// Get header style
$style = oceanwp_page_header_style();

// Add classes for title style
if ( $style ) {
	$classes[$style .'-page-header'] = $style .'-page-header';
}

// Turn into space seperated list
$classes = implode( ' ', $classes ) ?>

<?php do_action( 'ocean_before_page_header' ); ?>

<header class="<?php echo esc_attr( $classes ); ?>">

	<?php do_action( 'ocean_before_page_header_inner' ); ?>

	<div class="container clr page-header-inner">

		<h1 class="page-header-title oceanwp-clr" itemprop="headline"><?php echo oceanwp_title(); ?></h1>

		<?php get_template_part( 'partials/page-header-subheading' ); ?>

		<?php if ( function_exists( 'oceanwp_breadcrumb_trail' ) ) {
			oceanwp_breadcrumb_trail();
		} ?>

	</div><!-- .page-header-inner -->

	<?php oceanwp_page_header_overlay(); ?>

	<?php do_action( 'ocean_after_page_header_inner' ); ?>

</header><!-- .page-header -->

<?php do_action( 'ocean_after_page_header' ); ?>