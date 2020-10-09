<?php
class Item_model extends CI_Model {

	public function __construct() {
		$this->load->database();
        $this->userTable = 'Users';
        $this->itemTable = 'Items';
	}
    
    public function post_item($itemName, $price, 
            $description, $image) {
        $sallerId = $_SESSION['userId'];
        $itemId = $itemName . $price . $sallerId;
        $data = array(
            'id' => $itemId,
            'name' => $itemName,
            'image' => $image,
            'price' => $price,
            'sallerId' => $sallerId,
            'description' => $description
        );
        $this->db->insert(
			'Items',
			$data
        );
        return $itemId;
    }

    public function get_info($id) {
		$this->db->select('*');
		$this->db->from($this->itemTable);
		$this->db->where('id', $id);
        $query  = $this->db->get();
        $row = $query->row_array();
		return $row;
	}
	

}