<?php

function connectToDB(){
    try{
        return new PDO('mysql:host=127.0.0.1;dbname=mytodo', 'root', 'root');
    } catch (PDOException $e){
        die($e->getMessage());
    }
}

function fetchAllTasks($pdo){

    $statement = $pdo->prepare('SELECT * FROM todos');
    $statement->execute();    
    // $tasks = $statement->fetchAll(PDO::FETCH_OBJ);
    return $statement->fetchAll(PDO::FETCH_OBJ);    
    // return $statement->fetchAll(PDO::FETCH_ASSOC);
    // return $statement->fetchAll(PDO::FETCH_CLASS, 'Task');
}
