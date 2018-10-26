<?php 
/* Template Name: Contact US */ 

get_header();
?>
<section class="contact-form">
	<div class="container">
		<div class="contact-field">
			<?php 
			if(have_posts()){
				while(have_posts()){
					the_post();
					?>
					<h2><?php the_title();?></h2>
					<?php
					the_content();
				}
			}
			?><!-- 
			<h2><?php //the_title();?></h2>
			<form action="" method="post">
				<div class="form-wrapper">
					<div class="two-column">
						<input type="text" name="fname" id="fname" class="input-field">
						<label for="fname">First Name<span class="color-red">*</span></label>
					</div>
					<div class="two-column">
						<input type="text" name="lname" id="lname" class="input-field">
						<label for="lname">Last Name<span class="color-red">*</span></label>
					</div>
					
				</div>
				<div class="form-group">
					<input type="email" name="email" id="email" class="one-column input-field">
					<label for="email" class="one-column">Email<span class="color-red">*</span></label>
				</div>
				
				<div class="form-group">
					<textarea name="message" id="message" cols="40" rows="7" class="input-field one-column"></textarea>
					<label for="message">Your Message<span class="color-red">*</span></label>
				</div>
				<div class="form-group">
					<input type="submit" value="SEND" class=" button btn-blue">
				</div>
			</form> -->
		</div>
	</div>
</section>
<?php
get_footer();
?>
