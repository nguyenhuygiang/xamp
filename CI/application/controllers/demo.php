<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Demo extends CI_Controller {

    public function __construct() {
        parent::__construct();
    }

    public function index() {
        $data = array(
            'giang' => "nguyen",
            '2' => array(
                '4' => "huy",
                '5' => "giang",
            ),
            '3' => "giang"
        );
//        echo $data['2']['4'];
//        die;
//        foreach ($data as $value) {
//            echo "<pre>";
//            var_dump($value);
//            echo "<pre>";
        //  }
        $this->load->view('demo/demo', $data);
    }

    public function check() {
        $this->load->model('m_demo');
        $data['value'] = $this->m_demo->check();
//        echo '<pre>';
//        var_dump($data);
        $this->load->view('demo/check', $data);
    }

}
