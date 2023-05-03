<?php

   class Post
   {
      public static $pdo;

      public $id;
      public $title;
      public $body;
      public $created_at;

      public static function getAll()
      {
         $sql = "SELECT * FROM posts";
         $stmt = self::$pdo->prepare($sql);
         $stmt->setFetchMode(PDO::FETCH_CLASS, 'Post');
         $stmt->execute(); 
         $posts = $stmt->fetchAll();

         return $posts;
      }

      public static function getById($id)
      {
         $sql = "SELECT * FROM posts WHERE id = ?";
         $stmt = self::$pdo->prepare($sql);
         $stmt->setFetchMode(PDO::FETCH_CLASS, 'Post');
         $stmt->execute([$id]); 
         $post = $stmt->fetch();

         return $post;
      } 

      public static function create($title, $body)
      {
         $sql = "INSERT INTO posts (title, body) VALUES (:title, :body)";
         $stmt = self::$pdo->prepare($sql);
         $stmt->execute([
            'title' => $title,
            'body' => $body
         ]);
         $row = $stmt->rowCount();
         return $row;
      }

      
   }
?>