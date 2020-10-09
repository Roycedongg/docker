<form class = "login" id="login-form" method="POST" action = "<?php echo base_url();?>login/login">
	<h2>Login</h2>
	<p style="color:red;"><strong><?php echo $status ?></strong></p>
	<label for="email">Email: </label><br>
	<input type = "email" name = "email" class = "login-input" placeholder = "Please enter your email" value = "<?php if (isset($_COOKIE['email'])) :
			echo $_COOKIE['email'];
			endif ?>"
	 required>
	
	<label for="password">Password: </label><br>
	<input type = "password" name = "password" class = "login-input" placeholder="Please enter your password" 
	value = "<?php if (isset($_COOKIE['password'])) :
			echo $_COOKIE['password'];
			endif ?>"
	required>

	<div >
		<input type="checkbox" checked name="remember">
		<label for="remember">Remember me</label>
	</div>
	
	<p class="ask">Forgot your password? <a href="<?php echo base_url() ?>password/" class="register-button">Reset</a></p>

	<p class="ask">Don't have an account? <a href="<?php echo base_url() ?>register/" class="register-button">sign up</a></p>
	<div class="submit-div">
		<input type="submit" class="submit-btn">
	</div>
	
</form>	
