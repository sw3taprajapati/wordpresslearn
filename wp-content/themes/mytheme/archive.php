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
				echo paginate_links();
			}
			?>
		</div>
		<?php include('templates-parts/side-bar.php'); ?>
	</div>
</section>
<?php
get_footer();
?>