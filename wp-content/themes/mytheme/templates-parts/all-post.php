<?php 
/* Template Name: All Posts */ 

get_header();
?>
<section class = "all-posts">
	<div class = "container">
		<?php $query = new WP_Query( array( 'post_type'=>'post', 'posts_per_page' => 10 ) );//to extract all the post of all categories
		if($query -> have_posts () ){
			$page_count=0;
			while($query -> have_posts() ){
				$query -> the_post();
				$page_count++;

				if($page_count%2==0){
					?>
					<div class = "post-section">
						<div class="post-content">
							<h2><?php the_title(); ?></h2>
							<div class="post-description"><?php the_excerpt(); ?></div>
							<a href = "<?php echo get_permalink(); ?>" class = "button btn-blue" target = "_blank"><?php echo get_post_meta($id,'button_name_key',true); ?></a>
						</div>
						<div class="image-section even">
							<?php the_post_thumbnail('img-260X190'); ?>
						</div>
					</div>
					<?php
				}else{
					?>
					<div class = "post-section">
						<div class="image-section odd">
							<?php the_post_thumbnail('img-260X190'); ?>
						</div>
						<div class="post-content">
							<h2><?php the_title(); ?></h2>
							<div class="post-description"><?php the_excerpt(); ?></div>
							<a href = "<?php echo get_permalink(); ?>" class = "button btn-blue" target = "_blank"><?php echo get_post_meta($id,'button_name_key',true); ?></a>
						</div>
					</div>
					<?php
				}
			}
		}
		?>

	</div>
</section>
<?php
get_footer();
?>
