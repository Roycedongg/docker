<?php
class Item_model extends CI_Model {

	public function __construct() {
		$this->load->database();
        $this->userTable = 'Users';
        $this->itemTable = 'Items';
        $this->wishlistTable = 'wishlist';
	}
    
    public function post_item($itemName, $price, 
            $description, $image, $status) {
        $sallerEmail = $_SESSION['email'];
        $itemId = uniqid();
        $data = array(
            'id' => $itemId,
            'name' => $itemName,
            'image' => $image,
            'price' => $price,
            'sellerEmail' => $sallerEmail,
            'description' => $description,
            'status' => $status
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
    
    public function search($name) {
        // for ($i = 0; $i < strlen($name); $i++) {
        //     // insertions
        //     $words[] = substr($name, 0, $i) . '_' . substr($name, $i);
        //     // deletions
        //     $words[] = substr($name, 0, $i) . substr($name, $i + 1);
        //     // substitutions
        //     $words[] = substr($name, 0, $i) . '_' . substr($name, $i + 1);
        // }
        // last insertion

        $this->db->select('*');
        $this->db->from($this->itemTable);
        // $this->db->group_start();
        $this->db->like("name", $name);
        for ($i = 0; $i < strlen($name) - 2; $i++) {
            $this->db->or_like('name', substr($name, $i, $i + 3));
        }
        // $words[] = $name . '_';
        // for ($i = 0; $i < count($words); $i++) {
        //     echo $words[$i];
        //     $this->db->or_like('name', $words[$i]);
        // }
        // $this->db->group_end();
        $query  = $this->db->get();
		return $query->result();
	}

    public function auto_search($name) {
        $this->db->distinct();
        $this->db->select("name");
        $this->db->from($this->itemTable);
        $this->db->like('name', $name);
        $records = $this->db->get()->result();
        $response = array();
       foreach($records as $row ){
          $response[] = array("value"=>$row->name,"label"=>$row->name);
       }
        return $response;
    }

    public function add($email, $id) {
        $this->db->select("*");
        $this->db->from($this->wishlistTable);
        $this->db->where("email", $email); 
        $this->db->where("item_id", $id); 
        $this->result = $this->db->get();

        if($this->result->num_rows() > 0){
           // you data exist
           return false;
        } else {
            $data = array(
                'item_id' => $id,
                'email' => $email
            );
            $this->db->insert(
                $this->wishlistTable,
                $data
            );
           return true;
        }    
    }

    public function remove($email, $id) {
        $this->db->where('item_id', $id);
        $this->db->where('email', $email);
        $this->db->delete($this->wishlistTable);
    }

    public function wishlist($email) {
        $this->db->select('*');
        $this->db->from($this->wishlistTable);
        $this->db->join($this->itemTable, 'Items.id = wishlist.item_id');
        $this->db->where("email", $email);
        $query  = $this->db->get();
        return $query->result();
    }
	

}