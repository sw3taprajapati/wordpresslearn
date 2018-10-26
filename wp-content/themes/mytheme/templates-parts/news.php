<?php 
/* Template Name: News */ 

get_header();
?>
<section class="blog">
	<div class="container">
		<?php 

		$query = new WP_Query( array( 'category_name'=>'News') );

		if($query->have_posts()){
			while($query->have_posts()){
				$query->the_post();
				?>
				<div class="post-section">
					<h2><?php the_title(); ?></h2>
					<p><?php the_content(); ?></p>
				</div>
				<?php
			}
		}
		?>	
	</div>
</section>
<?php
get_footer();
?>
