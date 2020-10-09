<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Register extends CI_Controller {
	public function __construct() {
        parent::__construct();
        $this->data['status'] = "";
        $this->load->model('user_model');
    }

    public function index() {
    	$this->load->view('header');
        $this->load->view('register_page', $this->data);
        $this->load->view('footer');
    }

    public function register() {
        $email = $this->input->post('email');
        $password = $this->input->post('password');
        $confirmPass = $this->input->post('confirmPass');
        $firstname = $this->input->post('firstname');
        $lastname = $this->input->post('lastname');

        if (strlen($password) < 8) {
            $this->data['status'] = "Password should be longer than 8 letters";
            $this->index();
        } else if (strcmp($password, $confirmPass) != 0) {
            $this->data['status'] = "Password should be the same";
            $this->index();
        } else if ($this->user_model->valid($email)) {
            $code = uniqid();
            $this->user_model->create($email, $password, $firstname, $lastname, $code);
            $this->email($email, $code);
            $this->index();
            // redirect(base_url() . "login/");
        } else {
            $this->data['status'] = "This email has already sign up, please log in";
            $this->index();
        }
    }

    public function email($email, $code) {
        $this->load->library('email');
        $config['protocol'] = 'smtp';
        $config['smtp_host'] = 'mailhub.eait.uq.edu.au';
        $config['smtp_port'] = 25;
        $config['mailtype'] = 'html';
        $config['charset'] = 'iso-8859-1';
        $config['wordwrap'] = TRUE; 
        $this->email->initialize($config);
        $this->email->from('register@easyGet.com', 'easyGet');
        $this->email->subject('Please confirm your email!');  
        $message= '<h2>Thanks for register!<h2><br><br>
                Please click this link to active your account:<br>
                ' . base_url() . 'register/active/' . $code ;  
        $this->email->message($message);
        $this->email->to($email);
        $this->email->send();   
        $this->data['status'] = "Please check your email to active your account.";
    }

    public function active($code = NULL) {
        if ($code != NULL) {
            $this->user_model->active($code);
            $this->data['status'] = "You have actived your account, now you can login.";
            redirect("/login");
        } else {
            $this->index();
        }
    }

}

?>
