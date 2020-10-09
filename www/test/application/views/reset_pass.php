<form class = "login" id="login-form" method="POST" action = "<?php echo base_url();?>password/reset">
	<h2>Forgot password</h2>
	<p style="color:red;"><strong><?php echo $status ?></strong></p>
	<label for="email">Email: </label><br>
	<input type = "email" name = "email" class = "login-input" placeholder = "Please enter your email" required>

	<label for="Lastname">Last name(secret question): </label><br>
	<input type = "text" name = "Lastname" class = "login-input" placeholder = "Please enter your last name" required>
	
	<label for="password">New Password: </label><br>
	<input type = "password" name = "password" class = "login-input" placeholder="Please enter your new password" required>
	<br>
	<div class="submit-div">
		<input type="submit" class="submit-btn">
	</div>
	
</form>	
