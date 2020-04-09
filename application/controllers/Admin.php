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
        $page_data['page_ket']  = 'Beranda';
        $page_data['page_title'] = 'Dashboard';
        
        $this->load->view('backend/index', $page_data);
    }

    function result()
    {
        if ($this->session->userdata('admin_login') != 1)
            redirect(site_url('login'), 'refresh');
        
        $this->db->order_by('result_id', 'desc');
        $data = $this->db->get('result')->result_array();
			
        $page_data['page_name']  = 'result';
        $page_data['result']  = $data;
        $page_data['page_ket']  = 'List Result';
        $page_data['page_title'] = 'Data Result';
        
        $this->load->view('backend/index', $page_data);
    }

    function result_add()
    {
        if ($this->session->userdata('admin_login') != 1)
			redirect(site_url('login'), 'refresh');
			
        $page_data['page_name']  = 'result_add';
        $page_data['page_ket']  = 'Tambah Result';
        $page_data['page_title'] = 'Tambah Data Result';
        
        $this->load->view('backend/index', $page_data);
    }

    function result_edit($id)
    {
        if ($this->session->userdata('admin_login') != 1)
			redirect(site_url('login'), 'refresh');
        
        $data = $this->db->get_where('result', array('result_id' => $id))->row();

        $page_data['page_name']  = 'result_edit';
        $page_data['page_ket']  = 'Edit Result';
        $page_data['result']  = $data;
        $page_data['page_title'] = 'Edit Data Result';
        
        $this->load->view('backend/index', $page_data);
    }

    function result_save()
    {
        if ($this->session->userdata('admin_login') != 1)
            redirect(site_url('login'), 'refresh');
        
        $hari = date("l", strtotime($this->input->post('tanggal')));
        if ($hari == "Sunday") {
            $nmhari = "Minggu";
        }elseif ($hari == "Monday") {
            $nmhari = "Senin";
        }elseif ($hari == "Tuesday") {
            $nmhari = "Selasa";
        }elseif ($hari == "Wednesday") {
            $nmhari = "Rabu";
        }elseif ($hari == "Thursday") {
            $nmhari = "Kamis";
        }elseif ($hari == "Friday") {
            $nmhari = "Jumat";
        }else{
            $nmhari = "Sabtu";
        }
        
        $data['tanggal']      = html_escape($this->input->post('tanggal'));
        $data['hari']      = $nmhari;
        $data['tgl']      = date("d", strtotime($this->input->post('tanggal')));
        $data['bulan']      = date("M", strtotime($this->input->post('tanggal')));
        $data['tahun']      = date("Y", strtotime($this->input->post('tanggal')));
        $data['result']      = html_escape($this->input->post('result'));
        $this->db->insert('result', $data);

        $this->session->set_flashdata('flash_message' , 'Data Berhasil Ditambahkan');
        redirect(site_url('admin/result'), 'refresh');
    }

    function result_update()
    {
        if ($this->session->userdata('admin_login') != 1)
            redirect(site_url('login'), 'refresh');
        
        $hari = date("l", strtotime($this->input->post('tanggal')));
        if ($hari == "Sunday") {
            $nmhari = "Minggu";
        }elseif ($hari == "Monday") {
            $nmhari = "Senin";
        }elseif ($hari == "Tuesday") {
            $nmhari = "Selasa";
        }elseif ($hari == "Wednesday") {
            $nmhari = "Rabu";
        }elseif ($hari == "Thursday") {
            $nmhari = "Kamis";
        }elseif ($hari == "Friday") {
            $nmhari = "Jumat";
        }else{
            $nmhari = "Sabtu";
        }
        
        $id      = html_escape($this->input->post('result_id'));
        $data['tanggal']      = html_escape($this->input->post('tanggal'));
        $data['hari']      = $nmhari;
        $data['tgl']      = date("d", strtotime($this->input->post('tanggal')));
        $data['bulan']      = date("M", strtotime($this->input->post('tanggal')));
        $data['tahun']      = date("Y", strtotime($this->input->post('tanggal')));
        $data['result']      = html_escape($this->input->post('result'));
        
        $this->db->where('result_id', $id);
        $this->db->update('result', $data);

        $this->session->set_flashdata('flash_message' , 'Data Berhasil Diubah');
        redirect(site_url('admin/result'), 'refresh');
    }

    function result_del($id)
    {
        if ($this->session->userdata('admin_login') != 1)
            redirect(site_url('login'), 'refresh');
        
        $this->db->where('result_id', $id);
        $this->db->delete('result');
        
        $this->session->set_flashdata('flash_message' , 'Data Berhasil Dihapus');
        redirect(site_url('admin/result'), 'refresh');
    }

    function history(){
        if ($this->session->userdata('admin_login') != 1)
            redirect(site_url('login'), 'refresh');
        
        $data = $this->db->get('result')->result_array();
			
        $page_data['page_name']  = 'history';
        $page_data['history']  = $data;
        $page_data['page_ket']  = 'List History';
        $page_data['page_title'] = 'Data History';
        
        $this->load->view('backend/index', $page_data);
    }
}
