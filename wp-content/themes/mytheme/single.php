<?php 
get_header();
?>
<section class="single">
	<div class="container">
		<div class="post-section">
			<?php 
			if$query = new WP_Query( array( 'post_type'=>'post', 'posts_per_page' => 10 ) )
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
		<?php include('templates-parts/side-bar.php'); ?>
	</div>
</section>
<?php
get_footer();
?>