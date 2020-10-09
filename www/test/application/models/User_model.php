<?php
class User_model extends CI_Model {

	public function __construct() {
		$this->load->database();
		$this->userTable = 'Users';
	}
    
	public function authenticate($email, $password) {
		$this->db->select('*');
		$this->db->from($this->userTable);
		$this->db->where('Email', $email);
		$query  = $this->db->get();
		$row = $query->row_array();
		if (isset($row)) {
			if($password == $row['Password']){
                return TRUE;
            }else{
                return FALSE;
            }
		} else {
			return FALSE;
		}

	}

	public function valid($email) {
		$this->db->select('*');
		$this->db->from($this->userTable);
		$this->db->where('Email', $email);
		$query  = $this->db->get();
		$row = $query->row_array();
		if (isset($row)) {
			return FALSE;
		} else {
			return TRUE;
		}
	}

	public function create($email, $password, $firstname, $lastname, $code) {
		$data = array(
			'Email' => $email,
			'Password' => $password,
			'Firstname' => $firstname,
			'Lastname' => $lastname,
			'code' => $code
		);
		$this->db->insert(
			'Users',
			$data
		);
	}

	public function active($code) {
		$data = array(
			'status' => 1
		);
		$this->db->where('code', $code);
		$this->db->update($this->userTable, $data);
	}

	public function get_info($email) {
		$this->db->select('*');
		$this->db->from($this->userTable);
		$this->db->where('Email', $email);
		$query  = $this->db->get();
		return $query->row_array();
	}

	public function update($firstname) {
		$email = $_SESSION['email'];
		$data = array(
			'Firstname'=>$firstname
		);
		$this->db->where('email', $email);
		$this->db->update($this->userTable, $data);
	}

	public function reset_pass($email, $Lastname, $password) {
		$data = array(
			'Password'=>$password
		);
		$this->db->where('Email', $email);
		$this->db->where('Lastname', $Lastname);
		$this->db->update($this->userTable, $data);
		$row = $this->db->affected_rows();
		if($row){
           return true;
        }else{
           return false;
        }
	}

}