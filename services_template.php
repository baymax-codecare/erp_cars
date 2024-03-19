<?php 
/*
* Template Name: Services
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
            	<div class="erp_sidebar">

                    <h3>Track Shipments</h3>

                    <p>Track your shipment(s) movements around the world at any time.</p>

                    <form action="<?php echo get_page_link(245);?>" method="post" name="erp_track" id="erp_track">

                        <p>Tracking Number:</p>

                        <input type="text" name="erp_track_num" id="erp_track_num" value="" required/>

                        <label class="erp_track_box">

                            <input type="checkbox" name="erp_trck_agree" id="erp_trck_agree" value="agree" required/><span>By selecting the Track button, I agree to the Terms and Conditions.</span>

                        </label>
						<button type="submit" class="btn track_btn" name="tracking_button">Track</button>
                       <!-- <input type="submit" class="btn track_btn" value="Track" name="tracking_button" />-->

                    </form>
					

                </div>
            </div>
            <div class="col-12 col-sm-12 col-lg-9 col-xl-9">
            	<?php echo do_shortcode('[contact-form-7 id="255" title="Shipping Details For All Others Pages"]'); ?>   
            </div>
        </div>
    </div>
</section>



<section class="erp_servc_dtls_sec">
	<div class="container">
    	<div class="row">
        	<h2>services</h2>
            <div class="servc_dtls_icn"><img src="<?php echo get_stylesheet_directory_uri(); ?>/image/service_icn1.png" alt="" /></div>
            <div class="servc_dtls_txt">
            	<h3>Door to door</h3>
                <p>We offer to take your shipment from the door at the originating address, transport it to the destination country, clear it through customs and then deliver it direct to the door at the destination address.</p>
            </div>
            <div class="servc_dtls_icn"><img src="<?php echo get_stylesheet_directory_uri(); ?>/image/service_icn2.png" alt="" /></div>
            <div class="servc_dtls_txt">
            	<h3>Door to depot</h3>
                <p>Covers pickup from door at the originating address and transporting it to a depot at, or in the area of, the destination port or 
airport. HENWOOD TRANSPORT LTD responsibility ends at this point; it is your responsibility to clear your shipment through customs, to arrange the pickup of the goods and pay any local charges.</p>
            </div>
            <div class="servc_dtls_icn"><img src="<?php echo get_stylesheet_directory_uri(); ?>/image/service_icn3.png" alt="" /></div>
            <div class="servc_dtls_txt">
            	<h3>Express & Economy Air Freight</h3>
                <p>We provide secure, reliable and efficient air freight, with express delivery times ranging from 3-5 days, and economy from 7-10 days.</p>
            </div>
            <div class="servc_dtls_icn"><img src="<?php echo get_stylesheet_directory_uri(); ?>/image/service_icn4.png" alt="" /></div>
            <div class="servc_dtls_txt">
            	<h3>Storage services</h3>
                <p>If you require storage prior to shipment, we will be pleased to assist you. Our storage facilities are secure and you can rest 
assured of the safety of your effects whilst they are in our care. Storage facilities are available at our depot. Contact us for storage prices, which are based on the number of boxes and how long you wish the goods to remain in storage. Contact us for further information.</p>
            </div>
            <div class="clearfix"></div>
        </div>
    </div>
</section>

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



			

<?php get_footer(); ?>