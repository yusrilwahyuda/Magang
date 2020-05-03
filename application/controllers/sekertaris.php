<?php
class sekertaris extends CI_Controller{

	function __construct(){
		parent::__construct();
		$this->load->helper(array('form', 'url','file'));
        $this->load->model('model_kehadiran');
        $this->load->library('form_validation');
	}

	public function index(){
		$this->load->view('dashboard');
	}

    public function kehadiran(){
        $this->load->view('v_kehadiran');
    }

    public function simpan_kehadiran(){
        $this->form_validation->set_rules('nama', 'Nama', 'required');
        $this->form_validation->set_rules('tanggal', 'Tanggal', 'required');

        if ($this->form_validation->run() == FALSE){
            $this->session->set_flashdata('pesan','<font color=red>Form Tidak Boleh Kosong</font>');
            $this->load->view('v_kehadiran');
            
        }
        else{
        $nama = $this->input->post('nama');
        $tanggal = $this->input->post('tanggal');
        $jam_datang = $this->input->post('jam_datang');
        $jam_pulang = $this->input->post('jam_pulang');

        $data   = array('nama' => $nama,
                    'jam_datang' => $jam_datang,
                    'tanggal' => $tanggal,
                    'jam_pulang' => $jam_pulang
                    );

        $this->model_kehadiran->insert($data,"kehadiran");
        redirect('sekertaris/daftarKehadiran');
        }
    }

    public function daftarKehadiran(){
        $data['kehadiran'] = $this->model_kehadiran->tampil();
        $this->load->view('v_daftarkehadiran',$data);
    }

    public function editKehadiran($id_pegawai){
        $where = array('id_pegawai' => $id_pegawai);
        $data['data'] = $this->model_kehadiran->edit_kehadiran($where,'kehadiran')->result();
        $this->load->view('v_edit_kehadiran',$data);
    }

    public function update_kehadiran(){
        $id_pegawai = $this->input->post('id_pegawai');
        $nama = $this->input->post('nama');
        $tanggal = $this->input->post('tanggal');
        $jam_datang = $this->input->post('jam_datang');
        $jam_pulang = $this->input->post('jam_pulang');
 
        $data = array(
        'nama' => $nama,
        'tanggal' => $tanggal,
        'jam_datang' => $jam_datang,
        'jam_pulang' => $jam_pulang
        );
 
        $where = array(
        'id_pegawai' => $id_pegawai
        ); 
        $this->model_kehadiran->update_kehadiran($where,$data,'kehadiran');
        redirect('sekertaris/daftarKehadiran');
    }

    public function hapus_kehadiran($id_pegawai){
        $where = array('id_pegawai' => $id_pegawai);
        $this->model_kehadiran->hapus_kehadiran($where,'kehadiran');
        redirect('sekertaris/daftarKehadiran');
    }
}