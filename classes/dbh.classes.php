<?php

class Dbh
{
   protected function connect()
   {
      try {
         $username = "root";
         $password = "";
         $dbh = new PDO('mysql:host=localhost;dbname=users', $username, $password);
         return $dbh;
      } catch (PDOException $e) {
         print "Erorr!: " . $e->getMessage() . "<br/>";
         die();
      }
   }
}
