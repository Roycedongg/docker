<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Profile extends CI_Controller {
    public function __construct() {
        parent::__construct();
        $this->load->model('user_model');
        if (isset($_SESSION["email"])) {
            $this->data['email'] = $_SESSION["email"];
        $this->data['password'] = $this->user_model->get_info($this->data['email'])['Password'];
        $this->data['firstname'] = $this->user_model->get_info($this->data['email'])['FirstName'];
        } else {
            redirect('/login');
        }
    }

    public function index() {
    	$this->load->view('header');
        $this->load->view('profile', $this->data);
        $this->load->view('footer');
    }

    public function update() {
        $firstname = $this->input->post('firstname');
        $this->user_model->update($firstname);
        $this->data['firstname'] = $firstname;
        $this->index();
    }

}

?>
