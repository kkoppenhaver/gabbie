<form role="search" method="get" id="searchform" class="searchform" action="<?php echo site_url(); ?>">
	<div>
		<label class="screen-reader-text" for="s">Search for:</label>
		<input type="text" value="<?php echo get_query_var('s'); ?>" name="s" id="s" placeholder="Enter your search term...">
		<input type="submit" id="searchsubmit" value="Search">
	</div>
</form>