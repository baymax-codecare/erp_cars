<?php 
/*
* Template Name: Contact
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
                <form action="<?php echo get_page_link(245);?>" method="post" name="erp_track" id="erp_track">
                	<p>Tracking Number:</p>
                    <input type="number" name="erp_track_num" id="erp_track_num" required/>
                    <label class="erp_track_box">
                    	<input type="checkbox" name="erp_trck_agree" id="erp_trck_agree" value="agree" required/>By selecting the Track button, I agree to the Terms and Conditions.
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



<section class="erp_cntct_frm_sec">
	<div class="container">
    	<div class="row">
        	<h2>Contact Customer Service</h2>
            <p class="cont_para">Do you have a question or comment? Please enter the information below and select 'Send message' to continue. All fields are Required.</p>
            <!--<form action="#" method="post" name="cntct_frm" id="cntct_frm">
            	<p>Your name:</p>
                <p>E-mail address:</p>
                <input type="text" name="erp_cntct_name" id="erp_cntct_name" />
                <input type="email" name="erp_cntct_eml" id="erp_cntct_eml" />
                <p>Subject:</p>
                <input type="text" name="erp_cntct_subj" id="erp_cntct_subj" />
                <p>Message:</p>
                <textarea name="erp_cntct_msg" id="erp_cntct_msg"></textarea>
                <button type="submit" name="erp_cntct_snd" id="erp_cntct_snd" class="btn">Send Message!</button>
                <div class="clearfix"></div>
            </form>-->
			
			<?php echo do_shortcode('[contact-form-7 id="278" title="Contact Form"]'); ?>   
			
			
			
        </div>
    </div>
</section>


<div class="erp_divider"></div>



<section class="erp_cntct_info_sec">
	<div class="container">
    	<div class="row">
        	<h2>HENWOOD TRANSPORT LTD</h2>
            <div class="col-12 col-sm-12 col-lg-4 col-xl-4 erp_cntct_adr">
            	<ul>
                	<li><i class="fa fa-map-marker" aria-hidden="true"></i><span>80 SW 8th Street , Miami, FL 33176, United States</span></li>
                </ul>
            </div>
            <div class="col-12 col-sm-12 col-lg-4 col-xl-4 erp_cntct_adr">
            	<ul>
                	<li><i class="fa fa-map-marker" aria-hidden="true"></i><span></span></li>
                </ul>
            </div>
            <div class="col-12 col-sm-12 col-lg-4 col-xl-4 erp_cntct_adr">
            	<ul>
                	<li><i class="fa fa-map-marker" aria-hidden="true"></i><span></span></li>
                </ul>
            </div>
            <div class="erp_cntct_eml">Email: 
				<span>
					<a href="mailto:contact@henwoodtrans.com "><?php echo esc_html_e('contact@henwoodtrans.com ','erpcars' ); ?></a>
				</span>
			</div>
        </div>
    </div>
</section>




<?php get_footer();?>