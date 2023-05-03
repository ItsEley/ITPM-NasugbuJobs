<form name="frm" action="app/create-account.php" method="POST" autocomplete="off">
		<div class="login-box-wrapper">
									
		<div class="modal-header">

		<h3 class="modal-title text-center">Join Nasugbu Jobs, Kickstart your carreer</h3><br>
		<h4 class="modal-title text-center">CREATE YOUR ACCOUNT NOW!</h4>
		</div>

		<div class="modal-body">
																		
		<div class="row gap-20">
													

														

														
		<div class="col-sm-12 col-md-12">
		<?php
		include 'constants/check_reply.php';	
										?>

		<div class="form-group"> 
		<label>First Name</label>
		<input class="form-control" placeholder="Enter your first name" name="fname" required type="text"> 
		</div>
														
		</div>

		<div class="col-sm-12 col-md-12">

		<div class="form-group"> 
		<label>Last Name</label>
		<input class="form-control" placeholder="Enter your last name" name="lname" required type="text"> 
		</div>
														
		</div>
														
		<div class="col-sm-12 col-md-12">

		<div class="form-group"> 
		<label>Email Address</label>
		<input class="form-control" placeholder="Enter your email address" name="email" required type="text"> 
		</div>
														
		</div>
														
		<div class="col-sm-12 col-md-12">
														
		<div class="form-group"> 
		<label>Password</label>
		<input class="form-control" placeholder="Min 8 and Max 20 characters" name="password" required type="password"> 
		</div>
														
		</div>
														
		<div class="col-sm-12 col-md-12">
														
		<div class="form-group"> 
		<label>Password Confirmation</label>
		<input class="form-control" placeholder="Re-type password again" name="confirmpassword" required type="password"> 
		</div>
														
		</div>
														
		<input type="hidden" name="acctype" value="101">
														
														
		</div>

		</div>

		<div class="modal-footer text-center">
		<button  onclick="return val();" type="submit" name="reg_mode" class="btn btn-primary">SIGNUP</button>
		</div>
		<div class="modal-footer text-center">
		<p>By signing up, I have read and agreed to Terms of Use and Privacy Policy</p>
		</div>

												
		</div>
</form>