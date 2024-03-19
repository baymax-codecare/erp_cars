<?php 
/*
* Template Name: Tracking deatils
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


<section class="byc_tracking_details">
	<div class="container">
		<div class="row">
			
			<div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-xs-12 tracking_heading">
				<h1> Tracking Details </h1>
			</div>
			
			<div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-xs-12">
				<h4>Tracking Number : <?php echo $_REQUEST["erp_track_num"]; ?>
					
					<?php /*if(isset($_POST['tracking_submit'])){
						$tracking_input_number = $_POST['erp_track_num'];
						echo $tracking_input_number;
					}
					*/?>
				</h4>
			</div>
		 
		</div>
		
		
		
		
		
		<div class="row" id="byc_shipping_status">

		<?php
			if(isset($_POST['tracking_button'])){
			$tracking_input_number = $_POST['erp_track_num'];
		?>
    
		<?php 
           	$params = array('post_type' => 'tracking', 'posts_per_page' => -1, 'post_status' => 'publish');
			$wc_query = new WP_Query($params);
		?>
		<?php if ($wc_query->have_posts()) : ?>
			<?php $i=0; 
				  while ($wc_query->have_posts()) : $wc_query->the_post(); 
			?>	
            <?php 
				$tracking_admin_number = get_the_title();
				
							/*echo '<pre>';
								echo 'Tracking Number= '.$tracking_admin_number;
							echo '</pre>';*/
				if($tracking_input_number == $tracking_admin_number){
			?>

			<div class="col-xl-4 col-lg-4 col-md-4 col-sm-12 col-xs-12 tracking_heading">
				<div class="tracking_product_thumbnail">
													
							<?php 
								$tracking_admin_number = get_the_title();
								if($tracking_input_number == $tracking_admin_number)
								{
							?>
                            
                            	<!-- Image -->
                                <img src="<?php echo get_stylesheet_directory_uri();?>/image/transport_1.png" alt="" />
							
                            <?php } ?>	

					
							
				</div>
			</div>
			
			<div class="col-xl-8 col-lg-8 col-md-8 col-sm-12 col-xs-12 tracking_heading">
				<h3> Current Status of your Shipment</h3>
				
				<div class="tracking_product_details">
					
						<?php 	the_content(); ?> 

				</div>
				
			</div>
            
            <?php $i++; } ?>
            
            
		<?php endwhile; ?>
        <?php 
			if($i == 0)
			{
				echo 'This tracking id does not match with our database, please recheck the tracking number and try again.';
			}
		?>
		<?php wp_reset_postdata(); ?>
        <?php else:  ?>
            <li> <?php _e( 'No Country' ); ?>  </li>
        <?php endif; ?>		

    <?php } ?>
    
    	</div>
		
		
	
		
	</div>
</section>
<?php get_footer();?>