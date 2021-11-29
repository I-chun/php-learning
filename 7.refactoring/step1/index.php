<?php 

// refactoring（重構）的定義就是：「在不改變軟體的外在行為之下，改善既有軟體的內部設計」
require 'database/Connection.php';
require 'database/QueryBuilder.php';

$pdo = Connection::make();

$query = new QueryBuilder($pdo);

$tasks = $query->selectAll('todos');

require 'index.view.php';