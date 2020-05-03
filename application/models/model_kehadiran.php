<?php 
    class model_kehadiran extends CI_Model{

        public function insert($data,$table){
            $this->db->insert($table,$data);
        }

        public function tampil(){
    		$this->db->select('id_pegawai,nama,tanggal,jam_datang,jam_pulang, ((jam_pulang - jam_datang) - 8) as lembur');
    		$this->db->from('kehadiran');
    		$query = $this->db->get();
    		return $query->result();
    	}

    	public function edit_kehadiran($where,$table){      
        	return $this->db->get_where($table,$where);
    	}

    	public function update_kehadiran($where,$data,$table){
        	$this->db->where($where);
        	$this->db->update($table,$data);
    	} 

    	public function hapus_kehadiran($where,$table){
        	$this->db->delete($table,$where);
    	}
    }
?>