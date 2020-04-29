<?php 

class Pengaduan extends MY_Controller
{
	
	function __construct(){
		parent:: __construct();
		$this->load->model('M_pengaduan');
		$this->load->model("Comment_model", "comment_m");
		$this->load->helper('url');
		$this->load->library('upload');
		$this->load->library('pagination');
	}
	function index(){
		$data['page_resource'] = parent::page_resources();
		$this->load->view('pengaduan/form_pengaduan', $data);
	}
	function create($id_pengaduan = NULL){
		$data['page_resource'] = parent::page_resources();
		$data['pengaduan'] = $id_pengaduan;
		$this->load->view('pengaduan/form_pengaduan', $data);
	}
	
 
	function aksiCreate(){
		$data['page_resource'] = parent::page_resources();
		$no_saluran			 = $this->input->post('no_saluran');
		$nama_pelapor		 = $this->input->post('nama_pelapor');
		$alamat_pelapor		 = $this->input->post('alamat_pelapor');
		$no_hp_pelapor		 = $this->input->post('no_hp_pelapor');
		$deskripsi 			 = $this->input->post('deskripsi');
		$jenis_pengaduan	 = $this->input->post('jenis_pengaduan');
		$kepuasan			 = $this->input->post('kepuasan');
		$id_pengaduan		 = $this->input->post('id_pengaduan');
		
		$config['upload_path'] = 'storage/images/';
	    $config['allowed_types'] = 'jpg|png|jpeg|gif';
	    $config['max_size'] = '2048';  //2MB max
	    $config['max_width'] = '4480'; // pixel
	    $config['max_height'] = '4480'; // pixel
	    $config['file_name'] = $_FILES['fotopost']['name'];

		$this->form_validation->set_rules('no_saluran','No Saluran','trim|required');
		$this->form_validation->set_rules('nama_pelapor','Nama Pelapor','trim|required');
		$this->form_validation->set_rules('no_hp_pelapor','No Hp','trim|required');
		$this->form_validation->set_rules('deskripsi','Deskripsi','trim|required');
		$this->form_validation->set_rules('jenis_pengaduan','Jenis Pengaduan','trim|required');
		
		if ($this->form_validation->run() === FALSE) {
			$data['page_resource'] = parent::page_resources();
			$this->load->view('pengaduan/form_pengaduan', $data);
        } else {
        	$this->upload->initialize($config);

		    if (!empty($_FILES['fotopost']['name'])) {
		        if ( $this->upload->do_upload('fotopost') ) {
		            $foto = $this->upload->data();
		            $data = array(
		                        'nama_pelapor' => $nama_pelapor,
								'alamat_pelapor' => $alamat_pelapor,
								'no_hp_pelapor' => $no_hp_pelapor,
								'deskripsi'=> $deskripsi,
								'jenis_pengaduan'=> $jenis_pengaduan,
								'user_id' => $this->session->userdata('id'),
								'foto'    => $foto['file_name']
		                        );
					$this->M_pengaduan->input_data($data);
	               redirect('pengaduan/view_pengaduan',$data);
		        }else {
	              die("gagal upload");
		        }
		    }else {
		      echo "tidak masuk";
		    }
			redirect('pengaduan/view_pengaduan',$data);
        } 
    }
    public function view_pengaduan(){
		
		$data['page_resource'] 	= parent::page_resources();	
		$data['pengaduan'] 		= $this->M_pengaduan->tampil_pengaduan()->result();
		$this->load->view('pengaduan/v_tampil', $data);

	}
	public function details($id){
		
        $data['page_resource']	= parent::page_resources();
        $data['pengaduan']		= $this->M_pengaduan->details($id)->row(1);
        $data['id_pengaduan'] 	= $id;
        $data['komentar'] 		= $this->comment_m->object_comments($id);
		$this->load->view('pengaduan/viewPengaduan', $data);
	}
	function update($id_pengaduan){
	
		$data['page_resource'] 	= parent::page_resources();
		$kondisi = array('id_pengaduan' => $id_pengaduan );
	    $data['pengaduan']		= $this->M_pengaduan->get_by_id($kondisi);
	    return $this->load->view('pengaduan/form_edit',$data);
	}
	function aksiUpdate(){
		$id_pengaduan 		= $this->input->post('id_pengaduan');
		$no_saluran 		= $this->input->post('no_saluran');
		$nama_pelapor 		= $this->input->post('nama_pelapor');
		$alamat_pelapor 	= $this->input->post('alamat_pelapor');
		$no_hp_pelapor 		= $this->input->post('no_hp_pelapor');
		$deskripsi 			= $this->input->post('deskripsi');
		$jenis_pengaduan 	= $this->input->post('jenis_pengaduan');
		
	    $path = 'storage/images/';

	    $kondisi = array('id_pengaduan' => $id_pengaduan );
	    // get foto
	    $config['upload_path'] = 'storage/images/';
	    $config['allowed_types'] = 'jpg|png|jpeg|gif';
	    $config['max_size'] = '2048';  //2MB max
	    $config['max_width'] = '4480'; // pixel
	    $config['max_height'] = '4480'; // pixel
	    $config['file_name'] = $_FILES['fotopost']['name'];

	    $this->form_validation->set_rules('no_saluran','No Saluran','trim|required');
		$this->form_validation->set_rules('nama_pelapor','Nama Pelapor','trim|required');
		$this->form_validation->set_rules('no_hp_pelapor','No Hp','trim|required');
		$this->form_validation->set_rules('deskripsi','Deskripsi','trim|required');
		$this->form_validation->set_rules('jenis_pengaduan','Jenis Pengaduan','trim|required');
	    $this->upload->initialize($config);

	    if (!empty($_FILES['fotopost']['name'])) {
	        if ( $this->upload->do_upload('fotopost') ) {
	            $foto = $this->upload->data();
	            $data = array(
	                        'nama_pelapor' => $nama_pelapor,
							'alamat_pelapor' => $alamat_pelapor,
							'no_hp_pelapor' => $no_hp_pelapor,
							'deskripsi'=> $deskripsi,
							'jenis_pengaduan'=> $jenis_pengaduan,
							'user_id' => $this->session->userdata('id'),
							'foto'    => $foto['file_name']
	                        );

				$this->M_pengaduan->update_data($data,$kondisi);
            	redirect('pengaduan/view_pengaduan',$data);
	        }else {
              die("gagal update");
	        }
	    }else {
	      echo "tidak masuk";
	    }
    }
	
