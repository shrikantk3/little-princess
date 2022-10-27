<?php
/**
 * Template part for displaying site info
 *
 * @package Bosa Shopper 1.0.0
 */

?>

<div class="site-info">
	<?php echo wp_kses_post( html_entity_decode( esc_html__( 'Copyright &copy; ' , 'bosa-shopper' ) ) );
		echo esc_html( date( 'Y' ) );
		printf( esc_html__( ' Bosa Shopper. Powered by', 'bosa-shopper' ) );
	?>
	<a href="<?php echo esc_url( __( '//bosathemes.com', 'bosa-shopper' ) ); ?>" target="_blank">
		<?php
			printf( esc_html__( 'Bosa Themes', 'bosa-shopper' ) );
		?>
	</a>
</div><!-- .site-info -->