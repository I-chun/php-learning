<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <!-- echo 的另一種寫法?= -->
    <ul>
        <?php // foreach( $person as $feature ) : ?> 
        <?php foreach( $person as $key => $value ) : ?> 
            <li><strong><?= $key ?></strong> - <?= $value ?></li> 
        <?php endforeach; ?>
    </ul>

</body>
</html>