<br>
<h2 style="text-align: center">Item detail</h2>
<div style="display: flex">

    <form class = "login" method="POST" action = "<?php echo base_url();?>wishlist/add">
    
    <h3>Name: <?php echo $name?></h3>
    <hr>
        <br>
    <input type="text" name="id" style="display:none" value = "<?php echo $id?>">
    <p>Seller: <?php echo $sellerEmail ?></p><br>
    <p>Price: <?php echo $price ?></p><br>
    <p>Description: <?php echo $description ?></p><br>
    <p>Average rating: <?php echo $aveRating ?></p><br>
    <figure style="width:100%">
        <img style="width:100%" <?php echo 'src="'. base_url($image). '"' ?>>
    </figure>
    <br>

    <div class="submit-div">
        <input type="submit" class="submit-btn" value = "Add wishlist">
    </div>
</form>

<form class = "login" method="POST" action = "<?php echo base_url();?>item/comment">
    <ul>
        <h3>Comments</h3>
        <hr>
        <br>
        <?php
            if(isset($comment)) {
                foreach ($comment as $row) {
                    echo '<li><p>' . $row->comment . '</p></li>';
                }
            } else {
                echo 'Leave the first comment';
            }
        ?> 
    <br>
</ul>
    <hr>
    <br>
    <input type="text" name="id" style="display:none" value = "<?php echo $id?>">
    <label for="rating">Rating: </label>
    <input class = "login-input" name="rating" type="number" min="1" max="5">
    <label for="comment">Comment: </label>
    <input class = "login-input" name="comment" type="text">
        
    <div class="submit-div">
        <input type="submit" class="submit-btn" value = "Comment">
    </div>
</form> 

</div>



