<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

	function __construct() {
        parent::__construct();
        $this->load->database();
        $this->load->library('session');
	}
	

	public function index()
	{
		if ($this->session->userdata('admin_login') == 1)
            redirect(site_url('admin/dashboard'), 'refresh');

        $this->load->view('login');
	}

	function validate_login() {
		$username = $this->input->post('username');
		$password = $this->input->post('password');
		$credential = array('username' => $username, 'password' => sha1($password));

		$query = $this->db->get_where('admin', $credential);
		if ($query->num_rows() > 0) {
			$row = $query->row();
			$this->session->set_userdata('admin_login', '1');
			$this->session->set_userdata('admin_id', $row->admin_id);
			$this->session->set_userdata('name', $row->name);
			$this->session->set_userdata('login_type', 'admin');

			redirect(site_url('admin/dashboard'), 'refresh');
		}

		$this->session->set_flashdata('login_error', 'invalid_login');
      	redirect(site_url('login'), 'refresh');
	}
	
	function logout() {
		$this->session->sess_destroy();
		$this->session->set_flashdata('logout_notification', 'logged_out');
		redirect(site_url('home'), 'refresh');
	  }
}
