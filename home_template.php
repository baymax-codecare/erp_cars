<?php 

/*

* Template Name: Home

*/

get_header();

?>



<section class="erp_bnr_sec">

	<div class="container">

    	<div class="row">

        	<p>Shop Online With Merchants<br />All Over the World</p>

        </div>

    </div>

</section>







<section class="erp_transport_sec" id="erp_home_service">

	<div class="container">

    	<div class="row">

        	<div class="col-12 col-sm-12 col-lg-3 col-xl-3">

            	<div class="erp_sidebar">

                    <h3>Track Shipments</h3>

                    <p>Track your shipment(s) movements around the world at any time.</p>

                    <form action="https://www.henwoodtrans.com/tracking-details/" method="post" name="erp_track" id="erp_track">

                        <p>Tracking Number:</p>

                        <input type="text" name="erp_track_num" id="erp_track_num" value="" required/>

                        <label class="erp_track_box">

                            <input type="checkbox" name="erp_trck_agree" id="erp_trck_agree" value="agree" required/><span>By selecting the Track button, I agree to the Terms and Conditions.</span>

                        </label>

                       <!-- <input type="submit" class="btn track_btn" value="Track" name="tracking_button" />-->
					   <button type="submit" class="btn track_btn" name="tracking_button">Track</button>

                    </form>
					

                </div>

            </div>

            <div class="col-12 col-sm-12 col-lg-9 col-xl-9">

            	<div class="col-12 col-sm-12 col-lg-6 col-xl-6 transp_area">

            		<div class="transp_icon">
						
						<?php if(get_field('home_page_service_image1')!=''){ ?>
						
							<img src="<?php the_field('home_page_service_image1')?>" alt="" />
							
						<?php } else {?>
						
							<img src="<?php echo get_stylesheet_directory_uri();?>image/transport_1.png" alt="" />
						
						<?php }?>
						
					</div>

                    <h3>
						<a href="#">
							<?php if(get_field('home_page_service_heading1')!=''){ ?>
								<?php echo esc_html_e(the_field('home_page_service_heading1'),'erpcars');?>
							<?php } else {?>
								<?php echo esc_html_e( 'Transport Vehicles', 'erpcars' ); ?>
							<?php }?>
						</a>
					</h3>

                    <p>
						<?php if(get_field('home_page_service_description1')!=''){ ?>
							<?php echo esc_html_e(the_field('home_page_service_description1'),'erpcars');?>
						<?php } else {?>
								<?php echo esc_html_e( 'Vehicles can be shipped in Containers or Ro/Ro. Our goal is to provide you with the service that suits you best at a 
													competitive price.', 'erpcars' ); ?>
						<?php }?>
				</p>

                </div>

                <div class="col-12 col-sm-12 col-lg-6 col-xl-6 transp_area">

            		<div class="transp_icon">
						<?php if(get_field('home_page_service_image2')!=''){ ?>
						
							<img src="<?php the_field('home_page_service_image2')?>" alt="transport_2 boats" />
							
						<?php } else {?>
						
							<img src="<?php echo get_stylesheet_directory_uri();?>/image/transport_2.png" alt="transport_2" />
						
						<?php }?>
					</div>

                    <h3>
						<a href="#">
							<?php if(get_field('home_page_service_heading2')!=''){ ?>
								<?php echo esc_html_e(the_field('home_page_service_heading2'),'erpcars');?>
							<?php } else {?>
								<?php echo esc_html_e( 'Transport Boats', 'erpcars' ); ?>
							<?php }?>
						</a>
					</h3>

                    <p>
						<?php if(get_field('home_page_service_description2')!=''){ ?>
							<?php echo esc_html_e(the_field('home_page_service_description2'),'erpcars');?>
						<?php } else {?>
								<?php echo esc_html_e( 'Boats can be shipped on trailers or cradles. Depending on the size of the boat special handling may be required.', 'erpcars' );?>
						<?php }?>
					</p>

                </div>

                <div class="col-12 col-sm-12 col-lg-6 col-xl-6 transp_area">

            		<div class="transp_icon">
						<?php if(get_field('home_page_service_image3')!=''){ ?>
						
							<img src="<?php the_field('home_page_service_image3')?>" alt="transport_3 boats" />
							
						<?php } else {?>
						
							<img src="<?php echo get_stylesheet_directory_uri();?>/image/transport_3.png" alt="transport_3" />
						
						<?php }?>
					</div>

                    <h3>
						<a href="#">
							<?php if(get_field('home_page_service_heading3')!=''){ ?>
								<?php echo esc_html_e(the_field('home_page_service_heading3'),'erpcars');?>
							<?php } else {?>
								<?php echo esc_html_e( 'Transport Boats', 'erpcars' ); ?>
							<?php }?>
						</a>
					</h3>

                    <p>
						<?php if(get_field('home_page_service_description3')!=''){ ?>
							<?php echo esc_html_e(the_field('home_page_service_description3'),'erpcars');?>
						<?php } else {?>
								<?php echo esc_html_e( 'We ship various commodities. Unfortunately we are unable to handle live animals, frozen food, metal or plastic scrap.', 'erpcars' );?>
						<?php }?>
					</p>

                </div>

                <div class="col-12 col-sm-12 col-lg-6 col-xl-6 transp_area">

            		<div class="transp_icon">
						<?php if(get_field('home_page_service_image4')!=''){ ?>
						
							<img src="<?php the_field('home_page_service_image4')?>" alt="transport_4 boats" />
							
						<?php } else {?>
						
							<img src="<?php echo get_stylesheet_directory_uri();?>/image/transport_4.png" alt="transport_4" />
						
						<?php }?>
					</div>

                    <h3>
						<a href="#">
							<?php if(get_field('home_page_service_heading4')!=''){ ?>
								<?php echo esc_html_e(the_field('home_page_service_heading4'),'erpcars');?>
							<?php } else {?>
								<?php echo esc_html_e( 'Household Goods', 'erpcars' ); ?>
							<?php }?>
						</a>
					</h3>

                    <p>
						<?php if(get_field('home_page_service_description4')!=''){ ?>
							<?php echo esc_html_e(the_field('home_page_service_description4'),'erpcars');?>
						<?php } else {?>
								<?php echo esc_html_e( 'Personal effects can be shipped in a full or in a shared container. Shipments in a shared container must be properly
												   packed for export.', 'erpcars' );?>
						<?php }?>
					</p>

                </div>

                <div class="clearfix"></div>

            </div>

        </div>

    </div>

</section>







<section class="erp_service_sec">

	<div class="container">

    	<div class="row">

        	<h2>
				<?php if(get_field('home_our_service_main_heading')!=''){ ?>
					<?php echo esc_html_e(the_field('home_our_service_main_heading'),'erpcars');?>
				<?php } else {?>
					<?php echo esc_html_e( 'our services', 'erpcars' ); ?>
				<?php }?>
			</h2>
			
			

            <div class="col-12 col-sm-12 col-lg-6 col-xl-6 row erp_service_area">
				<?php if(get_field('home_our_service_image1')!=''){ ?>
						<img src="<?php the_field('home_our_service_image1')?>" alt=" " />
				<?php } else {?>
						<img src="<?php echo get_stylesheet_directory_uri();?>/image/service_1.png" alt="" />
				<?php }?>
				
             <span>
			  	
					<?php if(get_field('home_our_service_heading1')!=''){ ?>
						<?php echo esc_html_e(the_field('home_our_service_heading1'),'erpcars');?>
					<?php } else {?>
						<?php echo esc_html_e( 'Door to door', 'erpcars' ); ?>
					<?php }?>
			  	
			</span>

            </div>

            <div class="col-12 col-sm-12 col-lg-6 col-xl-6 row erp_service_area">

                <div class="erp_service_area_right">
					
					<?php if(get_field('home_our_service_image2')!=''){ ?>
						<img src="<?php the_field('home_our_service_image2')?>" alt=" " />
					<?php } else {?>
								<img src="<?php echo get_stylesheet_directory_uri();?>/image/service_2.png" alt="" />
					<?php }?>
						
				 	<span>
						
							<?php if(get_field('home_our_service_heading2')!=''){ ?>
								<?php echo esc_html_e(the_field('home_our_service_heading2'),'erpcars');?>
							<?php } else {?>
								<?php echo esc_html_e( 'Door to depot', 'erpcars' ); ?>
							<?php }?>
					
					</span>
				</div>

            </div>

            <div class="col-12 col-sm-12 col-lg-6 col-xl-6 row erp_service_area">
			
				<?php if(get_field('home_our_service_image3')!=''){ ?>
						<img src="<?php the_field('home_our_service_image3')?>" alt=" " />
					<?php } else {?>
						<img src="<?php echo get_stylesheet_directory_uri();?>/image/service_3.png" alt="" />
					<?php }?>
						
				 	<span>
						
							<?php if(get_field('home_our_service_heading3')!=''){ ?>
								<?php echo esc_html_e(the_field('home_our_service_heading3'),'erpcars');?>
							<?php } else {?>
								<?php echo esc_html_e( 'Express & Economy Air Freight', 'erpcars' ); ?>
							<?php }?>
						
					</span>

            </div>

            <div class="col-12 col-sm-12 col-lg-6 col-xl-6 row erp_service_area">

                <div class="erp_service_area_right">
				
					<?php if(get_field('home_our_service_image4')!=''){ ?>
						<img src="<?php the_field('home_our_service_image4')?>" alt=" " />
					<?php } else {?>
						<img src="<?php echo get_stylesheet_directory_uri();?>/image/service_4.png" alt="" />
					<?php }?>
						
				 	<span>
						
							<?php if(get_field('home_our_service_heading4')!=''){ ?>
								<?php echo esc_html_e(the_field('home_our_service_heading4'),'erpcars');?>
							<?php } else {?>
								<?php echo esc_html_e( 'Storage services', 'erpcars' ); ?>
							<?php }?>
						
					</span>
					
				</div>

            </div>

        </div>

    </div>

</section>







<section class="benefit_escrw_sec">

	<div class="container">



    	<div class="row">

        	<div class="col-12 col-sm-12 col-lg-6 col-xl-6 nopad benefit_escrw_left">

            	<h2>
					<?php if(get_field('benefit_of_service_main_heading')!=''){ ?>
							<?php echo esc_html_e(the_field('benefit_of_service_main_heading'),'erpcars');?>
					<?php } else {?>
							<?php echo esc_html_e( 'The benefits of Escrow services', 'erpcars' ); ?>
					<?php }?>
				</h2>

                <p>
				<?php if(get_field('benefit_of_service_main_description')!=''){ ?>
						<?php echo esc_html_e(the_field('benefit_of_service_main_description'),'erpcars');?>
				<?php } else {?>
						<?php echo esc_html_e( 'We have the infrastructure to conduct authorized pre-buy inspection on all types of vehicles.Buying and selling online has never been
										easier or more secure. ERP Cars Trading&apos;s simple step process ensures money transfer and delivery with every sale.', 'erpcars' ); ?>
				<?php }?>
				
				</p>

            </div>

            <div class="col-12 col-sm-12 col-lg-6 col-xl-6 nopad benefit_escrw_right">
<!--First Point-->
			<?php if(get_field('benefit_of_service_point1_heading')!='' && get_field('benefit_of_service_point1_description')!='' ){ ?>
            	<div class="benefit_escrw_num">1</div>

                <div class="benefit_escrw_txt">

					<h3>
						<?php if(get_field('benefit_of_service_point1_heading')!=''){ ?>
								<?php echo esc_html_e(the_field('benefit_of_service_point1_heading'),'erpcars');?>
						<?php } else {?>
								<?php echo esc_html_e( 'Peace of mind for Sellers', 'erpcars' ); ?>
						<?php }?>
					</h3>

					<p>
						<?php if(get_field('benefit_of_service_point1_description')!=''){ ?>
								<?php echo esc_html_e(the_field('benefit_of_service_point1_description'),'erpcars');?>
						<?php } else {?>
								<?php echo esc_html_e('The Buyer sends the agreed upon payment to ERP Cars Trading. After verifying funds, we send the vehicle to the Buyer. Protected
												  from fraudulent checks and money order scams, the Seller has peace of mind knowing funds are behind the ERP Cars Trading
												  shield.','erpcars' ); ?>
						<?php }?>
					
					</p>
					
                </div>
				<?php } ?>
<!--Second  Point-->
				<?php if(get_field('benefit_of_service_point2_heading')!='' && get_field('benefit_of_service_point2_description')!='' ){ ?>
                <div class="benefit_escrw_num benefit_escrw_num_2">2</div>

                <div class="benefit_escrw_txt benefit_escrw_num_2">
					<h3>
						<?php if(get_field('benefit_of_service_point2_heading')!=''){ ?>
								<?php echo esc_html_e(the_field('benefit_of_service_point2_heading'),'erpcars');?>
						<?php } else {?>
								<?php echo esc_html_e( 'Confidence for Buyers', 'erpcars' ); ?>
						<?php }?>
					</h3>

					<p>
						<?php if(get_field('benefit_of_service_point2_description')!=''){ ?>
								<?php echo esc_html_e(the_field('benefit_of_service_point2_description'),'erpcars');?>
						<?php } else {?>
								<?php echo esc_html_e('We do not release the money to the Seller until the vehicle has been received and accepted by the Buyer. This provides online
												  Buyers the opportunity to inspect the vehicle before Sellers are paid.','erpcars' ); ?>
						<?php }?>
					
					</p>

                </div>
				<?php } ?>
<!--Third Point-->				
				<?php if(get_field('benefit_of_service_point3_heading')!='' && get_field('benefit_of_service_point3_description')!='' ){ ?>
				<div class="benefit_escrw_num benefit_escrw_num_2">3</div>
			
                <div class="benefit_escrw_txt benefit_escrw_num_2">

                	
					<h3>
						<?php if(get_field('benefit_of_service_point3_heading')!=''){ ?>
								<?php echo esc_html_e(the_field('benefit_of_service_point3_heading'),'erpcars');?>
						<?php } else {?>
								<?php echo esc_html_e( ' ', 'erpcars' ); ?>
						<?php }?>
					</h3>

					<p>
						<?php if(get_field('benefit_of_service_point3_description')!=''){ ?>
								<?php echo esc_html_e(the_field('benefit_of_service_point3_description'),'erpcars');?>
						<?php } else {?>
								<?php echo esc_html_e(' ','erpcars' ); ?>
						<?php }?>
					
					</p>
					
					
					
                </div>
				
				<?php } ?>
                <div class="clearfix"></div>

            </div>

        </div>

    </div>

</section>







<section class="erp_contact_sec">

	<div class="container">

    	<div class="row">

        	<h2>contact</h2>
			
            <div class="col-12 col-sm-124 col-lg-4 col-xl-4 erp_contact_area">

            	<ul><li>
						<i class="fa fa-map-marker" aria-hidden="true"></i>
						<span>
						<?php if(get_field('company_address_1')!=''){ ?>
							<?php echo esc_html_e(the_field('company_address_1'),'erpcars');?>
						<?php } else {?>
							<?php echo esc_html_e('Dumfries Enterprise Park, Tinwald, Dumfries, DG1 3SJ, United Kingdom','erpcars' ); ?>
						<?php }?>
						</span>
				</li></ul>

            </div>
			
			
			
            <div class="col-12 col-sm-12 col-lg-4 col-xl-4 erp_contact_area">

            	<ul><li>
						<i class="fa fa-map-marker" aria-hidden="true"></i>
						<span>
							<?php if(get_field('company_address_2')!=''){ ?>
								<?php echo esc_html_e(the_field('company_address_2'),'erpcars');?>
							<?php } else {?>
								<?php echo esc_html_e('','erpcars' ); ?>
							<?php }?>
						</span>
				</li></ul>

            </div>
			
			
			
            <div class="col-12 col-sm-12 col-lg-4 col-xl-4 erp_contact_area">
            	<ul><li>
						<i class="fa fa-map-marker" aria-hidden="true"></i>
						<span>
							<?php if(get_field('company_address_3')!=''){ ?>
								<?php echo esc_html_e(the_field('company_address_3'),'erpcars');?>
							<?php } else {?>
								<?php echo esc_html_e('','erpcars' ); ?>
							<?php }?>
						</span>
				</li></ul>
            </div>
			
            <div class="erp_contact_txt">COMPANY NUMBER: 
					<span>
						
							<?php if(get_field('company_contact_number')!=''){ ?>
							<a href="tel:<?php the_field('company_contact_number')?>">
								<?php echo esc_html_e(the_field('company_contact_number'),'erpcars');?>
							</a>
							<?php } else {?>
								<a href="SC521788"><?php echo esc_html_e('SC521788','erpcars' ); ?>	</a>
							<?php }?>
					
					</span>
			</div>
			<?php if(get_field('company_others_contact_number')!=''){ ?>
			<div class="erp_contact_txt">COMPANY OTHER NUMBER: 
					<span>
						<a href="tel:<?php the_field('company_others_contact_number')?>"><?php echo esc_html_e(the_field('company_others_contact_number'),'erpcars');?></a>
					</span>
			</div>
			<?php } ?>

            <div class="erp_contact_eml">Email: 
			
				<?php if(get_field('company_email')!=''){ ?>
						<span>
							<a href="mailto:<?php the_field('company_email')?>">
								<?php echo esc_html_e(the_field('company_email'),'erpcars');?>
							</a>
						</span>
				<?php } else {?>
						<span>
							<a href="mailto:support@erpcarstrading.com"><?php echo esc_html_e('support@erpcarstrading.com','erpcars' ); ?>	</a>
						</span>
				<?php }?>
			
			</div>

        </div>

    </div>

</section>


<?php get_footer();?>