<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Post extends CI_Controller {
    public function __construct() {
        parent::__construct();
        $this->load->model('item_model');
    }

    public function index() {
        if (isset($_SESSION["email"])) {
            $this->load->view('header');
        $this->load->view('post_item');
        $this->load->view('footer');
        } else {
            redirect('/login');
        }  
    }

    public function post() {
    	$itemName = $this->input->get('item-name');
        $price = $this->input->get('price');
        $description = $this->input->get('description');
        $image = "./images/item.jpg";
        if ($this->input->get('status')) {
            $status = 0;
        } else {
            $status = 1;
        }
        $itemId = $this->item_model->post_item($itemName, $price, 
        $description, $image, $status);
        redirect("/item/item_detail/".$itemId);
    }

}

?>
