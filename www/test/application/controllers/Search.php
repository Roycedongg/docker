<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Search extends CI_Controller {
    public function __construct() {
        parent::__construct();
        $this->load->model('item_model');
        $this->load->helper('url_helper');
    }

    public function index() {
        $this->data = array("name"=>null, "item"=>null);
        $name = $this->input->get('search');
        if(isset($name)){
            $this->data['item'] = $this->item_model->search($name);
        }

        if ($name != "") {
            $this->data['var']= $this->item_model->auto_search($name); 
                echo json_encode($this->data['var']);
        } else {
                $this->data['var']= null; 
                echo json_encode($this->data['var']);
        }
    }

    public function result() {
        $this->data = array("name"=>null, "item"=>null);
        $name = $this->input->get('search');
        if(isset($name)){
            $this->data['item'] = $this->item_model->search($name);
        }
        $this->load->view('header');
        $this->load->view('search_page', $this->data);
        $this->load->view('footer');
    }

}
