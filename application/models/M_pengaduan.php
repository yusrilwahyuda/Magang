<?php 


class M_pengaduan extends CI_Model
{
	
	function tampil_pengaduan()
	{
		return $this->db->get('pengaduan');
	}
	public function details($id){
		return $this->db->get_where('pengaduan',['pengaduan.id_pengaduan'=>$id]);	
	}
	function input_data($data)
	{
		$this->db->insert('pengaduan',$data);
      	return TRUE;
	}
	public function detailed_koment($id = NULL){
        $sql = "
        SELECT
            `id_pengaduan` AS id_pengaduan,
            `user_id` AS user_id,
            `isi` AS isi
            
        FROM `komentar`
        
        ";
        if ($id == NULL){
            return $this->db->query($sql);
        } else {
            return $this->db->query($sql." WHERE `id_pengaduan` = ?", array($id));
        }

    }
	
	function hapus($where,$data){
		$this->db->where($where);
		$this->db->delete($data);
		return TRUE;
	}
	function edit_pengaduan($where, $table){		
		return $this->db->get_where($table,$where);
	}
	public function get_by_id($kondisi){
      $this->db->from('pengaduan');
      $this->db->where($kondisi);
      $query = $this->db->get();
      return $query->row();
  	}
	public function update_data($data,$kondisi){
	    $this->db->update('pengaduan',$data,$kondisi);
	    return TRUE;
  	}

	public function jumlah_row($search){
	    $this->db->or_like($search);
	    $query = $this->db->get('pengaduan');

	    return $query->num_rows();
  	}
 	public function get($batas=NULL,$offset=NULL,$cari=NULL){
	    if ($batas != NULL) {
	        $this->db->limit($batas,$offset);
	    }
	      if ($cari != NULL) {
	        $this->db->or_like($cari);
	      }
	      $this->db->from('pengaduan');
	      $query = $this->db->get();
	      return $query->result();
  }
	
}

 ?>