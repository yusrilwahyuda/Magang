<?php
class Komentar extends MY_Controller {
    public function __construct() {
        parent::__construct();
        $this->load->model("Comment_model", "comment_m");
        $this->load->model("M_pengaduan");
    }

    public function insert(){
        $isi    = $this->input->post('isi');
        $id_pengaduan       = $this->input->post('id_pengaduan');
        $user_id            = $this->input->post('user_id');

        $pengaduan          = $this->M_pengaduan->detailed_koment($id_pengaduan)->row();

        $data = [
            'isi' => $isi,
            'id_pengaduan' => $id_pengaduan,
            'user_id' => $user_id,
            'tgl' => $this->local_timestamp()
        ];

        $redirect_url = "pengaduan/details/";
      
        if ($this->comment_m->insert($data) > 0) {
            redirect($redirect_url . $id_pengaduan);
        } else {
            redirect($redirect_url . $id_pengaduan);
        }
        
    }

}
