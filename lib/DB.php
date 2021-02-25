<?php

class DB{
    public $SERVER_NAME='localhost';
    public $DB_USER_NAME='root';
    public $PASSWORD='sangi2529';
    public $DB_NAME='practice_test';
    protected $connection;

    public function __construct(){
        $this->connect();
    }
    public function connect()
    {
        $this->connection = new mysqli($this->SERVER_NAME, $this->DB_USER_NAME, $this->PASSWORD, $this->DB_NAME);

        if($this->connection->connect_error){
            return false;
        }
            return true;
    }
    public  function insertTask($task){

        $query = "INSERT INTO tasks(task) VALUES('${task}')";
        if($this->connection->query($query)==false){
            return false;
        }
        return true;
    }
    public function executeQuery($query)
    {
        if($this->connection->query($query)==false){
            die('Something went wrong'.$this->connection->error);
        }
        return $this->connection->query($query);
    }
    public function __destruct(){
        $this->connection->close();
    }

}