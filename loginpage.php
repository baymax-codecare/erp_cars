<?php 
/*
* Template Name: Login
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

<section>
	<div class="container">
		<div class="row">

				<div id="login_form">

	<?php global $user_ID, $user_identity; 
		if (!$user_ID) { 
	?>

	
	<div class="tab_container_login">
		<div id="tab1_login" class="tab_content_login">

			
			<h3>Have an account?</h3>
			<p>Log in or sign up! It&rsquo;s fast &amp; <em>free!</em></p>

			<form method="post" action="<?php bloginfo('url') ?>/wp-login.php" class="wp-user-form">
				<div class="username">
					<label for="user_login"><?php _e('Username'); ?>: </label>
					<input type="text" name="log" value="<?php echo esc_attr(stripslashes($user_login)); ?>" size="20" id="user_login" tabindex="11" />
				</div>
				<div class="password">
					<label for="user_pass"><?php _e('Password'); ?>: </label>
					<input type="password" name="pwd" value="" size="20" id="user_pass" tabindex="12" />
				</div>
				<div class="login_fields">
					<div class="rememberme">
						<label for="rememberme">
							<input type="checkbox" name="rememberme" value="forever" checked="checked" id="rememberme" tabindex="13" /> <?php echo esc_html_e('Remember me','erpcars')?>
						</label>
					</div>
					
					<div class="forgot_password">
						<a href ="http://henwoodtrans.com/forgotten-account/"><?php echo esc_html_e('Forgotten password?','erpcars')?></a>
					</div>
					
					<?php do_action('login_form'); ?>
					<input type="submit" name="user-submit" value="<?php _e('Login'); ?>" tabindex="14" class="user-submit" />
					<?php 
						if (isset($_GET['login_failed'])){
							//print error message
							echo '<p class="login_error_text" id="error_id_password_text">Username and Password does not match with our database</p>';
						}
						
						if (isset($_GET['login_empty'])){
							//print error message
							echo '<p class="login_error_text" id="empty_id_password_text">Username or Password are empty.</p>';
						}
						
					?>
					<input type="hidden" name="redirect_to" value="<?php echo esc_attr($_SERVER['REQUEST_URI']); ?>" />
					<input type="hidden" name="user-cookie" value="1" />
				</div>
			</form>
		</div>
	</div>

	<?php } else { // is logged in ?>

	<div class="sidebox">
		<h3>Welcome, <?php echo $user_identity; ?></h3>
		<div class="usericon">
			<?php global $userdata; echo get_avatar($userdata->ID, 60); ?>

		</div>
		<div class="userinfo">
			<p>You&rsquo;re logged in as <strong><?php echo $user_identity; ?></strong></p>
			<p>
				<a href="<?php echo wp_logout_url('index.php'); ?>">Log out</a> | 
				<?php if (current_user_can('manage_options')) { 
					echo '<a href="' . admin_url() . '">' . __('Admin  | ') . '</a>'; } else { 
					echo '<a href="http://henwoodtrans.com/my-account/">' . __('My account  | ') . '</a>'; } 
				?>
				<a href="<?php echo home_url( '/' ); ?>">Go to home</a>
			</p>
		</div>
	</div>

	<?php } ?>

</div>

		</div>
	</div>
</section>
<?php get_footer();?>