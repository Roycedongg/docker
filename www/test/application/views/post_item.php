<form class = "login" method="GET" action = "<?php echo base_url();?>post/post">
	<h2>Post</h2>
	<figure style="width:100%">
        <img style="width:10%" <?php echo 'src="'. base_url("./images/photo.png"). '"' ?>>
        <input style="font-size:1.3vw" type="file" name="item-image" id="item-image">
	</figure>
    <div>
        <label for="item-name">Item name: </label>
        <input class = "login-input" name="item-name" type="text">
        <label for="price">Price: </label>
        <input class = "login-input" name="price" type="number" min="1" step="any">
        <label for="description">Description: </label>
        <input class = "login-input" name="description" type="text">
        <div >
        <input type="checkbox" name="status">
            <label for="status">Anonymous to everyone</label>
        </div>
    </div>
	<div class="submit-div">
		<input type="submit" class="submit-btn" value="Post">
	</div>
	
</form>	
