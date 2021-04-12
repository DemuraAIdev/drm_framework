<?php
class absen_model
{
    private $table = 'user_absen'; //nama table database
    private $db;

    public function __construct()
    {
        $this->db = new Database;
    }
    public function getAllAbsen()
    {
        $this->db->query('SELECT * FROM ' . $this->table);
        return $this->db->resultSet();
    }
}