<form class = "login" id="profile" method="POST" action = "<?php echo base_url();?>profile/update">
	<h2>Profile</h2>
    <p>Hello, <?php echo $firstname ?>!</p>
	<p>Email: <?php echo $email ?></p><br>
	<div class="submit-div">
        <label for="firstname">Change new name: </label><br>
        <input type="text" class="login-input" name="firstname" placeholder="Place enter the new name">
		<input type="submit" class="submit-btn" value = "Update">
	</div>
</form>	
<div class="submit-div">
    <form class = "login" method="GET" action = "<?php echo base_url();?>post">
        <h3>Post Item</h3>
        <input type="submit" class="submit-btn" value = "Add item">
    </form>	
</div>
