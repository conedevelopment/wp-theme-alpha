<?php $unique_id = esc_attr( uniqid( 'search-form-' ) ); ?>

<form role="search" method="get" class="top-search-form" action="<?php echo esc_url( home_url( '/' ) ); ?>" autocomplete="off">
	<label class="screen-reader-text" for="<?php echo $unique_id; ?>top-bar">
		<span><?php echo _x( 'Search for:', 'label', 'pine-alpha' ); ?></span>
	</label>
	<input type="search" id="<?php echo $unique_id; ?>top-bar" class="top-search-form__input" placeholder="<?php echo esc_attr_x( 'Search &hellip;', 'placeholder', 'pine-alpha' ); ?>" value="<?php echo get_search_query(); ?>" name="s" autocomplete="off" />
	<button type="submit" class="top-search-form__submit"><?php echo pine_alpha_get_svg( array( 'icon' => 'search' ) ); ?><span class="screen-reader-text"><?php echo _x( 'Search', 'submit button', 'pine-alpha' ); ?></span></button>
	<button class="top-search-form__close"></button>
</form>