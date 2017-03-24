<?php

Class Material extends CI_Controller {

    public function __construct() {
        parent::__construct();

        if (!$this->session->userdata('is_login')) {
            redirect('/login');
        }
    }

    public function index() {
        $data = array(
			'title' => 'MATERIAL | SMATAPP - STOCK MATERIAL APPLICATION',
            'navigation' => 'master',
			'container' => 'pages/material/index'
		);
		$this->load->view('/layouts/app', $data);
    }

    public function show($id) {
        $data = array(
			'title' => 'MATERIAL | SMATAPP - STOCK MATERIAL APPLICATION',
            'navigation' => 'master',
			'container' => 'pages/material/show'
		);
		$this->load->view('/layouts/app', $data);
    }

    public function add() {
        $data = array(
			'title' => 'MATERIAL | SMATAPP - STOCK MATERIAL APPLICATION',
            'navigation' => 'master',
			'container' => 'pages/material/add'
		);
		$this->load->view('/layouts/app', $data);
    }

    public function create() {

    }

    public function edit($id) {
        $data = array(
			'title' => 'MATERIAL | SMATAPP - STOCK MATERIAL APPLICATION',
            'navigation' => 'master',
			'container' => 'pages/material/edit'
		);
		$this->load->view('/layouts/app', $data);
    }

    public function update($id) {

    } 

    public function delete() {

    }

}