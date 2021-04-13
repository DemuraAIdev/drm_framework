<?php

use Drm\Core\Database;

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
    public function getAbsenbyid($id)
    {
        $this->db->query('SELECT * FROM ' . $this->table . ' WHERE id=:id');
        $this->db->bind('id', $id);
        return $this->db->single();
    }

    public function tambahdatauser($data)
    {
        $query = "INSERT INTO user_absen
                            VALUES
                        ('', :nama, :no, :email)";
        $this->db->query($query);
        $this->db->bind('nama', $data['nama']);
        $this->db->bind('no', $data['no']);
        $this->db->bind('email', $data['email']);

        $this->db->execute();

        return $this->db->rowcount();
    }
}