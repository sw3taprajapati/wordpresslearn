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
</body>
</html>
