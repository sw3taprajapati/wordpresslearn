<form role="search" method="get" class="search-form" action="<?php echo home_url( '/' ); ?>">
	<label>
		<span class="screen-reader-text"><?php echo _x( '', 'label' ) ?></span>
		<input type="search" class="search-field input-field" 
		placeholder="<?php echo esc_attr_x( 'Search …', 'placeholder' ) ?>"
		value="<?php echo get_search_query() ?>" name="s"
		title="<?php echo esc_attr_x( 'Search for:', 'label' ) ?>" required="required"/>
	</label>
	<input type="submit" class="search-submit button btn-blue"
	value="<?php echo esc_attr_x( 'Search', 'submit button' ) ?>" />
</form>