<!-- <form role="search" method="get" class="search-form" action="<?php echo home_url( '/' ); ?>">
	<input type="text" placeholder="Search Here" class="input-field" name="search" id="search">
	<input type="submit" value="Search" class=" button btn-blue"><i class=" fa fa-search"></i>
</form> -->

<form role="search" method="get" class="search-form" action="<?php echo home_url( '/' ); ?>">
    <label>
        <span class="screen-reader-text"><?php echo _x( 'Search for:', 'label' ) ?></span>
        <input type="search" class="search-field input-field" 
            placeholder="<?php echo esc_attr_x( 'Search …', 'placeholder' ) ?>"
            value="<?php echo get_search_query() ?>" name="s"
            title="<?php echo esc_attr_x( 'Search for:', 'label' ) ?>" />
    </label>
    <input type="submit" class="search-submit button btn-blue"
        value="<?php echo esc_attr_x( 'Search', 'submit button' ) ?>" />
</form>