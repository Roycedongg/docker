<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {
	public function __construct() {
        parent::__construct();
        $this->data['status'] = "";
        $this->load->model('user_model');
    }

    public function index() {
    	$this->load->view('header');
        $this->load->view('login_page', $this->data);
        $this->load->view('footer');
    }

    public function login() {
    	$email = $this->input->post('email');
    	$password = $this->input->post('password');
        $remember = $this->input->post('remember');

    	if ($this->user_model->authenticate($email, $password)) {
            if ($remember) {
                setcookie("email", $email, time() + 60*60*24, "/");  
                setcookie("password", $password, time() + 60*60*24, "/");            
            } else {
                delete_cookie('email');
                delete_cookie('password');
            }
            $status = $this->user_model->get_info($email)['status'];
            if ($status == 1) {
                $_SESSION['email'] = $email;
                $_SESSION['active_time'] = time();
                $_SESSION['userId'] = $this->user_model->get_info($email)['UserId'];
                redirect(base_url(). "home/");
                
            } else {
                $this->data['status'] = "Your email has not been activied";
                $this->index();
            }
            
        } else {
            $this->data['status'] = "Your email or password is incorrect!";
            $this->index();
        }

    }

    public function logout() {
        session_destroy();
        redirect(base_url() . "home/");
    }

}

?>
