<?php
/*
* Template Name: How it works
*/
get_header();
?>


<section class="erp_breadcrumb">
	<div class="container">
    	<div class="row">
        	<p><?php byc_get_current_page_name(); ?> <span><?php byc_get_breadcrumb(); ?></span></p>
        </div>
    </div>
</section>



<section class="erp_transport_sec">
	<div class="container">
    	<div class="row">
        	<div class="col-12 col-sm-12 col-lg-3 col-xl-3">
            	<div class="erp_sidebar"><h3>Track Shipments</h3>
                <p>Track your shipment(s) movements around the world at any time.</p>
                <form action="<?php echo get_page_link(245); ?>" method="post" name="erp_track" id="erp_track">
                	<p>Tracking Number:</p>
                    <input type="number" name="erp_track_num" id="erp_track_num" required/>
                    <label class="erp_track_box">
                    	<input type="checkbox" name="erp_trck_agree" id="erp_trck_agree" value="agree" required />By selecting the Track button, I agree to the Terms and Conditions.
                    </label>
                    <button type="submit" class="btn track_btn" name="tracking_button">Track</button>
                </form>
                </div>
            </div>
            <div class="col-12 col-sm-12 col-lg-9 col-xl-9">
            	<?php echo do_shortcode('[contact-form-7 id="255" title="Shipping Details For All Others Pages"]'); ?>   
            </div>
        </div>
    </div>
</section>


<div class="erp_divider"></div>


<?php 
				if (have_posts()):
				while(have_posts()): the_post();
			?>
			
				<p><?php the_content(); ?></p>
			
			<?php 
				endwhile;
				
				else:
					echo 'Sorry, there is no content avialable';
				endif;
			?>


<?php get_footer();?>