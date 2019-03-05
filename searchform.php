<?php
/**
 * Template for displaying search forms in Alpha
 *
 * @package Alpha
 * @since 1.0
 * @version 1.0
 */

?>

<?php $unique_id = esc_attr( uniqid( 'search-form-' ) ); ?>

<form role="search" method="get" class="search-form" action="<?php echo esc_url( home_url( '/' ) ); ?>">
	<label class="screen-reader-text" for="<?php echo $unique_id; ?>sidebar">
		<span><?php _e( 'Search for:', 'pine-alpha' ); ?></span>
	</label>
	<input type="search" id="<?php echo $unique_id; ?>sidebar" class="search-form__input" placeholder="<?php _e( 'Search &hellip;', 'pine-alpha' ); ?>" value="<?php echo get_search_query(); ?>" name="s" />
	<button type="submit" class="search-form__submit"><?php echo pine_alpha_get_svg( array( 'icon' => 'search' ) ); ?><span class="screen-reader-text"><?php _e( 'Search', 'pine-alpha' ); ?></span></button>
</form>
