<?php

Class Satuan extends CI_Controller {

    public function __construct() {
        parent::__construct();
        
        if (!$this->session->userdata('is_login')) {
            redirect('/login');
        }
    }

    public function index() {
        $data = array(
			'title' => 'SATUAN | SMATAPP - STOCK MATERIAL APPLICATION',
            'navigation' => 'master',
			'container' => 'pages/satuan/index'
		);
		$this->load->view('/layouts/app', $data);
    }

    public function create() {

    }

    public function edit($id) {
        $data = array(
			'title' => 'SATUAN | SMATAPP - STOCK MATERIAL APPLICATION',
            'navigation' => 'master',
			'container' => 'pages/satuan/edit'
		);
		$this->load->view('/layouts/app', $data);
    }

    public function update($id) {

    } 

    public function delete() {

    }

}