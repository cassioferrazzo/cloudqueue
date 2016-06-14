<?php
class Conexao extends PDO {

    private $engine;
    private $host;
    private $database;
    private $user;
    private $pass;

    public function __construct() {
        $this->engine = 'mysql';
        $this->host = 'localhost';
        $this->database = 'cloudqueue';
        $this->user = 'root';
        $this->pass = 'root';
        $this->port = 'root';
        $dsn = "$this->engine:dbname=$this->database;host=$this->host;port=$this->port";
        parent::__construct($dsn, $this->user, $this->pass);
    }    
}
