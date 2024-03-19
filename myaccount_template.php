<?php 
/*
* Template Name: My account
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
            	<div class="erp_sidebar my_acc_sidebar">
                    <h3>Track Shipments</h3>
                    <p>Track your shipment(s) movements around the world at any time.</p>
                    <form action="<?php echo get_page_link(245);?>" method="post" name="erp_track" id="erp_track">
                        <p>Tracking Number:</p>
                        <input type="text" name="erp_track_num" id="erp_track_num" required/>
                        <label class="erp_track_box">
                            <input type="checkbox" name="erp_trck_agree" id="erp_trck_agree" value="agree" required/><span>By selecting the Track button, I agree to the Terms and Conditions.</span>
                        </label>
                        <button type="submit" class="btn track_btn" name="tracking_button">Track</button>
                     </form>
                 </div>
             </div>
            
            <div class="col-12 col-sm-12 col-lg-9 col-xl-9">
			 <?php 
				global $user_identity;
				global $userdata;
				$current_user_id = get_current_user_id();
				//echo 'Current user id = '.$current_user_id;
				$user_info = get_userdata($current_user_id);
					
				if($current_user_id==0)
				{
				?>
					<div class="my_acct_error">
						<p> You are not logged in.</p>
						<p> Please login if you have account with us? <a href="http://henwoodtrans.com/log-in/"> Login </a> </p>
						<p> Create an accout. <a href="http://henwoodtrans.com/register/">Create an accout</a></p> 
					</div>
				<?php }
				else
				{
					$username  			= $user_info->user_login;
					$first_name			= $user_info->first_name;
					$last_name 			= $user_info->last_name;
					$address   			= $user_info->erp_address;
					$country			= $user_info->erp_country;
					$city				= $user_info->erp_city;
					$zipcode			= $user_info->erp_zipcode;	
					$phone 				= $user_info->erp_phone;
					$contact_email		= $user_info->erp_con_email;
					$seller_buyer		= $user_info->erp_seller_buyer;
					$seller_buyer_email	= $user_info->erp_seller_buyer_email;
			?>
				<fieldset class="my_acc_user_dtl">
                    <legend>User Details:</legend>
					<table class="myacct_details">
						<tr>
							<th class="myacct_details_heading"><p>First Name</p> </th>
							<td><?php echo $first_name?></td>
						</tr>
						<tr>
							<th class="myacct_details_heading"><p>Last Name</p> </th>
							<td><?php echo $last_name?> </td>
						</tr>
						<tr>
							<th class="myacct_details_heading"><p>Address</p> </th>
							<td><?php echo $address?> </td>
						</tr>
						<tr>
							<th class="myacct_details_heading"><p>City</p></th>
							<td><?php echo $city?> </td>
						</tr>
						<tr>
							<th class="myacct_details_heading"><p>Country</p></th>
							<td><?php echo $country?> </td>
						</tr>
						<tr>
							<th class="myacct_details_heading"><p>Zip Code</p></th>
							<td><?php echo $zipcode?> </td>
						</tr>
					</table>
                </fieldset>
                
                <fieldset class="my_acc_user_dtl">
                    <legend>Seller's / Buyer's Email:</legend>
					<table class="myacct_details">
						<tr>
							<th class="myacct_details_heading"><p>I am the:</p></th>
							<td><?php echo $seller_buyer?></td>
						</tr>
						<tr>
							<th class="myacct_details_heading"><p>Counterparty email</p></th>
							<td><?php echo $seller_buyer_email?></td>
						</tr>
					</table>
                   
                </fieldset>
                
                <fieldset class="my_acc_user_dtl">
                    <legend>Contact Details:</legend>
					<table class="myacct_details">
						<tr>
							<th class="myacct_details_heading"><p>Phone Number</p> </th>
							<td><?php echo $phone;?></td>
						</tr>
						<tr>
							<th class="myacct_details_heading"><p>Email</p></th>
							<td><?php echo $contact_email; ?></td>
						</tr>
					</table>
                </fieldset>
                
                <fieldset class="my_acc_user_dtl">
                    <legend>Login Details:</legend>
					<table class="myacct_details">
						<tr>
							<th class="myacct_details_heading"><p>Email address </p></th>
							<td><?php echo $username;?></td>
						</tr>
						
					</table>
                </fieldset>
<?php
	}
?>
               
            </div>
        </div>
    </div>
</section>




<?php get_footer(); ?>