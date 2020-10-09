<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Item extends CI_Controller {
    public function __construct() {
        parent::__construct();
        $this->load->model('item_model');
        $this->load->model('comment_model');
    }

    public function index() {
        $this->load->view('header');
        $this->load->view('item_page',  $this->data);
        $this->load->view('footer');    
    }


    public function item_detail($itemId = NULL) {
        if ($itemId == NULL) {
            $itemId = $_GET["itemId"];
        }
        $this->data['name'] = $this->item_model->get_info($itemId)['name'];
        $this->data['price'] = $this->item_model->get_info($itemId)['price'];
        $this->data['description'] = $this->item_model->get_info($itemId)['description'];
        $this->data['image'] = $this->item_model->get_info($itemId)['image'];
        $this->data['sellerEmail'] = $this->item_model->get_info($itemId)['sellerEmail'];
        $this->data['status'] = $this->item_model->get_info($itemId)['status'];
        if ($this->data['status'] == 0) {
            $this->data['sellerEmail'] = "Anonymous";
        }
        $this->data['id'] = $itemId;            
        $this->data['aveRating'] = $this->comment_model->ave_rating($itemId);
        $this->data['comment'] = null;
        $this->data['comment'] = $this->comment_model->get_comments($itemId);
        $this->index();
    }

    public function comment() {
        if (!isset($_SESSION["userId"])) {
            redirect('/login');
        }
        
        $rating = $_POST['rating'];
        $comment = $_POST['comment'];
        $itemId = $_POST['id'];
        $this->comment_model->add_comment($itemId, $rating, $comment);
        redirect("/item/item_detail/".$itemId);
    }

}

?>
