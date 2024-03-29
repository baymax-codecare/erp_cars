<?php 
/*
* Template Name: Register
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



<section class="erp_opn_acc_sec">
	<div class="container">
    	<div class="row">
        	<h2>Open an Account</h2>
            <p>Let the International Specialists take care of your shipping needs - so you can focus on growing your business globally.</p>
            <div class="col-12 col-sm-12 col-lg-6 col-xl-6">
            	<h3>ON-TIME DELIVERY</h3>
                <p>Relax. HENWOOD TRANSPORT LTD collects, clears through customs and delivers millions of shipments.</p>
            </div>
             <div class="col-12 col-sm-12 col-lg-6 col-xl-6">
            	<h3>EASE OF USE</h3>
                <p>Ship with our easy to use tools, worldwide coverage and transparent rates.</p>
            </div>
             <div class="col-12 col-sm-12 col-lg-6 col-xl-6">
            	<h3>SECURE NETWORK</h3>
                <p>Your shipment stays with HENWOOD TRANSPORT LTD from door-to-door giving you security and peace of mind.</p>
            </div>
             <div class="col-12 col-sm-12 col-lg-6 col-xl-6">
            	<h3>REAL-TIME TRACKING</h3>
                <p>Enjoy full visibility with real-time checkpoint and delivery details online.</p>
            </div>
        </div>
    </div>
</section>

<div class="erp_divider"></div>


<?php 
	//if(isset($_POST['erp_reg_sub']))
	if(isset($_POST['erp_reg_sub']) && !empty($_POST['opn_acc_login_eml']))
	{ 
			
		$user_details = array(	
		$fname 		= $_POST['open_acc_name'],
		$lname 		= $_POST['open_acc_sur'],			
  		$address	= $_POST['open_acc_adr'],
  		$country	= $_POST['open_acc_count'],
		$city		= $_POST['open_acc_cty'],
		$postalcode	= $_POST['open_acc_post'],
		$seller_buyer		= $_POST['erc_acc_opt'],
		$seller_buyer_email	= $_POST['open_buyer_acc'],
		$cont_phone = $_POST['opn_acc_phn'],
		$cont_email = $_POST['opn_acc_eml'],          
		$user_login = $_POST['opn_acc_login_eml'],
		$password = $_POST['opn_acc_passw'],
		$con_password = $_POST['opn_acc_rst_passw'],
		);
			 
			if(!email_exists($_REQUEST['opn_acc_login_eml'])){	
				
				
 					$new_user_id=1;
 					$new_user_profile = wp_insert_user(array(
					'user_login'		=> $user_login,
					'user_pass'	 		=> $password,
					'user_email'		=> $user_login,
					'first_name'		=> $fname,
					'last_name'			=> $lname,
					'role' 				=> 'subscriber',
					'user_registered'	=> date('Y-m-d H:i:s'),
				));
			
			$the_user = get_user_by('email', $user_login);
			$current_user_id = $the_user->ID;
			
									 
						if(!empty($_REQUEST['open_acc_adr'])){
						update_user_meta( $current_user_id, 'erp_address', $_REQUEST['open_acc_adr'] );
						}
						
						if(!empty($_REQUEST['open_acc_count'])){
						update_user_meta( $current_user_id, 'erp_country', $_REQUEST['open_acc_count'] );
						}
						if(!empty($_REQUEST['open_acc_cty'])){
						update_user_meta( $current_user_id, 'erp_city', $_REQUEST['open_acc_cty'] );
						}
						
						
						if(!empty($_REQUEST['open_acc_post'])){
						update_user_meta( $current_user_id, 'erp_zipcode', $_REQUEST['open_acc_post'] );
						}
						if(!empty($_REQUEST['opn_acc_phn'])){
						update_user_meta( $current_user_id, 'erp_phone', $_REQUEST['opn_acc_phn'] );
						}
						if(!empty($_REQUEST['opn_acc_eml'])){
						update_user_meta( $current_user_id, 'erp_con_email', $_REQUEST['opn_acc_eml'] );
						}
						if(!empty($_REQUEST['erc_acc_opt'])){
						update_user_meta( $current_user_id, 'erp_seller_buyer', $_REQUEST['erc_acc_opt'] );
						}
						if(!empty($_REQUEST['open_buyer_acc'])){
						update_user_meta( $current_user_id, 'erp_seller_buyer_email', $_REQUEST['open_buyer_acc'] );
						}
						if(!empty($_REQUEST['opn_acc_passw'])){
						update_user_meta( $current_user_id, 'erp_password', $_REQUEST['opn_acc_passw'] );
						}
						if(!empty($_REQUEST['opn_acc_rst_passw'])){
						update_user_meta( $current_user_id, 'erp_confirm_password', $_REQUEST['opn_acc_rst_passw'] );
						}
						
					if ( ! is_wp_error( $new_user_profile ) ) {
   						// echo "User created. Your user id is: ". $user_login;
						 echo '<script type="text/javascript">alert("You are registered with us, your user id is:: ' . $user_login . '")</script>';
					}	
						add_user_meta($new_user_id,'_new_user_details',$new_user_profile);
			}
			else
			{
				 echo '<script type="text/javascript">alert("Already registered with ' . $user_login . '")</script>';
			}
			
			
			
		}
		
		
?>

<section class="erp_opn_acc_frm">
	<div class="container">
    	<div class="row">
        	<h3>Complete the form below to create an account</h3>
            <form action="" method="post" name="opn_acc_frm" id="opn_acc_frm" onsubmit="return passwordChecker();">
            	<div class="opn_acc_frm_left">
                	<h3>User Details:</h3>
                    <input type="text" name="open_acc_name" id="open_acc_name" placeholder="First Name*" autofocus required/>
                    <input type="text" name="open_acc_sur" id="open_acc_sur" placeholder="Last Name*" required/>
                    <input type="text" name="open_acc_adr" id="open_acc_adr" placeholder="Address*" required/>
                    <input type="text" name="open_acc_cty" id="open_acc_cty" placeholder="City*" required/>
                    <input type="text" name="open_acc_count" id="open_acc_count" placeholder="Country*" required/>
                    <input type="text" name="open_acc_post" id="open_acc_post" placeholder="Zip code*" required/>
                    <h3>Seller's / Buyer's account (Email):</h3>
                    <input type="email" name="open_buyer_acc" id="open_buyer_acc" placeholder="Email" />
                    <span>I am the:</span>
                    <select name="erc_acc_opt" id="erc_acc_opt" required>
                    	<option value="seller">Seller</option>
                        <option value="buyer">Buyer</option>
                    </select><br />
                    
                   
                    <div class="clearfix"></div>
                </div>
                <div class="opn_acc_frm_left">
                	<h3>Contact Details:</h3>
                    <input type="text" name="opn_acc_phn" id="opn_acc_phn" placeholder="Phone Number*" required/>
                    <input type="email" name="opn_acc_eml" id="opn_acc_eml" placeholder="Email*" required/>
                    <p id="opn_acc_eml_txt">We respect your privacy and will not share your information with anyone. <a href="#">Read More...</a></p>
                    <h3>Login Details:</h3>
                    <input type="email" name="opn_acc_login_eml" id="opn_acc_login_eml" placeholder="Email*" required/>
                    <input type="password" name="opn_acc_passw" id="opn_acc_passw" placeholder="Password*"  pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="Must contain one capital letter, one small letter, one digit and minimum 8 character" minlength="8" maxlength="40" onkeyup="check();" required/>
					 <p id="password_contain"> [Must contain 1 capital letter, 1 small letter, 1 digit and <br /> minimum 8 character.] </p>
					  <span id="letter" class="invalid byc_password_correct"></span>
                    <input type="password" name="opn_acc_rst_passw" id="opn_acc_rst_passw" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="Must contain one capital letter, one small letter, one digit and minimum 8 character" placeholder="Confirm Password*"  minlength="8" maxlength="40" required/>
					<p id="password_contain"> [Confirm password must be same as password field] </p>
					<span id='message'></span>
                    <div class="clearfix"></div>
                </div>
				<input type="checkbox" name="erp_accpt_tnc" id="erp_accpt_tnc" value="accept" required/>
                    <span id="accpt_tnc">I accept the <a href="#">Terms and Conditions</a></span>
                 <input type="submit" name="erp_reg_sub" id="erp_reg_sub" value="Register Account" >
            </form>
			
        </div>
    </div>
</section>


<script type="text/javascript"> 

function passwordChecker() 
{

	var password = document.getElementById("opn_acc_passw").value;
	var confirm_password = document.getElementById("opn_acc_rst_passw").value;
	
	if(password != confirm_password)
	{
		alert('Password and Confirm password are not same');
		return false;
	}else{
		return true;
		
	}
}
</script>

<script>
var myInput = document.getElementById("opn_acc_passw");
var letter = document.getElementById("letter");

// When the user clicks on the password field, show the message box
myInput.oninput = function() {
  document.getElementById("letter").style.display = "block";
}

// When the user starts to type something inside the password field
myInput.onkeyup = function() {
  // Validate lowercase letters
  var input1 = myInput.value.match(/[a-z]/g);
  var input2 = myInput.value.match(/[A-Z]/g);
  var input3 = myInput.value.match(/[0-9]/g);
  var input4 = myInput.value.length >= 8;
  
  if(input1 && input2 && input3 && input4) {  
    letter.classList.remove("invalid");
    letter.classList.add("valid");
    
  } else {
    letter.classList.remove("valid");
    letter.classList.add("invalid");
  }

}


</script>

<?php get_footer(); ?>