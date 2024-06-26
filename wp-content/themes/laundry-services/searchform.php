<?php
/**
 * Displaying search forms in Laundry Services
 * @package Laundry Services
 */
?>
<form method="get" class="search-form" action="<?php echo esc_url( home_url( '/' ) ); ?>">
	<label>
		<span class="screen-reader-text"><?php echo esc_html_x( 'Search for:', 'label', 'laundry-services' ); ?></span>
		<input type="search" class="search-field" placeholder="<?php echo esc_attr_x( 'Search', 'placeholder', 'laundry-services' ); ?>" value="<?php echo esc_attr( get_search_query()) ?>" name="s">
	</label> 
	<input type="submit" class="search-submit" value="<?php echo esc_attr_x( 'Search', 'submit button', 'laundry-services' ); ?>">
</form>