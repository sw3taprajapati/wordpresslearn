<div class="recent-comments">
	<h2>What people says about our posts?</h2>
	<?php 
	$args=array('order' => 'DESC',);
	$recent_comments=get_comments( $args );
	//vr_dump($recent_comments);
	foreach ($recent_comments as  $value) {
		//echo $value->guid; 
		$new_url= substr("$value->guid", 35);
		//echo $new_url; 
		?>
		<ul>
			<li><a href="<?php echo get_the_permalink($new_url); ?>"><?php echo($value->comment_author_email . ' commented "'. $value->comment_content.'" on '.$value->post_title); ?></a></li>
		</ul>
		<?php
	}
	?>
</div>