<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class M_demo extends CI_Model {

    public function __construct() {
        parent::__construct();
    }

    public function index() {
        $this->db->select();
        $this->db->from('demo');
        $query = $this->db->get();
        return $query->result();
    }

    public function check() {
        $this->db->select('name, password');
        $this->db->from('demo');
        $query = $this->db->get();
        return $query->result();
    }

}
