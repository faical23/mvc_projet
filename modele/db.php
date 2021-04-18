<?php
include "../modele/connect.php";

    class CRUD extends DB{

    private $table;

    public function __construct($table){
        parent::__construct("login");
        $this->table = $table;
    }

      public function insert($element = []){
        $columns = "";
        $values_column = "";

        $elment_length =  count($element) -1 ;
        $i=0;
        foreach ($element as $key => $value) {
                if($i < $elment_length)
                {
                    $columns .="$key,";
                    $values_column .= "'$value',";
                }
                else{
                    $columns .="$key";
                    $values_column .= "'$value'";
                }
                $i++;
        }
        $sql = "INSERT INTO $this->table ($columns) VALUES ($values_column)"; 
        $stmt = $this->dbh->prepare($sql);
        $stmt = $this->dbh->exec($sql); ;
        return $stmt;
    }

    public function select($check = "",$conditions = []){
        $i = 0;
        $sql = "SELECT * FROM $this->table ";
        foreach ($conditions as $key => $value) {
            if($i == 0)
            {
                $sql .= "WHERE $key = '$value'";
            }
            else{
                $sql .= " AND $key = '$value'";
            }
            $i++;

        }
        $stmt = $this->dbh->prepare($sql);


        if($check == "yes")
        {
            $stmt = $this->dbh->query($sql); 
            $count = $stmt->rowCount();
            return $count;
        }
        else{
            $stmt->execute(); 
            $result = $stmt->fetchAll();
            return $result;
        }
    }

    public function delete($condition){

        $sql = "DELETE from $this->table WHERE id = $condition ";
        $stmt = $this->dbh->prepare($sql);
        $stmt->execute();
        return $stmt;
    }
}


