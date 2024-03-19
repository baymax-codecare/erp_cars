<?php 
/*
* Template Name: About us
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


<div class="erp_divider"></div>



<section class="erp_about_sec">
	<div class="container">
    	<div class="row">
		
	
			
			<?php 
				if (have_posts()):
				while(have_posts()): the_post();
			?>
			
				<h2> <?php the_title();?> </h2>
				
				<p><?php the_content(); ?></p>
			
			<?php 
				endwhile;
				
				else:
					echo 'Sorry, there is no content avialable';
				endif;
			?>
		
        </div>
    </div>
</section>



<section class="erp_abt_trnsp_sec">
	<div class="container">
    	<div class="row">
        	<div class="col-12 col-sm-12 col-lg-3 col-xl-3">
            	<div class="abt_trnsp_icon">
					<?php if(get_field('about_page_service_image1')!=''){ ?>
						<img src="<?php the_field('about_page_service_image1')?>" alt=" " />
					<?php } else {?>
							<img src="<?php echo get_stylesheet_directory_uri();?>/image/transport_1.png" alt="" />
					<?php }?>
				</div>
                <h3>
						<?php if(get_field('about_page_service_heading1')!=''){ ?>
							<?php echo esc_html_e(the_field('about_page_service_heading1'),'erpcars');?>
						<?php } else {?>
							<?php echo esc_html_e( 'Transport Vehicles', 'erpcars' ); ?>
						<?php }?>
				</h3>
                <p>
					<?php if(get_field('about_page_service_description1')!=''){ ?>
							<?php echo esc_html_e(the_field('about_page_service_description1'),'erpcars');?>
					<?php } else {?>
							<?php echo esc_html_e( 'Vehicles can be shipped in Containers or Ro/Ro. Our goal is to provide you with the service that suits you best at a competitive
													price.', 'erpcars' ); ?>
					<?php }?>
				</p>
            </div>
			
			
            <div class="col-12 col-sm-12 col-lg-3 col-xl-3">
            
				<div class="abt_trnsp_icon">
					<?php if(get_field('about_page_service_image2')!=''){ ?>
						<img src="<?php the_field('about_page_service_image2')?>" alt=" " />
					<?php } else {?>
						<img src="<?php echo get_stylesheet_directory_uri();?>/image/transport_2.png" alt="" />
					<?php }?>
				</div>
                <h3>
						<?php if(get_field('about_page_service_heading2')!=''){ ?>
							<?php echo esc_html_e(the_field('about_page_service_heading2'),'erpcars');?>
						<?php } else {?>
							<?php echo esc_html_e( 'Transport Boats', 'erpcars' ); ?>
						<?php }?>
				</h3>
                <p>
					<?php if(get_field('about_page_service_description2')!=''){ ?>
							<?php echo esc_html_e(the_field('about_page_service_description2'),'erpcars');?>
					<?php } else {?>
							<?php echo esc_html_e('Boats can be shipped on trailers or cradles. Depending on the size of the boat special handling may be required.','erpcars' ); ?>
					<?php }?>
				</p>
				
			</div>
			
			
            <div class="col-12 col-sm-12 col-lg-3 col-xl-3">
            	
				<div class="abt_trnsp_icon">
					<?php if(get_field('about_page_service_image3')!=''){ ?>
						<img src="<?php the_field('about_page_service_image3')?>" alt=" " />
					<?php } else {?>
						<img src="<?php echo get_stylesheet_directory_uri();?>/image/transport_3.png" alt="" />
					<?php }?>
				</div>
                <h3>
					
						<?php if(get_field('about_page_service_heading3')!=''){ ?>
							<?php echo esc_html_e(the_field('about_page_service_heading3'),'erpcars');?>
						<?php } else {?>
							<?php echo esc_html_e( 'General Cargo', 'erpcars' ); ?>
						<?php }?>
				</h3>
                <p>
					<?php if(get_field('about_page_service_description3')!=''){ ?>
							<?php echo esc_html_e(the_field('about_page_service_description3'),'erpcars');?>
					<?php } else {?>
							<?php echo esc_html_e('We ship various commodities. Unfortunately we are unable to handle live animals, frozen food, metal or plastic scrap.','erpcars' ); ?>
					<?php }?>
				</p>
			
			</div>
            
			
			
			
			
			<div class="col-12 col-sm-12 col-lg-3 col-xl-3">
            
              
				<div class="abt_trnsp_icon">
					<?php if(get_field('about_page_service_image4')!=''){ ?>
						<img src="<?php the_field('about_page_service_image4')?>" alt=" " />
					<?php } else {?>
						<img src="<?php echo get_stylesheet_directory_uri();?>/image/transport_4.png" alt="" />
					<?php }?>
				</div>
                <h3>
					
						<?php if(get_field('about_page_service_heading4')!=''){ ?>
							<?php echo esc_html_e(the_field('about_page_service_heading4'),'erpcars');?>
						<?php } else {?>
							<?php echo esc_html_e( 'Household Goods', 'erpcars' ); ?>
						<?php }?>
				
				</h3>
                <p>
					<?php if(get_field('about_page_service_description4')!=''){ ?>
							<?php echo esc_html_e(the_field('about_page_service_description4'),'erpcars');?>
					<?php } else {?>
							<?php echo esc_html_e('Personal effects can be shipped in a full or in a shared container. Shipments in a shared container must be properly packed 
													for export.','erpcars' ); ?>
					<?php }?>
				</p>
			
			
			</div>
        </div>
    </div>
</section>



<section class="erp_abt_award_sec">
	<div class="container">
    	<div class="row">
        	<h2>Awards and Endorsements</h2>
            <div class="col-12 col-sm-12 col-lg-6 col-xl-6">
            	<div class="erp_abt_award_img">
					<?php if(get_field('awards_and_endorsements_image_1')!=''){ ?>
						<img src="<?php the_field('awards_and_endorsements_image_1')?>" alt=" " />
					<?php } else {?>
						<img src="<?php echo get_stylesheet_directory_uri();?>/image/award_1.jpg" alt="" />
					<?php }?>
					
				</div>
                <div class="erp_abt_award_txt">
					<?php if(get_field('awards_and_endorsements_title1')!=''){ ?>
							<?php echo esc_html_e(the_field('awards_and_endorsements_title1'),'erpcars');?>
					<?php } else {?>
							<?php echo esc_html_e( '2016 Diversity Business Top Businesses', 'erpcars' ); ?>
					<?php }?>
					
				</div>
            </div>
			
            <div class="col-12 col-sm-12 col-lg-6 col-xl-6">
            	<div class="erp_abt_award_img">
					<?php if(get_field('awards_and_endorsements_image_2')!=''){ ?>
						<img src="<?php the_field('awards_and_endorsements_image_2')?>" alt=" " />
					<?php } else {?>
						<img src="<?php echo get_stylesheet_directory_uri();?>/image/award_2.jpg" alt="" />
					<?php }?>
				</div>
                <div class="erp_abt_award_txt">
					<?php if(get_field('awards_and_endorsements_title2')!=''){ ?>
							<?php echo esc_html_e(the_field('awards_and_endorsements_title2'),'erpcars');?>
					<?php } else {?>
							<?php echo esc_html_e( 'NASSTRAC Member', 'erpcars' ); ?>
					<?php }?>
				</div>
            </div>
			
            <div class="col-12 col-sm-12 col-lg-6 col-xl-6">
            	<div class="erp_abt_award_img">
					<?php if(get_field('awards_and_endorsements_image_3')!=''){ ?>
						<img src="<?php the_field('awards_and_endorsements_image_3')?>" alt=" " />
					<?php } else {?>
						<img src="<?php echo get_stylesheet_directory_uri();?>/image/award_2.jpg" alt="" />
					<?php }?>
				</div>
                <div class="erp_abt_award_txt">
					<?php if(get_field('awards_and_endorsements_title2')!=''){ ?>
							<?php echo esc_html_e(the_field('awards_and_endorsements_title3'),'erpcars');?>
					<?php } else {?>
							<?php echo esc_html_e( 'Transportation Intermediaries Assoc. Member', 'erpcars' ); ?>
					<?php }?>
				</div>
            </div>
			
            <div class="col-12 col-sm-12 col-lg-6 col-xl-6">
            	<div class="erp_abt_award_img">
					<?php if(get_field('awards_and_endorsements_image_3')!=''){ ?>
						<img src="<?php the_field('awards_and_endorsements_image_3')?>" alt=" " />
					<?php } else {?>
						<img src="<?php echo get_stylesheet_directory_uri();?>/image/award_1.jpg" alt="" />
					<?php }?>
				</div>
                <div class="erp_abt_award_txt">
					<?php if(get_field('awards_and_endorsements_title2')!=''){ ?>
							<?php echo esc_html_e(the_field('awards_and_endorsements_title3'),'erpcars');?>
					<?php } else {?>
							<?php echo esc_html_e( 'NITL Member', 'erpcars' ); ?>
					<?php }?>
				</div>
            </div>
        </div>
    </div>
</section>


<?php get_footer();?>