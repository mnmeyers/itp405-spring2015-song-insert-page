<?php
error_reporting(-1);
class Database {
    private $host = 'itp460.usc.edu';
    private $dbname = 'music';
    private $user = 'student';
    private $password = 'ttrojan';
    protected static $pdo;//do this so you don't create multiple connections
    
    public function __construct()
    {
        if (!static::$pdo) { //if db connection not there, create one.
            $connectionString = "mysql:host=" . $this->host /*this syntax allows you to access the current instance instead of the local version which is what $host would do*/ . ";dbname=" . $this->dbname;
            static::$pdo = new PDO($connectionString, $this->user, $this->password);
        }
    }
}