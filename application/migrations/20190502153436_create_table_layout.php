<?php
class Migration_create_table_layout extends CI_Migration {
    public function __construct() {
		parent::__construct();
        $this->load->dbforge();
    }

    public function up() {
        $sql = "
        CREATE TABLE `layout` (
            `id_layout` int(11) NOT NULL PRIMARY KEY AUTO_INCREMENT,
            `url` varchar(255) NOT NULL,
            `name` varchar(255) NOT NULL
        )
        ";
        $this->db->query($sql);
    }

    public function down() {
        $sql = "
        DROP TABLE `layout`
        ";
        $this->db->query($sql);
    }
}
