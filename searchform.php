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
	<label class="screen-reader-text" for="<?php echo $unique_id; ?>">
		<span><?php echo _x( 'Search for:', 'label', 'pine-alpa' ); ?></span>
	</label>
	<input type="search" id="<?php echo $unique_id; ?>" class="search-form__input" placeholder="<?php echo esc_attr_x( 'Search &hellip;', 'placeholder', 'pine-alpa' ); ?>" value="<?php echo get_search_query(); ?>" name="s" />
	<button type="submit" class="search-form__submit"><?php echo pine_alpha_get_svg( array( 'icon' => 'search' ) ); ?><span class="screen-reader-text"><?php echo _x( 'Search', 'submit button', 'pine-alpa' ); ?></span></button>
</form>
