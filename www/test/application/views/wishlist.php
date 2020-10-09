<div class = "login">
	<h2 id = "search-header">Wishlist</h2>
	<table id = "search-table">
        <thead>
            <tr>
                <th>Name</th>
                <th>Price</th>
                <th>image</th>
            </tr>
            <hr>
        </thead>
        
        <tbody>
        <?php 
		if(isset($item))
		foreach($item as $row){
			echo '
                <tr>
                    <form method = "get" action = "'.base_url().'item/item_detail">
                    <input style="display:none" name = "itemId" value = "'.$row->id.'">
                    <td><input type = "submit" name = "submit" class = "itemBtn item-link" value = "'.$row->name.'"></td>
                    <td><input type = "submit" name = "submit" class = "itemBtn item-link" value = "'.$row->price.'"></td>
                    <td><img src="'. base_url($row->image). '"></td>
                    </form>

                    <form method = "post" action = "'.base_url().'wishlist/remove">
                    <input style="display:none" name = "itemId" value = "'.$row->id.'">
                    <td><input type = "submit" name = "submit" class = "submit-btn" value = "Remove"></td>
                    </form>
				</tr>
			';
		}
		?>		
        </tbody>
    </table>
	
</div>	
