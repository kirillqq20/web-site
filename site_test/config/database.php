<?php
class Database
{
    private $host = 'cobra_database';
    private $db_name = 'test_db';
    private $username = 'root';
    private $password = '';
    public $conn;

    public function getConnection()
    {
        $this->conn = null;

        try {
            $this->conn = new PDO('mysql:host = ' . $this->host . '; db_name = ' . $this->db_name, $this->username, $this->password);
            $this->conn->exec('set names utf-8');
        } catch (PDOException $exception) {
            echo 'Connection error : ' . $exception->getMessage();
        }
        return $this->conn;
    }
}
?>