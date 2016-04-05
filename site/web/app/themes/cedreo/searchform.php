<form role="search" method="get" class="search-form" action="<?php echo home_url( '/' ); ?>">
    <div class="input-group">
    	<label class="show-for-sr"><?php echo _x( 'Search for:', 'label' ) ?></label>
        <input type="search" class="search-field input-group-field"
            placeholder="<?php echo esc_attr_x( 'Search …', 'placeholder' ) ?>"
            value="<?php echo get_search_query() ?>" name="s"
            title="<?php echo esc_attr_x( 'Search for:', 'label' ) ?>" />
    	<div class="input-group-button"> 
    		<button type="submit" class="search-submit button"><i class="fa fa-search"></i></button>
    	</div>
    </div>
</form>