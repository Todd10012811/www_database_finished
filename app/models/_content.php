<?php
class _content{
    private $db;

    public function __construct() {
        $this->db = new Database;
    }

    public function title() {
        $this->db->query('SELECT * FROM Content ');
        return $this->db->resultSet();
    }
  
    public function paragraph() {
        $this->db->query('SELECT * FROM Content ');
        return $this->db->resultSet();
    }
    public function image(){
        $this->db->query('SELECT * FROM Images');
        return $this->db->resultSet();
    }

}