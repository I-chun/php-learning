<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <ul>
        <li>
            <strong>Name:</strong> <?= $task['title']; ?>
        </li>
        <li>
            <strong>Due Date:</strong> <?= $task['due']; ?>
        </li>
        <li>
            <strong>Status:</strong>
            <?php if( $task['completed']) : ?>
                <span class='icon'>&#9989;</span>
            <?php else : ?>
                <span class='icon'>uncompleted</span>
            <?php endif; ?>
        </li>
    </ul>

</body>
</html>