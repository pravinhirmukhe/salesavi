<?php

class Admin_model extends CI_Model {

    public function __construct() {
        parent::__construct();
    }

    public function login() {
        $data = array(
            'email' => $this->input->post('username'),
            'pass' => $this->input->post('pass'),
            'status' => 'Active',
        );
        $rs = $this->db->get_where('systemuser', $data);
        if ($rs->num_rows() > 0) {
            $ses = array(
                'adminuserid' => $rs->row()->id,
                'adminusername' => $rs->row()->email,
            );
            $this->session->set_userdata($ses);
            return true;
        } else {
            return false;
        }
    }

}
