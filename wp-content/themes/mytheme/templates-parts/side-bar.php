
<div class="side-bar">
	<div class="search">
		<?php get_search_form(); ?>
		<!-- <form action="" method="GET">
			<input type="text" placeholder="Search Here" class="input-field" name="search" id="search">
			<button type="submit" class=" button btn-blue"><i class=" fa fa-search"></i> Search</button>
		</form> -->
	</div>
	<div class = "list">
		<ul>
			<?php dynamic_sidebar( 'sidebar-1' ); ?>
		</ul>
	</div>
	<div class="recent-comments">
		<h2>What people says about our posts?</h2>
		<?php 
		$args=array('order' => 'DESC',);
		$recent_comments=get_comments( $args );
	//vr_dump($recent_comments);
		foreach ($recent_comments as  $value) {

			$split_char = $value->guid;
			$result=str_replace('/','',$split_char);

			$new_url = substr($result, strpos($result, "=") + 1);   

			?>
			<ul>
				<li><a href="<?php echo get_the_permalink($new_url); ?>"><?php echo($value->comment_author_email . ' commented "'. $value->comment_content.'" on '.$value->post_title); ?></a></li>
			</ul>
			<?php
		}
		?>
	</div>
</div>

