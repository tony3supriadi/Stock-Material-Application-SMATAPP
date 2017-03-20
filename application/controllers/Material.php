<?php

Class Material extends CI_Controller {

    public function __construct() {
        parent::__construct();
    }

    public function index() {
        $data = array(
			'title' => 'HOME | SMATAPP - STOCK MATERIAL APPLICATION',
            'navigation' => 'master',
			'container' => 'pages/material/index'
		);
		$this->load->view('/layouts/app', $data);
    }

    public function show($id) {
        $data = array(
			'title' => 'HOME | SMATAPP - STOCK MATERIAL APPLICATION',
            'navigation' => 'master',
			'container' => 'pages/material/show'
		);
		$this->load->view('/layouts/app', $data);
    }

    public function add() {
        $data = array(
			'title' => 'HOME | SMATAPP - STOCK MATERIAL APPLICATION',
            'navigation' => 'master',
			'container' => 'pages/material/add'
		);
		$this->load->view('/layouts/app', $data);
    }

    public function create() {

    }

    public function edit($id) {
        $data = array(
			'title' => 'HOME | SMATAPP - STOCK MATERIAL APPLICATION',
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