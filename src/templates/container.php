<?php
/**
 * Template for wp-bootstrap-blocks/container
 *
 * This template can be overridden by copying it to theme/wp-bootstrap-blocks/container.php.
 *
 * @package wp-bootstrap-blocks/templates/container
 * @version 1.0.0
 */

$classes = array( 'wp-bootstrap-blocks-container' );

if ( array_key_exists( 'isFluid', $attributes ) && $attributes['isFluid'] ) {
	array_push( $classes, 'container-fluid' );
} else {
	array_push( $classes, 'container' );
}
if ( array_key_exists( 'marginAfter', $attributes ) ) {
	array_push( $classes, $attributes['marginAfter'] );
}
if ( array_key_exists( 'className', $attributes ) ) {
	array_push( $classes, $attributes['className'] );
}

$classes = apply_filters( 'wp_bootstrap_blocks_container_classes', $classes, $attributes );
?>
<div class="<?php echo esc_attr( implode( ' ', $classes ) ); ?>">
	<?php echo $content; // phpcs:ignore ?>
</div>