	public function delete($id, $foto){
		$path = 'storage/images/';
      	@unlink($path.$foto);
		$where = array('id_pengaduan' => $id);
		$this->M_pengaduan->hapus($where,'pengaduan');
		redirect('pengaduan/view_pengaduan');
	}
	public function cari(){
		$data['page_resource'] = parent::page_resources();
		$cari = $this->input->get('cari');
     	$page = $this->input->get('per_page');

    	$search = array('nama_pelapor' => $cari );

	    $batas =  9; // 9 data per page
	    if(!$page):
	        $offset = 0;
	    else:
	        $offset = $page;
	    endif;

	    	$config['page_query_string'] = TRUE;
	  		$config['base_url'] 		 = base_url().'v_tampil/?cari='.$cari;
	  		$config['total_rows'] 		 = $this->M_pengaduan->jumlah_row($search);

	  		$config['per_page'] 		 = $batas;
	  		$config['uri_segment'] 		 = $page;

	  		$config['full_tag_open'] 	 = '<ul class="pagination">';
	  		$config['full_tag_close'] 	 = '<ul>';

	  		$config['first_link'] 		 = 'first';
	  		$config['first_tag_open'] 	 = '<li><a>';
	  		$config['first_tag_close'] 	 = '</a></li>';

	  		$config['last_link'] 		 = 'last';
	  		$config['last_tag_open']	 = '<li><a>';
	  		$config['last_tag_close'] 	 = '</a></li>';

	  		$config['next_link'] 		 = '&raquo;';
	  		$config['next_tag_open'] 	 = '<li><a>';
	  		$config['next_tag_close'] 	 = '</a></li>';

	  		$config['prev_link'] 		 = '&laquo;';
	  		$config['prev_tag_open'] 	 = '<li><a>';
	  		$config['prev_tag_close'] 	 = '</a></li>';

	  		$config['cur_tag_open'] 	 = '<li class="active"><a>';
	  		$config['cur_tag_close'] 	 = '</a></li>';

	  		$config['num_tag_open'] 	 = '<li><a>';
	  		$config['num_tag_close'] 	 = '</a></li>';

	    $this->pagination->initialize($config);
	    $data['pagination']	 = $this->pagination->create_links();
	    $data['jumlah_page'] = $page;
		$data['pengaduan'] = $this->M_pengaduan->get($batas,$offset,$search);
	  	$this->load->view('pengaduan/v_tampil', $data);
	}

}
 ?>