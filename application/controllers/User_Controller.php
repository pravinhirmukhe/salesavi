<?php

class User_Controller extends MY_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('User_model');
    }

    public function index() {
        $data['template'] = "home";
        $data['content'] = $this->User_model->getData();
        $this->user_layout($data);
    }

    public function about() {
        $data['template'] = "about";
        $data['content'] = array('name' => "Pravin");
        $this->user_layout($data);
    }

}
