
<?php

class Connection
{
    /* Properties */
    private $conn;
    private $dsn = 'mysql:dbname=zondimo;host=localhost';
    private $user = 'root';
    private $password = '';
    /*database connection */
    public function __construct()
    {
        try {
            $this->conn= new PDO($this->dsn, $this->user, $this->password);
            //  echo "Connected successfully";
        } catch (PDOException $e) {
            echo "Connection failed: " . $e->getMessage();
            die();
        }
    //    return $this->conn;
    }

    public function getDb() {
        if ($this->conn instanceof PDO) {
            return $this->conn;
        }
    }

}