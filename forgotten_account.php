<?php 
/*
*Template Name: Forgotten account? 
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
			<div id="forget_password" class="foget_password">
					<h3><?php echo esc_html_e("Find Your Account",'erpcars');?></h3>
					<div class="erp_divider"></div>
					 <p>
							<?php echo esc_html_e("Enter your username or email to reset your password.",'erpcars');?>
					 </p>
					<form method="post" action="<?php echo site_url('wp-login.php?action=lostpassword', 'login_post') ?>" class="wp-user-form">
						<div class="username">
							<label for="user_login" class="hide"><?php _e('Username or Email'); ?>: </label>
							<input type="text" name="user_login" value="" size="20" id="user_login" tabindex="1001" />
						</div>
						<div class="login_fields">
							<?php do_action('login_form', 'resetpass'); ?>
							<input type="submit" name="user-submit" value="<?php _e('Reset my password'); ?>" class="user-submit" tabindex="1002" />
							<?php 
							if(isset($_GET['reset']))
							{
								$reset = $_GET['reset']; 
								if($reset == true) 
								{ 
									echo '<p>';
										echo esc_html_e('A message will be sent to your email address.'); 
									echo '</p>';
								}
							}
							?>
							<input type="hidden" name="redirect_to" value="<?php echo esc_attr($_SERVER['REQUEST_URI']); ?>?reset=true" />
							<input type="hidden" name="user-cookie" value="1" />
						</div>
					</form>
				</div>
		</div>
	</div>
</section>
<?php get_footer(); ?>