<?php
/**
 * Template Name: Homepage
 * Description: Custom Homepage template.
 */

get_header();
?>

<div class="homepage-content" style="max-width: 1200px; margin: 0 auto; padding: 40px 20px;">
	<!-- Breadcrumb (jika diperlukan) -->
	<p class="breadcrumb" style="font-size: 14px; color: #999;">Home / Who we are / <strong>Contact</strong></p>

	<!-- Heading & Description -->
	<h1 style="color: #f60;">Contact</h1>
	<p style="max-width: 700px; color: #666;">
		Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam posuere ipsum nec velit mattis elementum. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. 
		Maecenas eu placerat metus, eget placerat libero.
	</p>

	<!-- Contact Form & Contact Info -->
	<div class="contact-section" style="display: flex; flex-wrap: wrap; margin-top: 40px;">
		<!-- Contact Form -->
		<div class="contact-form" style="flex: 1; min-width: 300px; margin-right: 40px;">
			<h2 style="color: #f60; border-bottom: 5px solid #333; padding-bottom: 5px;">CONTACT US</h2>
			<form action="#" method="post" style="margin-top: 20px;">
				<input type="text" name="name" placeholder="Name *" style="width: 100%; padding: 10px; margin-bottom: 10px;" required>
				<div style="display: flex; gap: 10px; margin-bottom: 10px;">
					<input type="text" name="phone" placeholder="Phone *" style="flex: 1; padding: 10px;" required>
					<input type="email" name="email" placeholder="Email *" style="flex: 1; padding: 10px;" required>
				</div>
				<textarea name="message" placeholder="Message *" rows="5" style="width: 100%; padding: 10px; margin-bottom: 10px;" required></textarea>
				<button type="submit" style="background-color: #f60; color: white; border: none; padding: 10px 20px; cursor: pointer;">SUBMIT</button>
			</form>
		</div>

		<!-- Contact Info -->
		<div class="contact-info" style="flex: 1; min-width: 300px;">
			<h2 style="color: #f60; border-bottom: 5px solid #333; padding-bottom: 5px;">REACH US</h2>
			<div style="margin-top: 20px; color: #333;">
				<p><strong>Coalition Skills Test</strong><br>
				535 La Plata Street<br>
				4200 Argentina</p>

				<p>Phone: 385.154.11.28.38<br>
				Fax: 385.154.35.66.78</p>

				<!-- Social Media Icons -->
				<div style="margin-top: 20px; display: flex; align-items: center;">
   
    <div style="display: flex; align-items: space-between;">
        <a href="#" style="margin-right: 5px;">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/icons/facebook.png" alt="Facebook" style="width: 25px; height: 25px; border-radius: 10%; background-color: #ccc; display: flex; justify-content: center; align-items: center;">
        </a>
        <a href="#" style="margin-right: 5px;">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/icons/twitter.png" alt="Twitter" style="width: 25px; height: 25px; border-radius: 10%; background-color: #ccc; display: flex; justify-content: center; align-items: center;">
        </a>
        <a href="#" style="margin-right: 5px;">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/icons/linkedin.png" alt="LinkedIn" style="width: 25px; height: 25px; border-radius: 10%; background-color: #ccc; display: flex; justify-content: center; align-items: center;">
        </a>
        <a href="#">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/icons/pinterest.png" alt="Pinterest" style="width: 25px; height: 25px; border-radius: 10%; background-color: #ccc; display: flex; justify-content: center; align-items: center;">
        </a>
    </div>
</div>
			</div>
		</div>
	</div>
</div>

<?php
get_footer();
?>
