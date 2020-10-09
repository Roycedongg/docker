<form class = "login" id="register-form" method="POST" action = "<?php echo base_url();?>register/register">
	<h2>Sign up</h2>
	<p style="color:red;"><strong><?php echo $status ?></strong></p>
	<label for="email">Email: </label><br>
	<input type = "email" name = "email" class = "login-input" placeholder = "Please enter your email" required>

	<label for="firstname">First name: </label><br>
	<input type = "text" name = "firstname" class = "login-input" placeholder = "Please enter your first name" required>

	<label for="lastname">Last name: </label><br>
	<input type = "text" name = "lastname" class = "login-input" placeholder = "Please enter your last name" required>
	
	<label for="password">Password: </label><br>
	<input type = "password" name = "password" class = "login-input" placeholder="Please enter your password" required>

	<label for="confirmPass">Confirm your password: </label><br>
	<input type = "password" name = "confirmPass" class = "login-input" placeholder="Please enter your password again" required>

	<p class="ask">Already have an account? <a href="<?php echo base_url() ?>login/" class="register-button">login</a></p>
	<div class="submit-div">
		<input type="submit" class="submit-btn">
	</div>
	
</form>	
