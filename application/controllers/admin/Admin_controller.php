<?php

class Admin_controller extends MY_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('admin/Admin_model');
    }

    public function index() {
        $data['template'] = "home";
        $this->admin_layout($data);
    }

    public function login() {
        $this->form_validation->set_rules('username', 'Username', 'required|valid_email');
        $this->form_validation->set_rules('pass', 'Password', 'required');

        if ($this->form_validation->run() == FALSE) {
            $this->load->view('admin/layout/login');
        } else {
            if ($this->Admin_model->login()) {
                $this->index();
            } else {
                $this->session->set_flashdata('error', 'Login Failed');
                $this->load->view('admin/layout/login');
            }
        }
    }

    public function logout() {
        $this->session->sess_destroy();
        redirect(site_url() . '/admin');
    }

}
