<?php

use Drm\Core\Database;
use Drm\Core\classes\logs;

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

        logs::log("Berhasil Menambah User"  . PHP_EOL .
            "Nama :{$data['nama']}" . PHP_EOL .
            "No Absen :{$data['no']}" . PHP_EOL .
            "email :{$data['email']}" . PHP_EOL .
            date("F j, Y, g:i a") . PHP_EOL .
            "-------------------------" . PHP_EOL, 'User');



        return $this->db->rowcount();
    }
    public function hapusdatauser($id)
    {
        $query = "DELETE FROM user_absen WHERE id = :id";
        $this->db->query($query);
        $this->db->bind('id', $id);
        $this->db->execute();

        logs::log("Berhasil Menghapus User"  . PHP_EOL .
            "id :{$id}" . PHP_EOL .
            date("F j, Y, g:i a") . PHP_EOL .
            "-------------------------" . PHP_EOL, 'User');

        return $this->db->rowcount();
    }


    public function ubahdatauser($data)
    {
        $query = "UPDATE user_absen SET
                            nama = :nama,
                            no = :no,
                            email = :email
                        WHERE id = :id";
        $this->db->query($query);
        $this->db->bind('nama', $data['nama']);
        $this->db->bind('no', $data['no']);
        $this->db->bind('email', $data['email']);
        $this->db->bind('id', $data['id']);

        $this->db->execute();

        logs::log("Berhasil Ubah User"  . PHP_EOL .
            "Nama :{$data['nama']}" . PHP_EOL .
            "No Absen :{$data['no']}" . PHP_EOL .
            "email :{$data['email']}" . PHP_EOL .
            date("F j, Y, g:i a") . PHP_EOL .
            "-------------------------" . PHP_EOL, 'User');


        return $this->db->rowcount();
    }
}