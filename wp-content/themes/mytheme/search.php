<?php 
get_header();
?>
<section class="search">
	<div class="container">
		<?php $allsearch = new WP_Query("s=$s&showposts=0"); ?>
		<h3><?php echo $allsearch ->found_posts.' results found for "'.$s.'".'; ?></h3>
		
		<div class="post-section">
			<?php
			$s=get_search_query();
			$args = array(
				's' =>$s
			);
    // The Query
			$the_query = new WP_Query( $args );
			if($the_query->have_posts()){
				while($the_query->have_posts()){
					$the_query->the_post(); ?>
					<div class="two-column">
						<div class="post-content">
							<h2><?php the_title(); ?></h2>
									<div class="post-description"><?php
							 the_excerpt(); ?></div>
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
		<?php include('templates-parts/side-bar.php'); ?>
	</div>
	
</section>
<?php
get_footer();
?>