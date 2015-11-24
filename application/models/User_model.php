<?php

class User_model extends CI_Model {

    public function __construct() {
        parent::__construct();
    }

    public function getData() {
        $this->db->select('id,email');
        return $this->db->get_where("systemuser", array('id' => 2))->result();
    }

}
