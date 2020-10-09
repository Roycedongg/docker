<?php
class Comment_model extends CI_Model {

	public function __construct() {
		$this->load->database();
        $this->userTable = 'Users';
        $this->itemTable = 'Items';
        $this->commentTable = 'Comments';
    }

    public function add_comment($itemId, $rating, $comment) {
        $id = uniqid();
        $userId = $_SESSION["userId"];
        $data = array(
            'id' => $id,
			'itemId' => $itemId,
			'rating' => $rating,
			'comment' => $comment,
			'userId' => $userId
		);
		$this->db->insert(
			$this->commentTable,
			$data
		);
    }
    
    public function ave_rating($itemId) {
        $this->db->select("rating");
		$this->db->from($this->commentTable);
		$this->db->where("itemId", $itemId);
        $query  = $this->db->get();
        $number = 0;
        $count = 0;
        foreach ($query->result() as $row)
        {
            $number = $number + 1;
            $count = $count + $row->rating;
        }
        if ($number == 0) {
            return 0;
        } else {
            $answer = $count / $number;
            return $answer;
        }
        
	}

    public function get_comments($itemId) {
        $this->db->select("comment");
        $this->db->from($this->commentTable);
        $this->db->where("itemId", $itemId);
        $query  = $this->db->get();
        return $query->result();
        
    }
	

}