<?php

/**
 * DRM is Mini  Framwork PHP
 *
 * @package    Drm
 * @version    1.0.2
 * @author     Drm Developer
 * @license    MIT License
 * @copyright  2021 Drm TEAM
 */

namespace Drm\Core\classes;

use PDO;
use Drm\Core\ver;

class Database
{
    private $host = dbhost;
    private $user = dbuser;
    private $pass = dbpass;
    private $db_name = dbname;
    private $dbdrive = dbdriver;

    private $dbh;
    private $stmt;

    public function __construct()
    {
        $dsn = $this->dbdrive . ':host=' . $this->host . ';dbname=' . $this->db_name;

        //Option
        $option = [
            PDO::ATTR_PERSISTENT => true,
            PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
        ];
        try {
            $this->dbh = new PDO($dsn, $this->user, $this->pass, $option);
        } catch (\PDOException $e) {
            die($e->getMessage());
        }
    }

    public function query($query)
    {
        $this->stmt = $this->dbh->prepare($query);
    }

    public function bind($param, $value, $type = null)
    {
        if (is_null($type)) {
            switch (true) {
                case is_int($value):
                    $type = PDO::PARAM_INT;
                    break;
                case is_bool($value):
                    $type = PDO::PARAM_INT;
                    break;
                case is_null($value):
                    $type = PDO::PARAM_NULL;
                    break;
                default:
                    $type = PDO::PARAM_STR;
            }
        }
        $this->stmt->bindValue($param, $value, $type);
    }
    public function execute()
    {
        $this->stmt->execute();
    }
    public function resultSet() //jika data yang dinginkan banyak
    {
        $this->execute();
        return $this->stmt->fetchAll(PDO::FETCH_ASSOC);
    }
    public function single() //jika data yang diinginkan satu
    {
        $this->execute();
        return $this->stmt->fetch(PDO::FETCH_ASSOC);
    }

    public function rowcount()
    {
        return $this->stmt->rowcount();
    }
    public static function version()
    {
        echo ver::ClassVer('database');
    }
}