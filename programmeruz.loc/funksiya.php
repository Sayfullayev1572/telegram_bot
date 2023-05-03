<?php
     function query($sql)
     {
         global $connection;
     
         return $connection->query($sql);
     }
     
     function fetchAll($obj)
     {
         $data = [];
         while($row = $obj->fetch_assoc()){
             $data[] = $row;
         }
     
         return $data;
     }
     
     function getAllUsers()
     {
         $sql = "SELECT * FROM jadval";
     
         $object = query($sql);
     
         return fetchAll($object);
     }
?>