<?php 
get_header();
?>
<section class="gallery">
	<div class="container">
		<div class="images-wrapper">
			<?php 
			$post = get_queried_object();
			//vr($post);

			$postType = $post->label; ?>
			<h2><?php echo $postType; ?></h2>
			
			<?php if(have_posts()){
				while(have_posts()){
					the_post();
					?>
					<div class="image-section">
						
						<a href="<?php echo get_permalink(); ?>"><?php the_post_thumbnail('img-280X350');?></a>
						<p><?php echo get_post(get_post_thumbnail_id())->post_excerpt;?></p>
						<!-- <p><?php //echo $caption; ?></p> -->
					</div>
					<?php
				}
				?>
				<div class="post-page">
					<?php echo paginate_links(); ?>
				</div>
				<?php
				
			}
			?>
		</div>
	</div>
</section>
<?php
get_footer();
?>
