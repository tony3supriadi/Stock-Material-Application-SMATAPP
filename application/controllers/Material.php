<?php

Class Material extends CI_Controller {

    public function __construct() {
        parent::__construct();
    }

    public function index() {
        $data = array(
			'title' => 'HOME | SMATAPP - STOCK MATERIAL APPLICATION',
			'container' => 'pages/material/index'
		);
		$this->load->view('/layouts/app', $data);
    }

}