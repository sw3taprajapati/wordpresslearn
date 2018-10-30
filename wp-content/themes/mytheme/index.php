<?php 
get_header();
?>
<section class="search">
	<?php
	echo "index.php";
	global $query_string;

	wp_parse_str( $query_string, $search_query );
	$search = new WP_Query( $search_query );

	global $wp_query;
	$total_results = $wp_query->found_posts;

	?>
</section>
<?php
get_footer();
?>