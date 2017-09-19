<?php
/*
Template Name: Contact Page
*/
?>
<?php
/**
 * The template for the website's contact page (no sidebar).
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package gcwoo
 */

get_header(); ?>

	<main id="main" class="site-main col-md-12" role="main">
		
		<div class="container">
            <div class="row wow fadeInUp">
            <!-- Breadcrumbs -->
                <div class="breadcrumbs">
                    <?php if ( function_exists('yoast_breadcrumb') ) {
                        yoast_breadcrumb('<div id="breadcrumbs">','</div>');
                    } ?>
                </div>
            <!-- End: Breadcrumbs -->
                <div class="title-section">
                    <div class="section-title">
                        <h1>Contact Us</h1>
                        <p class="lead">We are here to answer any questions you may have about any of our products or services</p>
                    </div>
                </div>
                <div class="contact page">
                    <div class="col-sm-8">
                        <div class="col-left" style="background:#fff;padding:50px;border-radius:3px;box-shadow:3px 3px 5px rgba(51,51,51,0.3)">
                            <h3 style="margin-bottom:15px;">Send Us a Message</h3>
                            <p class="lead">We'll always respond as soon as we can</p>

				<?php echo do_shortcode( '[contact-form-7 id="1753" title="Contact Page - Form"]' ); ?>

                            <!-- <form id="form" class="topBefore">
                                <input id="name" type="text" placeholder="Name*">
                                <input id="email" type="text" placeholder="E-Mail*">
                                <input id="company" type="text" placeholder="Company">
                                <select id="list" type="select" name="departments">
                                    <option value="general">General Enquiry</option>
                                    <option value="sales">Vehicle Sales</option>
                                    <option value="rental">Vehicle Rental</option>
                                    <option value="maintanence">Maintanence</option>
                                    <option value="parts">Parts</option>
                                    <option value="support">Support</option>
                                </select>
                                <textarea id="message" type="text" placeholder="Message"></textarea>
                                <input id="captcha" type="text" placeholder="Captcha*, what is 5+9?">
                                <input id="submit" type="submit" value="Send">
                                <p style="margin-top:10px">*Denotes requried fields, so we can get back to you and check you're real</p>
                            </form> -->
                        </div>
                    <!-- Contact Page Right -->
                    </div>
                    <div class="col-sm-4">
                        <div class="col-right" style="padding:50px">
                            
                            <h3 style="margin-bottom:15px;">General Information</h3>
                            <p><span class="gc-blue" style="font-size:20px"><i class="fa fa-envelope-o" aria-hidden="true"></i> Email </span></p>
                                <p>info@golfcaruk.com</p>
                            <p><span class="gc-blue" style="font-size:20px"><i class="fa fa-phone" aria-hidden="true"></i> Telephone </span></p>
                                <p>0345 8055 494</p>
                            <p><span class="gc-blue" style="font-size:20px"><i class="fa fa-map-marker" aria-hidden="true"></i> Address</span></p>
                                <p>7 The Boscombe Centre<br>
                                Mills Way<br>
                                Amesbury<br>
                                SP4 7SD</p>
                            <p><span class="gc-blue" style="font-size:20px"><i class="fa fa-building-o" aria-hidden="true"></i> Office Hours</span></p>
                                <p>Monday - Friday<br>8:30 - 17:30</p>
                        </div>
                    </div>
                    <!-- End: Contact Page Right -->
                </div>
            </div>
            <!-- End: Row -->
        </div>
        <!-- End: Container -->
        <div class="map-container">
        
            <!-- Google Map -->
            
                <iframe width="100%" height="100%" frameborder="0" style="border:0" src="https://www.google.com/maps/embed/v1/place?q=7%20the%20boscombe%20centre&key=AIzaSyDzCmiw7WY3Oh6DIyC3F7jjYGWqKaYYqEc" allowfullscreen style="pointer-events:none;"></iframe>
            
            <!-- End: Google Map -->
            
        </div>
	</main><!-- #main -->
	
	
<?php get_footer(); ?>
