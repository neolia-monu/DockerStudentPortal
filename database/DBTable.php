<?php

  class DBTable {

    private $table;

    public function __construct($conn){
        $this->table = $conn;
    }

    public function getAll(){

      try{
        $sql = "SELECT * FROM timetable";

        $result = $this->table->query($sql);

        // $result = $this->table->fetch(PDO::FETCH_ASSOC);

        return $result;

        // print_r($result);
      }
      catch(PDOException $e){
        echo $e->getMessage();
        return false;
      }
    }

    public function getOne(){
      try{
        $sql = "SELECT * FROM timetable WHERE ind = 3";

        $result = $this->table->query($sql);

        return $result;

      }catch(PDOException $e){
        echo $e->getMessage();
        return false;
      }
    }

  }
 ?>
