<?php
class Connection{
    private $host="localhost";
    private $user="root";
    private $passwprd="Cs@1417317";
    private $db_name = "myapplication";
    public $connection;


    public function db_connection()
    {
        try
        {

            $this->connection = new PDO("mysql:host=$this->host;dbname=$this->db_name",$this->user,$this->passwprd);
           return $this->connection;
        }


        catch (PDOExecption $exception)
        {
            echo $exception->getMessage();
        }

    }
}
?>