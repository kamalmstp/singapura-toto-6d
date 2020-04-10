<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class History extends CI_Controller {

	function __construct() {
        parent::__construct();
        $this->load->database();
        $this->load->library('session');
	}


	public function index()
	{
		$this->db->select('*');
		$this->db->group_by('bulan');
		$this->db->order_by('result_id', 'desc');
		$jumlah = $this->db->get('result');

		$page_data['jumlah'] = $jumlah;

		$this->load->view('history', $page_data);
	}
}
