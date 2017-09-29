<?php if ($this->session->flashdata('reg_success_msg') != "") { ?>
<div class="alert alert-success alert-dismissable" style="background-color: #00a65a !important;border-color: #008d4c;border-radius: 3px;padding-right: 35px;padding: 15px;margin-bottom: 20px;border: 1px solid transparent;">
	<a href="#" class="close" data-dismiss="alert" aria-label="close" style="color: #000;opacity: .2;position: relative;top: -2px;right: 0px;float: right;font-size: 21px;font-weight: 700;line-height: 1;color: #000;text-shadow: 0 1px 0 #fff;filter: alpha(opacity=20);opacity: .2;">&times;</a>
	<strong>Successfully</strong> <?php echo $this->session->flashdata('reg_success_msg'); ?>
</div>
<?php } ?>
<?php if ($this->session->flashdata('error_msg') != "") { ?>
<div class="alert alert-warning alert-dismissable" style="background-color: #00a65a !important;border-color: #008d4c;border-radius: 3px;padding-right: 35px;padding: 15px;margin-bottom: 20px;border: 1px solid transparent;">
	<a href="#" class="close" data-dismiss="alert" aria-label="close" style="color: #000;opacity: .2;position: relative;top: -2px;right: 0px;float: right;font-size: 21px;font-weight: 700;line-height: 1;color: #000;text-shadow: 0 1px 0 #fff;filter: alpha(opacity=20);opacity: .2;">&times;</a>
	<strong style="color:#000;">Warning!</strong> <?php echo $this->session->flashdata('error_msg'); ?>
</div>
<?php } ?>
<!-- Content
	================================================== -->
	<div class="fullwidth-box padding-bottom-35" id="services">
		<div class="container">
			<h3 class="headline centered margin-bottom-45 padding-top-35">Inspire Sports Group :: Club Registration</h3>
			<div class="row">

				<form action="<?php echo site_url();?>/netball/clubRegistrationFormdata" method="post" id="club_reg" class="sign-in-form" enctype="multipart/form-data">
					<input type="hidden" name="value_type" value="club">
					<div class="col-md-4 col-md-offset-1">	
						<h4 class="headline centered margin-bottom-15 padding-top-25">Login Details</h4>

						<p class="form-row form-row-wide">
							<label for="email2">Email Address:
								<i class="im im-icon-Mail"></i>
								<input type="email" class="input-text" name="email" id="email2"  required/>
							</label>
						</p>

						<p class="form-row form-row-wide">
							<label for="password">Password:
								<i class="im im-icon-Lock-2"></i>
								<input class="input-text" id="password" name="password" type="password" pattern="^\S{6,}$" onchange="this.setCustomValidity(this.validity.patternMismatch ? 'Must have at least 6 characters' : ''); if(this.checkValidity()) form.password_two.pattern = this.value;" placeholder="Password" required/>
							</label>
						</p>



						<p class="form-row form-row-wide">
							<label for="password_two">Confirm Password:
								<i class="im im-icon-Lock-2"></i>
								<input class="input-text" title="password do not match" id="password_two" name="password_two" type="password" pattern="^\S{6,}$" onchange="this.setCustomValidity(this.validity.patternMismatch ? 'Please enter the same Password as above' : '');" placeholder="Verify Password" required/>
							</label>
						</p>
						<h4 class="headline centered margin-bottom-15 padding-top-25">Club Details</h4>
						<p class="form-row form-row-wide">
							<label for="username3">Club Name:
								<i class="im im-icon-Tennis-Ball"></i>
								<input type="text" class="input-text" name="clubname" id="clubname" required/>
							</label>
						</p>
						<p class="form-row form-row-wide">
							<label for="username4">Association Afiliated With:
								<i class="im im-icon-Data-Yes"></i>
								<input type="text" class="input-text" name="association" id="association"  required/>
							</label>
						</p>
						<!-- Widget -->
						<div class="col-md-12">
						<p class="col-md-6 ">
							<label class=""> Upload Image: </label>
						</p>	
						<div class="col-md-6 change-photo-btn">
							<div class="photoUpload">
								<span><i class="fa fa-upload"></i> Upload Photo</span>
								<input type="file" name="image" class="upload">
							</div>
						</div>
						</div>		
 						<!-- Widget / End --> 
					</div>


					<div class="col-md-4 col-md-offset-2">
						<h4 class="headline centered margin-bottom-15 padding-top-25">Treasurer Details</h4>
						<p class="form-row form-row-wide">
							<label for="username2">Username:
								<i class="im im-icon-Male"></i>
								<input type="text" class="input-text" name="username" id="username2" required/>
							</label>
						</p>

						<p class="form-row form-row-wide">
							<label for="dateofbirth">Stablishes Date:
								<i class="im im-icon-Calendar"></i>
								<input type="text" name="dateofbirth" id="booking-date" data-lang="en" data-large-mode="true" data-min-year="1800" data-max-year="2020">
							</label>
						</p>

						<p class="form-row form-row-wide">
							<label for="address">Address:
								<i class="im im-icon-Location-2"></i>
								<input type="text" name="address" id="address" placeholder="e.g. 964 School Street1 street2" required>
							</label>
						</p>
						<p class="form-row form-row-wide">
							<label for="city1">City:
								<i class="im im-icon-City-Hall"></i>
								<input type="text" class="input-text" name="city" id="city" required/>
							</label>
						</p>
						<p class="form-row form-row-wide">
							<label for="state">State:
								<i class="im im-icon-Globe"></i>
								<input type="text" class="input-text" name="state" id="state" required/>
							</label>
						</p>
						<p class="form-row form-row-wide">
							<label for="postcode">Postcode:
								<i class="im im-icon-Post-Office"></i>
								<input type="text" class="input-text" name="postcode" id="postcode"  required/>
							</label>
						</p>
						<p class="form-row form-row-wide">
							<label for="select1">Country</label>
							<select name="country" id="country" class="chosen-select-no-single"  required>
								<?php foreach ($countrylist as $country) { ?>
							    	<option value="<?php if (!empty($country->country_name)) echo $country->country_name; ?>"><?php if (!empty($country->country_name)) echo $country->country_name; ?></option>
								<?php } ?>
							</select>
						</p>
						<p class="form-row form-row-wide">
							<label for="phonenumber">Phone Number:
								<i class="im im-icon-Phone"></i>
								<input type="tel" name="phone" id="phone" type="text" required>
							</label>
						</p>
						<p class="form-row form-row-wide">
							<label for="mobilenumber">Mobile Number:
								<i class="im im-icon-Phone-4G"></i>
								<input type="tel" name="mobile" id="mobile" type="text" required>
							</label>
						</p>
					</div>

					<div class="clearfix"></div>
					<div class="col-md-12 text-center">
						<input type="submit" id="submit-action" class="button border fw margin-top-30 margin-bottom-20" name="register" value="Next" style="width: 10%" />
					</div>

				</form>
			</div>

		</div>
	</div>



	<script type="text/javascript">
    $(document).ready(function(){      
        $(document).on('click','#submit-action', function() {


        	email2 		= $('#email2').val();
        	password 	= $('#password').val();
        	clubname 	= $('#clubname').val();
        	association = $('#association').val();
        	username2 	= $('#username2').val();
        	dateofbirth = $('#booking-date').val();
        	address 	= $('#address').val();
        	city 		= $('#city').val();
        	state 		= $('#state').val();
        	postcode 	= $('#postcode').val();
        	country 	= $('#country').val();
        	phone 		= $('#phone').val();
        	mobile 		= $('#mobile').val();

        	if(email2 == '')
        		$('#email2').css("border-color", "red");
        	else
        		$('#email2').css("border-color", "green");
        	
        	if(password == '')
        		$('#password').css("border-color", "red");
        	else
        		$('#password').css("border-color", "green");
        	
        	if(clubname == '')
        		$('#clubname').css("border-color", "red");
        	else 
        		$('#clubname').css("border-color", "green");

        	if(association == '')
        		$('#association').css("border-color", "red");
        	else
        		$('#association').css("border-color", "green");


        	if(username2 == '')
        		$('#username2').css("border-color", "red");
        	else 
        		$('#username2').css("border-color", "green");


        	if(dateofbirth == '')
        		$('#booking-date').css("border-color", "red");
        	else
        		$('#booking-date').css("border-color", "green");


        	if(address == '')
        		$('#address').css("border-color", "red");
        	else
        		$('#address').css("border-color", "green");


        	if(city == '')
        		$('#city').css("border-color", "red");
        	else
        		$('#city').css("border-color", "green"); 


        	if(state == '')
        		$('#state').css("border-color", "red");
        	else
        		$('#state').css("border-color", "green");


        	if(postcode == '')
        		$('#postcode').css("border-color", "red");
        	else
        		$('#postcode').css("border-color", "green");


        	if(country == '')
        		$('#country').css("border-color", "red");
        	else 
        		$('#country').css("border-color", "green");

        	if(phone == '')
        		$('#phone').css("border-color", "red");
        	else
        		$('#phone').css("border-color", "green");

        	if(mobile == '')
        		$('#mobile').css("border-color", "red");
        	else 
        		$('#mobile').css("border-color", "green");
        	

        	if( email2 != '' && password != '' && clubname != '' && association != '' && username != '' && dateofbirth != '' &&
        		address != '' && city != '' && state != '' && postcode != '' && country != '' && phone != '' && mobile != '') {
        		$('#club_reg').submit();
        	}

        });
  });
</script>