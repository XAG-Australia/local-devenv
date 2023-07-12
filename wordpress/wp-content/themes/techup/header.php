<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @subpackage techup
 * @since techup
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Roboto+Condensed:ital,wght@0,300;0,400;0,700;1,300;1,400;1,700&display=swap" rel="stylesheet">
	<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<?php   
    if ( function_exists( 'wp_body_open' ) )
    wp_body_open();
    ?>
<div id="page" class="site">
<a class="skip-link screen-reader-text" href="#content">
<?php esc_html_e( 'Skip to content', 'techup' ); ?></a>
<?php
	do_action( 'techup_before_header' );
	do_action( 'techup_header' );
?>
<div id="content"></div>

<?php
if (!is_home() && is_front_page()) {
?>
		<div id="cv-fullscreen" class="site-content">
<?php
		do_action( 'techup_frontpage_sections' );
} else {
		do_action( 'techup_innerpage_header' );

}
?>