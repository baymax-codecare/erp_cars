<?php
/**
 * The template for displaying 404 pages (not found).
 *
 * @package storefront
 */

get_header(); ?>

<section class="erp_breadcrumb">
	<div class="container">
    	<div class="row">
        	<p><?php byc_get_current_page_name(); ?> <span><?php byc_get_breadcrumb(); ?> >> 404 not found</span></p>
        </div>
    </div>
</section>

	
	
	<section class="erp_not_found" id="erp_not_found_page">

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
			
			<div class="col-md-2 col-lg-2 col-xl-2"> </div>

            <div class="col-12 col-sm-12 col-lg-7 col-xl-7">
            	
				<div class="page-content">
					<img src="<?php echo get_stylesheet_directory_uri();?>/image/not_found.png" alt="not-found-image" />			
					<header class="page-header">
						<h1 class="page-title"><?php esc_html_e( 'Oops! That page can&rsquo;t be found.', 'storefront' ); ?></h1>
					</header><!-- .page-header -->

					<p><?php esc_html_e( 'Nothing was found at this location. Try searching, or check out the links below.', 'storefront' ); ?></p>
					
					
					<?php
					echo '<section aria-label="' . esc_html__( 'Search', 'storefront' ) . '">';

					if ( storefront_is_woocommerce_activated() ) {
						/*the_widget( 'WC_Widget_Product_Search' );*/
						?>
						<form action="<?php echo home_url();?>" role="search" method="get" id="search_box">
                                                <input type="search" class="input_search searchbar" id="erp_search" placeholder="Search" value="" name="s" title="Search for:">
                                                <button class="erp_search_btn btn"> <i class="fa fa-search"></i> </button>
                                            </form>
						<?php
					} else {
						get_search_form();
					}

					echo '</section>';

					if ( storefront_is_woocommerce_activated() ) {

						echo '<div class="fourohfour-columns-2">';

							echo '<section class="col-1" aria-label="' . esc_html__( 'Promoted Products', 'storefront' ) . '">';

								storefront_promoted_products();

							echo '</section>';

							echo '<nav class="col-2" aria-label="' . esc_html__( 'Product Categories', 'storefront' ) . '">';

								echo '<h2>' . esc_html__( 'Product Categories', 'storefront' ) . '</h2>';

								the_widget(
									'WC_Widget_Product_Categories', array(
										'count' => 1,
									)
								);

							echo '</nav>';

						echo '</div>';

						
					}
					?>
					
					
					
				</div>
                

                <div class="clearfix">
			</div>

            </div>

        </div>

    </div>

</section>
	
			
<?php
get_footer();
