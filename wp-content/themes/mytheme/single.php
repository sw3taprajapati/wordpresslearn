<?php 
get_header();
?>
<section class="single">
	<div class="container">
		<div class="post-section">
			<?php 
			if(have_posts()){
				while(have_posts()){
					the_post();

					?>
					<div class="post-content">
						<h2><?php the_title(); ?></h2>
						<div class="detail-description"><?php the_content(); ?></div>
						<div class="post-image"><?php the_post_thumbnail('img-280X350'); ?></div>
					</div>
					<?php
				}
			}
			?>
		</div>
		<div class="side-bar">
			<div class = "list">
				<ul>
					<?php dynamic_sidebar( 'sidebar-1' ); ?>
				</ul>
			</div>
			<?php include('templates-parts/recent-comments.php'); ?>
		</div>
	</div>
</section>
<?php
get_footer();
?>