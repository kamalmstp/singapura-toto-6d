<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {

	function __construct() {
        parent::__construct();
        $this->load->database();
        $this->load->library('session');
	}
	

	public function index()
	{
		if ($this->session->userdata('admin_login') != 1)
            redirect(site_url('login'), 'refresh');
        if ($this->session->userdata('admin_login') == 1)
            redirect(site_url('admin/dashboard'), 'refresh');
	}

	function dashboard()
    {
        if ($this->session->userdata('admin_login') != 1)
			redirect(site_url('login'), 'refresh');
			
        $page_data['page_name']  = 'dashboard';
        $page_data['page_title'] = 'dashboard';
        
        $this->load->view('backend/index', $page_data);
    }
}
