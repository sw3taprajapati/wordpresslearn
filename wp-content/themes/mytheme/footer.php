<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage mytheme
 * @since 1.0
 * @version 1.2
 */

?>
</main>
</div><!-- #content -->
<footer class="footer">
	<div class="container">
		<!-- <div class="footer-text"> -->
			<?php
			dynamic_sidebar('footer-1');?>
			<!-- </div> -->
<!-- 
			<div class="navigationbar">
				<nav>
					<?php //wp_nav_menu(array('theme_location'=>'footer')); ?>
				</nav>
			</div>
		-->		</div>
	</footer>
</div>
<?php wp_footer(); ?>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.0.3/jquery.min.js"></script>
<script>
	jQuery(document).ready(function($){

		$(window).scroll(function(){
			if ($(window).scrollTop() >= 100) {
				$('.header').addClass('gradient-background');

			}
			else {
				$('.header').removeClass('gradient-background');
			}
		});

		$('.hamburger').on('click',function(){
			$('.navigationbar').show();
			$('.hamburger').hide();
			$('.close').show();
		});

		$('.close').on('click',function(){
			$('.navigationbar').hide();
			$('.hamburger').show();
			$('.close').hide();
		});

		
	});
</script>
</body>
</html>
