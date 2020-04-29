<?php
class Comment_model extends CI_Model {
    private $table = "comments";
    public function __construct() {
        parent::__construct();
    }

    public function insert($data) {
        $this->db->insert('komentar',$data);
        return $this->db->affected_rows();
    }

    public function object_comments($id) {
        $sql = "
        SELECT 
            `isi`,
            p.`id_pengaduan`,
            p.`user_id`,
            DATE_FORMAT(`tgl`, \"%M %d %Y %H:%m:%s\") AS tgl,
            username
        FROM `komentar` p
        JOIN `users` u ON u.`user_id` = p.`user_id`
        LEFT JOIN `user_data` ud ON ud.`user_id` = u.`user_id`
        WHERE p.`id_pengaduan` = ".$id."
        ORDER BY 4 DESC
        ";
        return $this->db->query($sql);
    }
}
