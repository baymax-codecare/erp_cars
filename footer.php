<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package storefront
 */

?>


	<?php //do_action( 'storefront_before_footer' ); ?>
	
	<section class="erp_footer_nav">
		<div class="container">
			<div class="row">
				<?php
					$primarymenu = array(
						'theme_location'  => 'secondry',   // theme_location name from nav menu offunction.php file
						'menu'            => 'footer_menu',
						'container'       => ' ',
						'container_class' => ' ',
						'container_id'    => ' ',
						'menu_class'      => ' ',
						'menu_id'         => 'footer-menu',         //menu_name is menu id.
						'echo'            => true,
						'fallback_cb'     => 'wp_page_menu',
						'before'          => ' ',
						'after'           => ' ',
						'link_before'     => ' ',
						'link_after'      => ' ',								
						'items_wrap'      => '<ul id="%1$s" class="%2$s nav navbar-nav main-nav firstul">%3$s</ul>',
						'depth'           => 0,
					);			
					wp_nav_menu( $primarymenu );	
				?>

				<!--<ul>
					<li><a href="<?php //home_url(); ?>">Home</a></li>
					<li><a href="#">About us</a></li>
					<li><a href="#">Services</a></li>
					<li><a href="#">How it works</a></li>
					<li><a href="#">Contact</a></li>
					<li><a href="#">Register</a></li>
					<li><a href="#">My Account</a></li>
					<li><a href="#">Terms of Use</a></li>
					<li class="ftr_nav_last"><a href="#">Privacy Policy</a></li>
				</ul>-->
			</div>
		</div>
	</section>
	
	
	<footer class="erp_footer">
		<div class="container">
			<div class="row">
				<div class="col-12 col-sm-12 col-md-8 col-lg-8 col-xl-8">
					<p>Copyright &copy; 2023 HENWOOD TRANSPORT LTD All rights reserved. </p>
				</div>
				<div class="col-12 col-sm-12 col-md-4 col-lg-4 col-xl-4">
					<ul>
						<li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
						<li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
						<li><a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
						<li><a href="#"><i class="fa fa-google-plus" aria-hidden="true"></i></a></li>
					</ul>
				</div>
			</div>
		</div>
	</footer>


	
	<?php //do_action( 'storefront_after_footer' ); ?>

</div><!-- #page -->


<script src="<?php echo get_stylesheet_directory_uri(); ?>/js/bootstrap.min.js"></script>
<script src="<?php echo get_stylesheet_directory_uri(); ?>/js/jquery.min.js"></script>

<?php wp_footer(); ?>

</body>
</html>
