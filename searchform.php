<form role="search" method="get" action="<?php echo home_url( '/' ); ?> ">
	<input type="search" class="form-control txt-search" placeholder="Search" value="<?php echo get_search_query() ?>"
	name="s" title="Search" />
</form> 
<!-- method and name should be retained from the orig search bar -->