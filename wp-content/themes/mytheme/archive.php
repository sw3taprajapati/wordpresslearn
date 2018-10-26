<?php 
get_header();
?>
<section class="archive">
	<div class="container">
		<div class="post-section">
			<?php 
			if(have_posts()){
				while(have_posts()){
					the_post();

					?>
					<div class="two-column">
						<div class="post-content">
							<h2><?php the_title(); ?></h2>
							<div class="post-description"><?php the_excerpt(); ?></div>
							<a href="<?php echo get_permalink(); ?>" class="button btn-blue" target="_blank"><?php echo get_post_meta($id,'button_name_key',true); ?></a> 
						</div>
						<div class="image-section">
							<?php the_post_thumbnail('img-260X190'); ?>
						</div>
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