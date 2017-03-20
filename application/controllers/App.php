<?php
defined('BASEPATH') OR exit('No direct script access allowed');

Class App extends CI_Controller {

	public function __construct() {
		parent::__construct();
		if (!$this->session->userdata('is_login')) {
            redirect('/login');
        }
	}

	public function index() {
		$data = array(
			'title' => 'HOME | SMATAPP - STOCK MATERIAL APPLICATION',
			'navigation' => 'dashboard',
			'container' => 'pages/home/index'
		);
		$this->load->view('/layouts/app', $data);
	}

}
