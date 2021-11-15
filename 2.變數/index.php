<?php

$name = 'Sam';
$age = 5 ;

// 1. 變數的命名用$開始，因為php和javascript都是弱型別，直譯式程式語言，不在一開始宣告變數型別
// 2. 字串的串接用. 或是用雙引號但裡面的變數可以用{}
// 3. 只能在<? php 裡面寫 php 語法
// 4. Superglobals 有 $GLOBALS,$_SERVER,$_GET,$_POST,$_FILES,$_COOKIE,$_SESSION...

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <p><?php echo '大家好，我叫 '. $name .', 今年'. $age. '歲！'; ?></p>
    <p><?php echo "大家好，我叫 {$name}, 今年{$age}歲！"; ?></p>
    <p><?php if ( $_GET['hobby'] ){ echo '興趣是 '. $_GET['hobby']; } ?></p>
    
    <!-- 因為不確定hobby有沒有值，所以加了php提供內建的function先判斷網址參數裡面有沒hobby -->
    <p><?php // if ( isset($_GET['hobby']) ){echo '興趣是 '. $_GET['hobby'];} ?></p>

</body>
</html>