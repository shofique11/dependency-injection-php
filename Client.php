<?php
require_once 'DB.php';
require_once 'Mysql.php';
require_once 'Postgresql.php';
 class Client{
    protected $db;
    public function __construct(ConntectionInterface $db)
    {
        $this->db = $db;
    }

    public function getConnection(){
        $this->db->connectionDB();
    }
 }

 $db1 = new Mysql();
 $client = new Client($db1);
 $client->getConnection();
 $db2 = new Postgresql();
 $client2 = new Client($db2);
 $client2->getConnection();
?>