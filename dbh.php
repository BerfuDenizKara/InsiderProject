<?php
  class Dbh {
  function connect(){
      try{
        $db = new PDO("mysql:host=localhost;dbname=db", "root", "");
        $db->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
      } catch(PDOException $e){
        echo $e->getMessage();
      }
      return $db;
    }
  }
?>
