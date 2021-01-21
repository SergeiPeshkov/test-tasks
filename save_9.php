<?php
    $text = $_POST["text"];                                
    $pdo=new PDO ("mysql:host=localhost; dbname=my_project", "mysql", "mysql" );
    $sql= "INSERT INTO my_tablw (text) VALUES (:text)";
    $statement = $pdo->prepare($sql);
    $statement->execute(['text' => $text]);
    $users=$statement->fetchAll(PDO::FETCH_ASSOC);

    header ("location: /task_9.php");

  ?>

