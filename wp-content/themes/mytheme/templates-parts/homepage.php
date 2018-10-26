<?php 
/* Template Name: HomePage */ 

get_header();
?>
<?php $backgroundImg = wp_get_attachment_image_src( get_post_thumbnail_id(), 'full' ); ?>
<section class="banner" style="background-image: url('<?php echo $backgroundImg[0]; ?>');">
	<div class="banner-content" >
		<?php 

		if (have_posts()) {
			while (have_posts()) {
				the_post();?>
				<?php 
				$id = get_the_ID();
				$title_name=get_post_meta($id,'banner_title_key',true);
				?>
				<h1><?php echo $title_name; ?></h1>
				<?php the_content(); ?>
				<?php
			}
		}
		?>
	</div>
</section>
<?php
include('all-post.php');
get_footer();
?>
