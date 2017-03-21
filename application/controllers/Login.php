<?php
defined('BASEPATH') OR exit('No direct script access allowed');

Class Login extends CI_Controller {

	public function __construct() {
		parent::__construct();
        if ($this->session->userdata('is_login')) {
            redirect();
        }
	}

	public function index() {
        if (isset($_POST['login'])) {
            $this->action_to_login();
        }
        $this->load->view('pages/login/index');
	}

    public function action_to_login() {
        $this->session->set_userdata(['is_login' => true]);
        redirect();
    }
	
}
