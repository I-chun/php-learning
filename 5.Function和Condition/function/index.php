<?PHP

// 重複利用的東西就會用function
function welcome($name = null){
    echo "welcome $name\n";
}
    
welcome("Jett");// output : welcome Jett

// 不同狀況做不同的事時可用condition
$gender = 'male';

if( $gender === 'male' ){
    echo "男生";
}else if( $gender === 'female' ){
    echo "女生";
}else{
    echo "性別開放";
}

?>