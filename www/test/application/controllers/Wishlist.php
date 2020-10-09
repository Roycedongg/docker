<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Wishlist extends CI_Controller {
    public function __construct() {
        parent::__construct();
        $this->load->model('item_model');
        $this->load->model('user_model');
    }

    public function index() {
        if (!isset($_SESSION["email"])) {
            redirect('/login');
        }
        $this->data = array("item"=>null);
        $this->data['item'] = $this->item_model->wishlist($_SESSION["email"]);
        $this->load->view('header');
        $this->load->view('wishlist',  $this->data);
        $this->load->view('footer');    
    }

    public function add() {
        if (!isset($_SESSION["email"])) {
            redirect('/login');
        }
        $id = $this->input->post('id');
        $email = $_SESSION['email'];
        $this->item_model->add($email, $id);
        redirect("/wishlist");
    }

    public function remove() {
        $id = $this->input->post('itemId');
        $email = $_SESSION['email'];
        $this->item_model->remove($email, $id);
        redirect("/wishlist");
    }



}

?>
