<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Password extends CI_Controller {
	public function __construct() {
        parent::__construct();
        $this->data['status'] = "";
        $this->load->model('user_model');
    }

    public function index() {
    	$this->load->view('header');
        $this->load->view('reset_pass', $this->data);
        $this->load->view('footer');
    }

    public function reset() {
        $email = $this->input->post('email');
        $Lastname = $this->input->post('Lastname');
        $password = $this->input->post('password');
        if (strlen($password) < 8) {
            $this->data['status'] = "Password should be longer than 8 letters";
            $this->index();
        } else {
            if ($this->user_model->reset_pass($email, $Lastname, $password)) {
                redirect("/login");
            } else {
                $this->data['status'] = "Email or Last name is not correct";
                $this->index();
            }
        }
    }



}

?>    