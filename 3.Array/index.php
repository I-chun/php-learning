<?php 
    $animals = ['dog', 'cat'];

    // 關聯式array
    $person = [
        'name' => 'Sam',
        'age' => 21,
        'hair' => 'brown',
        'career' => 'web developer'
    ];


    // 新增資料到array
    $animals[] = 'lion';
    // echo($animals);
    var_dump($animals);

    $person['height'] = 180;
    var_dump($person);

    unset($person['hair']);
    var_dump($person);

    require 'index.view.php';
?>