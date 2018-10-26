<?php 
/* Template Name: Gallery*/ 

get_header();
?>
<section class="gallery">
	<div class="container">
		<div class="images-wrapper">
			<?php if(have_posts()){
				while(have_posts()){
					the_post();
					?>
					<h2><?php the_title();?></h2>
					<?php the_content(); 
				}
			}
			?>
		</div>
	</div>
</section>
<?php
get_footer();
?>
