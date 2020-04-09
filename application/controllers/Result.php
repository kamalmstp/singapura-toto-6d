<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Result extends CI_Controller {

	function __construct() {
        parent::__construct();
        $this->load->database();
        $this->load->library('session');
	}
	

	public function index()
	{
		$this->db->order_by('result_id', 'desc');
		$data = $this->db->get('result')->result_array();
		
        $page_data['result']  = $data;
		$this->load->view('result', $page_data);
	}
}
