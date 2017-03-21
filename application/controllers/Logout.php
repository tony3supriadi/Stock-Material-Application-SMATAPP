<?php
defined('BASEPATH') OR exit('No direct script access allowed');

Class Logout extends CI_Controller {

	public function __construct() {
		parent::__construct();
        if (!$this->session->userdata('is_login')) {
            redirect('/login');
        }
	}

	public function index() {
        $this->session->set_userdata(['is_login' => false]);
        redirect('/login');
	}
	
}
