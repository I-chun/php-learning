<?php 
 
require 'Task.php';
require 'function.php';

$pdo = connectToDB();

$tasks = fetchAllTasks($pdo);

require 'index.view.php';