<?php
class Conexao extends PDO {

    private $engine;
    private $host;
    private $database;
    private $user;
    private $pass;

    public function __construct() {
        $this->engine = 'mysql';
        $this->host = 'br-cdbr-azure-south-b.cloudapp.net';
        $this->database = 'cloudqueudb';
        $this->user = 'b40322bf2960fb';
        $this->pass = 'c0e32bd2';
        $this->port = '3306';
        $dsn = "$this->engine:dbname=$this->database;host=$this->host;port=$this->port";
        parent::__construct($dsn, $this->user, $this->pass);
    }    
}
